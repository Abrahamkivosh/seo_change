<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();
        $collection = collect([1, 2, 3, 4, 5]);
        $company = collect([1, 2]);
        $status = collect([0,1, 2, 3, 4, 5]);
       for ($i=0; $i < 10 ; $i++) {

        $faker = Faker\Factory::create();
        $project = new App\Project;
        $project ->name = $faker->name();
        $project ->website = $faker->domainName();
        $project ->status = $status->random();
        $project ->category = $faker->city;
        $project ->file = $faker->word;
        $project ->company_id = "2";
        $project ->user_id = factory(App\User::class)->create()->id;
        // 4 - (retrieved randomly)
        $project ->save();
       }

    }
}
