<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.exit
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,30)->create();
//         App\User::create([
//             'name' => 'Daniel',
//             'email' => 'test@gmail.com',
//             'password' => bcrypt('1234567'),
//             'role_id' => '3',
//             'coverimage' => 'test image path here',
//             'first_name' => 'Daniel',
//             'last_name' => 'John',
//             'middle_name' => 'Samuel'
//         ]

//     );

//     App\User::create([
//         'name' => 'John',
//         'email' => 'john1@gmail.com',
//         'password' => bcrypt('1234567'),
//         'role_id' => '3',
//         'coverimage' => 'test image path here',
//         'first_name' => 'Daniel',
//         'last_name' => 'John',
//         'middle_name' => 'Samuel'
//     ]

// );
    }
}
