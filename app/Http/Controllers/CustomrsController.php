<?php

namespace App\Http\Controllers;

use App\Models\Flights_costumer;
use Illuminate\Http\Request;
use Auth;

class CustomrsController extends Controller
{
    public function index(){
        $customers=Flights_costumer::all();
        $user=Auth::user()->get();
        return response()->json([
         'cts'=>$customers,
         'user'=>$user
        ]);

    }
    public function destory($id){
        $customers=Flights_costumer::find($id);
        $customers->delete();
        return response()->json([
            'etat'=>true
        ]);
    }
}