<?php
   /*
    Template Name: Patient Resources
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }

    $anim_speed = '1.6s';
    ?>
<?php get_header(); ?>

<section id="page-header">
    <div class="container">
        <div class="row mx-0 justify-content-center wow animate__fadeInUp text-center" data-wow-duration="<?php echo $anim_speed; ?>">
            <h1><span>Patient</span> Resources</h1>
        </div>
        <div class="row resource-intro wow animate__fadeInUp mx-auto" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-delay="0.6s">
            <p>From early teen to late-in-life general women’s health to pregnancy and postpartum to urgent medical
                concerns, Parkside OB-GYN is here for life. We want to provide first-class care and support by equipping
                you with the tools and information you need along the way. </p>
            <div class="subtitle wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-delay="1.2s">jump to:</div>
            <div class="quick-link-wrapper wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-delay="1.2s">
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
        <div class="row form-title wow animate__fadeInUp mx-auto" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-offset="200">
            <h3>Patient Information</h3>
            <div class="divider"></div>
        </div>
        <div class="row form-grid">
            <div class="col-md-4 form-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-offset="100">
                <div class="form-item-inner">
                    <a href="" target="_blank">
                        <div class="form-title">FORM 1</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-delay="0.2s" data-wow-offset="100">
                <div class="form-item-inner">
                    <a href="" target="_blank">
                        <div class="form-title">FORM 2</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-delay="0.4s" data-wow-offset="100">
                <div class="form-item-inner">
                    <a href="" target="_blank">
                        <div class="form-title">FORM 3</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="expecting" class="container patient-forms form-sec-wrapper">
        <div class="row form-title wow animate__fadeInUp mx-auto" data-wow-duration="<?php echo $anim_speed; ?>">
            <h3>Expectant Mothers</h3>
            <div class="divider"></div>
        </div>
        <div class="row form-grid">
            <div class="col-md-4 form-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                <div class="form-item-inner">
                    <a href="" target="_blank">
                        <div class="form-title">FORM 1</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-delay="0.2s">
                <div class="form-item-inner">
                    <a href="" target="_blank">
                        <div class="form-title">FORM 2</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-delay="0.4s">
                <div class="form-item-inner">
                    <a href="" target="_blank">
                        <div class="form-title">FORM 3</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="menopause" class="container expecting-forms form-sec-wrapper">
        <div class="row form-title wow animate__fadeInUp mx-auto" data-wow-duration="<?php echo $anim_speed; ?>">
            <h3>Menopause</h3>
            <div class="divider"></div>
        </div>
        <div class="row form-grid">
            <div class="col-md-4 form-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                <div class="form-item-inner">
                    <a href="" target="_blank">
                        <div class="form-title">FORM 1</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-delay="0.2s">
                <div class="form-item-inner">
                    <a href="" target="_blank">
                        <div class="form-title">FORM 2</div>
                        <div class="download-text">download</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 form-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>" data-wow-delay="0.4s">
                <div class="form-item-inner">
                    <a href="" target="_blank">
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