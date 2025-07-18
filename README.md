Pemrograman Web – Company Profile Perpustakaan
Ini adalah proyek tugas UAS mata kuliah Pemrograman Web berupa website Company Profile Perpustakaan yang dikembangkan menggunakan Laravel Filament Starter sebagai admin panel, serta menggunakan template HTML Envotek untuk tampilan frontend.



📌 Deskripsi Proyek
Proyek ini adalah implementasi website profil untuk institusi perpustakaan. Website memiliki dua bagian utama:

Client-side (Frontend) — Menampilkan informasi seperti tentang kami, layanan, kontak, dan lainnya.

Admin Panel (Filament) — Hanya untuk developer/administrasi internal, tanpa login user umum.

🚀 Teknologi Digunakan
Laravel 12 + Filament Admin Panel

Livewire & Alpine.js (SPA-ready)

TailwindCSS & Vite

Template HTML5: Envotek dari ThemeForest/Envato Elements

PHP 8.2+, Node.js 18+, Composer

📦 Cara Instalasi (Local Setup)
bash
Copy
Edit
# Clone repository
git clone https://github.com/Steven-Juan/pemrograman-web-perpustakaan-profile.git
cd pemrograman-web-perpustakaan-profile

# Install PHP dependencies
composer install

# Install frontend assets
npm install
npm run build

# Konfigurasi .env & jalankan migrasi
cp .env.example .env
php artisan key:generate
php artisan migrate --seed

# Login Admin Panel (Filament)
http://localhost:8000/admin
Username: admin  
Password: admin
🎨 Struktur Proyek
Folder/Path	Deskripsi
/resources/views	File Blade views utama
/resources/views/client	Halaman frontend dari template Envotek
/resources/views/admin	Komponen Filament Admin Panel
/public	Asset statis Envotek (CSS, JS, images, dll)

🔌 Plugin Filament Terpasang
Plugin	Deskripsi
Filament Breezy	Otentikasi admin dan manajemen profil pengguna
Filament Curator	Media manager bawaan
Filament Logger	Log aktivitas otomatis pada CRUD resource
Filament Peek	Live preview halaman frontend
