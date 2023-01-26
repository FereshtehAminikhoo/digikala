<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;
use Illuminate\Support\Facades\Auth;

class ClothController extends Controller
{
    //
    public function index(){
        if(Auth::check()){
            $cloths = Cloth::all;
            return view('cloths.cloths', ['cloths'=>$cloth]);
        } abort(401);
    }

    public function insert(){
        return view('cloths.insert');

    }

    public function create(Request $request){
        return view('cloths.create');
    }

    public function store(Request $request){
        $data = $request -> all();
        Cloth::create([
            'title' => $data['title'],
            'image' => $data['picture'],
            'price' => $data['price']
        ]);
        
        return redirect(route('cloths.index'));
        dd('با موفقیت انجام شد');
        
    }

    public function update($id){
        $cloth = Cloth::find($id);
        return view('cloths.update', ['cloth' => $cloth]);
    }

    public function edit(Request $request){
        $cloth = Cloth::find($request -> id);
        $cloth->title = $request->title;
        $cloth->image = $request->image;
        $cloth->price = $request->price;
        $cloth->save();
        return redirect(route('cloths.index'));
    }

    public function show($id){
        $cloth = Cloth::find($id);
        return view('cloths.show', ['cloth' => $cloth]);
    }

    public function destroy($id){
        $cloth = Cloth::find($id);
        $cloth->delete();
        return redirect(route('cloths.index'));
    }
}
