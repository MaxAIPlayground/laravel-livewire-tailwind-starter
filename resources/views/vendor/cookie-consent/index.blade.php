{{-- @if ($cookieConsentConfig['enabled'] && ! $alreadyConsentedWithCookies) --}}

    @include('cookie-consent::dialogContents')

    <script>

        window.laravelCookieConsent = (function () {

            const COOKIE_VALUE = 1;
            const COOKIE_DOMAIN = '{{ config('session.domain') ?? request()->getHost() }}';

            function consentWithCookies() {
                setCookie('{{ $cookieConsentConfig['cookie_name'] }}', COOKIE_VALUE, {{ $cookieConsentConfig['cookie_lifetime'] }});
                hideCookieDialog();
            }

            function undoConsentWithCookies() {
                unsetCookie('{{ $cookieConsentConfig['cookie_name'] }}');
                hideCookieDialog();
                if (Toaster) {
                    Toaster.success('Du hast deine Einstellungen erfolgreich zurückgesetzt.');
                    setTimeout(function () {
                        showCookieDialogAfterUndoConsent();
                    }, 5000);
                }
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');
                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function showCookieDialogAfterUndoConsent() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');
                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = '';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value
                    + ';expires=' + date.toUTCString()
                    + ';domain=' + COOKIE_DOMAIN
                    + ';path=/{{ config('session.secure') ? ';secure' : null }}'
                    + '{{ config('session.same_site') ? ';samesite='.config('session.same_site') : null }}';
            }

            function unsetCookie(name) {
                const date = new Date();
                date.setTime(date.getTime() - (24 * 60 * 60 * 1000)); // Set to a past date to remove the cookie
                document.cookie = name + '=' + ''
                    + ';expires=' + date.toUTCString()
                    + ';domain=' + COOKIE_DOMAIN
                    + ';path=/'
                    + '{{ config('session.secure') ? ';secure' : '' }}'
                    + '{{ config('session.same_site') ? ';samesite='.config('session.same_site') : '' }}';
            }

            if (cookieExists('{{ $cookieConsentConfig['cookie_name'] }}')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog,
                undoConsentWithCookies: undoConsentWithCookies,
            };
        })();
    </script>
{{-- @endif --}}
