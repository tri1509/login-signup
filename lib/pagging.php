<?php

function get_pagging($num_page, $page, $base_url = ""){
  $str_pagging = "<div class='section' id='pagenavi-wp'>
  <div class='section-detail'><ul id='list-pagenavi'>";
  if($page > 1){
    $page_prev = $page - 1;
    $str_pagging .= "<a href=\"{$base_url}&page={$page_prev}\" title='' class='next-page'><i class='fa fa-angle-left'></i></a>";
  }
  for($i = 1; $i <= $num_page; $i++){
    $active ="";
    if($i == $page) $active = "class='active'";
    $str_pagging .= "<li {$active}><a href=\"{$base_url}&page={$i}\" title=''>$i</a></li>";
  }
  if($page < $num_page){
    $page_next = $page + 1;
    $str_pagging .= "<a href=\"{$base_url}&page={$page_next}\" title='' class='next-page'><i class='fa fa-angle-right'></i></a>";
  }
  $str_pagging .= "</ul></div></div>";
  echo $str_pagging;
}
        