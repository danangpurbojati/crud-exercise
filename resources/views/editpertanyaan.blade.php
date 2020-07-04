@extends('templates.layout')

@section('title','Ask Me')

@section('header-content')
    <header class="masthead">    
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h2>Apa Pertanyaanmu</h2>
    <span class="subheading">Have questions? I have answers.</span>
            </div>
            </div>
        </div>
        </div>
    </header>
    
@endsection

@section('content')
    <div class="container">      
       
        
        <form method="POST" action="/pertanyaan/{{$pertanyaan->id}}" id="contactForm">
            @method('patch')
            @csrf

            <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Judul</label>
            <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Ketik Judul Disini" value="{{$pertanyaan->judul}}">
                
                @error('judul')
                    <p class="help-block text-danger">{{ $message }}</p>
                @enderror
                
            </div>
            </div>

            <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Isi Pertanyaan</label>
                <textarea name="pertanyaan" rows="5" class="form-control @error('pertanyaan') is-invalid @enderror" placeholder="Isi Pertanyaan Disini">{{$pertanyaan->pertanyaan}}</textarea>
                
                @error('isi')
                    <p class="help-block text-danger">{{ $message }}</p>
                @enderror
            </div>
            </div>
            <br>
            <div id="success"></div>
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Edit Pertanyaan</button>
        </form>

    </div>
       
  
@endsection