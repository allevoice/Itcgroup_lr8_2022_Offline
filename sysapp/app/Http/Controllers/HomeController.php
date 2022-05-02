<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $partner = $this->partner();
        //dd($partner);
        return view('home/home',compact('partner'));
    }

    public function parnerliste(){
        $partner = $this->partnerlistedata();
        return view('home/partnerlist',compact('partner'));
    }



    public function partner(){
        $viewpartner = Partner::where('status','1')->orderBy('level', 'desc')->limit(8)->get();
        return $viewpartner;
    }

    public function partnerlistedata(){
        $partnerlst = Partner::where('status','1')->orderBy('level', 'desc')->paginate(8);
        return $partnerlst;
    }


}
