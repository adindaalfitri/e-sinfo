<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = 
        [
            [ 'id' => 1, 'name' => 'Administrator', 'email' => 'admin@gmail.com', 'password' => bcrypt('12345678'),'whatsapp' => '01234567890','level' => 'admin', 'avatar' => 'backoffice/img/avatars/1.png'], 
        ];

        foreach ($data as $value) {
            User::create($value);
        }
    }
}
