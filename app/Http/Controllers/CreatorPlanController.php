<?php

namespace App\Http\Controllers;

use App\Models\CreatorPlan;
use App\Models\CreatorPlanProc;
use Illuminate\Http\Request;

class CreatorPlanController extends Controller
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

    public function request($creator_id,$plan_id)
    {
        $plan = CreatorPlan::all()->find($plan_id);
        $plan_proc = CreatorPlanProc::where('creator_plan_id', '=', $plan_id)->get();
        // $plan = Plan::with(['user'])->find($id);
        // $plan_msg = PlanMessage::where('plan_id', '=', $id)->get();

        // dd($creator_id,$plan_id);
        return view('creator.request.show', [
            'creator_id' => $creator_id,
            'plan_id'=> $plan_id,
            'plan_proc' => $plan_proc,
            'plan' => $plan
        ]);
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
     * @param  \App\Models\CreatorPlan  $creatorPlan
     * @return \Illuminate\Http\Response
     */
    public function show(CreatorPlan $creatorPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreatorPlan  $creatorPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(CreatorPlan $creatorPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreatorPlan  $creatorPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreatorPlan $creatorPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreatorPlan  $creatorPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreatorPlan $creatorPlan)
    {
        //
    }
}
