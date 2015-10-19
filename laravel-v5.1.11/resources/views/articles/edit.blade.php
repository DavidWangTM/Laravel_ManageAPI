@extends('app')
@section('content')

    <h1>{{$article -> title}}</h1>
    {!! Form::model($article,['method'=> 'PATCH','url'=>'/articles/'.$article -> id]) !!}
    @include('articles/form')
    {!! Form::close() !!}

    @include('errors/list')
@stop