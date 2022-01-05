<?php

	function createContato($connect, $data){

	  	$stmt = $connect->prepare("INSERT INTO contato (nome, telefone, email, data, hora) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $data['nome'], $data['telefone'], $data['email'], $data['data'], $data['hora']);
		$stmt->execute();
		$stmt->close();


		/*require("../vendor/phpmailer/phpmailer/src/PHPMailer.php");
		require("../vendor/phpmailer/phpmailer/src/SMTP.php");

		$mail = new PHPMailer\PHPMailer\PHPMailer();    			

        // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = '';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = '';                 // SMTP username
	    $mail->Password = '';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('contato@barsystem.com.br', 'Barsystem');
	    $mail->addAddress('rodolfowebdesigner@gmail.com');


	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Barsystem - Solicitação de teste '.$data['data'].' hora '.$data['hora'];
	    $mail->Body = '<b>Nova solicitação de teste:</b> <br/><br/> 
		<b>Nome:</b> '.$data['nome'].'<br/><br/>
		<b>Email:</b> '.$data['email'].'<br/><br/>		
		<b>Telefone:</b> '.$data['telefone'].'<br/><br/>';
	    $mail->AltBody = '';

	    $mail->send(); */

	}