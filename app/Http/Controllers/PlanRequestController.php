<?php

namespace App\Http\Controllers;

use App\Models\PlanRequest;
use Illuminate\Http\Request;

class PlanRequestController extends Controller
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
    public function store(Request $request,$creator_id,$plan_id)
    {
        //ここに登録
        $planRequest = PlanRequest::create([
            'user_id' => auth()->user()->id,
            'creator_id' => $creator_id,
            'creator_plan_id' => $plan_id,
            'message' => $request->message,
            'is_finished' => 0,
            'is_canceled' => 0
        ]);
        
        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PlanRequest $planRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanRequest $planRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanRequest $planRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanRequest  $planRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanRequest $planRequest)
    {
        //
    }
}
