<html>
<head>
    <title>File Upload in CodeIgniter</title>
</head>
<body>

<?php echo $error; ?>

<?php echo form_open_multipart('home/do_upload'); ?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="Upload" />

</form>

</body>
</html>
