<?php

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Models\Tweet;
 use App\Models\Tag; // 追記忘れず！！

 class TweetController extends Controller
 {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
    public function index()
    {
    $tweets = Tweet::with(['user','tags'])->orderBy('created_at', 'desc')->get();
    $tags = Tag::all();
    
        return view('tweets', [
            'tweets' => $tweets,
            'tags' => $tags // 追記
        ]);
    }

public function search(Request $request)
{
    $keyword = $request->keyword;
 $tweets = Tweet::with(['user', 'tags']) // 追記
    ->where('message', 'LIKE', '%'.$keyword.'%')
    ->orderBy('created_at', 'desc') // 追記
    ->get();
    
		// ddd()を削除して下記を追記
    return view('search', [
        'tweets' => $tweets,
        'keyword' => $keyword
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
        $tweet = Tweet::create([
            'message' => $request->message,
            'user_id' => auth()->user()->id // 追記
        ]);
         $tweet->tags()->attach($request->tags); // 追記
        return redirect()->route('tweets.index');
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