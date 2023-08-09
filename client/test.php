<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="repair" method= "POST" >
                    <div class="form-row">
                        <div class="input-data">
                            <input type="text" name="name" >
                            <div class="underline"></div>
                            <label for="name">Họ và tên </label>
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input type="number" name='sdt'>
                            <div class="underline"></div>
                            <label for="sdt">Số điện thoại</label>
                        </div>
                        <div class="input-data">
                            <input type="text" name='status' >
                            <div class="underline"></div>
                            <label for="">Tình trạng</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                            <textarea rows="8" cols="40" name='describe' ></textarea>
                            <br />
                            <div class="underline"></div>
                            <label for="">Mô tả vấn đề</label>
                            <br />
                            <!-- <div class="form-row submit-btn">
                                <div class="input-data input-data--button">
                                    <div class="inner"></div> -->
                                    <!-- <input type="submit" value="Gửi"/> -->
                                    <button type='submit'>Gửi</button>
                                <!-- </div>
                            </div> -->
                        </div>
                    </div>
                </form>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                          $(document).ready(function()
        {
            console.log($('.repair'));
            $('.repair').submit(function(e){
                e.preventDefault(); 
                var form = $(this);
                var formData = form.serialize(); 
                console.log(e.target);
                $.ajax({
                    method:"POST",
                    type: form.attr('method'),
                    url: "get_data.php", 
                    data: formData,
                    success: function(response) {
                        console.log(response);
                    }
                });
        })
        })
                </script>
</body>
</html>