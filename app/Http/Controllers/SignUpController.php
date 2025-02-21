<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;

class SignUpController extends Controller
{
    // Hiển thị form
    public function index()
    {
        return view('signup');
    }

    // Xử lý form khi submit
    public function displayInfor(SignUpRequest $request)
    {
        $user = [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'web' => $request->input('web'),
            'address' => $request->input('address'),
        ];

        return view('signup')->with('user', $user);
    }
}

