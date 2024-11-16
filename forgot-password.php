<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/logo/fav.png" />
    <title>Home</title>
    <?php
    include 'includes/css.php';
    ?>
</head>

<body>
    <main>
        <section class="login-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-6 col-xl-6">
                        <div class="login-form-main reset-password-form">
                            <h2>Reset Password!</h2>
                            <p>Enter login email to get reset link</p>
                            <form action="" class="login-form">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="form-group">
                                            <label class="form-label">Email or Phone Number</label>
                                            <input type="email" class="form-control" placeholder="brucenelson@demomail.com" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn ct-btn-prim hvr-bounce-to-right login-btn">Get Reset Link</button>
                                        <a href="login.php" class="btn ct-btn-prim-outline hvr-bounce-to-right login-btn">Back to Login</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    include 'includes/scripts.php';
    ?>
</body>

</html>