<!DOCTYPE html>
<html>
    <head>
	    <title>Upload an image </title>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    </head>

    <body>
	    <?php echo @$error; ?>
	    <?php echo form_open_multipart('ImageUpload_Controller/upload');?>
	    <?php echo "<input type='file' name='profile_pic' size='20' />"; ?>
	    <?php echo "<input type='submit' name='submit' value='upload' />"; ?>
	    <?php echo "</form>"?> 
    </body>
</html>