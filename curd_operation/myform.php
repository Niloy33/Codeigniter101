<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo form_open('form'); ?>

<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<?php echo form_error('username', '<div class="error">', '</div>'); ?>

<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
<?php echo form_error('password', '<div class="error">', '</div>'); ?>

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
<?php echo form_error('passconf', '<div class="error">', '</div>'); ?>

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
<?php echo form_error('email', '<div class="error">', '</div>'); ?>

<h5>Address</h5>
<input type="text" name="address" value="<?php echo set_value('address'); ?>" size="50" />
<?php echo form_error('address', '<div class="error">', '</div>'); ?>


<h5>ID</h5>
<input type="text" name="id" value="<?php echo set_value('id'); ?>" size="50" />
<?php echo form_error('id', '<div class="error">', '</div>'); ?>

<div><input name="create" type="submit" value="Submit" /></div>

</form>

</body>
</html>