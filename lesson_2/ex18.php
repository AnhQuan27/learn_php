<?php
// Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function fPreg_replace($var_1_18, $var_2_18) {
    $var_3_18 = '/[^a-zA-Z0-9]/';
    echo $var_1_18 ."<br>=>". preg_replace($var_3_18, $var_2_18, $var_1_18);;
}

echo fPreg_replace("Tell me there is a river I can swim that will bring you back to me", "_");
