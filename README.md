# LokaJawa — Website Cerita Rakyat PHP Native

Website profil cerita rakyat / budaya Jawa untuk tugas RPL.

## Teknologi
- PHP Native
- HTML5
- CSS3
- JavaScript vanilla
- Tidak menggunakan framework

## Fitur
1. Landing page / Beranda
2. Navigasi Beranda, Cerita, Tentang
3. 3 cerita rakyat: Roro Jonggrang, Timun Mas, Sangkuriang
4. Pilihan cerita menggunakan parameter PHP `?cerita=`
5. Narasi Bahasa Indonesia dan Bahasa Jawa (Krama)
6. Tombol pergantian bahasa tanpa reload
7. Responsive untuk desktop dan mobile
8. Section fitur dan penjelasan website

## Cara menjalankan di Laragon
1. Copy folder `cerita_jawa_php` ke:
   `C:\laragon\www\`
2. Jalankan Apache dari Laragon.
3. Buka:
   `http://localhost/cerita_jawa_php/`

## Cara menjalankan dengan PHP built-in server
Masuk ke folder project melalui terminal lalu:
`php -S localhost:8000`

Kemudian buka:
`http://localhost:8000`

## Struktur
cerita_jawa_php/
├── index.php
├── style.css
└── README.md
