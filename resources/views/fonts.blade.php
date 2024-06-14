<style>
    /* poppins-latin-ext-400-normal */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-display: swap;
      font-weight: 400;
      src: url({{ Vite::asset('resources/fonts/poppins-latin-ext-400-normal.woff2') }}) format('woff2'), url({{ Vite::asset('resources/fonts/poppins-latin-ext-400-normal.woff') }}) format('woff');
      unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20C0,U+2113,U+2C60-2C7F,U+A720-A7FF;
    }

    /* poppins-latin-400-normal */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-display: swap;
      font-weight: 400;
      src: url({{ Vite::asset('resources/fonts/poppins-latin-400-normal.woff2') }}) format('woff2'), url({{ Vite::asset('resources/fonts/poppins-latin-400-normal.woff') }}) format('woff');
      unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
    }

    /* poppins-latin-ext-500-normal */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-display: swap;
      font-weight: 500;
      src: url({{ Vite::asset('resources/fonts/poppins-latin-ext-500-normal.woff2') }}) format('woff2'), url({{ Vite::asset('resources/fonts/poppins-latin-ext-500-normal.woff') }}) format('woff');
      unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20C0,U+2113,U+2C60-2C7F,U+A720-A7FF;
    }
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-display: swap;
      font-weight: 500;
      src: url({{ Vite::asset('resources/fonts/poppins-latin-500-normal.woff2') }}) format('woff2'), url({{ Vite::asset('resources/fonts/poppins-latin-500-normal.woff') }}) format('woff');
      unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
    }

    /* poppins-latin-ext-600-normal */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-display: swap;
      font-weight: 600;
      src: url({{ Vite::asset('resources/fonts/poppins-latin-ext-600-normal.woff2') }}) format('woff2'), url({{ Vite::asset('resources/fonts/poppins-latin-ext-600-normal.woff') }}) format('woff');
      unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20C0,U+2113,U+2C60-2C7F,U+A720-A7FF;
    }
    /* poppins-latin-600-normal */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-display: swap;
      font-weight: 600;
      src: url({{ Vite::asset('resources/fonts/poppins-latin-600-normal.woff2') }}) format('woff2'), url({{ Vite::asset('resources/fonts/poppins-latin-600-normal.woff') }}) format('woff');
      unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
    }

    /* poppins-latin-ext-700-normal */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-display: swap;
      font-weight: 700;
      src: url({{ Vite::asset('resources/fonts/poppins-latin-ext-700-normal.woff2') }}) format('woff2'), url({{ Vite::asset('resources/fonts/poppins-latin-ext-700-normal.woff') }}) format('woff');
      unicode-range: U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20C0,U+2113,U+2C60-2C7F,U+A720-A7FF;
    }
    /* poppins-latin-700-normal */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-display: swap;
      font-weight: 700;
      src: url({{ Vite::asset('resources/fonts/poppins-latin-700-normal.woff2') }}) format('woff2'), url({{ Vite::asset('resources/fonts/poppins-latin-700-normal.woff') }}) format('woff');
      unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
    }

    /*
     * Now, declare the font early on.
     * This allows the browser to discover the font declarations sooner as the browser
     * doesn't need to wait for the external stylesheet to download.
     * See https://web.dev/articles/font-best-practices#inline_font_declarations
     */
    html {
        font-family: Poppins,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";
    }
</style>
