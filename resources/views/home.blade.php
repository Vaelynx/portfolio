<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio | Nafsya Rezandia wibi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-white shadow-lg rounded-lg">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
      <h1 class="text-2xl font-bold">Nafsya Rezandia w.</h1>
      <nav class="space-x-4">
        <a href="#about" class="text-gray-600 border border-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white transition duration-300">
            COMMPANY
          </a>
        <a href="#about" class="text-gray-600 hover:text-blue-500">Tentang</a>
        <a href="#projects" class="text-gray-600 hover:text-blue-500">Proyek</a>
        <a href="#contact" class="text-gray-600 hover:text-blue-500">Kontak</a>
        <a href="/products" class="text-gray-600 hover:text-blue-500">Products</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="text-center py-20 bg-blue-50 min-h-screen">
    <img
    src="/images/pfp.jpg"
    alt="Foto Profil"
    class="w-32 h-32 object-cover object-top mx-auto rounded-full shadow-lg mb-4"
  />
  
      <h2 class="text-3xl font-semibold mb-2">Halo, saya <span class="text-blue-600">Rezan</span></h2>
    <p class="text-gray-600 max-w-xl mx-auto mb-6">Seorang Web Developer yang suka membangun aplikasi web modern dengan design yang simple dan menarik.</p>
    <a href="{{ asset('cv/CV-Kamu.pdf') }}" download class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
      download CV
    </a>
  </section>

  <!-- Tentang Saya -->
  <section id="about" class="container mx-auto px-4 py-16">
    <h3 class="text-2xl font-semibold mb-4">ABOUT ME</h3>
    <p class="text-gray-700 leading-relaxed">Saya adalah seorang siswa dari SMK N 1 Ngawen yang terletak di Yogyakarta, Gunungkidul, yang memilih untuk mengambil jurusan Teknik Komputer dan Jaringan (TKJ). Saat ini, saya berusia 17 tahun dan memiliki cita-cita yang sangat besar untuk menjadi seorang pengusaha sukses di bidang teknologi. Saya ingin membangun sebuah usaha yang tidak hanya memberikan keuntungan finansial, tetapi juga memberikan manfaat yang signifikan bagi masyarakat luas. Salah satu tujuan utama saya adalah menciptakan lapangan pekerjaan, terutama bagi generasi muda di daerah saya, agar mereka bisa mengembangkan potensi mereka tanpa harus meninggalkan kampung halaman.

        Sejak awal sekolah, saya sudah sangat tertarik dengan dunia teknologi. Keinginan saya untuk mendalami bidang ini tumbuh seiring dengan waktu, terutama setelah mempelajari berbagai konsep dan praktik di bidang jaringan komputer, perangkat keras, dan pemrograman dasar. Jurusan TKJ yang saya ambil memberikan banyak kesempatan untuk belajar dan berlatih secara langsung, mulai dari mengelola jaringan komputer, merakit perangkat keras, menginstal berbagai sistem operasi, hingga memahami prinsip dasar keamanan jaringan. Ilmu-ilmu tersebut semakin membuka mata saya terhadap potensi besar yang dimiliki oleh teknologi dalam berbagai aspek kehidupan.
        
        Namun, saya percaya bahwa belajar tidak hanya terbatas pada ruang kelas. Oleh karena itu, saya terus berusaha untuk mengembangkan diri di luar sekolah dengan memanfaatkan berbagai sumber daya yang ada, seperti internet dan platform pelatihan online. Saya sering mengikuti berbagai pelatihan, workshop, dan lomba-lomba di bidang teknologi untuk meningkatkan keterampilan praktis saya. Melalui pengalaman ini, saya semakin memahami pentingnya kerja keras dan ketekunan dalam meraih tujuan.
        
        Salah satu impian terbesar saya adalah untuk memiliki bisnis yang dapat berkontribusi dalam menciptakan solusi teknologi yang dapat memudahkan kehidupan banyak orang. Saya ingin membangun sebuah perusahaan yang mampu menghasilkan produk atau layanan berbasis teknologi yang berguna bagi masyarakat, sekaligus menciptakan peluang kerja bagi orang lain. Saya yakin dengan memanfaatkan kemampuan saya dalam bidang teknologi dan kepemimpinan yang terus berkembang, saya bisa membangun sebuah usaha yang tidak hanya sukses secara finansial tetapi juga memberikan dampak positif bagi banyak orang.
        
        Bagi saya, menjadi pengusaha bukan hanya tentang mencari keuntungan pribadi, tetapi juga tentang memberi kesempatan bagi orang lain untuk berkembang. Oleh karena itu, saya berkomitmen untuk membangun sebuah usaha yang tidak hanya menguntungkan secara ekonomi, tetapi juga memberi dampak sosial yang positif bagi masyarakat sekitar, khususnya di daerah saya yang masih memiliki tantangan dalam hal penciptaan lapangan kerja.
        
        Saya percaya bahwa kunci menuju kesuksesan terletak pada kerja keras, konsistensi, dan kemampuan untuk terus belajar. Oleh karena itu, saya terus berusaha untuk mengasah keterampilan teknis dan keterampilan kepemimpinan saya agar bisa mewujudkan impian tersebut. Dengan bekal ilmu yang saya peroleh di sekolah, pengalaman yang saya dapatkan melalui berbagai pelatihan, serta semangat yang saya miliki, saya yakin bahwa impian saya untuk menjadi pengusaha sukses dan menciptakan lapangan pekerjaan bukanlah hal yang mustahil.
        </p>

        <a href="/about" class="block w-full text-center bg-purple-500 hover:bg-purple-600 text-white py-2 px-4 rounded mt-4">
          selengkapnya
        </a>

  </section>

  <!-- Proyek -->
