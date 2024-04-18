<?php

    include('../config/function.php');
    
    if(isset($_POST['saveAdmin'])){
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $phone = validate($_POST['phone']);
        $is_ban = validate($_POST['is_ban']) == true ? 1:0;

        if($name != '' && $email != '' && $password != ''){

            $emailCheck = mysqli_query($conn, "SELECT * FROM admins WHERE email='$email'");
            if($emailCheck){
                if(mysqli_num_rows($emailCheck) > 0){
                    redirect('admins-create.php', 'Email Already used by another user.');
                }
            }

            $bcrypt_password = password_hash($password, PASSWORD_BCRYPT);
            $data = [
                'name' => $name,
                'email' => $email,
                'password' => $bcrypt_password,
                'phone' => $phone,
                'is_ban' => $is_ban
            ];
            $result = insert('admins', $data);
            if($result){
                redirect('admins.php', 'Admin Created Successfully');
            }else{
                redirect('admins-create.php', 'Something went wrong');
            }

        }else{
            redirect('admins-create.php', 'please fill required fields.');
        }
    }

    if(isset($_POST['updateAdmin'])){
        $adminId = validate($_POST['adminId']);
        $adminData = getById('admins', $adminId);

        if($adminData['status'] != 200){
            redirect('admins-edit.php?id=' . $adminId, 'please fill required fields.');
        }

        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $phone = validate($_POST['phone']);
        $is_ban = validate($_POST['is_ban']) == true ? 1:0;
        $EmailCheckQuery = "SELECT * FROM admins WHERE email='$email' AND id!='$adminId'";
        $checkResult = mysqli_query($conn, $EmailCheckQuery);
        if($checkResult){
            if(mysqli_num_rows($checkResult) > 0){
                redirect('admins-edit.php?id='.$adminId,'Email Already used by another user');
            }
        }

        if($password != ''){
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        }else{
            $hashedPassword = $adminData['data']['password'];
        }

        if($name != '' && $email != ''){

            $data = [
                'name' => $name,
                'email' => $email,
                'password' => $hashedPassword,
                'phone' => $phone,
                'is_ban' => $is_ban
            ];
            $result = update('admins', $adminId, $data);
            if($result){
                redirect('admins-edit.php?id='. $adminId, 'Admin Updated Successfully');
            }else{
                redirect('admins-edit.php?id='. $adminId, 'Something went wrong');
            }

        }else{
            redirect('admins-create.php', 'please fill required fields.');
        }    
    }

    if(isset($_POST['saveEvents']))
    {
        $title = validate($_POST['title']);
        $date = validate($_POST['date']);
        $price = validate($_POST['price']);
        $subDescription = validate($_POST['sub_description']);
        $mainDescription = validate($_POST['main_description']);
        $status = isset($_POST['status']) == true ? 1:0; 

        if($_FILES['image']['size'] > 0)
        {
            $path = "../assets/uploads/products";
            $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            $filename = time().'.'.$image_ext;
            move_uploaded_file($_FILES['image']['tmp_name'], $path."/".$filename);

            $finalImage = "assets/uploads/products/".$filename;
        }  
        else
        {
            $filename = '';
        }
        

        $data = [
            'title' => $title,
            'date' => $date,
            'price' => $price,
            'sub_description' => $subDescription,
            'main_description' => $mainDescription,
            'image' => $finalImage,
            'status' => $status
        ];
        $result = insert('events', $data);
        if($result){
            redirect('event.php', 'Event Created Successfully');
        }else{
            redirect('event-create.php', 'Something went wrong');
        }
    }

    if(isset($_POST['updateEvents']))
    {
        $event_id = validate($_POST['event_id']);
        $eventData = getById('events', $event_id);
        if(!$eventData){
            redirect('event.php','No Such Product Found');
        }

        $title = validate($_POST['title']);
        $date = validate($_POST['date']);
        $price = validate($_POST['price']);
        $subDescription = validate($_POST['sub_description']);
        $mainDescription = validate($_POST['main_description']);
        $status = isset($_POST['status']) == true ? 1:0;  

        if($_FILES['image']['size'] > 0)
        {
            $path = "../assets/uploads/products";
            $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            $filename = time().'.'.$image_ext;
            move_uploaded_file($_FILES['image']['tmp_name'], $path."/".$filename);

            $finalImage = "assets/uploads/products/".$filename;

            $deleteImage =  "../".$eventData['data']['image'];
            if(file_exists($deleteImage)){
                unlink($deleteImage);
            }
        }  
        else
        {
            $filename = $eventData['data']['image'];
        }
        

        $data = [
            'title' => $title,
            'date' => $date,
            'price' => $price,
            'sub_description' => $subDescription,
            'main_description' => $mainDescription,
            'image' => $finalImage,
            'status' => $status
        ];
        $result = update('events', $event_id, $data);
        if($result){
            redirect('event-edit.php?id='.$event_id, 'Event Updated Successfully');
        }else{
            redirect('event-edit-create.php?id='.$event_id, 'Something went wrong');
        }
    }
?>