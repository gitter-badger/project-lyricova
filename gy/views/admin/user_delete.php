<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete user - <?=$this->admin_model->get_title();?></title>
	<?php $this->load->view('gy/head');?>
</head>
<body>
	<div id="wrapper">
		<?php $this->load->view('admin/header');?>
		<div class="jumbotron header single-head admin-jumbotron">
			<div class="page-wrapper">
				<h2><?php if($errinfo==''){ ?><small>Delete user <?=$post->username?> with ID <?=$post->id?></small><?php }else{ echo '<p class="lead">A critical error has occured. -- the Disappearance<p>';}?></h2>
			</div>
		</div>
		<div id="page-wrapper">
			<?php if($success ){ ?>
		<div class="alert alert-success fade in ">
  			<a href="#" class="close" data-dismiss="alert">&times;</a>
  			<strong>Success!</strong> User Deleted.
		</div>
		<div class="alert fade in ">
  			<strong>Attention!</strong> Please keep this page if you want to recover your deleted item. Data would be irrecoverable after you close it. 
		</div>
		<table class="table">
			<tr><th>Column</th><th>Info</th></tr>
			<tr><td>Username</td><td><?=$post->username?></td></tr>
    		<tr><td>email</td><td><?=$post->email?></td></tr>
    		<tr><td>display_name</td><td><?=$post->display_name?></td></tr>
    		<tr><td>id</td><td><?=$post->id?></td></tr>
    		<tr><td>password</td><td><?=$post->password?></td></tr>
		</table>
		<?php } ?>

		<?php if(!$errinfo==''){ ?>
		<div class="alert alert-error fade in ">
  			<a href="#" class="close" data-dismiss="alert">&times;</a>
  			<strong>Error!</strong> <?=$errinfo?> 
		</div>
		<?php } ?>
		</div>
		<?php $this->load->view('gy/footer');?>
	</div>
</body>
</html>