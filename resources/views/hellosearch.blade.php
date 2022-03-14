<x-hello2 :type="$type">
  <div class="flex-1 text-gray-700 text-center">
    <div class="flex flex-wrap">
      <div class="flex-1 text-center text-gray-600 p-2 m-1">
      @if($articles->count() === 0)
                     <p>検索結果がありませんでした</p>
                 @else
                      @if($type === "project")
                        <p>{{ $articles->count() }} 件の結果が見つかりました</p>
                          @foreach($articles as $article)
                            <div class="shadow-sm bg-white rounded mt-2">
                              <h3>タイトル：{{ $article->plan_title }}</h3>
                              <h4>投稿者：{{ $article->user->name }}</h4>
                                {{ $article->plan_text }}
                            </div>
                          @endforeach
                      @else
                        <p>{{ $articles->count() }} 件の結果が見つかりました</p>
                          @foreach($articles as $article)
                            <div class="shadow-sm bg-white rounded mt-2">
                              <h4>クリエイター：{{ $article->creator_name }}</h4>
                                {{ $article->creator_text }}
                            </div>
                          @endforeach
                      @endif
                 @endif
        </div>
      </div>
    </div>
  </div>
</x-hello2>