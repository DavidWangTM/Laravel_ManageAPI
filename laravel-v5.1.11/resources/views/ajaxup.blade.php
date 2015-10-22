@extends('app')
@section('content')

    <img id="user-avatar" src="http://img2.duitang.com/uploads/item/201208/22/20120822155433_ZLnhS.jpeg">
    <div id="validation-errors"></div>
    <div class="avatar-upload" id="avatar-upload">
    {!! Form::open( [ 'url' => ['test_ajax'], 'method' => 'POST', 'id' => 'upload', 'files' => true ] ) !!}
    <a href="#" class="btn button-change-profile-picture">
        <label for="upload-profile-picture">
            <span id="upload-avatar">更换新头像</span>
            <input name="image" id="image" type="file" class="manual-file-chooser js-manual-file-chooser js-avatar-field">
        </label>
    </a>
    {!! Form::close() !!}


    <div class="span5">
        <div id="output" style="display:none">
        </div>
    </div>


    <span id="filename"></span>

    <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                beforeSubmit:  showRequest,
                success:       showResponse,
                dataType: 'json'
            };
            $('#image').on('change', function(){
                $('#upload-avatar').html('正在上传...');
                $('#upload').ajaxForm(options).submit();
            });
        });
        function showRequest() {
            $("#validation-errors").hide().empty();
            $("#output").css('display','none');
            return true;
        }

        function showResponse(response)  {
            if(response.success == false)
            {
                var responseErrors = response.errors;
                $.each(responseErrors, function(index, value)
                {
                    if (value.length != 0)
                    {
                        $("#validation-errors").append('<div class="alert alert-error"><strong>'+ value +'</strong><div>');
                    }
                });
                $("#validation-errors").show();
            } else {
                $('#upload-avatar').html('上传成功...');
                $('#user-avatar').attr('src',response.avatar);
            }
        }

    </script>
@stop

