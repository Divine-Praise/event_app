<?php 
   include('includes/header.php'); 
   include('includes/navbar.php');
   include('includes/banner.php');
?>



      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <div class="news_taital_main">
               <h1 class="latest_text">Featured Events</h1>
               <div class="seemor_bt"><a href="videos.php">See More</a></div>
            </div>
         </div>
      </div>
      <div class="news_section_2">
         <div class="container">
            <div class="down_arrow"><img src="images/down-arrow.png"></div>
            <div class="row">

            <?php
               // $events = getAll('events', 'LIMIT 1');
               $events = "SELECT * FROM events LIMIT 4";
               $eventQuery = mysqli_query($conn, $events);

               if($eventQuery){
                  if(mysqli_num_rows($eventQuery) > 0)
                  {
                     ?>
                        <?php foreach($eventQuery as $eventDetails) : ?>
                              <div class="col-lg-3 col-sm-6">
                                 <div class="images_main">
                                    <div class="image_1"><img src="administrator../<?= $eventDetails['image']; ?>" class="image_1"></div>
                                    <div class="text_main">
                                       <h2 class="business_text"><?= $eventDetails['title']; ?></h2>
                                       <p class="date_text"><?= $eventDetails['date']; ?></p>
                                    </div>
                                    <p class="ipsum_text"><?= $eventDetails['sub_description']; ?></p>
                                    <div class="seemor_bt_1"><a href="seemore.php?id=<?= $eventDetails['id']; ?>">See More</a></div>
                                 </div>
                              </div>
                        <?php endforeach; ?>
                     <?php
         

                  }else{
                     echo '<h5>No Event Found!</h5>';
                     return false;
                  }
               }else{
                  echo '<h5>Something Went Wrong!</h5>';
                  return false;
               }
            ?>
            </div>
         </div>
      </div>
      <!-- news section end -->

      <!-- music section start -->
      <!-- <div class="news_section layout_padding">
         <div class="container">
            <div class="news_taital_main">
               <h1 class="latest_text">Upcoming Events</h1>
               <div class="seemor_bt"><a href="#">See More</a></div>
            </div>
         </div>
      </div>
      <div class="news_section_2">
         <div class="container">
            <div class="down_arrow"><img src="images/down-arrow.png"></div>
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-5.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Business News</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-6.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Business News</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-7.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Business News</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-8.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Business News</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-5.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Business News</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-6.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Business News</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-7.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Business News</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-8.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Business News</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-5.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Music</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-6.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Music</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-7.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Music & Video</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                           <div class="images_main">
                              <div class="image_1"><img src="images/img-8.png" class="image_1"></div>
                              <div class="text_main">
                                 <h2 class="business_text">Live Event Music</h2>
                                 <p class="date_text">01/03/2019</p>
                              </div>
                              <p class="ipsum_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                              <div class="seemor_bt_1"><a href="#">See More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                 <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                 <i class="fa fa-angle-right"></i>
               </a>
             </div>
         </div>
      </div> --> 
      <!-- music section end -->

      <!-- newsletter section start -->
      <div class="newsletter_section layout_padding">
         <div class="container">
            <h1 class="subscribe_taital">Subscribe Newsletter</h1>
            <p class="subscribe_text">There are many variations of passages of Lorem Ipsum available, but </p>
            <div class="newsletter_box">
               <input type="text" class="email_text" placeholder="Enter Your email" name="Enter Your email">
               <div class="subscribe_bt"><a href="https://wearethe44mafia.substack.com/?">Subscribe</a></div>
            </div>
         </div>
      </div>
      <!-- newsletter section end -->

      <!-- review section start -->
      <div class="review_section layout_padding">
         <div class="container">
            <h1 class="review_taital">REVIEWS</h1>
         </div>
      </div>
      <div class="review_section_2">
         <div class="container">
            <div class="review_box">
               <div id="slide_carousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="review_left_box">
                           <div class="review_image_1"></div>
                           <h2 class="senha_text">UNRULY</h2>
                           <p class="many_text">I've used The 44Mafia for multiple events, and they consistently deliver. From ticket selection to checkout, everything is efficient and hassle-free. Definitely coming back to work with them!</p>
                        </div>
                        <div class="review_middle_box">
                           <div class="review_image_1"></div>
                           <h2 class="senha_text">AUGUST MADNESS</h2>
                           <p class="many_text">Partnering with the 44 mafia was one of the best decisions of the succes of the event. A team with vision and goals, love their consistency and discipline.</p>
                        </div>
                        <div class="review_right_box">
                           <div class="review_image_1"></div>
                           <h2 class="senha_text">RAVE SZN</h2>
                           <p class="many_text">Impressed with the seamless ticketing experience provided by them. Their platform is user friendly and their customer service is top-notch.</p>
                        </div>
                     </div>
                     <!--<div class="carousel-item">
                        <div class="review_left_box">
                           <div class="review_image_1"><img src="images/review-img-1.png"></div>
                           <h2 class="senha_text">Senha</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_middle_box">
                           <div class="review_image_1"><img src="images/review-img-2.png"></div>
                           <h2 class="senha_text">sminter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_right_box">
                           <div class="review_image_1"><img src="images/review-img-3.png"></div>
                           <h2 class="senha_text">minter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="review_left_box">
                           <div class="review_image_1"><img src="images/review-img-1.png"></div>
                           <h2 class="senha_text">Senha</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_middle_box">
                           <div class="review_image_1"><img src="images/review-img-2.png"></div>
                           <h2 class="senha_text">sminter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                        <div class="review_right_box">
                           <div class="review_image_1"><img src="images/review-img-3.png"></div>
                           <h2 class="senha_text">minter</h2>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                        </div>
                     </div>-->
                  </div>
                  <a class="carousel-control-prev" href="#slide_carousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#slide_carousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>  
         </div>
      </div>
      <!-- review section end -->

<!-- Footer Section -->
<?php include('includes/footer.php'); ?>