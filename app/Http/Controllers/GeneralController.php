<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class GeneralController extends Controller
{
    public function general(){
        $data = Storage::json('BurmeseRecipes.json');
        return view('home', compact('data'));
    }
    public function getItem($Guid){
        $data = Storage::json('BurmeseRecipes.json');
        foreach($data as $item){
            if ($item['Guid'] == $Guid) {
                $Name = $item['Name'];
                $Ingredients = $item['Ingredients'];
                $CookingInstructions = $item['CookingInstructions'];
            }
        }
        return view('detail', compact('Name', 'Ingredients', 'CookingInstructions'));
    }
}
