@extends('app')
@section('content')

    <div class = "col-md-4 col-md-offset-4">

        <h1>用户登陆</h1>
    {!! Form::open(['url'=>'/auth/login']) !!}

    <div class="form-group">
        {!! Form::label('email','Email：') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password：') !!}
        {!! Form::password('password',null,['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('登陆',['class'=> 'btn btn-success form-control']) !!}

    {!! Form::close() !!}

    </div>
@stop