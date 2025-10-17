<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans text-gray-900 scroll-smooth">

    <!-- Navbar -->
    <nav class="fixed w-full bg-white shadow z-50">
        <div class="max-w-6xl mx-auto px-4 flex justify-between items-center h-16">
            <h1 class="text-xl font-bold">Portfolio</h1>
            <div class="space-x-6">
                <a href="#home" class="hover:text-blue-500">Home</a>
                <a href="#about" class="hover:text-blue-500">Tentang Saya</a>
                <a href="#experience" class="hover:text-blue-500">Pengalaman</a>
                <a href="#projects" class="hover:text-blue-500">Projek</a>
            </div>
        </div>
    </nav>

    <!-- Home -->
    <section id="home" class="h-screen flex flex-col justify-center items-center bg-gradient-to-b from-blue-100 to-white text-center">
        <h2 class="text-4xl font-bold mb-4">Halo, Saya <span class="text-blue-600">Surya Jaya</span></h2>
        <p class="text-lg max-w-xl">Seorang web developer yang berfokus pada pengembangan aplikasi web modern dan responsif</p>
    </section>

    <!-- About -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-6">Tentang Saya</h2>
            <p class="text-gray-700 leading-relaxed">Saya adalah seorang Full Stack Web Developer yang memiliki ketertarikan besar pada pengembangan aplikasi berbasis web. Berpengalaman dalam merancang, membangun, dan mengoptimalkan sistem dengan fokus pada efisiensi, keamanan, dan pengalaman pengguna.
            Terampil menggunakan berbagai teknologi seperti PHP (Laravel), serta MySQL untuk pengelolaan data.</p>
            <div class="mt-6 flex justify-center gap-8">
                <div>
                    <h3 class="font-semibold">Skill</h3>
                    <ul class="text-gray-600">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>Tailwind CSS</li>
                        <li>MySQL</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold">Pendidikan</h3>
                    <p class="text-gray-600">S1 Informatika - Universitas DDigital Teknologi Indonesia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section id="experience" class="py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-6">Pengalaman</h2>
            <div class="space-y-4 text-gray-700">
                <div>
                    <h3 class="font-semibold text-lg">Full Stack Developer Intern - PT Visi Indonesia Madiri</h3>
                    <p class="text-sm text-gray-500">Oktober 2022 - Februari 2023</p>
                    <p>Bertanggung jawab dalam pengembangan dan pemeliharaan website responsif untuk meningkatkan pengalaman pengguna, serta mendukung tim dalam merancang dan mengimplementasikan survei guna mengumpulkan data pengguna. Mengolah hasil survei untuk integrasi sistem dan analisis lebih lanjut. Selain itu, memberikan dukungan teknis serta menangani troubleshooting perangkat keras dan perangkat lunak IT untuk memastikan kelancaran operasional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-10">Projek Saya</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @php
                    $projects = [
                        ['title' => 'Sistem Pendukung Keputusan Pembelian Mobil Bekas', 'desc' => 'Aplikasi SPK menggunakan metode VIKOR berbasis web menggunakan PHP murni.'],
                    ];
                @endphp

                @foreach ($projects as $project)
                    <div class="bg-white shadow rounded-xl p-6 hover:-translate-y-1 hover:shadow-lg transition">
                        <h3 class="text-lg font-semibold mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-600">{{ $project['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 bg-blue-600 text-white text-center">
        <p>© {{ date('Y') }} Surya Jaya. All rights reserved.</p>
    </footer>

</body>
</html>
