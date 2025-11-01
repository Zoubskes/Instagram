<x-layout>
    <x-nav></x-nav>

    <main class="ml-96 mr-64 mt-10 p-6 flex-1 flex flex-col justify-center items-center ">

        <h1 class="text-2xl font-bold mb-28 mr-64">Home Feed</h1>

        @foreach($posts as $post)
            <div class="mb-12 mr-64 border-b border-gray-300">

                <a href="/profile/{{$post->user['id']}}">
                <div class="flex pb-2">

                        <img class="w-8 h-8 rounded-full bg-gray-300" src="https://i.pravatar.cc/150?img=8">

                    <p class="content-center ml-2">{{$post->user['name']}}</p>

                    <div class="flex">
                    </div>
                </div>
                </a>

                <img class="h-[500px]" src="{{ asset('storage/' . $post->image) }}" alt="Post image">
                <div class="flex mt-2 pb-4">
                    <span class="text-2xl cursor-pointer">❤️</span>
                    <span class="text-2xl ml-4 cursor-pointer">💬</span>
                </div>
        </div>
        @endforeach

    </main>

<x-aside :users="$users"></x-aside>
</x-layout>
