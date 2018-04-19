<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>教育思想大讨论 - 精彩建议</title>

        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('storage/style.css') }}" rel="stylesheet">

    </head>
    <body background="{{ asset('storage/bg.png') }}">
    <div class="container">
    <div class="page-header">
        <h1>精彩建议</h1>
    </div>
        <h3>在树立学术志向方面，您有哪些意见及建议？</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                Q4建议1
            </div>
            <div class="panel-footer"><span id="heart" class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>   <span id="count">0</span></div>
        </div>
        <h3>在硕士培养方面，您对学校有哪些意见及建议？</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                Q5建议1
            </div>
            <div class="panel-footer"><span id="heart" class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>   <span id="count">0</span></div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                Q5建议2
            </div>
            <div class="panel-footer"><span id="heart" class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>   <span id="count">0</span></div>
        </div>
    </div>
    </body>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $('#heart').click(function(){
            $(this).toggleClass('glyphicon-heart-empty');
            $(this).toggleClass('glyphicon-heart');
            $('#count').text(function (){
                return 1-$(this).text()
            });
        });
    </script>
</html>
