<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>

</div> <!-- ast-container -->

</div><!-- #content -->

<section id="footer">
    <div class="container-fluid">
        <div class="row footer-top">
            <div class="col-12 footer-text text-center">525 Verdae Blvd, Suite 150, Greenville, SC 29607
                <br><span>|</span> Phone
                <a href="tel:864.720.1900">864.720.1900</a> <span>|</span><br> Fax
                864.720.1901</div>
            <div class="col-12 footer-text text-center">Mon-thurs: 8am-4:30pm <br><span>|</span> fri: 8AM-12PM</div>
        </div>
        <div class="footer-bottom row">
            <div class="col-12 footer-bottom-wrapper">
                <div class="footer-text copyright">copyright © 2021 <br>Parkside OB-GYN</div>
                <div class="footer-text"><a target="_blank"
                        href="https://parksideob-gyn.wpserver.cloud/wp-content/uploads/2020/12/HIPAA_Notice_of_Privacy_Practices_WM2-1.pdf">PRIVACY
                        POLICY</a>
                    <div class="made-by footer-text"><a href="https://xagency.io" target="_blank">made by X</a></div>
                </div>
                <div class="footer-text connect">connect with us:<br>
                    <a target="_blank" href="https://www.instagram.com/parksideobgyn/"><i
                            class="fa fa-instagram"></i></a>
                    <a target="_blank" href="https://www.facebook.com/parksideobgyn/"><i class="fa fa-facebook"></i></a>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Full Screen Menu -->

<!-- Modal -->
<div class="modal modal-menu fade" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="modalMenu"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-menu-wrapper">
                <div class="modal-menu-inner">
                    <div class="menu-nav-block">
                        <div class="menu-nav-block-inner">
                            <ul class="list-unstyled">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <!-- <li><a href="/about/#providers">Our Providers</a></li>
                                <li><a href="">Our Services</a></li> -->
                                <li><a href="/expecting">Expecting</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/new-patients">New Patients</a></li>
                                <!--li><a href="/patient-resources">Patient Resources</a></li-->
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                            <div class="link-box"><a target="_blank"
                                    href="https://www.tribe513.org/join-our-team/">JOIN
                                    OUR TEAM</a></div>
                        </div>

                    </div>
                    <div class="menu-info-block">
                        <div class="menu-info-block-inner">
                            <div class="portal-btn"><a target="_blank" href="https://mycw88.ecwcloud.com/portal11812/jsp/100mp/login_otp.jsp">patient portal</a></div>
                            <div class="portal-btn"><a target="_blank" href="https://www.healowpay.com/HealowPay/jsp/healow/login.jsp">Pay My Bill</a></div>
                            <div class="info-block">525 Verdae Blvd, Suite 150<br> Greenville, SC 29607</div>
                            <div class="info-block">PHONE <a href="tel:8647201900">864.720.1900</a><br>FAX
                                864.720.1901</a></div>
                            <div class="info-block">MON-THURS: 8am-4:30pm<br>Fri: 8am - 12pm</div>
                        </div>

                    </div>
                    <div class="modal-nav-footer">
                        <div class="container-fluid">
                            <div class="row footer-top">
                                <div class="col-12 footer-text text-center">525 Verdae Blvd, Suite 150, Greenville, SC
                                    29607
                                    <br><span>|</span> Phone
                                    <a href="tel:864.720.1900">864.720.1900</a> <span>|</span><br> Fax
                                    864.720.1901</div>
                                <div class="col-12 footer-text text-center">Mon-thurs: 8am-4:30pm <br><span>|</span>
                                    fri: 8AM-12PM</div>
                            </div>
                            <div class="footer-bottom row">
                                <div class="col-12 footer-bottom-wrapper">
                                    <div class="footer-text copyright">copyright © 2021 <br>Parkside OB-GYN</div>
                                    <div class="footer-text"><a target="_blank"
                                            href="https://parksideob-gyn.wpserver.cloud/wp-content/uploads/2020/12/HIPAA_Notice_of_Privacy_Practices_WM2-1.pdf">PRIVACY
                                            POLICY</a>

                                    </div>
                                    <div class="footer-text connect">connect with us:<br>
                                        <a target="_blank" href="https://www.instagram.com/parksideobgyn/"><i
                                                class="fa fa-instagram"></i></a>
                                        <a target="_blank" href="https://www.facebook.com/parksideobgyn/"><i
                                                class="fa fa-facebook"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</div><!-- #page -->

<?php astra_body_bottom(); ?>

<?php wp_footer(); ?>
<script>
$(document).ready(function() {
    wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animate__animated animated', 
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        }
    )
    wow.init();
})
</script>
</body>

</html>