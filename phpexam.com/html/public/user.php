<?php
/**
 * Summary of User
 */
class User {
    private $username;
    private $password;

    public function __construct($data =[]){
			foreach ($data as $key => $value) {
					$this->{$key} = $value;
			}
	}

    public static function findByEmail($email,$password)
    {
        require_once("connection.php");
        $email = mysqli_real_escape_string($connect, $email);
        $password = mysqli_real_escape_string($connect, $password);
        $sql = "SELECT * FROM users WHERE username='$email' AND password='$password'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        if(isset($row)){
            session_start();
            $_SESSION['username'] = $email;
        }
				return $row;
    }

		public static function Add($email,$pass)
    {
        require_once("connection.php");
        $email = mysqli_real_escape_string($connect, $email);
        $pass = mysqli_real_escape_string($connect, $pass);
        $sql = "INSERT INTO users (username, password) VALUES ('$email', '$pass');";
				if($row =mysqli_query($connect, $sql)){
					echo "Signed up successfully";
				}
				else{
					echo "username already exists";
				}
				return $row;
    }

		public function feedView(){
			require_once("connection.php");
			$sql = "SELECT * FROM apps";
			$result = mysqli_query($connect, $sql);
			$arr=[];
			while ($row = $result->fetch_assoc()){
					$arr[]=$row;
			}
			return $arr;
	}

	/**
	 * Summary of appView
	 * @param mixed $post_id
	 * @return array|bool|null
	 */
	public function appView($post_id){
		echo "hii";
		require_once("connection.php");
		$sql = "SELECT * FROM apps WHERE app_id='$post_id' ";
		$result = mysqli_query($connect, $sql);
		$row = $result->fetch_assoc();
		return $row;
	}
}
?>