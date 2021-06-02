<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Personnel;
use App\Models\Statistic;

class PersonnelController extends Controller
{
    public function simple_query()
    {
        $data = Personnel::all();

        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }
    public function select()
    {
        $data = Personnel::avg('age');
                      
        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }
    public function find()
    {
        //get data by its ID
        //pass the ID inside find
        $data = Personnel::find(8);

        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }
    public function count()
    {
       
        $data = Personnel::count();
        
        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }
    
    
    public function exists()
    {
        $data = Personnel::select('last_name')
                        ->get();

        return response()->json($data,200, [], JSON_PRETTY_PRINT);

    }
    public function where()
    {
       
        $data = Personnel::where('age', '<', 25)->get();

        return response()->json($data,200, [], JSON_PRETTY_PRINT);

    }
    public function orwhere()
    {
       
        $data = Personnel::where('age', '<', 30)
                        ->avg('age');

                        return dd($data);
    }
    
   
   
    public function wherenull()
    {
       
        $data = Personnel::whereId('last_name')
                        ->where('id', '>', 10)
                        ->get();

        return response()->json($data,200, [], JSON_PRETTY_PRINT);

    }

}
