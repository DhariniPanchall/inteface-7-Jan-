<html>
	<body>
		<form method="POST">
			<p>
				<ul>
					Interfaces allow you to specify what methods a class should implement. 
				</ul>
				<ul>
					Interfaces make it easy to use a variety of different classes in the same way. 
				</ul>
				<ul>
					When one or more classes use the same interface, it is referred to as polymorphism.
				</ul>
				<br/>
			</p>

			Username:<input type="text" name="username"><br/><br/>
			Email:<input type="text" name="email"><br/><br/>
			Password:<input type="text" name="password"><br/><br/>
			Contact:<input type="number" name="contact"><br/><br/>
			<input type="submit" name="login" value="login">
		</form>

		<?php
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$contact = $_POST['contact'];
			$login = $_POST['login'];
			interface WebApp
			{
				public function login($username, $password);
			}
			class A implements WebApp
			{
				public function login($username, $password)
				{
					echo "Login user with username: ", $username;
				}
			}
			$a = new A();
			$WebApp = array($a);
			foreach ($WebApp as $webapp) 
			{
				$webapp -> login($username, $password);
			}
		?>
	</body>
</html>