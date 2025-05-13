<x-app-layout title="Home Page">
    @section('hero')
    <!-- Swiper -->
    <div class="swiper mySwiper h-[55vh] w-full">
      <div class="swiper-wrapper">
    
        <!-- Slide 1 -->
        <div class="swiper-slide relative bg-center bg-cover" style="background-image: url('/images/slide1.jpg');">
          <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-center px-4">
            <div>
              <h1 class="text-4xl md:text-5xl font-bold mb-2">
                {{ __('home.hero.title') }} <span class="text-green-400">BGF</span> <span>Blog</span>
              </h1>
              <p class="text-lg mb-4">{{ __('home.hero.desc') }}</p>
              <a class="inline-block px-6 py-3 bg-green-500 text-white rounded hover:bg-green-600 transition" href="{{ route('posts.index') }}">
                {{ __('home.hero.cta') }}
              </a>
            </div>
          </div>
        </div>
    
        <!-- Slide 2 -->
        <div class="swiper-slide relative bg-center bg-cover" style="background-image: url('/images/slide2.jpg');">
          <!-- Same content or different -->
        </div>
    
        <!-- Add more slides as needed -->
      </div>
    
      <!-- Pagination and navigation buttons (optional) -->
      <div class="swiper-pagination" style="color: greenyellow;"></div>
      <div class="swiper-button-prev custom-swiper-btn"></div>
      <div class="swiper-button-next custom-swiper-btn"></div>

    </div>
    @endsection
    

    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl font-bold text-green-500"> {{ __('home.featured_posts') }} </h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $post)

                        {{-- <div class="md:col-span-1 col-span-3">                         --}}
                             <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                        {{-- </div> --}}

                    @endforeach
                </div>
            </div>
            <a class="block mt-10 text-lg font-semibold text-center text-green-500" href="{{ route('posts.index') }}">
                {{ __('home.more_posts') }}</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl font-bold text-green-500">{{ __('home.latest_posts') }}</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)

                        {{-- <div class="md:col-span-1 col-span-3">                         --}}
                             <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                        {{-- </div> --}}

                    @endforeach
            </div>
        </div>
        <a class="block mt-10 text-lg font-semibold text-center text-green-500" href="{{ route('posts.index') }}">
            {{ __('home.more_posts') }}</a>
    </div>
</x-app-layout>
