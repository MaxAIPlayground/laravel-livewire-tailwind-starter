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

<div x-data="{
    toc: {},
    handleToc: function(section) {
        for (let t in this.toc) {
            this.toc[t] = false;
        }
        this.toc[section] = true;
    }
}">
    <div class="md:flex md:flex-row md:mx-auto md:max-w-6xl mx-auto lg:mt-10 pb-20">

        <x-toc>
            <li>
                <a :class="toc[1] ? 'toc--active' : ''" href="#section-1" title="">
                    General
                </a>
            </li>
            <li>
                <a :class="toc[2] ? 'toc--active' : ''" href="#section-2" title="">
                    An introduction
                </a>
            </li>
            <li>
                <a :class="toc[3] ? 'toc--active' : ''" href="#section-3" title="">
                    1. Part 1 heading
                </a>
                <ul class="ml-5">
                    <li>
                        <a href="#subpart-1" title="">Subpart 1</a>
                    </li>
                    <li>
                        <a href="#subpart-2" title="">Subpart 2</a>
                    </li>
                    <li>
                        <a href="#subpart-3" title="">Subpart 3</a>
                    </li>
                </ul>
            </li>
        </x-toc>

        <article class="container mx-auto">
            <div class="prose prose-sm lg:prose-base prose-p:leading-normal prose-li:my-0 mx-auto">

                <section class="not-prose mb-6 sm:mb-10" x-intersect="toc[1] = true">
                    <div>
                        <h1 class="!mb-3">The title of this awesome piece of content</h1>
                        <div class="sm:flex items-center justify-between text-sm">
                            <div class="flex items-center gap-1.5 max-sm:mb-1.5">
                                written by:
                                <a href="{{ route('about') }}" class="italic underline" title="">Maximilian</a>
                            </div>
                            <div>
                                Updated at: <span class="italic">12. April 2024</span>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Allgemeines --}}
                <section id="section-1" class="mb-14">
                    <p>
                        Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Velit, quo soluta voluptatum, non debitis repellat, dicta, quidem possimus fugit perferendis laborum veniam incidunt. Unde temporibus asperiores quo debitis fuga dolor.
                    </p>
                    <p>
                        Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Velit, quo soluta voluptatum, non debitis repellat, dicta, quidem possimus fugit perferendis laborum veniam incidunt. Unde temporibus asperiores quo debitis fuga dolor.
                    </p>
                </section>

                <section id="section-2" class="mb-14" x-intersect="handleToc(2)">
                    <h2>
                        <span class="font-semibold">Section heading</span>
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quasi tempore ad magnam maxime aperiam officia ipsum repudiandae amet, esse, illo necessitatibus eos, eum labore hic reiciendis consequatur sit adipisci, voluptate?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium vero ea, blanditiis provident voluptas cupiditate ipsum maiores, rerum officiis dolorum perferendis exercitationem aspernatur ratione, animi, dignissimos! Deleniti reiciendis, provident! Eligendi.
                    </p>
                </section>

                <section id="section-3" class="mb-20" x-intersect="handleToc(3)">
                    <h2>
                        <span class="font-semibold">Section heading</span>
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero praesentium hic dolor architecto ex magni ab assumenda nobis, ea quibusdam earum dignissimos possimus, quos, aut beatae aliquam amet recusandae, fugiat.
                    </p>

                    <h3 id="subpart-1">Subheading 1</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Ullam quisquam numquam officia ducimus, maiores vitae dolores rem deleniti, eaque fugit quaerat expedita laboriosam nam consequatur explicabo repellat atque. Explicabo, possimus!
                    </p>

                    <h3 id="subpart-2">Subheading 2</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Ullam quisquam numquam officia ducimus, maiores vitae dolores rem deleniti, eaque fugit quaerat expedita laboriosam nam consequatur explicabo repellat atque. Explicabo, possimus!
                    </p>

                    <h3 id="subpart-3">Subheading 3</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Ullam quisquam numquam officia ducimus, maiores vitae dolores rem deleniti, eaque fugit quaerat expedita laboriosam nam consequatur explicabo repellat atque. Explicabo, possimus!
                    </p>
                </section>

            </div>
        </article>
    </div>
</div>