<section id="projects" class="bg-white py-16">
    <div class="container mx-auto px-4">
      <h3 class="text-2xl font-semibold mb-8">MY PROJECT</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Proyek 1 -->
        <div class="bg-gray-100 p-6 rounded-lg shadow flex flex-col h-full">
          <h4 class="text-xl font-semibold mb-2">Pintu otomatis dengan arduino</h4>
          <p class="text-gray-600 flex-grow">
            Proyek ini adalah sebuah sistem pintu otomatis yang dirancang menggunakan mikrokontroler Arduino Uno/Nano, sensor infrared (IR), dan motor servo. Sistem ini bekerja dengan cara mendeteksi keberadaan objek di depan pintu, kemudian membuka pintu otomatis. Setelah beberapa detik, pintu akan menutup kembali.
  
            <br><br>
            <strong>Komponen:</strong> Arduino, sensor IR, motor servo, breadboard, dll.
            <br>
            <strong>Cara kerja:</strong> Sensor mendeteksi objek → Arduino gerakkan servo → pintu terbuka → delay → pintu menutup.
            <br>
            <strong>Manfaat:</strong> Tanpa sentuh, hemat energi, bisa dikembangkan jadi smart door.
          </p>
          <a href="/register" class="block w-full text-center bg-purple-500 hover:bg-purple-600 text-white py-2 px-4 rounded mt-4">
            Lihat Project
          </a>
        </div>
  
        <!-- Proyek 2 -->
        <div class="bg-gray-100 p-6 rounded-lg shadow flex flex-col h-full">
          <h4 class="text-xl font-semibold mb-2">Web game store</h4>
          <p class="text-gray-600 flex-grow">
            GameKu adalah platform digital mirip Steam, dibuat dengan Laravel & React. Pengguna bisa cari, beli, dan mainkan game digital secara mudah.
  
            <br><br>
            <strong>Fitur:</strong> Home, halaman game, login/register, keranjang, library, profil, toko, admin panel.
            <br>
            <strong>Teknologi:</strong> Laravel (API), React.js + Tailwind/Bootstrap, MySQL, GitHub.
            <br>
            <strong>Manfaat:</strong> Belajar sistem fullstack & e-commerce digital.
          </p>
          <a href="/register" class="block w-full text-center bg-purple-500 hover:bg-purple-600 text-white py-2 px-4 rounded mt-4">
            Lihat Project
          </a>
        </div>
  
      </div>
    </div>
  </section>
  

  <!-- Kontak -->
  <section id="contact" class="container mx-auto px-4 py-16 text-center">
    <h3 class="text-2xl font-semibold mb-4">Contact Me!</h3>
    <p class="text-gray-600 mb-6">you can contact me with =></p>
    <div class="flex justify-center space-x-6">
      <a href="https://github.com/Garciee" class="text-blue-700 hover:text-black">GitHub</a>
      <a href="https://linkedin.com/in/Nafsya Rezandia Wibi" class="text-blue-700 hover:text-blue-900">LinkedIn</a>
      <a href="mailto:garciedecast@email.com" class="text-red-500 hover:text-red-700">Email</a>
      <a href="#" class="text-red-500 hover:text-red-700">whatsapp</a>
    </div>
  </section>

  <!-- sosmed -->
  <section id="contact" class="container mx-auto px-4 py-16 text-center">
    <h3 class="text-2xl font-semibold mb-4">MY socmed!</h3>
    <p class="text-gray-600 mb-6">I’m active on =></p>
    <div class="flex justify-center space-x-6">
      <a href="https://github.com/Garciee" class="text-blue-700 hover:text-black flex items-center">
        <i class="fab fa-instagram mr-2"></i> Instagram
      </a>
      <a href="https://linkedin.com/in/Nafsya Rezandia Wibi" class="text-blue-700 hover:text-blue-900 flex items-center">
        <i class="fab fa-tiktok mr-2"></i> Tiktok
      </a>
    </div>
</section>

  

  <!-- Footer -->
  <footer class="text-center py-6 bg-gray-200 text-sm text-gray-600">
    &copy; 2025 Nafsya Rezandia wibi. indonesia, yogyakarta, gunungkidul
  </footer>

  <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
  
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });
  </script>
  
</body>
</html>
