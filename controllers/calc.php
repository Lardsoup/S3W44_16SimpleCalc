<?php
$x = $_REQUEST["numberx"];
$y = $_REQUEST["numbery"];
$choice = $_REQUEST["choice"];

$result = 0;

//forsøg på class stuff
/*
$calca = new calculator($x, $y);
$result = choice($choice, $calca);
*/

$result = calculate($x, $y, $choice);

//forsøg på class stuff
/*
function choice($choice, $calca)
{
    switch ($choice)
    {
        case"add":
            return $calca->add;
            break;
        case"sub":
            return $x - $y;
            break;
        case"multi":
            return $x * $y;
            break;
        case"div":
            return $x / $y;
            break;
        default: return -1;
    }
}
*/

function calculate($x, $y, $choice)
{
    switch ($choice) {
        case"add":
            return $x + $y;
            break;
        case"sub":
            return $x - $y;
            break;
        case"multi":
            return $x * $y;
            break;
        case"div":
            return $x / $y;
            break;
        default: return -1;
    }
}

require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array('auto_reload' => true));
$template = $twig->loadTemplate('showtwig.html.twig');
$parametersToTwig = array("result" => $result);
echo $template->render($parametersToTwig);
?>
