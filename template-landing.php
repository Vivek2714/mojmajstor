<?php
/*
Template name:Landing
*/
get_header();
$postID = get_the_id();
?>

<!-- ======= Hero Section ======= -->
<?php if( !empty( get_post_meta( $postID, 'home_banner', true ) ) ){ ?>
  <section id="hero" class="d-flex align-items-center p-0">
    <img src="<?php echo wp_get_attachment_url( get_post_meta( $postID, 'home_banner', true ) ); ?>" class="img-fluid">
  </section>
<?php } ?>
<!-- End Hero -->

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
   <div class="container" data-aos="fade-up">
      <div class="row text-left cs-col-btn">
         <div class="col-md-8 ">
            <div class="section-title">
               <h3>
                  <?php echo get_post_meta( $postID, 'title', true ); ?> 
               </h3>
               <span class="heading-bar"></span>
            </div>
            <!-- Page content -->
            <?php echo get_the_content(); ?>
            <?php if( !empty( get_post_meta( $postID, 'button_1_text', true ) ) ){ ?>
              <div class="btn-wrap cs-btn btn-pd-10">
                <a href="<?php echo get_post_meta( $postID, 'button_1_link', true ); ?>" class="btn-buy">
                    <?php echo get_post_meta( $postID, 'button_1_text', true ); ?> 
                </a>
              </div>
            <?php } ?>
            <?php if( !empty( get_post_meta( $postID, 'button_2_text', true ) ) ){ ?>
              <div class="btn-wrap cs-btn btn-pd-10">
                <a href="<?php echo get_post_meta( $postID, 'button_2_link', true ); ?>" class="btn-buy">
                  <?php echo get_post_meta( $postID, 'button_2_text', true ); ?> 
                </a>
              </div>
            <?php } ?>
         </div>
         <div class="col-md-4">
            <?php if( !empty(wp_get_attachment_url( get_post_thumbnail_id() )) ){ ?>
              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="img-fluid">
            <?php } ?>
         </div>
      </div>
   </div>
</section>
<!-- End Featured Services Section -->
<!-- =======Location Section ======= -->
<div id="cs-location">
   <div class="cs-location-inner">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-6">
               <h4> Vaš siguran asistent kroz gradnju i renoviranje </h4>
               <form action="" method="post">
                  <div class="form-wrap">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/location-icon.png">
                     <input type="text" placeholder="Odaberite lokaciju">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88;position: absolute;right: 10px;width: 20px;top: 50%;transform: translate(0%, -50%);" xml:space="preserve"><g><path d="M68.23,13.49c10.44,1.49,19.79,6.36,26.91,13.48c7.29,7.29,12.23,16.93,13.58,27.68h14.17v13.58h-14.39 c-1.62,10.13-6.42,19.2-13.36,26.13c-7.11,7.11-16.47,11.99-26.91,13.48v15.04H54.65v-15.04c-10.44-1.49-19.79-6.36-26.9-13.48 c-6.94-6.94-11.74-16-13.36-26.13H0V54.65h14.16c1.35-10.75,6.29-20.39,13.58-27.68c7.11-7.11,16.46-11.99,26.9-13.48V0h13.58 V13.49L68.23,13.49z M61.44,35.41c13.95,0,25.25,11.31,25.25,25.25c0,13.95-11.31,25.25-25.25,25.25 c-13.95,0-25.25-11.31-25.25-25.25C36.19,46.72,47.49,35.41,61.44,35.41L61.44,35.41z M89,33.11c-7.05-7.05-16.8-11.42-27.56-11.42 c-10.76,0-20.51,4.36-27.56,11.42c-7.05,7.05-11.42,16.8-11.42,27.56c0,10.76,4.36,20.51,11.42,27.56 c7.05,7.05,16.8,11.42,27.56,11.42c10.76,0,20.51-4.36,27.56-11.42c7.05-7.05,11.42-16.8,11.42-27.56 C100.41,49.9,96.05,40.16,89,33.11L89,33.11z" style="fill: #f05742;"></path></g></svg>
                  </div>
                  <div class="btn-wrap cs-btn mt-3">
                     <a href="#" class="btn-buy"> Pretraga usluga </a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Location Section -->
