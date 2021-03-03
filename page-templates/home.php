<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }

    $anim_speed = '1.6s';
    ?>
<?php get_header(); ?>

<section id="home-page-header" class="home">
    <div class="home-header">
        <div class="home-inner">
            <div class="title-block wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                <h1 class="text-center">You Are <br><span>&nbsp;Extraordinary</span></h1>
                <h2 class="text-center bold">Live Like It.</h2>
                <div class="video-play">
                    <div class="play-btn" data-toggle="modal" data-target="#videoModal"><img
                            src="/wp-content/themes/ps-obgyn/img/play-btn.png" alt=""></div>
                </div>
            </div>

        </div>
        <div class="header-bottom-bar">
            <div class="social">
                <div class="ig-link social-link">
                    <a href="https://www.instagram.com/parksideobgyn/" target="_blank"><i
                            class="fa fa-instagram"></i></a>
                </div>
                <div class="fb-link social-link">
                    <a href="https://www.facebook.com/parksideobgyn/" target="_blank"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <div class="discover"><a href="#home-intro">
                    <div class="discover-inner">
                        <div class="discover-text">Discover</div>
                        <div class="icon-wrapper">

                            <?php
    // Import svg icons.
    echo file_get_contents( get_theme_file_uri( '/img/arrow.svg' ) );
?>
                        </div>

                    </div>
                </a></div>
        </div>
    </div>

