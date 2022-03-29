<?php

namespace App\Http\Controllers;

use App\Custom\CustomResponse;
use App\Mail\SendMailToAdmin;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
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
        $validators = Validator::make($request->all(), [
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
            /*Mail::to("compterecherche99@gmail.com")->send(new SendMailToAdmin($contact));*/
            $contact->save();
        } catch (\Throwable $th) {
            throw $th;
            DB::rollBack();
            return CustomResponse::buildErrorResponse("Une erreur est survenue lors de la création...");
        }
        return back();
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
    public function destroy(Contact $contact)
    {
        try {
            $contact->delete();
        } catch (\Throwable $th) {
            DB::rollBack();
            return CustomResponse::buildErrorResponse("Une erreur est survenue lors de la suppréssion...");
        }
        return back();
    }
}
