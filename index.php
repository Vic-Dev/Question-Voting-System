<?php 

include 'connection.inc.php';

$conn = dbConnect(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Question Voting System</title>
</head>
<body>
	<form action="index.php" method="post">
		<?php if ($_POST) { ?>
		<div>
			<p name="posted-question"><?php echo ($_POST['question'])?></p>
		</div>
		<?php } ?>
		<div>
			<textarea name="question">Write something here</textarea>
		</div>
		<div>
			<button type="submit">Send</button>
		</div>
	</form>
</body>
</html>

