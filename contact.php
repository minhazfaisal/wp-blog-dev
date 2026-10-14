<?php
/**
 * Template Name: Contact Page
 * @package WPTB2
 * @since 1.0.0
 */
global $wpdev;
?>
<!-- header start -->
<?php get_header(); ?>

  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h1><?php the_title(); ?></h1>
            <p>Very us move be blessed multiply night</p>
          </div>
          <div class="page_link">
            <?php echo mj_wp_breadcrumb(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section_gap">
    <div class="container">
      <div class="d-sm-block mb-5 pb-4">
        <div id="map">
          <iframe src="<?php echo $wpdev['map_src']; ?>" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="https://preview.colorlib.com/theme/eiser/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="main_btn">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#26555356564954526645494a49544a4f440845494b"><span class="__cf_email__" data-cfemail="ddaea8adadb2afa99dbeb2b1b2afb1b4bff3beb2b0">[email&#160;protected]</span></a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-close"></i>
          </button>
          <h2>Thank you</h2>
          <p>Your message is successfully sent...</p>
        </div>
      </div>
    </div>
  </div>

  <div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-close"></i>
          </button>
          <h2>Sorry !</h2>
          <p> Something went wrong </p>
        </div>
      </div>
    </div>
  </div>

<!-- footer start -->
<?php get_footer(); ?>