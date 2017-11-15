<?php

use App\adressInfo;
use App\occupant;
use App\owner;
use App\ownership;
use App\personInfo;
use App\photoInfo;
use App\rent;
use App\userInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEYS_CHECKS = 0');

        adressInfo::query()->truncate();
        occupant::query()->truncate();
        owner::query()->truncate();
        ownership::query()->truncate();
        personInfo::query()->truncate();
        photoInfo::query()->truncate();
        rent::query()->truncate();
        userInfo::query()->truncate();

        $personInfoSize = 100;

        factory(personInfo::class,$personInfoSize)->create();
        //factory(userInfo::class,$personInfoSize)->create();
     /*   factory(userInfo::class,$personInfoSize)->create()->each(
          function (userInfo $userInfo){
              $personInfo  = personInfo::all()->random();

              $userInfo->personInfo()->associate($personInfo);
          }
        );*/
    }
}
