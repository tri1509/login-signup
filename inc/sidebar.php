<div id="sidebar" class="fl-left">
  <div id="main-menu-wp">
    <ul class="list-item">
      <li class="active">
        <a href="?" title="Trang chủ">Trang chủ</a>
      </li>
      <li>
        <a href="?mod=page&act=detail&id=1" title="Giới thiệu">Giới thiệu</a>
      </li>
      <li>
        <a href="?mod=page&act=detail&id=2" title="Liên hệ">Liên hệ</a>
      </li>
      <li>
        <a href="?mod=product&act=main&cat_id=1" title="">Điện thoại</a>
      </li>
      <li>
        <a href="?mod=product&act=main&cat_id=2" title="">Máy tính bảng</a>
      </li>
      <?php if(is_login()){ ?>
      <li>
        <a href="?mod=logout&act=logout" title="Đăng xuất" onclick="return confirm('Bạn có muốn đăng xuất không ?')">
          Đăng xuất
        </a>
      </li>
      <?php }else{ ?>
      <li>
        <a href="?mod=login&act=login" title="đăng nhập">Đăng nhập</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>