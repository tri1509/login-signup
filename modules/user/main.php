<?php get_header('post'); ?>
<?php
  $sql = "SELECT * FROM `tbl_user`"; 
  $result = mysqli_query($conn,$sql);
  $list_user = array();
  $num_rows = mysqli_num_rows($result);
  if ($num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $list_user[] = $row;
    }
  }

  // show_array($list_user);
?>
<div id="main-content-wp" class="detail-news-page">
  <div class="wp-inner clearfix">
    <?php get_sidebar(); ?>
    <div id="content" class="fl-right">
      <div class="section" id="detail-news-wp">
        <div class="section-head">
          <h3 class="section-title">Danh sách thành viên</h3>
          <a href="?mod=user&act=add">Thêm thành viên</a>
        </div>
        <div class="section-detail">
          <div class="content-news">
            <?php
              if($num_rows > 0){
            ?>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Họ và tên</th>
                  <th scope="col">Email</th>
                  <th scope="col">Tên đăng nhập</th>
                  <th scope="col">Giới tính</th>
                  <th scope="col">Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i = 0;
                  foreach ($list_user as $user) {
                    $i ++;
                    $user['url_update'] = "?mod=user&act=update&id={$user['id']}";
                    $user['url_delete'] = "?mod=user&act=delete&id={$user['id']}";
                ?>
                <tr>
                  <th scope="row"><?php echo $i ?></th>
                  <td><?php echo $user['fullname'] ?></td>
                  <td><?php echo $user['email'] ?></td>
                  <td><?php echo $user['username'] ?></td>
                  <td><?php echo $user['gender'] ?></td>
                  <td>
                    <a href="<?php echo $user['url_update'] ?>">Sửa</a>
                    <i>|</i>
                    <a href="<?php echo $user['url_delete'] ?>">Xoá</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <div class="alert alert-info" role="alert">
              có <?php echo $num_rows ?> thành viên trong hệ thống.
            </div>
            <?php }else{ ?>
            <div class="alert alert-danger" role="alert">
              Chưa có danh sách thành viên
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>