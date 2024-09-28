<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up</title>
    <link rel="stylesheet" href="login1.css" />
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <script src="js\bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container m-auto">
        <!-- Login Form -->
        <form action="logconn.php" method="post" class="login-form">
            <h1>Login</h1>
            <div class="form-group">
                <input type="text" placeholder="Username" name="uname" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="login"> Login</button>
            </div>
        </form>
        <!-- Sign Up Button at the Top -->
        <button class="btn-signup" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
            aria-controls="staticBackdrop">
            Sign up here!
        </button>

    </div>

    <!-- Offcanvas for Sign Up -->
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Sign Up</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="regconn.php" method="post">
                <div class="container">
                    <h1>Sign Up</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="First Name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div class="form-group">
                                    <input type="text" name="lname" placeholder="Last Name" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="uname" placeholder="User Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" placeholder="Full Address" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirm" placeholder="Confirm Password" />
                    </div>
                    <div class="form-group">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76A7a9Hr8lFztXXwjbK6g3Kbt1Lz6Y3auD8r5c6EwHgjV4ldtJgROZXB6ZGdvep" crossorigin="anonymous">
    </script>
</body>

</html>