@extends('templates.layout')

@section('title','Daftar Pertanyaan')

@section('header-content')
    <header class="masthead">    
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h2>{{$pertanyaan->judul}}</h2>
                <span class="subheading">{{$pertanyaan->pertanyaan}}</span>
            </div>
            </div>
        </div>
        </div>
    </header>
@endsection

@section('content')
<div class="container">
    
      
    <form method="POST" action="{{url('/pertanyaan')}}" id="contactForm">
        @csrf

    
        <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Isi Pertanyaan</label>
            <textarea name="pertanyaan" rows="5" class="form-control @error('pertanyaan') is-invalid @enderror" placeholder="Isi Jawaban Disini">{{old('pertanyaan')}}</textarea>
            
            @error('isi')
                <p class="help-block text-danger">{{ $message }}</p>
            @enderror
        </div>
        </div>
        <br>
        <div id="success"></div>
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Kirim Jawaban</button>
    </form>
       
</div>
@endsection
    
