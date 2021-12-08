<?php

define('UPLOAD_DIR', dirname(__FILE__) . '/uploads');
define('ALLOWED_EXTENSION', ['png', 'jpg', 'jpeg', 'pdf']);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$profilePicture = 'https://www.gravatar.com/avatar/' . md5(generateRandomString(16)); //pagal nutylejima

if (isset($_FILES['file'])) {
	$file = $_FILES['file'];

	if ($file['error'] == UPLOAD_ERR_OK) {
		$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
		$ext = strtolower($ext);

		if (!in_array($ext, ALLOWED_EXTENSION)) {
			echo "File not alllowed";

			exit;
		}

		$name = generateRandomString(16);

		$path = UPLOAD_DIR . '/' . date('Y/m/d');

		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}

		$path = sprintf('%s/%s.%s', $path, $name, $ext);

		move_uploaded_file($file['tmp_name'], $path);

		$profilePicture = str_replace('/home/code-academy/PHP', '', $path);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">

		body{
			font-family:'DM Sans',sans-serif;
		}
		h3{
			font-family:monospace;
			color:red;
		}
		p{
			font-style:italic;
		}		
		h3{
			margin-right:5%;
			display:inline;
		}
	</style>

</head>
<body>

	<div class="container w-25">

		<img src="<?php echo $profilePicture;?>">

		<h1>
			<?php echo $_POST['name']?>
		</h1>

		<h1>
			<?php echo $_POST['surename']?>
		</h1>
		<h1>
			<?php echo $_POST['date']?>
		</h1>
		<h1>
			<?php echo $_POST['email']?>
		</h1>

		<h2>
			<?php echo $_POST['cities']?>
		</h2>

			<!--skill checkbox-->
			<?php $checkbox = $_POST['lang'];
			foreach ($checkbox as $skill){
				if ($skill){
					echo"<h3>$skill<h3>";
				}
			}
			?>
		<p>
			<?php echo $_POST['info']?>
		</p>
</body>
</html>
