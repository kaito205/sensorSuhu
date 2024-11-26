<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🌡️ Sensor Suhu

Proyek ini adalah sebuah aplikasi web sederhana yang menampilkan data suhu dan kelembapan secara real-time. Aplikasi ini menggunakan teknologi seperti Laravel, Bootstrap, dan jQuery.

## ✨ Fitur

1. **🚀 Navigasi Responsif**
   - Navbar dengan tautan ke halaman utama dan halaman tentang (About).

2. **⏱️ Tampilan Real-Time**
   - Menampilkan suhu dalam derajat Celsius dan kelembapan dalam persentase.
   - Data diperbarui secara otomatis setiap detik dari API yang disediakan oleh Laravel.

3. **⚠️ Notifikasi Status**
   - Status suhu ditampilkan sebagai:
     - ✅ **Normal**
     - 🔥 **Terlalu Panas**
     - ❄️ **Terlalu Dingin**
   - Warna teks suhu berubah sesuai dengan statusnya:
     - 🔴 Merah untuk suhu terlalu panas (>35°C).
     - 🔵 Biru untuk suhu terlalu dingin (<30°C).
     - ⚫ Hitam untuk suhu normal (30–35°C).

4. **🎨 Desain Modern**
   - Menggunakan Bootstrap 5 dan Google Fonts untuk tampilan yang menarik dan responsif.
   - Elemen-elemen UI seperti kartu (card) untuk suhu dan kelembapan.

## 🛠️ Teknologi yang Digunakan

- **📜 HTML5**: Struktur dasar halaman.
- **🎨 CSS (Bootstrap 5)**: Untuk styling dan desain responsif.
- **⚙️ JavaScript (jQuery)**: Untuk pengambilan data secara real-time dan pembaruan DOM.
- **🚀 Laravel**: Backend untuk API pengambilan data sensor.
- **✍️ Google Fonts**: Untuk tampilan teks yang menarik.
- **Font yang Digunakan**: `Goblin One` dan `Poppins`.

## 🔍 Cara Kerja

1. **📡 Data Sensor**:
   - Data suhu dan kelembapan diambil dari API endpoint Laravel (`{{ route('getdata') }}`).
   - Setiap detik, data diperbarui menggunakan jQuery.

2. **📊 Status Suhu**:
   - Status ditentukan berdasarkan nilai suhu:
     - ✅ **Normal**: 30°C – 35°C.
     - 🔥 **Terlalu Panas**: >35°C.
     - ❄️ **Terlalu Dingin**: <30°C.
   - Warna teks suhu berubah sesuai statusnya.

3. **📱 Desain Responsif**:
   - Navbar dapat disesuaikan untuk layar kecil.
   - Komponen seperti kartu dan teks menyesuaikan ukuran layar.

## 📂 Struktur File

- **📜 HTML**: File utama berisi struktur dan elemen UI.
- **🎨 CSS**: Disimpan di folder `assets/css/style.css`.
- **🖼️ Gambar**: Disimpan di folder `images`, seperti logo animasi (`cloud.gif`).
- **⚙️ JavaScript**: Menggunakan jQuery CDN dan file JavaScript custom untuk pengambilan data dan logika status.


## ✅ Prasyarat

- **⚙️ Server Laravel** dengan konfigurasi yang sesuai.
- **📡 Data Sensor**: Endpoint harus menyediakan data dalam format JSON:
  ```json
  {
      "temperature": 30,
      "humidity": 60
  }


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
