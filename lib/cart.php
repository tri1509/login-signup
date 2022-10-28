<?php

function add_cart($id) {
  global $list_product;
  $item = get_product_by_id($id);
  $qty = 1;
  if(isset($_SESSION['cart']) && array_key_exists($id,$_SESSION['cart']['buy'])){
    $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
  }

  $_SESSION['cart']['buy'][$id] = array(
    'id' => $item['id'],
    'url' => $item['url'],
    'product_title' => $item['product_title'],
    'price' => $item['price'],
    'code' => $item['code'],
    'product_desc' => $item['product_desc'],
    'product_thumb' => $item['product_thumb'],
    'qty' => $qty,
    'sub_total' => $item['price'] * $qty,
  );
  // cập nhật hoá đơn
  update_info_cart();
}

function update_info_cart() {
  if(isset($_SESSION['cart'])) {
    $num_order = 0;
    $total = 0;
    foreach($_SESSION['cart']['buy'] as $item) {
      $num_order += $item['qty'];
      $total += $item['sub_total'];
    }
  
    $_SESSION['cart']['info'] = array(
      'num_order' => $num_order,
      'total' => $total,
    );
  }
}

function get_list_buy_cart() {
  if(isset($_SESSION['cart'])) {
    foreach($_SESSION['cart']['buy'] as &$item) {
      $item['url_del_cart'] = "?mod=cart&act=delete&id={$item['id']}";
    }
    return $_SESSION['cart']['buy'];
  }
  return false;
}

function get_num_order_cart() {
  if(isset($_SESSION['cart']))
  return $_SESSION['cart']['info']['num_order'];
  return false;
}

function get_total_cart() {
  if(isset($_SESSION['cart']))
  return $_SESSION['cart']['info']['total'];
  return false;
}

function delete_cart($id) {
  if(isset($_SESSION['cart'])) {
    // xoá sản phẩm có id
    if(!empty($id)) {
      unset($_SESSION['cart']['buy'][$id]);
      // cập nhật lại
      update_info_cart();
    }
  }else{
    unset($_SESSION['cart']);
  }
}