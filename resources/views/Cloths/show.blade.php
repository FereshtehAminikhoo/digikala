@extends('master')
@section('main')
 
        <div class="col-md-9" style="margin:auto;margin-top:20px">
        <a href="{{route('insertcloth')}}" class="btn btn-info mb-3">افزودن لباس</a>
        <div class="row mb-2">
            <span class="col-3">عنوان</span>
            <span class="col-9">{{$cloth->title}}</span>
        </div>
        <div class="row mb-2" >
            <span class="col-3">عکس</span>
            <span class="col-9">{{$cloth->image}}</span>
        </div>
        <div class="row mb-2">
            <span class="col-3">قیمت</span>
            <span class="col-9">{{$cloth->price}}</span>
        </div>
       
        </div>
   
@endsection