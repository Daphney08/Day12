<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB, Carbon;
class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'first_name' => 'Lovely',
                'last_name' => 'Lovely',
                'middle_name' => 'kapoy',
                'age' => '21',
                'birthday' => '1999-06-06',
                'rating' => '10',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
        
            [
                
                'first_name' => 'Ronald',
                'last_name' => 'Leal',
                'middle_name' => 'Abando',
                'age' => '23',
                'birthday' => '1999-08-09',
                'rating' => '9',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
       
            [
                'first_name' => 'Ardy',
                'last_name' => 'Del',
                'middle_name' => 'north',
                'age' => '22',
                'birthday' => '1999-06-06',
                'rating' => '10',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
      
            [
                'first_name' => 'Sabel',
                'last_name' => 'Dumayag',
                'middle_name' => 'Canlas',
                'age' => '22',
                'birthday' => '1998-08-07',
                'rating' => '9',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
        
            [
                'first_name' => 'Lyr',
                'last_name' => 'Apostol',
                'middle_name' => 'Ewan',
                'age' => '24',
                'birthday' => '1997-05-05',
                'rating' => '10',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
        
            [
                'first_name' => 'Cha',
                'last_name' => 'Palabrica',
                'middle_name' => 'Kurdapoy',
                'age' => '25',
                'birthday' => '1999-08-10',
                'rating' => '0',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
        
        [
            'first_name' => 'Daphney',
            'last_name' => 'Ly',
            'middle_name' => 'Kar',
            'age' => '21',
            'birthday' => '1999-10-06',
            'rating' => '10',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ],
    
        [
            
            'first_name' => 'Rhy',
            'last_name' => 'Lim',
            'middle_name' => 'Aba',
            'age' => '23',
            'birthday' => '1999-08-09',
            'rating' => '10',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ],
   
        [
            'first_name' => 'Sam',
            'last_name' => 'Les',
            'middle_name' => 'Em',
            'age' => '30',
            'birthday' => '1997-06-06',
            'rating' => '10',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ],
  
        [
            'first_name' => 'Larva',
            'last_name' => 'Yam',
            'middle_name' => 'Kris',
            'age' => '25',
            'birthday' => '1998-08-10',
            'rating' => '8',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ],
    
        [
            'first_name' => 'Char',
            'last_name' => 'Ly',
            'middle_name' => 'Red',
            'age' => '23',
            'birthday' => '1998-05-05',
            'rating' => '10',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ],
    
        [
            'first_name' => 'Erx',
            'last_name' => 'Lary',
            'middle_name' => 'Kurda',
            'age' => '30',
            'birthday' => '1996-08-10',
            'rating' => '10',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ],
    ];
    
        
        DB::table('personnel')->insert($data);
    }
    

}
