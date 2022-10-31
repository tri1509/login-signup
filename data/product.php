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
    'product_thumb' =>"https://cdn2.cellphones.com.vn/358x/media/catalog/product/t/_/t_m_18.png",
    'product_content' =>"Cách nhau một thế hệ vậy điện thoại iPhone 14 Pro Max với iPhone 13 Pro Max có gì khác nhau? Nên chọn mua phiên bản iPhone nào thù hợp. Để tìm hiểu rõ hơn về điều này hãy cùng so sánh chi tiết ngay sau đây<br><img alt='' src='https://cdn2.cellphones.com.vn/358x/media/catalog/product/t/_/t_m_18.png'>",
    'cat_id' => "2",
  ),
  4 => array(
    'id' => 4,
    'product_title' => "iPhone 14 Pro Max 128GB | Chính hãng VN/A",
    'price' => "33020000",
    'code' => "UNI#1",
    'product_desc' => "iPhone 14 Pro Max là mẫu flagship nổi bật nhất của Apple trong lần trở lại năm 2022 với nhiều cải tiến về công nghệ cũng như vẻ ngoài cao cấp, sang chảnh hợp với gu thẩm mỹ đại chúng. Những chiếc điện thoại đến từ nhà Táo Khuyết nhận được rất nhiều sự kỳ vọng của thị trường ngay từ khi chưa ra mắt. Vậy liệu những chiếc flagship đến từ công ty công nghệ hàng đầu thế giới này có làm bạn thất vọng? Cùng khám phá những điều thú vị về iPhone 14 Pro Max ở bài viết dưới đây nhé.",
    'product_thumb' =>"https://viostore.vn/wp-content/uploads/2018/05/000001_1494834091.jpg",
    'product_content' =>"Cách nhau một thế hệ vậy điện thoại iPhone 14 Pro Max với iPhone 13 Pro Max có gì khác nhau? Nên chọn mua phiên bản iPhone nào thù hợp. Để tìm hiểu rõ hơn về điều này hãy cùng so sánh chi tiết ngay sau đây<br><img alt='' src='https://viostore.vn/wp-content/uploads/2018/05/000001_1494834091.jpg'>",
    'cat_id' => "1",
  ),
  5 => array(
    'id' => 5,
    'product_title' => "iPhone 11 64GB I Chính hãng VN/A",
    'price' => "33020000",
    'code' => "UNI#1",
    'product_desc' => "Apple luôn làm hài lòng tín đồ iFan với các dòng iPhone trong từng phân khúc giá. Đặc biệt, phiên bản iPhone 11 vừa ra mắt nhưng đã chiếm lĩnh được thị trường smartphone trên toàn thế giới với giá cả phải chăng. Cùng tìm hiểu chi tiết rõ hơn qua bài viết sau đây để có quyết định có nên mua hay không nhé!
    Tin tức mới nhất về điện thoại iPhone 11
    (Cập nhật ngày 17/5/2022)
    Nguồn tin từ LeaksApplePro cho biết Apple nhiều khả năng sẽ 'khai tử' chiếc iPhone 11, sau khi trình làng thế hệ iPhone mới vào tháng 9 sắp tới đây. Cho đến thời điểm hiện tại, iPhone 11 không còn là sản phẩm mới nhất hay tốt nhất của 'Táo khuyết'. Tuy nhiên, theo nhận định từ Tom's Guide, với mức giá giảm xuống cực hấp dẫn như hiện tại, người dùng khó có thể tìm được một chiếc smartphone nào tốt hơn.",
    'product_thumb' =>"https://cdn2.cellphones.com.vn/358x/media/catalog/product/3/_/3_225.jpg",
    'product_content' =>"Cách nhau một thế hệ vậy điện thoại iPhone 14 Pro Max với iPhone 13 Pro Max có gì khác nhau? Nên chọn mua phiên bản iPhone nào thù hợp. Để tìm hiểu rõ hơn về điều này hãy cùng so sánh chi tiết ngay sau đây<br><img alt='' src='https://cdn2.cellphones.com.vn/358x/media/catalog/product/3/_/3_225.jpg'>",
    'cat_id' => "1",
  ),
  6 => array(
    'id' => 6,
    'product_title' => "iPhone 13 Pro Max 128GB | Chính hãng VN/A
    ",
    'price' => "33020000",
    'code' => "UNI#1",
    'product_desc' => "iPhone 13 Pro Max chắc chắn sẽ là chiếc smartphone cao cấp được quan tâm nhiều nhất trong năm 2021. Dòng iPhone 13 series được ra mắt vào ngày 14 tháng 9 năm 2021 tại sự kiện 'California Streaming' diễn ra trực tuyến tương tự năm ngoái cùng với 3 phiên bản khác là iPhone 13, 13 mini và 13 Pro. Vậy điện thoại 13 Pro Max giá bao nhiêu? Có gì nổi bật? Cùng tìm hiểu ngay nhé!
    Đánh giá iPhone 13 Pro Max – Hiệu năng vô đối, camera cực đỉnh
    iPhone 12 ra mắt cách đây chưa lâu, thì những tin đồn mới nhất về iPhone 13 Pro Max đã khiến bao tín đồ công nghệ ngóng chờ. Cụm camera được nâng cấp, màu sắc mới, đặc biệt là màn hình 120Hz với phần notch được làm nhỏ gọn hơn chính là những điểm làm cho thu hút mọi sự chú ý trong năm nay.",
    'product_thumb' =>"https://cdn2.cellphones.com.vn/358x/media/catalog/product/3/_/3_51_1_7.jpg",
    'product_content' =>"Cách nhau một thế hệ vậy điện thoại iPhone 14 Pro Max với iPhone 13 Pro Max có gì khác nhau? Nên chọn mua phiên bản iPhone nào thù hợp. Để tìm hiểu rõ hơn về điều này hãy cùng so sánh chi tiết ngay sau đây<br><img alt='' src='https://cdn2.cellphones.com.vn/358x/media/catalog/product/3/_/3_51_1_7.jpg'>",
    'cat_id' => "2",
  ),
  7 => array(
    'id' => 7,
    'product_title' => "iPhone 12 Pro Max 128GB I Chính hãng VN/A",
    'price' => "33020000",
    'code' => "UNI#1",
    'product_desc' => "Sản phẩm iPhone 12 Pro Max sắp hết hàng, bạn có thể tham khảo thêm iPhone 13 Pro Max với nhiều nâng cấp về cấu hình, camera, màn hình đang có mức giá cực hấp dẫn tại hệ thống CellphoneS.

    Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng
    Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là iPhone 12 Pro Max, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.
    
    Màn hình 6.7 inches Super Retina XDR",
    'product_thumb' =>"https://cdn2.cellphones.com.vn/358x/media/catalog/product/4/_/4_185_2.jpg",
    'product_content' =>"Cách nhau một thế hệ vậy điện thoại iPhone 14 Pro Max với iPhone 13 Pro Max có gì khác nhau? Nên chọn mua phiên bản iPhone nào thù hợp. Để tìm hiểu rõ hơn về điều này hãy cùng so sánh chi tiết ngay sau đây<br><img alt='' src='https://cdn2.cellphones.com.vn/358x/media/catalog/product/4/_/4_185_2.jpg'>",
    'cat_id' => "2",
  ),
  9 => array(
    'id' => 9,
    'product_title' => "Máy tính bảng",
    'price' => "33020000",
    'code' => "UNI#1",
    'product_desc' => "iPhone 14 Pro Max là mẫu flagship nổi bật nhất của Apple trong lần trở lại năm 2022 với nhiều cải tiến về công nghệ cũng như vẻ ngoài cao cấp, sang chảnh hợp với gu thẩm mỹ đại chúng. Những chiếc điện thoại đến từ nhà Táo Khuyết nhận được rất nhiều sự kỳ vọng của thị trường ngay từ khi chưa ra mắt. Vậy liệu những chiếc flagship đến từ công ty công nghệ hàng đầu thế giới này có làm bạn thất vọng? Cùng khám phá những điều thú vị về iPhone 14 Pro Max ở bài viết dưới đây nhé.",
    'product_thumb' =>"https://cdn2.cellphones.com.vn/358x/media/catalog/product/p/m/pms_1655902420.18254534_1.png",
    'product_content' =>"Cách nhau một thế hệ vậy điện thoại iPhone 14 Pro Max với iPhone 13 Pro Max có gì khác nhau? Nên chọn mua phiên bản iPhone nào thù hợp. Để tìm hiểu rõ hơn về điều này hãy cùng so sánh chi tiết ngay sau đây<br><img alt='' src='https://cdn2.cellphones.com.vn/358x/media/catalog/product/p/m/pms_1655902420.18254534_1.png'>",
    'cat_id' => "2",
  ),
);