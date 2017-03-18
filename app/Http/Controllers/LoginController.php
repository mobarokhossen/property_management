<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;




class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('login');
    }


    public function login(Request $request)
    {

        $this->validate($request, [
            'userName' => 'required',
            'password' => 'required',
        ]);



        $user = new User;

        $user->userName = $request->get('userName');
        $user->password = md5($request->get('password'));

        $loginCheck  = User::select('*')
                            ->where('userName', $user->userName)
                            ->where('password', $user->password)
                            ->first();
        if($loginCheck)
        {
            if($loginCheck->role="admin"){

               Session::put('userName', $loginCheck->userName);
               Session::put('role', $loginCheck->role);

                return view('admin.dashboard');

            }elseif($loginCheck->role="contractor") {

               Session::put('userName', $loginCheck->userName);
               Session::put('role', $loginCheck->role);
                return redirect::to('/jobs')->send();
            }
        }else{
           Session::flash('login_fail', 'Please Try Again');
            return view('login');
        }

    }

    public function logout()
    {
        if(Session::has('role')&&Session::has('userName'))
        {
                return redirect()->back();
        }else{
            return redirect::to('/');
        }
    }


}
