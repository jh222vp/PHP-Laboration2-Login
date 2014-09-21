<?php 

	class LoginView{
	
	private $username;
	private $password;
	private $message;
	
	public function ViewLogin(){
	$returnViewLogInHTML = "<h2>Laborationskod f�r jh222vp</h2>
							<h3>Du �r inte inloggad</h3>
							<p>$this->message</p>
							<form method='post' action='?Login'>
							Anv�ndarnamn: <input type='text' name='username'>
							L�senord: <input type='password' name='password'>
							H�ll mig inloggad <input type='checkbox' name='check'>
							<input type='submit' value='Logga in' name='submit'>
							</form>";
							
	return $returnViewLogInHTML;
	}
	
	//Funktion som kontrollerar om anv�ndarnamn och l�senord �r satt
	//samt sparar unden dessa..
	public function getInformationFromUser(){
	$usernameValue = $_POST['username'];
	$passwordValue = $_POST['password'];
	
	if(isset($usernameValue)){
	$this->username = $_POST['username'];
	}
	if(isset($passwordValue)){
	$this->password = $_POST['password'];
		}
	}
	
	//Funktion som lyssnar/h�mtar knapptrycket "login"
	public function getSubmit(){
		if(isset($_POST['submit'])){
			return true;
		}else{
			return false;}
	}
	
	//S�tter username i den privata variabeln ovan
	public function getUsername(){
	return $this->username;
	}
	
	//S�tter password i den privata variabeln ovan
	public function getPassword(){
	return $this->password;
	}
	
	//Kontrollerar om n�got av f�lten �r tomma och sparar sedan undan felmeddelandet
	//i message variabeln som tillslut skrivs ut.
	public function logInFailed($username, $password){
	if($username === ""){
		$this->message = "Anv�ndarnamn saknas";}
	else if($password === ""){
		$this->message = "L�senord saknas";}
	else{
		$this->message = "Felaktigt anv�ndarnamn och/eller l�senord";}
	}
	
	//Meddelande som talar om att inloggningen lyckades.
	public function LogInWasSuccessful(){
	return $this->message = "Inloggning lyckades";
	}
	
	//S�tter meddelandet
	public function displayMessage($message){
	$this->message = $message;
	}
	
	public function stayLoggedIn(){
		if(isset($_POST['check'])){
			return true;
		}else{return false;}
	}	
}