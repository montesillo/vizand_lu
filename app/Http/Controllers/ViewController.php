<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Service;
use App\Categorie;
use App\Evento;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
          $dates = date("Y-m-d");
          $tipe = '';
        if (isset($_GET['date'])) {
            $dates = $_GET['date'];
        }else{
            if (isset($_GET['mes'])) {
               $dates = $_GET['mes'];
            }
        }

        $dates = Service::orderBy('created_at')
        ->where('date', 'LIKE', '%'.$dates.'%')
        ->get();

        $categories = Categorie::all();
    
        return view("date/searchservice", ["dates" => $dates, "categories" => $categories]);
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
        $id = $request->id;
        $citation = Evento::find($id);
        
        $citation->color = '#43F413';

        $citation->save();
        return redirect("calendar");
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
         $client = Client::find($id);
         $services = Service::orderBy('id')
         ->where('id_client', '=', $id)
         ->get();
        
        return view("clients.service", ["client" => $client, "services" => $services]);
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
    public function destroy($id)
    {
        //
    }
}
