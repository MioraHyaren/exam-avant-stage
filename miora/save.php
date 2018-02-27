<?php 
	$serveur="localhost";
	$login="root";
	$pass="";
	$dbname = "my_app";

    $name=$_POST["nam"]
    $pseudo=$_POST["pseudo"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];

	try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$login, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare( "INSERT INTO user_app(name_user,user_pseudo,user_email,user_password) VALUES (:nam,:pseudo, :email, :pass)"
        $sql->bindParam(':nam', $name);
        $sql->bindParam(':pseudo', $pseudo);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':pass', $pass);
        $sql->execute();

			echo "<a href='index.php'>Msuivre a</a>";

	}
	catch(PDOException $erreur){
			echo "ECHEC : " .$erreur -> getMessage();
	}

 ?>