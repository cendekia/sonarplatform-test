<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <title>Sonar Platform - Test</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    </head>

    <body class="text-center">
        <form method="POST" action="{{ url('login') }}" class="form-signin">
            @csrf
            <img class="mb-4" src="https://www.sonarplatform.com/frontassets/sonar/images/logo-sonar-hr-small.webp" alt="" width="200">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">© {{ date('Y') }}</p>
        </form>
    </body>
</html>
