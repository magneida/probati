
<?php 
 
  if(isset($_POST['envoyer']))
    {
        $nom     =  $_POST['nom'];
        $email   =  $_POST['email'];
        $phone   =  $_POST['phone'];
        $sujet   =  $_POST['sujet'];
        $service   =  $_POST['service'];
        $message =  $_POST['message'];
       

      $destinataire = "info@brainstrategicconsulting.com";

        // Sujet de l'email
        $sujet = "Nouveau message de contact de  $sujet";

        // En-têtes de l'email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Corps de l'email
        $corps_message = "Nom: $nom\n";
        $corps_message .= "Email: $email\n";
        $corps_message .= "phone: $phone\n";
        $corps_message .= "subject: $sujet\n";
        $corps_message .= "service: $service\n";
        $corps_message .= "Message:\n$message";

        // Envoi de l'email
        $mail_success = mail($destinataire, $sujet, $corps_message, $headers);

        if ($mail_success) {
            $ida="<p class='alert alert-success'>Votre message a été envoyé avec succès. Nous vous contacterons bientôt.</p>";
            header("location:contact.php?id=".$ida);
        } else {
             $id="<p class='alert alert-danger'> Erreur lors de l'envoi du message. Veuillez réessayer.</p>";
            header("location:contact?id=".$id);
            
        }
    }
            

?>