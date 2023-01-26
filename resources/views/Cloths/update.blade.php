@extends('master')
@section('main')
     <form action="{{route('editcloth')}}" method="post">
         @csrf()
        <input type="hidden" name="id" value="{{$cloth -> id}}">
        <input type="hidden" name="_method" value="put">
        <div class="form-row">
            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" class="form-control" name="title" value="{{$cloth->title}}" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="picture">عکس</label>
                <input type="text" class="form-control" name="image" value="{{$cloth-> image}}" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="price">قیمت</label>
                <input type="text" class="form-control" name="price" value="{{$cloth -> price}}" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
            <input type="submit" class="btn btn-success" value="ذخیره" style="margin-top:20px">
            </div>
        </div>
     </form>
@endsection