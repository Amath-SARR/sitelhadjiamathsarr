<?php

namespace App\Http\Controllers;

use App\Custom\CustomResponse;
use App\Models\Competence;
use App\Models\Experience;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        $experiences = Experience::all();
        $competences = Competence::all();
        return view('cv.index', compact('formations', 'experiences', 'competences'));
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
            'etablissement'=>'required',
            'dateDebut'=>'required',
            'dateFin'=>'required',
            'lieu'=>'required',
            'diplome'=>'required',
            'description'=>'required'
        ]);
        if ($validators->fails()) {
            return CustomResponse::buildValidationErrorResponse($validators->errors());
        }
        $formation = new Formation($request->all());
        try {
            $formation->save();
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
     * @param  Formation $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $cv)
    {
        try {
            $cv->delete();
        } catch (\Throwable $th) {
            DB::rollBack();
            return CustomResponse::buildErrorResponse("Une erreur est survenue lors de la suppréssion...");
        }
        return back();
    }
}
