<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Olssonm\IdentityNumber\Pin;
use App\User;

class UserController extends Controller {
      /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
      return view('users');
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create() {
      return view('users.create');
    }
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request){
      $this->validate($request, [
          'firstName'     => 'required|max:30',
          'lastName'      => 'required',
          'streetAdress'  => 'required',
          'zipcode'       => 'required|max:6',
          'city'          => 'required',
          'pin'           => 'required|identity_number'
      ]);
      $id = User::create($request->all());
      return view('users.show', ['user' => User::findOrFail($id)]);
    }
}
