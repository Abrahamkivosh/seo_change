<?php

use Illuminate\Database\Seeder;
use Lcobucci\JWT\Claim\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('users')->delete();

        //factory(App\User::class,30)->create();
        App\User::create([
            'id'=>'1',
            'name' => 'Abraham',
            'email' => 'abrahamkivosh@tbxhost.co.uk',
            'password' => bcrypt('Abrakivosh1234'),
            'role_id' => '1',
            'coverimage' => 'test image path here',
            'first_name' => 'Abraham',
            'last_name' => 'Kivondo',
            'middle_name' => 'Ngila'
        ]

    );
    App\User::create([
        'id'=>'2',
        'name' => 'Dee Nzioka',
        'email' => 'dee@tbxhost.co.uk',
        'password' => bcrypt('askdee9519'),
        'role_id' => '1',
        'coverimage' => 'test image path here',
        'first_name' => 'Dee',
        'last_name' => 'Nzioka',
        'middle_name' => 'Nzioka'
    ]

);
App\User::create([
    'name' => 'Lawis',
    'email' => 'info@tbxhost.co.uk',
    'password' => bcrypt('@Mwangi5651'),
    'role_id' => '1',
    'coverimage' => 'test image path here',
    'first_name' => 'lawis',
    'last_name' => 'mwangi',
    'middle_name' => 'Lawis'
]

);


    }


}
