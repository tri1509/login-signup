<?php get_header() ?>
<?php
if(isset($_POST['btn_add'])) {
  $error = array();
  $alert = array();
  // kiểm tra fullname
  if(empty($_POST['fullname'])) {
    $error['fullname'] = "Không được để trống họ và tên";
  }else{
    $fullname = $_POST['fullname'];
  }
  // kiểm tra giới tính
  if(empty($_POST['gender'])) {
    $error['gender'] = "Không được để trống giới tính";
  }else{
    $gender = $_POST['gender'];
  }
  // kiểm tra username
  if(empty($_POST['username'])) {
    $error['username'] = "Không được để trống tên đăng nhập";
  }else{
    $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
    if(!preg_match($pattern,$_POST['username'])){
      $error['username'] = "Tên đăng nhập không đúng định dạng";
    }else{
      $username = $_POST['username'];
    }
  }
 // kiểm tra password
  if(empty($_POST['password'])) {
    $error['password'] = "Không được để trống mật khẩu";
  }else{
    $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
    if(!preg_match($pattern,$_POST['password'])){
      $error['password'] = "Mật khẩu không đúng định dạng";
    }else{
      $password = md5($_POST['password']);
    }
  }
  // kiểm tra email
  if(empty($_POST['email'])) {
    $error['email'] = "Không được để trống email";
  }else{
    $pattern = '/^[A-Za-z0-9_.]{2,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/';
    if(!preg_match($pattern,$_POST['email'])){
      $error['email'] = "email không đúng định dạng";
    }else{
      $email = $_POST['email'];
    }
  }
// kết luận
  if(empty($error)){
    $sql = "INSERT INTO tbl_user(fullname,email,password,username,gender) VALUE('$fullname','$email','$password','$username','$gender')";
    if(mysqli_query($conn,$sql)){
      $alert['success'] ="<p class='alert-success'>Đăng ký thành công !</p>";
    }
  }
  // show_array($_POST);
}

?>
<div id="main-content-wp" class="checkout-page ">
  <div class="wp-inner clearfix">
    <?php get_sidebar(); ?>
    <div id="content" class="fl-right">
      <div class="section" id="checkout-wp">
        <div class="section-head">
          <h3 class="section-title">Đăng ký</h3>
          <?php
            if(!empty($alert['success'])) {
              echo $alert['success'];
            }else{
              echo "<div class='clear20'></div>";
            }
          ?>
        </div>
        <div class="section-detail">
          <div class="wrap clearfix">
            <form method="POST" action="">
              <div id="custom-info-wp" class="fl-left">
                <h3 class="title">Thông tin khách hàng</h3>
                <div class="detail">
                  <div class="field-wp">
                    <label>Họ tên</label>
                    <input type="text" name="fullname" id="fullname"
                      value="<?php if(!empty($fullname)){echo $fullname;}?>">
                    <span style="color:red;font-size:12px">
                      <?php
                        if(!empty($error['fullname'])) {
                          echo $error['fullname'];
                        }
                      ?>
                    </span>
                  </div>
                  <div class="field-wp">
                    <label>Tên đăng nhập</label>
                    <input type="text" name="username" id="username"
                      value="<?php if(!empty($username)){echo $username;}?>">
                    <span style="color:red;font-size:12px">
                      <?php
                        if(!empty($error['username'])) {
                          echo $error['username'];
                        }
                      ?>
                    </span>
                  </div>
                  <div class="field-wp">
                    <label>Email</label>
                    <input type="email" name="email" id="email" value="<?php if(!empty($email)){echo $email;}?>">
                    <span style="color:red;font-size:12px">
                      <?php
                        if(!empty($error['email'])) {
                          echo $error['email'];
                        }
                      ?>
                    </span>
                  </div>
                  <div class="field-wp">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" id="password">
                    <div class="toggle-pass" onclick="togglePass()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="eye eye-open" id="open">
                        <path
                          d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="eye eye-close" id="close">
                        <path
                          d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c5.2-11.8 8-24.8 8-38.5c0-53-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zm223.1 298L373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5z" />
                      </svg>
                    </div>
                    <span style="color:red;font-size:12px">
                      <?php
                        if(!empty($error['password'])) {
                          echo $error['password'];
                        }
                      ?>
                    </span>
                  </div>
                  <div class="field-wp">
                    <label>Giới tính</label><br>
                    <select name="gender" class="select_gender">
                      <option value="">-----chọn giới tính-------</option>
                      <option <?php if(!empty($gender) && $gender == 'boy') {echo "selected"; }?> value="boy">Nam
                      </option>
                      <option <?php if(!empty($gender) && $gender == 'girl') {echo "selected"; }?> value="girl">Nữ
                      </option>
                      <option <?php if(!empty($gender) && $gender == 'bede') {echo "selected"; }?> value="bede">3D
                      </option>
                    </select><br>
                    <span style="color:red;font-size:12px">
                      <?php
                        if(!empty($error['gender'])) {
                          echo $error['gender'];
                        }
                      ?>
                    </span>
                  </div>
                  <div class="place-order-wp clearfix">
                    <input type="submit" name="btn_add" value="Đăng ký" class="btn btn-primary">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>