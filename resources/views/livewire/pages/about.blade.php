<?php

use Artesaos\SEOTools\Facades\SEOMeta;
use Livewire\Volt\Component;

new class extends Component
{
    public function mount()
    {
        SEOMeta::setTitle('')
            ->setDescription('');
    }

}; ?>


<div>
    <div class="not-prose prose prose-lg prose-p:leading-normal mx-auto">
        <section class="mb-10 text-center">
            <h1>About {{ config('app.name') }}</h1>
        </section>

        <section class="">
            <div class="prose max-w-3xl mx-auto lg:leading-relaxed text-base-content/70">
                <img
                    class="w-32 h-32 md:w-52 md:h-52 rounded-lg float-left mt-0 mr-8 mb-8 object-center object-cover"
                    src="https://placehold.co/200x200"
                    alt="">
                <h5 class="font-bold">Hey, I'm Maximilian 👋</h5>
                <p>
                    Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Omnis, nulla, suscipit mollitia quisquam at deserunt, maxime natus culpa nesciunt aut saepe, eaque aperiam deleniti sit quibusdam asperiores. Obcaecati ea, deleniti.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. At cum nostrum veniam magni, quis architecto necessitatibus nemo dolore vitae natus commodi officiis a, corporis accusantium reprehenderit ut, impedit perspiciatis molestiae.
                </p>
            </div>
        </section>
    </div>
</div>
