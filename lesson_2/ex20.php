<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
function fFilter_var($variable) {
    if(filter_var($variable, FILTER_VALIDATE_EMAIL)) {
        echo "\"$variable\" là 1 email hợp lệ";
    } else {
        echo "\"$variable\" không phải là 1 email hợp lệ";
    }
}

fFilter_var("anhquan0327@gmail.com");