<?php
// app/Http/Controllers/SearchController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Game;
use App\Models\User;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (empty($query)) {
            return redirect()->back()->with('error', 'Please enter a search query.');
        }

        $user = User::where('name', 'LIKE', '%' . $query . '%')->first();

        if (!$user) {
            return view('search.results')->with('message', 'User not found.');
        }

        $posts = Post::where('user_id', $user->id)->get();
        $games = Game::where('user_id', $user->id)->get();

        return view('search.results', compact('user', 'posts', 'games'));
    }
}
