<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $partner = Partner::where('status','1')->orderBy('level', 'ASC')->limit(8)->get();
        //dd($partner);
        return view('home/home',compact('partner'));
    }

    public function parnerliste(){
        $partner = Partner::where('status','1')->orderBy('level', 'ASC')->paginate(8);
        return view('home/partnerlist',compact('partner'));
    }


    public function partnercount(){

    }


}
