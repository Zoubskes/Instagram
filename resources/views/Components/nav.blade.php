<x-layout>
<nav class="fixed top-0 left-0 h-screen w-80 bg-white border-r border-gray-300 flex flex-col items-start py-4 px-4">

    <div class="py-4 px-3"> <a href="/" class="py-4"> <img class="h-9" src="{{ asset('images/Instagram_logo.svg.png') }}" alt=""> </a> </div>

    <a href="/" class="{{request()->is('/') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <span>🏠</span>
        <span>Home</span>
    </a>
    <a href="/search" class="{{request()->is('search') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <span>🔍</span>
        <span>Search (soon)</span>
    </a>
    <a href="/messages" class="{{request()->is('messages') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <span>✉️</span>
        <span>Messages (soon)</span>
    </a>
    <a href="/notifications" class="{{request()->is('notifications') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <span>❤️</span>
        <span>Notifications (soon)</span>
    </a>

    @guest
        <a href="/login" class=" flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
            <span>➕</span>
            <span>Create</span>
        </a>
    <a href="/login" class="{{request()->is('login', 'register') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        <span>👤</span>
        <span>Profile</span>
    </a>
    @endguest
    @auth
        <a href="/create" class="{{request()->is('create') ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
            <span>➕</span>
            <span>Create</span>
        </a>
        <a href="/profile/{{Auth::user()->id}}" class="{{request()->is('profile/' . Auth::user()->id)  ? "font-bold text-black" : ""}} flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
            <span>👤</span>
            <span>Profile</span>
        </a>

    <form method="POST" action="/logout" class=" flex items-center space-x-3 py-3 hover:bg-gray-100 rounded-md px-2 w-full text-lg">
        @csrf
    <button type="submit" >
        <span>🚪</span>
        <span class="text-red-400">Log Out</span>
    </button>
    </form>
    @endauth
</nav>
</x-layout>
