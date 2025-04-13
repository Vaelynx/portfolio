<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk | Nafsya Rezandia wibi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-white shadow-lg rounded-lg">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
      <h1 class="text-2xl font-bold">Nafsya Rezandia w.</h1>
      <nav class="space-x-4">
        <a href="/" class="text-gray-600 hover:text-blue-500">Home</a>
        <a href="/products" class="text-gray-600 hover:text-blue-500">Products</a>
        <a href="#about" class="text-gray-600 hover:text-blue-500">Tentang</a>
        <a href="#projects" class="text-gray-600 hover:text-blue-500">Proyek</a>
        <a href="#contact" class="text-gray-600 hover:text-blue-500">Kontak</a>
      </nav>
    </div>
  </header>

  <!-- Product Detail Section -->
  <section class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Product Image -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <img src="/images/product1.jpg" alt="Product Image" class="w-full h-64 object-cover rounded mb-4">
      </div>

      <!-- Product Info -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-3xl font-semibold mb-4">UI Kit Modern</h2>
        <p class="text-gray-600 mb-4">Kumpulan komponen UI siap pakai dengan gaya modern berbasis Tailwind CSS. Sangat cocok untuk membuat aplikasi atau website dengan desain yang minimalis dan elegan.</p>
        
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Fitur Utama:</h3>
        <ul class="list-disc pl-5 mb-6 text-gray-600">
          <li>Responsive dan mobile-friendly</li>
          <li>Komponen siap pakai: tombol, form, kartu, dll.</li>
          <li>Dokumentasi lengkap</li>
          <li>Desain yang bersih dan mudah dikustomisasi</li>
        </ul>

        <h3 class="text-xl font-semibold text-gray-800 mb-2">Harga:</h3>
        <p class="text-xl font-semibold text-blue-600 mb-6">Rp 150.000</p>

        <!-- Add to Cart / Buy Now -->
        <form action="/cart" method="POST" class="space-y-4">
          @csrf
          <input type="hidden" name="product_id" value="1"> <!-- ID produk -->
          
          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg shadow-lg">
            Tambah ke Keranjang
          </button>
          
          <a href="/checkout" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg shadow-lg block text-center">
            Beli Sekarang
          </a>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 bg-gray-200 text-sm text-gray-600">
    &copy; 2025 Nafsya Rezandia wibi. indonesia, yogyakarta, gunungkidul
  </footer>

</body>
</html>
