<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $projets = Projet::all();
        return view('projet.index', compact('projets')); */
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
        /* $validators = Validator::make($request->all(), [
            'prenom'=>'required',
            'nom'=>'required',
            'email'=>'required',
            'objet'=>'required',
            'message'=>'required',
        ]);
        if ($validators->fails()) {
            return CustomResponse::buildValidationErrorResponse($validators->errors());
        }
        $contact = new Contact($request->all());
        try {
            $contact->save();
            Mail::to("compterecherche99@gmail.com")->send(new SendMailToAdmi($contact));
        } catch (\Throwable $th) {
            DB::rollBack();
            return CustomResponse::buildErrorResponse("Une erreur est survenue lors de la création...");
        }
        return back(); */
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
     * @param  Formation $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $contact)
    {
        /* try {
            $contact->delete();
        } catch (\Throwable $th) {
            DB::rollBack();
            return CustomResponse::buildErrorResponse("Une erreur est survenue lors de la suppréssion...");
        }
        return back(); */
    }
}
