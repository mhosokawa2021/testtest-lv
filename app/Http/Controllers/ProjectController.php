<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectProc;
use App\Models\PlanRequest;
use App\Models\PlanRequestProc;

class ProjectController extends Controller
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

    public function register($creator_id,$plan_id)
    {
        $PlanReq = PlanRequest::where('id',"=",$plan_id)->first();
        $PlanProcs = PlanRequestProc::where('plan_request_id',"=",$PlanReq->id)
        ->orderBy('sort_order')
        ->get();

        // projectへのろうとく
            $project = Project::create([
                'user_id' => $PlanReq->user_id,
                'creator_id' => $PlanReq->creator_id,
                'is_finished' => 0,
                'is_canceled' => 0
            ]);

        foreach ($PlanProcs as $PlanProc){
          for($i = 0; $i < $PlanProc->proc_number_max ; $i++){
                ProjectProc::create([
                    'sort_order' => $PlanProc->sort_order,
                    'proc_name' => $PlanProc->proc_name,
                    'proc_name_order' => $i,
                    'img_url' => "",
                    'is_checked' => 0,
                    'is_finished' => 0,
                    'project_id' => $project->id
                ]);
            }
        }

        // 相談中の完了フラグを立てる
        $PlanReq->update([
        'is_finished' => 1,
        ]);

        return redirect()->route('dashboard.index');

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
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
