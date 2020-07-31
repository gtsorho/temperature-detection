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
        $Users = User::all();
        $temp = request(['temperature']);
        Notification::send($Users, new tempAlert($temp['temperature']));
        // $User->notify(new tempAlert($temp['temperature']));
    }

    }
}
