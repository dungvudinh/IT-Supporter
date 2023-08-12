<?php 
include("connection.php");
if(isset($_POST['email']))
{
    if($_POST['email'] != "" && $_POST['name'] !="" && $_POST['sdt'] !="")
    {
        $email = $_POST['email'];
        $name= $_POST['name'];
        $sdt = $_POST['sdt'];
        $khoa = $_POST['khoa'];
        $ban = $_POST['ban'];
        $note = $_POST['note'];
        $sql = "INSERT INTO app_form_client(full_name, MaKhoa, MaBan,  note,create_at, unread, sdt, email, isReceived) VALUES('".$name."', ".$khoa.", ".$ban.", '".$note."',  current_timestamp(),1,  '".$sdt."', '".$email."' ,0)";
        echo $sql;
        $connection->query($sql);
    }
}

if(isset($_POST['status']))
{
    $name =$_POST['name'];
    $sdt = $_POST['sdt'];
    $status = $_POST['status'];
    $describe = $_POST['describe'];
    $sql  = "INSERT INTO repair_form(full_name, sdt, tinh_trang, mo_ta, create_at, unread, repair_status) VALUES('".$name."', '".$sdt."', '".$status."', '".$describe."',  current_timestamp(), 1, 1)";
    $connection->query($sql);
}
if(isset($_POST['counter']))
{
    $sql = "SELECT * FROM news LIMIT ".$_POST['counter']."";
    $result2 = $connection->query("SELECT COUNT(*) FROM news");
    $count = mysqli_fetch_row($result2);
    echo $count[0];
                    $result = $connection->query($sql);
                    echo 
                    '
                    <div class="content__main-text">
                    Tin Tức 
                    </div>
                    ';
                    while($data = mysqli_fetch_all($result, MYSQLI_ASSOC))
                    {
                        for($i = 0; $i< count($data); $i++)
                        {
                            echo 
                            '
                            <div class="content__main-event">   
                            <div class="content__main-video">
                                <div class="content__main-video-background">
                                    <img src="../news_images/'.$data[$i]['image_url'].'" alt="skiing" class="content__main-video-background-img">
                                </div>  
                            </div>
                            <div class="content__main-footer">
                                <div class="content__main-footer-title">
                                    '.$data[$i]['title'].'
                                </div>
        
                                <div class="content__main-footer-text">
                                '.$data[$i]['content'].'
                                </div>
        
                            </div>
                        </div>
                            ';                        
                        }
                    } 
                    
}
?>