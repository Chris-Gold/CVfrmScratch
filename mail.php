<?php
if (isset($_POST['submit'])){
  $obj = $_POST['obj'];
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $msg = $_POST['msg'];
  $to = "";
  $error = false;
  $header = "Email de ".$name." via l'adresse ".$mail;

  if (empty($obj) || empty($name) || empty($mail) || empty($msg)){
    echo "<span style='color:red;'>Merci de remplir tous les champs.</span>";
    echo $obj;
    $error = true;
  }
  elseif( !empty($obj) && !empty($name) && !empty($mail) && !empty($msg)){
    echo "<span style='color:green;'>Merci!!</span>";
  }

  switch ($obj){
    case "perso": $to = "ratsimbachris@hotmail.fr";
    break;
    case "pro": $to = "chris.ratsimba87@gmail.com";
    break;
    case "shake": $to = "shakednb@gmail.com";
    break;
    case "seuh": $to = "seuhkry@gmail.com";
    break;
  }
  mail($to, $obj, $msg, $header);
}
else {
  echo "ça va pas!";
}

?>
<script>
  var error = '<?php echo $error; ?>';

  if (error == false){
    $("#cont-obj, #cont-name, #cont-mail, #cont-msg").val("");
  }
</script>
