<?php
   /*
    Template Name: Services
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section id="page-header">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <h1>Our <span>Services</span></h1>
        </div>
    </div>
    <div class="header-circle"></div>

    <!-- Services Section - DESKTOP ONLY -->
</section>
<section id="ob-services">
    <div class="container-fluid services-wrapper">
        <div class="nav-box">
            <ul class="list-unstyled">
                <li><a class="service-nav active" href="#" id="care">General Women's Care</a></li>
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

            <div class="services-inner" id="<?php echo $id; ?>">
                <div class="row services-top">
                    <div class="divider"></div>
                    <div class="col-xl-4">
                        <div class="subtitle"><?php echo $sub; ?></div>
                        <p class="text-large"><?php echo $title; ?></p>
                        <p><?php echo $content1; ?></p>
                    </div>
                    <div class="col-xl-6 offset-xl-1">
                        <div class="service-img">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
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
        <?php endwhile;?> 
    </div>
</section>
<section id="services-cta">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-large">Schedule Your Appointment</p>
                <p>Take the next step in your health journey by reaching out to schedule an appointment. We promise to
                    take great care in treating you like the extraordinary woman you are. Getting stared is easy. We
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