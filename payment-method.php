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

    <?php
    include 'includes/header.php';
    ?>
    <main>
        <section class="sec-change-password-main-head">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="form-area">
                            <div class="back-icon-edit">
                                <a href="my-account.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M14.6673 8L6.66732 16M6.66732 16L14.6673 24M6.66732 16L25.334 16" stroke="black" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                            <h5>Payment Method</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-edit-profile-form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="edit-form payment-method-form">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <ul class="payment-method-tags">
                                            <li>
                                                <input type="checkbox" class="btn-check" name="dietary-options" id="option1"
                                                    autocomplete="off">
                                                <label class="btn btn-secondary ct-rd" for="option1">
                                                    <figure>
                                                        <img src="assets/images/my-account/icons/visa.png" alt="Visa" class="img-fluid">
                                                    </figure>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="btn-check" name="dietary-options" id="option2"
                                                    autocomplete="off">
                                                <label class="btn btn-secondary ct-rd" for="option2">
                                                    <figure>
                                                        <img src="assets/images/my-account/icons/paypal.png" alt="PayPal" class="img-fluid">
                                                    </figure>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="btn-check" name="dietary-options" id="option3"
                                                    autocomplete="off">
                                                <label class="btn btn-secondary ct-rd" for="option3">
                                                    <figure>
                                                        <img src="assets/images/my-account/icons/maestro.png" alt="Maestro" class="img-fluid">
                                                    </figure>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="btn-check" name="dietary-options" id="option4"
                                                    autocomplete="off">
                                                <label class="btn btn-secondary ct-rd" for="option4">
                                                    <figure>
                                                        <img src="assets/images/my-account/icons/apple-pay.png" alt="Apple Pay" class="img-fluid">
                                                    </figure>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="btn-check" name="dietary-options" id="option5"
                                                    autocomplete="off">
                                                <label class="btn btn-secondary ct-rd" for="option5">
                                                    <figure>
                                                        <img src="assets/images/my-account/icons/google-pay.png" alt="Google Pay" class="img-fluid">
                                                    </figure>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="form-group">
                                            <label for="number">Card Number</label>
                                            <input type="text" id="number" name="number" placeholder="4000 0000 0000 1000" class="form-control card-number-input-icon" required minlength="16" maxlength="16">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="form-group">
                                            <label for="name">Cardholder Name</label>
                                            <input type="text" id="name" name="name" placeholder="Steve Johnson" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="number">Valid Through</label>
                                            <input type="number" id="number" name="phone" placeholder="12/26" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="cvv">CVV</label>
                                            <input type="password" id="cvv" name="cvv" placeholder="***" class="form-control" required minlength="3" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a href="new-payment-method.php" class="btn ct-btn-prim hvr-bounce-to-right add-card-btn">Add new card</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    ?>
</body>

</html>