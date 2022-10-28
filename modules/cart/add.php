<?php
// Lấy được thông tin sản phẩm
  $id = (int) $_GET['id'];
  // Thêm thông tin vào giỏ hàng
  add_cart($id);
  
  redirect('?mod=cart&act=show');

?>