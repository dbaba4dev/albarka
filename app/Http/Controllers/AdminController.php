<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    /*
     *
     */
    public function login(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $data = $request->input();
            if (Auth::attempt(['username'=>$data['username'], 'password'=>$data['password'], 'role'=>'admin']))
            {
                Session::put('adminSession', $data['username']);

                $notification = array(
                    'message' => 'You are Logged in.',
                    'alert-type' => 'success'
                );
                return redirect()->route('admin.dashboard')->with($notification);
            }else
            {
                return redirect()->route('admin.login')->with('error','Invalid Credentials, check your username or/and password and try again.');
            }
        }
        return view('login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }


    public function adminSettings()
    {
//        dd(\auth()->user()->admin->employee);
        $page_title = 'Admin Settings';
        $page_description = 'Update Password, ...';
        return view('admin.settings', compact('page_title', 'page_description'));
    }


    public function updatePassword(Request $request)
    {
        if ($request->isMethod('Post')){
            $data = $request->all();
            $check_password = User::where(['email'=>Auth::user()->email])->first();
            $current_pass = $data['current_password'];
            if (Hash::check($current_pass, $check_password->password))
            {
                $password = bcrypt($data['password']);
                $check_password->password = $password;
                $check_password->save();

                $notification = array(
                    'message' => 'Password Updated Successful!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }else
            {
                $notification = array(
                    'message' => 'Current Password is Incorrect',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }

        }
    }

    public function chkPassword(Request $request)
    {
        $data = $request->all();
        $current_pass = $data['current_pass'];
        $check_password = User::where(['role'=>'admin'])->first();
        if (Hash::check($current_pass, $check_password->password))
        {
            echo 'true'; die;
        }else
        {
            echo 'false'; die;
        }
    }

    public function logout()
    {
        Session::flush();
        $notification = array(
            'message' => 'You are Logged out Successful!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.login')->with($notification);
    }
}
