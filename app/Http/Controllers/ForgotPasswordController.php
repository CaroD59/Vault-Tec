<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
  public function getEmail()
  {

    return view('emails.email');
  }

  public function postEmail(Request $request)
  {
    $request->validate([
      'email' => 'required|email|exists:users',
    ]);

    $bytes = random_bytes(strlen($request->email));
    $hex   = bin2hex($bytes);

    $token = time() . 'n' . $hex;

    DB::table('password_resets')->insert(
      ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
    );

    Mail::send('emails.verify', ['token' => $token], function ($message) use ($request) {
      $message->to($request->email);
      $message->subject('Reset Password Notification');
    });

    return back()->with('message', 'We have e-mailed your password reset link!');
  }
}
