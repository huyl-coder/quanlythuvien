<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\lichSu::class, 100)->create();
    }
}
class DatamauSeeder extends Seeder
{
    public function run()
    {
        DB::table('vanbandi')->insert([
            ['ten'=>'khoa','sokitu'=>4,'ngaytao'=>'2019-06-12','fieldmoi'=>'2131']
        ]);
    }
}
