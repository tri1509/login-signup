<?php get_header('post'); ?>
<?php
  // $sql = "SELECT * FROM `tbl_user`"; 
  // $result = mysqli_query($conn,$sql);s
  // $list_user = array();
  // $num_rows = mysqli_num_rows($result);
  // if ($num_rows > 0) {
  //   while($row = mysqli_fetch_assoc($result)) {
  //     $list_user[] = $row;
  //   }
  // }
  $num_rows = db_num_rows("SELECT * FROM `tbl_user`");

  // số lượng bản ghi trên 1 trang
  $num_per_page = 6;
  $total_row = $num_rows;

  // tổng số trang
  $num_page = ceil($total_row/$num_per_page);
  $page = isset($_GET['page'])?(int)$_GET['page']:1;
  $start = ($page -1) * $num_per_page;
  $list_user = get_user($start,$num_per_page);

  // Nếu có điều kiện
  // $list_user = get_user($start,$num_per_page,"`gender`='boy' ");

  foreach ($list_user as &$user) {
  $user['url_update'] = "?mod=user&act=update&id={$user['id']}";
  $user['url_delete'] = "?mod=user&act=delete&id={$user['id']}";
  }
  unset($user);

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
                  <th scope="col">stt</th>
                  <th scope="col">ID</th>
                  <th scope="col">Họ và tên</th>
                  <th scope="col">Email</th>
                  <th scope="col">Tên đăng nhập</th>
                  <th scope="col">Giới tính</th>
                  <th scope="col">Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i = $start;
                  foreach ($list_user as $user) {
                    $i ++;
                ?>
                <tr>
                  <th scope="row"><?php echo $i ?></th>
                  <td><?php echo $user['id'] ?></td>
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
      <?php get_pagging($num_page, $page, "?mod=user&act=main");?>
    </div>
  </div>
</div>
<?php get_footer(); ?>