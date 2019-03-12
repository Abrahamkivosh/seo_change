<?php

use Illuminate\Database\Seeder;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(TaskSeeder::class);
    }
}
