<?php
// Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function fWordCount($variable) {
    echo "Số từ: " . str_word_count($variable);
}

fWordCount("Anything that can go wrong, will go wrong");
