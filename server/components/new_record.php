<?php
    if(isset($_POST['new-id']) )
    {
        $newId = $_POST['new-id'];
        $recordType = $_POST['record-type'];
            echo "<script>
            var newId = $newId;
            var recordType = '$recordType';
        </script>";
    }
    if(isset($_POST['event-id']))
    {
        $eventId = $_POST['event-id'];
        $recordType = $_POST['record-type'];
            echo "<script>
            var eventId = $eventId;
            var recordType = '$recordType';
        </script>";
    }
       
?>
<div class="record-container">
    <h3 class='record-container_title'>
    </h3>
    <form class="record-content" enctype="multipart/form-data" method="POST">
        <input type="text" name='record-type' style="display:none;" value=''>
        <input type="text" name='record-id' style="display:none;" value=''>
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text"  name="title" value = '<?php if(isset($_POST['title-sent'])){ echo $_POST['title-sent'];}?>' required>   
        </div>
        <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea name="content" id="" cols="63" rows="10" required><?php if(isset($_POST['content-sent'])){echo $_POST['content-sent'];}?></textarea>
        </div>
        <div class="form-group">
            <label for="file">Thêm hình ảnh</label>
            <input type="file" name="file" value="" accept="image/png, image/gif, image/jpeg" />
        </div>
        <div id="uploadStatus"></div>
        <button type="submit" name="upload" style="cursor: pointer;">Tạo</button>
    </form>
</div>

<script>
  $(document).ready(function() {
  $('.record-content').on('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission
    
    var formData = new FormData(this); // Create a new form data object
    if(typeof newId !== 'undefined' && typeof recordType !== 'undefined')
    {
        formData.append('new-id', newId);
        formData.append('record-type', recordType);
    }
    if(typeof eventId !== 'undefined' && typeof recordType !== 'undefined')
    {
        formData.append('event-id', eventId);
        formData.append('record-type', recordType);
    }
    $.ajax({
      url: './components/get_data.php', // PHP script to handle the file upload
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      beforeSend: function() {

      },
      success: function(response) {
        console.log(response)
        document.querySelectorAll('.record-content input').forEach(item=>item.value=null)
        document.querySelector('.record-content textarea').value =  null;
          if(typeof newId !== 'undefined'  && typeof recordType !== 'undefined')
            {
                delete newId;
                delete recordType;
            }
            if(typeof eventId !== 'undefined'  && typeof recordType !== 'undefined')
            {
                delete eventId;
                delete recordType;
            }
        location.reload();   
      }
      
    });
    document.querySelector('.overlay-wrapper').style.display = "none";
         document.querySelector('.overlay-wrapper img').remove();
  });
});

</script>