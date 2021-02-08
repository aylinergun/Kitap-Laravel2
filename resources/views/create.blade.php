<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Kitap Oluştur</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div align="right">
    <strong><a href="{{route('book')}}">Geri Dön</a></strong>
      </div>
   <form method="post" action="{{url('/books')}}" enctype="multipart/form-data">
     {{ csrf_field() }}
  <div class="container">
    <h3>Kitap Bilgilerini Giriniz</h3>
  </hr>
  <div class="form-group">
    <label for="name">Kitap Adı:</label>
    <input type="text" name="name" id="name" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="writer_name">Yazar Adı:</label>
    <input type="text" name="writer_name" id="writer_name" class="form-control" required>
</div>

<div class="form-group">
  <label for="isbn_number">İSBN Numarası: </label>
  <input type="text" pattern="\d{13}" name="isbn_number" id="isbn_number" class="form-control" required>
</div>

<div class="form-group">
  <label for="description">Açıklama: </label>
  <input type="textarea" name="description" id="description" class="form-control" >
</div>

<div class="form-group">
  <label for="image">Kapak Görseli </label>
  <input type="file" name="image" id="image" class="form-control" >
</div>

 <button type="submit" class="btn btn-primary btn-block">Ekle</button>

  </div>























</body>
