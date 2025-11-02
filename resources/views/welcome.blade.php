<x-layout>
    <x-nav></x-nav>

    <main class="ml-96 mr-64 mt-10 p-6 flex-1 flex flex-col justify-center items-center ">

        <h1 class="text-2xl font-bold mb-28 mr-64">Home Feed</h1>

        @foreach($posts as $post)
            <div class="mb-12 mr-64 border-b border-gray-300">

                <a href="/profile/{{$post->user['id']}}">
                <div class="flex pb-2">

                    @if(!$post->user['image'])
                        <img class="w-8 h-8 rounded-full bg-gray-300" src="{{asset('images/profilepic.jpg')}}" alt="">
                    @elseif($post->user['image'])
                        <img class="w-8 h-8 rounded-full bg-gray-300" src="{{Str::startsWith($post->user['image'], 'http') ? $post->user['image'] :   asset('storage/' . $post->user['image'])}}" alt="">
                    @endif
                    <p class="content-center ml-2">{{$post->user['name']}}</p>

                    <div class="flex">
                    </div>
                </div>
                </a>

                <img src="{{ Str::startsWith($post->image, 'http') ? $post->image : asset('storage/' . $post->image) }}"
                     alt="post image"
                     class="rounded-lg w-full max-w-md">
                <div class="flex mt-2 pb-4">
                    <span class="text-2xl cursor-pointer"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-8 h-8 text-gray-700 hover:text-red-500 transition-colors"
                        >
  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
</svg>
</span>
                    <span class="text-2xl ml-4 cursor-pointer"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-8 h-8 text-gray-700 hover:text-gray-900 transition-colors"
                        >
  <path d="M21 11.5a8.38 8.38 0 0 1-1.9 5.4A8.5 8.5 0 0 1 12 20a8.38 8.38 0 0 1-3.6-.8L3 21l1.4-4.2A8.38 8.38 0 0 1 3 11.5 8.5 8.5 0 0 1 12 3a8.5 8.5 0 0 1 9 8.5Z" />
</svg>
</span>
                </div>
                <p class="font-bold">0 vind-ik-leuks</p>
                <div class="flex space-x-2 mt-2">
                <p class="font-bold">{{$post->user['name']}}</p>
                <p>{{$post->caption}}</p>
                </div>
        </div>
        @endforeach

    </main>

<x-aside :users="$users"></x-aside>
</x-layout>
