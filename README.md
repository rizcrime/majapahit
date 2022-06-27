# majapahit app dokumentasi
1. update dan install laravel
    a. composer update
    b. composer install
2. Atur .env pada database(mysql) jika bukan mysql lihat panduan pada website official laravel
    a. pastikan key ter generate (php artisan key:generate)
    b. username, password, dan lainnya pastikan sama dengan local database anda
3. Migrasi dan seed database
    a. php artisan migrate:fresh --seed 
4. Aplikasi siap digunakan

# Catatan :
1. Password menggunakan MD5 dengan password bawaan 'testpass'
2. username 10001 atau 10002
3. Sebagian besar tampilan menggunakan bootstrap online, maka wajib terkoneksi dengan interneet saat uji coba
4. tidak ada fitur CMS(kecuali pada fitur transaksi), anda dapat modifikasi melalui seeder yang telah disediakan
5. Thanks to :
   a. colorlib.com 
   b. startbootstrap.com
   to support free library
