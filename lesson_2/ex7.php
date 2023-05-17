<?php
// Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
function fStrtoupper($variable) {
    echo "Chuyển chuỗi: " . $variable . " <br>Thành chuỗi: " . strtoupper($variable);
}
fStrtoupper("All I need's a little love in the dark!");