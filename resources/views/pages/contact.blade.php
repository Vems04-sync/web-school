<x-app-layout>
    <div class="bg-blue-900 py-16 text-white text-center">
        <h1 class="text-4xl font-bold mb-4">Hubungi Kami</h1>
        <p class="text-blue-100 max-w-2xl mx-auto">Kami siap melayani dan menjawab pertanyaan Anda seputar MTsN Nusantara.</p>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
            <!-- Informasi Kontak -->
            <div class="p-10 lg:p-14 bg-blue-50">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Informasi Kontak</h2>
                
                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Alamat Madrasah</h3>
                            <p class="mt-1 text-gray-600">Jl. Pendidikan No. 123, Kota Pelajar, Provinsi Edukasi 12345</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Telepon & WhatsApp</h3>
                            <p class="mt-1 text-gray-600">Telepon: (021) 1234-5678</p>
                            <p class="mt-1 text-gray-600">WhatsApp: 0812-3456-7890 (Hanya Chat)</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Email</h3>
                            <p class="mt-1 text-gray-600">info@mtsnnusantara.sch.id</p>
                            <p class="mt-1 text-gray-600">spmb@mtsnnusantara.sch.id</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Jam Operasional Pelayanan</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex justify-between"><span>Senin - Kamis</span> <span>07.30 - 15.00 WIB</span></li>
                        <li class="flex justify-between"><span>Jumat</span> <span>07.30 - 11.30 WIB</span></li>
                        <li class="flex justify-between"><span>Sabtu & Minggu</span> <span class="text-red-500 font-semibold">Tutup</span></li>
                    </ul>
                </div>
            </div>

            <!-- Embed Iframe Map -->
            <div class="h-96 lg:h-auto min-h-[400px]">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126917.47525381831!2d106.75705359740177!3d-6.24158652078021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x100c5e82dd4b820!2sJakarta%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full object-cover"></iframe>
            </div>
        </div>
    </div>
</x-app-layout>
