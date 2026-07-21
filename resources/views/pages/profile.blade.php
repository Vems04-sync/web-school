<x-app-layout>
    <div class="bg-blue-900 py-16 text-white text-center">
        <h1 class="text-4xl font-bold mb-4">Profil MTsN Nusantara</h1>
        <p class="text-blue-100 max-w-2xl mx-auto">Mengenal lebih dekat sejarah, visi misi, serta struktur organisasi madrasah kami.</p>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-20">
        <!-- Sejarah -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center justify-center p-3 bg-blue-100 rounded-lg mb-4 text-blue-600">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Sejarah Berdiri</h2>
                <div class="prose prose-orange text-gray-600">
                    <p>MTsN Nusantara didirikan pada tahun 1990 dengan semangat untuk menyediakan pendidikan Islam yang terpadu dengan kurikulum nasional. Sejak awal berdirinya, madrasah ini telah meluluskan ribuan alumni yang tersebar di seluruh penjuru negeri.</p>
                    <p>Seiring berjalannya waktu, MTsN Nusantara terus berinovasi dalam metode pembelajaran, pengadaan fasilitas unggul, serta penerapan teknologi pendidikan guna menyongsong era revolusi industri 4.0.</p>
                </div>
            </div>
            <div class="bg-gray-200 rounded-2xl h-80 overflow-hidden shadow-lg">
                <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=800&q=80" alt="Sejarah" class="w-full h-full object-cover">
            </div>
        </section>

        <!-- Visi Misi -->
        <section class="bg-blue-50 rounded-3xl p-8 md:p-12 shadow-sm border border-blue-100">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900">Visi & Misi</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-blue-500">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Visi</h3>
                    <p class="text-center text-gray-600 italic">"Mewujudkan madrasah hebat bermartabat dengan keunggulan akhlak, akademik, dan literasi teknologi menuju generasi emas islami."</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-blue-500">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Menyelenggarakan pendidikan Islam yang integratif.
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Meningkatkan prestasi akademik dan non-akademik siswa.
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Membekali siswa dengan keterampilan teknologi dan literasi digital.
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            Membangun lingkungan sekolah yang asri, aman, dan nyaman.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Struktur Organisasi -->
        <section>
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Struktur Organisasi</h2>
                <p class="mt-4 text-gray-600">Jajaran pimpinan dan staf pengajar MTsN Nusantara.</p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <!-- Kepala Madrasah -->
                    <div class="md:col-span-3 mb-8">
                        <div class="inline-block bg-white p-6 rounded-xl shadow-md border border-gray-100">
                            <div class="w-24 h-24 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center overflow-hidden">
                                <svg class="w-12 h-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </div>
                            <h4 class="font-bold text-gray-900 text-lg">Dr. H. Ahmad Fulan, M.Pd</h4>
                            <p class="text-sm text-blue-600 font-medium">Kepala Madrasah</p>
                        </div>
                    </div>
                    
                    <!-- Wakasek 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
                        <div class="w-20 h-20 bg-gray-100 rounded-full mx-auto mb-4 flex items-center justify-center overflow-hidden">
                            <svg class="w-10 h-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Budi Santoso, S.Pd</h4>
                        <p class="text-sm text-blue-600">Waka Kurikulum</p>
                    </div>

                    <!-- Wakasek 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
                        <div class="w-20 h-20 bg-gray-100 rounded-full mx-auto mb-4 flex items-center justify-center overflow-hidden">
                            <svg class="w-10 h-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Siti Aminah, M.Ag</h4>
                        <p class="text-sm text-blue-600">Waka Kesiswaan</p>
                    </div>

                    <!-- Wakasek 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
                        <div class="w-20 h-20 bg-gray-100 rounded-full mx-auto mb-4 flex items-center justify-center overflow-hidden">
                            <svg class="w-10 h-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Ahmad Yani, S.E</h4>
                        <p class="text-sm text-blue-600">Waka Sarana & Prasarana</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
