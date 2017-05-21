<?php include "templates/header.php"; ?>

<h2>Find a user based on location</h2>

<form method="post">
	<label for="location">Location</label>
	<input type="text" name="location" id="location">
	<input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back Home</a>

<?php include "templates/footer.php"; ?>