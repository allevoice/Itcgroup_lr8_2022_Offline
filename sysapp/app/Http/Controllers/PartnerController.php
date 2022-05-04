<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $partner = Partner::orderBy('level', 'desc')->paginate(5);
        return view('admin/partners/liste',compact('partner'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        $data=$partner;
        return view('admin/partners/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $id = $request->id;
        $titlepartner = $request->titlepartner;
        $servicepartner = $request->servicepartner;
        $linkpartner = $request->linkpartner;
        $backimgpartner = $request->backimgpartner;
        $imgpartner = $request->imgpartner;
        $status = $request->status;
        $langues = $request->langues;
        $level = $request->level;
        $iduser = $request->iduser;

        //Les messages
        $message_fr = [
            'backimgpartner.required'=> 'Vous devez mettre une images',
            'backimgpartner.max'    => 'The :attribute ne doit pas depasser cette valeur  :max Bite. ',
            'backimgpartner.mimes' => 'Le type format de l\'image n\'est pas prise en charge',

            'logo.required'=> 'The :attribute and :other must match.',
            'logo.max'    => 'The :attribute ne doit pas depasser cette valeur  :max.',
            'logo.mimes' => 'Le type format de l\'image n\'est pas accepter',

            'titlev.required'=> 'Le champ titre ne doit pas etre vide',


            'descdetail.required'=> 'The :attribute is require.',
            'descdetail.max'    => 'Le champs texte ne doit pas depasse les :max caracteres. ',


            'linkv.required'=> 'The :attribute is require.',
            'linkv.url'    => 'Ce n\'est pas un adresse url "http:www.google.com ou https:www.google.com"',
        ];



        //validator
//        $request->validate([
//            'backimgpartner'=>'required|mimes:PNG,JPG,JPEG,png,jpg,jpeg|max:2524',
//            'logo'=>'required|mimes:PNG,JPG,png,jpg|max:900',
//            'titlev'=>'required',
//            'descdetail'=>'required|max:50',
//            'linkv'=>'required|url'
//        ],$message_fr);


        $partner= Partner::where('id', $id);//fixer l'id pour la mise a jour

        //dd($request->indice);
        //Mise a jour que le Background ssi indice ==1
        if($request->indice==1){

            //on verifie que si c'est un images
            $request->validate([
                'backimgpartner'=>'required|mimes:PNG,JPG,JPEG,png,jpg,jpeg|max:1024'
            ],$message_fr);

            $nbr = time().'-'.date("Y").date("m").date("d");
            $exte_file = $request->file(['backimgpartner'])->extension();
            $newNameImage_file = $nbr.'-backpartner';

            $filename_file = md5_file($request->file('backimgpartner')->getRealPath()).$newNameImage_file.'.'.$exte_file;

            $data = $partner->update([
                'backimgpartner'=>$filename_file,
            ]);

            if($data==true) {
                //sauvegarde du fichier dans un repertoire
                $request->file('backimgpartner')->storeAs('assets/img/partners/', $filename_file, 'public_perso');
            }
            return redirect(route('editpartner',$id));
        }
        //Mise a jour du logo ssi indice ==2
        elseif ($request->indice==2){
            echo 'Mise a jour que le Logo';
        }
        //Mise a jour des texte ssi indice ==3
        elseif ($request->indice==3){
            echo 'Mise a jour que le des textes';
        }else{
            echo 'On ne fait rien';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
