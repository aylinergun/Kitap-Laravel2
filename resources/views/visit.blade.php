@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div align="center" class="panel-heading"><strong>ANA SAYFA</strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table width=100%>
                      <tr height="35">
                        <td></td>
                        <td align="center"><strong>Kitap Adı</strong></td>
                        <td align="center"><strong>Yazar Adı</strong></td>
                        <td align="center"><strong>ISBN Numarası</strong></td>
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
                            <td align="center"height = 35>{{$book->isbn_number}}</td>
                          </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
