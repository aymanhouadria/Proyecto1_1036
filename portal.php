<?php
    //view_form.php

/**
 * * Descripción: Ejemplo de proyecto
 * *
 * * 
 * *
 * * @author  Rafael Berlanga
 * * @copyright 2020 Rafa B.
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 1

 * */

session_start();

include(dirname(__FILE__)."/includes/ejecutarSQL.php");
include(dirname(__FILE__)."/partials/header.php");
include(dirname(__FILE__)."/partials/menu.php");
include(dirname(__FILE__)."/includes/conector_BD.php");
include(dirname(__FILE__)."/includes/table2html.php");

include(dirname(__FILE__)."/includes/registrar_usuario.php");
include(dirname(__FILE__)."/includes/encestar.php");
include(dirname(__FILE__)."/includes/tabla_cesta.php");
include(dirname(__FILE__)."/includes/eliminar_producto.php");
include(dirname(__FILE__)."/includes/registrar_producto.php");
include(dirname(__FILE__)."/includes/autentificar_usuario.php");


if (isset($_REQUEST['action'])) $action = $_REQUEST["action"];
else $action = "home";


$central = "Partials/centro.php";

switch ($action) {
    case "home":
        $central = "/partials/centro.php";
        break;
    case "login": 
        $central = "/partials/login.php"; //formulario login 
        break;
    case "do_login":
        $central = autentificar_usuario();
         //fijar $_SESSION["usuario"]
        break;

     case "salir":
        $_SESSION["usuario"] = NULL;
        $central = "/partials/centro.php";
         
        break;
    case "registrar_usuario":
        $central = "/partials/registro_usuario.php"; //formulario usuarios
        break;
    case "insertar_usuario":
        $central = registrar_usuario("clientes"); //tabla usuarios
        break;
    case "listar_productos":
        $central = table2html("productos"); //tabla productos
        break;
    case "registrar_producto":
        $central = "/partials/registro_producto.php"; //formulario producto
        break;
    case "insertar_producto":
        $central = registrar_producto("productos"); //tabla productos
        break;
    case "ver_cesta":
        $central = tabla_cesta("compra"); //cesta en $_SESSION["cesta"]
        break;
    case "add":
        $central = encestar("compra"); 
        break;
    case "delete":
        $central = eliminar_producto("compra"); //cesta en $_SESSION["cesta"]
        break;
    default:
        $data["error"] = "Accion No permitida";
        $central = "/partials/centro.php";
}

if ($central <> "") include(dirname(__FILE__).$central);

include(dirname(__FILE__)."/partials/footer.php");
?>