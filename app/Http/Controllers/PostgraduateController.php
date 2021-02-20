<?php

namespace App\Http\Controllers;

use App\Postgraduate;
use Illuminate\Http\Request;
use App\user;
use Auth;
use DB;
class PostgraduateController extends Controller
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
        $estudiospost = DB::table('postgraduates')
                ->where('graduated_id', '=', $user->id)
                ->get();
        return view('Egresado.postgrado', compact('estudiospost'));
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
        $postgraduate = new Postgraduate;
        $postgraduate->graduated_id = $request->user()->id;
        $postgraduate->type = $request->type;
        $postgraduate->activity_name = $request->activity_name;
        $postgraduate->description = $request->description;
        $postgraduate->institution = $request->institution;
        $postgraduate->document = $request->document;
        $postgraduate->start_date = $request->start_date;
        $postgraduate->end_date = $request->end_date;
        $postgraduate->save();
        return redirect()->route('postgraduates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postgraduate  $postgraduate
     * @return \Illuminate\Http\Response
     */
    public function show(Postgraduate $postgraduate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postgraduate  $postgraduate
     * @return \Illuminate\Http\Response
     */
    public function edit(Postgraduate $postgraduate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postgraduate  $postgraduate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postgraduate $postgraduate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postgraduate  $postgraduate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postgraduate $postgraduate)
    {
        //
    }
}
