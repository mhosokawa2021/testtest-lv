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
    if(!$request->has('keyword')) {
        return redirect('/tweets');
    }
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
        $validated = $request->validate([
            'message' => 'required'
        ]);
        $validated['user_id'] = auth()->user()->id;
        $tweet = Tweet::create($validated);
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
public function edit(Tweet $tweet) // ここも $idから書き変わっている点注意！
{
    $this->authorize('update', $tweet); // 追記
    $tags = Tag::all();
    $selectedTags = $tweet->tags->pluck('id')->toArray();
    return view('edit', [
        'tweet' => $tweet,
        'tags' => $tags,
        'selectedTags' => $selectedTags,
    ]);
}

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
public function update(Request $request, Tweet $tweet) // ここも変わってる点注意！
{
		// ツイートのメッセージ内容を更新
    $this->authorize('update', $tweet); // 追記
    $tweet->update([
        'message' => $request->message,
    ]);
		// ツイートに紐づいているタグを更新
    $tweet->tags()->sync($request->tags);
    return redirect()->route('tweets.index');
}

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
    public function destroy(Tweet $tweet)
    {
        $this->authorize('update', $tweet); // 追記
        $tweet->tags()->detach();
        $tweet->delete();
        return redirect()->route('tweets.index');
    }
 }