<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "Fauzan Abdullah";
        $user->email = "uzhantheforev@gmail.com";
        $user->password = bcrypt("fauzan3365");
        $user->save();
    }
}
