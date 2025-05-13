<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Ulfa Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <script src="https://unpkg.com/alpinejs" defer></script>

    <!-- Font Inter, Libre Bodoni -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

    <!-- Script untuk toggle modal Login + animasi -->
    <script>
      const openBtn = document.getElementById('openLoginModal');
      const closeBtn = document.getElementById('closeLoginModal');
      const modal = document.getElementById('loginModal');
      const modalBox = document.getElementById('loginModalBox');

      openBtn.addEventListener('click', function (e) {
        e.preventDefault();
        modal.classList.remove('hidden');
        
        // Delay agar animasi bisa aktif
        setTimeout(() => {
          modalBox.classList.remove('opacity-0', 'scale-95');
          modalBox.classList.add('opacity-100', 'scale-100');
        }, 10);
      });

      function closeModal() {
        modalBox.classList.remove('opacity-100', 'scale-100');
        modalBox.classList.add('opacity-0', 'scale-95');

        // Tunggu animasi selesai, baru sembunyikan modal
        setTimeout(() => {
          modal.classList.add('hidden');
        }, 300);
      }

      closeBtn.addEventListener('click', function (e) {
        e.preventDefault();
        closeModal();
      });

      window.addEventListener('click', function (e) {
        if (e.target === modal) {
          closeModal();
        }
      });
    </script>

    <!-- Script for Carousel Customers -->
    <script>
      const toggleBtn = document.getElementById('toggleReviews');
      const extraWrapper = document.getElementById('extraReviewsWrapper');
      let expanded = false;

      toggleBtn.addEventListener('click', () => {
        if (!expanded) {
          extraWrapper.style.maxHeight = extraWrapper.scrollHeight + "px";
          toggleBtn.textContent = 'Show Less';
        } else {
          extraWrapper.style.maxHeight = "0px";
          toggleBtn.textContent = 'Show More';
        }
        expanded = !expanded;
      });

      window.addEventListener('resize', () => {
        if (expanded) {
          extraWrapper.style.maxHeight = extraWrapper.scrollHeight + "px";
        }
      });
    </script>

    {{-- Auto-update year --}}
    {{-- <script>
      document.getElementById("year").textContent = new Date().getFullYear();
    </script> --}}
</body>
</html>