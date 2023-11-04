<?php

namespace App\Http\Controllers;

use App\Models\Irfan;
use Illuminate\Http\Request;
/** */
class IrfanController extends Controller
{
    public function getDataMovie(){
        $movieData = Irfan::all();
        return view('master.home')->with(compact('movieData'));
    }
    public function getDataMovieById($id){
        $movie = Irfan::find($id);
        return view('master.detail')->with(compact('movie'));
    }
}
