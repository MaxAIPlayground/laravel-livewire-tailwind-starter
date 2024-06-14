<?php

use Artesaos\SEOTools\Facades\SEOMeta;
use Livewire\Volt\Component;

new class extends Component
{
    public function mount()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
    }
}; ?>

<div>
    <section class="prose max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-center gap-16 lg:items-start lg:px-8 pb-2 lg:pt-4 lg:pb-20">
        <div class="not-prose flex flex-col w-full lg:w-3/5 gap-4 lg:gap-9 items-center justify-center text-center lg:text-left lg:items-start">
            <h1 class="lg:min-w-[600px] font-extrabold hyphens-none text-2xl leading-[2rem] sm:text-3xl lg:text-[2.7rem] lg:leading-[3.5rem] tracking-tighter mb-6 md:mb-8 flex flex-col items-center lg:items-start">
                <span class="block">Your Super Benfit</span>
                <span>
                    <span>„without the
                        <span class="relative">
                            <span>pain</span>
                            <svg class="absolute -bottom-3 fill-accent inset-x-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" zoomAndPan="magnify" preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="327 79.8 420 15.83"><defs><clipPath id="cccdedf2f2"><path d="M 327 79.648438 L 747 79.648438 L 747 96 L 327 96 Z M 327 79.648438 " clip-rule="nonzero"/></clipPath></defs>
                                <g clip-path="url(#cccdedf2f2)">
                                    <path d="M 716.171875 88.96875 C 718.273438 89.558594 720.289062 90.316406 722.472656 90.652344 C 729.78125 91.910156 737.089844 93.003906 744.394531 94.179688 C 744.3125 94.683594 744.3125 95.101562 744.226562 95.605469 C 738.601562 95.101562 733.054688 94.597656 727.429688 93.925781 C 718.441406 92.917969 709.453125 91.742188 700.378906 90.734375 C 699.203125 90.566406 697.441406 90.398438 696.9375 91.070312 C 694.246094 94.09375 691.054688 93.003906 687.949219 92.667969 C 654.347656 89.472656 620.578125 88.96875 586.894531 88.96875 C 564.046875 88.96875 541.285156 89.894531 518.4375 90.652344 C 500.710938 91.238281 482.988281 92.332031 465.265625 92.917969 C 460.644531 93.085938 456.023438 91.910156 451.488281 91.910156 C 441.574219 91.910156 431.746094 92.246094 421.835938 92.414062 C 414.359375 92.582031 406.882812 92.835938 399.40625 93.003906 C 384.035156 93.421875 368.746094 93.84375 353.375 94.261719 C 352.367188 94.261719 351.359375 94.429688 350.351562 94.515625 C 348 94.765625 345.5625 96.363281 343.546875 93.171875 C 342.960938 92.332031 340.1875 92.835938 338.339844 92.414062 C 352.453125 88.800781 367.066406 88.632812 381.347656 86.113281 C 373.117188 85.863281 364.882812 85.527344 356.652344 85.273438 C 350.183594 85.023438 343.714844 84.601562 337.332031 84.6875 C 333.972656 84.6875 330.527344 85.441406 327 85.863281 C 327.335938 82.921875 329.773438 82.167969 332.460938 82.082031 C 338.929688 81.832031 345.394531 81.664062 351.863281 81.746094 C 359.507812 81.746094 367.234375 82.167969 374.878906 82.167969 C 384.203125 82.25 393.445312 82.25 402.769531 82.167969 C 457.957031 81.578125 513.058594 80.992188 568.164062 80.402344 C 585.550781 80.234375 602.941406 79.730469 620.242188 79.816406 C 640.65625 79.898438 661.066406 80.402344 681.394531 80.992188 C 699.121094 81.578125 716.84375 82.503906 734.566406 83.425781 C 738.433594 83.59375 742.546875 83.59375 747 87.121094 C 740.449219 87.375 735.574219 90.230469 729.949219 89.558594 C 725.328125 88.96875 720.707031 89.222656 716.089844 89.136719 C 713.820312 88.800781 711.46875 88.550781 709.199219 88.214844 C 709.199219 88.632812 709.199219 89.136719 709.117188 89.558594 C 711.46875 89.390625 713.820312 89.136719 716.171875 88.96875 Z M 389.664062 89.054688 C 389.664062 89.472656 389.664062 89.808594 389.664062 90.230469 C 414.949219 89.304688 440.230469 88.382812 465.515625 87.457031 C 465.515625 87.121094 465.515625 86.871094 465.515625 86.535156 C 440.148438 87.375 414.949219 88.214844 389.664062 89.054688 Z M 488.027344 86.617188 C 488.027344 86.449219 488.027344 86.28125 488.027344 86.113281 C 483.574219 86.113281 479.125 86.113281 474.671875 86.113281 C 474.671875 86.28125 474.671875 86.449219 474.671875 86.617188 C 479.125 86.617188 483.574219 86.617188 488.027344 86.617188 Z M 498.191406 85.945312 C 498.109375 86.03125 498.023438 86.113281 497.941406 86.199219 C 501.550781 86.199219 505.164062 86.199219 508.859375 86.199219 C 508.859375 86.113281 508.859375 86.03125 508.859375 85.945312 C 505.246094 85.945312 501.71875 85.945312 498.191406 85.945312 Z M 467.617188 91.574219 C 467.699219 91.40625 467.699219 91.15625 467.785156 90.988281 C 465.515625 90.988281 463.164062 90.988281 460.894531 90.988281 C 460.894531 91.15625 460.894531 91.40625 460.894531 91.574219 C 463.078125 91.574219 465.347656 91.574219 467.617188 91.574219 Z M 381.851562 90.398438 C 381.769531 90.144531 381.769531 89.808594 381.683594 89.558594 C 380.257812 89.640625 378.742188 89.726562 377.316406 89.726562 C 377.316406 89.976562 377.316406 90.144531 377.316406 90.398438 C 378.910156 90.398438 380.425781 90.398438 381.851562 90.398438 Z M 381.851562 90.398438 " fill-opacity="1" fill-rule="nonzero"/>
                                </g>
                            </svg>
                        </span>
                    </span>
                </span>
            </h1>
            <div class="relative max-w-xl lg:text-md leading-6 lg:text-lg text-left text-base-content/60 z-20 mb-2">
                <p class="mb-6 md:mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="font-semibold">lorem ipsum dorum</span>.</p>
                <p class="mb-6 md:mb-8">sit amet consectetur adipisicing  <span class="font-semibold">lorem di 15x</span>, sit amet consectetur adipisicing elit.</p>
                <img
                    alt=""
                    title=""
                    class="hidden lg:block absolute -right-44 w-[170px] lg:bottom-4 my-0"
                    srcset="{{ asset('images/arrow.webp') }} 1x, {{ asset('images/arrow@2x.webp') }} 2x" src="{{ asset('images/arrow.webp') }}">
            </div>
            <div class="space-y-4">
                <a href="#" class="btn btn-primary btn-xl animate-none w-full" title="Jetzt mitmachen">
                    <x-lucide-pen-line class="max-[340px]:hidden w-5 h-5"/>
                    <span>Lorem dirum upsum</span>
                </a>
                <p class="text-sm md:text-base flex justify-center items-center gap-2">
                    <x-lucide-gift class="w-5 h-5 text-accent" />
                    <span class="font-semibold">100% <span class="font-semibold">free</span>.</span>
                </p>
            </div>
            <div class="flex flex-col md:flex-row justify-center align-center gap-3">
                <div class="-space-x-5 avatar-group justy-start inline-block sm:flex">
                    <div class="avatar relative inline-flex w-12 h-12">
                        <img
                            alt=""
                            title=""
                            width="48"
                            height="48"
                            style="color: transparent;"
                            srcset="https://placehold.co/200x200 1x, https://placehold.co/200x200 2x"
                            src="https://placehold.co/200x200">
                    </div>
{{--                     <div class="avatar relative inline-flex w-12 h-12">
                        <img alt="Profile" width="400" height="400" style="color: transparent;" srcset="https://placehold.co/200x200 1x, https://placehold.co/200x200 2x" src="https://placehold.co/200x200">
                    </div>
                    <div class="avatar relative inline-flex w-12 h-12">
                        <img alt="Profile" width="400" height="400" style="color: transparent;" srcset="https://placehold.co/200x200 1x, https://placehold.co/200x200 2x" src="https://placehold.co/200x200">
                    </div>
                    <div class="avatar relative inline-flex w-12 h-12">
                        <img alt="Profile" width="400" height="400" style="color: transparent;" srcset="https://placehold.co/200x200 1x, https://placehold.co/200x200 2x" src="https://placehold.co/200x200">
                    </div>
                    <div class="avatar relative inline-flex w-12 h-12">
                        <img alt="Profile" width="400" height="400" style="color: transparent;" srcset="https://placehold.co/200x200 1x, https://placehold.co/200x200 2x" src="https://placehold.co/200x200">
                    </div>
                    <div class="avatar relative inline-flex w-12 h-12">
                        <img alt="Profile" width="400" height="400" style="color: transparent;" srcset="https://placehold.co/200x200 1x, https://placehold.co/200x200 2x" src="https://placehold.co/200x200">
                    </div> --}}
                </div>
                <div class="flex flex-col justify-center items-center md:items-start gap-1">
                    <div class="rating">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><title>This star represents a top rating</title><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><title>This star represents a top rating</title><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><title>This star represents a top rating</title><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><title>This star represents a top rating</title><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><title>This star represents a top rating</title><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="text-base text-base-content/60"><span class="font-semibold text-base-content">many</span> others are awesome already</div>
                </div>
            </div>
        </div>
        <div class="relative max-md:-m-4 w-full lg:w-2/5 flex-shrink-0">
            <figure class="max-w-xl mb-0 mt-0 lg:mt-8 ml-auto md:relative md:top-20 lg:static xl:top-0">
                <img
                    alt=""
                    title=""
                    class="w-full -mt-3 border-2 border-gray-200 shadow-lg"
                    srcset="https://placehold.co/900x900 1x, https://placehold.co/900x900 2x"
                    src="https://placehold.co/900x900">
            </figure>
        </div>
    </section>

    <div class="divider mb-10"></div>

    <section class="py-8 lg:py-16">
        <div class="prose lg:prose-lg max-w-3xl mx-auto text-base-content/70">
            <img
                class="w-24 h-24 sm:w-32 sm:h-32 md:w-52 md:h-52 rounded-lg float-left mt-0 mr-8 mb-8 object-center object-cover"
                src="https://placehold.co/200x200"
                alt=""
                title="">
            <div class="font-bold">
                Hey, I'm Maximilian 👋
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quos, doloribus odit nesciunt nam illo, quaerat error sed, provident repudiandae quae fuga aspernatur? Maxime facere, quidem. Libero nostrum, nihil minima!
            </p>
            <blockquote class="text-primary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut temporibus soluta consequatur neque eos dignissimos labore, provident dolor suscipit odio fugit ullam a dolore perspiciatis voluptate architecto beatae perferendis officia!
            </p>
            <p>Maximilian</p>
        </div>
    </section>

    <div class="divider lg:mb-10"></div>

    <section class="py-8 lg:py-16">
        <div class="prose md:prose-lg bg-red-900 rounded-lg p-8 md:px-10 md:py-6 lg:px-12 lg:py-6 max-w-xl mx-auto text-white/90">
            <div class="leading-relaxed">
                <div class="mb-10">
                    <p class="mt-0 mb-10 leading-snug">Do you have this <span class="font-semibold">pain</span> as well?</p>
                    <ul class="pl-4 space-y-4 list-disc marker:text-white">
                        <li>Some things that go <span class="underline">really, really wrong</span> sometimes</li>
                        <li>Some things that go <span class="underline">really, really wrong</span> sometimes</li>
                        <li>Some things that go <span class="underline">really, really wrong</span> sometimes</li>
                        <li>Some things that go <span class="underline">really, really wrong</span> sometimes</li>
                    </ul>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-1.5">
                    <x-lucide-circle-x class="w-16 h-16 fill-white stroke-red-900" />
                    <p class="md:ml-4 my-0">
                        <span class="block font-bold mb-2">Result:</span>
                        <span class="block">
                            <span class="block mb-2">
                                <span>👉 </span><span class="underline font-semibold">bad things happen</span>
                            </span>
                            <span class="block">
                                <span>👉 </span><span class="underline font-semibold">and me getting frustrated</span>
                            </span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-20 inset-x-0 text-center flex gap-1 justify-center items-center text-sm opacity-80">
            <x-lucide-arrow-down class="w-4 h-4 shrink-0" />
            <p class="text-lg md:text-xl underline">There's an easier way</p>
        </div>
    </section>

    <div class="divider lg:mb-10"></div>

    <section class="py-8 lg:py-16">
        <div class="max-w-3xl mx-auto">
            <div class="prose prose-sm lg:prose-lg max-max-w-4xl">
                <h2 class="font-bold lg:text-4xl tracking-tight mt-0 mb-8 lg:mb-14">
                    <span>
                        The benefit is mentioned here
                    </span>
                </h2>
                <div class="lg:mb-8 lg:pl-8 text-base-content/70">
                    <p class="flex mb-6 lg:mb-8">
                        <x-lucide-check-check class="inline-flex align-middle text-success w-5 h-5 shrink-0 mr-2 mt-1.5" />
                        <span>
                            <span class="font-semibold">Benefit number 1</span>: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius corporis reiciendis illum, voluptas saepe eum aliquid temporibus quidem.
                        </span>
                    </p>
                    <p class="flex mb-6 lg:mb-8">
                        <x-lucide-check-check class="inline-flex align-middle text-success w-5 h-5 shrink-0 mr-2 mt-1.5" />
                        <span>
                            <span class="font-semibold">Benefit number 3</span>: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius corporis reiciendis illum, voluptas saepe eum aliquid temporibus quidem.
                        </span>
                    </p>
                    <p class="flex mb-6 lg:mb-8">
                        <x-lucide-check-check class="inline-flex align-middle text-success w-5 h-5 shrink-0 mr-2 mt-1.5" />
                        <span>
                            <span class="font-semibold">Benefit number 3</span>: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius corporis reiciendis illum, voluptas saepe eum aliquid temporibus quidem.
                        </span>
                    </p>
                    <p class="flex mb-6 lg:mb-8">
                        <x-lucide-check-check class="inline-flex align-middle text-success w-5 h-5 shrink-0 mr-2 mt-1.5" />
                        <span>
                            <span class="font-semibold">Benefit number 4</span>: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius corporis reiciendis illum, voluptas saepe eum aliquid temporibus quidem.
                        </span>
                    </p>
                    <p class="flex mb-0">
                        <x-lucide-check-check class="inline-flex align-middle text-success w-5 h-5 shrink-0 mr-2 mt-1.5" />
                        <span>
                            <span class="font-semibold">Benefit number 5</span>: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius corporis reiciendis illum, voluptas saepe eum aliquid temporibus quidem.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="divider lg:mb-10"></div>

