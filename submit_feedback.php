<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = isset($_POST['feedback']) ? $_POST['feedback'] : '';
    
    if (!empty($feedback)) {
        $file = 'feedbacks.json';
        if (file_exists($file)) {
            $current_data = file_get_contents($file);
            $array_data = json_decode($current_data, true);
        } else {
            $array_data = array();
        }
        
        $array_data[] = $feedback;
        file_put_contents($file, json_encode($array_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        echo "تم حفظ الفيدباك بنجاح!";
    } else {
        echo "لا يوجد فيدباك!";
    }
} else {
    echo "طريقة الطلب غير صحيحة!";
}
?>
