<?php namespace Theme\Controllers;

use Themosis\Route\BaseController;

class ExampleController extends BaseController
{
    public function index()
    {
        return view('welcome');
    }
}
