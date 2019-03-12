<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
        App\Company::create([
            'id'=>'1',
            'name' => 'TBXHOST Juja',
            'description' => 'Main branch offering all services',

        ]

    );
    App\Company::create([
        'id'=>'2',
        'name' => 'TBXHOST - Nairobi',
        'description' => 'Subbranch  offering all services',

    ]

);

    }

}
