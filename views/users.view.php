<?php require 'partials/head.php'; ?>
<div >
	<h1 >All User</h1>
	<h1 >Submit your name</h1>
	<div>
		<form  method="POST" action="/users">
				<input type="text" placeholder="Enter Name" name="name">
			<button type="submit" >Submit</button>
		</form>
		<ul>
			<?php foreach ($users as $user): ?>
				<li ><?= $user->name; ?></li>
			<?php endforeach; ?> 
		</ul>
	</div>
</div>
<?php require 'partials/footer.php'; ?>