</section>
<section id="home-intro" class="pl-lg-5">
    <div class="container">
        <div class="row home-intro-1">
            <div class="col">
                <div class="subtitle wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">modern women. modern care.</div>
                <div class="title divider"></div>
            </div>
        </div>
        <div class="row home-intro-2 pl-lg-5">
            <div class="col-xl-7 column-left wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
                <p>We’re all so different. So incredible. So exceptional. And we, as women, flourish when surrounded
                    with the love, compassion, and support of those that understand us — our needs, our hopes, our
                    dreams...
                    and our biggest struggles.</p>
                <p><span>Here at Parkside OB-GYN,<br> we're here for life.</span></p>
            </div>
            <div class="col column-right wow animate__fadeInRight" data-wow-duration="<?php echo $anim_speed; ?>">
                <div class="img-float">
                    <img src="/wp-content/themes/ps-obgyn/img/home-img-1.jpg" alt="">
                    <div class="leaf"><img src="/wp-content/themes/ps-obgyn/img/home-leaf-1.png" alt=""></div>
                    <div class="gold"><img src="/wp-content/themes/ps-obgyn/img/home-gold-1.png" alt=""></div>

                </div>
            </div>

        </div>
        <div class="row home-intro-3 pl-lg-5">
            <div class="col-xl-5 column-left   mt-4 mt-xl-0 wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
                <div><img src="/wp-content/themes/ps-obgyn/img/home-img-2.jpg" alt=""></div>
            </div>
            <div class="col-xl-4 offset-md-1 column-right wow animate__fadeInRight" data-wow-duration="<?php echo $anim_speed; ?>">
                <h3 class="mt-">To us, it's personal.</h3>
                <div class="divider"></div>
                <p class="pr-lg-3">Caring for others is very personal to us. It’s about loving, serving, and building a
                    genuine connection with all the women who’ve entrusted us with their health and well-being at every
                    point along life’s journey. We recognize that, for many of you, healthcare is an intimate subject
                    and often times puts you in a vulnerable position. We know, because we’ve been there. We’d love to
                    join you on your journey and invite you to discover Parkside OB-GYN for yourself.</p>
                <div class="simple-link text-center mt-5">
                    <a href="/about">DISCOVER MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="approach">
    <div class="container-fluid">
        <div class="row approach-outer">
            <div class="col-xl-6 d-flex justify-content-center">
                <div class="approach-inner wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
                    <div class="approach-content">
                        <div class="approach-leaf"><img src="/wp-content/themes/ps-obgyn/img/home-leaf-2.png" alt="">
                        </div>
                        <div class="text-center m-5"><img src="/wp-content/themes/ps-obgyn/img/acorn-tan.png" alt="">
                        </div>
                        <h2>Relational Care.<br> Individualized Options.<br> Peace of Mind.</h2>
                    </div>
                    <div class="approach-box">
                        <h3>A unique approach</h3>
                        <div class="divider"></div>
                        <p>From the beginning, we designed our practice with one primary goal—a focus on relational and
                            compassionate care first, while giving you access to the best healthcare, medicine, and
                            women’s
                            procedures available. This integrated approach between you and your provider helps us offer
                            a
                            unique plan for you. We want you to be educated about your health and feel you are
                            receiving
                            the personal support and individualized care you deserve.</p>
                        <p> Our providers here at Parkside
                            OB-GYN
                            are well respected by their peers and their patients. This should give you peace of mind
                            knowing
                            you’re in good hands.</p>
                        <div class="simple-link mt-5 text-center"><a href="/services">See Our Services</a></div>
                    </div>
                    <div class="big-circle"></div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="services">
    <div class="container">
        <div class="row mx-0 title justify-content-center wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
            <h1>What We Offer</h1>
        </div>
        <div class="row service-icons justify-content-center wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
            <a href="/services?active=care" class="col-6 col-md-2 service-icon-wrapper">
                <div class="icon wow"><?php
				echo file_get_contents( get_theme_file_uri( '/img/svg/heart.svg' ) );
                ?></div>
                <div class="icon-text">General Women's Care</div>
            </a>
            <a href="/services?active=pregnancy" class="col-6 col-md-2 service-icon-wrapper">
                <div class="icon wow"><?php
				echo file_get_contents( get_theme_file_uri( '/img/svg/pregnant.svg' ) );
                ?></div>
                <div class="icon-text">Pregnancy & Postpartum</div>
            </a>
            <a href="/services?active=procedures" class="col-6 col-md-2 service-icon-wrapper">
                <div class="icon wow"><?php
				echo file_get_contents( get_theme_file_uri( '/img/svg/woman.svg' ) );
                ?></div>
                <div class="icon-text">Medical Procedures</div>
            </a>
            <a href="/services?active=urgent" class="col-6 col-md-2 service-icon-wrapper">
                <div class="icon wow"><?php
				echo file_get_contents( get_theme_file_uri( '/img/svg/patient-bed.svg' ) );
                ?></div>
                <div class="icon-text">Urgent Concerns</div>
            </a>
            <a href="/services?active=adolescent" class="col-6 col-md-2 service-icon-wrapper">
                <div class="icon wow"><?php
				echo file_get_contents( get_theme_file_uri( '/img/svg/patient.svg' ) );
                ?></div>
                <div class="icon-text">Adolescent Care</div>
            </a>
            <a href="/services?active=wellness" class="col-6 col-md-2 service-icon-wrapper">
                <div class="icon wow"><?php
				echo file_get_contents( get_theme_file_uri( '/img/svg/people.svg' ) );
                ?></div>
                <div class="icon-text">Sexual Health & Wellness</div>
            </a>
        </div>
    </div>
</section>
<!-- <section id="cta">
    <div class="container">
        <div class="row cta-wrapper">
            <div class="col-lg-6">
                <div class="cta-block-wrapper join-cta">
                    <a href="#">
                        <div class="cta-block-inner">
                            <h3>Join Parkside</h3>
                            <div class="link-text">Next <img src="/wp-content/themes/ps-obgyn/img/cta-arrow.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cta-block-wrapper contact-cta">
                    <a href="/contact">
                        <div class="cta-block-inner">
                            <h3>Contact Us</h3>
                            <div class="link-text">Next <img src="/wp-content/themes/ps-obgyn/img/cta-arrow.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>

<!-- Video Main Modal -->
<div class="modal video-modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe id="mainvideo" class="modal-video-frame"
                    src="https://www.youtube.com/embed/sbdkgHS9lx4?autoplay=0"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
    </div>
</div>
