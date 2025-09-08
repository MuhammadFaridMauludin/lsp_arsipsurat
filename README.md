📂 Aplikasi Arsip Surat
🎯 Tujuan
Aplikasi ini dibuat untuk memenuhi kebutuhan pengarsipan surat secara digital. Dengan adanya aplikasi ini, pengguna dapat menyimpan, mencari, mengelola, dan mengunduh arsip surat dengan lebih mudah dan terstruktur.
✨ Fitur
•	📥 Upload Surat: Menambahkan arsip baru dengan file PDF dan kategori tertentu.
•	🔍 Pencarian Arsip: Cari arsip berdasarkan judul surat.
•	📑 Kategori Surat: Kelola kategori surat (tambah, edit, hapus).
•	👁️ Preview Surat: Lihat detail surat langsung dalam browser (PDF viewer).
•	📂 Download Surat: Unduh arsip surat dalam format PDF.
•	🗑️ Hapus Surat: Menghapus arsip yang tidak diperlukan.
•	👤 Halaman About: Informasi pembuat aplikasi.
⚙️ Cara Menjalankan
1.	Clone repository:
   git clone https://github.com/MuhammadFaridMauludin/lsp_arsipsurat.git
2.	Masuk ke folder project:
   cd lsp_arsipsurat
3.	Install dependency Laravel:
   composer install
4.	Copy file .env.example menjadi .env lalu sesuaikan konfigurasi database:
   cp .env.example .env
5.	Generate key aplikasi:
   php artisan key:generate
6.	Migrasi database:
   php artisan migrate
7.	Jalankan server Laravel:
   php artisan serve
8.	Akses aplikasi di browser: http://localhost:8000
📸 Screenshot
Tampilan aplikasi Arsip Surat:
- Dashboard Arsip (assets/img/dashboard.png)
- Detail Arsip (assets/img/detail.png)
- Halaman Kategori (assets/img/kategori.png)
- Halaman About (assets/img/about.png)
👨‍💻 Pembuat
Nama : Muhammad Farid Mauludin
NIM  : 2231740009
