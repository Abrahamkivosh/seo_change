<?php
use Faker\Generator as Faker;
namespace App\Http\Controllers;
use App\Project;
//$factory->define(App\Project::class, function (Faker $faker) {

    $factory->define(Project::class, function (Faker $faker) {

    //$users = User::all()->lists('id');
    //$company = Company::all()->lists('id');
   // $status = collect([1, 2, 3, 4, 5]);

    $name =collect('SEO','Maintainace','Web Hosting','Othes');
    return [

    ];
});
