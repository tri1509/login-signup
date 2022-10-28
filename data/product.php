<?php
// Danh mục

/* 
* id => id
* Tên danh mục => cat_title
*/

$list_product_cat = array(
  1 => array(
    'id' => 1,
    'cat_title' => "Điện thoại",
  ),
  2 => array(
    'id' => 2,
    'cat_title' => "Máy tính bảng",
  ),
);



// Dữ liệu sản phẩm

/* 
* id => id
* Tên sản phẩm => product_title
* Giá => price
* Mã sản phẩm => code
* Mô tả => product_desc
* Ảnh sp => product_thumb => url
* Nội dung => product_content
*/

$list_product = array(
  1 => array(
    'id' => 1,
    'product_title' => "Sangsung galaxy S9",
    'price' => 45062000,
    'code' => "UNI#1",
    'product_desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
    'product_thumb' =>"https://cdn2.cellphones.com.vn/358x/media/catalog/product/t/_/t_m_18.png",
    'product_content' =>"Lorem Ipsum is simply dummy text of the printing and typesetting industry<br><img alt='' src='https://cdn2.cellphones.com.vn/358x/media/catalog/product/t/_/t_m_18.png'>",
    'cat_id' => 1,
  ),
  2 => array(
    'id' => 2,
    'product_title' => "Iphone X",
    'price' => "55030000",
    'code' => "UNI#1",
    'product_desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
    'product_thumb' =>"https://cdn2.cellphones.com.vn/358x/media/catalog/product/s/a/samsung_galaxy_z_fold_4-7.jpg",
    'product_content' =>"Lorem Ipsum is simply dummy text of the printing and typesetting industry<br><img alt='' src='https://cdn2.cellphones.com.vn/358x/media/catalog/product/s/a/samsung_galaxy_z_fold_4-7.jpg'>",
    'cat_id' => "1",
  ),
  3 => array(
    'id' => 3,
    'product_title' => "Máy tính bảng",
    'price' => "33020000",
    'code' => "UNI#1",
    'product_desc' => "iPhone 14 Pro Max là mẫu flagship nổi bật nhất của Apple trong lần trở lại năm 2022 với nhiều cải tiến về công nghệ cũng như vẻ ngoài cao cấp, sang chảnh hợp với gu thẩm mỹ đại chúng. Những chiếc điện thoại đến từ nhà Táo Khuyết nhận được rất nhiều sự kỳ vọng của thị trường ngay từ khi chưa ra mắt. Vậy liệu những chiếc flagship đến từ công ty công nghệ hàng đầu thế giới này có làm bạn thất vọng? Cùng khám phá những điều thú vị về iPhone 14 Pro Max ở bài viết dưới đây nhé.",
    'product_thumb' =>"https://viostore.vn/wp-content/uploads/2018/05/000001_1494834091.jpg",
    'product_content' =>"Cách nhau một thế hệ vậy điện thoại iPhone 14 Pro Max với iPhone 13 Pro Max có gì khác nhau? Nên chọn mua phiên bản iPhone nào thù hợp. Để tìm hiểu rõ hơn về điều này hãy cùng so sánh chi tiết ngay sau đây<br><img alt='' src='https://viostore.vn/wp-content/uploads/2018/05/000001_1494834091.jpg'>",
    'cat_id' => "2",
  ),
);