<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function index(){

       $clients=Client::all();
        return $clients->toJson();
        //return view('InsertClient',['title'=>'lsdfjsldfjkl']);
    }

}
