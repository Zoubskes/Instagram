<x-layout>
<nav class="fixed top-0 left-0 h-screen w-80 bg-white border-r border-gray-300 flex flex-col items-start py-4 px-4">

    <div class="py-4 px-3"> <a href="/" class="py-4"> <img class="h-9" src="{{ asset('images/Instagram_logo.svg.png') }} " alt=""> </a> </div>

    <a href="/" class="{{request()->is('/') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            width="24"
            height="24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="w-6 h-6 text-gray-700 hover:text-gray-900 transition-colors"
        >
            <path d="M3 9.5L12 3l9 6.5V21a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1V9.5z" />
        </svg>


        <span>Home</span>
    </a>
    <a href="/search" class="{{request()->is('search') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            width="24"
            height="24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <circle cx="11" cy="11" r="7"></circle>
            <path d="M20 20 L16.5 16.5"></path>
        </svg>

        <span>Search (soon)</span>
    </a>
    <a href="/messages" class="{{request()->is('messages') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            width="24"
            height="24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="w-6 h-6 text-gray-600 hover:text-gray-800 transition-colors"
        >
            <path d="M21 11.5a8.38 8.38 0 0 1-1.9 5.4A8.5 8.5 0 0 1 12 20a8.38 8.38 0 0 1-3.6-.8L3 21l1.4-4.2A8.38 8.38 0 0 1 3 11.5 8.5 8.5 0 0 1 12 3a8.5 8.5 0 0 1 9 8.5Z" />
        </svg>

        <span>Messages (soon)</span>

    </a>
    <a href="/notifications" class="{{request()->is('notifications') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            width="24"
            height="24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="w-6 h-6 text-gray-600 hover:text-gray-800 transition-colors"
        >
            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
        </svg>

        <span>Notifications (soon)</span>
    </a>

    @guest
        <a href="/login" class=" flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="w-6 h-6 text-gray-700 hover:text-gray-900 transition-colors"
            >
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>

            <span>Create</span>
        </a>
    <a href="/login" class="{{request()->is('login', 'register') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            width="24"
            height="24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="w-6 h-6 text-gray-700 hover:text-gray-900 transition-colors"
        >
            <circle cx="12" cy="8" r="4" />
            <path d="M4 20c0-4 4-6 8-6s8 2 8 6" />
        </svg>
        <span>Profile</span>
    </a>
    @endguest
    @auth
        <a href="/create" class="{{request()->is('create') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="w-6 h-6 text-gray-700 hover:text-gray-900 transition-colors"
            >
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>

            <span>Create</span>
        </a>
        <a href="/profile/{{Auth::user()->id}}" class="{{request()->is('profile/' . Auth::user()->id)  ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="24"
                height="24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="w-6 h-6 text-gray-700 hover:text-gray-900 transition-colors"
            >
                <circle cx="12" cy="8" r="4" />
                <path d="M4 20c0-4 4-6 8-6s8 2 8 6" />
            </svg>

            <span>Profile</span>
        </a>

        <form method="POST" action="/logout" class="w-full">
            @csrf
            <button
                type="submit"
                class="flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="w-6 h-6 text-gray-700 hover:text-gray-900 transition-colors"
                >
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    <polyline points="16 17 21 12 16 7" />
                    <line x1="21" y1="12" x2="9" y2="12" />
                </svg>
                <span class="text-red-400">Log Out</span>
            </button>
        </form>

    @endauth
</nav>
</x-layout>
