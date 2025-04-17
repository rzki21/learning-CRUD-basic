# learning-CRUD-basic 
![Image](https://github.com/user-attachments/assets/6b01ee21-5bf5-471b-9318-f4dec62581a1)

# 📘 Belajar CRUD Basic Pakai PHP
  
Ini adalah project basic dan sederhana buat **belajar CRUD (Create, Read, Update, Delete)** menggunakan **PHP Native** (tanpa framework). Tujuannya biar kita ngerti dasar-dasar cara kerja aplikasi web yang bisa **tambah, lihat, edit, dan hapus data**.

---

## 🛠️ Fitur yang Dibuat

- ✅ Tambah data ke database
- ✅ Lihat semua data
- ✅ Edit data yang sudah ada
- ✅ Hapus data


---

## 💽 Tools & Stack yang dipakai

- VScode/Sublime Text
- PHP (Native, no framework)
- MySQL / MariaDB
- HTML + CSS

## How to use 

1. **Clone repo ini** ke folder htdocs (buat yang pakai XAMPP) atau ke server lokal kamu

\`\`\`bash
git clone https://github.com/username/$PROJECT_NAME.git
\`\`\`

2. **Import database**
   - Buka phpMyAdmin
   - Buat database baru (misalnya: \`crud_db\`)
   - Import file \`crud_db.sql\` yang ada di folder project

3. **Cek koneksi database**
   - Buka file \`koneksi.php\`
   - Pastikan username, password, dan nama databasenya sesuai dengan setup kamu

\`\`\`php
\$host = "localhost";
\$user = "root";
\$pass = "";
\$db   = "crud_db";
\`\`\`

4. **Jalankan di browser**

\`\`\`bash
localhost/$PROJECT_NAME/
\`\`\`
