<?php 
	include "db_config.php";

	class User{
		protected $db;
		public function __construct(){
			$this->db = new DB_con();
			$this->db = $this->db->ret_obj();
		}
		
		/*** for registration process ***/
		
		public function reg_user($name, $id, $level, $dep,$phnno,$email,$password){
			//echo "k";
			
			$password = md5($password);

			//checking if the username or email is available in db
			$query = "SELECT * FROM user_information WHERE name='$name' OR email='$email'";
			
			$result = $this->db->query($query) or die($this->db->error);
			
			$count_row = $result->num_rows;
			
			//if the username is not in db then insert to the table
			
			if($count_row == 0){
				$query = "INSERT INTO user_information SET name='$name', id='$id', level='$level',dep='$dep',phnno='$phnno',email='$email',password='$password'";
				
				$result = $this->db->query($query) or die($this->db->error);
				
				return true;
			}
			else{return false;}
			
			
			}
			
			
	/*** for login process ***/
		public function check_login($lid, $lpassword){
        $password = md5($lpassword);
		
		$query = "SELECT si from user_information WHERE id='$lid' and password='$password'";
		
		$result = $this->db->query($query) or die($this->db->error);

		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;
		
		if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            $_SESSION['si'] = $user_data['si'];
	            return true;
	        }
			
		else{return false;}
		

	}

	
	
	
	public function get_fullname($si){
		$query = "SELECT name FROM user_information WHERE si = $si";
		
		$result = $this->db->query($query) or die($this->db->error);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['name'];
		
	}




	
	
	/*** starting the session ***/
	public function get_session(){
	    return $_SESSION['login'];
	    }

	public function user_logout() {
	    $_SESSION['login'] = FALSE;
		unset($_SESSION);
	    session_destroy();
	    }




	   public function check_login1($lname, $lpassword){
		
		$query = "SELECT * from admin_information WHERE name='$lname' and password='$lpassword'";
		
		$result = $this->db->query($query) or die($this->db->error);

		
		$row = $result->fetch_array(MYSQLI_ASSOC);

		if($row['name'] == $lname && $row['password'] == $lpassword){
			return true;
        
		}
		else{
			return false;
		}
		

	}	

	public function check_login2($lname, $lpassword){
		
		$query = "SELECT * from staff_information WHERE name='$lname' and password='$lpassword'";
		
		$result = $this->db->query($query) or die($this->db->error);
		$row = $result->fetch_array(MYSQLI_ASSOC);


		if($row['name'] == $lname && $row['password'] == $lpassword){
			return true;
		}
		else{
			return false;
		}
		

	}
	public function food_add($food_name, $Product_id,  $amount){
		
		$query = "INSERT INTO tbl_product(name, code,price) VALUES ('$food_name' , '$Product_id',  '$amount')";
		
		$result = $this->db->query($query) or die($this->db->error);

		if(!empty($food_name) && !empty($Product_id)  && !empty($amount)){
			return true;
        
		}
		else{
			return false;
		}
		

	}

	public function food_remove($r_code,$rf_name){
		
		$query = "DELETE FROM tbl_product WHERE code='$r_code' AND name='$rf_name'";
		
		$result = $this->db->query($query) or die($this->db->error);


		if(!empty($r_code) &&  !empty($rf_name)){
			return true;
		}
		else{
			return false;
		}
		

	}
	public function food_update($u_name,$u_price){
		
		$query =  "UPDATE tbl_product SET price='$u_price' WHERE name='$u_name' LIMIT 1";
		
		$result = $this->db->query($query) or die($this->db->error);


		if(!empty($u_name) &&  !empty($u_price)){
			return true;
		}
		else{
			return false;
		}
		

	}
}