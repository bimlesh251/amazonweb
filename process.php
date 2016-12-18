<?php
if(isset($_POST) && $_POST['submit'] !=""){
	// send email
	$message = $_POST['message']."---".$_POST['input-name'];
	$to = "bimlesh25@gmail.com,sharma.kanika14@gmail.com";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From: <bimlesh25@hotmail.com>' . "\r\n";
	$subject = "Website Wishes";
	
	if(mail($to,$subject,$message,$headers)){
		echo "<h2>Thank you for your lovely wishes. </h2>";
		// insert into database
		
		$conn = mysql_connect('mysql8.000webhost.com','a1283025_wishes','zxcvbnm@1234');
		$res = mysql_select_db('a1283025_wishes',$conn);
		
		$sql = "INSERT INTO wishes(name,message) values('".mysql_real_escape_string($_POST['input-name'])."','".mysql_real_escape_string($_POST['message'])."')";
		mysql_query($sql);
	}
}
?>
<script>
setTimeout(location.href='http://bimleshkanika.com', '8000');
</script>
