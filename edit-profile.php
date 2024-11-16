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
    <main class="edit-profile-main">
        <section class="sec-edit-profile-main">
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
                            <div class="form-ar-img">
                                <figure>
                                    <img src="assets/images/my-account/profile/one.png"
                                        alt="icon">
                                </figure>
                                <a href="javascript:void(0);"
                                    onclick="document.getElementById('file-input').click();">
                                    <figure>
                                        <img src="assets/images/my-account/icons/edit-icon.png" alt="icon">
                                    </figure>
                                </a>
                                <input type="file" id="file-input" style="display: none;" />
                            </div>
                            <h5>Bruce Nelson</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-edit-profile-form">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="edit-form">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" placeholder="brucenelson@demomail.com" class="form-control email-input-icon" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="number">Phone Number</label>
                                            <input type="number" id="number" name="phone" placeholder="+1 (027) 266-7137" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="form-group">
                                            <label for="text">Location</label>
                                            <input type="text" id="text" name="text" placeholder="Theron Branch Suite 920" class="form-control location-input-icon" required>
                                        </div>
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

                                <button type="submit" class="btn ct-btn-prim hvr-bounce-to-right save-btn">Save Changes</button>
                            </form>
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