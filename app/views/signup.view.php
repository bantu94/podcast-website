<!DO required=""CTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?=APP_NAME?> | Signup</title>
	<link rel="stylesheet" required="" type="text/css" href="<?=ROOT?>/assets_login/css/bootstrap-icons.css">
	<link rel="stylesheet" required="" type="text/css" href="<?=ROOT?>/assets_login/css/styles.css?460">
</head>
<body>

<?php
// show($user->errors);
?>

	
	<section class="class_1" >
		<div class="class_2" >
			<div class="class_3" >
				<div class="class_4" >
					<h1 class="class_5"  >
						Signup
						<br>
					</h1>
					<a href="<?=ROOT?>" class="class_6"  >
						Home
					</a>
					<a href="<?=ROOT?>/login" class="class_6"  >
						login
					</a>
					<a href="#" class="class_6"  >
						Signup
					</a>
				</div>
			</div>
		</div>
		<form method="post" class="class_7" >
			<h1 class="class_8"  >
				Signup
			</h1>
			<div class="class_9" >
				<label class="class_10"  >
					Username *
				</label>
				<input placeholder="" value="<?=old_value('username')?>" required="" type="text" name="username" class="class_11"  >
      	<div><small style="color:red;"><?=$user->getError('username')?></small></div>

			</div>
			<div class="class_9" >
				<label class="class_10"  >
					First name *
				</label>
				<input placeholder="" value="<?=old_value('firstname')?>" required="" type="text" name="firstname" class="class_11"  >
      	<div><small style="color:red;"><?=$user->getError('firstname')?></small></div>


			</div>
			<div class="class_9" >
				<label class="class_10"  >
					Last Name *
				</label>
				<input placeholder="" value="<?=old_value('lastname')?>" required="" type="text" name="lastname" class="class_11"  >
      	<div><small style="color:red;"><?=$user->getError('lastname')?></small></div>

			</div>
			<div class="class_9" >
				<label class="class_10"  >
					Email *
				</label>
				<input placeholder="" value="<?=old_value('email')?>" required="" type="email" name="email" class="class_11"  >
      	<div><small style="color:red;"><?=$user->getError('email')?></small></div>

			</div>
			<div class="class_9" >
				<label class="class_10"  >
					Password *
				</label>
				<input placeholder="" value="<?=old_value('password')?>" required="" type="password" name="password" class="class_11"  >
      	<div><small style="color:red;"><?=$user->getError('password')?></small></div>

			</div>
			<div class="class_9" >
				<label class="class_10"  >
					Retype Password *
				</label>
				<input placeholder="" required="" type="password" name="retype_password" class="class_11"  >
			</div>
			<button class="class_12"  >
				Register
			</button>
    </form>

	</section>
	
</body>
</html>
