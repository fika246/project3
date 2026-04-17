<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $posts_data = [
            [
                'title'      => 'Memulai Perjalanan Belajar CodeIgniter',
                'slug'       => 'memulai-perjalanan-belajar-codeigniter',
                'content'    => 'Awal belajar CodeIgniter memang terasa membingungkan, apalagi saat pertama kali melihat banyak folder dan file yang belum familiar. Tapi justru dari situ proses belajar dimulai. Sedikit demi sedikit, saya mulai memahami fungsi controller, model, view, dan bagaimana semuanya saling terhubung dalam sebuah website sederhana.',
                'author'     => 'Nur Fika Prihatin',
                'status'     => 'published',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title'      => 'Belajar Coding dari Hal-Hal Sederhana',
                'slug'       => 'belajar-coding-dari-hal-hal-sederhana',
                'content'    => 'Perjalanan belajar coding tidak selalu dimulai dari hal besar. Kadang justru dimulai dari langkah paling sederhana, seperti menampilkan tulisan di layar, mengubah warna halaman, atau memahami alur file dalam project. Dari hal-hal kecil itulah rasa paham mulai tumbuh dan kepercayaan diri ikut terbentuk.',
                'author'     => 'Nur Fika Prihatin',
                'status'     => 'published',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'title'      => 'Membuat Tampilan Blog yang Lebih Nyaman Dilihat',
                'slug'       => 'membuat-tampilan-blog-yang-lebih-nyaman-dilihat',
                'content'    => 'Selain isi tulisan, tampilan blog juga punya peran penting dalam memberi kenyamanan bagi pembaca. Warna pastel yang lembut, layout yang rapi, serta pemilihan font yang enak dibaca bisa membuat halaman terasa lebih hidup. Tampilan yang sederhana namun estetik sering kali justru lebih menarik untuk dinikmati.',
                'author'     => 'Nur Fika Prihatin',
                'status'     => 'published',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($posts_data as $data) {
            $this->db->table('posts')->insert($data);
        }
    }
}