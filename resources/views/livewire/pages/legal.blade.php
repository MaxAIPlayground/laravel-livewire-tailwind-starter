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
        <h1>Privacy Policy</h1>
    </section>

    <div>
        <section class="pb-8">
            <div class="prose mx-auto text-sm lg:leading-relaxed text-base-content/70">

                <h2 id="m716">Heading h2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam magnam, neque qui rerum quidem repellendus voluptate, iusto sint sequi, hic eos similique aut molestias inventore provident earum harum unde odit?</p>

                <h3>Revoke Cookie preferences</h3>
                <p id="cookie-widerruf">
                    Click the button below to revoke your cookie consent.
                    <a class="mt-2 mb-4 btn btn-tight" href="javascript:window.laravelCookieConsent.undoConsentWithCookies()" title="Opt-Out des notwendingen Cookies">Revoke cookie consent</a>
                </p>

            </div>
        </section>
    </div>
</div>
