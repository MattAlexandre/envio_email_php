<?php
// require './PHPMailer/PHPMailerAutoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/PHPMailer/src/Exception.php';
require 'vendor/phpmailer/PHPMailer/src/PHPMailer.php';
require 'vendor/phpmailer/PHPMailer/src/SMTP.php';


class Client{

    public function __construct($name, $email , $telephone , $mensage) {

        $this->name = $name;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->mensage = $mensage;

    }

    // classe de apresentação 
    // public function mensage(){
    //     echo(" ola $this->name , com email $this->email => ");
    // }

    public function email(){ // class de envio do email 

        
            // Configurações SMTPÍ
            $smtpPassword = 'senha'; // senha do email de envio
            $smtpHost = 'tsl://smtp.gmail.com'; // servidor do email 
            $smtpUsername = 'matteus.alexandre612@gmail.com'; // email do usuario
            $smtpPort = 587; // porta de envio

            // Destinatário e informações do e-mail
            $para = 'professor.alexandre612@gmail.com'; // email de destino 
            $assunto = ' envio compliance '; // titulo do email 
            $mensagem = $this->mensage; // mensagem no corpo do email

            // Instanciar um novo objeto PHPMailer
            $mail = new PHPMailer;

            // Configuração para usar SMTP - todas passadas por variaveis 
            $mail->isSMTP();
            $mail->Host = $smtpHost;
            $mail->Port = $smtpPort;
            $mail->SMTPAuth = true;
            $mail->Username = $smtpUsername;
            $mail->Password = $smtpPassword;    
            $mail->SMTPSecure = 'tls'; // Use 'ssl' se o seu servidor SMTP requer SSL

            // Configurações do e-mail
            $mail->setFrom($smtpUsername, 'matteus'); // email de envio e nome do portador do email
            $mail->addAddress($para); // endereço do destinatario
            $mail->Subject = $assunto; // titulo do email 
            $mail->Body = $mensagem; // mensagem do email 

            // testando valor varial de teste para confirmação de envio do email 
            // var_dump($mail->send());
            echo('<br>');

            // Tenta enviar o e-mail
            if ($mail->send()) {
                // imprimindo valores caso acerto no envio 
                echo 'E-mail enviado com sucesso para ' . $para .'<br>'; 
                echo'<br>';
                echo(" envio ficou: <br>

                       pessoa:
                       nome: $this->name <br>
                       telefone:  $this->telephone <br>
                       gmail: $this->email <br>
                       mensagem: $this->mensage <br>
                
                ");
            } else {
                // imprimindo valores caso erro no envio 
                echo 'Ocorreu um erro ao enviar o e-mail: ' . $mail->ErrorInfo . '  não recebeu o email';
                echo'<br>';
                echo(" caso envio : <br>

                       pessoa:
                       nome: $this->name <br>
                       telefone:  $this->telephone <br>
                       gmail: $this->email <br>
                       mensagem: $this->mensage <br>
                      
                ");
            }
    }
}

//pegando varial do forms 

$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$mensage = $_POST['mensage'];

//instanciando classe 
$client1 = new Client($name, $email , $telephone , $mensage);

$client1->email(); 

//chamando classe de mensagem 
// $client1->mensage();



// ?>
