# HALAMAN SEDERHANA LOGIN SESSION

Aplikasi ini merupakan implementasi sederhana dari sistem login menggunakan PHP dan sesi (session). Terdapat dua bagian utama dalam aplikasi ini: halaman login dan dashboard. 

## Fitur Utama

1. **Login**: 
   - Pengguna diminta untuk memasukkan username dan password. Dalam contoh ini, username yang valid adalah `salman` dan password adalah `2121`.
   - Jika pengguna berhasil login, sesi `logged` akan diatur ke `TRUE`, dan pengguna akan diarahkan ke halaman dashboard.
   - Jika username atau password yang dimasukkan salah, pesan kesalahan akan ditampilkan.

2. **Dashboard**:
   - Halaman ini hanya dapat diakses jika pengguna telah login. Jika tidak, pengguna akan diarahkan kembali ke halaman login.
   - Terdapat tombol untuk logout, yang akan menghancurkan sesi dan mengembalikan pengguna ke halaman login.

## Cara Memakai
1. Masukan username ``` salman ``` dan password ``` 2121 ``` dibagian ``` Kotak Form ```
2. Klik tombol ``` Login ```
3. Setelah itu, akan diarahkan ke halaman ``` dashboard ``` yang berisi pesan 'Selamat Datang' dan tombol ``` Logout ``` untuk ke halaman ``` Login ``` lagi

## Catatan
- Untuk menjalankan aplikasi ini, pastikan server PHP (seperti XAMPP) telah terpasang dan dikonfigurasi.
- Kode ini masih sederhana dan dapat ditingkatkan lebih lanjut dengan menambahkan fitur seperti validasi input, enkripsi password, dan pengelolaan pengguna yang lebih baik.

<img src="login.png">
<img src="dashboard.png">

