<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không, sử dụng hàm strrchr().
function fStrrchr($var_16, $var_2_16) {
    $return = strrchr($var_16, $var_2_16);
     if($return == 0)
}
echo fStrrchr("Hello World!", "World!");

