<x-app-layout>
    <!-- SPMB Banner -->
    <div class="bg-gradient-to-r from-blue-900 to-blue-700 py-16 text-white text-center">
        <div class="max-w-3xl mx-auto px-4">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-500 text-white text-sm font-bold tracking-wider mb-4 shadow">
                TAHUN AJARAN {{ date('Y') }}/{{ date('Y')+1 }}
            </span>
            <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight">Portal SPMB Online</h1>
            <p class="text-lg text-blue-100 mb-8">Pendaftaran Seleksi Penerimaan Mahasiswa/Siswa Baru MTsN Nusantara.</p>
            <a href="#form-daftar" class="inline-flex justify-center items-center px-8 py-4 border border-transparent text-lg font-bold rounded-lg text-blue-900 bg-blue-500 hover:bg-blue-400 transition shadow-lg transform hover:-translate-y-1">
                Isi Formulir Pendaftaran Online
            </a>
        </div>
    </div>

    @if(session('success'))
    <div class="max-w-4xl mx-auto px-4 mt-8">
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm" role="alert">
            <p class="font-bold">Berhasil!</p>
            <p>{{ session('success') }}</p>
        </div>
    </div>
    @endif

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-20">
        
        <!-- Timeline Alur Pendaftaran -->
        <section>
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Alur Pendaftaran</h2>
                <p class="mt-4 text-gray-600">Langkah-langkah mudah untuk bergabung bersama kami.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center relative">
                    <div class="w-16 h-16 mx-auto bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold text-2xl mb-4 shadow-sm ring-4 ring-white z-10 relative">1</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Pendaftaran Online</h3>
                    <p class="text-sm text-gray-500">Mengisi formulir pendaftaran melalui portal ini secara lengkap.</p>
                </div>
                <div class="text-center relative">
        @if(session('success'))
        <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8 rounded-r-md shadow-sm">
            <div class="flex items-start">
                <div class="flex-shrink-0 mt-1">
                    <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-bold text-green-800 mb-1">Pendaftaran Berhasil!</h3>
                    <p class="text-sm text-green-700 mb-4">{{ session('success') }}</p>
                    <p class="text-sm font-bold text-slate-800 mb-4 bg-white p-3 rounded border border-green-200 inline-block">Nomor Registrasi: {{ session('registration_number') }}</p>
                    <div>
                        <a href="{{ route('spmb.print', session('applicant_id')) }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-bold rounded shadow-sm text-white bg-green-600 hover:bg-green-700 uppercase tracking-wider transition">
                            <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" /></svg>
                            Cetak Bukti Pendaftaran (PDF)
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <h2 class="text-xl font-bold text-slate-900 uppercase">Formulir Pendaftaran</h2>
            </div>
            <div class="p-6 md:p-8">
                <form action="{{ route('spmb.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-6">
                        <label for="full_name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="full_name" id="full_name" required value="{{ old('full_name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('full_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                            <input type="text" name="nisn" id="nisn" required value="{{ old('nisn') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            @error('nisn') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon/WA Aktif</label>
                            <input type="text" name="phone" id="phone" required value="{{ old('phone') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="previous_school" class="block text-sm font-medium text-gray-700">Asal Sekolah (SD/MI)</label>
                        <input type="text" name="previous_school" id="previous_school" required value="{{ old('previous_school') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        @error('previous_school') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-6">
                        <label for="address" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                        <textarea name="address" id="address" rows="3" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">{{ old('address') }}</textarea>
                        @error('address') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mt-8">
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition uppercase tracking-wider">
                            Kirim Formulir Pendaftaran
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
