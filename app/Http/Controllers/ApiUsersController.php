<?php

/**
 * throwIt
 * ThrowIt Api 
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Users;
use Symfony\Component\HttpFoundation\Cookie;

class ApiUsersController extends Controller {

    /**
     * Constructor
     */
    public function __construct() {
        
    }

    public function login(Request $request) {

        $this->validate($request, [

            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        $user = Users::where('Email', $request->input('email'))->first();

        if (Hash::check($request->input('password'), $user->Password)) {

            $apikey = base64_encode(str_random(40));

            Users::where('Email', $request->input('email'))->update(['api_key' => $apikey, 'LastConnectionDate' => now()]);
            $response = new Response();
            $cookie = new Cookie("connect.sid", $apikey);

            return response()->json(['status' => 'success', 'api_key' => $apikey])->withCookie($cookie);
        } else {
            return response('Authetification Fail', API_UNAUTHORIZED);
        }
    }

    /**
     * Operation firstStepPost
     *
     * User first step.
     *
     *
     * @return Http response
     */
    public function firstStepPost() {
        $input = Request::all();

        //path params validation
        //not path params validation
        $email = $input['email'];


        return response('How about implementing firstStepPost as a POST method ?');
    }

    /**
     * Operation registrationPost
     *
     * User registration.
     *
     *
     * @return Http response
     */
    public function registrationPost() {
        $input = Request::all();

        //path params validation
        //not path params validation
        $user = $input['user'];


        return response('How about implementing registrationPost as a POST method ?');
    }

}
