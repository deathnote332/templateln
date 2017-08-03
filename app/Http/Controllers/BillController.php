<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
class BillController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function billPage()
    {
        $theme = Theme::uses('default')->layout('defaultadmin')->setTitle('');
        return $theme->scope('billing')->render();
    }

    public function cartDetails(){
        return "sd";
    }


}