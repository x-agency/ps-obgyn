<?php
   /*
    Template Name: Patient Resources
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section id="page-header">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <h1><span>Patient</span> Resources</h1>
        </div>
        <div class="row resource-intro">
            <p>From early teen to late-in-life general women’s health to pregnancy and postpartum to urgent medical
                concerns, Parkside OB-GYN is here for life. We want to provide first-class care and support by equipping
                you with the tools and information you need along the way. </p>
            <div class="subtitle">jump to:</div>
            <div class="quick-link-wrapper">
                <div class="quick-link">
                    <div class="ob-btn"><a href="#patient-forms">patient forms</a></div>
                </div>
                <div class="quick-link">
                    <div class="ob-btn"><a href="#expecting">expecting</a></div>
                </div>
                <div class="quick-link">
                    <div class="ob-btn"><a href="#menopause">menopause</a></div>
                </div>

            </div>
        </div>
    </div>
    <div class="header-circle"></div>
</section>

<section id="ob-forms">
    <div id="patient-forms" class="container patient-forms form-sec-wrapper">
        <div class="row form-title">
            <h3>Patient Information</h3>
            <div class="divider"></div>
        </div>
        <div class="row form-grid">
            <div class="col-md-4 form-item">
                <div class="form-item-inner">
                    <a href="">
                        <div class="form-title">FORM 1</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item">
                <div class="form-item-inner">
                    <a href="">
                        <div class="form-title">FORM 2</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item">
                <div class="form-item-inner">
                    <a href="">
                        <div class="form-title">FORM 3</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="expecting" class="container patient-forms form-sec-wrapper">
        <div class="row form-title">
            <h3>Expectant Mothers</h3>
            <div class="divider"></div>
        </div>
        <div class="row form-grid">
            <div class="col-md-4 form-item">
                <div class="form-item-inner">
                    <a href="">
                        <div class="form-title">FORM 1</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item">
                <div class="form-item-inner">
                    <a href="">
                        <div class="form-title">FORM 2</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item">
                <div class="form-item-inner">
                    <a href="">
                        <div class="form-title">FORM 3</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="menopause" class="container expecting-forms form-sec-wrapper">
        <div class="row form-title">
            <h3>Menopause</h3>
            <div class="divider"></div>
        </div>
        <div class="row form-grid">
            <div class="col-md-4 form-item">
                <div class="form-item-inner">
                    <a href="">
                        <div class="form-title">FORM 1</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item">
                <div class="form-item-inner">
                    <a href="">
                        <div class="form-title">FORM 2</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item">
                <div class="form-item-inner">
                    <a href="">
                        <div class="form-title">FORM 3</div>
                        <div class="download-text">download</div>
                    </a>
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