<!DOCTYPE html>
<html ng-app="app">
    <head>
        <title>Angulist</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="title">Angulist</div>
        </div>
        <div ng-view></div>

        <script src="{{ asset('bower_components/angular/angular.js') }}"></script>
        <script src="{{ asset('bower_components/angular-route/angular-route.js') }}"></script>
        <script src="{{ asset('bower_components/angular-resource/angular-resource.js') }}"></script>
        <script src="{{ asset('bower_components/angular-animate/angular-animate.js') }}"></script>
        <script src="{{ asset('bower_components/angular-messages/angular-messages.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/controllers/LoginController.js') }}"></script>
        <script src="{{ asset('js/controllers/HomeController.js') }}"></script>
    </body>
</html>
