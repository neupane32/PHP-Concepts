<?php
// Include the database connection file
include('databaseConnection.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputData = $_POST; // Get form data

    if (!empty($inputData)) {
        $response = [
            'status' => 'success',
            'message' => 'Data received successfully',
            'data' => $inputData
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'No data received'
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
}
?>
