<?php
   /*
    Template Name: Expecting
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }

    $hero = get_field('hero');
    $intro = get_field('intro');
    $partnerships = get_field('partnerships');

    $faqTitle = get_field('faq-title');

    $anim_speed = '1.6s';
    ?>
<?php get_header(); ?>

<section id="page-header">
    <div class="container">
        <div class="row justify-content-center wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
            <h1><?php echo $hero['title']; ?></h1>
        </div>
    </div>
    <div class="header-circle"></div>
</section>
<section id="expecting-intro">
    <div class="container">
        <div class="row intro-wrapper">
            <div class="col-xl-6 text-center wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
                <div class="img-wrapper">

                    <img src="/wp-content/themes/ps-obgyn/img/expecting-img-1.jpg" alt="">
                    <div class="expecting-leaf"><img src="/wp-content/themes/ps-obgyn/img/expecting-leaf.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mt-xl-0 mt-5">
                <div class="m-0 pl-0 subtitle wow animate__fadeInRight" data-wow-duration="<?php echo $anim_speed; ?>"><?php echo $intro['sub']; ?></div>
                <div class="divider"></div>
                <p class="text-large wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                    <!--<span>It’s an exciting time!</span> You’re likely feeling a mix of excitement,
                    nerves, and anticipation. But one thing is certain–the moment you meet your new baby will be one of
                    the most beautiful memories of your life.--><?php echo $intro['title']; ?>
                </p>
                <p class="wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                    <!--We want to help you cherish every moment of your pregnancy from conception through delivery and
                    beyond. We know how important the relationship is with a family and your provider. We also know that
                    creating a nurturing and supportive environment is key, which is why we designed our facilities and
                    services with you in mind. We are experts in caring for you and your little bundle of joy on the
                    way, so we’ve personalized every aspect to be sure you receive the best of care here.</p>
                <p>We talk a lot about the little things that go into your Parkside Experience and that’s especially
                    true of our expectant families. We aspire to make you feel at home here. And, to put your mind at
                    ease, our doctors are on call 24 hours a day, seven days a week.--><?php echo $intro['body']; ?>
                </p>

            </div>
        </div>
    </div>
</section>
<section id="partnerships">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 column-left wow animate__fadeInLeft" data-wow-duration="<?php echo $anim_speed; ?>">
                <div class="title-block">
                    <h3><?php echo $partnerships['title']; ?></h3>
                    <div class="divider"></div>
                </div>
                <div class="logos-box mobile d-inline-block">
                    <a href="<?php echo $partnerships['logo-url']; ?>" target="_blank"><img
                            src="<?php echo $partnerships['logo-image']; ?>" alt=""></a>
                    <div class="plus">+</div>
                    <a href="<?php echo $partnerships['logo-url2']; ?>" target="_blank"><img
                            src="<?php echo $partnerships['logo-image2']; ?>" width="200" alt=""></a>
                </div>
                <p>
                    <!--The health of our patient families and newborns are only strengthened by a close connection to the
                    providers and specialists who are within our network.--><?php echo $partnerships['body']; ?>
                </p>
                <div class="logos-box desktop d-inline-block">
                    <a href="<?php echo $partnerships['logo-url']; ?>" target="_blank"><img
                            src="<?php echo $partnerships['logo-image']; ?>" alt=""></a>
                    <div class="plus">+</div>
                    <a href="<?php echo $partnerships['logo-url2']; ?>" target="_blank"><img
                            src="<?php echo $partnerships['logo-image2']; ?>" width="200" alt=""></a>
                </div>
                <p>
                    <!--Our partnerships with the <strong>Breastfeeding Center of Greenville</strong> and <strong>Parkside
                        Pediatrics</strong> offer the unique opportunity for you to obtain seamless care and be
                    prepared as you transition into motherhood. This helps make it easier for you to establish care with
                    incredibly supportive providers you know are trusted, and most importantly, helps you feel confident
                    with the care of your new baby. --><?php echo $partnerships['body2']; ?>
                </p>
            </div>
            <div class="col-xl-7 pl-lg-5 wow animate__fadeInRight" data-wow-duration="<?php echo $anim_speed; ?>">
                <div>
                    <img src="/wp-content/themes/ps-obgyn/img/expecting-img-2.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row p-0">
            <div class="col px-md-3 px-0">
                <div class="title-block wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                    <h3><?php echo $partnerships['title2']; ?></h3>
                    <div class="divider-2"></div>
                </div>
                <div class="list-block wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                    <!--ul>
                        <li><strong>Receive priority booking</strong> when you establish care with Breastfeeding Center
                            of Greenville
                            and/or Parkside Pediatrics.</li>
                        <li><strong>Schedule a Pre-Assessment or Lactation Assessment</strong> with Breastfeeding Center
                            of Greenville
                            BEFORE your baby is born.</li>
                        <li>Parkside OB-GYN and Breastfeeding Center of Greenville are <strong>conveniently located in
                                the same
                                office.</strong> Schedule a postpartum visit for mom along with your first breastfeeding
                            visit.</li>
                    </ul--><?php echo $partnerships['body3']; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="due-date-calc">
    <div class="container wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
        <div class="row">
            <div class="col-12">
                <div class="calc-wrapper">
                    <div class="calc-inner">
                        <div class="div"><img src="/wp-content/themes/ps-obgyn/img/cal-icon.png" alt=""></div>
                        <div class="calc-title">Due Date Calculator</div>
                        <div class="calc-form">
                            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 12, 'title' => false, 'description' => false ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="faq">
    <div class="container wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
        <div class="row faq-title-block">
            <div class="faq-title"><?php echo $faqTitle; ?></div>
        </div>
        <div class="row faq-block">
            <div class="accordion" id="accordionExample">
                <?php if( have_rows('faq') ):
                   
                    $i = 1;
                    while( have_rows('faq') ) : the_row();
                            $q = get_sub_field('q');
                            $a = get_sub_field('a');
                        ?>

                <div class="card">
                    <div class="card-header" id="heading-<?php echo $i; ?>">
                        <h2 class="mb-0">
                            <a class="btn btn-link" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>"
                                aria-expanded="false" aria-controls="collapseOne">
                                <?php echo $q; ?>
                            </a>
                        </h2>
                    </div>

                    <div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-<?php echo $i; ?>"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <?php echo $a; ?>
                        </div>
                    </div>
                </div>

                <?php $i++;
                    endwhile; 
                endif; ?>
                <!--div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Where does Parkside OB-GYN deliver?
                            </a>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                When do I need to start taking a prenatal vitamin?

                            </a>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                How many appointments will I need throughout my pregnancy?
                            </a>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            text here
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                How many ultrasounds will I have?
                            </a>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            text here
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                When can I find out the gender of my baby?
                            </a>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            text here
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                Can I still exercise during my pregnancy?
                            </a>
                        </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            text here
                        </div>
                    </div>
                </div-->
            </div>
        </div>
    </div>
</section>
<section id="classes">
    <div class="container">
        <div class="row">
            <div class="col text-center wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                <h1 class="classes-title">Classes</h1>
                <!--p>All classes require registration, <a href="https://www.eventbrite.com/o/parkside-pediatrics-26831272313">click here</a> to complete this step.</p-->
                <!--p><strong>In-person classes have been put on hold for the winter months. Please utilize the link above to see what we are offering virtually.</strong></p-->
                <p><strong>In-person classes have been put on hold for the winter months. Please click the Register buttons to see what we are offering virtually.</strong></p>
            </div>
        </div>
        <div class="row classes-grid">
            <?php if ( have_rows('classes') ) :
                    while ( have_rows('classes') ) : the_row();
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $body = get_sub_field('body');
                        $link_text = get_sub_field('link-text');
                        $link_url = get_sub_field('link-url'); ?>

            <div class="col-xl-4 classes-grid-item wow animate__fadeInUp" data-wow-duration="<?php echo $anim_speed; ?>">
                <div class="classes-img w-100">
                    <img src="<?php echo $image; ?>" alt="">
                    <a href="<?php echo $link_url; ?>">
                        <div class="register-title">
                            <h4><?php echo $link_text; ?></h4><i class="fa fa-chevron-down"></i>
                        </div>
                    </a>
                </div>
                <div class="classes-title w-100">
                    <h3><?php echo $title; ?></h3>
                    <div class="divider"></div>
                </div>
                <div class="classes-text w-100">
                    <p>
                        <!--Open to any expecting mother in their 12th to 40th week of pregnancy, this class will teach poses
                                    that will safely build strength and stability in the areas of your body most affected by
                                    pregnancy. You will also learn breath awareness techniques that will calm you throughout
                                    pregnancy and meditation that will allow you to deeply connect with your growing baby. This
                                    class meets virtually on Wednesdays from 5:30pm-6:10pm.--><?php echo $body; ?>
                    </p>
                </div>
            </div>
            <?php endwhile;
                    endif; ?>
            <!--div class="col-xl-4 classes-grid-item">
                <div class="classes-img w-100">
                    <img src="/wp-content/themes/ps-obgyn/img/class-img-2.jpg" alt="">
                    <div class="register-title">
                        <h4>Register</h4><i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="classes-title w-100">
                    <h3>Breastfeeding 101</h3>
                    <div class="divider"></div>
                </div>
                <div class="classes-text w-100">
                    <p>This free class is a great avenue for expecting parents to have all their questions answered
                        about breastfeeding. Taught by one of our Certified Lactation Consultants, this course is open
                        to couples and we encourage partner participation as they can be one of the keys to success for
                        new moms adjusting to breastfeeding. This class is held virtually on the second Tuesday of each
                        month from 6:30 to 8:30pm.</p>
                </div>
            </div>
            <div class="col-xl-4 classes-grid-item">
                <div class="classes-img w-100">
                    <img src="/wp-content/themes/ps-obgyn/img/class-img-3.jpg" alt="">
                    <div class="register-title">
                        <h4>Register</h4><i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="classes-title w-100">
                    <h3>Baby Basics</h3>
                    <div class="divider"></div>
                </div>
                <div class="classes-text w-100">
                    <p>As a new mom, you’ll have many questions when it comes to your newborn. Join other new moms along
                        with our very own Certified Lactation Consultants for Baby Basics. Specifically designed for
                        moms with babies under 12 weeks, this class will put your mind at ease. Here you can receive
                        answers to questions about your baby. Plus you can meet other new moms to share in the
                        adventure that is raising a new baby. The class meets virtually on Thursdays from 10:00 to
                        11:00am.</p>
                </div>
            </div-->
        </div>
    </div>
    <?php get_template_part('template-parts/cta') ?>
    <?php get_footer(); ?>

    <script>
    new WOW().init();
    </script>