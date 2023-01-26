<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Cloth</title>
</head>
<body>
    <div class="row">
        <div class="col-md-9" style="margin:auto;margin-top:20px">
        <a href="{{route('insertcloth')}}" class="btn btn info">افزودن لباس</a>
        <ul>
            <li>{{$cloth->title}}</li>
            <li>{{$cloth->image}}</li>
            <li>{{$cloth->price}}</li>
        </ul>
        </div>
    </div>
    
</body>
</html>