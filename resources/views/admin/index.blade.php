@extends('layouts.app')

@section('title', 'Log-in pagina principale')

@section('content')
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->name}}</td>
                            <td>{{$post->slug}}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Vedi</a>
                                <a href="#" class="btn btn-warning">Modifica</a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>

        </table>
    </div>
@endsection