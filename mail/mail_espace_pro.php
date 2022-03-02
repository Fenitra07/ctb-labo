
<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        require_once '../parameters.php';
        require_once '../vendor/autoload.php';

        if (isset($_POST['objet_demande']) && isset($_POST['genre']) && isset($_POST['phone']) && isset($_POST['message'])) {
            $objet = $_POST['objet_demande'];
            $gender = $_POST['genre'];
            $gender = strlen($_POST['si_autre'])>0 ? $_POST['si_autre'] : $gender;
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            // destination mail
            $mailTo = PARAMS[$objet]?? exit();

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
                    ->setBody("<b>Objet :</b> ".$objet."<br>"."<b>Email : </b>".$email."<br>"."<b>Genre : </b>".$gender."<br>". "<b>Phone : </b>".$phone."<br>"."<b>Message :</b> ".$message."<br>", 'text/html')
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
