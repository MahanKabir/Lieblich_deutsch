<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use Illuminate\Http\Request;
use SoapClient;

class CourseController extends Controller
{
    protected $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'; //Required
    public function payment(){
        $this->validate(request(),[
            'course_id'=>'required',
        ]);
        $course=Course::findOrFail('course_id');
        if($course->price==0 && $course->type=='vip'){
            alert()->error('این دوره قابل خرید توسط شما نیست.','دقت کنید')->persistent('خیلی خوب');
        }

        $price=$course->price;

        $Description = 'توضیحات تراکنش تستی'; // Required
        $Email =auth()->user()->email; // Optional
        $CallbackURL = 'http://localhost:8000/course/payment/check'; // Required


        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
            [
                'MerchantID' => $this->MerchantID,
                'Amount' => $price,
                'Description' => $Description,
                'Email' => $Email,
                'CallbackURL' => $CallbackURL,
            ]
        );

        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {

            auth()->user()->payments()->create([
                'resnumber'=>$result->Authority,
                'price'=>$price,
                'course_id'=>$course->id
            ]);
            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
        } else {
            echo'ERR: '.$result->Status;
        }
    }



    public function checker(){
        $Authority=request('Authority');

        $payment=Payment::whereResnumber($Authority)->firstOrFail();
        $course=Course::findOrFail($payment->course_id);
        if (request('Status') == 'OK') {

            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $this->MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $payment->price,
                ]
            );
            if ($result->Status == 100) {
                if($this->AddUserForLearning($payment,$course)){
                    alert()->success('عملیات مورد نظر با موفقیت انجام شد.','با تشکر');
                    return redirect($course->path());
                }

            } else {
                echo 'Transaction failed. Status:'.$result->Status;
            }

        }else {
            echo 'Transaction canceled by user';
        }
    }

    protected function AddUserForLearning($payment,$course){
        $payment->update([
            'payment'=>1
        ]);
        Learning::class([
            'user_id'=>auth()->user()->id,
            'course_id'=>$course->id
        ]);
        return true;
    }
}
