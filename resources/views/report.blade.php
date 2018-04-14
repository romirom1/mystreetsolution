<!DOCTYPE html>
<html>
 <head>
  <title>Penggunaan Form di HTML</title>
 </head>
 <body>
  <h4>Isilah formulir dibawah ini dengan baik dan benar ! </h4>
  <hr>
   <form action ="{{ route('post.report') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    User : <input type="number" name="user_id" size="11px" maxlength="9"> <br><br>
    Kategori :  <select name="categories_id" class="select2">
      @foreach($kategori as $category)
        @if (old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
        @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
      @endforeach
    </select>
    <br><br>
    Judul : <input type="text" name="title" size="11px" maxlength="9"> <br><br>
    Isi : <input type="text" name="content" size="40px"> <br><br>
    Lokasi : <input type="text" name="location"> <br><br>
    Photo : <input type="file" name="photo"> <br><br>
    Status : <input type="text" name="status" size="40px"> <br><br>
     <input type="submit" value="SUBMIT">
  </form>
 </body>
</html>