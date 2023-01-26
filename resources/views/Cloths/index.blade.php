@extends('master')

@section('main')
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
                        {{ method_field('DELETE') }}
                        <a href='#' class="btn btn-danger" onclick="deleteItem(this,event)">حذف</a>
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
        
            function deleteItem(el,ev){
                ev.preventDefault();
                if(confirm('آیا مطمئن هستید؟')==true){
                   var form = $(el).closest('form');
                   form.submit();
                }
            }
    
    </script>
@endsection