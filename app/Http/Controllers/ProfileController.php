<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    public function show(User $user){
            $users = User::latest()->paginate(5);
            $posts = $user->posts()->get();

            return view('profile.show', [
                'user' => $user,
                'posts' => $posts,
                'users' => $users,

            ]);
    }

    public function edit(User $user){
            return view('profile.edit', [
                'user' => $user,
            ]);
        }
        public function update(User $user){
            Gate::authorize('edit-user', $user);

        request()->validate([
                'name' =>   ['required', 'string', 'max:255', 'unique:users'],
                'bio' =>    ['required', 'string', 'max:255'],
                'image' =>  ['required'],
            ]);

            if (!request()->hasFile('image')) {
                return back()->withErrors(['image' => 'Upload een afbeelding.']);
            }
            $path = request()->file('image')->store('images', 'public');

            $user->update([
                'name' => request('name'),
                'bio' => request('bio'),
                'image' => $path,
            ]);

            return redirect('/profile/' . $user->id);
        }

}
