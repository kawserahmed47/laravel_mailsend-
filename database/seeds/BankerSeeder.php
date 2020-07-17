<?php

use Illuminate\Database\Seeder;

class BankerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bankers')->insert([
            'bank_id'=> '4', 
            'name' => 'Amir Hossain',
            'address' => 'Uttara Jasim uddin Avenue Corporate Branch',
            'designation' => 'Branch Sales & Services Officer',
            'email' => 'amir.hossain25284@brackbank.com',
            'mobile' => '01728927291, 01967128938',
            'phone' => '+88 02 895 3086, 895 7420',
        ]);
        DB::table('bankers')->insert([
            'bank_id'=> '5', 
            'name' => 'S M Shahiduzzaman',
            'address' => 'Uttara Branch, H# 04, Garib-E-Newaz Avenue, S#11, Uttara, Dhaka-1230',
            'designation' => 'Incharge, Teller Service',
            'email' => 's.zaman@bankalfalah.com.bd',
            'mobile' => '01716 813667',
            'phone' => '',
        ]);
        DB::table('bankers')->insert([
            'bank_id'=> '6', 
            'name' => 'Sayed Ahsanul Hoque Nury',
            'address' => '22, Gareeb-E-Newaz Avenue Branch',
            'designation' => 'First Assistant Vice President & Manager Operation',
            'email' => 'shoquenury@mblbd.com',
            'mobile' => '01913623006',
            'phone' => '',
        ]);
        DB::table('bankers')->insert([
            'bank_id'=> '6', 
            'name' => 'Rakib',
            'address' => '22, Gareeb-E-Newaz Avenue, Sector 13, Uttara, Dhaka-1230',
            'designation' => 'Direct Sales Executive',
            'email' => '',
            'mobile' => '01929026507',
            'phone' => '',
        ]);
        DB::table('bankers')->insert([
            'bank_id'=> '7', 
            'name' => 'Afroze Zaman',
            'address' => 'H#01, Galib-E-Newaz Avenue, Sector#11, Uttara, Dhaka-1230',
            'designation' => 'Executive Officer & GB Incharge',
            'email' => 'az082201@primebank.com.bd',
            'mobile' => '01881164009, 01913462466',
            'phone' => '48950997',
        ]);
        DB::table('bankers')->insert([
            'bank_id'=> '7', 
            'name' => 'Md. Owazed Ali',
            'address' => 'Facalities Tower (2nd Floor), Kha-199/2, Maddya Badda, Pragati Sarani, Dhaka',
            'designation' => 'Relationalship Officer, Customer Banking Divion',
            'email' => 'Owazed@yahoo.com',
            'mobile' => '01924951964',
            'phone' => '',
        ]);
        DB::table('bankers')->insert([
            'bank_id'=> '7', 
            'name' => 'Ahmed Bazlus Sharif',
            'address' => 'H#01, Galib-E-Newaz Avenue, Sector#11, Uttara, Dhaka-1230',
            'designation' => 'Senior Officer',
            'email' => 'bazlul.sharif@primebank.com.bd',
            'mobile' => '01911250062',
            'phone' => '48950997',
        ]);
        DB::table('bankers')->insert([
            'bank_id'=> '8', 
            'name' => 'Gouranga Kundu',
            'address' => 'H#15, Dahaka Mymensing Road, Sector#03, Uttara Model Town, Dhaka-1230',
            'designation' => 'Officer-Priority Client Acquistion',
            'email' => 'monarch.prioritybanking@primebank.com.bd',
            'mobile' => '01716514330',
            'phone' => '58950016',
        ]);
        DB::table('bankers')->insert([
            'bank_id'=> '9', 
            'name' => 'Mohammed Kamruzzaman',
            'address' => 'Atlanta Trade Centre, L#1, P#1, R# 1/A, S#4, Uttara Dhaka-1230',
            'designation' => 'Assistant Relationship Manager',
            'email' => 'mohammed.kamruzzaman@hsbc.com.bd',
            'mobile' => '01611425262',
            'phone' => '88 09666332628',
        ]);
        DB::table('bankers')->insert([
            'bank_id'=> '9', 
            'name' => 'Ziprul Hossain Siddiqui',
            'address' => 'Atlanta Trade Centre, L#1, P#1, R# 1/A, S#4, Uttara Dhaka-1230',
            'designation' => 'Assistant Vice President & Relationship Manager',
            'email' => 'ziprulhsiddiqui@hsbc.com.bd',
            'mobile' => '01777795289',
            'phone' => '88 09612772629',
        ]);
    }
}
