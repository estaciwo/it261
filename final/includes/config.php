<?php

ob_start(); // removes header errors until all PHP is processed?

// nov 27 addition
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$errors = array();

$success = 'You have successfully logged on!';

function myError($myFile, $myLine, $errorMsg) 
{
if(defined('DEBUG') && DEBUG) 
{
    echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
            die();
    } else {
        echo ' Houston, we have a problem!';
        die();
    }
        
    
}
    
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'login.php' : 
        $title = 'U.S. Public Transit';
        $body = 'home';
        $style = 'styles';
        break;

    case 'register.php' : 
        $title = 'U.S. Public Transit';
        $body = 'home';
        $style = 'styles';
        break;
        
    case 'index.php' : 
        $title = 'U.S. Public Transit';
        $body = 'home';
        $style = 'styles';
        break;

    case 'switch.php' : 
        $title = 'U.S. Public Transit';
        $body = 'home';
        $style = 'styles';
        break;

    case 'about.php' : 
        $title = 'U.S. Public Transit';
        $body = 'about inner';
        $style = 'styles';
        break;

    case 'cities.php' : 
        $title = 'U.S. Public Transit';
        $body = 'home';
        $style = 'styles';
        break;

    case 'city-info.php' : 
        $title = 'U.S. Public Transit';
        $body = 'home';
        $style = 'styles';
        break;

    case 'contact.php' : 
        $title = 'U.S. Public Transit';
        $body = 'contact inner';
        $style = 'styles';
        break;

    case 'thx.php' : 
        $title = 'U.S. Public Transit';
        $body = 'thx';
        $style = 'styles';
        break;
    
}

// nu_navigation!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'switch.php' => 'Switch',
    'cities.php' => 'Cities',
    'contact.php' => 'Contact',
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a style="color:#f5a52c; font-weight:bold;" href="'.$key.'">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a style="color:#59deff;" href="'.$key.'">'.$value.'</a></li>';
        }
    } //end foreach
    return $my_return;
} // end function

// beginning of switch for homework 3!
date_default_timezone_set('America/Los_Angeles');
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday' : 
        $weekday = 'Sunday';
        $city = 'San Francisco';
        $organization = 'BART';
        $pic = 'bart.jpg';
        $alt = 'BART train';
        $content = 'Bay Area Rapid Transit (BART) is the seventh-busiest heavy rail rapid transit system in the United States.';
        break;

    case 'Monday' : 
        $weekday = 'Monday';
        $city = 'Minneapolis';
        $organization = 'METRO Transit';
        $pic = 'minne.jpg';
        $alt = 'Minneapolis light rail train';
        $content = 'METRO is a transit network in Minnesota serving the cities of Minneapolis and Saint Paul. The system consists of two light rail lines (Blue and Green Lines) and five bus rapid transit (BRT) lines (Orange Line, Red Line, A, C, and D Lines).';
        break;

    case 'Tuesday' : 
        $weekday = 'Tuesday';
        $city = 'Tampa';
        $organization = 'HART';
        $pic = 'tampa.jpg';
        $alt = 'Tampa HART bus';
        $content = 'Hillsborough Area Regional Transit (HART) provides public transportation for Hillsborough County, Florida. The agency provides fixed-route local and express bus service, door-to-door paratransit service, flex-route neighborhood connector service, a lightened version of bus rapid transit, and manages the TECO Line Streetcar system.';
        break;

    case 'Wednesday' : 
        $weekday = 'Wednesday';
        $city = 'Washington, D.C.';
        $organization = 'WMATA';
        $pic = 'wmata.jpg';
        $alt = 'WMATA subway';
        $content = 'The Washington Metropolitan Area Transit Authority (WMATA) comprises Metrorail, which serves 98 stations and has 128 miles of track; and Metrobus, which serves the nation\'s capital 24 hours a day, seven days a week with 1,500 buses. Metrorail and Metrobus serve a population of approximately 4 million within a 1,500-square mile jurisdiction. Metro began its paratransit service, MetroAccess, in 1994; it provides about 2.3 million trips per year.';
        break;
            
    case 'Thursday' : 
        $weekday = 'Thursday';
        $city = 'Tucson';
        $organization = 'Sun Tran';
        $pic = 'tucs.jpg';
        $alt = 'Tucson Sun Tran light rail';
        $content = 'Sun Tran is the public transit system serving the city of Tucson, Arizona. In 2022, the system had 15,717,100 rides, or about 57,500 per weekday as of the third quarter of 2023. 100% of the fleet utilizes clean-burning fuels, such as compressed natural gas (CNG), biodiesel, and hybrid technologies. In addition to more than 40 bus routes, the system also includes the Sun Link modern streetcar line.';
        break;

    case 'Friday' : 
        $weekday = 'Friday';
        $city = 'Fargo';
        $organization = 'MATBUS';
        $pic = 'fargo.jpg';
        $alt = 'Fargo MATBUS bus';
        $content = 'MATBUS (Fargo Moorhead Metro Area Transit) is a public transport bus system serving the Fargo, North Dakota and Moorhead, Minnesota Metropolitan Area.';
        break;

    case 'Saturday' : 
        $weekday = 'Saturday';
        $city = 'Seattle';
        $organization = 'Link Light Rail';
        $pic = 'seatt.jpg';
        $alt = 'Seattle light rail';
        $content = 'Link light rail is a light rail rapid transit system serving the Seattle metropolitan area. It consists of two non-connected lines: the 1 Line in King County, and the T Line in Pierce County. In 2022, the system had a ridership of 23.9 million, or about 84,500 per weekday as of the third quarter of 2023, primarily on the 1 Line. Trains run at frequencies of 6 to 24 minutes.';
        break;
}

