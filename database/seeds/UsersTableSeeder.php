<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Movement;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Gerson Umanzor";
        $user->email = "bumanzor@tecnowebsv.net";
        $user->password = bcrypt("050956528");
        $user->save();

        for ($i=0; $i < 50; $i++) {
            $user->movements()->save(factory(Movement::class)->make());
        }

        factory(User::class, 10)->create()->each(function($u){
            for ($i=0; $i < 100; $i++) {
                $u->movements()->save(factory(Movement::class)->make());
            }
        });
    }
}
