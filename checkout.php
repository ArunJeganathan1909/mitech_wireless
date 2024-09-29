<?php include 'header.php'; ?>

<div class="checkout-page">
    <div class="cp-quate">
        <i class="ri-time-line"></i>
        <span>Instant delivery to phone</span>
    </div>
    <div class="cp-header">
        <div class="cph"><span>Check out</span></div>
    </div>
    <div class="cp-container">
        <div class="cpc">
            <div class="cpc-contact">
                <div class="cpcc-email">
                    <div class="cpcce-header">
                        <div class="cpcceh-head">
                            <div class="cpcce-header-no">1</div>
                            <div class="cpcce-header-tick" style="display: none;"><i class="ri-check-line"></i></div>
                            <div class="cpcce-header-head">1. Email Address</div>
                        </div>
                        <div class="cpcceh-icon"><i class="ri-edit-2-line"></i></div>
                    </div>
                    <p class="cpcce">That's where we'll send your code.</p>
                    <p class="email-id" style="display: none;">jeganathanarun@gmail.com</p>
                    <div class="cpcce-email">
                        <div class="cpccee">
                            <div class="cpccee-input">
                                <label for="email" style="display: none;">Email address</label>
                                <input type="text" id="email" placeholder="Email address">
                            </div>
                        </div>
                        <small class="required">Required field</small>
                    </div>
                    <div class="cpcce-payment">
                        <span>Continue to payment</span>
                    </div>
                    <small class="cpcce">All information you provide will be used in accordance with our privacy policy.</small>
                </div>
                <div class="cpcc-payment">
                    <div class="cpccp-header">
                        <div class="cpccp-header-no">2</div>
                        <div class="cpccp-header-head">2. Payment Method</div>
                    </div>
                    <div class="cpccp-container">
                        <div class="cpccpc-content">
                            <span><i class="ri-lock-2-line"></i></span>
                            <span>Safe and secure payment with 256-bit SSL connection</span>
                        </div>
                        <div class="cpccpc-payment">
                            <div class="cpccpc-payment-card">
                                <div class="cpccpcp-header">
                                    <div class="payment-card-details">
                                        <img src="assets/img/visalogo.png" alt="visa">
                                        <div class="pcd-payment">
                                            <span>Visa</span>
                                        </div>
                                    </div>
                                    <div class="payment-card-radio">
                                        <input type="radio" id="visa" name="paymentCard" value="visa">
                                    </div>
                                </div>
                                <div class="cpccpcp-content">
                                    <div class="cpccpcp-content-button">Complete payment</div>
                                </div>
                            </div>

                            <div class="cpccpc-payment-card">
                                <div class="cpccpcp-header">
                                    <div class="payment-card-details">
                                        <img src="assets/img/mastercard.png" alt="mastercard">
                                        <div class="pcd-payment">
                                            <span>Mastercard</span>
                                            <span id="transaction-fee">USD 0.52</span>
                                        </div>
                                    </div>
                                    <div class="payment-card-radio">
                                        <input type="radio" id="mastercard" name="paymentCard" value="mastercard">
                                    </div>
                                </div>
                                <div class="cpccpcp-content">
                                    <div class="cpccpcp-content-button">Complete payment</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cpc-amount">
                <div class="cpca-payment">
                    <div class="cpcapp" style="border-bottom: 1px solid #ccc;">
                        <div class="cpcap">
                            <div class="cpcap-package">
                                <img src="assets/img//lycamobile.png" alt="lyca">
                                <span>Lycamobile Unlimited 19 USD</span>
                            </div>
                            <div class="cpcap-icon"><i class="ri-edit-2-line"></i></div>
                        </div>
                        <div class="cpcap">
                            <span>Telephone number:</span>
                            <span>+1 7184500708</span>
                        </div>
                    </div>
                    <div class="cpcapp">
                        <div class="cpcapp-amount">
                            <span>Lycamobile Unlimited 19 USD x1</span>
                            <span>USD 19.00</span>
                        </div>
                        <div class="cpcapp-amount" id="service-fee">
                            <div class="cpcapp-amount-service">
                                <span>Service fee</span>
                                <i class="ri-information-2-fill"></i>
                            </div>
                            <span>+ USD 3.59</span>
                        </div>
                        <div class="cpcapp-amount" id="transaction">
                            <span>Transaction cost</span>
                            <span>+ USD 0.52</span>
                        </div>
                        <div class="cpcapp-amount" id="total">
                            <span>Total</span>
                            <span>USD 23.11</span>
                        </div>
                        <div class="cpcapp-promo">
                            <span>Add promo code</span>
                            <i class="ri-arrow-down-s-line"></i>
                            <i class="ri-arrow-up-s-line" style="display: none;"></i>
                        </div>
                        <div class="cpcapp-apply-promo">
                            <div class="cpcapp-promo-input">
                                <input type="text" placeholder="Promo code" id="promo-code">
                            </div>
                            <div class="cpcapp-promo-button">Apply</div>
                        </div>
                    </div>
                </div>
                <div class="cpca-quate">
                    <i class="ri-time-line"></i>
                    <span>Instant delivery to phone</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if the current page is checkout.php
        if (window.location.pathname.includes('checkout.php')) {
            // Hide the specified classes
            document.querySelector('.header-head-content').style.display = 'none';
            document.querySelector('.header-navbar').style.display = 'none';
            document.querySelector('.footer-header').style.display = 'none';
            document.querySelector('.footer-foot').style.display = 'none';
            document.querySelector('.fth-normal').style.display = 'none';

            // Show the fth-checkout class
            document.querySelector('.fth-checkout').style.display = 'flex';
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        const emailInput = document.getElementById('email');
        const emailLabel = emailInput.previousElementSibling;
        const requiredField = document.querySelector('.required');

        // Show label when typing in the input field
        emailInput.addEventListener('input', function() {
            if (emailInput.value.trim() !== "") {
                emailLabel.style.display = "flex";
                requiredField.style.display = "none";
            } else {
                emailLabel.style.display = "none";
                requiredField.style.display = "flex";
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Get all header elements and content sections
        const paymentCards = document.querySelectorAll('.cpccpc-payment-card');

        paymentCards.forEach(function(card) {
            const header = card.querySelector('.cpccpcp-header');
            const radio = card.querySelector('.payment-card-radio input');
            const content = card.querySelector('.cpccpcp-content');

            // Hide all contents initially
            content.style.display = 'none';

            // Add click event to the header
            header.addEventListener('click', function() {
                // Deselect all other radio buttons and hide all other content sections
                paymentCards.forEach(function(otherCard) {
                    const otherRadio = otherCard.querySelector('.payment-card-radio input');
                    const otherContent = otherCard.querySelector('.cpccpcp-content');

                    otherRadio.checked = false;
                    otherContent.style.display = 'none';
                });

                // Select the current radio and show the corresponding content
                radio.checked = true;
                content.style.display = 'flex';
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const paymentButton = document.querySelector('.cpcce-payment');
        const editIcon = document.querySelector('.cpcceh-icon');

        // Elements to hide and show
        const cpccpContainer = document.querySelector('.cpccp-container');
        const emailId = document.querySelector('.email-id');
        const headerTick = document.querySelector('.cpcce-header-tick');
        const headerIcon = document.querySelector('.cpcceh-icon');

        const headerNo = document.querySelector('.cpcce-header-no');
        const emailSection = document.querySelector('.cpcce-email');
        const paymentSection = document.querySelector('.cpcce-payment');
        const smallText = document.querySelector('.cpcce');

        // Hide elements when clicking on "Continue to payment"
        paymentButton.addEventListener('click', function() {
            cpccpContainer.style.display = 'flex';
            emailId.style.display = 'flex';
            headerTick.style.display = 'flex';
            headerIcon.style.display = 'flex';

            headerNo.style.display = 'none';
            emailSection.style.display = 'none';
            paymentSection.style.display = 'none';
            smallText.style.display = 'none';
        });

        // Reverse action when clicking on the edit icon
        editIcon.addEventListener('click', function() {
            cpccpContainer.style.display = 'none';
            emailId.style.display = 'none';
            headerTick.style.display = 'none';
            headerIcon.style.display = 'none';

            headerNo.style.display = 'flex';
            emailSection.style.display = 'flex';
            paymentSection.style.display = 'flex';
            smallText.style.display = 'flex';
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const promoToggle = document.querySelector('.cpcapp-promo');
        const promoApply = document.querySelector('.cpcapp-apply-promo');
        const arrowDown = document.querySelector('.ri-arrow-down-s-line');
        const arrowUp = document.querySelector('.ri-arrow-up-s-line');

        promoToggle.addEventListener('click', function() {
            // Toggle the visibility of the promo apply section
            if (promoApply.style.display === 'none' || promoApply.style.display === '') {
                promoApply.style.display = 'flex';
                arrowUp.style.display = 'inline';
                arrowDown.style.display = 'none';
            } else {
                promoApply.style.display = 'none';
                arrowUp.style.display = 'none';
                arrowDown.style.display = 'inline';
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const redirectIcon = document.querySelector('.cpcap-icon');

        redirectIcon.addEventListener('click', function() {
            window.location.href = 'finalPage.php';
        });
    });
</script>