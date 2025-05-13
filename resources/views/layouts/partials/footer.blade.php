<footer class="flex flex-wrap items-center justify-between px-4 py-4 text-sm border-t border-gray-100 " style="background-color: rgba(170, 235, 85, 0.623)">

    <div class="flex space-x-4">
        @foreach (config('app.supported_locales') as $locale => $data)
            <a href="{{ route('locale', $locale) }}">
                <x-dynamic-component :component="'flag-country-' . $data['icon']" class="w-6 h-6" />
            </a>
        @endforeach
    </div>

    <div class="flex space-x-4">
        @foreach (config('app.supported_locales') as $locale => $data)
        <a class="text-gray-500 hover:text-green-500" href="https://www.facebook.com/people/Better-Globe-Forestry-Ltd/100057269177470/" target="_blank">Facebook </a>
        <a class="text-gray-500 hover:text-green-500" href="https://x.com/BetterglobeF?s=20" target="_blank">Twitter </a>
        <a class="text-gray-500 hover:text-green-500" href="https://www.youtube.com/results?search_query=Better+globe+forestry" target="_blank">Youtube </a>
        <a class="text-gray-500 hover:text-green-500" href="https://www.instagram.com/betterglobeforestryltd?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">Instagram </a>
        <a class="text-gray-500 hover:text-green-500" href="https://www.linkedin.com/company/better-globe-forestry/" target="_blank">Linkedin </a>
        <a class="text-gray-500 hover:text-green-500" href="https://betterglobeforestry.s3.amazonaws.com/newsletterwebsite/newsletter.html" target="_blank">Newsletter </a>
        @endforeach
    </div>


    <div class="flex space-x-4">
        {{-- <a class="text-gray-500 hover:text-green-500" href="">{{ __('menu.login') }} </a>
        <a class="text-gray-500 hover:text-green-500" href="">{{ __('menu.profile') }} </a> --}}
        <a class="text-gray-500 hover:text-green-500" href="">{{ __('menu.blog') }} </a>
    </div>
    
    <section></section>

    <section class="flex justify-center py-4">
        <div class="text-center text-blue-500">
            <div>
                © Copyright <strong><span>Better Globe Forestry Ltd</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a class="text-gray-500 hover:text-green-500" href="https://betterglobeforestry.com" class="text-blue-600 hover:underline">BGF-IT</a>
            </div>
        </div>
    </section>
</footer>
