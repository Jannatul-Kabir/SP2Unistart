<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Http\Requests\StoreAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;

class AdmissionController extends Controller
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
     * @param  \App\Http\Requests\StoreAdmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdmissionRequest  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionRequest $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
    }
}
