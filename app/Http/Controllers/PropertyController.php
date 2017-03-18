<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function addProperty()
    {
        return view('admin/properties/add_property');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageProperty()
    {
        $selectProperty = DB::table('property')->get();
        return view('admin/properties/manage_property')
            ->with('listProperties',$selectProperty);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveProperty(Request $request)
    {
        $saveProperty = DB::table('property')->insert(['address'=>$request->get('address')]);
        if($saveProperty>0)
        {
            return Redirect::to('/manage-property')->send();
        }
    }
}
