<?php
get_header();
?>
<?php 
if(isset($_POST['btn_login'])) {
  $error = array();
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
      $password = $_POST['password'];
    }
  }
// kết luận
  if(empty($error)){
    // xử lý login
    if(check_login($username, $password)){
      // Lưu trữ phiên đăng nhập
      $_SESSION['is_login'] = true;
      $_SESSION['user_login'] = $username;

      // cookie
      if(isset($_POST['remember_me'])){
        $_COOKIE['is_login'] = true;
        $_COOKIE['user_login'] = $username;
      }
      
      // chuyển hướng vào trong hệ thống
      redirect("?page=home");
    }else{
      $error['account'] = "Tên đăng nhập hoặc mật khẩu không đúng";
    }
  }
}
?>
<link rel="stylesheet" href="./public/login.css" />
<div class="site-wrap d-md-flex align-items-stretch">
  <div class="bg-img" style="background-image: url('images/img-bg-1.jpg')"></div>
  <div class="form-wrap">
    <div class="form-inner">
      <h1 class="title">Đăng nhập</h1>
      <form id="form-login" action="" class="pt-3" method="post">
        <div class="form-floating">
          <input type="text" class="form-control" name="username" id="username" placeholder="info@example.com"
            value="<?php if(!empty($username)){echo $username;}?>" />
          <label for="username">Tên đăng nhập</label>
          <span style="color:red;font-size:12px">
            <?php
              if(!empty($error['username'])) {
                echo $error['username'];
              }
            ?>
          </span>
        </div>

        <div class="form-floating">
          <span class="password-show-toggle js-password-show-toggle"><span class="uil"></span></span>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
          <label for="password">Password</label>
          <span style="color:red;font-size:12px">
            <?php
              if(!empty($error['password'])) {
                echo $error['password'];
              }
            ?>
          </span>
        </div>

        <div class="d-flex justify-content-between">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember_me" />
            <label for="remember" class="form-check-label">Ghi nhớ mập khẩu</label>
          </div>
          <div><a href="#">Quên mật khẩu ?</a></div>
        </div>

        <div class="d-grid mb-4">
          <input type="submit" class="btn btn-primary" value="Đăng nhập" name="btn_login" id="btn_login">
          <span style="color:red;font-size:12px;margin-top:20px; text-align:center;">
            <?php
              if(!empty($error['account'])) {
                echo $error['account'];
              }
            ?>
          </span>
        </div>
        <div class="mb-2">
          Bạn chưa có tài khoản? <a href="signup.html">Đăng ký</a>
        </div>
        <div class="social-account-wrap">
          <h4 class="mb-4"><span>or continue with</span></h4>
          <ul class="list-unstyled social-account d-flex justify-content-between">
            <li>
              <a href="#"><img src="images/icon-google.svg" alt="Google logo" /></a>
            </li>
            <li>
              <a href="#"><img src="images/icon-facebook.svg" alt="Facebook logo" /></a>
            </li>
            <li>
              <a href="#"><img src="images/icon-apple.svg" alt="Apple logo" /></a>
            </li>
            <li>
              <a href="#"><img src="images/icon-twitter.svg" alt="Twitter logo" /></a>
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
get_footer();
?>