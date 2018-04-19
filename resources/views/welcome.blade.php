<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>教育思想大讨论</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('storage/welcome0419.css') }}" rel="stylesheet">
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
        <div class="CoverImage FlexEmbed FlexEmbed--3by1">
            <img class="bg-img full-height" src="{{ asset('storage/mainbg.png') }}" alt="">
            <div class="content">
                <div class="title m-b-md">
                    <img class="title-bg" src="{{ asset('storage/maintitle.png') }}" alt="">
                </div>

                <div class="links">
                    <a id="a1" href="/form">
                        <img class="button-bg" src="{{ asset('storage/mainbut1.png') }}" alt="">
                    </a>
                </div>
                <div class="links">
                    <a id="a2" href="/view">
                        <img class="button-bg" src="{{ asset('storage/mainbut2.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
