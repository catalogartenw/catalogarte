<?php

class ExposicionesController extends BaseController {
    
    protected $layout = 'layouts.aceAdmin';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $exposiciones = Exposiciones::all();

        // load the view and pass the nerds
        return View::make('exposiciones.index')
                        ->with('exposiciones', $exposiciones);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('exposiciones.nueva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
