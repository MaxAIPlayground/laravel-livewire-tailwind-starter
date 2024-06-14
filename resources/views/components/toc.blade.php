<aside class="lg:sticky lg:top-10 lg:h-screen lg:w-1/4 lg:flex-shrink-0 max-md:hidden pl-4 max-lg:mr-8 border-r">
    <nav class="toc mb-8">
        <h4 class="mt-0 mb-4"><span class="font-semibold">Table of contents</span></h4>
        <ul {!! $attributes->merge(['class' => 'text-sm lg:text-base [&_a:hover]:text-accent [&_a]:transition-colors leading-snug pl-0 list-none *:pl-2']) !!}>
            {{ $slot }}
        </ul>
    </nav>
    <a href="#" class="btn btn-tight mx-2" title="">
        <x-lucide-pen-line class="w-5 h-5"/>
        <span>Primary Action</span>
    </a>
</aside>
