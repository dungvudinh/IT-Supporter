<!DOCTYPE html>
<html lang="en">
<?php 
include('./connection.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

    <title>IT-SUPPORTER</title>
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="header__container">
                <div class="header__logo">
                    <img src="./assets/img/logo.png" alt="logo" class="header__img">
                </div>
                <ul class="header__list">
                    <div class="header__list-items-container">
                        <li class="header__list-items">
                            <a href="#container__home" class="header__list-items-link">
                                Trang chủ
                                <div class="header__list-items-link-restore"></div>
                            </a>

                        </li>
                    </div>
                    <div class="header__list-items-container">
                        <li class="header__list-items">
                            <a href="#container__event" class="header__list-items-link">
                                Tin tức
                                <div class="header__list-items-link-restore"></div>
                            </a>

                        </li>
                    </div>
                    <div class="header__list-items-container">
                        <li class="header__list-items">
                            <a href="#container__review" class="header__list-items-link">
                                Đánh giá
                                <div class="header__list-items-link-restore"></div>
                            </a>

                        </li>
                    </div>
                    <div class="header__list-items-container">
                        <li class="header__list-items">
                            <a href="#container__help" class="header__list-items-link">
                                Hỗ trợ
                                <div class="header__list-items-link-restore"></div>
                            </a>
                        </li>
                    </div>
                    <div class="header__list-items-container">
                        <li class="header__list-items menu-register">
                            <a href="#container__register" class="header__list-items-link">
                                Đăng kí thành viên
                                <div class="header__list-items-link-restore"></div>
                            </a>
                        </li>
                    </div>
                    <div class="header__list-items-container">
                        <li class="header__list-items menu-review">
                            <a href="#container__register" class="header__list-items-link">
                                Gửi đánh giá
                                <div class="header__list-items-link-restore"></div>
                            </a>
                        </li>
                    </div>
                </ul>
                <div class="header__icon">
                    <div class="header__icon-search">
                        <svg class="header__icon-search-img" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            width="20px" height="19px" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <circle fill="none" stroke-width="1.5" stroke-miterlimit="10" cx="10.9" cy="9.5" r="8.4">
                            </circle>
                            <line fill="none" x1="5.4" y1="15.6" x2="5.4" y2="15.6"></line>
                            <line stroke-width="1.5" stroke-miterlimit="10" x1="5.3" y1="15.2" x2="0.6" y2="19.4">
                            </line>
                        </svg>
                        <div class="header__icon-search-fixed">
                            <div class="header__icon-search-fixed-close">
                                <i class="fas fa-times header__icon-search-fixed-close-icon"></i>
                            </div>
                            <div class="header__icon-search-fixed-container">
                                <input type="text" placeholder="Search..." class="header__icon-search-fixed-input">
                                <div class="header__icon-search-fixed-btn">
                                    <div class="header__icon-search-fixed-btn-text">

                                        Tìm kiếm
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="header__icon-bars">
                        <svg class="header__icon-bars-img" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19px" height="17px"
                            viewBox="0 0 26 20" enable-background="new 0 0 26 20" xml:space="preserve">
                            <rect x="10.5" width="13.7" height="2.4"></rect>
                            <rect x="8" y="8.8" width="16.2" height="2.4"></rect>
                            <rect x="1.7" y="17.6" width="22.5" height="2.4"></rect>
                        </svg>
                    </div> -->
                    <div class="header__icon-bars-container">
                        <div class="header__icon-bars-container-close">
                            <i class="fas fa-times header__icon-bars-container-close-icon"></i>
                        </div>
                        <div class="header__icon-bars-container-logo">
                            <img src="./assets/img/logo-sidearea.png" alt="logosidebar"
                                class="header__icon-bars-container-logo-img">
                        </div>
                        <div class="login-root">
                            <div class="box-root flex-flex flex-direction--column"
                                style="min-height: 100vh;flex-grow: 1;">
                                <div class="loginbackground box-background--white padding-top--64">
                                    <div class="loginbackground-gridContainer">
                                        <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                                            <div class="box-root"
                                                style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                                            </div>
                                        </div>
                                        <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                                            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s"
                                                style="flex-grow: 1;"></div>
                                        </div>
                                        <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                                            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                                        </div>
                                        <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                                            <div class="box-root box-background--blue animationLeftRight"
                                                style="flex-grow: 1;"></div>
                                        </div>
                                        <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                                            <div class="box-root box-background--gray100 animationLeftRight tans3s"
                                                style="flex-grow: 1;"></div>
                                        </div>
                                        <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                                            <div class="box-root box-background--cyan200 animationRightLeft tans4s"
                                                style="flex-grow: 1;"></div>
                                        </div>
                                        <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                                            <div class="box-root box-background--blue animationRightLeft"
                                                style="flex-grow: 1;"></div>
                                        </div>
                                        <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                                            <div class="box-root box-background--gray100 animationRightLeft tans4s"
                                                style="flex-grow: 1;"></div>
                                        </div>
                                        <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                                            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s"
                                                style="flex-grow: 1;"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                        $nameErr = $emailErr = $genderErr = $sdtErr = "";
                                        $name = $email = $sdt = "";
                                        
                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        if (empty($_POST["name"])) {
                                            $nameErr = "Name is required";
                                        } else {
                                            $name = test_input($_POST["name"]);
                                        }
                                        
                                        if (empty($_POST["email"])) {
                                            $emailErr = "Email is required";
                                        } else {
                                            $email = test_input($_POST["email"]);
                                        }
                                            
                                        if (empty($_POST["sdt"])) {
                                            $sdt = "SDT is required";
                                        } else {
                                            $sdtErr = test_input($_POST["sdt"]);
                                        }
                                        
                                        }
                                    
                                        function test_input($data) {
                                        $data = trim($data);
                                        $data = stripslashes($data);
                                        $data = htmlspecialchars($data);
                                        return $data;
                                        }
                                    ?>
                                <div class="box-root padding-top--24 flex-flex flex-direction--column"
                                    style="flex-grow: 1; z-index: 9;">
                                    <div
                                        class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                                        <!-- <h1><a href="http://blog.stackfindover.com/" rel="dofollow">Stackfindover</a> -->
                                        </h1>
                                    </div>
                                    <div class="formbg-outer_register">
                                        <div class="formbg">
                                            <div class="formbg-inner padding-horizontal--48">
                                                <span class="padding-bottom--15">Đăng ký thành viên</span>
                                                <form id="stripe-register">
                                                    <div class="field padding-bottom--24">
                                                        <label style="text-align: left;" for="name">Họ tên</label>
                                                        <input type="text" name="name">
                                                        <span class="error"></span>
                                                    </div>
                                                    <div class="field padding-bottom--24">
                                                        <div class="grid--50-50">
                                                            <label style="text-align: left;" for="email">Email</label>
                                                        </div>
                                                        <input type="email" name="email">
                                                        <span class="error"></span>
                                                    </div>
                                                    <div class="field padding-bottom--24">
                                                        <div class="grid--50-50">
                                                            <label style="text-align: left;" for="sdt">Số điện
                                                                thoại</label>
                                                        </div>
                                                        <input type="number" name="sdt">
                                                        <span class="error"></span>
                                                    </div>
                                                    <div class="field padding-bottom--24">
                                                        <div class="grid--50-50">
                                                            <label style="text-align: left;" for="khoa">Khoa</label>
                                                        </div>
                                                        <select name="khoa" id="">
                                                            <option value="1">Công Nghệ Thông Tin</option>
                                                            <option value="2">Khoa Học Máy Tính</option>
                                                            <option value="3">Kĩ Thuật Phần Mềm</option>
                                                        </select>
                                                    </div>
                                                    <div class="field padding-bottom--24">
                                                        <div class="grid--50-50">
                                                            <label style="text-align: left;" for="ban">Ban mong
                                                                muốn</label>
                                                        </div>
                                                        <select name="ban" id="">
                                                            <option value="1">Ban Truyền Thông</option>
                                                            <option value="2">Ban Sự Kiện</option>
                                                            <option value="3">ban Kĩ Thuật</option>
                                                        </select>
                                                    </div>
                                                    <div class="field padding-bottom--24">
                                                        <div class="grid--50-50">
                                                            <label style="text-align: left;" for="note">Note</label>
                                                        </div>
                                                        <textarea name="note" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                    <div class="field field-register padding-bottom--24">
                                                        <button type="submit" name="submit">Đăng kí</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formbg-outer_review">
                                        <div class="formbg">
                                            <div class="formbg-inner padding-horizontal--48">
                                                <span class="padding-bottom--15">Gửi đánh giá</span>
                                                <form id="stripe-review" method="post" action="send_review.php">
                                                    <div class="field padding-bottom--24">
                                                        <label style="text-align: left;" for="name1">Họ tên</label>
                                                        <input type="text" name="name1">
                                                        <span class="error"></span>
                                                    </div>
                                                    <div class="field padding-bottom--24">
                                                        <label style="text-align: left;" for="review1">Nhận xét</label>
                                                        <textarea name="review1" rows="5" cols="0"></textarea>
                                                        <span class="error"></span>
                                                    </div>
                                                    <div class="field padding-bottom--24">
                                                        <label style="text-align: left;" for="quality1">Chất lượng</label>
                                                        <select name="quality1">
                                                            <option value="1">1 sao</option>
                                                            <option value="2">2 sao</option>
                                                            <option value="3">3 sao</option>
                                                            <option value="4">4 sao</option>
                                                            <option value="5">5 sao</option>
                                                        </select>
                                                        <span class="error"></span>
                                                    </div>
                                                    <div class="field field-register padding-bottom--24">
                                                        <button type="submit" name="submit1">Gửi đánh giá</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>

        <div class="content">
            <div id="container__họme" class="content__container-background">
                <div class="content__container-background-icon-left">
                    <i class="fas fa-chevron-left content__container-background-icon"></i>
                </div>
                <div class="content__container-background-icon-right">
                    <i class="fas fa-chevron-right content__container-background-icon"></i>
                </div>
                <div class="content__background1">
                    <div class="content__background-titles">
                        HAUI
                    </div>
                    <h1 class="content__background-main">
                        IT SUPPORTER
                    </h1>
                    <div class="content__background-footer">
                        Câu lạc bộ HTKT IT Supporter HaUI là một tổ chức hoạt động
                        vì cộng đồng nhằm hỗ trợ xử lý các sự cố liên quan đến các hệ thống máy tính,
                        hệ thống mạng cho các tổ chức và mọi người,
                        là đội trực thuộc LCĐ -LCH Sinh viên khoa CNTT- Đại học Công nghiệp Hà Nội.
                    </div>
                    <div class="content__background1-text">
                    </div>
                </div>
                <div class="content__background2">
                    <div class="content__background2-text">
                        <div class="content__background-titles">
                            HAUI
                        </div>
                        <h1 class="content__background-main">
                            IT SUPPORTER
                        </h1>
                        <div class="content__background-footer">
                            Gắn với nhiệm vụ hỗ trợ và phát triển các kỹ năng liên quan đến công nghệ,
                            tạo một môi trường để giao lưu, gắn kết các bạn sinh viên lại với nhau,
                            IT Supporter được tổ chức cơ cấu gồm 3 ban hoạt động:
                            <br>
                            💻 Ban kỹ thuật: Ban đầu não, đại diện cho chuyên môn mà Đội theo đuổi.
                            Có vai trò lên ý tưởng và xây dựng nội dung, đảm bảo chất lượng chuyên môn cho các sự kiện
                            tổ chức
                            <br>
                            👩‍🏫 Ban sự kiện: Nhiệm vụ xây dựng kế hoạch và thực hiện, điều phối,
                            đảm bảo cho các hoạt động trước, trong và sau sự kiện diễn ra trơn tru, thuận lợi và thành
                            công nhất.
                            <br>
                            🎥Ban truyền thông: Thực hiện các hoạt động tăng độ nhận diện và thu hút sự quan tâm từ cộng
                            đồng sinh viên,
                            nâng tầm thương hiệu của Đội và các sự kiện thông qua những ấn phẩm truyền thông trên
                            fanpage Đội và trên nhiều nền tảng khác.
                        </div>
                    </div>
                </div>
            </div>


            <div id="container__event" class="content__main">
                <div class="content__main-text">
                    Tin tức
                </div>
                <?php
                    $sql = "SELECT * FROM news LIMIT 4";
                    $result = $connection->query($sql);
                    while($data = mysqli_fetch_all($result, MYSQLI_ASSOC))
                    {
                        for($i = 0; $i< count($data); $i++)
                        {
                            echo 
                            '
                            <div class="content__main-event" >   
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
                ?>
            </div>
            <?php
            $sql = "SELECT * FROM news";
            $result = $connection->query($sql);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $num_of_occurs = 0;
            if (count($data) % 4 == 0) $num_of_occurs = floor(count($data) / 4) - 1;
            else $num_of_occurs = floor(count($data) / 4);
            ?>
            <form class='content__main-button' method='POST'>
                <button type='submit' class="content__main-button-load-more">Load more</button>
            </form>

            <div id="container__review" class="content__review">
                <div class="content__review-titles">
                    Những đánh giá hàng đầu
                </div>
                <div class="content__review-main">
                    Các đánh giá của một vài khách hàng đã sử dụng dịch vụ của CLB IT SUPPORTER về chất lượng dịch vụ.
                </div>
                <div class="review__container">
                    <div class="grid wide">
                        <div class="row">
                            <ul class="col l-4 content__review-list">
                                <li class="content__review-main-list-items">
                                    <div class="content__review-main-list-items-left">
                                        <img src="./assets/img/nguoi1.jpg" alt="nguoi1"
                                            class="content__review-main-list-items-left-img">
                                    </div>
                                    <div class="content__review-main-list-items-right">
                                        <div class="content__review-main-list-items-right-live">
                                            Việt Nam
                                        </div>
                                        <div class="content__review-main-list-items-right-rating">
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                        </div>
                                        <div class="content__review-main-list-items-right-cmt">
                                            Dịch vụ rất tốt. Các bạn trong clb rất năng nổ, nhiệt huyết
                                        </div>
                                        <div class="content__review-main-list-items-right-name">
                                            Nguyễn Thế Hoàng
                                        </div>
                                    </div>
                                </li>
                            </ul>
                             
                                        <?php
                                            $sql = "SELECT * FROM review LIMIT 20";
                                            $result = $connection->query($sql);
                                            while($data = mysqli_fetch_all($result, MYSQLI_ASSOC))
                                            {
                                                for($i = 0; $i< count($data); $i++)
                                                {
                                                    $x = (int)$data[$i]['StarNumber'];
                                                    $randomValue = rand(1, 9);
                                                    echo 
                                                    '
                                                    <ul class="col l-4 content__review-list">
                                                    <li class="content__review-main-list-items">
                                                        <div class="content__review-main-list-items-left">
                                                            <img src="./assets/img/nguoi'.$randomValue.'.jpg" alt="nguoi'.$randomValue.'"
                                                                class="content__review-main-list-items-left-img">
                                                        </div>
                                                        <div class="content__review-main-list-items-right">
                                                            <div class="content__review-main-list-items-right-live">
                                                                Việt Nam
                                                            </div>
                                                                <div class="content__review-main-list-items-right-rating">
                                                    ';
                                                    for ($i1 = 1; $i1 <= $x; $i1++)
                                                    echo 
                                                    '
                                                            <i
                                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                                    ';
                                                    echo 
                                                    '
                                                        </div>
                                                    ';
                                                    echo 
                                                    '
                                                        <div class="content__review-main-list-items-right-cmt">
                                                            '.$data[$i]['Content'].'
                                                        </div>
                                                        <div class="content__review-main-list-items-right-name">
                                                            '.$data[$i]['Name'].'  
                                                        </div>
                                                        </div>
                                                        </li>
                                                    </ul>
                                                    ';                        
                                                }
                                            } 
                                        ?>
                                    
                            <!--<ul class="col l-4 content__review-list">
                                <li class="content__review-main-list-items">
                                    <div class="content__review-main-list-items-left">
                                        <img src="./assets/img/nguoi3.jpg" alt="nguoi3"
                                            class="content__review-main-list-items-left-img">
                                    </div>
                                    <div class="content__review-main-list-items-right">
                                        <div class="content__review-main-list-items-right-live">
                                            Việt Nam
                                        </div>
                                        <div class="content__review-main-list-items-right-rating">
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                        </div>
                                        <div class="content__review-main-list-items-right-cmt">
                                            Một trong những dịch vụ sửa chữa tốt nhất mình từng sử dụng
                                        </div>
                                        <div class="content__review-main-list-items-right-name">
                                            Khoa Chiến
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="col l-4 content__review-list">
                                <li class="content__review-main-list-items">
                                    <div class="content__review-main-list-items-left">
                                        <img src="./assets/img/nguoi4.jpg" alt="nguoi4"
                                            class="content__review-main-list-items-left-img">
                                    </div>
                                    <div class="content__review-main-list-items-right">
                                        <div class="content__review-main-list-items-right-live">
                                            Việt Nam
                                        </div>
                                        <div class="content__review-main-list-items-right-rating">
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                        </div>
                                        <div class="content__review-main-list-items-right-cmt">
                                            Dịch vụ rất tốt mà còn không mất phí
                                        </div>
                                        <div class="content__review-main-list-items-right-name">
                                            Nguyễn Mạnh Cường
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="col l-4 content__review-list">
                                <li class="content__review-main-list-items">
                                    <div class="content__review-main-list-items-left">
                                        <img src="./assets/img/nguoi5.jpg" alt="nguoi5"
                                            class="content__review-main-list-items-left-img">
                                    </div>
                                    <div class="content__review-main-list-items-right">
                                        <div class="content__review-main-list-items-right-live">
                                            Việt Nam
                                        </div>
                                        <div class="content__review-main-list-items-right-rating">
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                        </div>
                                        <div class="content__review-main-list-items-right-cmt">
                                            Khách ruột của CLB từ lâu lắm rồi. Bất kể máy có vấn đề gì tôi cũng đều mang
                                            tới đây để kiểm tra.
                                        </div>
                                        <div class="content__review-main-list-items-right-name">
                                            Trần Lệ Quyên
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="col l-4 content__review-list">
                                <li class="content__review-main-list-items">
                                    <div class="content__review-main-list-items-left">
                                        <img src="./assets/img/nguoi6.jpg" alt="nguoi5"
                                            class="content__review-main-list-items-left-img">
                                    </div>
                                    <div class="content__review-main-list-items-right">
                                        <div class="content__review-main-list-items-right-live">
                                            Việt Nam
                                        </div>
                                        <div class="content__review-main-list-items-right-rating">
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                        </div>
                                        <div class="content__review-main-list-items-right-cmt">
                                            Tôi muốn cảm ơn tới các bạn kỹ thuật viên ở CLB. Bạn rất lịch sự cùng với
                                            thái độ chuyên nghiệp
                                        </div>
                                        <div class="content__review-main-list-items-right-name">
                                            Ánh Dung
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="col l-4 content__review-list">
                                <li class="content__review-main-list-items">
                                    <div class="content__review-main-list-items-left">
                                        <img src="./assets/img/nguoi7.jpg" alt="nguoi7"
                                            class="content__review-main-list-items-left-img">
                                    </div>
                                    <div class="content__review-main-list-items-right">
                                        <div class="content__review-main-list-items-right-live">
                                            Việt Nam
                                        </div>
                                        <div class="content__review-main-list-items-right-rating">
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                        </div>
                                        <div class="content__review-main-list-items-right-cmt">
                                            Lấy máy về cái là phải online để cảm ơn CLB luôn. Cảm ơn các bạn vì đã rất
                                            nhiệt tình giúp mình.
                                        </div>
                                        <div class="content__review-main-list-items-right-name">
                                            Phạm Văn Dũng
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="col l-4 content__review-list">
                                <li class="content__review-main-list-items">
                                    <div class="content__review-main-list-items-left">
                                        <img src="./assets/img/nguoi8.jpg" alt="nguoi8"
                                            class="content__review-main-list-items-left-img">
                                    </div>
                                    <div class="content__review-main-list-items-right">
                                        <div class="content__review-main-list-items-right-live">
                                            Việt Nam
                                        </div>
                                        <div class="content__review-main-list-items-right-rating">
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                        </div>
                                        <div class="content__review-main-list-items-right-cmt">
                                            Nay mình thay màn hình. Anh trong câu lạc bộ tận tình dã man luôn, rất cảm
                                            ơn CLB
                                        </div>
                                        <div class="content__review-main-list-items-right-name">
                                            Hoàng Gia Bảo
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="col l-4 content__review-list">
                                <li class="content__review-main-list-items">
                                    <div class="content__review-main-list-items-left">
                                        <img src="./assets/img/nguoi9.jpg" alt="nguoi9"
                                            class="content__review-main-list-items-left-img">
                                    </div>
                                    <div class="content__review-main-list-items-right">
                                        <div class="content__review-main-list-items-right-live">
                                            Việt Nam
                                        </div>
                                        <div class="content__review-main-list-items-right-rating">
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                            <i
                                                class="fas fa-star content__review-main-list-items-right-rating-icon"></i>
                                        </div>
                                        <div class="content__review-main-list-items-right-cmt">
                                            Nay mình đến sửa laptop ở cơ sở 2 thật sự rất là ưng. Từ trình độ chuyên môn
                                            đến thái độ phục vụ.
                                        </div>
                                        <div class="content__review-main-list-items-right-name">
                                            Thảo Tâm
                                        </div>
                                    </div>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>

                <ul class="content__review-list">
                    <li class="content__review-list-items">
                        <i class="fas fa-circle content__review-list-items-icon"></i>
                    </li>
                    <li class="content__review-list-items">
                        <i class="fas fa-circle content__review-list-items-icon"></i>
                    </li>
                    <li class="content__review-list-items">
                        <i class="fas fa-circle content__review-list-items-icon"></i>
                    </li>
                </ul>
            </div>

            <div id="container__help" class="container__form">
                <div class="content__main-text">
                    Hỗ trợ sửa chữa
                </div>
                <form method="POST" class="repair">
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" name="name" required>
                            <div class="underline"></div>
                            <label for="name">Họ và tên </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" name="sdt" required>
                            <div class="underline"></div>
                            <label for="sdt">Số điện thoại</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" name='status' required>
                            <div class="underline"></div>
                            <label for="">Tình trạng</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                            <textarea rows="8" cols="40" name='describe'></textarea>
                            <br />
                            <div class="underline"></div>
                            <label for="">Mô tả vấn đề</label>
                            <br />
                            <button type='submit'>Gửi</button>
                        </div>
                    </div>
                </form>
            </div>

            <footer class="footer">
                <div class="grid wide">
                    <div class="row footer__container">
                        <div class="col l-3 footer__items">
                            <div class="footer__items-container">

                                <img src="./assets/img/logo.png" alt="footer" class="footer__items-background">
                                <div class="footer__items-text">
                                    Tự hòa CLB IT SUPPORTER
                                </div>
                                <div class="footer__items-info">
                                    <div class="footer__items-info-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="footer__items-info-text">
                                        anhkho881@gmail.com
                                    </div>
                                </div>
                                <div class="footer__items-info">
                                    <div class="footer__items-info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="footer__items-info-text">
                                        0869370492
                                    </div>
                                </div>
                                <div class="footer__items-info">
                                    <div class="footer__items-info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="footer__items-info-text">
                                        Nam Từ Liêm, Hà Nội, Việt Nam
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 footer__items">
                            <div class="footer__items-container">

                                <div class="footer__items-titles">
                                    Các bài đăng gần đây
                                </div>
                                <?php
                                    $sql = "SELECT * FROM news ORDER BY create_at DESC LIMIT 3";
                                    $result = $connection->query($sql);
                                    $currentDate = date('Y-m-d');   
                                    while($data = mysqli_fetch_all($result, MYSQLI_ASSOC))
                                    {
                                        for($i = 0; $i< count($data); $i++)
                                        {
                                            $difference = strtotime($currentDate) - strtotime(date("Y-m-d", strtotime($data[$i]['create_at'])));
                                            $days = abs($difference/(60*60)/24);
                                            $month =  floor($days/30);
                                            $years = floor($month/12);
                                            echo "<div class='footer__items-general-text'>
                                            ".$data[$i]['title']."
                                        </div>
                                        <div class='footer__items-general-text2'>
                                            ".date("d", strtotime($data[$i]['create_at']))." Tháng ".date("m", strtotime($data[$i]['create_at']))." Năm ".date("Y", strtotime($data[$i]['create_at']))."
                                        </div>";
                                        }
                                    }
                                 ?>
                            </div>
                        </div>
                        <div class="col l-3 footer__items">
                            <div class="footer__items-container">

                                <div class="footer__items-titles">
                                    Đăng ký Email
                                </div>
                                <div class="footer__items-general-text">
                                    Đăng ký để nhận được những tin tức mới nhất về câu lạc bộ
                                </div>
                                <div class="footer__items-inputs">
                                    <div class="footer__items-inputs-icon">
                                        <i class="fas fa-user-alt footer__items-inputs-icon-img"></i>
                                    </div>
                                    <input type="text" placeholder="Tên" class="footer__items-input">
                                </div>
                                <div class="footer__items-inputs">
                                    <div class="footer__items-inputs-icon">
                                        <i class="far fa-envelope footer__items-inputs-icon-img"></i>
                                    </div>
                                    <input type="text" placeholder="Email" class="footer__items-input">
                                </div>
                                <div class="footer__items-btn">
                                    Đăng ký
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 footer__items">
                            <div class="footer__items-container">

                                <div class="footer__items-titles">
                                    Facebook
                                </div>
                                <div class="footer__items-general-text">
                                    https://www.facebook.com/vudinhdung
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
       
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./assets/js/script.js"></script>
        <script>

            $(document).ready(function () {
                $('#stripe-register').submit(function (e) {
                    e.preventDefault();
                    const fields = e.target.querySelectorAll('.field');
                    var isError = false;
                    fields.forEach(field => {
                        const input = field.querySelector('input');
                        const span = field.querySelector('.error');
                        if (span) span.innerText = "";
                        if (input) {
                            if (input.value == "") {
                                isError = true;
                                if (span)
                                    span.innerText = "Vui lòng nhập trường này!";
                            }
                        }
                    })
                    if (!isError) {
                        var form = $(this);
                        var formData = form.serialize();
                        $.ajax({
                            method: "POST",
                            type: form.attr('method'),
                            url: "get_data.php",
                            data: formData,
                            success: function (response) {
                                console.log(response);
                            }
                        });
                        alert("Bạn đã gửi đơn đăng kí thành công");
                    }
                    fields.forEach(field => {
                        const input = field.querySelector('input');
                        if (input)
                            input.value == "";
                    })

                });

            })
            $(document).ready(function () {
                $('.repair').submit(function (e) {
                    e.preventDefault();
                    var form = $(this);
                    var formData = form.serialize();
                    console.log(formData);
                    $.ajax({
                        method: "POST",
                        type: form.attr('method'),
                        url: "get_data.php",
                        data: formData,
                        success: function (response) {
                            alert("Gửi đơn sửa chữa thành công");
                        }
                    });
                })
               
            })
        </script>

        <?php 
            echo "
            <script>
                var count = 4;
                $(document).ready(function() {
                    let form_main_button = document.querySelector('.content__main-button');
                    console.log(form_main_button);
                    form_main_button.addEventListener('submit', function(e) {
                        e.preventDefault();
                        var formData = {};
                        count += 4;
                        formData['counter'] = count;
                        $.ajax({
                            method: 'POST',
                            url: 'get_data.php',
                            data: formData,
                            success: function(response) {
                                $('.content__main').html(response);
                            }
                        });
                    })

                let num_of_click_btn = 0;
                let btn_load_more = document.querySelector('.content__main-button-load-more');
                btn_load_more.addEventListener('click', e => {
                    num_of_click_btn = num_of_click_btn + 1;
                    if (num_of_click_btn == $num_of_occurs) {
                        console.log('true');
                        form_main_button.setAttribute('style', 'display: none !important');
                    }  
                })
                </script>
                "
        ?>
</body>

</html>