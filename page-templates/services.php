<?php
   /*
    Template Name: Services
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }

    $anim_speed = '1.6s';
    ?>
<?php get_header(); ?>

<section id="page-header">
    <div class="container">
        <div class="row mx-0 justify-content-center wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
            <h1>Our <span>Services</span></h1>
        </div>
    </div>
    <div class="header-circle"></div>

    <!-- Services Section - DESKTOP ONLY -->
</section>
<section id="ob-services">
    <div class="container-fluid services-wrapper">
        <div class="nav-box wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
            <ul class="list-unstyled">
                <li><a class="service-nav" href="#" id="care">General Women's Care</a></li>
                <li><a class="service-nav" href="#" id="pregnancy">Pregnancy & Postpartum</a></li>
                <li><a class="service-nav" href="#" id="procedures">Medical Procedures</a></li>
                <li><a class="service-nav" href="#" id="urgent">Urgent Concerns</a></li>
                <li><a class="service-nav" href="#" id="adolescent">Adolescent Care</a></li>
                <li><a class="service-nav" href="#" id="wellness">Sexual Wellness</a></li>

            </ul>
        </div>

        <?php while( have_rows('repeater') ) : the_row();
            //init vars
            $group = get_sub_field('group');
            $id = $group['id'];
            $image = $group['image'];
            $title = $group['title'];
            $sub = $group['sub'];
            $content1 = $group['content'];
            $title2 = $group['title2'];
            $content2 = $group['content2'];

            $items = explode(PHP_EOL, $content2); //PHP_EOL, PHP constant for end of line and it uses the correct end of line for the platform https://www.php.net/manual/en/reserved.constants.php
            $items1 = array_slice($items, 0, ceil(count($items)/2)); //get first half of list items
            $items2 = array_slice($items, ceil(count($items)/2)); //get second half of list items
            ?>

            <div class="services-inner" id="<?php echo $id;?>">
                <!-- bg circle -->
                <img class="bg-circle" src="/wp-content/uploads/2021/02/transparent-circle.png">
                <div class="row services-top">
                    <div class="divider"></div>
                    <div class="col-xl-4">
                        <div class="subtitle"><?php echo $sub; ?></div>
                        <p class="text-large"><?php echo $title; ?></p>
                        <p><?php echo $content1; ?></p>
                    </div>
                    <div class="col-xl-7 offset-xl-1 mt-xl-0 mt-5">
                        <div class="service-img">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            <img class="gold" src="/wp-content/uploads/2021/02/gold.png">
                            <img class="leaf" src="/wp-content/uploads/2021/02/leaf.png">
                        </div>
                    </div>
                </div>
                <div class="services-bottom">
                    <div class="services-bottom-inner">
                        <h3><?php echo $title2; ?></h3>
                        <div class="divider"></div>
                        <div class="service-list">
                            <ul class="list-left list-unstyled">
                                <?php foreach ($items1 as $item) : ?> <!-- Iterate through first half of array -->
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <ul class="list-unstyled list-right">
                                <?php foreach ($items2 as $item) : ?> <!-- Iterate through second half of array -->
                                    <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?> 
    </div>
</section>
<section id="services-cta">
    <div class="container wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
        <div class="row">
            <div class="col">
                <p class="text-large">Schedule Your Appointment</p>
                <p>Take the next step in your health journey by reaching out to schedule an appointment. We promise to
                    take great care in treating you like the extraordinary woman you are. Getting stared is easy. We
                    can’t wait to meet you.</p>
                <div class="cta-btn">
                    <a href="/new-patients" class="btn ob-btn">GET STARTED</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
(function ($) {
    keyword = window.location.href.split("=")[1];
    $('.service-nav#' + keyword).addClass("active");
    $('.services-inner#' + keyword).addClass("active");

    if( !$('.service-nav').hasClass('active') ) {
        $('.service-nav').eq(0).addClass('active')
    }

    if( !$('.services-inner').hasClass('active') ) {
        $('.services-inner').eq(0).addClass('active')
    }
})(jQuery);
</script>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>