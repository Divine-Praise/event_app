<?php include('includes/header.php'); ?>

<div class="container-fluid px-4">
    <div class="card mt-4 shadow-sm">
        <div class="card-header">
            <h4 class="mb-0">Events
                <a href="event-create.php" class="btn btn-primary float-end">Add Event</a>
            </h4>
        </div>
        <div class="card-body">

            <?php alertMessage(); ?>

            <?php
                $events = getAll('events');
                if(!$events){
                    echo "<h4>Something Went Wrong!</h4>";
                    return false;
                }
                if(mysqli_num_rows($events) > 0){
                    
            ?>

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Price(Naira)</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($events as $item) : ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td>
                                    <img src="../<?= $item['image']; ?>" style="width: 50px; height: 50px;" alt="Img">
                                </td>
                                <td><?= $item['title'] ?></td>
                                <td><?= $item['date'] ?></td>
                                <td><?= $item['price'] ?></td>
                                <td>
                                    <?php  
                                        if($item['status'] == 1){
                                            echo '<span class="badge bg-danger">Closed</span>';
                                        }else{
                                            echo '<span class="badge bg-primary">Active</span>';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="event-edit.php?id=<?= $item['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a
                                        href="event-delete.php?id=<?= $item['id'] ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this Event')"
                                    >
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <?php 
                }else{
                    ?>
                        <tr>
                            <h4 class="mb-0">No Record found</h4>
                        </tr>
                    <?php
                }
            ?>

        </div>
    </div>
</div> 

<?php include('includes/footer.php'); ?>