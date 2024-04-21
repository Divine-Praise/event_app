<?php include('includes/header.php'); ?>

<div class="container-fluid px-4">
    <div class="card mt-4 shadow-sm">
        <div class="card-header">
            <h4 class="mb-0">Edit  Event
                <a href="event.php" class="btn btn-primary float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">

            <?php alertMessage(); ?>

           <form action="code.php" method="POST" enctype="multipart/form-data">

           <?php 
                $paramValue = checkParamId('id');
                if(!is_numeric($paramValue)){
                    echo '<h5>'.$paramValue.'</h5>';
                    return false;
                }

                $events = getById('events', $paramValue);
                if($events['status'] == 200)
                {
                    ?>
                        <input type="hidden" name="event_id" value="<?= $events['data']['id']; ?>" />
                        <div class="row">

                        <div class="col-md-12 mb-3">
                            <label for="">Event Title *</label>
                            <input type="text" name="title" required value="<?= $events['data']['title']; ?>" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Event Date *</label>
                            <input type="date" name="date" required value="<?= $events['data']['date']; ?>" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Event Time *</label>
                            <input type="text" name="time" required value="<?= $events['data']['time']; ?>" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Event Price (In Naira) *</label>
                            <input type="number" name="price" required value="<?= $events['data']['price']; ?>" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Image *</label>
                            <input type="file" name="image" required class="form-control" />
                            <img src="../<?= $events['data']['image'] ?>" style="width: 80px; height: 80px;" alt="Image">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Event Location *</label>
                            <input type="text" name="location" value="<?= $events['data']['location']; ?>" required class="form-control" />
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Event Sub Description *</label>
                            <textarea name="sub_description" class="form-control" required rows="3"><?= $events['data']['sub_description']; ?></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Event main Description *</label>
                            <textarea name="main_description" class="form-control" required rows="5"><?= $events['data']['main_description']; ?></textarea>
                        </div>


                        <div class="col-md-6">
                            <label>Status (UnChecked = Coming Soon, Checked = Present)</label><br>
                            <input type="checkbox" name="status" <?= $events['data']['status'] == true ? 'checked':''; ?> style="width: 30px; height:30px;">
                        </div>

                        <div class="col-md-6 mb-3 text-end">
                            <br>
                            <button type="submit" name="updateEvents" class="btn btn-primary">Update Event</button>
                        </div>

                        </div>
                    <?php
                }
                else
                {
                    echo '<h5>'.$customer['message'].'</h5>';
                    return false;
                }
            ?>

           </form>

        </div>
    </div>
</div> 

<?php include('includes/footer.php'); ?>