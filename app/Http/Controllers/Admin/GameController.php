<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GameController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.games.index');
    }

    public function create()
    {
        return view('admin.games.create');
    }

    public function store(Request $request)
    {
        $game_name = $request->input('game_name');
        $game_description = $request->input('game_description');
        $game_long_description = $request->input('game_long_description');

        $category = $request->input('category');

        if(value($category)=="simulation"){
            $category =1;
        }
        elseif(value($category)=="roleplaying"){
            $category =5;
        }
        elseif(value($category)=="sports"){
            $category =3;
        }
        elseif(value($category)=="strategy"){
            $category =6;
        }
        elseif(value($category)=="puzzle"){
            $category =2;
        }
        elseif(value($category)=="action"){
            $category =4;
        }
        elseif(value($category)=="adventure"){
            $category =8;
        }
        elseif(value($category)=="horror"){
            $category =7;
        }
        $developer = $request->input('developer');
        $publisher = $request->input('publisher');
        $price = $request->input('price');
        $image = $request->input('image');
        $trailer = $request->input('trailer');
        $adult = $request->input('adult');
        if(value($adult)!="adult"){
            $adult = 1;
        }
        else{
            $adult = 0;
        }
        $data=array('genre_id'=>$category,
        "title"=>$game_name,
        "slug"=>Str::slug($game_name, '-'),
        "image_url"=>$image,
        "trailer_video_url"=>$trailer,
        "description"=>$game_description,
        "long_description"=>$game_long_description,
        "release_date"=>date('Y-m-d'),
        "developer"=>$developer,
        "publisher"=>$publisher,
        "price"=>$price,
        "id_adult_content"=>$adult);
        DB::table('games')->insert($data);
    }

    public function edit($id)
    {
        return view('admin.games.edit');
    }

    public function update(Request $request)
    {

    }

    public function destroy($id)
    {

    }
}
