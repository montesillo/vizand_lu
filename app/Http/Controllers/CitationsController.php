<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Client;

class CitationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_client = '';
        if (isset($_GET['cita'])) {
            $id = $_GET['id_client'];
        }

         $client = Client::find($id);

        return view("clients/citation", ["client" => $client]);
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
        $citation = new Evento;
        $datestart = $request->start;
        $timestart = $request->timestart;
        $start = $datestart.' '.$timestart;
        $dateend = $request->start;
        $timeend = $request->timeend;
        $end = $dateend.' '.$timeend;
        $citation->title = $request->service;
        $citation->description = $request->client;
        $citation->color='#DF3636';
        $citation->textcolor='#FFFFFF';
        $citation->start = $start;
        $citation->end = $end;

        $citation->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $evento = Evento::find($request);
        
        $evento->delete();
        return redirect("/");
    }
}
