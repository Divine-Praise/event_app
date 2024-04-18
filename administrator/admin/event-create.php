<?php include('includes/header.php'); ?>

<div class="container-fluid px-4">
    <div class="card mt-4 shadow-sm">
        <div class="card-header">
            <h4 class="mb-0">Add  Event
                <a href="event.php" class="btn btn-primary float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">

            <?php alertMessage(); ?>

           <form action="code.php" method="POST" enctype="multipart/form-data">

                <div class="row">

                    <div class="col-md-12 mb-3">
                        <label for="">Event Title *</label>
                        <input type="text" name="title" required class="form-control" />
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="">Event Date *</label>
                        <input type="date" name="date" required class="form-control" />
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="">Event Price (In Naira) *</label>
                        <input type="number" name="price" required class="form-control" />
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="">Image *</label>
                        <input type="file" name="image" required class="form-control" />
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Event Sub Description *</label>
                        <textarea name="sub_description" class="form-control" required rows="3"></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Event main Description *</label>
                        <textarea name="main_description" class="form-control" required rows="5"></textarea>
                    </div>
                    

                    <div class="col-md-6">
                        <label>Status (UnChecked=Active, Checked=Closed)</label><br>
                        <input type="checkbox" name="status" style="width: 30px; height:30px;">
                    </div>

                    <div class="col-md-6 mb-3 text-end">
                        <br>
                        <button type="submit" name="saveEvents" class="btn btn-primary">Add Event</button>
                    </div>

                </div>
           </form>

        </div>
    </div>
</div> 

<?php include('includes/footer.php'); ?>