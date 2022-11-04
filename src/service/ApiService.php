<?php


namespace Src\service;
require __DIR__."/../../vendor/autoload.php"; 

use Src\model\Arquitectura;
use Dotenv\Dotenv;
use Src\model\Imagen;

$dotenv = Dotenv::createImmutable(__DIR__."/../../");
$dotenv -> load();




define("URL",$_ENV['URL_BASE'].$_ENV['API_KEY']."&q=".$_ENV['BUSQUEDA']);




class ApiService{
    public function getImagen(): array{
        $imagenes=[];
        $datos =file_get_contents(URL);                 //ESTO PILLA EL ARCHIVO EN BRUTO
        $datosJson=json_decode($datos);                 //ESTO LOS DECODIFICA
        $datosImagen =$datosJson->hits;


        $cont=0;

        foreach($datosImagen as $objimagenes)
        {
            $imagenes[] = (new Imagen)
            ->setLikes($objimagenes->likes)
            ->setUser($objimagenes->user)
            ->setImagenURL($objimagenes->largeImageURL);
            if($cont==20)
            {
                break;
            }else
            {
                $cont++;
            }
        }

        return $imagenes;

    }




}