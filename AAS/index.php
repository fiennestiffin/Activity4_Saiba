<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index-style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="top-div">
        <div class="logo-container">
            <div class="logo-holder">
                <div class="wmsulogo"></div>
            </div>
        </div>
        <h1>WMSU</h1>
    </div>

    <div class="mid-div">
        <h1>
            Automated<br>Scheduling
        </h1>
    </div>

    <button type="button" class="btn btn-primary login-btn" data-bs-toggle="modal" data-bs-target="#login-modal">LOG IN</button>

    <div class="login-div">
        <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="red-div flex-row">
                            <div class="wmsu-logo"></div>
                            <h1>WMSU</h1>
                        </div>

                        <div class="white-div">
                            <form class="d-flex flex-column align-items-center justify-content-center" action="./include/login-auth.php" method="post">
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" class="form-control" id="login-email-form" placeholder="Email" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" id="password" class="form-control" id="login-password-form" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>

                                <div class="login-options d-flex flex-row">
                                    <div class="remember-me-div d-flex justify-content-start">
                                        <input class="form-check-input" type="checkbox" value="" id="remember-check">
                                        <label class="form-check-remember" for="remember-check">
                                            <p>Remember me</p>
                                        </label>
                                    </div>

                                    <div class="forgot-password-div d-flex justify-content-end">
                                        <p>Forgot Password?</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary login-btn" name="submit">LOG IN</button>

                                <div class="signup-div d-flex flex-row">
                                    <p>Don't have an account? </p>
                                    <a class="signup-link" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="signup-div">
        <div class="modal fade" id="signup-modal" tabindex="-1" aria-labelledby="signup-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                        <div class="s-div-main d-flex flex-column align-items-center">
                            <h2>Let's Get Started!</h2>
                            <p>Create a new account</p>

                            <div class="s-form">
                                <form class="d-flex flex-column align-items-center justify-content-center" action="./include/signup-auth.php" method="post">
                                    <div class="s-names d-flex flex-row">
                                        <div class="form-floating s-fn">
                                            <input type="text" name="fn-text" id="fn-text" class="form-control" id="signup-fn" placeholder="First Name" required>
                                            <label for="signup-fn">First Name</label>
                                        </div>

                                        <div class="form-floating s-ln">
                                            <input type="text" name="ln-text" id="ln-text" class="form-control" id="signup-ln" placeholder="Last Name" required>
                                            <label for="signup-ln">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="s-email-pass">
                                        <div class="form-floating s-em">
                                            <input type="email" name="email-text" id="email-text" class="form-control" id="signup-email" placeholder="Email" required>
                                            <label for="signup-email">Email</label>
                                        </div>

                                        <div class="pass-div d-flex flex-row">
                                            <div class="form-floating s-pass">
                                                <input type="password" name="pass-text" id="pass-text" class="form-control" id="signup-pass" placeholder="Password" required>
                                                <label for="signup-pass">Password</label>
                                            </div>

                                            <div class="form-floating s-conf-pass">
                                                <input type="password" name="conf-pass-text" id="conf-pass-text" class="form-control" id="signup-conf-pass" placeholder="Cofirm Password" required>
                                                <label for="signup-conf-pass">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary signup-btn" name="submit">SIGN UP</button>
                                </form>
                            </div>

                            <div class="bLogin-div d-flex flex-row">
                                <p>Already have an account? </p>
                                <a class="bLogin-link" data-bs-toggle="modal" data-bs-target="#login-modal">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
