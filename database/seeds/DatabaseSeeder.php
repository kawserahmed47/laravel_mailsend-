<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(questionStageOne::class);
        $this->call(questionStageTwo::class);
        // $this->call(QuestionStageTwoSeeder::class);


    }
}

