<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'resnumber',
        'price',
        'course_id',
        'payment'
    ];
    public function scopeSpanningPayment($query , $month , $payment) {
        $query->selectRaw('monthname(created_at) month , count(*) published')
            ->where('created_at' , '>' , Carbon::now()->subMonth($month))
            ->wherePayment($payment)
            ->groupBy('month')
            ->latest();
    }
}
