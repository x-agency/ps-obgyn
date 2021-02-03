<?php
   /*
    Template Name: Services
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }

    $hero = get_field('hero');
    ?>
<?php get_header(); ?>

<section id="page-header">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <h1><?php echo $hero['title']; ?></h1>
        </div>
    </div>
    <div class="header-circle"></div>
</section>
<section id="ob-services">
    <div class="container-fluid services-wrapper">
        <div class="nav-box">
            <ul class="list-unstyled">
                <li><a class="service-nav active" id="care" href="#">General Women's Care</a></li>
                <li><a class="service-nav" href="#" id="pregnancy">Pregnancy & Postpartum</a></li>
                <li><a href="">Medical Procedures</a></li>
                <li><a href="">Urgent Concerns</a></li>
                <li><a href="">Adolescent Care</a></li>
                <li><a href="">Sexual Wellness</a></li>

            </ul>
        </div>
        <div class="services-inner" id="care">
            <div class="row services-top">
                <div class="divider"></div>
                <div class="col-md-4">
                    <div class="subtitle">GENERAL WOMEN'S CARE</div>
                    <p class="text-large">Comprehensive Care For Every Women</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum. </p>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="service-img">
                        <img src="/wp-content/themes/ps-obgyn/img/services-img-1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="services-bottom">
                <div class="services-bottom-inner">
                    <h3>What We Do?</h3>
                    <div class="divider"></div>
                    <div class="service-list">
                        <ul class="list-left list-unstyled">
                            <li>Abdominal or Pelvic Pain</li>
                            <li>Benign Breast Disorders</li>
                            <li>Breast Screening</li>
                            <li>Bone Health</li>
                            <li>Care-Routine Well Woman Care</li>
                            <li>Cervical Cancer Screening</li>
                            <li>Common Mental Health Concerns</li>
                            <li>Contraceptive Counseling and Provision</li>
                            <li>Endometriosis</li>
                            <li>FIbroid Uterus</li>
                            <li>Hormone Replacement Therapy</li>
                            <li>Hirsutism (Extra Dark Hair Growth) or Elevated Androgens</li>
                        </ul>
                        <ul class="list-unstyled list-right">
                            <li>Ovarian Masses</li>
                            <li>Menopausal Medicine</li>
                            <li>Painful, Heavy or Irregular Periods (Mensus)</li>
                            <li>Pain with Sex (Dyspareunia)</li>
                            <li>PCOS (Polycystic Ovary Syndrome)</li>
                            <li>Reproducive Health</li>
                            <li>Self-Care</li>
                            <li>Sexually Transmitted Infections</li>
                            <li>Sterilzation</li>
                            <li>Uniary Incontinence, Urgency and Frequency</li>
                            <li>Vaginal Dryness and Discomfort</li>
                            <li>Vaginal Prolapse</li>
                            <li>Vulvar Disorders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-inner" id="pregnancy">
            <div class="row services-top">
                <div class="divider"></div>
                <div class="col-md-4">
                    <div class="subtitle">preganancy & postpartum</div>
                    <p class="text-large">Bringing Life To New Beginnings And Beyond</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum. </p>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="service-img">
                        <img src="/wp-content/themes/ps-obgyn/img/services-img-2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="services-bottom">
                <div class="services-bottom-inner">
                    <h3>What We Do?</h3>
                    <div class="divider"></div>
                    <div class="service-list">
                        <ul class="list-left list-unstyled">
                            <li>Fertility Evaluation and Preconception Counseling</li>
                            <li>Prenatal Ultrasound</li>
                            <li>Reproductive Health</li>
                            <li>Fetal Non-stress Test</li>
                            <li>Routine and High Risk Prenatal Care</li>
                            <li>Pelvic Floor Health Evaluation and Support</li>
                        </ul>
                        <ul>
                            <li>Postpartum Care-Emphasis on Mental Health</li>
                            <li>Self-Care</li>
                            <li>The 4th Trimester-Healthy Adjustment of Mom and Baby</li>
                            <li>Vaginal and Cesarean Delivery</li>
                            <li>Trial of Labor after Cesa</li>
                            <ul class="list-unstyled list-right">
                            </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="services-cta">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-large">Schedule Your Appointment</p>
                <p>Take the next step in your health journey by reaching out to schedule an appointment. We promise to
                    take geat care in treating you like the extraordinary woman you are. Getting stared is easy. We
                    can’t wait to meet you.</p>
                <div class="cta-btn">
                    <a href="/contact" class="btn ob-btn">GET STARTED</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>

<script>
new WOW().init();
</script>