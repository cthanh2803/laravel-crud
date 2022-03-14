<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 25; $i++) {
            DB::table('members')->insert(
                [
                    [
                        'name'=>'thanh'.$i,
                        'telephone'=>'123123123'.$i,
                        'email'=>'example'.$i.'@example.com',
                        'created_at'=>now(),
                        'updated_at'=>now(),
                    ],
    
                ]
            );
        }
    }
}
