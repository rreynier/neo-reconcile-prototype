<?php
header('Content-Type: application/json');

sleep(1);
//
//echo "[{ title: 'John' },
//        { title: 'Bob' },
//        { title: 'Bruce' }]";

$data = [
    ['title' => 'John']
];

echo json_encode([
    success => true,
    results => $data
]);

exit();