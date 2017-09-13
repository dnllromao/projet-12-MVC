<div class="login">
	<form action="" method="post">
		<label>User<input type="text" name="name"></label>
		<label>Password<input type="text" name="pw"></label>
		<input type="submit" value="login" name="action">
	</form>
</div>
<div class="register">
	<form action="" method="post">
		<label>User<input type="text" name="name"></label>
		<label>Email<input type="email" name="email"></label>
		<label>Password<input type="password" name="pw"></label>
		<input type="submit" value="register" name="action">
	</form>
</div>
<div class="greeting">
	<p><?php echo $this->model->greeting(); ?></p>
</div>