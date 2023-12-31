<div class="news-container">
    <h3 class='record-container_title'>
        Thông báo mới
    </h3>
    <form class="record-content" enctype="multipart/form-data" method="POST">
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" placeholder="Nhập tiêu  đề..." name="title">
        </div>
        <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea name="content" id="" cols="63" rows="10"></textarea>
        </div>
       
        <div class="form-group">
            <label for="file">Thêm hình ảnh</label>
            <input type="file" name="file" value="" accept="image/png, image/gif, image/jpeg"/>
        </div>
        <div id="uploadStatus"></div>
        <button type="submit" name="upload">Tạo</button>
    </form>
</div>

<script>
  $(document).ready(function() {
  $('.record-content').on('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission

    var formData = new FormData(this); // Create a new form data object
    $.ajax({
      url: './components/get_data.php', // PHP script to handle the file upload
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      beforeSend: function() {
       
      },
      success: function(response) {
        document.querySelectorAll('.record-content input').forEach(item=>item.value=null)
        document.querySelector('.record-content textarea').value =  null;
      }
    });
  });
});

</script>