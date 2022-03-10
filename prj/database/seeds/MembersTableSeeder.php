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
        DB::table('members')->insert(
            [
                [
                    'name'=>'thanh',
                    'telephone'=>'123123123',
                    'email'=>'example@example.com',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],

            ]
        );
    }
}
