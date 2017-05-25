<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\welcome;
use App\User;

class RegistrationController extends Controller
{

    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
        $user = User::create([
                'name'     => request('name'),
                'email'    => request('email'),
                'password' => bcrypt(request('password')),
            ]
        );

        auth()->login($user);
        \Mail::to($user)->send(new welcome($user));
        flash('Message')->success();

        return redirect()->home();
    }
}
