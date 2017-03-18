<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function addUser()
    {
        return view('admin/users/add_users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageUser()
    {
        $selectUsers = DB::table('users')->get();
        return view('admin/users/manage_users')
            ->with('listUsers',$selectUsers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveUser(Request $request)
    {

        $save = array();

        $save['userName'] = $request->get('userName');
        $save['address'] = $request->get('address');
        $save['password'] = md5($request->get('password'));
        $save['role'] = $request->get('role');
        $save['name'] = $request->get('name');

        $saveUser = DB::table('users')->insert($save);
        if($saveUser>0)
        {
            return Redirect::to('/manage-users')->send();
        }
    }
}
