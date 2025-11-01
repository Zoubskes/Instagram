<x-layout>
    <x-nav></x-nav>

    <main class="ml-64 px-6 py-10">
        <div class="max-w-4xl mx-auto">

            <!-- Profile Header -->
            <section class="flex flex-col sm:flex-row items-center sm:items-start gap-8 border-b border-b-gray-500 pb-6">
                <!-- Profile Picture -->
                <img src="https://i.pravatar.cc/150?img=8"
                     alt="Profile picture"
                     class="w-32 h-32 rounded-full object-cover border border-gray-300">

                <!-- Profile Info -->
                <div class="flex-1">
                    <div class="flex flex-col sm:flex-row items-center sm:items-center sm:gap-6">
                        <h2 class="text-2xl font-semibold">{{$user->name}}</h2>
                        @if(auth()->id() == $user->id)
                        <button class="mt-2 sm:mt-0 border px-3 py-1.5 rounded-md text-sm font-semibold hover:bg-gray-100">
                            Edit Profile
                        </button>
                        @endif
                    </div>

                    <!-- Stats -->
                    <div class="flex gap-6 mt-4">
                        <p><span class="font-semibold">{{$user->posts()->count()}}</span> posts</p>
                        <p><span class="font-semibold">2.3k</span> followers</p>
                        <p><span class="font-semibold">512</span> following</p>
                    </div>

                    <!-- Bio -->
                    <div class="mt-4">
                        <p class="text-sm">Soon..</p>
                    </div>
                </div>
            </section>

            <!-- Posts Grid -->
            <section class="mt-10">
                <div class="grid grid-cols-3 gap-1 sm:gap-2">

                    @foreach($posts as $post)
                        <img src="{{ asset('storage/' . $post->image) }}"
                                    alt="Post image">
                    @endforeach

                </div>
            </section>

        </div>
    </main>
    <x-aside :users="$users"></x-aside>
</x-layout>
