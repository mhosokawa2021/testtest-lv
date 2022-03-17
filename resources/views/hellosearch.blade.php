<x-hello2 :type="$type">
  <div class="flex-1 text-gray-700">
<div class="flex flex-wrap">
      @if($articles->count() === 0)
                     <p>検索結果がありませんでした</p>
                 @else
                      @if($type === "project")
                        <!-- <p>{{ $articles->count() }} 件の結果が見つかりました</p> -->
                          @foreach($articles as $article)
                          <div class="rounded border p-3 w-1/3">
                              <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="#">
                                    <img class="rounded-t-lg" src="http://flat-icon-design.com/f/f_object_174/s512_f_object_174_0bg.png" alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->plan_title }}</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $article->plan_text }}</p>
                                    <a href="{{ route('plan.show', ['id'=>$article->id]) }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Read more
                                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </div>
                              </div>
                          </div>
                            <!-- <div class="shadow-sm bg-white rounded mt-2">
                              <h3>id：{{ $article->id }}</h3>
                              <h3>タイトル：{{ $article->plan_title }}</h3>
                              <h4>投稿者：{{ $article->user->name }}</h4>
                                {{ $article->plan_text }}
                                <a href="{{ route('plan.show', ['id'=>$article->id]) }}" class="btn btn-primary">詳細</a>
                            </div> -->
                          @endforeach
                      @else
                        <!-- <p>{{ $articles->count() }} 件の結果が見つかりました</p> -->
                          @foreach($articles as $article)
<div class="w-1/3 p-3">
  <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
      <div class="flex justify-end px-4 pt-4">
          <!-- Dropdown menu -->
          <div id="dropdown" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
              <ul class="py-1" aria-labelledby="dropdownButton">
              <li>
                  <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
              </li>
              <li>
                  <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
              </li>
              <li>
                  <a href="#" class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
              </li>
              </ul>
          </div>
      </div>
      <div class="flex flex-col items-center pb-10">
          <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="http://flat-icon-design.com/f/f_object_174/s512_f_object_174_0bg.png" alt="Bonnie image"/>
          <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $article->creator_name }}</h5>
          <span class="text-sm text-gray-500 dark:text-gray-400"> {{ $article->creator_text }}</span>
          <div class="flex mt-4 space-x-3 lg:mt-6">
              <a href="{{ route('creator.show', ['id'=>$article->id]) }}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">詳細</a>
          </div>
      </div>
  </div>
</div>
                            <!-- <div class="shadow-sm bg-white rounded mt-2">
                              <h4>クリエイター：{{ $article->creator_name }}</h4>
                                {{ $article->creator_text }}
                              <a href="{{ route('creator.show', ['id'=>$article->id]) }}" class="btn btn-primary">詳細</a>
                            </div> -->
                          @endforeach
                      @endif
                 @endif
        </div>
      </div>
    </div>
  </div>
</x-hello2>