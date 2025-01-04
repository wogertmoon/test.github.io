<!DOCTYPE html>
<html>
<head>
	<title>Upload Video For wacko Anime</title>
</head>
<body>
	<h2>Upload Video</h2>
	<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="size">Size:</label>
    <input type="text" name="size" id="size">
    <br>
    <label for="video">Video:</label>
    <input type="file" name="video" id="video">
    <br>
    <input type="submit" name="submit" value="Upload Video">
</form>

</body>
</html>