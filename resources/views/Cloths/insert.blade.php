@extends('master')

@section('main')
    <form action="{{route('insertclothpost')}}", method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group">
        <label for="title">عنوان</label>
        <input type="text" id="title" name="title" value="" class="form-control" placeholder="عنوان">
        </div>
        </div>
        <div class="form-row">
            <div class="form-group">
        <label for="image">عکس</label>
        <input type="text" id="image" name="image" value="" class="form-control" placeholder="عکس">
        </div>
        </div>
        <div class="form-row">
            <div class="form-group">
        <label for="price">قیمت</label>
        <input type="text" id="price" name="price" value="" class="form-control" placeholder="قیمت">
</div>
</div>
        <input type="submit" value="افزودن" class="btn btn-success">
    </form>
@endsection