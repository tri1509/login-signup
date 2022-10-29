<?php

if(isset($_POST['btn_update'])) {
  update_cart($_POST['qty']);
  redirect("?mod=cart&act=show");
}