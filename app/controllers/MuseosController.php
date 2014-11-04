<?php

class MuseosController extends BaseController {

    protected $layout = 'layouts.aceAdmin';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $museos = Museo::all();

        // load the view and pass the nerds
        return View::make('museos.index')
                        ->with('museos', $museos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        return View::make('museos.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $rules = array(
            'nombre' => 'required',
            'siglas' => 'required',
            'ubicacion' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/museos/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $museo = new Museo;
            $museo->nombre = Input::get('nombre');
            $museo->siglas = Input::get('siglas');
            $museo->telefono = Input::get('telefono');
            $museo->ubicacion = Input::get('ubicacion');
            $museo->ruta_logo = Input::get('logo');
            $museo->save();

            // redirect
            Session::flash('message', 'Datos guardados');
            return Redirect::to('admin/museos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $museo = Museo::find($id);
        return View::make('museos.editar')
                        ->with('museo', $museo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $rules = array(
            'nombre' => 'required',
            'siglas' => 'required',
            'ubicacion' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/museos/create')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            // store
            $museo = Museo::find($id);
            $museo->nombre = Input::get('nombre');
            $museo->siglas = Input::get('siglas');
            $museo->telefono = Input::get('telefono');
            $museo->ubicacion = Input::get('ubicacion');
            $museo->ruta_logo = Input::get('logo');
            $museo->save();

            // redirect
            Session::flash('message', 'Datos guardados');
            return Redirect::to('admin/museos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $museo = Museo::find($id);
        $museo->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('admin/museos');
    }

    public function cargaImagen() {
        $output_dir = "images/";
        if (isset($_FILES["myfile"])) {
            $ret = array();

            $error = $_FILES["myfile"]["error"];
            //You need to handle  both cases
            //If Any browser does not support serializing of multiple files using FormData() 
            if (!is_array($_FILES["myfile"]["name"])) { //single file
                $fileName = $_FILES["myfile"]["name"];
                move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_dir . $fileName);
                $ret[] = $fileName;
            } else {  //Multiple files, file[]
                $fileCount = count($_FILES["myfile"]["name"]);
                for ($i = 0; $i < $fileCount; $i++) {
                    $fileName = $_FILES["myfile"]["name"][$i];
                    move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $output_dir . $fileName);
                    $ret[] = $fileName;
                }
            }
            echo json_encode($ret);
        }
    }

}
