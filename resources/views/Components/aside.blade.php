<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<aside class="fixed top-0 right-0 mt-10 h-screen w-64 bg-white flex flex-col py-4 px-4 mr-64">

    <h2 class="text-xl font-bold mb-4">Suggested for you</h2>

    @foreach($users as $user)
        <a href="/profile/{{$user->id}}">
    <div class="flex items-center mb-1 p-3 hover:bg-gray-100 rounded-lg">
        @if(!$user->image)
            <img class="w-8 h-8 rounded-full bg-gray-300" src="{{asset('images/profilepic.jpg') }}" alt="">
        @elseif($user->image)
            <img class="w-8 h-8 rounded-full bg-gray-300" src="{{asset('storage/' . $user->image) }}" alt="">
        @endif

        <div class="ml-3">

            <p class="font-bold">{{$user->name}}</p>

            <p class="text-gray-500 text-sm">Nieuw op Instagram</p>

        </div>

    </div>
        </a>
    @endforeach


</aside>
</body>
</html>
