<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Service;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchname = '';
        $searchlastname = '';
        $birthdate = '';

        if (isset($_GET['seach'])) {
            $searchname = $_GET['searchname'];
            $searchlastname = $_GET['searchlastname'];
        }else if(isset($_GET['birthdate'])){
            $birthdate = date("m-d");
        }

        $clients = Client::orderBy('name_client')
        ->where('name_client', 'LIKE', '%'.$searchname.'%')
        ->where('lastname_client', 'LIKE', '%'.$searchlastname.'%')
        ->where('birthdate', 'LIKE', '%'.$birthdate.'%')
        ->get();

        return view("clients/clients", ["clients" => $clients]);


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
        $client = new Client;

        $client->name_client = $request->name_client;
        $client->lastname_client = $request->lastname_client;
        $client->email = $request->email;
        $client->tel = $request->tel;
        $client->birthdate = $request->birthdate;

        if (empty($client->email)) {
            $client->email = "sin@email.com";
        }
        if (empty($client->tel)) {
            $client->tel = "55";
        }
        if (empty($client->birthdate)) {
            $client->birthdate ="No se coloco fecha";
        }

        $client->save();
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
     $client = Client::find($id);
         $services = Service::orderBy('id')
         ->where('id_client', '=', $id)
         ->get();
        
        return view("clients.edit", ["client" => $client, "services" => $services]);
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
         $client = Client::find($id);

        $client->name_client = $request->name_client;
        $client->lastname_client = $request->lastname_client;
        $client->email = $request->email;
        $client->tel = $request->tel;
        $client->birthdate = $request->birthdate;

        if (empty($client->email)) {
            $client->email = "sin@email.com";
        }
        if (empty($client->tel)) {
            $client->tel = "55";
        }
        if (empty($client->birthdate)) {
            $client->birthdate ="No se coloco fecha";
        }
        $client->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect("/");
    }
}
