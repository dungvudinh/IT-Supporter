<?php 
session_start();
include("./configuration/connection.php");
if(!isset($_COOKIE['phone_number']))  header("Location:./login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
        <link href="./css/style.css" media="all" rel="Stylesheet" type="text/css" />
        <link href="./css/notification.css" media="all" rel="Stylesheet" type="text/css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class='layout'>
        <?php include("./components/sidebar.php")?>
        <div class='content__wrapper'>
            <div class='content'>
                <header>
                    <h2 class= "title__name">Thông Báo  <i class='bx bxs-bell-ring'></i></h2>
                </header>
                <section class="section-50">
                    <ul class ='filter__noti'>
                        <?php
                            if(isset($_SESSION['user_id']))
                            {
                                $user_id = $_SESSION['user_id'];
                                $sql2 ="SELECT avatar, full_name, TenBan, MaCV, users.MaBan FROM users INNER  JOIN  ban ON users.MaBan  = ban.MaBan WHERE account_id  = '".$user_id."'";
                                $data = $connection->query($sql2);
                                $user= mysqli_fetch_row($data);
                                $maCV  = $user[3];
                                $maBan = $user[4];
                                if($maCV ==1)
                                {
                                    if($maBan ==1)
                                    {
                                        echo 
                                        "
                                        <form class ='noti_item'  method='POST'>
                                            <input type='text' name='noti_input'  value='afc' style='display:none;' >
                                            <button type='submit' value='Submit'>Đơn Ứng Tuyển Mới</button>
                                        </form>
                
                                        <form  class ='noti_item'  method='POST'>
                                            <input type='text' name='noti_input'  value='event-created' style='display:none;' >
                                            <button type='submit' value='Submit' >Sự Kiện Đã Tạo</button>
                                        </form>
                                
                                        ";
                                    }
                                      
                                    else if($maBan ==2)
                                    {
                                        echo "
                                        <form class ='noti_item'  method='POST'>
                                            <input type='text' name='noti_input'  value='afc' style='display:none;' >
                                            <button type='submit' value='Submit'>Đơn Ứng Tuyển Mới</button>
                                        </form>
                                        <form  class ='noti_item'  method='POST'>
                                            <input type='text' name='noti_input'  value='news-created' style='display:none;' >
                                            <button type='submit' value='Submit' >Tin Tức Đã Tạo</button>
                                        </form>
                                        ";
                                    }
                                    else 
                                    {
                                        echo 
                                        "
                                        <form class ='noti_item'  method='POST'>
                                            <input type='text' name='noti_input'  value='afc' style='display:none;' >
                                            <button type='submit' value='Submit'>Đơn Ứng Tuyển Mới</button>
                                        </form>
                                        <form  class ='noti_item'  method='POST'>
                                        <input type='text' name='noti_input' value='event' style='display:none;'>
                                        <button type='submit' value='Submit'>Sự Kiện Mới</button>
                                        </form>
                                        ";

                                    }
                                }
                                else 
                                {
                                    echo 
                                    "
                                    <form  class ='noti_item'  method='POST'>
                                    <input type='text' name='noti_input' value='event' style='display:none;'>
                                    <button type='submit' value='Submit'>Sự Kiện Mới</button>
                                    </form>
                                    ";
                                }
                            } 
                        ?>
                    </ul>
                    <div class ='filter__line'></div>
                <div class="container" >
                    <div class='notification-ui_dd-content'>
                        <?php
                           if(!isset($_POST['noti_input']))
                           {
                            $currentDate = date('Y-m-d');   
                            if($maCV !=1)
                            {

                                $sql = "SELECT * FROM su_kien ORDER BY create_at DESC";
                                $rsult = $connection->query($sql);
                               
                                echo "<input name='category' value = 'event' style='display:none;'/>";
                                while($data = mysqli_fetch_all($rsult, MYSQLI_ASSOC))
                            {
                                for($i = 0; $i< count($data); $i++)
                                {
                                    $difference = strtotime($currentDate) - strtotime(date("Y-m-d", strtotime($data[$i]['create_at'])));
                                    $days = abs($difference/(60*60)/24);
                                    $month =  floor($days/30);
                                    $years = floor($month/12);
                                    echo "
                                    <div class='notification-list";
                                    if($data[$i]['unread']  ==1) echo " notification-list--unread";
                                     echo "'>
                                    <div class='notification-list_content'>
                                        <div class='notification-list_img'>
                                            <img src='./event_images/".$data[$i]['image_url']."' alt='Feature image' class='event_image'>
                                        </div>
                                        <div class='notification-list_detail'>
                                            <div class='title'>
                                                <i class='bx bx-calendar-event'></i>
                                                <p><b>".$data[$i]['title']."</b></p>
                                            </div>
                                            <p class='text-muted'>".$data[$i]['content']."</p>
                                        </div>
                                    </div>
                                    <div class='notification-list_creation-time'>
                                        <p class='creation-time'><small>";
                                        if($days ==0) echo "Hôm nay";
                                        else if($days <=30) echo $days." ngày trước";
                                        else if($days <=365) echo $month." tháng trước";
                                        else echo $years." năm trước";
                                        echo  "</small></p>    
                                    </div>
                                   
                                </div>
                            ";

                            }
                           }
                            }
                           if($maCV ==1)
                           {
                            $sql = "SELECT * FROM app_form_client INNER JOIN khoa ON app_form_client.MaKhoa = khoa.MaKhoa INNER JOIN ban ON app_form_client.MaBan = ban.MaBan ORDER BY create_at DESC";
            $result = $connection->query($sql);
            echo "<input name='category' value = 'app-form_client' style='display:none;'/>";
            while($data= $data = mysqli_fetch_all($result, MYSQLI_ASSOC))
            {
                for($i =0; $i<count($data); $i++)
                {
                    $difference = strtotime($currentDate) - strtotime(date("Y-m-d", strtotime($data[$i]['create_at'])));
                    $days = abs($difference/(60*60)/24);
                     $month =  floor($days/30);
                    $years = floor($month/12);
                    echo "
                    <div class='notification-list";
                    if($data[$i]['unread']  ==1) echo " notification-list--unread";
                        echo "'>
                    <div class='notification-list_content'>
                        <div class='notification-list_detail'>
                            <div class='title'>
                                <i class='bx bx-envelope'></i>
                                <p><b>".$data[$i]['full_name']."</b></p>
                            </div>
                            <div class='more-infor'>
                                <p>SDT:  ".$data[$i]['sdt']."</p>
                                <p>Email:  ".$data[$i]['email']."</p>
                                <p>Ban Mong Muốn: ".$data[$i]['TenBan']."</p>
                            </div>
                            <p class='text-muted'>Note: ".$data[$i]['note']."</p>
                            
                        </div>
                    </div>
                    <div class='notification-list_creation-time'>
                        <p class='creation-time'><small>";
                        if($days ==0) echo "Hôm nay";
                        else if($days <=30) echo $days." ngày trước";
                        else if($days <=365) echo $month." tháng trước";
                        else echo $years." năm trước";
                        echo  "</small></p>
                            <form METHOD= 'POST' class='app-form_submit' >
                                <input name='app-form_id'  value='".$data[$i]['id']."' style='display:none;'/>
                                <button class='receive-btn";
                                if($data[$i]['isReceived'] == 1) echo " hidden";
                                echo "'>Tiếp Nhận</button>
                            </form>
                            <div class='execute-status";
                            if($data[$i]['isReceived'] == 1) echo " show";
                            echo "'>";
                            if($data[$i]['isAccept'] == NULL)
                                echo 
                                    "<form METHOD= 'POST' class='app-form_submit' > 
                                        <input name='app-form_id'  value='".$data[$i]['id']."' style='display:none;'/>
                                        <input name='execute-status' value='1' style='display:none;'/>
                                        <button class='accept' >Ứng tuyển thành công</button>
                                    </form>
                                    <form METHOD= 'POST' class='app-form_submit' > 
                                        <input name='app-form_id'  value='".$data[$i]['id']."' style='display:none;'/>
                                        <input name='execute-status' value='0' style='display:none;'/>
                                        <button class='deny'>Ứng tuyển thất bại</button>
                                    </form>";
                            else if($data[$i]['isAccept'] ==1)
                                echo "
                                    <button class='accept' >Ứng tuyển thành công</button>
                                ";
                            else 
                                echo "
                                    <button class='deny'>Ứng tuyển thất bại</button>
                                ";
                               echo " </div>
                        ";
                    echo "</div>
                </div>
            ";
                }
            }
                           }
                            
                        }
                       
                        ?>
                        </div>
                  
                </div>
            </section>
            </div>
        </div>
        <div class="overlay-wrapper">
            <div class="overlay"></div>
           <?php  include("./components/new_record.php");?>
        </div>
        <div class='overlay-wrapper2'>
            <div class='overlay2'></div>
            <div class='overlay-content'>
                
            </div>
        </div>
    </div>
</body>
<script src='./logic/notiItemShow.js'></script>
<script>

    const  notiCates = document.querySelectorAll('.filter__noti  form');
    const  filterLine   = document.querySelector('.filter__line');
   for(const index in notiCates)
   {
         notiCates[index].onclick = function(){
            filterLine.style.transform = `translateX(${notiCates[index].offsetLeft - 55 }px)`;
            filterLine.style.width = `${notiCates[index].offsetWidth}px`;   
        }
   }
$(document).ready(function() {
    $('.noti_item').submit(function(e) {
        $('.notification-ui_dd-content').empty();
        e.preventDefault(); 
        var form = $(this);
        var formData = form.serialize(); 
        $.ajax({
            type: form.attr('method'),
            url: "./components/noti_item.php", 
            data: formData,
            success: function(response) {
                $('.notification-ui_dd-content').html(response);
                $('.noti_item')[0].reset();
            }
        });
    });
})
$(document).ready(function() {
    $('.load-more_form').submit(function(e) {
        e.preventDefault(); 
        var form = $(this);
        var formData = form.serialize(); 
        $.ajax({
            type: form.attr('method'),
            url: "./components/get_data.php", 
            data: formData,
            success: function(response) {
                // console.log(response);
            }
        });
    });
    
})
$(document).ready(function() {
    $('.app-form_submit').submit(function(e) {
        e.preventDefault();     
        var form = $(this);
        var formData = form.serialize(); 
        console.log(formData);
        $.ajax({
            type: form.attr('method'),
            url: "./components/get_data.php", 
            data: formData,
            success: function(response) {
               
            }
        });
    });
})
// const toastTrigger = document.getElementById('liveToastBtn')
// const toastLiveExample = document.getElementById('liveToast')

// if (toastTrigger) {
//   const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
//   toastBootstrap.show()
    
// }
</script>
</html>