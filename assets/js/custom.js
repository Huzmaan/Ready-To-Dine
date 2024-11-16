$(document).ready(function () {

  window.addEventListener("scroll", function () {
    let header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 50);
    // header.classList.toggle("fixed-top",window.scrollY > 600);
  });

  let url = window.location.pathname;
  let filename = url.substring(url.lastIndexOf('/') + 1);

    // For inner pages, show light logo and transparent navbar
    if (filename == "restaurant-details.php" || filename == "special-deals.php" || filename == "item-details.php") {
      $("header").addClass("white-logo-page");
  }

  $(".navbar-nav .nav-item .nav-link").removeClass("anim-active");
  if (filename == "") {
    filename = "index.php"
  }
  $(`.navbar-nav .nav-item .nav-link[href="${filename}"]`).addClass("anim-active")


  // Will wait for everything on the page to load.
  $(window).bind('load', function () {
    $('.overlay, body').addClass('loaded');
    setTimeout(function () {
      $('.overlay').css({ 'display': 'none' })
    }, 2000)
  });

  // Will remove overlay after 1min for users cannnot load properly.
  setTimeout(function () {
    $('.overlay, body').addClass('loaded');
  }, 60000);

  $("[data-bg-image]").each(function () {
    var img = $(this).data("bg-image");
    if (img) {
        // URL Escape to handle special characters in the URL
        var imageUrl = encodeURI(img);
        
        // Apply background-image CSS
        $(this).css({
            backgroundImage: "url(" + imageUrl + ")"
        });
    } else {
        console.warn("No image path found for element with data-bg-image.");
    }
});

var quantity = 0;
$('.quantity-right-plus').click(function (e) {
  e.preventDefault();
  var quantity = parseInt($('#quantity').val());
  $('#quantity').val(quantity + 1);
});

$('.quantity-left-minus').click(function (e) {
  e.preventDefault();
  var quantity = parseInt($('#quantity').val());
  if (quantity > 0) {
    $('#quantity').val(quantity - 1);
  }
});


// global ct select box start
$('.ct-select .select-box').on('click', function() {
  $(this).next('.select-options').toggle().toggleClass("open");
});

$('.ct-select .select-options .option').on('click', function() {
  var value = $(this).attr('data-value');
  var text = $(this).text();
  $(this).closest('.ct-select').find('.selected-option').text(text);
  $(this).closest('.select-options').removeClass("open").hide();

  console.log("Selected value:", value);
});


$(document).on('click', function(e) {
  if (!$(e.target).closest('.ct-select').length) {
    $('.ct-select .select-options').hide();
  }
});

  });


  $(document).ready(function() {
    setTimeout(function() {
      // Check the first radio button by default
      $('.edit-form .payment-method input[type="radio"]').first().prop('checked', true);
      
      // Add a red border to the first payment method by default
      $('.edit-form .payment-method').first().css('border', '1.5px solid #0E70F8');
  
      $('.edit-form .payment-method').on('click', function() {
        // Remove red border from all payment methods
        $('.edit-form .payment-method').css('border', 'none');
    
        // Add red border to the clicked payment method
        $(this).css('border', '1.5px solid #0E70F8');
    
        // Check the radio button inside the clicked payment method
        $(this).find('input[type="radio"]').prop('checked', true);
      });
    }, 1000); // Delay of 1 seconds
  });
  
  document.querySelectorAll(".pagination .page-link").forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault(); // Prevent the default link behavior
  
      // Remove the active class from all page items
      document.querySelectorAll(".pagination .page-item").forEach((item) => {
        item.classList.remove("active");
      });
  
      // Add the active class to the clicked link's parent item
      this.parentElement.classList.add("active");
    });
  });


  $('#allergies-toggle').click(function() {
    $('#allergies').toggle();
  });
  
  $('#dietary-preferences-toggle').click(function() {
    $('#dietary-preferences').toggle();
  });
  
  $('.allergy-options .allergy-actions .clear-btn').on('click', function() {
    $('.form-check-input').prop('checked', false);
  });
  
  $('.allergy-options .allergy-actions .ok-btn').click(function() {
    $('.allergy-options').hide();
  });
  
  function togglePasswordVisibility() {
    const $passwordInput = $('#passwordInput');
    const $toggleEyeIcon = $('#toggleEyeIcon');
  
    if ($passwordInput.attr('type') === 'password') {
        $passwordInput.attr('type', 'text');
        $toggleEyeIcon.removeClass('fa-eye').addClass('fa-eye-slash');
    } else {
        $passwordInput.attr('type', 'password');
        $toggleEyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
    }
  }
  
  function togglePasswordVisibility() {
    const $passwordInput = $('#passwordInput');
    const $toggleEyeIcon = $('#toggleEyeIcon');
  
    if ($passwordInput.attr('type') === 'password') {
        $passwordInput.attr('type', 'text');
        $toggleEyeIcon.removeClass('fa-eye').addClass('fa-eye-slash');
    } else {
        $passwordInput.attr('type', 'password');
        $toggleEyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
    }
  }
  
  function toggleConfirmPasswordVisibility() {
    const $confirmPasswordInput = $('#confirmPasswordInput');
    const $toggleConfirmEyeIcon = $('#toggleConfirmEyeIcon');
  
    if ($confirmPasswordInput.attr('type') === 'password') {
        $confirmPasswordInput.attr('type', 'text');
        $toggleConfirmEyeIcon.removeClass('fa-eye').addClass('fa-eye-slash');
    } else {
        $confirmPasswordInput.attr('type', 'password');
        $toggleConfirmEyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
    }
  }
  


