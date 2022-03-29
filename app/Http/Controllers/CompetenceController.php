<?php

namespace App\Http\Controllers;

use App\Custom\CustomResponse;
use App\Models\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'nom'=>'required',
        ]);
        if ($validators->fails()) {
            return CustomResponse::buildValidationErrorResponse($validators->errors());
        }
        $competence = new Competence($request->all());
        try {
            $competence->save();
        } catch (\Throwable $th) {
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
     * @param  Competence $competence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competence $competence)
    {
        try {
            $competence->delete();
        } catch (\Throwable $th) {
            DB::rollBack();
            return CustomResponse::buildErrorResponse("Une erreur est survenue lors de la suppréssion...");
        }
        return back();
    }
}
