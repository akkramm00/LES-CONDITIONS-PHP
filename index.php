<html>
  <head>
    <title>les conditions PHP</title>
  </head>
  <body>
    <?php 
$sport= "football";
if($sport == "tennis"){
  echo "vous jouez au tennis";
}else if ($sport == "basketball") {
  echo "Vous jouez au rugby";
}elseif($sport == "football") {
  echo "Vous jouez au Football";
}else{
  echo "vous ne jouez à aucun de ces 3 sports !"."<br>";
}

// les conditions térnaires :
$age = 32 ;
$messageAge = ($age<=18) ? "Vous etes mineur." : "Vous etes majeur";
echo $messageAge ;
echo "<br>";

// test de l'age :
$age =10;
if($age>= 18){
  echo "il est majeur";
}else if( $age < 18 && $age>= 16) {
  echo "il est lycéen" ;
}else if($age< 16 && $age >= 11){ 
  echo "il est collégien";
}elseif( $age <11 && $age >= 3 ){
  echo " il est écolier ";
}else {
  echo "il est encore bébé";
}
echo "<br>";

// la structure switch :
$etudes = "sports";

switch ($etudes){
  case 'psychologie' :
  echo "Vous avez fait des etdes de psychologie";
  break;
  case 'philosophie' :
  echo "Vous avez fait des etdes de philosophie";
  break;
  case 'sports' :
  echo "Vous avez fait des etdes de sports";
  break;
  case 'medecines' :
  echo "Vous avez fait des etdes de medecines";
  break;
  case 'scientifiques' :
  echo "Vous avez fait des etudes de sciences";
  break;
  case 'litératures' :
  echo "vous avez fait des etudes de litératures";
  break;
  case 'Biologie':
  echo "Vous avez fait des etudes de biologie";
  break;
  default :
  echo "vous n'avez pas été loin dans vos études!";
}

?> 


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>