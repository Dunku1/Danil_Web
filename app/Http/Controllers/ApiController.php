<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{


    public function indexAction()
    {
    	return view('index');
    }

    public function kategoriiAction()
    {
    	return view('kategorii', ['kategorii' => (new ArticleController())->show()]);
    }

    public function kontaktiAction()
    {
    	return view('kontakti');
    }

    public function korzinaAction()
    {
    	return view('korzina');
    }

    public function opla4enoAction()
    {
    	return view('opla4eno');
    }

    public function statiAction()
    {
    	return view('stati');
    }

    public function tovar1Action()
    {
    	return view('tovar1', ['tovar1' => (new ArticleController())->show()]);
    }

    public function tovar1_1Action()
    {
    	return view('tovar1_1');
    }

    public function tovar2_2Action()
    {
    	return view('tovar2_2');
    }

    public function tovar2Action()
    {
    	return view('tovar2');
    }

    public function tovar3Action()
    {
    	return view('tovar3');
    }

    public function tovar4Action()
    {
    	return view('tovar4');
    }

    public function search(Request $request)
    {
    	return view('tovar1_1', ['tovar1_1' => (new ArticleController())->search($request->title)]);
    }
}