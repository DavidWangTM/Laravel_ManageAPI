@extends('app')
@section('content')

    <h1>撰写新文章</h1>
    {!! Form::open(['url'=>'articles/store']) !!}
        <div class="form-group">
            {!! Form::label('title','标题：') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content','内容：') !!}
            {!! Form::textarea('content',null,['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('发表文章',['class'=> 'btn btn-success form-control']) !!}

        </div>
    {!! Form::close() !!}

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{$error}}</li>
            @endforeach
        </ul>
    @endif
@stop