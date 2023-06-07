<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../../AFUMA/public/assets2/PHPMailer/Exception.php";
require "../../AFUMA/public/assets2/PHPMailer/PHPMailer.php";
require "../../AFUMA/public/assets2/PHPMailer/SMTP.php";


class MailController extends Controller
{
    public function mailIndex(Request $request){
        try{

            $errorMSG = "";
    
            // NAME
            if (empty($_POST["name"])) {
                $errorMSG = "Veuillez saisir votre nom ";
            } else {
                $name = $_POST["name"];
            }
    
    
            // EMAIL
            if (empty($_POST["email"])) {
                $errorMSG .= "Veuillez saisir votre email ";
            } else {
                $email = $_POST["email"];
            }
    
            // MSG SUBJECT
            if (empty($_POST["objet"])) {
                $errorMSG .= "Ecrivez votre sujet ";
            } else {
                $objet = $_POST["objet"];
            }
    
            // Phone Number
            if (empty($_POST["telephone"])) {
                $errorMSG .= "Veuillez saisir votre numéro de tél ";
            } else {
                $telephone = $_POST["telephone"];
            }
    
    
            // MESSAGE
            if (empty($_POST["message"])) {
                $errorMSG .= "Vous devez écrire votre message ";
            } else {
                $message = $_POST["message"];
            }
    
        
            // prepare email body text
           $data = [
                  'name' => $name,
                  'email' => $email,
                  'telephone' => $telephone,
                  'objet' => $objet,
                  'message' => $message,
                 ];
    
                Mail::send('email.contact_index_mail', compact('data'), function($message) use($data)
                {
                    $message->from($data['email'])
                            ->to('contact@afuma.org')
                            ->subject($data['objet']);
                                           
                }); 
                   

            return redirect('/')->with('flash_message_success','Email envoyé avec succès'); 
    
        } catch(\Throwable $th) {
      
            return redirect('/')->with('flash_message_error','Echec envoi Email');
        } 
    
     }

     public function mailTogo(Request $request){
        try{

            $errorMSG = "";
    
            // NAME
            if (empty($_POST["name"])) {
                $errorMSG = "Veuillez saisir votre nom ";
            } else {
                $name = $_POST["name"];
            }
    
    
            // EMAIL
            if (empty($_POST["email"])) {
                $errorMSG .= "Veuillez saisir votre email ";
            } else {
                $email = $_POST["email"];
            }
    
            // MSG SUBJECT
            if (empty($_POST["objet"])) {
                $errorMSG .= "Ecrivez votre sujet ";
            } else {
                $objet = $_POST["objet"];
            }
    
            // MESSAGE
            if (empty($_POST["message"])) {
                $errorMSG .= "Vous devez écrire votre message ";
            } else {
                $message = $_POST["message"];
            }
    
        
            // prepare email body text
           $data = [
                  'name' => $name,
                  'email' => $email,
                  'objet' => $objet,
                  'message' => $message,
                 ];
    
                Mail::send('email.contact_mail', compact('data'), function($message) use($data)
                {
                    $message->from($data['email'])
                            ->to('contact@afuma.org')
                            ->subject($data['objet']);
                                           
                }); 
                   

            return redirect('/')->with('flash_message_success','Email envoyé avec succès'); 
    
        } catch(\Throwable $th) {
      
            return redirect('/')->with('flash_message_error','Echec envoi Email');
        } 
    
     }

     public function mailEurope(Request $request){
     
        if(isset($_POST["send"])){
   
            $mail = new PHPMailer(true);
          try {
        
            // Configuration des paramètres SMTP
        $smtpHost = 'web53.lws-hosting.com';
        $smtpUsername = 'contact.eu@afuma.org';
        $smtpPassword = 'AFkodi3353@Tg@';
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUsername;
        $mail->Password = $smtpPassword;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        
        // Définir les détails de l'e-mail
        $mail->setFrom($_POST["email"]);
        $mail->addAddress('contact.eu@afuma.org');
        $mail->isHTML(true);
        
            $mail->Subject = $_POST["objet"];
        
            $body = "<strong>Nom :</strong> " . $_POST["name"] . "<br>";
            $body .= "<strong>Email :</strong> " . $_POST["email"] . "<br>";
            $body .= "<strong>Message : <br> </strong> " . $_POST["message"];
        
            $mail->Body = $body;
        
            $mail->send();
        
            return redirect('/')->with('flash_message_success','Email envoyé avec succès');

        } catch (\Throwable $th) {

            return redirect('/')->with('flash_message_error','Echec envoi Email');
        }
        }
        

     }
    
}
