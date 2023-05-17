<?php
// Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function fStrtolower($variable) {
    echo "Chuyển chuỗi: " . $variable . " <br>Thành chuỗi: " . strtolower($variable);
}
fStrtolower("I'm sTiLl hERe, WiTHoUt You");