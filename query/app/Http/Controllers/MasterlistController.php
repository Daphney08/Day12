<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Masterlist;

class MasterlistController extends Controller
{
    public function simple_query()
    {
        //get all data
        $data = Masterlist::all();

        return dd($data);
    }

    public function select()
    {
        //select specific column to fetch
        $data = Masterlist::select('name', 'age')
                        ->get();

        return dd($data);
    }

    public function find()
    {
        //get data by its ID
        //pass the ID inside find
        $data = Masterlist::find(4);

        return dd($data);
    }

    public function count()
    {
        //will show total number of results in the query
        $data = Masterlist::whereStatus('regular')
                        ->count();

        return dd($data);
    }

    public function avg()
    {
        //will get average of a column
        //pass the column to be computed
        $data = Masterlist::avg('age');
                      
        return dd($data);
    }
   
    public function exists()
    {
        //will find if the dta exists on the table
        //boolean = true / false
        $data = Masterlist::whereAge('21')
                            ->whereGender('female')
                            ->exists();
                      
        return dd($data);
    }
    
    public function where()
    {
        //where(column, operator, string)
        //where('gender', '=', 'female')
        /**
         * operator
         * = equal
         * !=not equal
         * <less than
         * > greater than
         * <= less than or equal
         *>= greater than or equal
         *like
         */
        $data = Masterlist::select('name', 'gender', 'age')
                            //->whereGender('female')
                            //->where('age', '<', 25)
                            ->where('name', 'LIKE', '%a%')
                            ->get();
                      
        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }

    public function orwhere()
    {
        //orwhere
        //accept 1 or more choices
        $data = Masterlist::select('name', 'age')
                            ->where('age', '=', 99)
                            ->orwhere('age', '=', 26)
                            ->get();
                      
        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }

    public function wherebetween()
    {
        //whereBetween(column_name)
        //is about age or number
        $data = Masterlist::select('name', 'birthday', 'age')
                            //->whereBetween('birthday', [
                             //   '1999-06-06',
                             //   '1999-08-10',
                             ->whereBetween('age', [
                                '21',
                                '23'
                            ])
                            ->get();
                      
        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }

    public function wherein()
    {

        //wherein(colunm_name, [...value])
        $data = Masterlist::select('name', 'gender', 'age')
                            ->whereIn('age', [21, 23, 25])
                            ->get();
  
        return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }

    public function wherenull()
    {
       //wherenull(colunm_name)
       //find for tabvles with null values on said column
       $data = Masterlist::select('name', 'gender', 'age')
                            ->whereNull('created_at')
                            ->get();

       return response()->json($data,200, [], JSON_PRETTY_PRINT);
    }

}
