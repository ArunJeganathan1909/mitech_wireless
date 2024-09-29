<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/mobile-top-up.css">
    <link rel="stylesheet" href="assets/css/finalPage.css">    
    <link rel="stylesheet" href="assets/css/checkout.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>

    <header class="head">
        <div class="header-content">
            <div class="header-head">
                <div class="header-headContent">
                    <div class="header-logo">
                        <a href="homePage.php">
                            <img src=" assets/img/logo.jpg" alt="Logo">
                            <span>MITECH WIRELESS</span>
                        </a>
                    </div>
                    <div class="header-head-content">
                        <div class="hhcc" id="needHelp"><a href="" class="help">Need Help?</a></div>
                        <div class="hhcc" id="country">
                            <div class="country-img">
                                <img src=" assets/img/usa.jpeg" alt="USA">
                            </div>
                            <div class="country-details">
                                <div class="country-description">EN</div>
                                <div class="row-devider" role="separator"></div>
                                <div class="country-description">USD</div>
                            </div>
                        </div>
                        <div class="hhcc" id="signUp">
                            <div class="signin">
                                <button class="signin-btn">
                                    <span>Sign in</span>
                                </button>
                            </div>
                            <div class="signout">
                                <button class="signout-btn">
                                    <span>Sign in</span>
                                </button>
                            </div>
                        </div>
                        <div class="hhcc" id="barline">
                            <span><i class="ri-indent-increase"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-navbar">
                <div class="header-navbar-nav">
                    <a href="mobile-top-up.php">
                        Mobile top-up
                    </a>
                </div>
                <div class="header-navbar-nav">
                    <a href="">
                        Entertainment
                    </a>
                </div>
                <div class="header-navbar-nav">
                    <a href="">
                        Shopping
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Modal Structure -->
    <div class="modal fade" id="barlineModal" tabindex="-1" aria-labelledby="barlineModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="header-navbar-mobile">
                        <div class="hnm-header">Menu</div>
                        <div class="hnm-navbar">
                            <div class="hnm-navbar-nav">
                                <a href="mobile-top-up.php">
                                    <span><i class="ri-file-user-fill"></i></span>
                                    <span>Mobile top-up</span>
                                </a>
                            </div>
                            <div class="hnm-navbar-nav">
                                <a href="">
                                    <span><i class="ri-hotel-fill"></i></span>
                                    <span>Entertainment</span>
                                </a>
                            </div>
                            <div class="hnm-navbar-nav">
                                <a href="">
                                    <span><i class="ri-shopping-bag-fill"></i></span>
                                    <span>Shopping</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-signup-mobile">
                        <div class="signin-mobile">
                            <button class="signin-btn">
                                <span>Sign in</span>
                            </button>
                        </div>
                        <div class="signout-mobile">
                            <button class="signout-btn">
                                <span>Sign in</span>
                            </button>
                        </div>
                    </div>
                    <div class="header-country-mobile">
                        <div class="hcm-header">
                            Preferences
                        </div>
                        <div class="hcm-container">
                            <div class="country-img">
                                <img src=" assets/img/usa.jpeg" alt="USA">
                            </div>
                            <div class="country-details">
                                <div class="country-description">US</div>
                                <div class="row-devider" role="separator"></div>
                                <div class="country-description">EN</div>
                                <div class="row-devider" role="separator"></div>
                                <div class="country-description">USD</div>
                            </div>
                        </div>
                    </div>
                    <div class="header-details-mobile">
                        <div class="hdm-container">
                            <a href="" class="help">Need Help?</a>
                        </div>
                        <div class="hdm-container">
                            <a href="" class="help">About Us</a>
                        </div>
                        <div class="hdm-container">
                            <a href="" class="help">Carriers</a>
                        </div>
                        <div class="hdm-container">
                            <a href="" class="help">Countries</a>
                        </div>
                        <div class="hdm-container">
                            <a href="" class="help">Blog</a>
                        </div>
                        <div class="hdm-container">
                            <a href="" class="help">Business</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const barline = document.getElementById('barline');
            const modal = new bootstrap.Modal(document.getElementById('barlineModal'));

            // Show the modal when the barline is clicked
            barline.addEventListener('click', function() {
                modal.show();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

</body>

</html>