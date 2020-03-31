<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$site = $_POST['site'];
$cargo = $_POST['cargo'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_subject = "New Message from Scalte!";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Site: $site.\n"
                        "User cargo: $cargo.\n"
                            "User phone: $phone.\n"
                                "User Message: $message.\n";

$to = "henrique.ojeda@outlook.com";

mail($to,$email_subject,$email_body);
echo("Muito Obrigado! Em breve entraremos em contato ;)")

?>
