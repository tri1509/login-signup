<?php

function check_login($username, $password) {
  global $list_users;
  foreach($list_users as $user){
    if($username == $user['username'] && md5($password) == $user['password']){
      return TRUE;
    }
  }
  return false;
}
// trả về true nếu đã lgin
function is_login() {
  if(isset($_SESSION['is_login']))
    return true;
  return false;
}
// trả về userName của người đăng nhập
function user_login(){
  if(!empty($_SESSION['user_login']))
    return $_SESSION['user_login'];
  return false;
}

function info_user($field = 'id') {
  global $list_users;
  if(isset($_SESSION['is_login'])){
    foreach($list_users as $user){
      if($_SESSION['user_login'] == $user['username']){
        if(array_key_exists($field,$user)){
          return $user[$field];
        }
      }
    }
  }
  return false;
}