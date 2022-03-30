<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Creator;
use App\Models\PlanRequest;
use App\Models\Project;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $user_id = auth()->user()->id;
        // ユーザー相談中
        $user_req = PlanRequest::where('user_id',"=",$user_id)
        ->Where('is_finished', '<>', 1)
        ->Where('is_canceled', '<>', 1)
        ->get();

        $user_project = Project::where('user_id',"=",$user_id)
        ->Where('is_finished', '<>', 1)
        ->Where('is_canceled', '<>', 1)
        ->get();

        $user_plan = Plan::where('user_id',"=",$user_id)
        ->Where('is_close', '<>', 1)
        ->get();

        // クリエイター相談中
        $creator = Creator::where('user_id',"=",$user_id)->first();
        if($creator){
            $creator_reqs = PlanRequest::where('creator_id',"=",$creator->id)
            ->Where('is_finished', '<>', 1)
            ->Where('is_canceled', '<>', 1)
            ->get();

            $creator_project = Project::where('creator_id',"=",$creator->id)
            ->Where('is_finished', '<>', 1)
            ->Where('is_canceled', '<>', 1)
            ->get();
        }

        // creatorはコントローラーでcountしない
        return view('dashboard', [
            'user_req' => $user_req->count(),
            'user_plan' => $user_plan->count(),
            'user_project' => $user_project->count(),
            'creator_req' => $creator_reqs,
            'creator_project' => $creator_project,
            'creator_id' => $creator
        ]);
    }

    /* search */
    public function search(Request $request)
    {
    // あいまい検索
    $word = $request->keyword; //送信されたキーワード
    $search_type = $request->search_type; // 検索タイプの取得
    
    if($search_type == "creator"){
        $creator_data = new Creator();
        $query = $creator_data->newQuery();

        if (isset($word)) {
            $array_words = preg_split('/\s+/ui', $word, -1, PREG_SPLIT_NO_EMPTY);//スペース区切りでキーワードを配列に変換
            foreach ($array_words as $w) {
                $escape_word = addcslashes($w, '\\_%');//エスケープ処理
                $query = $query->where(DB::raw("CONCAT(creator_name, ' ', creator_text)"), 'like', '%' . $escape_word . '%');//like検索
            }
        }
        // dd($articles);
        $articles = $query->get();//クエリビルダーの結果をゲット($wordがない場合全て取得)

    }elseif($search_type == "project"){

        $plan_data = new Plan();
        $query = $plan_data->newQuery(); // 何も条件を設定していない Builder を取得

        if (isset($word)) {
            $array_words = preg_split('/\s+/ui', $word, -1, PREG_SPLIT_NO_EMPTY);//スペース区切りでキーワードを配列に変換
            foreach ($array_words as $w) {
                $escape_word = addcslashes($w, '\\_%');//エスケープ処理
                $query = $query->where(DB::raw("CONCAT(plan_title, ' ', plan_text)"), 'like', '%' . $escape_word . '%');//like検索
            }
        }
        $articles = $query->get();//クエリビルダーの結果をゲット($wordがない場合全て取得)
    }

        return view('hellosearch', [
            'articles' => $articles,
            'keyword' => $word,
            'type' => $search_type
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
