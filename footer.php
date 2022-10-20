<footer id="footer">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="flex-footer">
                     <div class="footer-contact">
                        <a href="#" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/white-logo.png" alt="logo" width="80px"></a>
                     </div>
                     <div class="footer-column">
                        <div class="column-item footer-links">
                           <h4>KOMPANIJA</h4>
                           <?php
                              $args = array(
                                'container'       => '', 
                                'menu'            => 'footer-menu-1'
                              );
                              wp_nav_menu( $args ); 
                            ?>
                        </div>
                        <div class="column-item footer-links">
                           <h4>LINKOVI</h4>
                           <?php
                              $args = array(
                                'container'       => '', 
                                'menu'            => 'footer-menu-2'
                              );
                              wp_nav_menu( $args ); 
                            ?>
                        </div>
                        <div class="column-item footer-links">
                           <h4>KONTAKT</h4>
                           <?php
                              $args = array(
                                'container'       => '', 
                                'menu'            => 'footer-menu-3'
                              );
                              wp_nav_menu( $args ); 
                            ?>
                        </div>
                        <div class="column-item footer-links">
                           <h4>TRAJNO BESPLATAN UPIS</h4>
                           <?php
                            $args = array(
                              'container'       => '', 
                              'menu'            => 'footer-menu-4'
                            );
                            wp_nav_menu( $args ); 
                          ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container py-5 footer-border">
            <div class="copyright">
               <strong>
                  <span>Uskoro : MojMajstor.ba blogovi</span>
                </strong>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-icon.png" width="18px">
            </div>
            <div class="credits">
               <strong>
                  Preko 225,300 Clanova U nasoj FB gruoi
                </strong>
                <a href="https://www.facebook.com/">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fb-icon.png" width="18px">
                </a>
            </div>
         </div>
      </footer>
      <!-- End Footer -->
      <div id="preloader"></div>
      <!-- Vendor JS Files -->
      <!-- <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script> -->
      <!-- <script src="assets/vendor/aos/aos.js"></script> -->
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
      <!-- <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> -->
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <!-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
         <script src="assets/vendor/php-email-form/validate.js"></script> -->
      <!-- Template Main JS File -->
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
      <script>
        $('.owl-carousel').owlCarousel({
        rtl:true,
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        responsive:{
            0:{
                items:2
            },
            480:{
               items:3
            },
            600:{
                items:5
            },
            1000:{
                items:7
            }
        }
        })
      </script>

      <?php wp_footer(); ?>
   </body>
</html>