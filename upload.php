<?php
if(!empty($_FILES['picture']['name'])){
    //Include database configuration file
    include_once 'conn.php';
    
    //File uplaod configuration
    $result = 0;
    $uploadDir = "uploads/images/";
    $fileName = time().'_'.basename($_FILES['picture']['name']);
    $targetPath = $uploadDir. $fileName;
    
    //Upload file to server
    if(@move_uploaded_file($_FILES['picture']['tmp_name'], $targetPath)){
        //Get current user ID from session
        $userId = 1;
        
        //Update picture name in the database
        $update = $conn->query("UPDATE user_info SET picture = '".$fileName."' WHERE id = 1");
        // $userId
        if(!$update) print_r($conn->error);
        //Update status
        if($update){
            $result = 1;
        }
    }
    
    //Load JavaScript function to show the upload status
    echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetPath . '\');</script>  ';
}