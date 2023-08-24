<?php
include("../configuration/connection.php");
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_POST['app-form_id']))
    $sql = "UPDATE app_form_client SET isReceived = 1 WHERE id = ".$_POST['app-form_id']."";
if(isset($_POST['execute-status']) && isset($_POST['app-form_id']))
{
    if($_POST['execute-status'] ==1) 
    {
        $result = $connection->query("SELECT full_name, sdt,  MaBan, MaKhoa, email FROM app_form_client WHERE id = ".$_POST['app-form_id']."");
        $data= mysqli_fetch_row($result);
        print_r($data);
        $fullname = $data[0];
        $sdt = $data[1];
        $maBan = $data[2];
        $maKhoa = $data[3];
        $email = $data[4];
        $count_event = mysqli_fetch_row($connection->query("SELECT COUNT(*) FROM su_kien"))[0];
        $count_repair = mysqli_fetch_row($connection->query("SELECT COUNT(*) FROM repair_form"))[0];
        $count_expenditure = mysqli_fetch_row($connection->query("SELECT COUNT(*) FROM expenditure"))[0];
        $connection->query("INSERT INTO accounts(account_name, password) VALUES('".$sdt."', '1')");
        if($maBan ==3)
            $connection->query("INSERT INTO users(full_name, phone_number, MaBan, email, MaKhoa, num_of_noti, num_of_repair, num_of_budget) VALUES('".$fullname."', '".$sdt."', ".$maBan.", '".$email."', ".$maKhoa.", ".$count_event.", ".$count_repair.", ".$count_expenditure.")");
        else 
            $connection->query("INSERT INTO users(full_name, phone_number, MaBan, email, MaKhoa, num_of_noti, num_of_budget) VALUES('".$fullname."', '".$sdt."', ".$maBan.", '".$email."', ".$maKhoa.", ".$count_event.", ".$count_expenditure.")");


    }   
    $sql = "UPDATE app_form_client SET isAccept = ".$_POST['execute-status']." WHERE id = ".$_POST['app-form_id']."";
}
if(isset($_POST['load-more']))
{
    if($_POST['load-more'] == 'event')
    {
        $sql = "SELECT * FROM su_kien";
    } 
    if($_POST['load-more'] == 'app-form_client')
    {
        $sql = "SELECT * FROM app_form_client";
    }
    if($_POST['load-more'] == 'repair_form')
    {
        $sql = "SELECT * FROM repair_form";
    }
}
if(isset($_POST['repair-status']))
{
    echo $_POST['repair-status'];   
    echo $_POST['form-repair_id'];
    $sql = "UPDATE repair_form SET repair_status = ". $_POST['repair-status']." WHERE id  = ".$_POST['form-repair_id']."";
    echo $sql;
}

if(isset($_FILES['file']))
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    if(isset($_POST['event-id']) || isset($_POST['new-id']))
    {
        if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
            
            $filename = $_FILES['file']['name'];
            $tempFile = $_FILES['file']['tmp_name'];
            $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
            $datetime = date("YmdHms");
            $imageUrl = $datetime.".".$imageFileType;
           
            if($_POST['record-type'] == "event")
            {
                $folder = "../event_images/".$imageUrl; 
                $sql = "UPDATE su_kien SET title = ?, content= ?, image_url = ?, unread=1 WHERE id = ".$_POST['event-id']."";
                $result = $connection->query("SELECT image_url FROM su_kien WHERE id = ".$_POST['event-id']."");
                $data = mysqli_fetch_row($result);
                if (file_exists("../event_images/".$data[0]."")) {
                    if (unlink("../event_images/".$data[0]."")) {
                        echo '<script>console.log(Image deleted successfully.);</script>';
                    } else {
                        echo '<script>console.log(Failed to delete the image.);</script>';
                    }
                } else {
                    echo 'Image not found.';
                }
            }
            if($_POST['record-type'] == "news")
            {
                $folder = "../news_images/".$imageUrl; 
                $sql = "UPDATE news SET title = ?, content= ?, image_url = ? WHERE id = ".$_POST['new-id']."";
                $result = $connection->query("SELECT image_url FROM news WHERE id = ".$_POST['new-id']."");
                $data = mysqli_fetch_row($result);
                if (file_exists("./news_images/".$data[0]."")) {
                    if (unlink("./news_images/".$data[0]."")) {
                        echo '<script>console.log(Image deleted successfully.);</script>';
                    } else {
                        echo '<script>console.log(Failed to delete the image.);</script>';
                    }
                } else {
                    echo 'Image not found.';
                }
            }
            $stmt = mysqli_prepare($connection, $sql);  
            mysqli_stmt_bind_param($stmt, "sss", $title, $content,$imageUrl);
            mysqli_stmt_execute($stmt);
            move_uploaded_file($tempFile , $folder);
            $connection->query("UPDATE users SET num_of_noti = num_of_noti +1 WHERE MaCV != 1");
        }
        else 
        {
            echo $_POST['record-type'];
            echo $_POST['event-id'];
            if($_POST['record-type'] == "event")
            {
                $sql = "UPDATE su_kien SET title = ?, content= ?, unread=1 WHERE id = ".$_POST['event-id']."";
            }
            if($_POST['record-type'] == "news")
            {
                $sql = "UPDATE news SET title = ?, content= ? WHERE id = ".$_POST['new-id']."";
            }
            $stmt = mysqli_prepare($connection, $sql);  
            mysqli_stmt_bind_param($stmt, "ss", $title, $content);
            mysqli_stmt_execute($stmt);
            $connection->query("UPDATE users SET num_of_noti = num_of_noti +1 WHERE MaCV != 1");
        }
    }
    else
    {
        if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $filename = $_FILES['file']['name'];
            $tempFile = $_FILES['file']['tmp_name'];
            $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
            $datetime = date("YmdHms");
            $imageUrl = $datetime.".".$imageFileType;
           
            if($_POST['record-type'] == "event")
            {
                $folder = "../event_images/".$imageUrl; 
                 $sql = "INSERT INTO su_kien(title, content, image_url, unread) VALUES(?, ?, ?, 1)";
            }
            if($_POST['record-type'] == "news")
            {
                $folder = "../../news_images/".$imageUrl; 
                $sql = 'INSERT INTO news(title, content,image_url) VALUES(?,?, ?)';
            }
        }
        $stmt = mysqli_prepare($connection, $sql);  
        mysqli_stmt_bind_param($stmt, "sss", $title, $content,$imageUrl);
        mysqli_stmt_execute($stmt);
        move_uploaded_file($tempFile , $folder);
        $connection->query("UPDATE users SET num_of_noti = num_of_noti +1 WHERE MaCV != 1");
    }

   
}

