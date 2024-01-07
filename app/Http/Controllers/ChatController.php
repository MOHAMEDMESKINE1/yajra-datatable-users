<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
   // public function chatForm($user_id){
    
   // }
   public function sendMessage(Request $request){
     
      event(new Message(

         $request->input("username"),
         $request->input("message"))
      );

      return ["success"=>true];
   }
}
