<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('tasks')->delete();
        $company = collect([1, 2]);
        $user = collect([1, 2,3,4,5]);
        $project = collect([1, 2, 3, 4, 5]);

        for ($i=0; $i <100 ; $i++) {

            $faker = Faker\Factory::create();

            $task =new App\Task;
            $task->name =$faker->word;
            $task->project_id = $project->random();
            $task->user_id = '1';
            $task->days = $faker->randomDigit(0,124);
            //$task->price= $faker->randomDigit(12,1254);
            $task->company_id ='2';
            $task->save();

        }
    }
}
