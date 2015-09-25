<!DOCTYPE html>
<html>
    <head>
        <title>Angulist</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Angulist</div>
            </div>
        </div>

        <script src="{{ asset("bower_components/angular/angular.js") }}"></script>
        <script src="{{ asset("bower_components/angular-route/angular-route.js") }}"></script>
        <script src="{{ asset("bower_components/angular-resource/angular-resource.js") }}"></script>
        <script src="{{ asset("bower_components/angular-animate/angular-animate.js") }}"></script>
        <script src="{{ asset("bower_components/angular-messages/angular-messages.min.js") }}"></script>
    </body>
</html>