<!-- =======Grid Section ======= -->
<section id="cs-grid">
   <div class="container" data-aos="fade-up">
      <div class="row">
         <!-- Recommended handymen -->
         <div class="col-md-9">
            <?php if( !empty(get_post_meta( $postID, 'title_handymen', true )) ){ ?>
              <div class="section-title">
                <h3>
                    <?php echo get_post_meta( $postID, 'title_handymen', true ); ?> 
                </h3>
                <span class="heading-bar"></span>
              </div>
            <?php } ?>
            <div class="card-wrapper">    
               <?php
               $posts = get_custom_posts( 'post', get_post_meta( $postID, 'number_of_posts_handymen', true ), 0 );                  
               if ( !empty($posts) ){
                  foreach( $posts as $post ){
                  ?>
                  <div class="card">
										<a href="#">
											<div class="card-img-wrap">
													<div class="box-center">
														<span>
																<img class="img-fluid" src="<?php echo $post['image']; ?>">
														</span>
													</div>
											</div>
											<div class="card-body">
												<h5 class="card-title"><?php echo $post['title']; ?></h5>
												<span class="cs-date"><?php echo $post['date']; ?></span>
											</div>
										</a>	
                  </div>
                  <?php
                  }
               }
               ?>
            </div>
         </div>
         <!-- Sidebar -->
         <div class="col-md-3">
            <div class="cs-sidebar p-3">
              <ul>
                <?php dynamic_sidebar('sidebar'); ?>
              </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ======= offer and Discount Section ======= -->
