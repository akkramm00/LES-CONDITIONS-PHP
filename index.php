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
echo "<br>";

// La différence entre "switch " et " match":
switch(2) {
  case 0 : 
  $result = 'Paul';
  break;
  case 1 : 
  $result = 'Marie';
  break;
  case 2 :
  $result = 'Jean';
}
echo $result;

echo "<br>";
// la meme instruction avec match :
echo match (2) {
  0 => 'Paul',
  1 => 'Marie',
  2 => 'Jean',
};

echo "<br>";
// Autre exemple avec l'instruction "match" :

echo match (5) {
  0 => 'continuer à travailler ',
  1 => 'faire les travaux',
  2 => 's\occuper des enfants',
  3 => 'aider les amis ',
  4 => 'partir en vacances',
  default => 'je ne sais pas quoi faire !'
};
echo "<br>";

//      Autre exemple de  "switch" && "match" :

//    switch:
$running = "Michel";
 switch ($running) {
   case "Paul":
   echo "Le vainqueur est Paul";
   break ;

   case "Michel":
   echo "le vainqueur est Michel";
   break;

   case "Pauline":
   echo "Le vainqueur est Pauline";
   break;

   default :
   echo "Nous ne connaissons pas le vainqueur de la course :";
 }
echo "<br>";

// la meme avce Match:
$running = "Paul";

echo match($running) {
  "Paul" => "le gagnant est Paul",
  "Michel" => "le gagnant est Michel",
  "Pauline" => " Le gagnant est Pauline",
  default => " Nous ne connaissons pas le gagnant", 
  
};
echo "<br>";

// example switch :
$day = "Jeudi";
switch($day) {
  case "Lundi":
  echo "Aujourd'hui c'est Lundi !";
  break;

  case "Mardi":
  echo "Aujourd'hui c'est Mardi !";
  break;

  case "Mercredi":
  echo "Aujourd'hui c'est Mercredi !";
  break;

  case "Jeudi":
  echo "Aujourd'hui c'est Jeudi !";
  break;

  case "Vendredi":
  echo "Aujourd'hui c'est Vendredi !";
  break;

  case "Samedi":
  echo "Aujourd'hui c'est Samedi !";
  break;

  case "Dimanche":
  echo "Aujourd'hui c'est Dimanche !";
  break;
  
  default:
  echo "nous ne connaissons pas le jour d'aujourd'hui !";
}

?> 


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>