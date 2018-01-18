<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Password Reset Controller
      |--------------------------------------------------------------------------
      |
      | This controller is responsible for handling password reset emails and
      | includes a trait which assists in sending these notifications from
      | your application to your users. Feel free to explore this trait.
      |
     */

use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getResetToken(Request $request) {
        $this->validate($request, ['email' => 'required|email']);

        if ($request->wantsJson()) {

            $user = Users::where('email', $request->input('email'))->first();

            if (!$user) {
                return response(trans('user.notfound'), API_NOT_FOUND);
            }

            //Generate token 
            $token = str_random(64);
            Users::where('Email', $request->input('email'))->update(['token' => $token]);

            //Send mail to User
            Mail::to(['tarek.chida@gmail.com'])->send(new ResetPasswordMail($token));

            return response(trans('mail.sent'));
        }
    }

}
