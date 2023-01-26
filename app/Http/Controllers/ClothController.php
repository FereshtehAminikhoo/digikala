<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;
use Illuminate\Support\Facades\Auth;

class ClothController extends Controller
{
    //
    public function index(){
        
            $cloth = Cloth::all();
            return view('cloths.index', ['cloths'=>$cloth]);
        
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
            'image' => $data['image'],
            'price' => $data['price']
        ]);
        
        return redirect(route('cloths.index'));
        dd('با موفقیت انجام شد');
        
    }

    public function update($id){
        $cloth = Cloth::find($id);
        return view('cloths.update', ['cloth' => $cloth]);
    }

    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        } abort(401);
        
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

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}
