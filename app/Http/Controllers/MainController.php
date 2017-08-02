<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use Theme;


class MainController extends Controller
{
    public function mainPage(){

        $theme = Theme::uses('default')->layout('default')->setTitle('');
        return $theme->scope('mainpage')->render();

    }

}
