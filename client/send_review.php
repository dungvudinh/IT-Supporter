 <!-- send review -->
 <?php
    include "connection.php";
    if(isset($_POST['submit1']))
      {
          if($_POST['name1'] != "" && $_POST['review1'] !="" && $_POST['quality1'] !="")
          {
              $name1 = $_POST['name1'];
              $review1= $_POST['review1'];
              $quality1 = $_POST['quality1'];
              $sql = "INSERT INTO `review` (`id`, `Name`, `Content`, `StarNumber`) VALUES (NULL, '$name1', '$review1', $quality1)";
              if (mysqli_query($connection, $sql))
              {
                  echo '<script>alert("Bạn đã gửi nhận xét thành công!");</script>';
              }
              else
              {
                  echo '<script>alert("Bạn đã gửi nhận xét không thành công!");</script>';
              }
          }
      }
      header("Location: index.php");
      exit();      
?>