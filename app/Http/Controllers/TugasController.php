<?php

namespace App\Http\Controllers;

use Auth; 
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function tugas() {
        $data = "Data All";
        return response()->json($data, 200);
    }
    public function tugasAuth() {
        $data = "Welcome" . Auth::user()->name;
        return response ()->json($data, 200);
    }    
}