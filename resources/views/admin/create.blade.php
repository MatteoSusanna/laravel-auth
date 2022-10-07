@extends('layouts.app')

@section('title', 'Creazione post')


@section('content')
<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
        
            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug')is-invalid @enderror" id="slug" name="slug" value="{{old('slug')}}">
        
            @error('slug')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control @error('content')is-invalid @enderror" name="content" id="content" cols="50" rows="7" name="content">{{old('content')}}</textarea>
        
            @error('content')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Crea</button>
        <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Indietro</a>
    </form>
</div>


@endsection