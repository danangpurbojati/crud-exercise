@extends('templates.layout')

@section('title','Home')

@section('header-content')
<header class="masthead">    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Selamat Datang</h1>
            <a class="btn btn-outline-light" href="{{url('/pertanyaan')}}" role="button">Lihat Pertanyaan</a>
          </div>
        </div>
      </div>
    </div>
</header>
@endsection
    
