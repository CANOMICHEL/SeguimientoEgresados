<?php

namespace App\Http\Controllers;

use App\Investigation;
use Illuminate\Http\Request;
use App\user;
use Auth;
use DB;
class InvestigationController extends Controller
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
        $investigaciones = DB::table('investigations')
                ->where('graduated_id', '=', $user->id)
                ->get();
        return view('egresado.investigations', compact('investigaciones'));
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
        $investigation = new Investigation;
        $investigation->graduated_id = $request->user()->id;
        $investigation->type = $request->type;
        $investigation->draft_name = $request->draft_name;
        $investigation->description = $request->description;
        $investigation->institution = $request->institution;
        $investigation->date = $request->date;
        $investigation->save();
        return redirect()->route('investigations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function show(Investigation $investigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigation $investigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $investigation = Investigation::find($id);
        $investigation->graduated_id = $request->user()->id;
        $investigation->type = $request->type;
        $investigation->draft_name = $request->draft_name;
        $investigation->description = $request->description;
        $investigation->institution = $request->institution;
        $investigation->date = $request->date;
        $investigation->save();
        return redirect()->route('investigations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigation $investigation)
    {
        //
    }
}
