<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <ul>
                        <li><a href="{{url('/has-one')}}"><b>hasOne</b></a></li>
                        <li><a href="{{url('/belongs-to')}}"><b>belongsTo</b></a></li>
                        <li><a href="{{url('/has-many')}}"><b>hasMany</b></a></li>
                        <li><a href="{{url('/has-many-inverse')}}"><b>hasManyInverse</b></a></li>
                        <li><a href="{{url('/many-to-many')}}"><b>manyToMany</b></a></li>
                        <li><a href="{{url('/many-to-many-inverse')}}"><b>manyToManyInverse</b></a></li>
                        <li><a href="{{url('/has-many-through')}}"><b>hasManyThrough</b></a></li>
                        <li><a href="{{url('/polymorphic')}}"><b>Polymorphic</b></a></li>
                        <li><a href="{{url('/many-to-many-polymorphic')}}"><b>manyToManyPolymorphic</b></a></li>
                        <li><a href="{{url('/many-to-many-polymorphic-inverse')}}"><b>manyToMany Polymorphic Inverse</b></a></li>
                        <ul>
                            <li><a href="{{url('/many-to-many-inverse')}}"><b>Nested Eager Loading</b></a></li>
                            <li><a href="{{url('/many-to-many-inverse')}}"><b>Eager Loading Multiple Relationships</b></a></li>
                            <li><a href="{{url('/many-to-many-inverse')}}"><b>Constraining Eager Loads</b></a></li>
                            <li><a href="{{url('/lazy-eager-load')}}"><b>Lazy Eager Loading</b></a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
