<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(route('setup', absolute: false), navigate: true);
    }
}; ?>

<div>
    <section class="prose max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-center gap-12 lg:items-start px-8 py-2 lg:py-4">
        <div class="flex flex-col gap-8 lg:gap-12 items-center justify-center text-center lg:text-left lg:items-start">
            <a href="https://www.producthunt.com/posts/shipfast-2?utm_source=badge-top-post-badge&amp;utm_medium=badge&amp;utm_souce=badge-shipfast-2" target="_blank" class=" -mb-4 md:-mb-6 group" title="View ShipFast on Product Hunt"></a>
            <h1 class="font-extrabold text-4xl lg:text-6xl tracking-tighter mb-0 md:-mb-4 flex flex-col gap-3 items-center lg:items-start">
                <span class="relative">Your Super Benfit</span>
                <span class="whitespace-nowrap relative">
                    <span class="mr-3 sm:mr-4">without the</span>
                    <span class=" relative whitespace-nowrap">
                        <span class="absolute bg-neutral-content -left-2 -top-1 -bottom-1 -right-2 md:-left-3 md:-top-0 md:-bottom-0 md:-right-3 -rotate-1"></span>
                        <span class="relative text-neutral">Pain</span>
                    </span>
                </span>
            </h1>
            <div class="relative text-xl lg:text-2xl text-white opacity-80 leading-snug">
                <p class="mb-10">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Libero dolorem velit odit optio impedit earum, facere animi laborum quia quisquam, eius omnis doloremque. Ea assumenda, aliquam ipsa voluptas molestiae iste.</p>
                <p class="my-0">Lorem ipsum. Dolor sit.</p>
                <p class="my-0">
                    <span>Another huge benefit</span>
                    <span class=" relative whitespace-nowrap mx-2">
                        <span class="absolute bg-neutral-content -left-2 -top-1 -bottom-1 -right-2 md:-left-1 md:-top-0 md:-bottom-0 md:-right-0 -rotate-1"></span>
                        <span class="relative text-neutral">highlight</span>
                    </span>
                    <span>to become awesome.</span>
                </p>
                <p>Made with love. ❤️</p>
                <img alt="An arrow pointing to the mail img" class="hidden lg:block absolute -right-4 -bottom-12 w-[280px] my-0" srcset="{{ asset('arrow.png') }} 1x, {{ asset('arrow@2x.png') }} 2x" src="{{ asset('arrow.png') }}">
            </div>
            <div class="space-y-4">
                <a href="#" class="btn btn-primary group btn-wide" title="Create">
                    <x-lucide-trophy class="w-5 h-5"/>
                    <span>Start Now</span>
                </a>
                <p class="text-sm md:text-base flex justify-center items-center gap-2 md:text-sm">
                    <x-lucide-gift class="w-5 h-5 text-accent" />
                    <span>Absolutely <span class="text-accent">free</span>.</span>
                </p>
            </div>
            <div class="flex flex-col md:flex-row justify-center align-center gap-3">
                <div class="-space-x-5 avatar-group justy-start">
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
                    </div>
                    <div class="avatar relative inline-flex w-12 h-12">
                        <img alt="Profile" width="400" height="400" style="color: transparent;" srcset="https://placehold.co/200x200 1x, https://placehold.co/200x200 2x" src="https://placehold.co/200x200">
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center md:items-start gap-1">
                    <div class="rating">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-yellow-500"><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="text-base text-base-content/80"><span class="font-semibold text-base-content">500</span> people are awesome</div>
                </div>
            </div>
        </div>
        <div class="relative max-md:-m-4 lg:w-full">
            <figure class="max-w-xl ml-auto lg:relative lg:top-44 xl:static xl:top-0">
                <img alt="An email showing an inspiring quote to start the day" class="w-full" srcset="https://placehold.co/1152x1152 1x, https://placehold.co/1152x1152 2x" src="https://placehold.co/1152x1152">
            </figure>
        </div>
    </section>

    <section class="py-8 lg:py-16 px-8">
        <div class="prose prose-lg bg-neutral text-neutral-content rounded-lg p-8 md:p-16 max-w-lg mx-auto text-neutral-content">
            <div class="leading-relaxed">
                <div class="space-y-1 mb-8">
                    <p class="mb-4">Are you in <span class="font-bold">pain</span> because...</p>
                    <ul class="pl-4 space-y-4 list-disc">
                        <li><span class="text-red-400 font-medium">painful example here </span> that is hurting me</li>
                        <li>it's hurting me because <span class="text-red-400 font-medium">painful example here</span></li>
                        <li>here is another <span class="text-red-400 font-medium">painful example</span></li>
                        <li>another <span class="text-red-400 font-medium">painful example here</span> that is hurting you?</li>
                    </ul>
                </div>
                <div class="flex flex-col md:flex-row items-center">
                    <p>= <span class="text-red-400">24 hours</span> of pain</p>
                    <x-lucide-cloud-drizzle class="w-8 h-8 fill-neutral-content shrink-0 ml-1" />
                </div>
            </div>
        </div>
        <div class="my-20 inset-x-0 text-center flex gap-1 justify-center items-center text-sm opacity-80">
            <x-lucide-arrow-down class="w-4 h-4 shrink-0" />
            <p class="text-xl">There's an easier way</p>
        </div>
    </section>

    <section class="py-8 lg:py-16">
        <div class="max-w-3xl mx-auto">
            <div class="prose bg-base-100 max-lg:px-6 max-w-3xl">
                <p class="text-accent font-medium text-sm font-mono mb-3">const launch_time = "06:00 AM"; </p>
                <h2 class="font-bold text-2xl lg:text-5xl tracking-tight mt-0 mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit 🚀</h2>
                <div class="mb-8 text-lg text-base-content/80 leading-normal lg:text-2xl">
                    <p class="mb-8">
                        Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Nihil amet ut quas illum suscipit reiciendis explicabo qui debitis odio maxime quis perspiciatis, voluptatibus provident fuga quibusdam aspernatur quos dolore ab? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste neque dolor quod tenetur quisquam, totam recusandae, nostrum, sit fuga aperiam quia alias. Architecto ipsa deleniti, dicta assumenda culpa, odio vero!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Nihil amet ut quas illum suscipit reiciendis explicabo qui debitis odio maxime quis perspiciatis, voluptatibus provident fuga quibusdam aspernatur quos dolore ab? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste neque dolor quod tenetur quisquam, totam recusandae, nostrum, sit fuga aperiam quia alias. Architecto ipsa deleniti, dicta assumenda culpa, odio vero!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 lg:py-16">
        <div class="max-w-3xl mx-auto">
            <div class="prose bg-base-100 max-lg:px-6 max-w-3xl">
                <h2 class="font-bold text-3xl lg:text-5xl tracking-tight mt-0 mb-10">Inspirations Showcase ✨</h2>
                <div class="text-lg text-base-content/80 leading-normal lg:text-xl space-y-4">
                    <div class="mb-8">
                        <div class="mb-4"><strong>Goal: 1</strong></div>
                        <div><strong class="text-primary/80">Something</strong>:
                            <blockquote class="mt-0 mb-3">
                                <p class="text-xl italic font-semibold text-white mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae commodi, tenetur sint minus sunt optio in. Vero ex sint fugiat.</p>
                                <span class="text-xl"> – Unknown</span>
                            </blockquote>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="mb-8">
                        <div class="mb-4"><strong>Goal: 2</strong></div>
                        <div><strong class="text-primary/80">Something</strong>:
                            <blockquote class="mt-0 mb-3">
                                <p class="text-xl italic font-semibold text-white mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae commodi, tenetur sint minus sunt optio in. Vero ex sint fugiat.</p>
                                <span class="text-xl"> – Unknown</span>
                            </blockquote>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="mb-8">
                        <div class="mb-4"><strong>Goal: 3</strong></div>
                        <div><strong class="text-primary/80">Something</strong>:
                            <blockquote class="mt-0 mb-3">
                                <p class="text-xl italic font-semibold text-white mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae commodi, tenetur sint minus sunt optio in. Vero ex sint fugiat.</p>
                                <span class="text-xl"> – Unknown</span>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="max-w-3xl mx-auto">
            <div class="prose bg-base-100 max-md:px-8 max-w-3xl">
                <h2 class="font-bold text-3xl lg:text-5xl tracking-tight mt-0 mb-10">What Users Say</h2>
                <div class="text-3xl text-base-content/80 leading-normal lg:text-2xl space-y-4">
                    <figure class="max-w-screen-md">
                        <div class="flex items-center mb-4 text-yellow-300">
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                        </div>
                        <blockquote>
                            <p class="text-2xl text-white">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Saepe nulla ex nisi error. Iusto doloremque, nihil doloribus asperiores architecto accusamus voluptate recusandae quia facilis ad beatae tempore quidem pariatur distinctio.</p>
                        </blockquote>
                        <figcaption class="flex items-center mt-6 space-x-3 rtl:space-x-reverse">
                            <img class="w-6 h-6 rounded-full" src="https://placehold.co/200x200" alt="profile picture">
                            <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-700">
                                <cite class="pe-3 font-medium text-white">Cool dude</cite>
                                <cite class="ps-3 text-sm text-gray-400">An enthusiast</cite>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <section class="py-8 lg:py-16">
        <div class="max-w-3xl mx-auto">
            <div class="prose bg-base-100 max-lg:px-6 max-w-3xl">
                <h2 class="font-bold lg:text-5xl tracking-tight mt-0 mb-10">FAQ</h2>
                <div class="text-base-content/80 leading-normal lg:text-2xl space-y-4">
                    <div class="collapse collapse-plus bg-base-200">
                        <input type="radio" name="my-accordion-3" checked="checked" />
                        <div class="collapse-title text-primary/80 text-xl font-medium">
                            Why?
                        </div>
                        <div class="collapse-content text-xl">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At explicabo, cum, deleniti id aspernatur qui voluptates quos hic, modi ab temporibus repudiandae atque molestiae alias delectus, magnam itaque necessitatibus incidunt.
                            </p>
                        </div>
                    </div>
                    <div class="collapse collapse-plus bg-base-200">
                        <input type="radio" name="my-accordion-3" checked="checked" />
                        <div class="collapse-title text-primary/80 text-xl font-medium">
                            What?
                        </div>
                        <div class="collapse-content text-xl">
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, obcaecati.
                            </p>
                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, obcaecati. Vel quibusdam pariatur nisi repellat similique fugiat ullam alias, odit qui rem nesciunt soluta ex porro tempora corporis, harum! Odio!</p>
                        </div>
                    </div>
                    <div class="collapse collapse-plus bg-base-200">
                        <input type="radio" name="my-accordion-3" />
                        <div class="collapse-title text-primary/80 text-xl font-medium">
                            When?
                        </div>
                        <div class="collapse-content text-xl">
                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, obcaecati. Vel quibusdam pariatur nisi repellat similique fugiat ullam alias, odit qui rem nesciunt soluta ex porro tempora corporis, harum! Odio!</p>
                        </div>
                    </div>
                    <div class="collapse collapse-plus bg-base-200">
                        <input type="radio" name="my-accordion-3" />
                        <div class="collapse-title text-primary/80 text-xl font-medium">
                            If?
                        </div>
                        <div class="collapse-content text-xl">
                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, obcaecati. Vel quibusdam pariatur nisi repellat similique fugiat ullam alias, odit qui rem nesciunt soluta ex porro tempora corporis, harum! Odio!</p>
                        </div>
                    </div>
                    <div class="collapse collapse-plus bg-base-200">
                        <input type="radio" name="my-accordion-3" />
                        <div class="collapse-title text-primary/80 text-xl font-medium">
                            Else?
                        </div>
                        <div class="collapse-content text-xl">
                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, obcaecati. Vel quibusdam pariatur nisi repellat similique fugiat ullam alias, odit qui rem nesciunt soluta ex porro tempora corporis, harum! Odio!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
