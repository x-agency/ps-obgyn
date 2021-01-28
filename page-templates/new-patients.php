<?php
   /*
    Template Name: New Patients
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }

    $hero = get_field('hero');
    $intro = get_field('intro');
    $cta = get_field('cta');
    $connect = get_field('connect');

    ?>
<?php get_header(); ?>

<section id="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <h1><!--span>New</span> Patients--><?php echo $hero['title']; ?></h1>
        </div>
    </div>
    <!-- <div class="header-circle"></div> -->
</section>

<section id="new-intro">
    <div class="container-fluid">
        <div class="new-intro-box-wrapper">
            <div class="new-intro-box">
                <img class="leaf" src="/wp-content/themes/ps-obgyn/img/home-leaf-2.png" alt="">
                <h3><?php echo $intro['title']; ?></h3>
                <div class="divider"></div>
                <p><!--You're taking the first step towards becoming a member of the Parkside OB-GYN family. We don't take
                    that decision lightly and we know each step is a big one in deciding who to entrust with your care.
                    We know your time is valuable and life gets busy, so we invite you to contact our office to begin
                    the process of becoming a member of our family.--><?php echo $intro['body']; ?></p>
                <div class="step-box">
                    <div class="step-title"><?php echo $intro['sub']; ?></div>
                    <div class="step-link"><a href="<?php echo $intro['link-url']; ?>"><?php echo $intro['link-text']; ?></a></div>
                </div>
            </div>


        </div>
    </div>
</section>
<section id="new-cta">
    <div class="container">
        <div class="row cta-block">
            <div class="col-lg-8">
                <h3><?php echo $cta['title']; ?></h3>
                <p><!--Once you've called us and scheduled your first appointment, you'll be directed to complete your
                    Patient Registration paperwork. Once completed, we'll be establishing you as a new patient and
                    completing the transfer of your patient records.--><?php echo $cta['body']; ?></p>
            </div>
            <div class="col-lg-4">
                <div class="step-box">
                    <div class="step-title"><?php echo $cta['sub']; ?></div>
                    <div class="step-link"><a href="<?php echo $cta['link-url']; ?>"><?php echo $cta['link-text']; ?></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="new-connect">
    <div class="container">
        <div class="row connect-wrapper">
            <div class="col-md-5 connect-text-block">
                <h3><?php echo $connect['title']; ?></h3>
                <div class="divider"></div>
                <p><!--We’re here for you. If you have any concerns or questions about the process or the services we offer,
                    please feel free to reach out. We’d be happy to help you.--><?php echo $connect['body']; ?></p>
                <div class="link-box">
                    <a href="<?php echo $connect['link-url']; ?>" class="simple-link"><?php echo $connect['link-text']; ?></a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="connect-img-block">
                    <div class="gold"><img src="/wp-content/themes/ps-obgyn/img/home-gold-1.png" alt=""></div>
                    <img src="/wp-content/themes/ps-obgyn/img/new-patient-img-2.jpg" alt="">
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