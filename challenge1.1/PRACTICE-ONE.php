<!DOCTYPE html>
<html>
<head>
    <title>Blog Post Submission</title>
</head>
<body>

<h2>Submit a Blog Post</h2>

<form method="POST" action="save-post.php">

    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Author Name:</label><br>
    <input type="text" name="author" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Category:</label><br>
    <select name="category" required>
        <option value="Tech">Tech</option>
        <option value="Business">Business</option>
        <option value="Personal">Personal</option>
    </select><br><br>

    <label>Publish Status:</label><br>
    <input type="radio" name="status" value="Draft" required> Draft
    <input type="radio" name="status" value="Publish"> Publish
    <br><br>

    <label>Blog Content:</label><br>
    <textarea name="content" rows="8" cols="50" required></textarea><br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

</form>

</body>
</html>
