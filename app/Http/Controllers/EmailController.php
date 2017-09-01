<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller {

  public function postSendEmail(Request $request) {

    $name = test_input($request['name'], 1);
    $email = test_input($request['email'], 1);
    $text = test_input($request['message'], 0);
    
    \Mail::send('emails.feedbackmail', array(
      'name' => $name,
      'email' => $email,
      'text' => $text
    ), function($message) {
      $message->to('anton.fakhr@gmail.com', 'Vladislava Stalnova')->subject('Selflab request');
    });

    return redirect()->route('home');
  }

}

function test_input($data, $type) {
  if($type) { $data = trim($data); $data = stripslashes($data); }
  $data = htmlspecialchars($data);
  return $data;
}