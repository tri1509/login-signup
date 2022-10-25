<div id="sidebar" class="fl-left">
  <div id="main-menu-wp">
    <ul class="list-item">
      <li class="active">
        <a href="?" title="Trang chủ">Trang chủ</a>
      </li>
      <li>
        <a href="?mod=post&act=main&id=1" title="Giới thiệu">Giới thiệu</a>
      </li>
      <li>
        <a href="?mod=product&act=main&cat_id=1" title="">Laptop</a>
      </li>
      <li>
        <a href="?mod=product&act=main&cat_id=2" title="">Điện thoại</a>
      </li>
      <li>
        <a href="?mod=product&act=main&cat_id=3" title="">Máy tính bảng</a>
      </li>
      <li>
        <a href="?mod=post&act=main&id=1" title="Liên hệ">Liên hệ</a>
      </li>
      <?php if(is_login()){ ?>
      <li>
        <a href="?mod=logout&act=logout" title="Liên hệ">Đăng xuất</a>
      </li>
      <?php }else{ ?>
      <li>
        <a href="?mod=login&act=login" title="Liên hệ">Đăng nhập</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>