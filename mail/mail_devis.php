
<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        require_once '../parameters.php';
        require_once '../vendor/autoload.php';

        if (isset($_POST['laboratoire']) && isset($_POST['genre']) && isset($_POST['telephone']) && isset($_POST['message']) && isset($_POST['taux_pec']) && isset($_POST['assurance_pec'])
            && isset($_POST['prise_en_charge'])
        ) {
            // traitement file
            $targetDir = "../uploads/";
            $targetFile = $targetDir . basename($_FILES["fichier"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

            // verifier extension file
            if(!in_array($imageFileType, ['png','jpg','jpeg','gif','pdf'])) {
                header('Content-type: application/json');
                echo json_encode(['message' => "Type de fichier invalide. Type accepté ['png','jpg','jpeg','gif','pdf']"]);
                exit();
            }
            //verifier size
            if ($_FILES["fichier"]["size"] > 500000) {
                header('Content-type: application/json');
                echo json_encode(['message' => "Votre fichier est trop large"]);
                exit();
            }
            // save file
            if(!move_uploaded_file($_FILES["fichier"]["tmp_name"], $targetFile)) {
                header('Content-type: application/json');
                echo json_encode(['message' => "Impossible de télécharger le fichier"]);
                exit();
            }

            $objet = "Demande de devis";
            $laboratoire = $_POST['laboratoire'];
            $gender = $_POST['genre'];
            $priseCharge = $_POST['prise_en_charge'];
            $assurancePec = $_POST['assurance_pec'];
            $tauxPec = $_POST['taux_pec'];
            $phone = $_POST['telephone'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // destination mail
            $mailTo = PARAMS[$laboratoire]?? exit();

        // Create the Transport
            try {

                $transport = (new Swift_SmtpTransport(PARAMS['mailer_host'], PARAMS['mailer_port']))
                    ->setUsername(PARAMS['mailer_user'])
                    ->setPassword(PARAMS['mailer_password'])
                ;
        // Create the Mailer using your created Transport
                $mailer = new Swift_Mailer($transport);

            // Create a message
                $message = (new Swift_Message(("$email ($objet) - ESPACE PRO")))
                    ->setFrom([PARAMS['sender'] => 'ctb-labo.mg'])
                    ->setTo([$mailTo])
                    ->setBody("<b>Objet :</b> ".$objet."<br>".
                        "<b>Email : </b>".$email."<br>".
                        "<b>Genre : </b>".$gender."<br>".
                        "<b>Phone : </b>".$phone."<br>".
                        "<b>Laboratoire : </b>".strtoupper($laboratoire)."<br>".
                        "<b>Prise en charge :</b> ".$priseCharge."<br>".
                        "<b>Assurance :</b> ".$assurancePec."<br>".
                        "<b>Taux :</b> ".$tauxPec."<br>".
                        "<b>Message :</b> ".$message."<br>"

                        ,'text/html')
                    ->attach(Swift_Attachment::fromPath($targetFile));
                ;
                $mailer->send($message);

                header('Content-type: application/json');
                echo json_encode(['message' => "ok"]);
            } catch (Exception $exception) {
                var_dump($exception);
            }

      }

  }
 ?>
