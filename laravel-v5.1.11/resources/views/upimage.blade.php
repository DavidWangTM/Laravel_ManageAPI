@extends('app')
@section('content')

    {!! Form::open(['url'=>'test','enctype'=>'multipart/form-data','onsubmit'=>"return isValidateFile('file');"]) !!}
    <div class="form-group">
    </div>
    <div class="form-group">
        {!! Form::label('file','内容：') !!}
        {!! Form::file('file',null,['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('上传',['class'=> 'btn btn-success form-control']) !!}

    {!! Form::close() !!}

    <script>
        function isValidateFile(obj) {
//            var extend = document.form.file.value.substring(document.form.file.value.lastIndexOf(".") + 1);
//            if (extend == "") {
//                alert("请选择图片！");
//                return false;
//            }
//            else {
//                if (!(extend == "jpg" || extend == "png" || extend =="gif")) {
//                    alert("请上传后缀名为jpg、png或gif的文件!");
//                    return false;
//                }
//            }
//            return true;
        }
    </script>
@stop

