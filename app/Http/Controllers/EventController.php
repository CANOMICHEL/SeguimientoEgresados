<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\user;
use Auth;
use DB;
class EventController extends Controller
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
        $eventos = DB::table('events')
                ->where('graduated_id', '=', $user->id)
                ->get();
        return view('Egresado.eventos', compact('eventos'));
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
        $event = new Event;
        $event->graduated_id = $request->user()->id;
        $event->type = $request->type;
        $event->event_name = $request->event_name;
        $event->condition = $request->condition;
        $event->description = $request->description;
        $event->institution = $request->institution;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->save();
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->graduated_id = $request->user()->id;
        $event->type = $request->type;
        $event->event_name = $request->event_name;
        $event->condition = $request->condition;
        $event->description = $request->description;
        $event->institution = $request->institution;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->save();
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
