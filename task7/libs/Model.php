<?php 

class Model
{ 
	protected $arr = array('%TITLE%'=>'Contact Form', 
	'%ERROR_NAME%'=>'', '%ERROR_EMAIL%'=>'', '%WRONG_EMAIL%'=>'', '%ERROR_SUBJECT%'=>'',
	'%ERROR_MESSAGE%'=>'', '%NAME%'=>'', '%EMAIL%'=>'', '%SUBJECT%'=>'', '%MESSAGE%'=>'',
	'%SELECTED_OPTION1%' => '', '%SELECTED_OPTION2%' => '', '%SELECTED_OPTION3%' => '');
	
	public function getArray()
   {	    
		return $this->arr;	
   }
	
	public function checkForm()
	{	
		$valid = true;
			if ($_POST['submit']) {
			$name = trim($_POST['name']);
			if (strlen($name) != 0) { 
				$this->arr['%ERROR_NAME%'] = '';
				$this->arr['%NAME%'] = $name;
				} else {
					$this->arr['%ERROR_NAME%'] = 'Empty field';
					$this->arr['%NAME%'] = '';
					$valid = false;
			}

			$email = trim($_POST['email']);
			if (strlen($email) != 0) { 
				$this->arr['%ERROR_EMAIL%'] = '';	
				$this->arr['%EMAIL%'] = $email;
				
				if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
					$this->arr['%WRONG_EMAIL%'] = '';	
					$this->arr['%EMAIL%'] = $email;
				} else {
					$this->arr['%WRONG_EMAIL%'] = 'Wrong Email';
					$this->arr['%EMAIL%'] = $email;
					$valid = false;
				}
			} else {
					$this->arr['%ERROR_EMAIL%'] = 'Empty Field';
					$this->arr['%EMAIL%'] = '';
					$valid = false;
			}
						
			$subject = $_POST['subject'];
			if ($subject != 'Please select') { 
				$this->arr['%ERROR_SUBJECT%'] = '';	
				
				
					if ($subject == 1) {
					$this->arr['%SELECTED_OPTION1%'] = 'selected';
					} elseif ($subject == 2) {
					$this->arr['%SELECTED_OPTION2%'] = 'selected';
					} elseif ($subject == 3) {
					$this->arr['%SELECTED_OPTION3%'] = 'selected';
					}
				
				} else {
					$this->arr['%ERROR_SUBJECT%'] = 'Empty field';
					$valid = false;
				}
			
			$message = trim($_POST['message']);
			if (strlen($message) != 0) { 
				$this->arr['%ERROR_MESSAGE%'] = '';	
				$this->arr['%MESSAGE%'] = $message;
				} else {
					$this->arr['%ERROR_MESSAGE%'] = 'Empty field';
					$this->arr['%MESSAGE%'] = '';
					$valid = false;
				}
			}
		return $valid;
	}
	public function sendEmail()
	{
		$to = "labunskyi6@gmail.com"; 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$select = $_POST['subject'];
		$subject = "About " . $select;
		$ip = $_SERVER['REMOTE_ADDR'];
		date_default_timezone_set('Europe/Kiev');
		$date = date("Y-m-d H:i:s");
		$letter = "Good day! " . $name . " send the following: " . "\n\n" . $message . "\n\n" .
		"His email: " . $email . "\n" . "His ip: " . $ip . "\n" . "Local date: " . $date;
				
		$headers = "From: " . $name . " < " . $email . " >\n";
		mail($to, $subject, $letter, $headers);
		$this->arr['%NAME%'] = '';
		$this->arr['%EMAIL%'] = '';
		$this->arr['%SELECTED_OPTION1%'] = '';
		$this->arr['%SELECTED_OPTION2%'] = '';
		$this->arr['%SELECTED_OPTION3%'] = '';
		$this->arr['%MESSAGE%'] = '';
	}	
}
