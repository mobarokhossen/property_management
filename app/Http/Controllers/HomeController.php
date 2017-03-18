<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;


class JobsController extends Controller
{
    public function manageJobs()
    {
        $selectJobs = DB::table('jobs')->get();
        return view('admin/jobs/manage_jobs')
            ->with('listJobs',$selectJobs);
    }

   
}
