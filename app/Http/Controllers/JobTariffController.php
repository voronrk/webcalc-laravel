<?php

namespace App\Http\Controllers;

use App\Models\Jobtariff;
use App\Http\Requests\StoreJobtariffRequest;
use App\Http\Requests\UpdateJobtariffRequest;
use Illuminate\Http\Response;

class JobtariffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Jobtariff::all();
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
     * @param  \App\Http\Requests\StoreJobtariffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobtariffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobtariff  $jobtariff
     * @return \Illuminate\Http\Response
     */
    public function show(Jobtariff $jobtariff)
    {
        return ['grade' => $jobtariff->grade, 'value' => $jobtariff->value];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobtariff  $jobtariff
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobtariff $jobtariff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobtariffRequest  $request
     * @param  \App\Models\Jobtariff  $jobtariff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobtariffRequest $request, Jobtariff $jobtariff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobtariff  $jobtariff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobtariff $jobtariff)
    {
        //
    }
}
