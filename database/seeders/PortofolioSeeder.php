<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portofolio::truncate();
        $portofolio = [
            [
                'project' => 'Desain Rumah Sederhana', 
                'user_id' => '3',
                'category_type_id' => '1',
                'category_model_id' => '1',
                'luasbangunan' => '6x6',
                'desc' => 'Desain rumah tinggal ini disebut dengan rumah tipe 36 biasanya mempunyai 2 kamar tidur, 1 ruang tamu, dapur dan kamar mandi',
            ],
            [
                'project' => 'Premium Joglo House', 
                'user_id' => '5',
                'category_type_id' => '1',
                'category_model_id' => '3',
                'luasbangunan' => '45',
                'desc' => 'Waktu pengerjaan selama 5 hari, dengan hasil Denah Layout, tampak setiap sisi (beserta jenis material) dan visualisasi 3D view.',
            ],
            [
                'project' => 'Room Coffee',
                'user_id' => '6',
                'category_type_id' => '3',
                'category_model_id' => '9',
                'luasbangunan' => '133',
                'desc' => 'Konsep desain cafe unfinished mengkombinasikan dengan metal dan kayu, dengan konsep dinding yang tidak mencapai finish.',
            ],
            [
                'project' => 'E-House',
                'user_id' => '7',
                'category_type_id' => '1',
                'category_model_id' => '6',
                'luasbangunan' => '85',
                'desc' => 'Desain dengan cladding dan finishing tembok yang sederhana, penggunaan material menggunakan logam, kaca dan baja.',
            ],
            [
                'project' => 'Kantor Xyz', 
                'user_id' => '8',
                'category_type_id' => '4',
                'category_model_id' => '6',
                'luasbangunan' => '100',
                'desc' => 'Desain kantor xyz dirancang agar dapat penempatan ruang yang sesuai dan atmosfer ruang yang bisa beradaptasi untuk berbagai pihak yang terjalin di kantor ini.',
            ],
            [
                'project' => 'Premium Tropical House', 
                'user_id' => '9',
                'category_type_id' => '1',
                'category_model_id' => '9',
                'luasbangunan' => '-',
                'desc' => 'Sebuah cluster rumah tinggal dengan memakai konsep tropical house yang terlihat sangat berkarakter.',
            ],
        ];
        
        foreach ($portofolio as $key => $value) {
            Portofolio::create($value);
        }
    }
}
