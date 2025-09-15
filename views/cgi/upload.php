<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Output headers
header("Content-Type: text/html; charset=UTF-8");
?>

<html>
<body>
<h2>File Upload Test</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];

        if ($file['error'] === UPLOAD_ERR_OK) {
            $filename = basename($file['name']);
            $contents = file_get_contents($file['tmp_name']);

            echo "<p>Uploaded file: {$filename}</p>";
            echo "<pre>" . htmlspecialchars($contents) . "</pre>";
        } else {
            echo "<p>Upload error: " . $file['error'] . "</p>";
        }
    } else {
        echo "<p>No file uploaded.</p>";
    }
} else {
    echo "<p>Send a POST request with a file field named 'file'.</p>";
}
?>

</body>
</html>
