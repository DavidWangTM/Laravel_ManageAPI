@extends('app')
@section('content')

    <h1>{{$article -> title}}</h1>
    {!! Form::model($article,['method'=> 'PATCH','url'=>'/articles/'.$article -> id]) !!}
        <input name="file" type="file" />
        <input type="submit" value="上传"/>
    </form>
    {!! Form::close() !!}

    @include('errors/list')
@stop