<section id="cs-offer" class="cs-offer">
   <div class="container">
      <div class="row">
          <!-- Looking for handyman -->
         <div class="col-lg-4">
            <?php if( !empty(get_post_meta( $postID, 'title_handyman', true )) ){ ?>
              <div class="section-title pb-0">
                <h4><?php echo get_post_meta( $postID, 'title_handyman', true ); ?> </h4>
              </div>
            <?php } ?>
            <div class="bignews">
               <?php
               $exlodeID = 0;
               $handyman = get_custom_posts( 'handyman', 1 );
               if( !empty($handyman) ){
                $exlodeID = $handyman[0]['id'];
                ?>
                <div class="cs-thumbnail">
                  <a href="#">
                      <div class="card-img-wrap extent-width">
                        <div class="box-center">
                            <span>
                              <img src="<?php echo $handyman[0]['image']; ?>" class="img-fluid">
                            </span>
                        </div>
                      </div>
                     <div class="description">
                        <h6><?php echo $handyman[0]['title']; ?></h6>
                     </div>
                  </a>
                </div>
                <?php
               }
               ?>    
            </div>
            <!--  -->
            <ul class="thumbnail-items">
              <?php
                $handyman_list = get_custom_posts( 'handyman', get_post_meta( $postID, 'number_of_posts_handyman', true ), $exlodeID, 'rand' );
                if( !empty($handyman_list) ){
                  foreach( $handyman_list as $handyman){
                    ?>
                    <li>
                      <a href="#">
                          <div class="card-img-wrap small-width">
                            <div class="box-center">
                                <span>
                                  <img src="<?php echo $handyman['image']; ?>" class="img-fluid">
                                </span>
                            </div>
                          </div>
                        <span>
                            <h6><?php echo $handyman['title']; ?></h6>
                            <span class="cs-date"><?php echo $handyman['date']; ?></span>
                        </span>
                      </a>
                    </li>
                    <?php
                  }
                }
              ?>
            </ul>
         </div>

         <!-- Offers & discount -->
         <div class="col-lg-4">
            <?php if( !empty(get_post_meta( $postID, 'title_offers', true )) ){ ?>
              <div class="section-title pb-0">
                <h4><?php echo get_post_meta( $postID, 'title_offers', true ); ?> </h4>
              </div>
            <?php } ?>
            <div class="bignews">
               <?php
               $exlodeID = 0;
               $offers = get_custom_posts( 'offers_deals', 1 );
               if( !empty($offers) ){
                $exlodeID = $offers[0]['id'];
                ?>
                <div class="cs-thumbnail">
                  <a href="#">
                      <div class="card-img-wrap extent-width">
                        <div class="box-center">
                            <span>
                              <img src="<?php echo $offers[0]['image']; ?>" class="img-fluid">
                            </span>
                        </div>
                      </div>
                     <div class="description">
                        <h6><?php echo $offers[0]['title']; ?></h6>
                     </div>
                  </a>
                </div>
                <?php
               }
               ?>    
            </div>
            <!--  -->
            <ul class="thumbnail-items">
              <?php
                $offer_list = get_custom_posts( 'offers_deals', get_post_meta( $postID, 'number_of_posts_offers', true ), $exlodeID, 'rand' );
                if( !empty($offer_list) ){
                  foreach( $offer_list as $offer){
                    ?>
                    <li>
                      <a href="#">
                          <div class="card-img-wrap small-width">
                            <div class="box-center">
                                <span>
                                  <img src="<?php echo $offer['image']; ?>" class="img-fluid">
                                </span>
                            </div>
                          </div>
                        <span>
                            <h6><?php echo $offer['title']; ?></h6>
                            <span class="cs-date"><?php echo $offer['date']; ?></span>
                        </span>
                      </a>
                    </li>
                    <?php
                  }
                }
              ?>
            </ul>
         </div>

         <!-- Latest news -->
         <div class="col-lg-4">
            <?php if( !empty(get_post_meta( $postID, 'title_news', true )) ){ ?>
              <div class="section-title pb-0">
                <h4><?php echo get_post_meta( $postID, 'title_news', true ); ?> </h4>
              </div>
            <?php } ?>
            <div class="bignews">
               <?php
               $exlodeID = 0;
               $news = get_custom_posts( 'news', 1 );
               if( !empty($news) ){
                $exlodeID = $news[0]['id'];
                ?>
                <div class="cs-thumbnail">
                  <a href="#">
                      <div class="card-img-wrap extent-width">
                        <div class="box-center">
                            <span>
                              <img src="<?php echo $news[0]['image']; ?>" class="img-fluid">
                            </span>
                        </div>
                      </div>
                     <div class="description">
                        <h6><?php echo $news[0]['title']; ?></h6>
                     </div>
                  </a>
                </div>
                <?php
               }
               ?>    
            </div>
            <!--  -->
            <ul class="thumbnail-items">
              <?php
                $news_list = get_custom_posts( 'news', get_post_meta( $postID, 'number_of_posts_news', true ), $exlodeID, 'rand' );
                if( !empty($news_list) ){
                  foreach( $news_list as $news){
                    ?>
                    <li>
                      <a href="#">
                          <div class="card-img-wrap small-width">
                            <div class="box-center">
                                <span>
                                  <img src="<?php echo $news['image']; ?>" class="img-fluid">
                                </span>
                            </div>
                          </div>
                        <span>
                            <h6><?php echo $news['title']; ?></h6>
                            <span class="cs-date"><?php echo $news['date']; ?></span>
                        </span>
                      </a>
                    </li>
                    <?php
                  }
                }
              ?>
            </ul>
         </div>

      </div>
   </div>
</section>
<!-- End Portfolio Details Section -->
<section id="cs-partner" class="cs-partner">
   <div class="container">
      <!-- Partner -->
      <div class="row card-article">
         <div class="section-title text-center">
            <h3>Partner</h3>
            <span class="heading-bar"></span>
         </div>
         <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              <?php
                $partners = get_custom_posts( 'partner', '-1' );
                if( !empty($partners) ){
                  foreach( $partners as $partner ){
                    echo '<div class="item">
                            <img src="'.$partner['image'].'">
                          </div>';
                  }
                }
              ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ======= Footer ======= -->
<?php	get_footer(); ?>