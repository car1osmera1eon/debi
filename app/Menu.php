<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; 
use App\Menu;
use App\Sistema;
use App\Modulo;
use App\Submodulo;
use App\Perfill_usuario;


class Menu extends Model
{
    //
    //protected $perfiles;

    public function sqlPerfiles(){
        $perf_usu = DB::table('perfil_usuarios')
                     ->select('perfil_id')
                     ->where('estado', '<>', 0)
                     ->where('usuario_id', Auth::user()->id)
                     ->distinct()->get();
        return $perf_usu;
    }

    public static function smenu()
    {
        $cmenu = new Menu();
        $menu = array(); $perf_usu = [];
        $perf_usu = $cmenu->sqlPerfiles();

        if($perf_usu != '[]'){
            $perfiles = [];
            // foreach($perf_usu as $pu){
            //    $perfiles = $pu->perfil_id;
            // }
            $sistemas[] = $cmenu->getSistemas($perf_usu);
            $sistemas = array_unique($sistemas, SORT_REGULAR);
            //$sistemas = array_unique($sistemas, SORT_REGULAR);

            if(count($sistemas)>0){ 
                (array) $menu = $cmenu->getMenuModulos($sistemas);
                //dd($menu);
            }
        }

        return $menu;
    }

    

    public function perfiles(){
        $cmenu = new Menu();
        $perf_usu = $cmenu->sqlPerfiles();

        if($perf_usu != '[]'){
            $perfiles = [];
            foreach($perf_usu as $pu){
               $perfiles = $pu->perfil_id;
            }
        }
        return $perfiles;
    }

    public function getSistemas($perf_usu){
        $sistemas = [];
        foreach($perf_usu as $pu){
            $sistemas = DB::table('perfils as p')
                        ->join('sistemas as s', 's.id', 'p.sistema_id')
                        ->select('s.id as sistema_id', 'nom_sistema', 'des_sistema', 'icono')
                        ->where('p.estado', '<>', 0)
                        ->where('p.id', $pu->perfil_id)
                        ->distinct('s.id')->get();
        }
        return $sistemas;
       
    }

    public function getMenuModulos($sistemas){
        $cmenu = new Menu();
        $menu = array();    $arr_si = array();         $modulos = array();
        foreach ($sistemas as $sis){ 
            if($sis!='[]'){
                foreach($sis as $si){ //dd($si);
                        $objmodulos = DB::table('modulos as m')
                        ->join('submodulos as s',       's.modulo_id', 'm.id')
                        //->join('accions as a',          'a.submodulo_id', 's.id')
                        ->join('perfil_accions as pa',  'pa.submodulo_id', 's.id')
                        ->select('m.id as modulo_id', 'nom_modulo', 'm.icono')
                        ->whereIn('pa.perfil_id', (array)$cmenu->perfiles())
                        ->where('pa.estado', '<>', 0) 
                        ->where('s.estado', '<>', 0) 
                        ->where('m.sistema_id', $si->sistema_id) 
                        ->orderBy('m.orden')
                        ->distinct('m.id')->get();
                        foreach($objmodulos as $key => $value){    $modulos[$key] = (array) $value;    }
                    
                    $modulos = $this->getSubmodulo($modulos);
                    $arr_si =  (array)$si;
                    $arr_si[$si->sistema_id] = (array)$modulos;


                    $menu[] = $arr_si;
                }
            }
        }
        return $menu;
    }

    public function getSubmodulo($modulos)
    {
        $cmenu = new Menu();
        $subm = array();
        foreach ($modulos as $mo){
            $objsubm = DB::table('submodulos as sm')
            // ->join('submodulos as s',       's.modulo_id', 'm.id')
            //->join('accions as a',              'a.submodulo_id', 'sm.id')
            ->join('perfil_accions as pa',      'pa.submodulo_id', 'sm.id')
            ->select('sm.id as submodulo_id',   'sm.nom_submodulo', 'sm.icono', 'sm.link')
            ->whereIn('pa.perfil_id', (array)$cmenu->perfiles())
            ->where('pa.estado', '<>', 0)
            ->where('sm.estado', '<>', 0) 
            ->where('sm.modulo_id', $mo['modulo_id']) 
            ->orderBy('sm.orden')
            ->distinct('sm.id')->get();

            foreach($objsubm as $key => $value){    $submodulos[$key] = (array) $value;    }
            $submodulos = $this->getSubmodulo2($submodulos);
            $mo[$mo["modulo_id"]] = $submodulos;
            $subm[] = $mo;
        }
        return $subm;

    }

    public function getSubmodulo2($submodulos)
    {
        $subm = array();
        foreach($submodulos as $sb){ 
            $submodulos2 = array();
            $objsubm2 = DB::table('submodulo2s as sm') 
            ->join('perfil_accions as pa',      'pa.submodulo2_id', 'sm.id')
            ->select('sm.id as submodulo2_id',   'sm.nom_submodulo2', 'sm.icono', 'sm.link')  
            ->where('sm.estado', '<>', 0) 
            ->where('sm.submodulo_id', $sb['submodulo_id']) 
            ->orderBy('sm.orden')
            ->distinct('sm.id')->get();

            foreach($objsubm2 as $key => $value){    $submodulos2[$key] = (array) $value;    }
            $sb[$sb["submodulo_id"]] = $submodulos2;
            $subm[] = $sb;
        }
        return $subm;
    }

}
