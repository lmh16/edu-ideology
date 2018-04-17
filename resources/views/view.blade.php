<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>讨论平台</title>

        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
    <div class="container">
    <div class="page-header">
        <h1>讨论平台</h1>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                Panel content
            </div>
            <div class="panel-footer"><span id="heart" class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>   <span id="count">0</span></div>
        </div>
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