if(isset($_POST['price']))
{
    $prices = $_POST['price'];
   $expenditures = $_POST['expenditure'];
   $title = $_POST['payment-form_content'];
   $payment =$_POST['sum'];
   $content = "";
//    echo $payment ;
   for($i =0;  $i< count($prices); $i++)
   {
       $content=$content.$expenditures[$i].":".number_format($prices[$i], 0, ',', ',')."đ.";
   }
   $sql = "INSERT INTO expenditure(title, content, payment, unread)  VALUES('".$title."', '".$content."', ".$payment.", 1)";

   $data =  $connection->query("SELECT * FROM budget");
   $budget =  mysqli_fetch_row($data)[0];
    $budget -= $payment;
   $connection->query("UPDATE budget SET buudget_left =  ".$budget."");
   $connection->query("UPDATE users SET num_of_budget = num_of_budget+1");
}
if(isset($_POST['isPay']))
{
    $isPay = $_POST['isPay'];
    $account_id = $_POST['account_id'];
    $sql = "UPDATE users SET isPay = ".$isPay." WHERE account_id = ".$account_id."";
    $sql2 = "SELECT * FROM budget"; 
    $data =  $connection->query($sql2);
    $row = mysqli_fetch_row($data);
    if($isPay == 1)
        $newBudget = $row[0] + 100000;
    else  $newBudget = $row[0] -100000;
    echo $newBudget;
    $connection->query("UPDATE budget SET buudget_left  = ".$newBudget."");
}
if(isset($_FILES['image-input']))
{
    $fullname= $_POST['name-input'];
    $email = $_POST['email-input'];
    $address= $_POST['address-input'];
    $sdt = $_POST['sdt-input'];
    $age = $_POST['age-input'];
    $khoa = $_POST['khoa-select'];
    if ($_FILES['image-input']['error'] === UPLOAD_ERR_OK) {
       
        $filename = $_FILES['image-input']['name'];
        $tempFile = $_FILES['image-input']['tmp_name'];
        $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        $datetime = date("YmdHms");
        $createAt = date("y-m-d H:m:s");
        $imageUrl = $datetime.".".$imageFileType;
        $folder = "../avatar_users/".$imageUrl;  
        echo $tempFile;
        $fileImage = ", avatar = '".$imageUrl."'";
        $result = $connection->query("SELECT avatar FROM users WHERE account_id = ".$_SESSION['user_id']."");
        $data = mysqli_fetch_row($result);
        // if (file_exists("../avatar_users/".$data[0]."")) {
        //     if (unlink("../avatar_users/".$data[0]."")) {
        //         echo '<script>console.log(Image deleted successfully.);</script>';
        //     } else {
        //         echo '<script>console.log(Failed to delete the image.);</script>';
        //     }
        // } else {
        //     echo 'Image not found.';
        // }
        move_uploaded_file($tempFile , $folder);
      }
      else $fileImage = "";
      $sql = "UPDATE users SET full_name = '".$fullname."', email = '".$email."', address= '".$address."' , phone_number = '".$sdt."', age = ".$age." , MaKhoa = ".$khoa." ".$fileImage." WHERE account_id = ".$_SESSION['user_id']."" ;
}
if(isset($_POST['noti-type']))
{
    $userId = $_SESSION['user_id'];
    echo $userId;
    if($_POST['noti-type'] == 'event')
    {
        $sql = "UPDATE users SET num_of_noti = 0 WHERE account_id = ".$userId."";
    }
    else if($_POST['noti-type'] == 'repair')
    {
        $sql = "UPDATE users SET num_of_repair = 0 WHERE account_id = ".$userId."";
    }
    else if($_POST['noti-type'] == 'expenditure')
    {
        $sql = "UPDATE users SET num_of_budget = 0 WHERE account_id = ".$userId."";
    }
}
if(isset($_POST['id-event_delete']))
{
    $sql = "DELETE FROM su_kien WHERE id = ".$_POST['id-event_delete']."";
}
if(isset($_POST['id-new_delete']))
{
    $sql = "DELETE FROM news WHERE id = ".$_POST['id-new_delete']."";
}
if(isset($_POST['expenditure-id']))
{
    $expenditureId  = $_POST['expenditure-id'];
    $sql = "UPDATE expenditure SET isConfirmed = 1 WHERE id = ".$expenditureId."";
}
if(!isset($stmt))
{
    if ($connection->query($sql) === TRUE) {
        echo "<script>console.log('New record created successfully')</script>";
      } else {
        echo "<script>console.log(".$connection->error.")</script>";
      }
}
?>  
