<div class="js-cookie-consent fixed z-20 bottom-3 left-2 right-2 inset-x-0">
<div class="max-w-lg ml-auto">
        <div class="px-5 py-4 rounded-lg bg-success">
            <div class="flex items-end justify-between flex-wrap">
                <div class="w-0 flex-1 items-center md:inline">
                    <div class="text-sm text-neutral-100">
                        <p class="mb-2">
                            This website uses cookies to improve the user experience. You can find all information about data protection <a href="{{ route('legal') }}">here</a>.
                        </p>
                        <p>
                            You can revoke your consent at any time by clicking <a href="{{ route('legal') }}#cookie-revocation">here</a>.
                        </p>
                    </div>
                </div>
                <div class="mt-2 ml-4 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button class="js-cookie-consent-agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-neutral-content/90 bg-white hover:bg-base-200 transition-colors">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
