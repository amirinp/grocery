<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function showcatalog()
    {
        return view('Catalog.catalog');
    }
}
