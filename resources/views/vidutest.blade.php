<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div>
            @unless($ten=='huy')
                <p>{{$ten}}</p>
            @endunless
            @for($i=1;$i<=10;$i++)
                {{$i}}<br>
            @endfor
        </div>
        <div>
            @component('error')
                @slot('loi')
                    alert-danger
                @endslot
                @slot('vidu')
                    Bạn đã nhập sai
                @endslot
            @endcomponent
        </div>
        <div>
            <form action="/postvd" method='post'>
                @csrf
                <input type=text name='vidu'>
                <input type=submit value="submit">
            </form>
        </div>
    </body>
</html>