{{--     <div class="divider mb-10"></div>
    <section class="py-8 lg:py-16">
        <div class="max-w-3xl mx-auto">
            <div class="prose bg-base-100 max-lg:px-6 max-w-3xl">
                <h2 class="font-bold text-3xl lg:text-5xl tracking-tight mt-0 mb-10">Examples / Showcase ✨</h2>
            </div>
        </div>
    </section>
 --}}

    <section class="py-8 lg:py-16">
        <div class="max-w-3xl mx-auto">
            <div class="prose bg-base-100 max-w-3xl">
                <h2 class="font-bold lg:text-4xl tracking-tight mt-0 mb-12 lg:mb-14">User Feedback</h2>
                <div class="text-base-content/80">
                    <figure class="max-w-screen-md mt-0 mb-8">
                        <div class="flex items-center mb-4 text-yellow-300">
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <title>This star represents a top rating</title>
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <title>This star represents a top rating</title>
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <title>This star represents a top rating</title>
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <title>This star represents a top rating</title>
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <title>This star represents a top rating</title>
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                        </div>
                        <blockquote>
                            <p class="text-base lg:text-xl leading-relaxed text-base-content/70">
                                Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Aspernatur recusandae, laborum repudiandae itaque officia quibusdam, sint voluptatibus error asperiores distinctio. Aut laboriosam saepe velit vero laborum earum quia, quaerat dignissimos.
                            </p>
                        </blockquote>
                        <figcaption class="flex items-center mt-10 space-x-3 rtl:space-x-reverse mb-0">
                            <img
                                class="w-16 h-16 my-0 rounded-full"
                                src="https://placehold.co/200x200"
                                alt=""
                                title="">
                            <div class="md:flex md:items-center md:divide-x-2 divide-gray-600">
                                <cite class="max-md:block max-md:mb-2 sm:pe-3 text-gray-700 font-semibold">Happy customer, 42</cite>
                                <cite class="md:ps-3 text-sm text-gray-600">He found his peace, finally.</cite>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <div class="divider lg:mb-10"></div>

    <section class="py-8 lg:py-16">
        <div class="max-w-3xl mx-auto">
            <div class="prose prose-sm lg:prose-lg prose-p:mt-2 bg-base-100 max-w-3xl">
                <h2 class="font-bold lg:text-4xl tracking-tight mt-0 mb-14">FAQ – Frequently asked questions</h2>
                <x-faq />
            </div>
        </div>
    </section>
</div>
