<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function telegram(){
//        return Telegram::getUpdates();
        Telegram::sendMessage([
            'chat_id','',
            'text','به ربات تلگرام خوش آمدید'
        ]);
    }
}
