<?php
// Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function fStrstr($var_1_17, $var_2_17) {
    $return = strstr($var_1_17, $var_2_17); 
    // return về kết quả của hàm strstr; kết quả trả về ở 2 dạng 
    // 1. nếu chuỗi con $var_2_17 có trong chuỗi gốc $var_1_17
    //    kết quả trả về là một chuỗi con của $var_1_17 bắt đầu từ vị trí xuất hiện đầu tiên của $var_2_17 trong $var_1_17 
    //    và kết thúc ở cuối chuỗi $var_1_17. Ví dụ, với $var_1_17 = "Let my heart free" và $var_2_17 = "my", kết quả sẽ là "my heart free".
    // 2. Nếu chuỗi con $var_2_17 không xuất hiện trong chuỗi gốc $var_1_17, thì hàm strstr() sẽ trả về giá trị boolean false
    if ($return != false ) { 
        $newString = "";
        for($i = 0; $i < strlen($var_2_17); $i++){ 
            // Vòng lặp được thực hiện trong khoảng từ 0 đến độ dài của chuỗi con $var_2_17 
            // Trong mỗi vòng lặp, ký tự tại vị trí $i của chuỗi $return được thêm vào chuỗi $newString bằng cách sử dụng phép nối chuỗi (.). 
            // Cuối cùng, chuỗi $newString sẽ chứa các ký tự tương ứng với chuỗi con $var_2_17 trong chuỗi gốc $var_1_17
            // Sau đó, một câu điều kiện kiểm tra xem chuỗi $newString có giống với chuỗi con $var_2_17 hay không. Nếu hai chuỗi này bằng nhau, 
            // tức là chuỗi con được tìm thấy trong chuỗi gốc, thì câu điều kiện sẽ trả về true và thông báo "Chuỗi "$var_1_17" chứa chuỗi con "$var_2_17"" được in ra.

            // Ngược lại, nếu hai chuỗi không bằng nhau, tức là chuỗi con không được tìm thấy trong chuỗi gốc, câu điều kiện sẽ trả về false và thông báo "Chuỗi "$var_1_17" 
            // không chứa chuỗi "$var_2_17"" được in ra.
            $newString = $newString . $return[$i];
        }
        if($newString == $var_2_17) {
            echo "Chuỗi \"$var_1_17\" chứa chuỗi con \"$var_2_17\" ";
        } else {
            echo "Chuỗi \"$var_1_17\" không chứa chuỗi \"$var_2_17\"";
        }
    } else {
        echo "Chuỗi \"$var_1_17\" không chứa chuỗi con \"$var_2_17\" ";
    }
    // echo $return;
}
fStrstr("Let my heart free", "my");