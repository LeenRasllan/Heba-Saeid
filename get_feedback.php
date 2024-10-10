<?php
$file = 'feedbacks.json';
if (file_exists($file)) {
    $current_data = file_get_contents($file);
    echo $current_data;
} else {
    echo json_encode([]);
}
?>
