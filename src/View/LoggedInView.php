<?php 

	class LoggedInView{
	
	private $message;
	
	//Lyssnar efter om anv�ndaren loggar ut..
	public function userLogOut(){
	if(isset($_GET['logOut'])){
		return true;
			}else{return false;}
	}
	
	//Visar meddelande
	 public function displayMessage($message){
		$this->message = $message;
	}
	
	//Visar utloggningsmeddelande
	public function logOutMessage(){
		return $this->message = "Du �r nu utloggad";
	}	
	
	//Vad som ska visas n�r man �r inloggad.
	public function LoggedInView(){
		$ret = 
		
		"<h2>Laborationskod f�r jh222vp</h2>
		<h3>Admin �r inloggad</h3>
		<p>$this->message</p>
		<a href='?logOut'>Logga ut</a>";
		return $ret;
	}
}
