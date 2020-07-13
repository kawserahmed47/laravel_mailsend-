<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('questions')->insert([
            'question' => 'Is the Information is documented as required as per the ISO 13485:2016 Medical devices — Quality management systems?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',

        ]);

        DB::table('questions')->insert([
            'question' => 'Has the discussion held with personnel of the Client company for readiness for stage-2?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',

        ]);
        DB::table('questions')->insert([
            'question' => 'Has the Client site specific conditions are evaluated?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',

        ]);
        DB::table('questions')->insert([
            'question' => 'Has the company identified key performance, Process, Objectives and operation of Management System?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',
        ]);
        DB::table('questions')->insert([
            'question' => 'Has the client having understanding with the ISO 13485:2016 Standard requirement?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',

        ]);
        DB::table('questions')->insert([
            'question' => 'Is the scope is having boundaries and specific to client organization?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',

        ]);
        DB::table('questions')->insert([
            'question' => 'Is client having Multisite then level of control is established.',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',

        ]);
        DB::table('questions')->insert([
            'question' => 'Is process and Equipment used are adequate?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',

        ]);
        DB::table('questions')->insert([
            'question' => 'Has client identified Legal and Statutory Requirements applicable to Product and Organization?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',
        ]);

        DB::table('questions')->insert([
            'question' => 'Is the resource are adequate for stage 2 audit?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',
        ]);

        DB::table('questions')->insert([
            'question' => 'Is Internal Audit planned and performed and effective?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',
        ]);

        DB::table('questions')->insert([
            'question' => 'Is MRM planned and performed and Effective?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',
        ]);

        DB::table('questions')->insert([
            'question' => 'Are Internal audits conducted as planned? Date of Last Internal Audit?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',
        ]);
        DB::table('questions')->insert([
            'question' => 'Are Management reviews conducted as planned? Date of Last MRM?',
            'status' => '1',
            'certificate_id' => '1',
            'stage' => '1',
        ]);



    }
}


//
//Full texts
//id
//question
//certificate_id
//stage
//status
