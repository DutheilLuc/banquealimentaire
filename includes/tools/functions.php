<?php

if (!function_exists('connexion')) {

    function connexion()
    {
        $host = 'localhost';             //myHostAddress
        $dbuser = 'root';     //myUserName
        $dbpw = '';     //myPassword
        $dbname = 'tonton';     //myDatabase

        $pdoReqArg1 = "mysql:host=". $host .";dbname=". $dbname .";";
        $pdoReqArg2 = $dbuser;
        $pdoReqArg3 = $dbpw;

        try {

            $db = new \PDO($pdoReqArg1, $pdoReqArg2, $pdoReqArg3);
            $db->setAttribute(\PDO::ATTR_CASE, \PDO::CASE_LOWER);
            $db->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
            $db->exec("SET NAMES 'utf8'");

            return $db;

        } catch(\PDOException $e) {

            $errorMessage = $e->getMessage();
            echo $errorMessage;
        }
    }
}

if (!function_exists('get_page')) {

    function get_page($uri, $segments)
    {
        if (!isset($segments[2])) {

            switch ($uri) {

                case '/':
                    ob_start();
                    include __REALPATH__ . '/includes/map.php';
                    $content = ob_get_clean();
                    break;

                case '/contact':
                    ob_start();
                    include __REALPATH__ . '/includes/contact.php';
                    $content = ob_get_clean();
                    break;

                case '/a-propos':
                    ob_start();
                    include __REALPATH__ . '/includes/about.php';
                    $content = ob_get_clean();
                    break;

                case '/partenaires':
                    ob_start();
                    include __REALPATH__ . '/includes/partners.php';
                    $content = ob_get_clean();
                    break;

                case '/benevoles':
                    ob_start();
                    include __REALPATH__ . '/includes/volunteers.php';
                    $content = ob_get_clean();
                    break;

                case '/coordinates':
                    ob_start();
                    include __REALPATH__ . '/includes/coordinates.php';
                    $content = ob_get_clean();
                    break;

                default:
                    define('ERROR_404', true);
                    ob_start();
                    include __REALPATH__ . '/includes/404.php';
                    $content = ob_get_clean();
                    http_response_code(404);
                    break;
            }
        }

        return $content;
    }
}


if (!function_exists('getMessage')) {

    function getMessage()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];


            try {

                $db = connexion();
                $query = "INSERT INTO `messages`(`nom`, `prenom`, `email`, `phone`, `message`) VALUES (:nom, :prenom, :email, :phone, :message)";
                $stt = $db->prepare($query);
                $stt->bindValue(':nom', $nom, PDO::PARAM_STR);
                $stt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                $stt->bindValue(':email', $email, PDO::PARAM_STR);
                $stt->bindValue(':phone', $phone, PDO::PARAM_STR);
                $stt->bindValue(':message', $message, PDO::PARAM_STR);
                $stt->execute();

                print_r('Le message a bien été envoyé !') ;

            } catch(PDOException $e) {

                print_r('Vous avez déjà une demande en cours ...') ;
            }
        }
    }
}


if (!function_exists('getPartners')) {

    function getPartners()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['siret']) ) {

            $name = $_POST['name'];
            $city = $_POST['city'];
            $address = $_POST['address'];
            $siret = $_POST['siret'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $addressPartner = urlencode($_POST['address']);
            $cityPartner = urlencode($_POST['city']);
            $url = "https://api.mapbox.com/geocoding/v5/mapbox.places/" . $addressPartner . $cityPartner . "%20france.json?proximity=-0.5800364,44.841225&access_token=pk.eyJ1IjoibHVjZHV0IiwiYSI6ImNra2U5dHlhODBqNjgyb255MDh6dW53OTIifQ.ZiHur34w_RkVa7dk9zea5g";
            $raw = file_get_contents($url);
            $json = json_decode($raw);
            $dataLong = $json->{'features'}[0]->{'geometry'}->{'coordinates'}[0];
            $dataLat = $json->{'features'}[0]->{'geometry'}->{'coordinates'}[1];


            try {

                $db = connexion();
                $query = "INSERT INTO `partners`(`name`, `city`, `address`, `siret`, `phone`, `email`, `longitude`, `latitude`) VALUES (:name, :city, :address, :siret, :phone, :email, :longitude, :latitude)";
                $stt = $db->prepare($query);
                $stt->bindValue(':name', $name, PDO::PARAM_STR);
                $stt->bindValue(':city', $city, PDO::PARAM_STR);
                $stt->bindValue(':address', $address, PDO::PARAM_STR);
                $stt->bindValue(':siret', $siret, PDO::PARAM_STR);
                $stt->bindValue(':phone', $phone, PDO::PARAM_STR);
                $stt->bindValue(':email', $email, PDO::PARAM_STR);
                $stt->bindValue(':longitude', $dataLong, PDO::PARAM_STR);
                $stt->bindValue(':latitude', $dataLat, PDO::PARAM_STR);
                $stt->execute();

                print_r('Le formulaire a bien été envoyé !') ;


            } catch(PDOException $e) {

                print_r('Vous avez déjà une demande en cours ...') ;
            }
        }
    }
}

if (!function_exists('getVolunteers')) {

    function getVolunteers()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['firstname']) ) {

            $partner = $_POST['partner'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];


            try {

                $db = connexion();
                $query = "INSERT INTO `volunteers`(`partner`, `firstname`, `lastname`, `phone`, `email`) VALUES (:partner, :firstname, :lastname, :phone, :email)";
                $stt = $db->prepare($query);
                $stt->bindValue(':partner', $partner, PDO::PARAM_STR);
                $stt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
                $stt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
                $stt->bindValue(':phone', $phone, PDO::PARAM_STR);
                $stt->bindValue(':email', $email, PDO::PARAM_STR);
                $stt->execute();

                print_r('Le formulaire a bien été envoyé !') ;

            } catch(PDOException $e) {

                print_r('Une erreur s\'est produite, veuillez réessayer...') ;
            }
        }
    }
}



if (!function_exists('getAllPartners')) {

    function getAllPartners()
    {
        $db = connexion();
        $query = "SELECT * FROM partners";
        $stt = $db->prepare($query);
        $stt->execute();
        $result = $stt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}



