<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function addContractor()
    {
        return view('admin/contractors/add_contractors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageContractor()
    {
        $selectContractor = DB::table('contractors')->get();
        return view('admin/contractors/manage_contractors')
                            ->with('listContractors',$selectContractor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveContractor(Request $request)
    {
            $saveContractor = DB::table('contractors')->insert(['contractorName'=>$request->get('contractorName')]);
        if($saveContractor>0)
        {
            return Redirect::to('/manage-contractors')->send();
        }
    }
}
