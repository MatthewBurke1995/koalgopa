<?php

namespace koreansite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class SearchController extends Controller
{
  public function index(Request $request) {

    $srch = $request->input('search');


    return view('search.index', ['company' => $srch]);

    }

  public function show($id) {


    return view('search.show');

  }


  public function create() {

    return view('show.create');


  }




}
