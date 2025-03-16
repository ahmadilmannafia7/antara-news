# 📰 Laravel API Berita - Antara News

Aplikasi Laravel sederhana yang menampilkan berita berdasarkan kategori menggunakan **Public API dari Antara News**.

---

## 🌐 Public API yang Digunakan

API: [https://api-berita-indonesia.vercel.app/](https://api-berita-indonesia.vercel.app/)

### 📂 Endpoint kategori yang tersedia:
| Kategori     | Endpoint |
|--------------|----------|
| Terbaru      | https://api-berita-indonesia.vercel.app/antara/terbaru/ |
| Politik      | https://api-berita-indonesia.vercel.app/antara/politik/ |
| Hukum        | https://api-berita-indonesia.vercel.app/antara/hukum/ |
| Ekonomi      | https://api-berita-indonesia.vercel.app/antara/ekonomi/ |
| Bola         | https://api-berita-indonesia.vercel.app/antara/bola/ |
| Olahraga     | https://api-berita-indonesia.vercel.app/antara/olahraga/ |
| Humaniora    | https://api-berita-indonesia.vercel.app/antara/humaniora/ |
| Lifestyle    | https://api-berita-indonesia.vercel.app/antara/lifestyle/ |
| Hiburan      | https://api-berita-indonesia.vercel.app/antara/hiburan/ |
| Dunia        | https://api-berita-indonesia.vercel.app/antara/dunia/ |
| Tekno        | https://api-berita-indonesia.vercel.app/antara/tekno/ |
| Otomotif     | https://api-berita-indonesia.vercel.app/antara/otomotif/ |

---

### 📦 Contoh Response API
```json
{
  "link": "https://www.antaranews.com/berita/4704597/profil-joey-pelupessy-pemain-naturalisasi-baru-timnas-indonesia",
  "title": "Profil Joey Pelupessy pemain naturalisasi baru Timnas Indonesia",
  "pubDate": "2025-03-11T22:02:08.000Z",
  "description": "Dalam upaya memperkuat skuad Tim Nasional Indonesia, PSSI kembali melakukan langkah strategis dengan menaturalisasi ...",
  "thumbnail": "https://img.antaranews.com/cache/800x533/2025/03/10/Naturalisasi.jpeg"
}
```

---

## 💻 Cara Menjalankan Project Laravel Ini di Lokal

Ikuti langkah-langkah berikut untuk menjalankan project Laravel ini setelah kamu clone atau download:

### 1. Clone Repository
```bash
git clone https://github.com/username/nama-repo.git
cd nama-repo
```
Ganti `username` dan `nama-repo` dengan username GitHub dan nama repository kamu.

---

### 2. Install Dependency PHP (via Composer)
```bash
composer install
```

---

### 3. Install Dependency Frontend (via NPM)
```bash
npm install
npm run dev
```

---

### 4. Salin File `.env`
```bash
cp .env.example .env
```

---

### 5. Generate App Key
```bash
php artisan key:generate
```

---

### 6. (Opsional) Konfigurasi Database
Buka file `.env` dan sesuaikan bagian berikut jika kamu menggunakan database:
```env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

---

### 7. (Opsional) Jalankan Migrasi
```bash
php artisan migrate
```

---

### 8. Jalankan Server Laravel
```bash
php artisan serve
```
Akses project di browser:  
👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

