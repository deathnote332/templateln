<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
class CustomerController extends Controller
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

    public function addCustomerPage()
    {
        $theme = Theme::uses('default')->layout('defaultadmin')->setTitle('');
        return $theme->scope('addcustomer')->render();
    }

}