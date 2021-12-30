<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="logincss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<div>
    <div class="col-12 mb-2 ">
        <h3 style="color: green;">Plasma Bank Management </h3>
    </div>

    <body class="text-center" data-gr-c-s-loaded="true">
        <form class="form-signin" method="POST" action="CheekUser.php">
            <h1 class="h3 mb-3 font-weight-normal">Please Login </h1>
            <label for="username" class="sr-only">User Name</label>
            <input type="text" name="username" class="form-control mb-2" placeholder="User Name" autofocus="" />
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" />
            <button class="btn btn-lg btn-primary btn-block" type="submit"> Login</button>
            <div class="text-center fs-6"> <a href="forgetpassword.php">Forget password?</a> or <a href="signup.php">Sign up</a> </div>
        </form>


        <style>
            body {
                background-color: #1e1e2f;
                color: #ffffff
            }
        </style>
    </body>

</html>