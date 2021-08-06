<?php require_once(PATH_VIEWS.'header.php'); ?>

<div>
	<h3> Un formulaire pour creer un post et ses metadata </h3>
</div>

<div>
	<form method="post" action="index.php" >
        <p>Post Name </p>
         <input type="text" name="name">

         <p>Post Content </p>
         <input type="text" name="content">

         <p> Metadata: mymeta</p>
         <input type="text" name="metadata">

		<input type='submit' value='Submit'>
	</form>
</div>

<?php require_once(PATH_VIEWS.'footer.php'); ?>