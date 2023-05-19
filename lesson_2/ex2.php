<?php
// Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function fWordCount($variable) {
    return str_word_count($variable);
}

echo "Số từ: " . fWordCount("Anything that can go wrong, will go wrong");
