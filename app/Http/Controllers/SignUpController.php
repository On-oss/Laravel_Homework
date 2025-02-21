<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Session;

class SignUpController extends Controller
{
    // Hiển thị form
    public function index()
    {
        return view('signup');
    }


    public function store(Request $request)
    {
        // Validate dữ liệu nhập vào
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'age' => 'required|integer|min:1',
            'date' => 'required|date',
            'phone' => 'required|digits:10',
            'web' => 'nullable|url',
            'address' => 'required'
        ]);

        // Lưu dữ liệu vào session (nếu cần)
        $users = session()->get('users', []);
        $users[] = $validatedData;
        session()->put('users', $users);

        // Chuyển hướng lại form với dữ liệu cũ
        return redirect()->back()->withInput();
    }


    // Xử lý form khi submit + Hiển thị thông tin của 1 user: 
    // public function displayInfor(SignUpRequest $request)
    // {
    //     $user = [
    //         'name' => $request->input('name'),
    //         'age' => $request->input('age'),
    //         'date' => $request->input('date'),
    //         'phone' => $request->input('phone'),
    //         'web' => $request->input('web'),
    //         'address' => $request->input('address'),
    //     ];

    //     return view('signup')->with('user', $user);
    // }




    //Dùng Session để lưu thông tin nhiều User:
    public function displayInfor(Request $request)
    {
        // Lấy danh sách user từ session (nếu có)
        $users = Session::get('users', []);

        // Thêm user mới vào danh sách
        $newUser = [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'web' => $request->input('web'),
            'address' => $request->input('address'),
        ];
        $users[] = $newUser; // Thêm user vào mảng

        // Lưu danh sách user vào session
        Session::put('users', $users);

        return view('signUp')->with('users', $users);
    }

}

