<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use App\user;
use Auth;
use DB;
class JobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::findorfail(Auth::user()->id);
        $empleos  = DB::table('jobs')
                ->where('graduated_id', '=', $user->id)
                ->get();
        return view('Egresado.empleos', compact('empleos'));
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
        $job = new Job;
        $job->graduated_id = $request->user()->id;
        $job->institution = $request->intitution;
        $job->activity_name = $request->activity_name;
        $job->position = $request->position;
        $job->institution_type = $request->institution_type;
        $job->institution_heading = $request->institution_heading;
        $job->description = $request->description;
        $job->start_date = $request->start_date;
        $job->end_date = $request->end_date;
        $job->save();
        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
