  @include('layouts.navigation')
  <x-app-layout>

    <!-- Jumbotron -->
    <section id="hero" class="relative bg-cover bg-center bg-no-repeat h-screen px-6 sm:px-12 lg:px-24 font-inter flex items-center justify-center" style="background-image: url('/images/jumbotron_img.png')">
      <div
        class="absolute inset-0 bg-gradient-to-b from-primary to-white/0"
      ></div>
      <!-- overlay gelap -->
      <div class="relative max-w-4xl mx-auto text-center text-white z-10">
        <h1
          class="text-4xl sm:text-5xl lg:text-6xl font-bold font-libreBodoni leading-tight mb-6 animate-fade-in"
        >
          Slick, Modern, Awesome Fashions.
        </h1>
        <p
          class="text-lg sm:text-xl mb-10 text-white/90 animate-fade-in animation-delay-300"
        >
          Koleksi eksklusif dari Ulfa Collection untuk kamu yang ingin tampil
          anggun setiap hari.
        </p>
        <div
          class="flex flex-col sm:flex-row justify-center gap-4 animate-fade-in animation-delay-500"
        >
          <a
            href="#"
            class="inline-block border border-orange-500 text-white bg-orange-500 font-semibold px-6 py-3 hover:bg-orange-600 transition-colors duration-300 hover:scale-105 transform"
          >
            Lihat Koleksi
          </a>
          <a
            href="#"
            class="inline-block border border-gray-200 text-gray-200 font-semibold px-6 py-3 hover:bg-gray-200 hover:text-orange-400 transition-all duration-300 hover:scale-105 transform"
          >
            Tentang Kami
          </a>
        </div>
      </div>
    </section>

    <!-- Popular Product -->
    <section id="product" class="py-20 bg-white font-inter h-auto">
      <div class="w-full px-8 sm:px-18 lg:px-24">
        <!-- Title Popular Product -->
        <h2
          class="text-4xl font-libreBodoni font-bold text-center mb-14 text-gray-800 scroll-animation translate-y-hidden transition-all-1000"
        >
          Popular Product
        </h2>
        <!-- Product List -->
        <div
          class="flex flex-col md:flex-row md:justify-between md:items-stretch gap-3"
        >
          <!-- Produk 1 -->
          <div
            class="overflow-hidden w-full mx-auto transition duration-500 hover:shadow-xl transform hover:-translate-y-2 group scroll-animation translate-y-hidden transition-all-500"
          >
            <img
              src="{{ asset('images/img-product/img1_popular.png') }}"
              alt="Produk 1"
              class="w-full h-[430px] border aspect-auto object-cover transition duration-500 group-hover:scale-105"
            />
            <div class="p-6">
              <h3 class="text-2xl font-semibold mb-2 font-libreBodoni">
                Summer Set
              </h3>
              <p class="text-gray-600 mb-4 text-base">Rp. 450,000</p>

              <!-- Wrapper untuk Pemilihan Warna dan Ukuran -->
              <div class="flex flex-col md:flex-row gap-6 mb-4">
                <!-- Kiri: Warna & Ukuran -->
                <div class="flex-1 order-1 md:order-none">
                  <!-- Pemilihan Warna -->
                  <div class="flex items-center gap-2 mb-4">
                    <button
                      class="w-6 h-6 rounded-full bg-red-500 hover:ring-2 ring-red-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-blue-500 hover:ring-2 ring-blue-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-green-500 hover:ring-2 ring-green-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-yellow-500 hover:ring-2 ring-yellow-400 transition duration-300 hover:scale-110"
                    ></button>
                  </div>

                  <!-- Pemilihan Ukuran -->
                  <div class="flex items-center gap-3">
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      S
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      M
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      L
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      XL
                    </button>
                  </div>
                </div>

                <!-- Kanan/Bawah: Tombol Add to Cart -->
                <div class="flex-shrink-0 order-2 md:order-none">
                  <button
                    class="bg-primary text-white px-5 py-6 hover:bg-primary/90 transition duration-300 transform hover:scale-105 flex items-center gap-2 w-full md:w-auto justify-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                      />
                    </svg>
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Produk 2 -->
          <div
            class="overflow-hidden w-full mx-auto transition duration-500 hover:shadow-xl transform hover:-translate-y-2 group scroll-animation translate-y-hidden transition-all-500"
          >
            <img
              src="{{ asset('images/img-product/img2_popular.png') }}"
              alt="Produk 2"
              class="w-full h-[430px] border aspect-auto object-cover transition duration-500 group-hover:scale-105"
            />
            <div class="p-6">
              <h3 class="text-2xl font-semibold mb-2 font-libreBodoni">
                Oversize Sweater
              </h3>
              <p class="text-gray-600 mb-4 text-base">Rp. 250,000</p>

              <!-- Wrapper untuk Pemilihan Warna dan Ukuran -->
              <div class="flex flex-col md:flex-row gap-6 mb-4">
                <!-- Kiri: Warna & Ukuran -->
                <div class="flex-1 order-1 md:order-none">
                  <!-- Pemilihan Warna -->
                  <div class="flex items-center gap-2 mb-4">
                    <button
                      class="w-6 h-6 rounded-full bg-red-500 hover:ring-2 ring-red-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-blue-500 hover:ring-2 ring-blue-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-green-500 hover:ring-2 ring-green-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-yellow-500 hover:ring-2 ring-yellow-400 transition duration-300 hover:scale-110"
                    ></button>
                  </div>

                  <!-- Pemilihan Ukuran -->
                  <div class="flex items-center gap-3">
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      S
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      M
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      L
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      XL
                    </button>
                  </div>
                </div>

                <!-- Kanan/Bawah: Tombol Add to Cart -->
                <div class="flex-shrink-0 order-2 md:order-none">
                  <button
                    class="bg-primary text-white px-5 py-6 hover:bg-primary/90 transition duration-300 transform hover:scale-105 flex items-center gap-2 w-full md:w-auto justify-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                      />
                    </svg>
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Produk 3 -->
          <div
            class="overflow-hidden w-full mx-auto transition duration-500 hover:shadow-xl transform hover:-translate-y-2 group scroll-animation translate-y-hidden transition-all-500"
          >
            <img
              src="{{ asset('images/img-product/img3_popular.png') }}"
              alt="Produk 3"
              class="w-full h-[430px] border aspect-auto object-cover transition duration-500 group-hover:scale-105"
            />
            <div class="p-6">
              <h3 class="text-2xl font-semibold mb-2 font-libreBodoni">
                Polo Shirt
              </h3>
              <p class="text-gray-600 mb-4 text-base">Rp. 200,000</p>

              <!-- Wrapper untuk Pemilihan Warna dan Ukuran -->
              <div class="flex flex-col md:flex-row gap-6 mb-4">
                <!-- Kiri: Warna & Ukuran -->
                <div class="flex-1 order-1 md:order-none">
                  <!-- Pemilihan Warna -->
                  <div class="flex items-center gap-2 mb-4">
                    <button
                      class="w-6 h-6 rounded-full bg-red-500 hover:ring-2 ring-red-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-blue-500 hover:ring-2 ring-blue-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-green-500 hover:ring-2 ring-green-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-yellow-500 hover:ring-2 ring-yellow-400 transition duration-300 hover:scale-110"
                    ></button>
                  </div>

                  <!-- Pemilihan Ukuran -->
                  <div class="flex items-center gap-3">
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      S
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      M
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      L
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      XL
                    </button>
                  </div>
                </div>

                <!-- Kanan/Bawah: Tombol Add to Cart -->
                <div class="flex-shrink-0 order-2 md:order-none">
                  <button
                    class="bg-primary text-white px-5 py-6 hover:bg-primary/90 transition duration-300 transform hover:scale-105 flex items-center gap-2 w-full md:w-auto justify-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                      />
                    </svg>
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Button Load More -->
        <div class="flex justify-center items-center my-12">
          <div
            class="overflow-hidden mx-auto transition duration-500 hover:shadow-xl transform hover:-translate-y-2 group scroll-animation translate-y-hidden transition-all-500"
          >
            <button
              class="border border-primary text-primary px-12 py-3 hover:border hover:border-white hover:bg-white/90 hover:text-primary focus:bg-primary focus:text-white transition duration-300 transform hover:scale-105 flex items-center gap-2 w-full md:w-auto justify-center"
            >
              See All Product
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m19.5 8.25-7.5 7.5-7.5-7.5"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    {{-- Highlight Product --}}
    <section id="highlight" class="py-20 bg-white font-inter h-auto">
      <div class="w-full md:w-2/3 mx-auto">
        {{-- Title Highlight --}}
        <div>
          <h2 class="text-4xl font-libreBodoni font-bold text-center mb-14 text-gray-800 scroll-animation translate-y-hidden transition-all-1000">
            Highlight Product
          </h2>
        </div>

        <!-- Mobile layout (only visible on small screens) -->
        <div class="block lg:hidden px-4 md:px-6">
          <!-- Left image -->
          <div class="relative mb-4">
            <img src="{{ asset('images/img-highlight/img1_highlight.png') }}" alt="Highlight 1" class="w-full h-auto">
              <div class="absolute bottom-2 right-2 text-green-600 text-6xl font-libreBodoni px-3 py-1">
                30%
              </div>
          </div>
          
          <!-- Right image -->
          <div class="relative mb-4">
            <img src="{{ asset('images/img-highlight/img2_highlight.png') }}" alt="Highlight 2" class="w-full h-auto">
              <div class="absolute flex flex-col justify-center top-0 right-0 bg-primary/40 px-8 py-8">
                <p class="mx-auto my-2 text-red-500 text-xl font-libreBodoni line-through">Rp 799.000</p>
                <p class="mx-auto my-2 text-white text-3xl font-libreBodoni">Rp.299.000</p>
              </div>
          </div>
          
          <!-- Mobile text -->
          <div class="flex flex-col items-center gap-6">
            <h2 class="text-3xl font-bold font-libreBodoni text-center">
              The base collection - Ideal every day.
            </h2>
              <button class="w-full bg-primary text-white font-libreBodoni text-xl px-5 py-4 hover:bg-primary/90 transition duration-300 transform hover:scale-105">
                Shop Now
              </button>
          </div>
        </div>

        <!-- Desktop layout using CSS Grid (only visible on lg screens and up) -->
        <div class="hidden lg:grid grid-cols-2 gap-4 px-8">
          <!-- Left column with image and text -->
          <div>
            <div class="relative">
              <img src="{{ asset('images/img-highlight/img1_highlight.png') }}" alt="Highlight 1" class="w-full mb-4">
                <div class="absolute bottom-2 right-2 text-green-600 text-5xl font-libreBodoni px-3 py-1">
                  30%
                </div>
            </div>
            <div class="flex flex-col items-start gap-6">
              <h2 class="text-5xl font-bold font-libreBodoni">
                The base collection - Ideal every day.
              </h2>
              <div class="w-full mx-auto">
                <button class="w-full bg-primary text-white font-libreBodoni text-xl px-5 py-6 hover:bg-primary/90 transition duration-300 transform hover:scale-105">
                  Shop Now
                </button>
              </div>
            </div>
          </div>
          
          <!-- Right column with just the image -->
          <div class="relative">
            <!-- The absolute positioning helps the image fill the entire grid cell -->
            <div class="absolute inset-0">
              <img src="{{ asset('images/img-highlight/img2_highlight.png') }}" alt="Highlight 2" class="w-full h-full object-cover">
              <div class="absolute flex flex-col justify-center top-0 right-0 bg-primary/40 px-8 py-8">
                <p class="mx-auto my-2 text-red-500 text-xl font-libreBodoni line-through">Rp 799.000</p>
                <p class="mx-auto my-2 text-white text-3xl font-libreBodoni">Rp.299.000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore CTA -->
    <section id="explorecta" class="relative bg-cover bg-center bg-no-repeat h-screen my-24 px-6 sm:px-12 lg:px-24 flex items-center justify-center mb-48" style="background-image: url('/images/img_explorecta.png')">
      <div class="absolute inset-0 bg-gradient-to-b from-primary to-white/0"></div>
        <!-- overlay gelap -->
        <div class="relative max-w-4xl mx-auto text-center text-white z-10">
          <div class="my-12">
            <h1 class="text-[48px] font-libreBodoni">Be different in your own way!</h1>
            <h2 class="text-[24px] font-libreBodoni">Find your unique style.</h2>
          </div>
          <div class="mt-12">
            <a href="#" class="w-full border border-white px-24 text-2xl font-libreBodoni py-6 hover:bg-orange-400 hover:text-white hover:border-transparent hover:scale-110 transition duration-500">
              Explore Now
            </a>
          </div>
        </div>
      </div>
    </section>

    {{-- Summer Colletion --}}
    <section id="summercollection" class="mx-12 md:mx-24 lg:mx-24 my-24">
      <div class="w-full md:w-3/4 mx-auto">

        <!-- Mobile layout (only visible on small screens) -->
        <div class="block lg:hidden px-4 md:px-6">
          <!-- Left image -->
          <div class="relative mb-4">
            <!-- Kotak belakang (offset) -->
            <div class="absolute bottom-6 right-6 w-full h-full bg-primary -z-10"></div>

            <!-- Gambar utama -->
            <img
              src="{{ asset('images/img_collection.png') }}"
              alt="Image Summer Collection"
              class="w-full h-[430px] aspect-auto object-cover transition duration-500 group-hover:scale-105 z-50"
            />
          </div>
          
          <!-- Right text -->
          <div class="relative mb-4 text-center">
            <h1 class="font-libreBodoni text-4xl my-12 mx-4">Summer collection</h1>
            <p class="font-inter text-lg text-justify my-12 mx-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id leo tempor, congue justo at, lobortis orci. Aliquam venenatis dui lectus, eu convallis turpis convallis et. Pellentesque.</p>

            <button class="w-full bg-primary text-white px-5 py-4 hover:bg-primary/90 transition duration-300 transform hover:scale-105 font-libreBodoni text-2xl mt-4 mr-4">
              See Collection
            </button>
          </div>
        </div>

        <!-- Desktop layout using CSS Grid (only visible on lg screens and up) -->
        <div class="hidden lg:grid grid-cols-2 gap-4 px-8">
          <!-- Left column with image and text -->
          <div>
            <div class="relative">
              <!-- Kotak belakang (offset) -->
              <div class="absolute bottom-24 right-24 w-full h-full bg-primary -z-10"></div>
              <img src="{{ asset('images/img_collection.png') }}" alt="Summer Collection" class="w-full mb-4">

            </div>
          </div>
          
          <!-- Right column with just the image -->
          <div class="relative">
            <!-- The absolute positioning helps the image fill the entire grid cell -->
            <div class="absolute inset-0">
              <div class="relative mb-4 text-right">
                <h1 class="font-libreBodoni text-4xl my-12 text-orange-400">Summer collection</h1>
                <p class="font-inter text-2xl my-12 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id leo tempor, congue justo at, lobortis orci. Aliquam venenatis dui lectus, eu convallis turpis convallis et. Pellentesque.</p>

                <button class="bg-primary text-white px-5 py-4 hover:bg-primary/90 transition duration-300 transform hover:scale-105 font-libreBodoni text-2xl">
                  See Collection
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Onsale Product -->
    <section id="onsaleproduct" class="py-20 bg-white font-inter h-auto">
      <div class="w-full px-8 sm:px-18 lg:px-24">
        <!-- Title Popular Product -->
        <h2
          class="text-4xl font-libreBodoni font-bold text-center mb-14 text-gray-800 scroll-animation translate-y-hidden transition-all-1000"
        >
          Onsale Clothes
        </h2>
        <!-- Product List -->
        <div
          class="flex flex-col md:flex-row md:justify-between md:items-stretch gap-3"
        >
          <!-- Produk 1 -->
          <div
            class="overflow-hidden w-full mx-auto transition duration-500 hover:shadow-xl transform hover:-translate-y-2 group scroll-animation translate-y-hidden transition-all-500"
          >
            <img
              src="{{ asset('images/onsale/dessertscraft_onsale.png') }}"
              alt="Produk 1"
              class="w-full h-[430px] border aspect-auto object-cover transition duration-500 group-hover:scale-105"
            />
            <div class="p-6">
              <h3 class="text-2xl font-semibold mb-2 font-libreBodoni">
                Dessert Scraft
              </h3>
              <p class="text-gray-600 mb-4 text-base">Rp. 135,000</p>

              <!-- Wrapper untuk Pemilihan Warna dan Ukuran -->
              <div class="flex flex-col md:flex-row gap-6 mb-4">
                <!-- Kiri: Warna & Ukuran -->
                <div class="flex-1 order-1 md:order-none">
                  <!-- Pemilihan Warna -->
                  <div class="flex items-center gap-2 mb-4">
                    <button
                      class="w-6 h-6 rounded-full bg-red-500 hover:ring-2 ring-red-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-blue-500 hover:ring-2 ring-blue-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-green-500 hover:ring-2 ring-green-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-yellow-500 hover:ring-2 ring-yellow-400 transition duration-300 hover:scale-110"
                    ></button>
                  </div>

                  <!-- Pemilihan Ukuran -->
                  <div class="flex items-center gap-3">
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      S
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      M
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      L
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      XL
                    </button>
                  </div>
                </div>

                <!-- Kanan/Bawah: Tombol Add to Cart -->
                <div class="flex-shrink-0 order-2 md:order-none">
                  <button
                    class="bg-primary text-white px-5 py-6 hover:bg-primary/90 transition duration-300 transform hover:scale-105 flex items-center gap-2 w-full md:w-auto justify-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                      />
                    </svg>
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Produk 2 -->
          <div
            class="overflow-hidden w-full mx-auto transition duration-500 hover:shadow-xl transform hover:-translate-y-2 group scroll-animation translate-y-hidden transition-all-500"
          >
            <img
              src="{{ asset('images/onsale/womanjeans_onsale.png') }}"
              alt="Woman Jeans"
              class="w-full h-[430px] border aspect-auto object-cover transition duration-500 group-hover:scale-105"
            />
            <div class="p-6">
              <h3 class="text-2xl font-semibold mb-2 font-libreBodoni">
                Woman Jeans
              </h3>
              <p class="text-gray-600 mb-4 text-base">Rp. 250,000</p>

              <!-- Wrapper untuk Pemilihan Warna dan Ukuran -->
              <div class="flex flex-col md:flex-row gap-6 mb-4">
                <!-- Kiri: Warna & Ukuran -->
                <div class="flex-1 order-1 md:order-none">
                  <!-- Pemilihan Warna -->
                  <div class="flex items-center gap-2 mb-4">
                    <button
                      class="w-6 h-6 rounded-full bg-red-500 hover:ring-2 ring-red-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-blue-500 hover:ring-2 ring-blue-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-green-500 hover:ring-2 ring-green-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-yellow-500 hover:ring-2 ring-yellow-400 transition duration-300 hover:scale-110"
                    ></button>
                  </div>

                  <!-- Pemilihan Ukuran -->
                  <div class="flex items-center gap-3">
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      S
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      M
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      L
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      XL
                    </button>
                  </div>
                </div>

                <!-- Kanan/Bawah: Tombol Add to Cart -->
                <div class="flex-shrink-0 order-2 md:order-none">
                  <button
                    class="bg-primary text-white px-5 py-6 hover:bg-primary/90 transition duration-300 transform hover:scale-105 flex items-center gap-2 w-full md:w-auto justify-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                      />
                    </svg>
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Produk 3 -->
          <div
            class="overflow-hidden w-full mx-auto transition duration-500 hover:shadow-xl transform hover:-translate-y-2 group scroll-animation translate-y-hidden transition-all-500"
          >
            <img
              src="{{ asset('images/onsale/menpoloset_onsale.png') }}"
              alt="Men Polo Set"
              class="w-full h-[430px] border aspect-auto object-cover transition duration-500 group-hover:scale-105"
            />
            <div class="p-6">
              <h3 class="text-2xl font-semibold mb-2 font-libreBodoni">
                Men Polo Set
              </h3>
              <p class="text-gray-600 mb-4 text-base">Rp. 525,000</p>

              <!-- Wrapper untuk Pemilihan Warna dan Ukuran -->
              <div class="flex flex-col md:flex-row gap-6 mb-4">
                <!-- Kiri: Warna & Ukuran -->
                <div class="flex-1 order-1 md:order-none">
                  <!-- Pemilihan Warna -->
                  <div class="flex items-center gap-2 mb-4">
                    <button
                      class="w-6 h-6 rounded-full bg-red-500 hover:ring-2 ring-red-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-blue-500 hover:ring-2 ring-blue-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-green-500 hover:ring-2 ring-green-400 transition duration-300 hover:scale-110"
                    ></button>
                    <button
                      class="w-6 h-6 rounded-full bg-yellow-500 hover:ring-2 ring-yellow-400 transition duration-300 hover:scale-110"
                    ></button>
                  </div>

                  <!-- Pemilihan Ukuran -->
                  <div class="flex items-center gap-3">
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      S
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      M
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      L
                    </button>
                    <button
                      class="text-sm text-gray-700 py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-100 transition duration-300 hover:scale-105"
                    >
                      XL
                    </button>
                  </div>
                </div>

                <!-- Kanan/Bawah: Tombol Add to Cart -->
                <div class="flex-shrink-0 order-2 md:order-none">
                  <button
                    class="bg-primary text-white px-5 py-6 hover:bg-primary/90 transition duration-300 transform hover:scale-105 flex items-center gap-2 w-full md:w-auto justify-center"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                      />
                    </svg>
                    Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Review Customers --}}
    <section class="bg-gradient-to-b from-teal-700 to-primary text-white py-20 px-6 md:px-16 font-inter">
      <h2 class="text-center text-4xl font-libreBodoni mb-16">Reviews our Customers</h2>

      <!-- Container utama dengan flex -->
      <div class="flex flex-wrap justify-center gap-10">
        <!-- Review 1 -->
        <div class="bg-white/10 p-6 w-full md:w-[45%] lg:w-[30%]">
          <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-14 h-14 rounded-full object-cover" />
            <div>
              <p class="font-semibold text-lg">Jane Oliver</p>
              <div class="text-yellow-400">★★★★★</div>
            </div>
          </div>
          <p class="text-sm">"Chic and effortlessly elegant! This outfit gives off that ‘put together’ look without even trying."</p>
        </div>

        <!-- Review 2 -->
        <div class="bg-white/10 p-6 w-full md:w-[45%] lg:w-[30%]">
          <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/women/69.jpg" class="w-14 h-14 rounded-full object-cover" />
            <div>
              <p class="font-semibold text-lg">Giana Workman</p>
              <div class="text-yellow-400">★★★★★</div>
            </div>
          </div>
          <p class="text-sm">"Absolutely love this top! The fabric feels soft and breathable, and the fit is just perfect."</p>
        </div>

        <!-- Review 3 -->
        <div class="bg-white/10 p-6 w-full md:w-[45%] lg:w-[30%]">
          <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/women/70.jpg" class="w-14 h-14 rounded-full object-cover" />
            <div>
              <p class="font-semibold text-lg">Kaiya George</p>
              <div class="text-yellow-400">★★★★☆</div>
            </div>
          </div>
          <p class="text-sm">"I wasn’t sure at first, but it exceeded my expectations. Super comfy and the color is gorgeous."</p>
        </div>
      </div>

      <!-- Container tambahan dengan flex + animasi -->
      <div id="extraReviewsWrapper" class="flex flex-wrap justify-center gap-10 overflow-hidden transition-all duration-700 ease-in-out max-h-0 my-10">
        <!-- Review 4 -->
        <div class="bg-white/10 p-6 w-full md:w-[45%] lg:w-[30%]">
          <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/women/72.jpg" class="w-14 h-14 rounded-full object-cover" />
            <div>
              <p class="font-semibold text-lg">Sasha Kim</p>
              <div class="text-yellow-400">★★★★★</div>
            </div>
          </div>
          <p class="text-sm">"Super stylish and comfortable. I’ve been getting compliments all day. Will definitely shop again!"</p>
        </div>
        <!-- Review 5 -->
        <div class="bg-white/10 p-6 w-full md:w-[45%] lg:w-[30%]">
          <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/women/72.jpg" class="w-14 h-14 rounded-full object-cover" />
            <div>
              <p class="font-semibold text-lg">Sasha Kim</p>
              <div class="text-yellow-400">★★★★★</div>
            </div>
          </div>
          <p class="text-sm">"Super stylish and comfortable. I’ve been getting compliments all day. Will definitely shop again!"</p>
        </div>

        <!-- Review 6 -->
        <div class="bg-white/10 p-6 w-full md:w-[45%] lg:w-[30%]">
          <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/women/72.jpg" class="w-14 h-14 rounded-full object-cover" />
            <div>
              <p class="font-semibold text-lg">Sasha Kim</p>
              <div class="text-yellow-400">★★★★★</div>
            </div>
          </div>
          <p class="text-sm">"Super stylish and comfortable. I’ve been getting compliments all day. Will definitely shop again!"</p>
        </div>

        <!-- Tambah review lagi di sini kalau mau -->
      </div>

      <!-- Tombol Show More -->
      <div class="mt-10 text-center">
        <button
          id="toggleReviews"
          class="border border-white text-white px-6 py-3 hover:bg-white hover:text-primary transition font-semibold"
        >
          Show More
        </button>
      </div>
    </section>
  </x-app-layout>

  @include('customer.footer ')