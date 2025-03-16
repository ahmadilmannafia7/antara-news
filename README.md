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

### 📦 Contoh Response API
```json
{
  "link": "https://www.antaranews.com/berita/4704597/profil-joey-pelupessy-pemain-naturalisasi-baru-timnas-indonesia",
  "title": "Profil Joey Pelupessy pemain naturalisasi baru Timnas Indonesia",
  "pubDate": "2025-03-11T22:02:08.000Z",
  "description": "Dalam upaya memperkuat skuad Tim Nasional Indonesia, PSSI kembali melakukan langkah strategis dengan menaturalisasi ...",
  "thumbnail": "https://img.antaranews.com/cache/800x533/2025/03/10/Naturalisasi.jpeg"
}
