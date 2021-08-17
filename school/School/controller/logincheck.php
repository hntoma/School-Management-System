<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		$utype = $_POST['utype'];
		if ($uname == "" || $password == "") {
			echo "সঠিক তথ্য দিন";
		}
		else
		{
			/*$user = $_SESSION['current_user'];*/
			$myfile = fopen('../model/profiles.json', 'r');
        	$data = fread($myfile, filesize('../model/profiles.json'));
        	fclose($myfile);
			$all_user = json_decode($data,true);
			$check_valid = false;

			foreach($all_user as $user)
			{
				if($user["uname"] == $uname && $user["password"] == $password && $user["type"] == $utype)
				{
					$check_valid = true;
					break;
				}
				// print_r($user);
			}
			
			if($check_valid)
			{
				if($_POST['remember'] == "remember")
			{

				setcookie('flag', true, time()+(24*60*60), '/');
				setcookie('name', $user['name'], time()+(24*60*60), '/');
				setcookie('username', $user['uname'], time()+(24*60*60), '/');
				setcookie('password', $user['password'], time()+(24*60*60), '/');
				header('location: ../view/admin_home.php');

			}
			else{
				setcookie('flag', true, time()+(60*5), '/');
				setcookie('name', $user['name'], time()+(60*50), '/');
				setcookie('username', $user['uname'], time()+(60*5), '/');
				setcookie('password', $user['password'], time()+(60*5), '/');
				header('location: ../view/admin_home.php');
			}
			}
			else
			{
				return;
			}

			// for($i = 0; $i < sizeof($all_users); $i++) {
			// 	if($users_admin[$i]['username'] == $uname)
			// 	{
			// 		$user = $all_users[$i];
			// 		break;
			// 	}
				
			// }

			// if(($uname == $user['username']) && ($password == $user['password']) && ($utype == $user['type'] )){
				/*$_SESSION['flag'] = true;*/
			
		}
	}
?>