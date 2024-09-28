<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todos = [
            [
                'description'=> 'first Task',
                'due_date'=> '2024-05-20',
                'is_completed'=> false
            ],
            [
                'description'=> 'second Task',
                'due_date'=> '2024-12-25',
                'is_completed'=> true
            ]
        ];
        return view('todos.index', [
            'todos'=>$todos
        ]);
    }

    public function create(){
        return view('todos.create');
    }
}