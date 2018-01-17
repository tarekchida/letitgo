<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers;

class Json {

    public static function response($data = null, $message = null) {
        return [
            'data' => $data,
            'message' => $message,
        ];
    }

}
