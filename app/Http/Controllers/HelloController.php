<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\Tag; // 追記忘れず！！
use App\Models\Plan;
use App\Models\Creator;

class HelloController extends Controller
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

    

    // $tweets = Tweet::with(['user', 'tags']) // 追記
    // $tweets = Plan::all()// 追記
    // ->where('project_text', 'LIKE', '%'.$keyword.'%')
    // ->orderBy('created_at', 'desc') // 追記
    // ->get();

    // $plans = Plan::with(['user'])
    // ->where('project_text', 'LIKE', '%'.$keyword.'%')
    // ->orWhere('project_title', 'LIKE', '%'.$keyword.'%')
    // ->orderBy('created_at', 'desc')
    // ->get();
    // dd($plans);

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
