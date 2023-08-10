<!DOCTYPE html>
<html>
	<head>
		<title>Text Transformation</title>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="<?= base_url('public/assets/javascripts/transform.js') ?>"></script>
	</head>
	<body>
		<h1>Text Transformation</h1>
		<form id="transform-form">
			<label for="transforms">Transforms (comma-separated):</label>
			<input type="text" name="transforms" id="transforms" required><br><br>
			<label for="text">Text to Transform:</label><br>
			<textarea name="text" id="text" rows="10" cols="50" required></textarea><br><br>
			<input type="submit" value="Transform">
		</form>
		<h2>Transformed Text:</h2>
		<p id="transformed-text"></p>
	</body>
</html>