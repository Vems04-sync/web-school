<x-app-layout>
    <div class="bg-slate-900 py-16 text-white text-center">
        <h1 class="text-4xl font-bold mb-4 uppercase tracking-wider">Cek Status Kelulusan</h1>
        <p class="text-gray-400 max-w-2xl mx-auto">Pantau hasil seleksi penerimaan siswa baru SMK Raden Rahmat secara *real-time*.</p>
    </div>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        @if(session('error'))
        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-8 rounded-r-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-red-700 font-medium">{{ session('error') }}</p>
                </div>
            </div>
        </div>
        @endif

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-8">
            <form action="{{ route('spmb.processCheck') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="registration_number" class="block text-sm font-bold text-gray-700 mb-2 uppercase tracking-wide">Nomor Registrasi SPMB</label>
                    <input type="text" name="registration_number" id="registration_number" value="{{ old('registration_number') }}" placeholder="Contoh: SPMB-2026-ABCDE" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 bg-gray-50 uppercase" required>
                    @error('registration_number')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 transition uppercase tracking-wider">
                    Periksa Status
                </button>
            </form>
        </div>

        @if(isset($applicant))
        <div class="mt-12 bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50 flex justify-between items-center">
                <h3 class="text-lg font-bold text-slate-900 uppercase">Hasil Pencarian</h3>
            </div>
            <div class="p-8 text-center">
                <h4 class="text-2xl font-bold text-slate-900 mb-2">{{ mb_strtoupper($applicant->full_name) }}</h4>
                <p class="text-gray-500 mb-8">NISN: {{ $applicant->nisn }} | No. Reg: <span class="font-bold text-slate-700">{{ $applicant->registration_number }}</span></p>

                @if($applicant->status === 'pending')
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-yellow-100 rounded-full mb-4">
                        <svg class="w-10 h-10 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h5 class="text-xl font-bold text-yellow-600 mb-2">PROSES SELEKSI</h5>
                    <p class="text-gray-600">Berkas Anda sedang dalam tahap evaluasi oleh panitia. Silakan cek kembali secara berkala.</p>
                
                @elseif($applicant->status === 'lulus')
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-green-100 rounded-full mb-4">
                        <svg class="w-10 h-10 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    </div>
                    <h5 class="text-xl font-bold text-green-600 mb-2">SELAMAT! ANDA DITERIMA</h5>
                    <p class="text-gray-600 mb-6">Anda dinyatakan lulus seleksi masuk SMK Raden Rahmat. Silakan segera melakukan daftar ulang.</p>
                    <a href="{{ route('spmb.print', $applicant->id) }}" class="inline-flex justify-center items-center px-6 py-2 border border-transparent text-sm font-bold rounded-md text-white bg-blue-600 hover:bg-blue-700 transition uppercase tracking-wider">
                        Cetak Bukti Pendaftaran
                    </a>
                
                @else
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-red-100 rounded-full mb-4">
                        <svg class="w-10 h-10 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </div>
                    <h5 class="text-xl font-bold text-red-600 mb-2">MOHON MAAF</h5>
                    <p class="text-gray-600">Anda belum dinyatakan lulus seleksi masuk pada periode ini. Tetap semangat!</p>
                @endif
            </div>
        </div>
        @endif
    </div>
</x-app-layout>
