<?php get_header(); ?>
<?php

?>
<div id="main-content-wp" class="home-page">
  <div class="wp-inner clearfix">
    <?php get_sidebar(); ?>
    <?php
      $list = show_list_product_cat();
      if(!empty($list)) {
        foreach($list as $item){
          $cat_id = $item['id'];
          $get_url_cat_id = get_info_cat($cat_id);
          $list_item = get_list_product($cat_id);
    ?>
    <div id="content" class="fl-right">
      <div class="section list-cat">
        <div class="section-head">
          <h3 class="section-title">
            <a href="
            <?php echo $get_url_cat_id['url'];?>" title="<?php echo $item['cat_title'] ; ?>">
              <?php echo $item['cat_title'] ; ?>
            </a>
          </h3>
        </div>
        <div class="section-detail">
          <?php if(!empty($list_item)) { ?>
          <ul class="list-item clearfix">
            <?php foreach($list_item as $item_product){ ?>
            <li>
              <a href="<?php echo $item_product['url'] ?>" title="<?php echo $item_product['product_title'] ?>"
                class="thumb">
                <img src="<?php echo $item_product['product_thumb'] ?>" alt="">
              </a>
              <a href="<?php echo $item_product['url'] ?>" title="<?php echo $item_product['product_title'] ?>"
                class="title">
                <?php echo $item_product['product_title'] ?>
              </a>
              <p class="price">
                <?php echo currency_format($item_product['price']) ?>
              </p>
            </li>
            <?php } ?>
          </ul>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php } } ?>
  </div>
</div>
<?php get_footer(); ?>