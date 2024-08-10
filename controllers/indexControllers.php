<?php
namespace Controllers;
use MVC\Router;

class indexControllers{
    public static function login(Router $router){
        $router->render("web/login", []);
    }
    public static function index(Router $router){
        $nombreP = $_SESSION['user'];
    $auth = estaAutenticado();

    if(!$auth){
        header('Location: /login');
    } 
 
        $authh = $_SESSION['login'];

        $router->render("web/index", [
            "authh" => $authh,
            "titulo" => "Analytics Of Organ Donors",
            'nombre' => $nombreP
        ]);
    }

    public static function dashboard_1(Router $router){
        $auth = estaAutenticado();

        if(!$auth){
            header('Location: /login');
        } 
     
        $authh = $_SESSION['login'];
        $router->render("web/dashboard1", [
            "authh" => $authh,
            "titulo" => "Relación de Hombres y mujeres por la condición de NO ESPECIFICACIÓN de donación de organos"
        ]);
        
    }

    public static function dashboard_2(Router $router){
        $auth = estaAutenticado();

        if(!$auth){
            header('Location: /login');
        } 
     
            $authh = $_SESSION['login'];
        $router->render("web/dashboard2", [
            "authh" => $authh,
            "titulo" => "Relación de personas no donantes"
        ]);
    }

    public static function dashboard_3(Router $router){
        $auth = estaAutenticado();

        if(!$auth){
            header('Location: /login');
        } 
     
            $authh = $_SESSION['login'];
        $router->render("web/dashboard3", [
            "authh" => $authh,
            "titulo" => "Relación de hombres por Condición de donacion"
        ]);
    }

    public static function dashboard_4(Router $router){
        $auth = estaAutenticado();

        if(!$auth){
            header('Location: /login');
        } 
     
            $authh = $_SESSION['login'];
        $router->render("web/dashboard4", [
            "authh" => $authh,
            "titulo" => "Relación de Mujeres y hombre por condición de donacion"
        ]);
    }

    public static function dataColombia(Router $router){
        $auth = estaAutenticado();

        if(!$auth){
            header('Location: /login');
        } 
     
            $authh = $_SESSION['login'];
        $router->render("web/dataColombia", [
            "authh" => $authh,
            "titulo" => "Web Scraping - Colombia"
        ]);
    }

    public static function usuario(Router $router){
        $router->render("web/Usuario", []);
    }

    public static function cerrarSesion(Router $router){
        $router->render("web/CerrarSesion", []);
    }

    public static function contactanos(Router $router){
        $auth = estaAutenticado();

        if(!$auth){
            header('Location: /login');
        } 
     
            $authh = $_SESSION['login'];
        $router->render("web/contactanos", [
            "authh" => $authh,
            "titulo" => "Contáctanos"
        ]);
    }
}
