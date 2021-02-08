<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Düzenle</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">
                  Kitap Güncelle
                  <div align = "right">
                    <strong><a href={{route('book')}}>Geri Dön</a></strong>
                  </div>
                </div>

          <form method="post" action="{{url('/books',$book->id)}}" enctype="multipart/form-data">
                  @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                      <label for="name">Kitap Adı:</label>
                      <input type="text" name="name" class="form-control" required value="{{$book->name}}"></input>
                    </div>
                    <div class="form-group">
                      <label for="writer_name">Yazar Adı:</label>
                      <input type="text" name="writer_name" class="form-control" required value="{{$book->writer_name}}"></input>
                    </div>
                    <div class="form-group">
                      <label for="isbn_number">İSBN Numarası: </label>
                      <input type="text" name="isbn_number" class="form-control" required value="{{$book->isbn_number}}"></input>
                    </div>
                    <div class="form-group">
                      <label for="description">Açıklama: </label>
                      <input type="textarea" name="description" class="form-control"  value="{{$book->description}}"></input>
                    </div>
                    <div class="form-group">
                        <label for="image">Kapak Görseli </label>
                      <input type="file" name="image" class="form-control" value="{{$book->image}}" ></input>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Güncelle</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
