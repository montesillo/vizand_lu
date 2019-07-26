<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stylist;
use App\Service;
use App\Categorie;

class ImpromptuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_client = '';
        if (isset($_GET['client'])) {
            $id_client = $_GET['id_client'];
        }

        $stylists = Stylist::all();
        $categories = Categorie::all();
        return view("clients/impromptu", ["id_client" => $id_client, "stylists" => $stylists, "categories" => $categories]);
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
        $service = new Service;

        $service->cost = $request->cost;
        $service->stylist = $request->stylist;
        $service->id_client = 0;
        $service->descript = $request->descript;
        $service->img = 0;
        if (empty($service->descript)) {
            $service->descript = "Sin descripción del servicio";
        }
         $service->date = $request->date;
        $service->save();
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
        //
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
