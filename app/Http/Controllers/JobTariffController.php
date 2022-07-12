<?php

namespace App\Http\Controllers;

use App\Models\JobTariff;
use App\Http\Requests\StoreJobTariffRequest;
use App\Http\Requests\UpdateJobTariffRequest;
use Illuminate\Http\Response;

class JobTariffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return JobTariff::all();
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
     * @param  \App\Http\Requests\StoreJobTariffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobTariffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobTariff  $jobTariff
     * @return \Illuminate\Http\Response
     */
    public function show(JobTariff $jobTariff)
    {
        return ['grade' => $jobTariff->grade, 'value' => $jobTariff->value];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobTariff  $jobTariff
     * @return \Illuminate\Http\Response
     */
    public function edit(JobTariff $jobTariff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobTariffRequest  $request
     * @param  \App\Models\JobTariff  $jobTariff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobTariffRequest $request, JobTariff $jobTariff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobTariff  $jobTariff
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobTariff $jobTariff)
    {
        //
    }
}
