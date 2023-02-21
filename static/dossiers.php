<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "laravel-crm";
$id = '';

$con = mysqli_connect($host, $user, $password,$dbname);

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
//$input = json_decode(file_get_contents('php://input'),true);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


switch ($method) {
    case 'GET':
      $id = $_GET['id'];
      $sql = "select * from dossier".($id?" where id=$id":'');
      break;
    case 'POST':

      $nom_dossier = $_POST["nom_dossier"];
      $raison_sociale = $_POST["raison_sociale"];
      $forme_juridique = $_POST["forme_juridique"];
      $nb_associes = $_POST["nb_associes"];
      $capital_social = $_POST["capital_social"];

      $adress_siege_social = $_POST["adress_siege_social"];
      $code_postale = $_POST["code_postale"];
      $ville= $_POST["ville"];
      $numero_tel = $_POST["numero_tel"];
      $adress_mail = $_POST["adress_mail"];
      $siret = $_POST["siret"];
      $franchise_en_base_tva = $_POST["franchise_en_base_tva"];
      $numero_tvaintracommunaitre = $_POST["numero_tvaintracommunaitre"];
      $type_imposition = $_POST["type_imposition"];
      $regime_micro = $_POST["regime_micro"];
      $categorie_imposition = $_POST["categorie_imposition"];
      $regime_independants = $_POST["regime_independants"];
      $nom_gerant = $_POST["nom_gerant"];
      $prenom_gerant = $_POST["prenom_gerant"];
      $id= 0 ;

      $sql = "insert into `dossier` (nom_dossier, raison_sociale, forme_juridique, capital_social, nb_associes , adress_siege_social , code_postale , ville , numero_tel , adress_mail , siret , franchise_en_base_tva , numero_tvaintracommunaitre , type_imposition , regime_micro,categorie_imposition ,regime_independants ,nom_gerant,prenom_gerant) values ($nom_dossier, $raison_sociale, $forme_juridique, $capital_social, $nb_associes , $adress_siege_social , $code_postale , $ville , $numero_tel , $adress_mail , $siret , $franchise_en_base_tva , $numero_tvaintracommunaitre , $type_imposition , $regime_micro, $categorie_imposition ,$regime_independants ,nom_gerant,prenom_gerant)";

      break;
}

// run SQL statement
$result = mysqli_query($con,$sql);

// die if SQL statement failed
if (!$result) {
  http_response_code(404);
  die(mysqli_error($con));
}

if ($method == 'GET') {
    if (!$id) echo '[';
    for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
      echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }
    if (!$id) echo ']';
  } elseif ($method == 'POST') {
    echo json_encode($result);
  } else {
    echo mysqli_affected_rows($con);
  }

$con->close();
