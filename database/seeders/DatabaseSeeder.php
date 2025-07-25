<?php

namespace Database\Seeders;

use App\Models\KategoriBuku;
use App\Models\Post;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.test',
            'password' => Hash::make('admin'),
        ]);

        Post::factory()
            ->count(25)
            ->create();

        Notification::make()
            ->title('Welcome to Filament')
            ->body('You are ready to start building your application.')
            ->success()
            ->sendToDatabase($user);

        $kategoriList = [
            ['nama' => 'Fiksi', 'deskripsi' => 'Cerita rekaan atau khayalan'],
            ['nama' => 'Non-Fiksi', 'deskripsi' => 'Berdasarkan fakta dan kejadian nyata'],
            ['nama' => 'Sains', 'deskripsi' => 'Buku tentang ilmu pengetahuan'],
            ['nama' => 'Biografi', 'deskripsi' => 'Kisah hidup seseorang'],
            ['nama' => 'Teknologi', 'deskripsi' => 'Topik tentang kemajuan teknologi'],
            ['nama' => 'Sejarah', 'deskripsi' => 'Peristiwa masa lalu dan penting'],
            ['nama' => 'Psikologi', 'deskripsi' => 'Tentang perilaku dan pikiran manusia'],
            ['nama' => 'Pendidikan', 'deskripsi' => 'Materi pembelajaran dan pendidikan'],
            ['nama' => 'Filsafat', 'deskripsi' => 'Pemikiran dan logika manusia'],
            ['nama' => 'Agama', 'deskripsi' => 'Kepercayaan, ibadah, dan spiritualitas'],
            ['nama' => 'Kesehatan', 'deskripsi' => 'Informasi tentang kesehatan dan gaya hidup'],
            ['nama' => 'Hukum', 'deskripsi' => 'Peraturan dan sistem hukum'],
            ['nama' => 'Ekonomi', 'deskripsi' => 'Ilmu ekonomi dan bisnis'],
            ['nama' => 'Politik', 'deskripsi' => 'Sistem dan kebijakan pemerintahan'],
            ['nama' => 'Sastra', 'deskripsi' => 'Karya tulis kreatif dan budaya'],
            ['nama' => 'Komputer & IT', 'deskripsi' => 'Teknologi informasi dan pemrograman'],
            ['nama' => 'Matematika', 'deskripsi' => 'Ilmu hitung dan logika'],
            ['nama' => 'Anak-anak', 'deskripsi' => 'Buku bacaan dan edukasi untuk anak'],
            ['nama' => 'Remaja', 'deskripsi' => 'Buku untuk pembaca usia remaja'],
            ['nama' => 'Petualangan', 'deskripsi' => 'Cerita perjalanan dan eksplorasi'],
            ['nama' => 'Fantasi', 'deskripsi' => 'Cerita khayalan penuh imajinasi'],
            ['nama' => 'Horror', 'deskripsi' => 'Cerita seram dan menegangkan'],
            ['nama' => 'Romansa', 'deskripsi' => 'Cerita cinta dan hubungan emosional'],
            ['nama' => 'Misteri & Detektif', 'deskripsi' => 'Penyelidikan dan teka-teki'],
            ['nama' => 'Self-Improvement', 'deskripsi' => 'Pengembangan diri dan motivasi'],
            ['nama' => 'Manajemen', 'deskripsi' => 'Strategi dan ilmu manajerial'],
            ['nama' => 'Bahasa', 'deskripsi' => 'Pembelajaran bahasa dan tata bahasa'],
            ['nama' => 'Kesenian', 'deskripsi' => 'Seni rupa, musik, dan teater'],
            ['nama' => 'Travel', 'deskripsi' => 'Panduan dan cerita perjalanan'],
            ['nama' => 'Memasak', 'deskripsi' => 'Resep dan seni kuliner'],
            ['nama' => 'Fotografi', 'deskripsi' => 'Teknik dan karya fotografi'],
            ['nama' => 'Otomotif', 'deskripsi' => 'Kendaraan dan teknologi mesin'],
            ['nama' => 'Komik & Manga', 'deskripsi' => 'Cerita bergambar populer'],
            ['nama' => 'Ensiklopedia', 'deskripsi' => 'Informasi referensi dalam berbagai topik'],
            ['nama' => 'Majalah', 'deskripsi' => 'Publikasi berkala berbagai topik'],
        ];

        foreach ($kategoriList as $kategori) {
            KategoriBuku::create($kategori);
        }
    }
}
