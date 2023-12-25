<?php

namespace App\Http\Controllers;

use App\Models\CourseMaterial;
use Illuminate\Http\Request;

class CourseMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course_id)
    {
        $materials = CourseMaterial::where('course_id', $course_id)->get();
        return response()->json($materials);
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
        $material = CourseMaterial::create($request->all());
        return response()->json($material, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseMaterial  $courseMaterial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = CourseMaterial::findOrFail($id);
        return response()->json($material);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseMaterial  $courseMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseMaterial $courseMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseMaterial  $courseMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $material = CourseMaterial::findOrFail($id);
        $material->update($request->all());
        return response()->json($material, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseMaterial  $courseMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = CourseMaterial::findOrFail($id);
        $material->delete();
        return response()->json(null, 204);
    }
}
