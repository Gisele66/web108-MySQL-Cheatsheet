<?php
// Only run if this page is reached by a POST submit
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Error: Please submit the form from PRACTICE-ONE.php";
    exit;
}

// Collect form data
$title    = $_POST['title'] ?? '';
$author   = $_POST['author'] ?? '';
$email    = $_POST['email'] ?? '';
$category = $_POST['category'] ?? '';
$status   = $_POST['status'] ?? '';
$content  = $_POST['content'] ?? '';

// Create timestamp-based filename
$timestamp = date("Y-m-d_H-i-s");
$filename = "blogpost_" . $timestamp . ".txt";

// Format the blog post data as readable text
$data  = "Title: $title\n";
$data .= "Author: $author\n";
$data .= "Email: $email\n";
$data .= "Category: $category\n";
$data .= "Publish Status: $status\n";
$data .= "Saved At: " . date("Y-m-d H:i:s") . "\n";
$data .= "--------------------------\n";
$data .= $content . "\n";

// Save the file in the SAME directory as this script
$result = file_put_contents(__DIR__ . "/" . $filename, $data);

// Display confirmation message
?>
<!DOCTYPE html>
<html>
<head>
    <title>Post Saved</title>
</head>
<body>
<?php if ($result === false): ?>
    <h2>Error Saving Post</h2>
    <p>Could not write the file. Check directory permissions.</p>
<?php else: ?>
    <h2>Blog Post Saved Successfully</h2>
    <p>A new file was created:</p>
    <p><strong><?php echo htmlspecialchars($filename); ?></strong></p>
<?php endif; ?>

<p><a href="PRACTICE-ONE.php">Back to form</a></p>
</body>
</html>
