<style>
    @keyframes softPulseAdmin {
        0%, 100% { opacity: 0.35; transform: scale(0.95); }
        50% { opacity: 1; transform: scale(1.05); }
    }
    .animate-soft-pulse-admin {
        animation: softPulseAdmin 1.6s ease-in-out infinite;
    }
    @keyframes loaderBarAdmin {
        0% { width: 0%; }
        50% { width: 70%; }
        100% { width: 100%; }
    }
    .animate-loader-bar-admin {
        animation: loaderBarAdmin 1.2s ease-in-out infinite;
    }
</style>

<!-- Admin Loading Screen (Dark Transparent - No White Flash) -->
<div id="admin-page-loader" style="position: fixed; inset: 0; z-index: 99999; background-color: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); display: flex; flex-direction: column; align-items: center; justify-content: center; transition: opacity 0.5s ease-out;">
    <div style="position: relative; display: flex; flex-direction: column; align-items: center; text-align: center;">
        <!-- Glow effect -->
        <div style="position: absolute; width: 10rem; height: 10rem; background-color: rgba(16, 185, 129, 0.25); border-radius: 9999px; filter: blur(24px);"></div>
        
        <!-- Logo Sekolah Berkedip Soft -->
        <img src="{{ asset('storage/SMA AL-ISLAMI.png') }}" alt="Loading SMA AL-ISLAMI" class="animate-soft-pulse-admin" style="width: 8rem; height: 8rem; object-fit: contain; position: relative; z-index: 10; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.3));">
        
        <p class="animate-soft-pulse-admin" style="margin-top: 1rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.25em; color: #34d399; font-family: sans-serif;">PANEL ADMIN SMA AL-ISLAMI</p>
        
        <!-- Loading Progress Bar -->
        <div style="width: 7rem; height: 4px; background-color: rgba(255, 255, 255, 0.15); border-radius: 9999px; margin-top: 0.75rem; overflow: hidden; position: relative;">
            <div class="animate-loader-bar-admin" style="height: 100%; background-color: #10b981; border-radius: 9999px;"></div>
        </div>
    </div>
</div>

<script>
    function hideAdminPageLoader() {
        const loader = document.getElementById('admin-page-loader');
        if (loader && !loader.classList.contains('loader-hidden')) {
            loader.classList.add('loader-hidden');
            loader.style.opacity = '0';
            setTimeout(function() {
                loader.style.display = 'none';
            }, 500);
        }
    }

    if (document.readyState === 'complete') {
        hideAdminPageLoader();
    } else {
        window.addEventListener('load', hideAdminPageLoader);
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(hideAdminPageLoader, 400);
        });
    }

    // Safety fallback timeout
    setTimeout(hideAdminPageLoader, 1200);

    // Livewire SPA navigation support
    document.addEventListener('livewire:navigating', function() {
        const loader = document.getElementById('admin-page-loader');
        if (loader) {
            loader.style.display = 'flex';
            loader.style.opacity = '1';
            loader.classList.remove('loader-hidden');
        }
    });
    document.addEventListener('livewire:navigated', function() {
        hideAdminPageLoader();
    });
</script>
