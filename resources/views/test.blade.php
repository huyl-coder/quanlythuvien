<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/startmin.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/metisMenu.min.css')}}">
    </head>
    <body>
        <div class="content">
            <p>hello</p>
        </div>
        <div id="head"></div>
        <div class='content'>
            <p>hello peter<p>
        </div>
        <div>
            <i class="fa fa-check"></i><p>ádaasadasd</p>
            <p>hello</p>
            @unless($name=='huy')
                {{$name}}
            @endunless
        </div>
        <div>
            @foreach( $list as $value)
                {{ $value->ten }}
            @endforeach
        </div>
        <div>
            <form action='/postTest' method='post'>
                @csrf
                <input type=text name='hoTen'>
                <input type=text name='soKyTu'>
                <input type=date name='date'>
                <input type=text name='fieldMoi'>
                <input type=submit value='submit'>
            </form>
        </div>
    </body>
</html>
<!--<script src="{{asset('js/metisMenu.min.js')}}"></script>
<script>
    $(function(){
        $('#side-menu').metisMenu();
    });
</script>-->
<script src="{{asset('js/app.js')}}"></script>
<script>
    $(function(){
        alert('hello');
    });
</script>