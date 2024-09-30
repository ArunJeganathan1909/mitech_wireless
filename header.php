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
                            <div class="signup">
                                <button class="signup-btn">
                                    <span>Sign up</span>
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
                        <div class="signup-mobile">
                            <button class="signup-btn">
                                <span>Sign up</span>
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

    <!-- Signup model -->
    <div class="modal login" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="login-signup">
                        <div class="ls-container">
                            <div class="ls-header">Create your free Recharge account</div>
                            <div class="ls-body">
                                <div class="lsb-content">
                                    <div class="lsbc-card" id="email-signup">
                                        <div class="lsbc-img">
                                            <img src="assets/img/email.jpg" alt="email">
                                        </div>
                                        <div class="lsbc-content">
                                            <span>Signup with email</span>
                                        </div>
                                    </div>
                                    <div class="lsbc-card" id="google-signup">
                                        <div class="lsbc-img">
                                            <img src="assets/img/google.png" alt="email">
                                        </div>
                                        <div class="lsbc-content">
                                            <span>Signup with google</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lsb-quate">
                                    <p>By signing up with Recharge.com you agree with our <a href="">Terms and Conditions</a> and <a href="">Privacy Statement</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ls-footer">
                            <span>Already have an account?</span>
                            <span class="sigin-direct">Sign in</span>
                        </div>
                    </div>
                    <div class="login-signin">
                        <div class="ls-container">
                            <div class="ls-header">Welcome back</div>
                            <div class="ls-body">
                                <div class="lsb-content">
                                    <div class="lsbc-card" id="email-signin">
                                        <div class="lsbc-img">
                                            <img src="assets/img/email.jpg" alt="email">
                                        </div>
                                        <div class="lsbc-content">
                                            <span>Signin with email</span>
                                        </div>
                                    </div>
                                    <div class="lsbc-card" id="google-signin">
                                        <div class="lsbc-img">
                                            <img src="assets/img/google.png" alt="email">
                                        </div>
                                        <div class="lsbc-content">
                                            <span>Signin with google</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lsb-quate">
                                    <p>By logging in with Recharge.com you agree with our <a href="">Terms and Conditions</a> and <a href="">Privacy Statement</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ls-footer">
                            <span>No account yet</span>
                            <span class="signup-direct">Sign up for free</span>
                        </div>
                    </div>
                    <div class="email-signin">
                        <div class="es-header">Welcome back</div>

                        <form id="signin-form">
                            <div class="form-group email-group">
                                <label for="signin-email" class="email-label">Email address</label>
                                <input type="email" id="signin-email" placeholder="Email address">
                            </div>
                            <div class="email-error-signin">Please enter a proper email address.</div>
                            <div class="form-group password-group">
                                <div class="fg-password">
                                    <label for="signin-password" class="password-label">Password</label>
                                    <input type="password" id="signin-password" placeholder="Password">
                                </div>
                                <div class="fg-icon">
                                    <i class="ri-eye-line" id="signin-open"></i>
                                    <i class="ri-eye-off-line" id="signin-hide" style="display: none;"></i>
                                </div>
                            </div>
                            <div class="password-error-signin">Enter proper password.</div>
                            <div class="dont-forgot">
                                <input type="checkbox" id="remember-me" class="remember-checkbox">
                                <span class="remember-label">Don't forget me</span>
                            </div>
                            <button type="submit" class="signinToPage">Sign In</button>
                            <div class="navigate">
                                <span class="back-button">Back</span>
                                <span class="forgot-button">Forgot Password</span>
                            </div>
                        </form>
                    </div>
                    <div class="email-signnp">
                        <div class="es-header">Create your free Recharge account</div>
                        <form id="register-form">
                            <div class="form-group email-group">
                                <label for="register-email" class="email-label">Email address</label>
                                <input type="email" id="register-email" placeholder="Email address">
                            </div>
                            <div class="email-error-signup">Please enter a proper email address.</div>
                            <div class="form-group password-group">
                                <div class="fg-password">
                                    <label for="register-password" class="password-label">Password</label>
                                    <input type="password" id="register-password" placeholder="Password">
                                </div>
                                <div class="fg-icon">
                                    <i class="ri-eye-line" id="register-open"></i>
                                    <i class="ri-eye-off-line" id="register-hide" style="display: none;"></i>
                                </div>
                            </div>
                            <div class="password-error-signup">Safety first! Make sure the password matches the requirements below.</div>
                            <div class="form-pasword-quate">
                                A minimum of 8 characters and at least one special character ( @#!... )
                            </div>
                            <button type="submit" class="register">Register</button>
                            <div class="navigate">
                                <span class="back-button">Back</span>
                            </div>
                        </form>
                    </div>
                    <div class="reset-password">
                        <div class="rp-header">Reset your password</div>
                        <div class="reset-password-quate">
                            Please enter your email address below. If an account exists for that address, we will send you a password reset link within a few minutes.
                        </div>
                        <form id="reset-password-form">
                            <div class="form-reset-group email-group">
                                <label for="reset-password-email" class="email-label">Email address</label>
                                <input type="email" id="reset-password-email" placeholder="Email address">
                            </div>
                            <div class="email-error-reset">Please enter a proper email address.</div>

                            <button type="submit" class="reset-password-button">Reset Password</button>
                            <div class="navigate">
                                <span class="back-button">Back</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const barline = document.getElementById('barline');
            const barlineModal = new bootstrap.Modal(document.getElementById('barlineModal'));
            const loginModal = new bootstrap.Modal(document.getElementById('login'));

            // Show the modal when the barline is clicked
            barline.addEventListener('click', function() {
                barlineModal.show();
            });

            // Get the login-signin and login-signup sections
            const loginSignin = document.querySelector('.login-signin');
            const loginSignup = document.querySelector('.login-signup');
            const emailSignin = document.querySelector('.email-signin');
            const emailSignup = document.querySelector('.email-signnp');
            const resetPassword = document.querySelector('.reset-password');

            // Initially hide the email-signin, email-signnp and reset-password sections
            emailSignin.style.display = 'none';
            emailSignup.style.display = 'none';
            resetPassword.style.display = 'none';

            // Show login modal when sign in or sign up is clicked
            const signInElements = document.querySelectorAll('.signin, .signin-btn');
            const signUpElements = document.querySelectorAll('.signup, .signup-btn');

            // Event listener for signin and signin-btn (show login-signin, hide login-signup)
            signInElements.forEach(element => {
                element.addEventListener('click', function() {
                    loginSignup.style.display = 'none';
                    loginSignin.style.display = 'flex';
                    emailSignin.style.display = 'none';
                    emailSignup.style.display = 'none';
                    resetPassword.style.display = 'none';
                    loginModal.show();
                });
            });

            // Event listener for signup and signup-btn (show login-signup, hide login-signin)
            signUpElements.forEach(element => {
                element.addEventListener('click', function() {
                    loginSignin.style.display = 'none';
                    loginSignup.style.display = 'flex';
                    emailSignin.style.display = 'none';
                    emailSignup.style.display = 'none';
                    resetPassword.style.display = 'none';
                    loginModal.show();
                });
            });

            // Get the signup-direct and sigin-direct buttons
            const signupDirect = document.querySelector('.signup-direct');
            const signinDirect = document.querySelector('.sigin-direct');

            // Event listener for signup-direct (show login-signup, hide login-signin)
            signupDirect.addEventListener('click', function() {
                loginSignin.style.display = 'none';
                loginSignup.style.display = 'flex';
                emailSignin.style.display = 'none';
                emailSignup.style.display = 'none';
            });

            // Event listener for sigin-direct (show login-signin, hide login-signup)
            signinDirect.addEventListener('click', function() {
                loginSignup.style.display = 'none'; 
                loginSignin.style.display = 'flex'; 
                emailSignin.style.display = 'none'; 
                emailSignup.style.display = 'none'; 
            });

            // Event listener for email signup card (show email-signnp, hide login-signup)
            const emailSignupCard = document.getElementById('email-signup');
            emailSignupCard.addEventListener('click', function() {
                loginSignup.style.display = 'none';
                emailSignup.style.display = 'flex';
            });

            // Event listener for email signin card (show email-signin, hide login-signin)
            const emailSigninCard = document.getElementById('email-signin');
            emailSigninCard.addEventListener('click', function() {
                loginSignin.style.display = 'none'; 
                emailSignin.style.display = 'flex'; 
            });

            // Event listener for the back buttons to navigate back to login-signin or login-signup or email-signin
            const backButtons = document.querySelectorAll('.back-button');
            backButtons.forEach(button => {
                button.addEventListener('click', function() {
                    if (emailSignup.style.display === 'flex') {
                        emailSignup.style.display = 'none';
                        loginSignup.style.display = 'flex';
                    } else if (emailSignin.style.display === 'flex') {
                        emailSignin.style.display = 'none';
                        loginSignin.style.display = 'flex';
                    } else if (resetPassword.style.display === 'flex') {
                        resetPassword.style.display = 'none';
                        emailSignin.style.display = 'flex';
                    }
                });
            });

            // Event listener for register button (hide email-signnp, show email-signin)
            const registerBtn = document.querySelector('.register');
            registerBtn.addEventListener('click', function(event) {
                event.preventDefault();
                emailSignup.style.display = 'none';
                emailSignin.style.display = 'flex';
            });

            // Event listener for signinToPage button (close modal)
            const signinToPageBtn = document.querySelector('.signinToPage');
            signinToPageBtn.addEventListener('click', function() {
                loginModal.hide();
            });

            // Event listener for forgot-password button (show reset-password, hide email-signin)
            const forgotPasswordBtn = document.querySelector('.forgot-button');
            forgotPasswordBtn.addEventListener('click', function() {
                emailSignin.style.display = 'none'; 
                resetPassword.style.display = 'flex';
            });

            // Event listener for reset-password-button (show email-signin, hide reset-password)
            const resetPasswordBtn = document.querySelector('.reset-password-button');
            resetPasswordBtn.addEventListener('click', function(event) {
                event.preventDefault();
                resetPassword.style.display = 'none'; 
                emailSignin.style.display = 'flex';
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements for sign-in form
            const signinEmailInput = document.getElementById('signin-email');
            const signinPasswordInput = document.getElementById('signin-password');
            const signinEmailLabel = document.querySelector('.email-signin .email-label');
            const signinPasswordLabel = document.querySelector('.email-signin .password-label');
            const signinEmailGroup = document.querySelector('.email-signin .email-group');
            const signinPasswordGroup = document.querySelector('.email-signin .password-group');
            const signinOpenIcon = document.getElementById('signin-open');
            const signinHideIcon = document.getElementById('signin-hide');

            // Elements for sign-up form
            const registerEmailInput = document.getElementById('register-email');
            const registerPasswordInput = document.getElementById('register-password');
            const registerEmailLabel = document.querySelector('.email-signnp .email-label');
            const registerPasswordLabel = document.querySelector('.email-signnp .password-label');
            const registerEmailGroup = document.querySelector('.email-signnp .email-group');
            const registerPasswordGroup = document.querySelector('.email-signnp .password-group');
            const registerOpenIcon = document.getElementById('register-open');
            const registerHideIcon = document.getElementById('register-hide');

            // Elements for reset password form
            const resetPasswordEmailInput = document.getElementById('reset-password-email');
            const resetPasswordEmailLabel = document.querySelector('.reset-password .email-label');
            const resetPasswordEmailGroup = document.querySelector('.reset-password .email-group');

            // Error message elements
            const emailErrorSignup = document.querySelector('.email-error-signup');
            const passwordErrorSignup = document.querySelector('.password-error-signup');
            const emailErrorSignin = document.querySelector('.email-error-signin');
            const passwordErrorSignin = document.querySelector('.password-error-signin');
            const emailErrorReset = document.querySelector('.email-error-reset');

            // Validation patterns
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const passwordRegex = /^(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;

            // Helper function for toggling input labels and validation
            function handleInputChange(input, label, group, regex, errorElement) {
                if (input.value.length > 0) {
                    label.style.display = 'flex';
                } else {
                    label.style.display = 'none';
                }

                if (regex.test(input.value)) {
                    group.classList.remove('incorrect');
                    group.classList.add('correct');
                    errorElement.style.display = 'none'; 
                } else {
                    group.classList.remove('correct');
                    group.classList.add('incorrect');
                    errorElement.style.display = 'flex'; 
                }
            }

            // Sign-in form functionality
            signinEmailInput.addEventListener('input', function() {
                handleInputChange(signinEmailInput, signinEmailLabel, signinEmailGroup, emailRegex, emailErrorSignin);
            });

            signinPasswordInput.addEventListener('input', function() {
                handleInputChange(signinPasswordInput, signinPasswordLabel, signinPasswordGroup, passwordRegex, passwordErrorSignin);
            });

            signinOpenIcon.addEventListener('click', function() {
                signinPasswordInput.type = 'text';
                signinOpenIcon.style.display = 'none';
                signinHideIcon.style.display = 'inline';
            });

            signinHideIcon.addEventListener('click', function() {
                signinPasswordInput.type = 'password';
                signinHideIcon.style.display = 'none';
                signinOpenIcon.style.display = 'inline';
            });

            // Register form functionality
            registerEmailInput.addEventListener('input', function() {
                handleInputChange(registerEmailInput, registerEmailLabel, registerEmailGroup, emailRegex, emailErrorSignup);
            });

            registerPasswordInput.addEventListener('input', function() {
                handleInputChange(registerPasswordInput, registerPasswordLabel, registerPasswordGroup, passwordRegex, passwordErrorSignup);
            });

            registerOpenIcon.addEventListener('click', function() {
                registerPasswordInput.type = 'text';
                registerOpenIcon.style.display = 'none';
                registerHideIcon.style.display = 'inline';
            });

            registerHideIcon.addEventListener('click', function() {
                registerPasswordInput.type = 'password';
                registerHideIcon.style.display = 'none';
                registerOpenIcon.style.display = 'inline';
            });

            resetPasswordEmailInput.addEventListener('input', function() {
                handleInputChange(resetPasswordEmailInput, resetPasswordEmailLabel, resetPasswordEmailGroup, emailRegex, emailErrorReset);
            });
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

</body>

</html>