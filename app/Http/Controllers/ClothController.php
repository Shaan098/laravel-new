<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClothController extends Controller
{
    
    private $cloths = [
        1 => ["name" => "Tshirt", "price" => 500, "desc" => "Comfortable cotton tshirt"],
        2 => ["name" => "Jeans", "price" => 1200, "desc" => "Denim jeans"],
        3 => ["name" => "Jacket", "price" => 3000, "desc" => "Winter jacket"],
        4 => ["name" => "Sweater", "price" => 800, "desc" => "Wool sweater"],
        5 => ["name" => "Dress", "price" => 1500, "desc" => "Stylish dress"]
    ];

    // Function 1 → List View
    public function index()
    {
        return view('cloths', ['cloths' => $this->cloths]);
    }

    // Function 2 → Detail View
    public function show($id)
    {
        $cloth = $this->cloths[$id];
        return view('cloth_detail', ['cloth' => $cloth, 'id' => $id]);
    }
}
