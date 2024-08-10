<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\indexControllers;
use MVC\Router;


$router = new Router();

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->get("/", [indexControllers::class ,"index"]);
$router->get("/login", [indexControllers::class ,"login"]);
$router->post("/login", [indexControllers::class ,"login"]);
$router->get("/user/dashboard1", [indexControllers::class ,"dashboard_1"]);
$router->get("/user/dashboard2", [indexControllers::class ,"dashboard_2"]);
$router->get("/user/dashboard3", [indexControllers::class ,"dashboard_3"]);
$router->get("/user/dashboard4", [indexControllers::class ,"dashboard_4"]);
$router->get("/user/dataColombia", [indexControllers::class ,"dataColombia"]);
$router->get("/Usuario", [indexControllers::class ,"usuario"]);
$router->get("/CerrarSesion", [indexControllers::class ,"cerrarSesion"]);
$router->get("/user/contactanos", [indexControllers::class ,"contactanos"]);
$router->comprobarRutas();