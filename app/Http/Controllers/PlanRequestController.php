<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\PlanRequest;
use App\Models\FreeRequest;
use App\Models\PlanRequestProc;
use App\Models\CreatorPlan;
use App\Models\CreatorPlanProc;

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

    public function request($creator_id){
        return view('creator.frequest.request',[
            'creator_id' => $creator_id
        ]);
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
            'plan_title' => "atode settei",
            'order_type' => "P",
            'message' => $request->message,
            'is_finished' => 0,
            'is_canceled' => 0
        ]);

        // クリエイターplan_idから
        $planProcs = CreatorPlanProc::where('creator_plan_id',"=",$plan_id)->get();

        foreach ($planProcs as $proc) {
            PlanRequestProc::create([
                'sort_order' => $proc->sort_order,
                'proc_name' => $proc->proc_name,
                'proc_number_max' => $proc->proc_number_max,
                'proc_number_min' => $proc->proc_number_min,
                'plan_request_id' => $planRequest->id
            ]);
        }
        
        return redirect()->route('dashboard.index');
    }

    /**
     * free_request
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fstore(Request $request,$creator_id){
        // dd($request);

        $planRequest = PlanRequest::create([
            'user_id' => auth()->user()->id,
            'creator_id' => $creator_id,
            'plan_title' => $request->title,
            'order_type' => "F",
            'message' => $request->message,
            'is_finished' => 0,
            'is_canceled' => 0
        ]);

        foreach ($request->item as $idx => $item) {
            PlanRequestProc::create([
                'sort_order' => $idx,
                'proc_name' => $item,
                'proc_number_max' => $request->count[$idx],
                'proc_number_min' => 1,
                'plan_request_id' => $planRequest->id
            ]);
        }

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
        //ここに依頼一覧
        $user_id = auth()->user()->id;
        
        $PlanReq = PlanRequest::where('user_id',"=",$user_id)
        ->Where('is_finished', '<>', 1)
        ->Where('is_canceled', '<>', 1)
        ->orderBy('created_at', 'desc')
        ->get();

        return view('dashboard.request.reqshow',[
            'articles' => $PlanReq 
        ]);
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
