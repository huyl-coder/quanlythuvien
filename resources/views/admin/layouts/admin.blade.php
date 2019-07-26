<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/startmin.css')}}">
        <link rel="stylesheet" href="{{asset('css/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body class="preloading">
        <div class="load">
            <span class="fa fa-spinner xoay icon"></span>
        </div>
        <div id="wrapper">
            @include('admin.layouts.header')
            @yield('content')
        </div>
    </body>
</html>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/metisMenu.min.js')}}"></script>
<script src="{{asset('js/style.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); 
        $('#btn_add').on('click', function (e) {
            e.preventDefault();
            $('#frm_add').submit();
        });
        $('#frm_add').validate({
            errorClass: 'error-msg-validate',
            rules: {
                add_tensv: {
                    required: true,
                },
                add_sokitu: {
                    required: true,
                },
                add_ngaytao: {
                    required: true,
                },
                add_fieldmoi: {
                    required: true,
                },
            }
        });
        $('#frm_add').submit(function(e){
            var url = $(this).attr('action');
            $.ajax({
                type:'post',
                url:url,
                success: function(response){
                    window.location.reload()
                },
                
            });
        });
        $('.edit').click(function(){
            var id = $(this).data('id');
            $.ajax({
                type:'get',
                url:'edit/'+id,
                dataType:'JSON',
                success: function(response){
                    $('#edit_id').val(response.id);
                    $('#edit_tensv').val(response.ten);
                    $('#edit_sokitu').val(response.sokitu);
                    $('#edit_ngaytao').val(response.ngaytao);
                    $('#edit_fieldmoi').val(response.fieldmoi);
                }
            });
            $('#edit').modal('show');
        });
        $('#btn_edit').click(function(e){
            e.preventDefault();
            $.ajax({
                type:'post',
                url:"{{route('edit')}}",
                success: function(response){
                    $('#edit').modal('hide')
                    window.location.reload()
                },
                
            });
        });
        $('.delete-user').click(function(){
            var url = $(this).attr('data-url');
            if(confirm('Bạn Có Chắc Là Muốn Xóa Không?')){
                $.ajax({
                    type:'get',
                    url: url,
                    success: function(response){
                        window.location.reload()
                    },
                });
            }
        });
    });
</script>
