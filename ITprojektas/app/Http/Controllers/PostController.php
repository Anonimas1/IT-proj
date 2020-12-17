<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Animal;
use App\Models\AnimalGender;
use App\Models\AnimalState;
use App\Models\AnimalType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request, $id)
    {
        $post = Post::where('id', $id)->First();
        $post->view_count = $post->view_count + 1;
        $post ->save();
        return view('post.index', compact('post'));
    }
    public function fillDropdown()
    {
        $genders = AnimalGender::all();
        $states = AnimalState::all();
        $types = AnimalType::all();
        return view('post.create', compact('genders', 'states', 'types'));
    }
    public function store(Request $request)
    {
        $request->validate([
            //'image_path' =>'required',
            'description' =>'required',
            'age' =>'required',
            'home_address' =>'required',
            'state' => 'required',
            'gender' => 'required',
            'name' => 'required',
            'age' => 'required',
            'type' => 'required'
        ]);
        $animal = Animal::create([
            'image_path' => "test path",//$request->image_path,
            'description' => $request->description,
            'home_address' => $request->home_address,
            'state' => $request->state,
            'gender' => $request->gender,
            'name' => $request->name,
            'age' =>$request->age,
            'post_id' => 0,
            'type' =>$request->type
        ]);

        $post = Post::create([
            'view_count' => 0,
            'user_id' => Auth::user()->id,
            'animal_id' => $animal->id,
        ]);

        $animal = Animal::find($animal->id);
        $animal ->post_id = $post->id;
        $animal->save();
        return redirect()->action([HomeController::class, 'index'])->with('alert', "Skelbimas sėkmingai sukurtas!");

    }
    public function delete(Request $request, $id)
    {
        $post = Post::find($id);
        $animal = Animal::find($post->animal_id);
        $comments = $post->Comments;
        foreach($comments as $item){
            $item->delete();
        }
        $post->delete();
        $animal->delete();
        return redirect()->action([HomeController::class, 'index'])->with('alert', "Įrašas sėkmingai panaikintas!");
    }
}
