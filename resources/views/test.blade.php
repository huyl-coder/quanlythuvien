<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div id="head"></div>
        <div class='content'>
            <p>{{$user}}<p>
        </div>
    </body>
</html>
<script src="{{asset('js/jquery-1.7.1.min.js')}}"></script>
<script>
    $(function(){
        $("#head").hide();
        $("#head").val("hello");
        alert($("#head").val());
    });
</script>