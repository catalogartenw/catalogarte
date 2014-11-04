<?php

class LoginController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return View::make('login.login');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        
        $rules = array(
            'login' => 'required',
            'password' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/')
                            ->withErrors($validator)
                            ->withInput(Input::except('password'));
        } else {
            return Redirect::to('admin/museos');
        }
    }

    
    public function inicio() {
        return View::make('login.login');
    }
    
    public function logout() {
        return View::make('login.login');
    }

}
