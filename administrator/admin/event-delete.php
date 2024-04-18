<?php

    require "../config/function.php";

    $paraResultId = checkParamId('id');

   if(is_numeric($paraResultId)){

    $EventId = validate($paraResultId);

    $event = getById('events', $EventId);
    if($event['status'] == 200){
        $response = delete('events', $EventId);
        if($response){
            $deleteImage = "../".$event['data']['image'];
            if(file_exists($deleteImage)){
                unlink($deleteImage);
            }
            redirect('event.php', 'Event Deleted Successfully');
        }else{
            redirect('event.php', 'Something Went Wrong');
        }
    }else{
        redirect('event.php', $event['message']);
    }

   }else{
        redirect('event.php', 'Something Went Wrong');
   }


?>