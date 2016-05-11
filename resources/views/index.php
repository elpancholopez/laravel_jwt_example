<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Angular-Laravel Authentication</title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    </head>
    <body ng-app="authApp">

        <div class="container">
            <div ui-view></div>
        </div>

    </body>

    <!-- Application Dependencies -->
    <script src="node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-ui-router/release/angular-ui-router.js"></script>
    <script src="node_modules/satellizer/satellizer.js"></script>

    <!-- Application Scripts -->
    <script src="scripts/app.js"></script>
    <script src="scripts/authController.js"></script>
    <script src="scripts/userController.js"></script>
</html>