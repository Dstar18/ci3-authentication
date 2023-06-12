###################
Authentication dan OAuth2 di Codeigniter 3
###################

Program sederhana login menggunakan authentication user-password dan OAuth2 Google, menggunakan framework codeigniter 3.
Program ini menyediakan dua fitur login, fitur pertama menggunakan username dan password, fitur kedua menggunakan otentikasi akun google.

1. Login username password
Username-password akan diperiksa ke database local, jika sudah terdaftar maka dizinkan masuk, jika tidak terdaftar makan akan menampilkan pesan gagal.

2. Login OAuth2 Google
Akan melakukan pengecekkan akun google melalui API Google, jika akun google telah terdaftar maka tahap berikutnya pemeriksaan email di database local, jika email sudah terdaftar maka diizinkan masuk, jika tidak terdaftar maka akan menampilkan pesan gagal.


*********
Fitur
*********
- Login menggunakan username dan password
- Pemeriksaan username dan password di database local
- Login menggunakan OAuth2 Google
- Otentikasi akun google kemudian melakukan pemeriksaan email di database local
- Respon login berhasil dan gagal
- Session login

*********
Tools
*********

-  `Codeigniter 3 <https://codeigniter.com/>`_
-  `OAuth2 <https://developers.google.com/identity/protocols/oauth2?hl=id>`_
-  `Google apiclient <https://github.com/googleapis/google-api-php-client>`_

************
Dokumentasi
************
Demo aplikasi : 
