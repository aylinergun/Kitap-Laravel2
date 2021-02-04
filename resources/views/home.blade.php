@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Kitap Sayfası</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table width=100%>
                    <tr height=35>
                     <td align="center"></td>
                        <td align="center"><strong>Kitap Adı</strong></td>
                        <td align="center"><strong>Yazar Adı</strong></td>
                        <td align="center"><strong>İsbn Numarası</strong></td>
                      <!--  <td align="center"><strong>Açıklama</strong></td> -->
                         <td align="center"><strong></strong></td>
                      </tr>
                        @foreach ($books as $book)
                          <tr height="120">
                           <td align="center">
                             @if(isset($book->image))
                               <img align="center" src="{{asset($book->image)}}" width="75">
                             @endif
                           </td>
                           <td align="center">{{$book->name}}</td>
                           <td align="center">{{$book->writer_name}}</td>
                           <td align="center">{{$book->isbn_number}}</td>
                           <!--<td align="center">{{$book->description}}</td>-->

                            <th >
                              <button onclick="location.href='{{route('books.show',$book->id)}}'">Görüntüle</button>
                            </th>

                            <th>
                              <button onclick="location.href='{{route('books.edit',$book->id)}}'">Düzenle</button>
                            </th>

                            <th >
                              <button  class="js-delete-book-btn"  data-id={{$book->id}}>Sil</button>
                            </th>
                          </tr>
                        @endforeach
                    </table>

              <div align="center">
                <br>  <br>
                <button onclick="location.href='books/create'" >Yeni Kitap Ekle</button>
              </div>
        </div>
    </div>
</div>
@endsection

@push('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script>
    $('.js-delete-book-btn').on('click', function () {
        let bookId = $(this).attr("data-id");
        console.log(bookId);
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '{{ url('/books/')}}/'+bookId,
            method: 'delete',
            success: location.reload()
        });
    });
</script>
@endpush
