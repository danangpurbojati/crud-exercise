@extends('templates.layout')

@section('title','Daftar Pertanyaan')

@section('header-content')
    <header class="masthead">    
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h2>Daftar Pertanyaan</h2>
                <a class="btn btn-outline-light" href="{{url('/pertanyaan/create')}}" role="button">Tambah Pertanyaan</a>
            </div>
            </div>
        </div>
        </div>
    </header>
@endsection

@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col" style="text-align: center">Dibuat</th>
            <th scope="col" style="text-align: center">Daftar Pertanyaan</th>            
            <th scope="col" style="text-align: center">Aksi</th>            
          </tr>
        </thead>
        <tbody>
            @if ($pertanyaans ?? '')
                @foreach ($pertanyaans as $tanya)
                    <tr>
                        <th scope="row">{{$tanya->created_at}}</th>
                        <td><a href="/pertanyaan/{{$tanya->id}}">{{$tanya->judul}}</a></td>
                        <td style="text-align: center">
                            
                            <form action="/pertanyaan/{{$tanya->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" >del</button>
                            </form>

                            <a href="/pertanyaan/{{$tanya->id}}/edit" class="btn btn-primary">Edt</a>    
                           
                        </td>            
                    </tr>
                @endforeach           
                
            @else
                <tr>
                    <td colspan="3" style="text-align: center">Tidak ada pertanyaan</td>
                </tr>
            
            @endif
            
        </tbody>
      </table>
</div>
@endsection
    
