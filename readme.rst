###################
Authentication dan OAuth2 Google di Codeigniter 3
###################

Program sederhana Login dan Register OAuth2 google, menggunakan framework codeigniter 3 dan template adminlte 3.

1. Login username password
Username-password akan diperiksa ke database local, jika sudah terdaftar maka dizinkan masuk, jika tidak terdaftar makan akan menampilkan pesan gagal.

2. Login OAuth2 Google
Akan melakukan pengecekkan akun google melalui API Google, jika akun google telah terdaftar maka tahap berikutnya pemeriksaan email di database local, jika email sudah terdaftar maka diizinkan masuk, jika tidak terdaftar maka akan menampilkan pesan gagal.

3. Register Akun
Membuat akun dengan mengisi formm yang telah disediakan, form telah di amankan menggunakan form_validation dan pengecekkan email jika sudah terdaftar.

4. Register Akun OAuth2 Google
Membuat akun dengan menggunakan akun google kita, jika akun google telah terdaftar maka tahap berikutnya pemeriksaan email di database local, jika email belum terdaftar maka akun akan otomatis di "create".

*********
Fitur
*********
- Login menggunakan username dan password
- Login menggunakan OAuth2 Google
- Register akun
- Register akun menggunakan OAuth2 Google
- Session login
- Form_validation

*********
Tools
*********

-  `Codeigniter 3 <https://codeigniter.com/>`_
-  `AdminLTE 3 <https://adminlte.io/themes/v3/>`_
-  `OAuth2 <https://developers.google.com/identity/protocols/oauth2?hl=id>`_
-  `Google apiclient <https://github.com/googleapis/google-api-php-client>`_

************
Instalasai
************
1. clone/download project https://github.com/Dstar18/ci3-authentication.git
2. import file database ke database local anda
3. setting koneksi database
4. buka browser dan masukkan url : http://localhost/ci3-authentication/ 

************
Dokumentasi
************
Demo aplikasi : https://youtu.be/fDJGJloFP2E
