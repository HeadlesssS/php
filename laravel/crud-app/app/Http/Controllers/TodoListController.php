<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoItem;

class TodoListController extends Controller
{
    public function createItem(Request $request){
        \Log::info(json_encode($request->all()));

        $newListItem = new TodoItem;
        $newListItem->name = $request->TodoItem;
        $newListItem->is_complete = false; // Default to incomplete
        $newListItem->save();
        
        return view('welcome');
    }
}

