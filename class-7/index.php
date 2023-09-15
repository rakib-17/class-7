    <form action="./datastore.php" method="POST">
	<table>

		<tr><td>Name: </td><td><input type="text" placeholder="enter your name" name="Name" autofocus required></td></tr>
		<tr><td>E-mail: </td><td><input type="mail" name="Email"></td></tr>
		<tr><td>Password: </td><td><input type="password" name="Password" pattern=[0-9]{4,7} required></td></tr>
		<tr><td>Gender: </td><td><input type="radio" name="gen">Male <input type="radio" name="gen">Female </td></tr>
        <tr><td>Address: </td><td><input type="text" name="Address"></td></tr>
		<tr><td></td><td><input type="submit" value="Register"> </td></tr>

	</table>
	</form>

</body>
</html>