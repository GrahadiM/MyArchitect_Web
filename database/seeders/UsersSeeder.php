<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = [
            [
                'name' => 'Alyssa Noveria Salsabila',
                'role_id' => '1',
                'status_id' => '1',
                'gender_id' => '2',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'ichaalyssa28@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Abdurrahman Grahadi Maulana',
                'role_id' => '1',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'grahadim178@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Abdurrahman GM',
                'role_id' => '2',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'grahadim00@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Hadoy',
                'role_id' => '3',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'grahadim232@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            //Data Arsitek Tambahan
            [
                'name' => 'Arifin Obara',
                'role_id' => '2',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'arifin.obara07@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Muhammad Igun',
                'role_id' => '2',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'm.igun123@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Bambang Yesaya',
                'role_id' => '2',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'bambangyesaya@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Bombom Architect',
                'role_id' => '2',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'fajrian0810@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Mega Istiani',
                'role_id' => '2',
                'status_id' => '1',
                'gender_id' => '2',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'Megaistiani84@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            //Data Klien Tambahan
            [
                'name' => 'Sherina Febryanti',
                'role_id' => '3',
                'status_id' => '1',
                'gender_id' => '2',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'sherinafebryanti@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'M. Permana Dolar',
                'role_id' => '3',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'dolay100998@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Novan Saputra',
                'role_id' => '3',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'sapnovan@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'M. Galih Briantoro',
                'role_id' => '3',
                'status_id' => '1',
                'gender_id' => '1',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'galihtor05@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Fitri Kartikasari',
                'role_id' => '3',
                'status_id' => '1',
                'gender_id' => '2',
                'url_avatar' => 'https://via.placeholder.com/110x110',
                'email' => 'fitrikartikasari24@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
            ],
        ];
        
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
