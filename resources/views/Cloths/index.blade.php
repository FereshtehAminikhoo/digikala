<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>Cloth List</title>
</head>
<body>
    <div class="col-md-9" style="margin:auto;margin-top:20px">
    <a href = "{{route('insertcloth')}}" class="btn btn-info">افزودن لباس</a>
    <br>
    <h1>لیست لباس ها</h1>
    <table class="table table-bordered" style="margin-top:20px">
        <thead>
          <th>شماره شناسه</th>
          <th>عنوان</th>
          <th>عکس</th>
          <th>قیمت</th>
          <th>عملیات</th>
        </thead>
        <tbody>
            <?php foreach($cloths as $cloth):?>
                <tr>
                    <td><?php echo $cloth -> id?></td>
                    <td><?php echo $cloth -> title?></td>
                    <td><?php echo $cloth -> image?></td>
                    <td><?php echo $cloth -> price?></td>
                    <td>
                        <form action="{{route('deletecloth', ['id' => $cloth->id])}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <input type="submit" value="حذف" class="btn btn-danger">
                        | <a href="{{route('updatecloth', ['id' => $cloth -> id])}} " target="_blank" class="btn btn-primary">اصلاح</a> 
                        | <a href="{{route('showcloth', ['id' => $cloth->id])}}" class="btn btn-success">نمایش</a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody> 
    </table>
    </div>

    <script>
        $(document).ready(function(){
            $('.deletesubmit').on('click', function(e){
                e.preventDefault();
                if(confirm('آیا مطمئن هستید؟')){
                   var form = $(this).closest('form');
                   form.submit();
                }
            })
        })
    </script>
    
</body>
</html>