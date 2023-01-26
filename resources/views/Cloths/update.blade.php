<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Update Cloth</title>
</head>
<body>
    <div class="col col-md-6" style="margin:auto;margin-top:20px;">
     <form action="{{route('editcloth')}}" method="post">
         @csrf()
        <input type="hidden" name="id" value="{{$cloth->id}}">
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
                <input type="text" class="form-control" name="picture" value="{{$cloth->image}}" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="price">قیمت</label>
                <input type="text" class="form-control" name="price" value="{{$cloth->price}}" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
            <input type="submit" class="btn btn-success" value="افزودن" style="margin-top:20px">
            </div>
        </div>
     </form>
    </div>
    
</body>
</html>