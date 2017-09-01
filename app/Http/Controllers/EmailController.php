<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller {

  public function postSendEmail(Request $request) {

    $name = $request['name'];
    $email = $request['email'];
    $text = $request['message'];
    
    \Mail::send('emails.feedbackmail', array(
      'name' => $name,
      'email' => $email,
      'text' => $text
    ), function($message) {
      $message->to('info@selflaboratory.ru', 'Vladislava Stalnova')->subject('Selflab request');
    });

    return redirect()->route('home');
  }

}