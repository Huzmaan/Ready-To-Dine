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
                    <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                        <div class="login-form-main">
                            <figure>
                                <img src="assets/images/logo/logo-header-light.png" alt="logo">
                            </figure>
                            <form action="" class="login-form signup-form">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="Bruce" name="firstname" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Nelson" name="lastname" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label">Email Address</label>
                                            <input type="email" class="form-control" placeholder="brucenelson@demomail.com" name="email" required="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input type="number" class="form-control" placeholder="+1 (027) 266-7137" name="number" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" placeholder="Select Location" name="location" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group position-relative">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="Choose password" required="" id="passwordInput">
                                            <span class="eye-icon" onclick="togglePasswordVisibility()">
                                                <i class="fa-light fa-eye" id="toggleEyeIcon"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group position-relative">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Confirm password" required="" id="confirmPasswordInput">
                                            <span class="eye-icon" onclick="toggleConfirmPasswordVisibility()">
                                                <i class="fa-light fa-eye" id="toggleConfirmEyeIcon"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="btm-select-main">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="btm-select-heading">
                                                    <h3>Dietary Preferences</h3>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="form-group">
                                                    <div class="inp-area" bis_skin_checked="1">
                                                        <label for="select-allergies">Select Allergies</label>
                                                        <div class="allergy-dropdown">
                                                            <button class="allergy-toggle" type="button" id="allergies-toggle">
                                                                Select Allergies
                                                                <span class="dropdown-arrow">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <mask id="mask0_5440_5481" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                                            <rect width="24" height="24" fill="#D9D9D9" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_5440_5481)">
                                                                            <path d="M12 15.3746L6 9.37461L7.4 7.97461L12 12.5746L16.6 7.97461L18 9.37461L12 15.3746Z" fill="#436F86" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </button>

                                                            <div class="allergy-options" id="allergies">
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="lactoseintolerance">Lactose intolerance</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="lactoseintolerance">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="gluten-intolerance">Gluten intolerance</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="gluten-intolerance">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="fructose-intolerance">Fructose intolerance</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="fructose-intolerance">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="histamine-intolerance">Histamine intolerance</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="histamine-intolerance">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="sorbitol-intolerance">Sorbitol intolerance</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="sorbitol-intolerance">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="fodmap-intolerance">FODMAP intolerance</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="fodmap-intolerance">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="caffeine-sensitivity">Caffeine sensitivity</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="caffeine-sensitivity">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="salicylate-intolerance">Salicylate intolerance</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="salicylate-intolerance">
                                                                </div>
                                                                <div class="allergy-actions">
                                                                    <button type="button" class="clear-btn">Clear All</button>
                                                                    <button type="button" class="ok-btn">Ok</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="form-group">
                                                    <div class="inp-area" bis_skin_checked="1">
                                                        <label for="select-dietary-preferences">Select Dietary Preferences</label>
                                                        <div class="allergy-dropdown">
                                                            <button class="allergy-toggle" type="button" id="dietary-preferences-toggle">
                                                                Select Dietary Preferences
                                                                <span class="dropdown-arrow">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <mask id="mask0_5440_5481" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                                            <rect width="24" height="24" fill="#D9D9D9" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_5440_5481)">
                                                                            <path d="M12 15.3746L6 9.37461L7.4 7.97461L12 12.5746L16.6 7.97461L18 9.37461L12 15.3746Z" fill="#436F86" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </button>

                                                            <div class="allergy-options" id="dietary-preferences">
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="Vegan">Vegan</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="Vegan">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="vegetarian">Vegetarian</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="vegetarian">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="gluten-free">Gluten-free</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="gluten-free">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="dairy-free">Dairy-free</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="dairy-free">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="halal">Halal</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="halal">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="Kosher">kosher</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="Kosher">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="low-carb">Low-carb</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="low-carb">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="paleo">Paleo</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="paleo">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="mediterranean">Mediterranean</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="mediterranean">
                                                                </div>
                                                                <div class="allergy-option">
                                                                    <label class="form-check-label" for="pescatarian">Pescatarian</label>
                                                                    <input class="form-check-input" type="checkbox" value="" id="pescatarian">
                                                                </div>
                                                                <div class="allergy-actions">
                                                                    <button type="button" class="clear-btn">Clear All</button>
                                                                    <button type="button" class="ok-btn">Ok</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right login-btn">Sign Up</button>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="login-signup">
                                            <p>Already have an account? <a href="login.php">Sign In</a></p>
                                        </div>
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