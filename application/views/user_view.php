Hello <?php if(isset($_SESSION['firstname'])){
	echo $_SESSION['firstname'];
	} ?>

</br>

<a href='auth/logout'> Log out</a>