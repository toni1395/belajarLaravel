<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class postcontroller extends Controller
{
    public function create(){
        return view('posts.create');
    }
    public function store(request $request){
        dd($request->all());
        $query = DB::table('posts')->insert(
            ["title" =>$request["title"],
            "body" => $request["body"]
            ]);

            return redirect('/posts/create');
    }
    public function update($id, $request){
        $query = DB :: table('posts')
                    ->where('id',$id)
                    ->update([
                        'title' => $request['title'],
                        'body' => $request['body']
                    ]);
                    return redirect('posts')->with('succes','berhasil');
    }
}
