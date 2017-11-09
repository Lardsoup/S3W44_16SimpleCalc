<?php
$x = $_REQUEST["numberx"];
$y = $_REQUEST["numbery"];
$choice = $_REQUEST["choice"];

$result = 0;

switch($choice)
{
    case"add": $result = $x + $y;
        break;
    case"sub": $result = $x - $y;
        break;
    case"multi": $result = $x * $y;
        break;
    case"div": $result = $x / $y;
        break;
}

require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array('auto_reload' => true));
$template = $twig->loadTemplate('showtwig.html.twig');
$parametersToTwig = array("result" => $result);
echo $template->render($parametersToTwig);
?>
