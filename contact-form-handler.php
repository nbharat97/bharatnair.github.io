<? php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$subject = $POST['Message from website'];
		$email_from = $_POST['email'];
		
		$message = $_POST['message'];

		$to = "bharatmnair246@gmail.com";

		$headers = "From: ".$email_from;


		$email_body = "You have received an email from ".$name.".\n\n".$message;


		mail($to,$subject,$email_body,$headers);

header("Location: contact.html?mailsend");
}
?>