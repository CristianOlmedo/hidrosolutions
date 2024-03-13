<?php

namespace Database\Seeders;
use App\Models\User;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     
     * @return void
     */
    public function run() {

        $user = new User;
        $user->first_name = 'Cristian Giovanny';
        $user->last_name = 'Olmedo Segura';
        $user->identification = '1087109208';
        $user->email = 'cristianolmedo57@gmail.com';
        $user->password = bcrypt('1234');
        $user->role = 'admin';
        $user->save();  
    }

}
