<?php
   /*
    Template Name: Contact
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }

    $hero = get_field('hero');
    $content = get_field('content');
    $anim_speed = '1.6s';
    ?>
<?php get_header(); ?>

<section id="page-header">
    <div class="container">
        <div class="row justify-content-center wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
            <h1>
                <!--span>Contact</span> Us--><?php echo $hero['title']; ?>
            </h1>
        </div>
    </div>
    <!-- <div class="header-circle"></div> -->
</section>
<section id="map">
    <div class="container-fluid map-wrapper wow animate__fadeIn" data-wow-duration="<?php echo $anim_speed; ?>">
        <div class="map-box">
            <iframe src="https://snazzymaps.com/embed/277525" width="100%" height="700px" style="border:none;"></iframe>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row contact-wrapper">
            <div class="col-xl-6 contact-info-wrapper wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
                <div class="subtitle text-lg-right pr-lg-0"><?php echo $content['title']; ?></div>
                <div class="divider"></div>
                <p class="text-large text-lg-right">
                    <!--Please reach out to us for any questions or comments you have. Our
                    team would be happy to answer them.--><?php echo $content['body']; ?>
                </p>
                <div class="contact-info">
                    <?php if ( have_rows('contact_method') ) :
                            while ( have_rows('contact_method') ) : the_row();
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $link = get_sub_field('link'); ?>

                    <div class="info-title"><?php echo $title; ?></div>
                    <div class="info-text">
                        <a href="<?php echo $link; ?>"><?php echo $text; ?></a>
                    </div>

                    <?php endwhile;
                            endif; ?>
                    <!--div class="info-title">fax us:</div>
                    <div class="info-text">
                        <a href="tel:8647201900">864.720.1901</a>
                    </div>
                    <div class="info-title">email us:</div>
                    <div class="info-text">
                        <a href="mailto:info@parksideob-gyn.com">info@parksideob-gyn.com</a>
                    </div>
                    <div class="info-title">call us:</div>
                    <div class="info-text">mon-thurs:8am-4:30pm<br>fri: 8am-12pm</div-->
                </div>
            </div>
            <div class="col-xl-6 wow animate__fadeInRight" data-wow-duration="<?php echo $anim_speed; ?>">
                <div class="form-wrapper">
                    <div class="form">
                        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
                    </div>

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