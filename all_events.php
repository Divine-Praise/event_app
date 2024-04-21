<?php
   include('includes/header.php'); 
   include('includes/navbar.php');
?>

      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <div class="news_taital_main">
               <h1 class="latest_text">All Events</h1>
               <div class="seemor_bt"><a href="videos.php">Back</a></div>
            </div>
         </div>
      </div>
      <div class="news_section_2">
         <div class="container">
            <div class="down_arrow"><img src="images/down-arrow.png"></div>
            <div class="row">

            <?php
               // $events = getAll('events', 'LIMIT 1');
               $events = "SELECT * FROM events";
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

<!-- Footer Section -->
<?php include('includes/footer.php'); ?>