<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Personnel;
use App\Models\Statistic;

class StatisticsController extends Controller
{
    
    public function avg()
    {
       
        $data = Statistics::sum('weight');

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
    public function wherebetween()
    {
        
        $data = Statistics::where('height','<', '150')->count();
                      
        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }
    

    public function wherein()
    {
        //will get average of a column
        //pass the column to be computed
        $data = Statistics::where('height','>', '130')->sum('weight');
                      
        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }
       
    
}