<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup(){
        return view('user.Register');
    }
    public function signups(Request $request){
        $firstName = $request->get('firstname');
        $lastName = $request->get('lastname');
        $country = $request->get('country');
        return $firstName . ' ' . $lastName . ' ' . $country;
    }
    public function login(){
        return view('user.Login');
    }
    public function logins(Request $requests)
    {
        $fullName = $requests->get('fullName');
        $email = $requests->get('email');
        $phone = $requests->get('phone');
        $address = $requests->get('address');
        $identityCard = $requests->get('identityCard');
        return view('user.Login-success',
            ['fullName' => $fullName,
             'email' => $email,
             'phone' => $phone,
             'address' => $address,
             'identityCard' => $identityCard]);
    }

    public function getUserDetail($id)
    {
        return 'hello path' . $id;
    }
}
