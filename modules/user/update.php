<?php get_header() ?>
<?php
$id = (int) $_GET['id'];
?>
<?php
if(isset($_POST['btn_edit'])) {
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
  // if(empty($_POST['password'])) {
  //   $error['password'] = "Không được để trống mật khẩu";
  // }else{
  //   $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
  //   if(!preg_match($pattern,$_POST['password'])){
  //     $error['password'] = "Mật khẩu không đúng định dạng";
  //   }else{
  //     $password = md5($_POST['password']);
  //   }
  // }
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
    // $sql = "UPDATE tbl_user SET 
    // fullname = '$fullname',
    // email = '$email',
    // gender = '$gender',
    // username = '$username' WHERE id = '$id'";
    // if(mysqli_query($conn,$sql)){
    //   $alert['success'] ="<p class='alert-success'>Sửa thành công !</p>";
    // }
    $data = array(
      'fullname' => $fullname,
      'email' => $email,
      'username' => $username,
      'gender' => $gender,
    );
    db_update('tbl_user',$data,"id=$id");
    $alert['success'] ="<p class='alert-success'>Sửa thành công !</p>";
  }
  // show_array($_POST);
}
// $sql = "SELECT * FROM tbl_user WHERE id='$id' ";
// $result = mysqli_query($conn,$sql);
// $item = mysqli_fetch_assoc($result);

$item = db_fetch_row("SELECT * FROM `tbl_user` WHERE id='$id' ");

?>
<div id="main-content-wp" class="checkout-page ">
  <div class="wp-inner clearfix">
    <?php get_sidebar(); ?>
    <div id="content" class="fl-right">
      <div class="section" id="checkout-wp">
        <div class="section-head">
          <h3 class="section-title">Hiệu chỉnh</h3>
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
                <h3 class="title">Chỉnh sửa thông tin</h3>
                <div class="detail">
                  <div class="field-wp">
                    <label>Họ tên</label>
                    <input type="text" name="fullname" id="fullname" value="<?php echo $item['fullname'] ?>">
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
                    <input type="text" name="username" id="username" value="<?php echo $item['username'] ?>">
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
                    <input type="email" name="email" id="email" value="<?php echo $item['email'] ?>">
                    <span style="color:red;font-size:12px">
                      <?php
                        if(!empty($error['email'])) {
                          echo $error['email'];
                        }
                      ?>
                    </span>
                  </div>
                  <div class="field-wp">
                    <label>Giới tính</label><br>
                    <select name="gender" class="select_gender">
                      <option value="">-----chọn giới tính-------</option>
                      <option <?php if($item['gender'] == 'boy') {echo "selected"; }?> value="boy">Nam
                      </option>
                      <option <?php if($item['gender'] == 'girl') {echo "selected"; }?> value="girl">Nữ
                      </option>
                      <option <?php if($item['gender'] == 'bede') {echo "selected"; }?> value="bede">3D
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
                    <input type="submit" name="btn_edit" value="cập nhật" class="btn btn-primary">
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