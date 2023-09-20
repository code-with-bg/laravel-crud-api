<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
  public function index(){
     $array = [
        [
              'name' => 'bikesh',
              'age' => '21',
              'role' => 'software developer',
              'email' => 'programmingaddicted110@gmail.com',
              'work experience' => '2 year',
              'education' => 'diploma in computer engineer'
        ],
        [
               'name' => 'bikesh',
               'age' => '21',
               'role' => 'software developer',
               'email' => 'programmingaddicted110@gmail.com',
               'work experience' => '2 year',
               'education' => 'diploma in computer engineer'
         ]

    ];
     return response()->json([
        'message' => 'every users found',
        'data' => $array,
         'status' => true
     ],200);
   }
}
