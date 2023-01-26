<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Cloth</title>
</head>
<body>
    <form action="{{route('insertclothpost')}}", method="POST">
        @csrf
        <label for="title">عنوان</label>
        <input type="text" id="title" name="title" value="" placeholder="عنوان">
        <label for="picture">عکس</label>
        <input type="text" id="picture" name="picture" value="" placeholder="عکس">
        <label for="price">قیمت</label>
        <input type="text" id="price" name="price" value="" placeholder="قیمت">
        <input type="submit" value="افزودن">
    </form>
</body>
</html>