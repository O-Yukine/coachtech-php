<!-- <?php
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        print "名前は" . $name . "ですね" . "<br/>";



        $gift = htmlspecialchars($_POST['gift'], ENT_QUOTES);
        print "ご希望の品は" . $gift . "ですね" . "<br/>";


        $amount = htmlspecialchars($_POST['amount'], ENT_QUOTES);
        print "ご注文数は" . $amount . "ですね";


        ?> -->

<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
echo "Welcome" . $name;

$mail = htmlspecialchars($_POST['mail'], ENT_QUOTES);
echo "Your email adress is " . $mail;
?>