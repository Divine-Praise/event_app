<?php 
    include('includes/header.php'); 
    include('includes/navbar.php');
?>


    <!-- news section start -->

    <?php

        $paramValue = checkParamId('id');
        if(!is_numeric($paramValue)){
            echo '<h5>Id is not an Integer</h5>';
            return false;
        }

        $events = getById('events', $paramValue);

        if($events){
            
            if($events['status'] == 200)
            {
                ?>
                    <input type="hidden" readonly name="event_id" value="<?= $events['data']['id']; ?>">
                    <div class="news_section layout_padding">
                        <div class="container">
                            <div class="news_taital_main">
                                <h1 class="latest_text"><?= $events['data']['title']; ?></h1>
                                <div class="seemor_bt"><a href="index.php">Back</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="news_section_2">
                        <div class="container">
                            <div class="down_arrow"><img src="images/down-arrow.png"></div>
                            <div class="row">

                                <div class="col-md-12 mt-3 bg-image" 
                                style="
                                height: 50vh; 
                                background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(administrator../<?= $events['data']['image']; ?>); 
                                background-size: cover; 
                                background-position: center; 
                                background-repeat: no-repeat;
                                "
                                >
                                    <h1 class="font-weight-bold"><?= $events['data']['title']; ?></h1>
                                </div>
                                <div class="col-md-10 body">
                                    <h2 class="mt-5 font-weight-bold text-dark " id="tit"><?= $events['data']['title']; ?></h2>
                                    <h6 class="mt-1" id="des"><?= $events['data']['main_description']; ?></h6>

                                    <div class="time date mt-3">
                                        <h6 class="text-secondary"><i class="fa-regular fa-calendar"></i></h6>
                                        <h6 class="text-secondary"><?= $events['data']['date']; ?>, <?= $events['data']['time']; ?></h6>
                                    </div>

                                    <div class="time location">
                                        <h6 class="text-secondary"><i class="fa-solid fa-location-dot"></i></h6>
                                        <h6 class="text-secondary"><?= $events['data']['location']; ?></h6>
                                    </div>

                                    <div class="time date">
                                        <h6 class="text-secondary">Price:</h6>
                                        <h6 class="text-secondary"><i class="fa-solid fa-naira-sign"></i><?= $events['data']['price']; ?></h6>
                                    </div>

                                    <div class="time date">
                                        <h6 class="text-secondary">Status:</h6>
                                        <h6 class="text-white">
                                            <?php  
                                                if($events['data']['status'] == 1){
                                                echo '<span class="badge bg-primary">Present</span>';
                                                }else{
                                                echo '<span class="badge bg-danger">Coming Soon</span>';
                                                }
                                            ?>
                                        </h6>
                                    </div>

                                    <h2 class="mt-1 font-weight-bold text-dark text-sm">Contact Us</h2>
                                    <h2 class="font-weight-bold text-danger"><i class="fa-brands fa-instagram"></i></h2>

                                </div>
                                <div class="col-md-4">
                                    <a href="#" value="<?= $events['data']['price']; ?>" class="btn bg-dark text-white mt-3" id="purchase">Purchase Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- news section end -->
                <?php
            }
            else
            {
                echo '<h5>'. $events['message'] . '</h5>';
            }
        }else{
            echo '<h5>Something Went Wrong!</h5>';
            return false;
        }
    ?>
    <div class="row">
        
    </div>

<!-- Footer Section -->
<?php include('includes/footer.php'); ?>