<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;


class JobsController extends Controller
{

    public function addJobs()
    {

        $contractor = DB::table('contractors')->get();
        $property = DB::table('property')->get();
        return view('admin/jobs/add_jobs')
            ->with('property',$property)
            ->with('contractor',$contractor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageJobs()
    {
        $selectJobs = DB::table('jobs')->get();
        return view('admin/jobs/manage_jobs')
            ->with('listJobs',$selectJobs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveJobs(Request $request)
    {



        $this->validate($request, [
            'propertyAddress' => 'required',
            'contractorName' => 'required',
            'jobDescription' => 'required',
            'dateline' => 'required',
            'budget' => 'required',
        ]);



        $save = array();

        $save['propertyAddress'] = $request->get('propertyAddress');
        $save['contractorName'] = $request->get('contractorName');
        $save['jobDescription'] = $request->get('jobDescription');
        $save['dateline'] = $request->get('dateline');
        $save['budget'] = $request->get('budget');
        $save['status'] = "pending";
        $save['created_at'] = date("Y-m-d"); ;

        $saveJobs = DB::table('jobs')->insert($save);
        if($saveJobs>0)
        {
            return Redirect::to('/manage-jobs')->send();
        }
    }
}
