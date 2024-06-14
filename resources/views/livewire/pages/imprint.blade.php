<?php

use Artesaos\SEOTools\Facades\SEOMeta;
use Livewire\Volt\Component;

new class extends Component
{
    public function mount()
    {
        SEOMeta::setTitle('');
        SEOMeta::setDescription('');
        SEOMeta::setRobots('noindex,nofollow');
    }

}; ?>

<div class="prose prose-sm prose-p:leading-normal mx-auto lg:mt-10">

    <section class="not-prose mb-10">
        <h1>Impressum</h1>
    </section>

    <div class="lg:pb-20">
        <section class="pb-8">
            <div class="prose mx-auto text-sm lg:leading-relaxed text-base-content/70">

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, officiis corporis! Expedita, dignissimos vero amet pariatur eaque omnis, doloribus, eveniet repudiandae eius id, temporibus debitis ipsa ad ducimus laudantium excepturi!
                </p>

            </div>
        </section>
    </div>
</div>
