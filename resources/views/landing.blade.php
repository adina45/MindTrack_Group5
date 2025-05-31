<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cek Kesehatan Mental Anda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
    html { scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-indigo-600 to-blue-500 text-white py-24 px-6 text-center shadow-lg">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Sudahkah Anda Memahami Kondisi Mental Anda?</h1>
      <p class="text-lg md:text-xl mb-6">Cek kondisi emosional dan mental Anda dengan cepat dan aman.</p>
      <a href="#cek" class="bg-white text-indigo-700 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-100 transition-all duration-300">Mulai Tes Sekarang</a>
    </div>
  </section>

  <!-- Benefit Section -->
  <section class="py-20 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-12 text-gray-800">Kenapa Tes Kesehatan Mental Itu Penting?</h2>
      <div class="grid md:grid-cols-3 gap-10">
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-5xl mb-4">🧠</div>
          <h3 class="text-xl font-semibold mb-2">Kenali Diri</h3>
          <p class="text-gray-600">Mengetahui keadaan mental Anda adalah langkah awal menuju perbaikan.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-5xl mb-4">⚡</div>
          <h3 class="text-xl font-semibold mb-2">Hasil Instan</h3>
          <p class="text-gray-600">Cukup beberapa menit, hasil langsung ditampilkan dengan jelas.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-5xl mb-4">🔒</div>
          <h3 class="text-xl font-semibold mb-2">Privasi Terjamin</h3>
          <p class="text-gray-600">Data Anda aman, hasil tes tidak dibagikan kepada siapapun.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section id="cek" class="bg-white py-20 text-center">
    <div class="max-w-2xl mx-auto">
      <h2 class="text-3xl font-bold mb-4 text-gray-800">Yuk Mulai Tes Kesehatan Mental</h2>
      <p class="text-gray-600 mb-8">Luangkan waktu sebentar untuk memahami kondisi diri Anda. Gratis, cepat, dan rahasia.</p>
      <a href="{{ route('login') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-full font-semibold shadow hover:bg-indigo-700 transition-all duration-300">Masuk & Mulai Tes</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-100 text-center py-6 text-sm text-gray-500 mt-16">
    &copy; 2025 <span class="font-semibold text-gray-700">TesMental.id</span> — Semua Hak Dilindungi.
  </footer>

</body>
</html>
