<?	
	session_start();
	if($_GET["send"] == 1){
		echo "Вы успешно отравили сообщение на email: ".$_SESSION['to'];
	}
?>