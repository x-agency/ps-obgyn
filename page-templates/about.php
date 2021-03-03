<?php
   /*
    Template Name: about
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }

    $hero = get_field('hero');
    $intro = get_field('intro');
    $services = get_field('services');
    $video = get_field('video');

    $pTitle = get_field('providers-title');
    $providers = get_field('providers');

    $anim_speed = '1.6s';
    ?>
<?php get_header(); ?>

<section id="page-header">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <h1 class="wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>"><?php echo $hero['title']; ?></h1>
        </div>
    </div>
    <div class="header-circle"></div>
</section>

</section>
<section id="about-intro" class="pl-lg-5">
    <div class="container">
        <div class="row about-intro-1">
            <div class="col">
                <div class="subtitle wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>"><?php echo $hero['sub']; ?></div>
                <div class="title divider"></div>
            </div>
        </div>
        <div class="row mx-0 about-intro-2 pl-lg-5">
            <div class="col column-left">

                <div class="img-float wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
                    <img src="/wp-content/themes/ps-obgyn/img/about-img-1.jpg" alt="">
                    <div class="leaf"><img src="/wp-content/themes/ps-obgyn/img/home-leaf-1.png" alt=""></div>
                    <div class="gold"><img src="/wp-content/themes/ps-obgyn/img/home-gold-1.png" alt=""></div>

                </div>
            </div>
            <div class="col-xl-7 offset-lg-5 pr-lg-0 column-right wow animate__fadeInRight" data-wow-duration="<?php echo $anim_speed; ?>">
                <p class="text-large">
                    <!--Every woman’s path is so very different and we’re with you for the
                    journey.
                    <span>We’re here for life.</span>--><?php echo $intro['title']; ?>
                </p>
                <div class="pl-lg-5">
                    <p>
                        <!--At Parkside, we believe in generational care for all ages and backgrounds for women to feel
                        healthy
                        and empowered.</p>
                    <p>Our practice was born from a desire to bring a more genuine, personal approach to women’s health.
                        So
                        often, your needs get lumped into a “once size fits all” treatment, but we recognize that each
                        of
                        you are so very unique and different. Because of this, our practice puts the focus back on you.
                        We
                        set aside the time to spend with you on a personal level, to hear your needs and address your
                        concerns. And our team works hard so that you get world-class care every time you’re here.
                    </p>
                    <p>From our very beginning, we have aspired to be more than an ordinary OB-GYN practice. We strive
                        to be
                        a partner in your health and we're honored that you would consider inviting us along for your
                        journey. --><?php echo $intro['body']; ?>
                    </p>
                </div>

            </div>

        </div>
        <div class="row about-intro-3 pl-lg-5">

            <div class="col-xl-5  column-left wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
                <h3><?php echo $intro['title2']; ?></h3>
                <div class="divider"></div>
                <div class="text-block">
                    <p class="pr-lg-3">
                        <!--To be successful, you need the loving, caring support of people surrounding you
                        who
                        invest their time and attention in you. Because of this, we’ve brought relational care to the
                        forefront.</p>
                    <p class="pr-lg-3">Before any diagnosis or treatment is prescribed, our first priority is the
                        one-on-one
                        personal time with you building that relationship of trust and honor. There is so much more that
                        goes into your health and care than just a medical prognosis or wellness checkup. Our heart is
                        to
                        serve first with love and compassion and recognize you as a person, not just your medical needs.--><?php echo $intro['body2']; ?>
                    </p>
                </div>
                <div class="link">
                    <a href=""></a>
                </div>
            </div>
            <div class="col-xl-6 offset-md-1 column-right   mt-4 mt-xl-0 wow animate__fadeInRight" data-wow-duration="<?php echo $anim_speed; ?>">
                <div><img src="/wp-content/themes/ps-obgyn/img/about-img-2.jpg" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section id="about-services">
    <div class="container-fluid">
        <div class="row mx-0">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="content-block-container">
                    <div class="content-block wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
                        <div class="leaf"><img src="/wp-content/themes/ps-obgyn/img/about-leaf.png" alt=""></div>
                        <h3><?php echo $services['title']; ?></h3>
                        <div class="divider"></div>
                        <p>
                            <!--Each and every one of you are special and your needs are unique to you to your specific
                            situation. So, we provide personal and individualized care across a broad array of services
                            here
                            at Parkside. Every woman has a different story, and we’re going to care for you in the way
                            you
                            need to be cared for—to put you first no matter what.--><?php echo $services['body']; ?>
                        </p>
                        <div class="box-link">
                            <a class="simple-link"
                                href="<?php echo $services['link-url']; ?>"><?php echo $services['link-text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <img src="/wp-content/themes/ps-obgyn/img/about-girl.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-video">
    <div class="container wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-7">
                <div class="video-box" data-toggle="modal" data-target="#videoModal">
                    <img class="w-100" src="<?php echo $video['preview']; ?>" alt="">
                    <div class="play-box-wrapper">
                        <div class="play-box">
                            <img src="<?php echo $video['play']; ?>" alt="">
                            <h1><?php echo $video['title']; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="providers">
    <div class="container">
        <div class="row mx-0">
            <div class="col text-center mt-lg-0 mt-5 wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                <h1><?php echo $pTitle; ?></h1>
                <div class="divider"></div>
            </div>
        </div>
        <?php

// Check rows exists.
if( have_rows('providers') ):
   $i = 1;
    // Loop through rows.
    while( have_rows('providers') ) : the_row();

        // Load sub field value.
        $img = get_sub_field('img');
            $first_name = get_sub_field('first_name');
            $last_name = get_sub_field('last_name');
                $info = get_sub_field('info');
                $video = get_sub_field('video');
        // Do something...?>
        <div class="row provider-block wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
            <div class="col-md-5">
                <div class="provider-img" data-toggle="modal" data-target="#docModal-<?php echo $i; ?>">
                    <img src="<?php echo $img; ?>" alt="">
                    <div class="provider-hover">
                        <div class="provider-hover-inner">
                            <div class="meet-title">Meet <br>Dr. <?php echo $last_name ?><i class="fa fa-play"></i>
                            </div>
                            <div class="divider"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="meet-mobile" data-toggle="modal" data-target="#docModal-<?php echo $i; ?>">Meet
                    Dr. <?php echo $first_name ?> <?php echo $last_name ?></div>
                <div class="provider-name">
                    <h3>Dr. <?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?></h3>
                    <div class="divider"></div>
                </div>
                <div class="provider-text">
                    <p><?php echo $info; ?>
                    </p>
                </div>
            </div>
            <!-- Doc Video -->
            <div class="modal video-modal fade" id="docModal-<?php echo $i; ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe id="nofocusvideo"
                                class="modal-video-frame"
                                src="https://player.vimeo.com/video/<?php echo $video ?>?autoplay=0&color=c89486&title=0&byline=0&portrait=0"
                                style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen></iframe></div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <script>
                        $(document).ready(function() {
                            // Close modal on button click
                            $(".menu-item").click(function() {
                                $("#nav-menu").modal('hide');
                            });
                        });

                        function stopVideo() {
                            var $frame = $('iframe#docvideo');

                            // saves the current iframe source
                            var vidsrc = $frame.attr('src');

                            // sets the source to nothing, stopping the video
                            $frame.attr('src', '');

                            // sets it back to the correct link so that it reloads immediately on the next window open
                            $frame.attr('src', vidsrc);
                        }

                        $('.video-modal').on('hidden.bs.modal', function(e) {
                            stopVideo();
                        })
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $i++;
    // End loop.
    endwhile;

  
endif;
?>

        <!-- <div class="row provider-block">
            <div class="col-md-5">
                <div class="provider-img"><img src="/wp-content/themes/ps-obgyn/img/team-member-1.jpg" alt=""></div>
            </div>
            <div class="col-md-7">
                <div class="provider-name">
                    <h3>Dr. Ryan Batson</h3>
                    <div class="divider"></div>
                </div>
                <div class="provider-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                        unde omnis iste natus
                    </p>
                </div>
            </div>
        </div> -->
    </div>
</section>

<!-- Video Main Modal -->
<div class="modal video-modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe id="mainvideo" class="modal-video-frame"
                    src="https://player.vimeo.com/video/488519542?autoplay=0&color=c89486&title=0&byline=0&portrait=0"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
    </div>
</div>



<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>

<script>
new WOW().init();
</script>