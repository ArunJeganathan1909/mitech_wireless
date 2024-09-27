<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #ebebebde;">
    <div class="page">
        <header class="head">
            <div class="header-content">
                <div class="header-head">
                    <div class="header-headContent">
                        <div class="header-logo">
                            <a href="">
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
                        <a href="">
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
            <div class="header-supliment">
                <div class="header-supliment-content">
                    <div class="hscc">
                        <span><i class="ri-check-fill"></i></span>
                        <span>Instant digital delivery</span>
                    </div>
                    <div class="hscc">
                        <span><i class="ri-check-fill"></i></span>
                        <span>Trusted by millions</span>
                    </div>
                    <div class="hscc">
                        <span><i class="ri-check-fill"></i></span>
                        <span>Pay safely & securely</span>
                    </div>
                </div>
                <div class="header-supliment-review">
                    <a href="">
                        <div class="hsrc">
                            <span>Great</span>
                            <span>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-line"></i>
                            </span>
                        </div>
                        <div class="hsrc">
                            <span class="reviews">83,503 reviews on</span>
                        </div>
                        <div class="hsrc" id="trustpilot">
                            <span>
                                <i class="ri-shield-star-fill"></i>
                            </span>
                            <span class="trustpilot">Trustpilot</span>
                        </div>
                    </a>
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
                                    <a href="">
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
    </div>

    <div class="page-label">
        <div class="page-label-container">
            <div class="page-label-content">
                <div class="plcc">
                    <span>Worldwide mobile recharge: send credit and data to any phone</span>
                </div>
                <div class="plcl">
                    <form action="">
                        <div class="relative">
                            <div class="country-header">Recipient's country:</div>
                            <div class="country-dropdown">
                                <div class="country-selected">
                                    <div class="country-selected-content">
                                        <img src="assets/img/usa.jpeg" alt="United States" class="country-flag">
                                        <span class="country-name">United States</span>
                                    </div>
                                    <div class="country-selected-icon"><i
                                            class="ri-arrow-down-s-line country-arrow"></i></div>
                                </div>
                                <div class="country-options">
                                    <ul>
                                        <li>
                                            <img src="assets/img/usa.jpeg" alt="United States" class="country-flag">
                                            <span class="country-name">United States</span>
                                        </li>
                                        <li>
                                            <img src="assets/img/canada.jpeg" alt="Canada" class="country-flag">
                                            <span class="country-name">Canada</span>
                                        </li>
                                        <li>
                                            <img src="assets/img/mexico.jpeg" alt="Mexico" class="country-flag">
                                            <span class="country-name">Mexico</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <button>Start Recharge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="pupular">
        <div class="popular-details">
            <div class="popular-head">Popular Products</div>
            <div class="pupular-container">
                <div class="pupular-content">
                    <div class="pupular-content-card">
                        <a href="">
                            <img src="assets/img/lycamobile.png" alt="">
                            <p>Lycamobile</p>
                        </a>
                    </div>
                    <div class="pupular-content-card">
                        <a href="">
                            <img src="assets/img/googleplay.png" alt="">
                            <p>Google Play</p>
                        </a>
                    </div>
                    <div class="pupular-content-card">
                        <a href="">
                            <img src="assets/img/visa.png" alt="">
                            <p>Visa</p>
                        </a>
                    </div>
                    <div class="pupular-content-card">
                        <a href="">
                            <img src="assets/img/tinder.png" alt="">
                            <p>Tinder</p>
                        </a>
                    </div>
                </div>
                <div class="pupular-ad"></div>
            </div>
        </div>
    </div>
    <div class="mobile">
        <div class="mobile-topup-details">
            <div class="mobile-head">Mobile top-up</div>
            <div class="mobile-container">
                <div class="mobile-content">
                    <div class="mobile-content-card">
                        <a href="">
                            <img src="assets/img/lycamobile.png" alt="">
                            <p>Lycamobile</p>
                        </a>
                    </div>
                    <div class="mobile-content-card">
                        <a href="">
                            <img src="assets/img/tmobile.png" alt="">
                            <p>T-Mobile</p>
                        </a>
                    </div>
                    <div class="mobile-content-card">
                        <a href="">
                            <img src="assets/img/lycamobile.png" alt="">
                            <p>Lycamobile</p>
                        </a>
                    </div>
                    <div class="mobile-content-card">
                        <a href="">
                            <img src="assets/img/lycamobile.png" alt="">
                            <p>Lycamobile</p>
                        </a>
                    </div>
                    <div class="mobile-content-card">
                        <a href="">
                            <img src="assets/img/lycamobile.png" alt="">
                            <p>Lycamobile</p>
                        </a>
                    </div>
                    <div class="mobile-content-card">
                        <a href="">
                            <img src="assets/img/lycamobile.png" alt="">
                            <p>Lycamobile</p>
                        </a>
                    </div>
                </div>
                <div class="view-more">
                    <a href="">
                        View all products
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="reading-details">
        <div class="read-area">
            <!-- First Section -->
            <div class="read-area-container">
                <h3 class="read-heading">Recharge Online: From Mobile top-up to digital gift cards</h3>
                <hr>
                <div class="read-details">
                    <div class="read-details-container">
                        <p>Looking for a quick and safe way to buy mobile top-up online? Look no further than
                            Recharge.com! Here, you can top up any phone in the world, from anywhere.</p>
                        <p>And if you need more ways to support and surprise your loved ones (or yourself), we have
                            them, too.</p>
                        <p>Choose from a global assortment of prepaid credit cards (e.g. <a href="">Visa prepaid
                                card</a>) and digital gift cards. Finding a <a href="">gift for gamers</a> is as
                            easy as buying a <a href="">gift for the shopaholic in</a> your life. We offer <a
                                href="">Amazon gift cards</a>, PSN cards, Google Play gift cards and so much more!
                        </p>
                        <p>All our products are delivered instantly via e-mail, including redemption instructions.
                            You can use your product right away, or send it as a last-minute gift to anyone in the
                            world.</p>
                        <p>On Recharge.com, you can pay with a variety of currencies and payment options, including
                            PayPal. It's always fast, safe, and simple!</p>
                        <p>Questions? <a href="">Get in touch</a> and we'll do our best to assist you.</p>
                    </div>
                </div>
                <a href="javascript:void(0)" class="readMoreBtn">Read more</a>
                <a href="javascript:void(0)" class="showLessBtn" style="display: none;">Show less</a>
            </div>

            <!-- Second Section -->
            <div class="read-area-container">
                <h3 class="read-heading">Make the Most of Your Online Recharge</h3>
                <hr>
                <div class="read-details">
                    <div class="read-details-container">
                        <p>The prepaid products on Recharge.com can help you save money, keep your privacy online,
                            and support your favorite people.</p>
                        <p>Want to make the most of your recharge online? Stay up-to-date with our tips for saving
                            time and money with prepaid products.</p>
                        <h3 class="read-details-container-head">Read more on the Recharge Blog:</h3>
                        <ul>
                            <li>
                                <h3><a href="">Save money when moving to the USA</a></h3>
                            </li>
                            <li>
                                <h3><a href="">Send money to Mexico without a money transfer</a></h3>
                            </li>
                            <li>
                                <h3><a href="">Find the best international gift card</a></h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="javascript:void(0)" class="readMoreBtn">Read more</a>
                <a href="javascript:void(0)" class="showLessBtn" style="display: none;">Show less</a>
            </div>
        </div>
    </div>
    <footer>

    </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all "Read more" and "Show less" buttons
            const readMoreButtons = document.querySelectorAll('.readMoreBtn');
            const showLessButtons = document.querySelectorAll('.showLessBtn');

            readMoreButtons.forEach((readMoreBtn, index) => {
                const showLessBtn = showLessButtons[index];
                const readDetailsContainer = readMoreBtn.closest('.read-area-container').querySelector('.read-details-container');

                // Show full text when "Read more" is clicked
                readMoreBtn.addEventListener('click', function () {
                    readDetailsContainer.classList.add('full'); // Expand the text
                    readMoreBtn.style.display = 'none'; // Hide "Read more"
                    showLessBtn.style.display = 'inline'; // Show "Show less"
                });

                // Collapse text when "Show less" is clicked
                showLessBtn.addEventListener('click', function () {
                    readDetailsContainer.classList.remove('full'); // Collapse the text back to 3 lines
                    readMoreBtn.style.display = 'inline'; // Show "Read more"
                    showLessBtn.style.display = 'none'; // Hide "Show less"
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const barline = document.getElementById('barline');
            const modal = new bootstrap.Modal(document.getElementById('barlineModal'));

            // Show the modal when the barline is clicked
            barline.addEventListener('click', function () {
                modal.show();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>