<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ciudadanos;
class CiudadanosController extends Controller{

    public function cargarCiudadanos() {

        $ciudadanos = new Ciudadanos ();

        $datos['datos']= $ciudadanos->findAll();
        return view ('vista_ciudadanos',$datos);  
    }

}