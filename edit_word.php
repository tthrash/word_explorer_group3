<!DOCTYPE html>
<?php
$topic = $_POST['topic'];
$image = $_POST['image'];
$english = $_POST['english'];
$telugu = $_POST['telugu'];
$hindi = $_POST['hindi'];
$kannada = $_POST['kannada'];
$malayalam = $_POST['malayalam'];
$gujarathi = $_POST['gujarathi'];
$telugu_in_english = $_POST['telugu_in_english'];
$english_in_telugu = $_POST['english_in_telugu'];
$hindi_in_english = $_POST['hindi_in_english'];
$english_in_hindi = $_POST['english_in_hindi'];
$kannada_in_english = $_POST['kannada_in_english'];
$english_in_kannada = $_POST['english_in_kannada'];
$malayalam_in_english = $_POST['malayalam_in_english'];
$english_in_malayalam = $_POST['english_in_malayalam'];
$gujarathi_in_english = $_POST['gujarathi_in_english'];
$english_in_gujarathi = $_POST['english_in_gujarathi'];

?>
<html>
	
  <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <title>Midterm Project - Group 3</title>
  </head>
  <body>
	<div class="container">
	<div class="row">
		<h1>Edit word</h1>	
		<hr />
		<form action="process_edit.php" method="post">
			<table class="table table-striped">
			<tr style="background: #cccccc;">
			  <td colspan="2">Edit the Word</td>			  
			</tr>
			<tr>
			  <td>Topic</td>
			  <td><input type="text" name="topic"size="20" maxlength="20" value="<?php echo $topic?>"/></td>
			</tr>
			<tr>
			  <td>Image (with file extension)</td>
			  <td><input type="text" name="image"size="20" maxlength="20" value="<?php echo $image?>"/></td>
			</tr>
			<tr>
			  <td>English</td>
			  <td><input type="text" name="english" size="20" maxlength="20" value="<?php echo $english?>" readonly/></td>
			</tr>
			<tr>
			  <td>Telugu</td>
			  <td><input type="text" name="telugu" size="20" maxlength="20" value="<?php echo $telugu?>"/></td>
			</tr>
			<tr>
			  <td>Hindi</td>
			  <td><input type="text" name="hindi" size="20" maxlength="20" value="<?php echo $hindi?>"/></td>
			</tr>
			<tr>
			  <td>Kannada</td>
			  <td><input type="text" name="kannada"size="20" maxlength="20" value="<?php echo $kannada?>"/></td>
			</tr>
			<tr>
			  <td>Malayalam</td>
			  <td><input type="text" name="malayalam"size="20" maxlength="20" value="<?php echo $malayalam?>"/></td>
			</tr>
			<tr>
			  <td>Gujarathi</td>
			  <td><input type="text" name="gujarathi"size="20" maxlength="20" value="<?php echo $gujarathi?>"/></td>
			</tr>
			<tr>
			  <td>Telugu in English</td>
			  <td><input type="text" name="telugu_in_english"size="20" maxlength="20" value="<?php echo $telugu_in_english?>"/></td>
			</tr>
			<tr>
			  <td>English in Telugu</td>
			  <td><input type="text" name="english_in_telugu"size="20" maxlength="20" value="<?php echo $english_in_telugu?>"/></td>
			</tr>
			<tr>
			  <td>Hindi in English</td>
			  <td><input type="text" name="hindi_in_english"size="20" maxlength="20" value="<?php echo $hindi_in_english?>"/></td>
			</tr>
			<tr>
			  <td>English in Hindi</td>
			  <td><input type="text" name="english_in_hindi"size="20" maxlength="20" value="<?php echo $english_in_hindi?>"/></td>
			</tr>
			<tr>
			  <td>Kannada in English</td>
			  <td><input type="text" name="kannada_in_english"size="20" maxlength="20" value="<?php echo $kannada_in_english?>"/></td>
			</tr>
			<tr>
			  <td>English in Kannada</td>
			  <td><input type="text" name="english_in_kannada"size="20" maxlength="20" value="<?php echo $english_in_kannada?>"/></td>
			</tr>
			<tr>
			  <td>Malayalam in English</td>
			  <td><input type="text" name="malayalam_in_english"size="20" maxlength="20" value="<?php echo $malayalam_in_english?>"/></td>
			</tr>
			<tr>
			  <td>English in Malayalam</td>
			  <td><input type="text" name="english_in_malayalam"size="20" maxlength="20" value="<?php echo $english_in_malayalam?>"/></td>
			</tr>
			<tr>
			  <td>Gujarathi in English</td>
			  <td><input type="text" name="gujarathi_in_english"size="20" maxlength="20" value="<?php echo $gujarathi_in_english?>"/></td>
			</tr>
			<tr>
			  <td>English in Gujarathi</td>
			  <td><input type="text" name="english_in_gujarathi"size="20" maxlength="20" value="<?php echo $english_in_gujarathi?>"/></td>
			</tr>
			<tr>
			<td></td>
				<td colspan="" style=""><input type="submit" value="Submit the edited word" size="20"/></td>
			</tr>
			
			</table>
		</form>
	</div>
	</div>	
    
  </body>
</html>