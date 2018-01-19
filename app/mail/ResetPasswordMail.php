<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ResetPasswordMail extends Mailable {

    /**
     * Build the message.
     *
     * @return $this
     */
    protected $token;

    public function __construct($token) {
        $this->token = $token;
    }

    public function build() {
        return $this->view('ResetPasswordMailTemplate')->with([
                    'token' => $this->token
        ]);
        ;
    }

}
