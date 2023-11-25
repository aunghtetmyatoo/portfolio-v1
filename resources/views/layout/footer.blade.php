<?php
  $date = date('Y');
?>

<!-- ====== Footer Section Start -->
<footer class="bg-gray-200 dark:bg-slate-800 py-4 relative z-10">
    <div class="container">
        <div class="flex flex-wrap justify-center">
            <span class="inline-flex items-center text-sm">
                © {{ $date }} Aung Htet Myat Oo. All rights reserved.
            </span>
            {{-- <x-social-icons class="mb-0"></x-social-icons> --}}
        </div>
    </div>
    <div>
        <span class="absolute left-0 bottom-0 z-[-1]">
            <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                    fill="url(#paint0_linear_1179_5)" />
                <defs>
                    <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5"
                        y2="1.22829e-05" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.08" />
                        <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </span>
    </div>
</footer>
<!-- ====== Footer Section End -->
