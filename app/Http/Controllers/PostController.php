<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
		$artigos = [['title'=>'Post 1','post'=>'Lorem ipsum dolor sit amet, consectetur 
    				adipisicing elit. Unde nam ipsum itaque quidem dolores obcaecati provident tempora. 
    				Rerum cum, aliquam similique, nulla sapiente quis quia, id, consequuntur nostrum illum suscipit.'], 
					['title'=>'Post 2', 'post'=>'Lorem ipsum dolor sit amet, consectetur 
    				adipisicing elit. Unde nam ipsum itaque quidem dolores obcaecati provident tempora. 
    				Rerum cum, aliquam similique, nulla sapiente quis quia, id, consequuntur nostrum illum suscipit.'], 
					['title'=>'Post 3', 'post'=>'Lorem ipsum dolor sit amet, consectetur 
    				adipisicing elit. Unde nam ipsum itaque quidem dolores obcaecati provident tempora. 
    				Rerum cum, aliquam similique, nulla sapiente quis quia, id, consequuntur nostrum illum suscipit.'],
                    ['title'=>'Post 4', 'post'=>'Lorem ipsum dolor sit amet, consectetur 
                    adipisicing elit. Unde nam ipsum itaque quidem dolores obcaecati provident tempora. 
                    Rerum cum, aliquam similique, nulla sapiente quis quia, id, consequuntur nostrum illum suscipit.'],
                    ['title'=>'Post 5', 'post'=>'Lorem ipsum dolor sit amet, consectetur 
                    adipisicing elit. Unde nam ipsum itaque quidem dolores obcaecati provident tempora. 
                    Rerum cum, aliquam similique, nulla sapiente quis quia, id, consequuntur nostrum illum suscipit.'],
                    ['title'=>'Post 6', 'post'=>'Lorem ipsum dolor sit amet, consectetur 
                    adipisicing elit. Unde nam ipsum itaque quidem dolores obcaecati provident tempora. 
                    Rerum cum, aliquam similique, nulla sapiente quis quia, id, consequuntur nostrum illum suscipit.']];


    	return view('index', compact('artigos'));
    }
}
