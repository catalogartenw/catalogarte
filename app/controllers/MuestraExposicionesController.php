<?php

class MuestraExposicionesController extends \BaseController {
    
    protected $layout = 'layouts.nova';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $xml = simplexml_load_file("xml/portada.xml");
        return View::make('muestraExposiciones.portada')
                ->with('portada', $xml);
    }
    
    public function hojaLegal() {
        $xml = simplexml_load_file("xml/hojalegal.xml");
        return View::make('muestraExposiciones.hojalegal')
                ->with('hojalegal', $xml);
    }
    
    public function indice() {
        $xml = simplexml_load_file("xml/indice.xml");
        return View::make('muestraExposiciones.indice')
                ->with('indice', $xml);
    }
    
    public function notas() {
        $xml = simplexml_load_file("xml/notas.xml");
        return View::make('muestraExposiciones.notas')
                ->with('notas', $xml);
    }
    
    public function articulos() {
        $xml = simplexml_load_file("xml/articulos.xml");
        return View::make('muestraExposiciones.articulos')
                ->with('articulos', $xml);
    }
    
    public function galeria() {
        $xml = simplexml_load_file("xml/galeria.xml");
        return View::make('muestraExposiciones.galeria')
                ->with('galeria', $xml);
    }
    
    public function contraPortada() {
        $xml = simplexml_load_file("xml/contraportada.xml");
        return View::make('muestraExposiciones.contraportada')
                ->with('contraportada', $xml);
    }

}
