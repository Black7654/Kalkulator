<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Parallo - Contact Page</title>

    <link rel="stylesheet" href="<?php echo base_url().'assets/'?>landing/https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/'?>landing/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/'?>landing/css/bootstrap.min.css" />
    <link rel="stylesheet" type="<?php echo base_url().'assets/'?>landing/text/css" href="slick/slick.css"/>    
    <link rel="stylesheet" type="<?php echo base_url().'assets/'?>landing/text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/'?>landing/css/templatemo-style.css" />
  </head>
<!--
Parallo Template
https://templatemo.com/tm-534-parallo
-->
  <body id="servicesPage">
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url().'assets/'?>landing/img/bg-01.jpg">
      <div class="container-fluid">
        <div class="row tm-brand-row">
          <div class="col-lg-4 col-11">
            <div class="tm-brand-container tm-bg-white-transparent">
              <i class="fas fa-2x fa-pen tm-brand-icon"></i>
              <div class="tm-brand-texts">
                <h1 class="text-uppercase tm-brand-name">Parallo</h1>
                <p class="small">new app landing page</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-1">
            <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
                <button class="navbar-toggler" type="button"
                  data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="<?php echo base_url();?>index.php/Landing">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="<?php echo base_url();?>index.php/Landing/About">About</a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="<?php echo base_url();?>index.php/Landing/services">Services</a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="<?php echo base_url();?>index.php/Landing/testmonial">Testimonials</a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="<?php echo base_url();?>index.php/Landing/contact">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>

        <!-- Testimonials header -->
        <section class="row" id="tmServices">
          <div class="col-12">
            <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header"
                 data-parallax="scroll"
                 data-z-index="101"
                 data-image-src="img/people.jpg">

                 <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
                    <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Contact</h2>
                    <p class="tm-services-description mb-0 small">
                        Parallax movement background page "people" for contact page
                    </p>
                </div>
            </div>
          </div>   
        </section>

        <section class="row tm-contact-row">
            <div class="col-lg-6 tm-contact-col-left">
                <form action="#" method="POST" id="tmContactForm" class="tm-bg-black-transparent tm-contact-form">
                  <div class="form-group">
                    <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Name" required="">
                  </div>
                  <div class="form-group">
                    <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Email" required="">
                  </div>
                  <div class="form-group">
                    <textarea rows="6" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message" required=""></textarea>
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary tm-btn-submit rounded-0">
                      Submit
                    </button>
                  </div>
                </form>
            </div>
            <div class="col-lg-6 tm-contact-col-right">
                <div class="tm-bg-black-transparent tm-contact-text">
                            
                    <i class="mx-auto mb-5 fas fa-3x fa-address-card tm-app-feature-icon"></i>
                    
                    <h3 class="tm-service-tab-title">Maecenas in aliquam lorem</h3>
                    <p class="tm-service-tab-p">
                        Proin rutrum massa quis erat mollis iaculis. Vestibulum
                        a risus ex. Nunc rhoncus, justo at blandit cursus, orci
                        erat molestie felis, id ullamcorper mauris felis eu eros.
                    </p>                            
                    <p class="mb-0">
                        Donec turpis augue, mollis eu erat in, posuere congue 
                        sapien.  Maecenas facilisis dui sit amet ornare aliquam.
                        Paesent malesuada mi a est pulvinar.
                    </p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="row tm-testimonials-cta" id="tmCallToAction">
          <div class="col-12 tm-call-to-action-col">
            <img src="img/call-to-action-3.jpg" alt="Image" class="img-fluid tm-call-to-action-image" />
            <div class="tm-bg-white tm-call-to-action-text">
              <h2 class="tm-call-to-action-title">Vivamus sollicitudin tellus</h2>
              <p class="tm-call-to-action-description">
                Maecenas maximus tellus in dolor auctor tristique. Nam hendrerit
                posuere laoreet. Aliquam erat volutpat. Nulla eros est,
                imperdiet vel feugiat non, ullamcorper mattis nulla.
              </p>
              <form action="#" method="get" class="tm-call-to-action-form">                
                <input name="email" type="email" class="tm-email-input" id="email" placeholder="Email" />
                <button type="submit" class="btn btn-secondary">Get Updates</button>
              </form>
            </div>
          </div>
        </section>

        <!-- Page footer -->
        <footer class="row">
          <p class="col-12 text-white text-center tm-copyright-text">
            Copyright &copy; 2020 App Landing Page. 
            Designed by <a href="#" class="tm-copyright-link">TemplateMo</a>
          </p>
        </footer>
      </div>
      <!-- .container-fluid -->
    </div>

    <script src="<?php echo base_url().'assets/'?>landing/js/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/'?>landing/js/parallax.min.js"></script>
    <script src="<?php echo base_url().'assets/'?>landing/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'assets/'?>landing/slick/slick.min.js"></script>
    <script>
        $(function(){
            $('.tabgroup > div').hide();
            $('.tabgroup > div:first-of-type').show();  
            $('.tabs a').click(function(e){
              e.preventDefault();
              var $this = $(this),
                  tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
                  others = $this.closest('li').siblings().children('a'),
                  target = $this.attr('href');
              others.removeClass('active');
              $this.addClass('active');
              $(tabgroup).children('div').hide();
              $(target).show();

              // Scroll to tab content (for mobile)
              if($(window).width() < 992) {
                  $('html, body').animate({
                      scrollTop: $("#first-tab-group").offset().top
                  }, 200);    
              }              
            })

            $('.tm-carousel').slick({
                dots: true,
                  infinite: false,
                  arrows: false,
                  speed: 300,
                  slidesToShow: 3,
                  slidesToScroll: 2,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                          arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                          arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                          arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                  ]
            });  
        });
    </script>
  </body>
</html>