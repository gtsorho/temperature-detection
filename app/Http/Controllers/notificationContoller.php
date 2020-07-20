<?php

namespace App\Http\Controllers;

use App\User;
use App\notification;
use Illuminate\Http\Request;
use App\Notifications\tempAlert;

class notificationContoller extends Controller
{
    public function store(Request $request){
    $notification = notification::create(request(['temperature'])); 
    if (request('temperature') >= 40 ){
        
        $User = User::first();
        $temp = request(['temperature']);
        // dd($temp['temperature']);
        $User->notify(new tempAlert($temp['temperature']));

    }

    }
}
