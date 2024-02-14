
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="hero architecture section" />
  <title>Artsy</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap"
    rel="stylesheet" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

  <style>


    *,
    ::before,
    ::after {
      box-sizing: border-box;
      /* 1 */
      border-width: 0;
      /* 2 */
      border-style: solid;
      /* 2 */
      border-color: #E4E5E7;
      /* 2 */
    }

    ::before,
    ::after {
      --tw-content: '';
    }



    html {
      line-height: 1.5;
      /* 1 */
      -webkit-text-size-adjust: 100%;
      /* 2 */
      -moz-tab-size: 4;
      /* 3 */
      -o-tab-size: 4;
      tab-size: 4;
      /* 3 */
      font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      /* 4 */
    }

    /


    body {
      margin: 0;
      /* 1 */
      line-height: inherit;
      /* 2 */
    }



    hr {
      height: 0;
      /* 1 */
      color: inherit;
      /* 2 */
      border-top-width: 1px;
      /* 3 */
    }



    abbr:where([title]) {
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted;
    }


    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit;
    }



    a {
      color: inherit;
      text-decoration: inherit;
    }



    b,
    strong {
      font-weight: bolder;
    }



    code,
    kbd,
    samp,
    pre {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      /* 1 */
      font-size: 1em;
      /* 2 */
    }

    small {
      font-size: 80%;
    }



    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline;
    }

    sub {
      bottom: -0.25em;
    }

    sup {
      top: -0.5em;
    }



    table {
      text-indent: 0;
      /* 1 */
      border-color: inherit;
      /* 2 */
      border-collapse: collapse;
      /* 3 */
    }


    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      /* 1 */
      font-size: 100%;
      /* 1 */
      font-weight: inherit;
      /* 1 */
      line-height: inherit;
      /* 1 */
      color: inherit;
      /* 1 */
      margin: 0;
      /* 2 */
      padding: 0;
      /* 3 */
    }

    button,
    select {
      text-transform: none;
    }


    button,
    [type='button'],
    [type='reset'],
    [type='submit'] {
      -webkit-appearance: button;
      /* 1 */
      background-color: transparent;
      /* 2 */
      background-image: none;
      /* 2 */
    }


    :-moz-focusring {
      outline: auto;
    }



    :-moz-ui-invalid {
      box-shadow: none;
    }


    progress {
      vertical-align: baseline;
    }


    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      height: auto;
    }



    [type='search'] {
      -webkit-appearance: textfield;
      /* 1 */
      outline-offset: -2px;
      /* 2 */
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none;
    }


    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      /* 1 */
      font: inherit;
      /* 2 */
    }



    summary {
      display: list-item;
    }


    blockquote,
    dl,
    dd,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    figure,
    p,
    pre {
      margin: 0;
    }

    fieldset {
      margin: 0;
      padding: 0;
    }

    legend {
      padding: 0;
    }

    ol,
    ul,
    menu {
      list-style: none;
      margin: 0;
      padding: 0;
    }



    textarea {
      resize: vertical;
    }



    input::-moz-placeholder,
    textarea::-moz-placeholder {
      opacity: 1;
      /* 1 */
      color: #91949A;
      /* 2 */
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      /* 1 */
      color: #91949A;
      /* 2 */
    }


    button,
    [role="button"] {
      cursor: pointer;
    }


    :disabled {
      cursor: default;
    }


    img,
    svg,
    video,
    canvas,
    audio,
    iframe,
    embed,
    object {
      display: block;
      /* 1 */
      vertical-align: middle;
      /* 2 */
    }


    img,
    video {
      max-width: 100%;
      height: auto;
    }

    *,
    ::before,
    ::after {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(41 148 239 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia: ;
    }

    ::-webkit-backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(41 148 239 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia: ;
    }

    ::backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(41 148 239 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia: ;
    }

    .container {
      width: 100%;
    }

    @media (min-width: 640px) {
      .container {
        max-width: 640px;
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 768px;
      }
    }

    @media (min-width: 1024px) {
      .container {
        max-width: 1024px;
      }
    }

    @media (min-width: 1280px) {
      .container {
        max-width: 1280px;
      }
    }

    @media (min-width: 1536px) {
      .container {
        max-width: 1536px;
      }
    }

    .invisible {
      visibility: hidden;
    }

    .fixed {
      position: fixed;
    }

    .absolute {
      position: absolute;
    }

    .relative {
      position: relative;
    }

    .sticky {
      position: sticky;
    }

    .inset-0 {
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
    }

    .inset-y-0 {
      top: 0px;
      bottom: 0px;
    }

    .inset-x-0 {
      left: 0px;
      right: 0px;
    }

    .top-0 {
      top: 0px;
    }

    .left-4 {
      left: 1rem;
    }

    .right-0 {
      right: 0px;
    }

    .top-full {
      top: 100%;
    }

    .left-0 {
      left: 0px;
    }

    .-left-full {
      left: -100%;
    }

    .bottom-2 {
      bottom: 0.5rem;
    }

    .right-2 {
      right: 0.5rem;
    }

    .bottom-8 {
      bottom: 2rem;
    }

    .bottom-0 {
      bottom: 0px;
    }

    .right-1 {
      right: 0.25rem;
    }

    .right-9 {
      right: 2.25rem;
    }

    .bottom-6 {
      bottom: 1.5rem;
    }

    .top-\[-2\.20rem\] {
      top: -2.20rem;
    }

    .z-10 {
      z-index: 10;
    }

    .z-\[1\] {
      z-index: 1;
    }

    .z-40 {
      z-index: 40;
    }

    .z-20 {
      z-index: 20;
    }

    .z-30 {
      z-index: 30;
    }

    .z-50 {
      z-index: 50;
    }

    .z-0 {
      z-index: 0;
    }

    .order-last {
      order: 9999;
    }

    .col-span-2 {
      grid-column: span 2 / span 2;
    }

    .col-span-3 {
      grid-column: span 3 / span 3;
    }

    .col-span-8 {
      grid-column: span 8 / span 8;
    }

    .col-span-1 {
      grid-column: span 1 / span 1;
    }

    .row-span-4 {
      grid-row: span 4 / span 4;
    }

    .row-span-2 {
      grid-row: span 2 / span 2;
    }

    .row-span-3 {
      grid-row: span 3 / span 3;
    }

    .row-start-1 {
      grid-row-start: 1;
    }

    .m-auto {
      margin: auto;
    }

    .-mx-4 {
      margin-left: -1rem;
      margin-right: -1rem;
    }

    .my-6 {
      margin-top: 1.5rem;
      margin-bottom: 1.5rem;
    }

    .my-8 {
      margin-top: 2rem;
      margin-bottom: 2rem;
    }

    .-mx-6 {
      margin-left: -1.5rem;
      margin-right: -1.5rem;
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto;
    }

    .my-auto {
      margin-top: auto;
      margin-bottom: auto;
    }

    .mx-6 {
      margin-left: 1.5rem;
      margin-right: 1.5rem;
    }

    .mb-12 {
      margin-bottom: 3rem;
    }

    .mt-6 {
      margin-top: 1.5rem;
    }

    .mb-8 {
      margin-bottom: 2rem;
    }

    .mt-4 {
      margin-top: 1rem;
    }

    .mb-2 {
      margin-bottom: 0.5rem;
    }

    .-ml-1 {
      margin-left: -0.25rem;
    }

    .mt-8 {
      margin-top: 2rem;
    }

    .mt-12 {
      margin-top: 3rem;
    }

    .mb-6 {
      margin-bottom: 1.5rem;
    }

    .ml-\[-100\%\] {
      margin-left: -100%;
    }

    .-mr-1 {
      margin-right: -0.25rem;
    }

    .ml-auto {
      margin-left: auto;
    }

    .-mr-2 {
      margin-right: -0.5rem;
    }

    .mt-2 {
      margin-top: 0.5rem;
    }

    .-mb-2 {
      margin-bottom: -0.5rem;
    }

    .mt-16 {
      margin-top: 4rem;
    }

    .mb-4 {
      margin-bottom: 1rem;
    }

    .-mb-0\.5 {
      margin-bottom: -0.125rem;
    }

    .-mb-0 {
      margin-bottom: -0px;
    }

    .-mr-6 {
      margin-right: -1.5rem;
    }

    .-mb-24 {
      margin-bottom: -6rem;
    }

    .-mt-6 {
      margin-top: -1.5rem;
    }

    .ml-48 {
      margin-left: 12rem;
    }

    .mb-16 {
      margin-bottom: 4rem;
    }

    .mr-0 {
      margin-right: 0px;
    }

    .mt-20 {
      margin-top: 5rem;
    }

    .mt-10 {
      margin-top: 2.5rem;
    }

    .-mr-3 {
      margin-right: -0.75rem;
    }

    .-ml-3 {
      margin-left: -0.75rem;
    }

    .ml-4 {
      margin-left: 1rem;
    }

    .mt-32 {
      margin-top: 8rem;
    }

    .mt-auto {
      margin-top: auto;
    }

    .-ml-6 {
      margin-left: -1.5rem;
    }

    .-mr-20 {
      margin-right: -5rem;
    }

    .-ml-2 {
      margin-left: -0.5rem;
    }

    .-mt-16 {
      margin-top: -4rem;
    }

    .-mt-1 {
      margin-top: -0.25rem;
    }

    .mb-28 {
      margin-bottom: 7rem;
    }

    .mb-20 {
      margin-bottom: 5rem;
    }

    .ml-5 {
      margin-left: 1.25rem;
    }

    .block {
      display: block;
    }

    .inline-block {
      display: inline-block;
    }

    .flex {
      display: flex;
    }

    .table {
      display: table;
    }

    .grid {
      display: grid;
    }

    .hidden {
      display: none;
    }

    .aspect-auto {
      aspect-ratio: auto;
    }

    .h-64 {
      height: 16rem;
    }

    .h-56 {
      height: 14rem;
    }

    .h-80 {
      height: 20rem;
    }

    .h-8 {
      height: 2rem;
    }

    .h-5 {
      height: 1.25rem;
    }

    .h-12 {
      height: 3rem;
    }

    .h-16 {
      height: 4rem;
    }

    .h-7 {
      height: 1.75rem;
    }

    .h-6 {
      height: 1.5rem;
    }

    .h-full {
      height: 100%;
    }

    .h-screen {
      height: 100vh;
    }

    .h-10 {
      height: 2.5rem;
    }

    .h-\[80vh\] {
      height: 80vh;
    }

    .h-4 {
      height: 1rem;
    }

    .h-0\.5 {
      height: 0.125rem;
    }

    .h-0 {
      height: 0px;
    }

    .h-\[30rem\] {
      height: 30rem;
    }

    .h-14 {
      height: 3.5rem;
    }

    .h-auto {
      height: auto;
    }

    .h-32 {
      height: 8rem;
    }

    .h-11 {
      height: 2.75rem;
    }

    .h-max {
      height: -webkit-max-content;
      height: -moz-max-content;
      height: max-content;
    }

    .h-\[26rem\] {
      height: 26rem;
    }

    .h-20 {
      height: 5rem;
    }

    .\!h-16 {
      height: 4rem !important;
    }

    .h-3 {
      height: 0.75rem;
    }

    .h-9 {
      height: 2.25rem;
    }

    .max-h-10 {
      max-height: 2.5rem;
    }

    .min-h-screen {
      min-height: 100vh;
    }

    .min-h-\[max-content\] {
      min-height: -webkit-max-content;
      min-height: -moz-max-content;
      min-height: max-content;
    }

    .w-full {
      width: 100%;
    }

    .w-8 {
      width: 2rem;
    }

    .w-max {
      width: -webkit-max-content;
      width: -moz-max-content;
      width: max-content;
    }

    .w-5 {
      width: 1.25rem;
    }

    .w-16 {
      width: 4rem;
    }

    .w-7 {
      width: 1.75rem;
    }

    .w-5\/6 {
      width: 83.333333%;
    }

    .w-12 {
      width: 3rem;
    }

    .w-6 {
      width: 1.5rem;
    }

    .w-32 {
      width: 8rem;
    }

    .w-10 {
      width: 2.5rem;
    }

    .w-4 {
      width: 1rem;
    }

    .w-40 {
      width: 10rem;
    }

    .w-3 {
      width: 0.75rem;
    }

    .w-10\/12 {
      width: 83.333333%;
    }

    .w-2 {
      width: 0.5rem;
    }

    .w-4\/5 {
      width: 80%;
    }

    .w-36 {
      width: 9rem;
    }

    .w-14 {
      width: 3.5rem;
    }

    .w-\[30rem\] {
      width: 30rem;
    }

    .w-80 {
      width: 20rem;
    }

    .w-11\/12 {
      width: 91.666667%;
    }

    .w-auto {
      width: auto;
    }

    .w-28 {
      width: 7rem;
    }

    .w-24 {
      width: 6rem;
    }

    .w-20 {
      width: 5rem;
    }

    .w-2\/3 {
      width: 66.666667%;
    }

    .w-64 {
      width: 16rem;
    }

    .w-56 {
      width: 14rem;
    }

    .\!w-16 {
      width: 4rem !important;
    }

    .\!w-28 {
      width: 7rem !important;
    }

    .min-w-max {
      min-width: -webkit-max-content;
      min-width: -moz-max-content;
      min-width: max-content;
    }

    .max-w-sm {
      max-width: 24rem;
    }

    .max-w-max {
      max-width: -webkit-max-content;
      max-width: -moz-max-content;
      max-width: max-content;
    }

    .max-w-lg {
      max-width: 32rem;
    }

    .-translate-x-4 {
      --tw-translate-x: -1rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-y-1 {
      --tw-translate-y: 0.25rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-y-10 {
      --tw-translate-y: 2.5rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-y-1\.5 {
      --tw-translate-y: 0.375rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .-translate-y-1 {
      --tw-translate-y: -0.25rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-y-24 {
      --tw-translate-y: 6rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .rotate-180 {
      --tw-rotate: 180deg;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .rotate-45 {
      --tw-rotate: 45deg;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .-rotate-45 {
      --tw-rotate: -45deg;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .scale-0 {
      --tw-scale-x: 0;
      --tw-scale-y: 0;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .scale-125 {
      --tw-scale-x: 1.25;
      --tw-scale-y: 1.25;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .transform {
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .cursor-pointer {
      cursor: pointer;
    }

    .cursor-default {
      cursor: default;
    }

    .select-none {
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .list-inside {
      list-style-position: inside;
    }

    .list-outside {
      list-style-position: outside;
    }

    .list-disc {
      list-style-type: disc;
    }

    .grid-cols-5 {
      grid-template-columns: repeat(5, minmax(0, 1fr));
    }

    .grid-cols-8 {
      grid-template-columns: repeat(8, minmax(0, 1fr));
    }

    .grid-cols-2 {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .grid-cols-3 {
      grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .grid-rows-4 {
      grid-template-rows: repeat(4, minmax(0, 1fr));
    }

    .flex-row-reverse {
      flex-direction: row-reverse;
    }

    .flex-col {
      flex-direction: column;
    }

    .flex-col-reverse {
      flex-direction: column-reverse;
    }

    .flex-wrap {
      flex-wrap: wrap;
    }

    .items-end {
      align-items: flex-end;
    }

    .items-center {
      align-items: center;
    }

    .justify-end {
      justify-content: flex-end;
    }

    .justify-center {
      justify-content: center;
    }

    .justify-between {
      justify-content: space-between;
    }

    .justify-around {
      justify-content: space-around;
    }

    .gap-8 {
      gap: 2rem;
    }

    .gap-4 {
      gap: 1rem;
    }

    .gap-12 {
      gap: 3rem;
    }

    .gap-6 {
      gap: 1.5rem;
    }

    .gap-3 {
      gap: 0.75rem;
    }

    .gap-2 {
      gap: 0.5rem;
    }

    .gap-16 {
      gap: 4rem;
    }

    .gap-1 {
      gap: 0.25rem;
    }

    .gap-28 {
      gap: 7rem;
    }

    .gap-24 {
      gap: 6rem;
    }

    .gap-y-4 {
      row-gap: 1rem;
    }

    .gap-y-6 {
      row-gap: 1.5rem;
    }

    .gap-y-8 {
      row-gap: 2rem;
    }

    .gap-y-2 {
      row-gap: 0.5rem;
    }

    .gap-x-6 {
      -moz-column-gap: 1.5rem;
      column-gap: 1.5rem;
    }

    .space-y-2> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
    }

    .space-y-6> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
    }

    .space-y-4> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(1rem * var(--tw-space-y-reverse));
    }

    .space-y-12> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(3rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(3rem * var(--tw-space-y-reverse));
    }

    .space-y-8> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(2rem * var(--tw-space-y-reverse));
    }

    .-space-x-2> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(-0.5rem * var(--tw-space-x-reverse));
      margin-left: calc(-0.5rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-x-4> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1rem * var(--tw-space-x-reverse));
      margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-y-16> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(4rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(4rem * var(--tw-space-y-reverse));
    }

    .space-x-12> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(3rem * var(--tw-space-x-reverse));
      margin-left: calc(3rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-x-3> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(0.75rem * var(--tw-space-x-reverse));
      margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-x-2> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(0.5rem * var(--tw-space-x-reverse));
      margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-x-1> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(0.25rem * var(--tw-space-x-reverse));
      margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-y-20> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(5rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(5rem * var(--tw-space-y-reverse));
    }

    .-space-x-52> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(-13rem * var(--tw-space-x-reverse));
      margin-left: calc(-13rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-x-6> :not([hidden])~ :not([hidden]) {
      --tw-space-x-reverse: 0;
      margin-right: calc(1.5rem * var(--tw-space-x-reverse));
      margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .-space-y-4> :not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(-1rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(-1rem * var(--tw-space-y-reverse));
    }

    .divide-y> :not([hidden])~ :not([hidden]) {
      --tw-divide-y-reverse: 0;
      border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
      border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
    }

    .divide-x> :not([hidden])~ :not([hidden]) {
      --tw-divide-x-reverse: 0;
      border-right-width: calc(1px * var(--tw-divide-x-reverse));
      border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)));
    }

    .divide-gray-100> :not([hidden])~ :not([hidden]) {
      --tw-divide-opacity: 1;
      border-color: rgb(241 241 242 / var(--tw-divide-opacity));
    }

    .overflow-auto {
      overflow: auto;
    }

    .overflow-hidden {
      overflow: hidden;
    }

    .overflow-x-auto {
      overflow-x: auto;
    }

    .rounded-3xl {
      border-radius: 1.5rem;
    }

    .rounded-xl {
      border-radius: 0.75rem;
    }

    .rounded-full {
      border-radius: 9999px;
    }

    .rounded-\[4rem\] {
      border-radius: 4rem;
    }

    .rounded-md {
      border-radius: 0.375rem;
    }

    .rounded {
      border-radius: 0.25rem;
    }

    .rounded-lg {
      border-radius: 0.5rem;
    }

    .rounded-2xl {
      border-radius: 1rem;
    }

    .rounded-\[2rem\] {
      border-radius: 2rem;
    }

    .rounded-r-3xl {
      border-top-right-radius: 1.5rem;
      border-bottom-right-radius: 1.5rem;
    }

    .border {
      border-width: 1px;
    }

    .border-2 {
      border-width: 2px;
    }

    .border-8 {
      border-width: 8px;
    }

    .border-r {
      border-right-width: 1px;
    }

    .border-t {
      border-top-width: 1px;
    }

    .border-b {
      border-bottom-width: 1px;
    }

    .border-b-2 {
      border-bottom-width: 2px;
    }

    .border-t-4 {
      border-top-width: 4px;
    }

    .border-dashed {
      border-style: dashed;
    }

    .border-gray-100 {
      --tw-border-opacity: 1;
      border-color: rgb(241 241 242 / var(--tw-border-opacity));
    }

    .border-transparent {
      border-color: transparent;
    }

    .border-gray-300 {
      --tw-border-opacity: 1;
      border-color: rgb(218 219 221 / var(--tw-border-opacity));
    }

    .border-gray-200\/50 {
      border-color: rgb(228 229 231 / 0.5);
    }

    .border-white {
      --tw-border-opacity: 1;
      border-color: rgb(255 255 255 / var(--tw-border-opacity));
    }

    .border-cyan-800 {
      --tw-border-opacity: 1;
      border-color: rgb(21 94 117 / var(--tw-border-opacity));
    }

    .border-teal-200 {
      --tw-border-opacity: 1;
      border-color: rgb(153 246 228 / var(--tw-border-opacity));
    }

    .border-gray-200 {
      --tw-border-opacity: 1;
      border-color: rgb(228 229 231 / var(--tw-border-opacity));
    }

    .border-gray-600 {
      --tw-border-opacity: 1;
      border-color: rgb(94 98 106 / var(--tw-border-opacity));
    }

    .border-yellow-200 {
      --tw-border-opacity: 1;
      border-color: rgb(254 240 138 / var(--tw-border-opacity));
    }

    .border-purple-600 {
      --tw-border-opacity: 1;
      border-color: rgb(147 51 234 / var(--tw-border-opacity));
    }

    .border-sky-200 {
      --tw-border-opacity: 1;
      border-color: rgb(186 230 253 / var(--tw-border-opacity));
    }

    .border-gray-300\/75 {
      border-color: rgb(218 219 221 / 0.75);
    }

    .border-sky-100 {
      --tw-border-opacity: 1;
      border-color: rgb(224 242 254 / var(--tw-border-opacity));
    }

    .border-gray-700 {
      --tw-border-opacity: 1;
      border-color: rgb(41 46 57 / var(--tw-border-opacity));
    }

    .border-gray-800 {
      --tw-border-opacity: 1;
      border-color: rgb(28 34 47 / var(--tw-border-opacity));
    }

    .border-yellow-300 {
      --tw-border-opacity: 1;
      border-color: rgb(253 224 71 / var(--tw-border-opacity));
    }

    .border-opacity-10 {
      --tw-border-opacity: 0.1;
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .bg-purple-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(243 232 255 / var(--tw-bg-opacity));
    }

    .bg-indigo-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(224 231 255 / var(--tw-bg-opacity));
    }

    .bg-teal-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(204 251 241 / var(--tw-bg-opacity));
    }

    .bg-gray-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(249 249 250 / var(--tw-bg-opacity));
    }

    .bg-green-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(240 253 244 / var(--tw-bg-opacity));
    }

    .bg-gray-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(241 241 242 / var(--tw-bg-opacity));
    }

    .bg-pink-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(253 242 248 / var(--tw-bg-opacity));
    }

    .bg-purple-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(250 245 255 / var(--tw-bg-opacity));
    }

    .bg-primary {
      --tw-bg-opacity: 1;
      background-color: rgb(0 127 236 / var(--tw-bg-opacity));
    }

    .bg-gray-200 {
      --tw-bg-opacity: 1;
      background-color: rgb(228 229 231 / var(--tw-bg-opacity));
    }

    .bg-gray-900 {
      --tw-bg-opacity: 1;
      background-color: rgb(10 16 30 / var(--tw-bg-opacity));
    }

    .bg-teal-500 {
      --tw-bg-opacity: 1;
      background-color: rgb(20 184 166 / var(--tw-bg-opacity));
    }

    .bg-sky-900 {
      --tw-bg-opacity: 1;
      background-color: rgb(12 74 110 / var(--tw-bg-opacity));
    }

    .bg-teal-300 {
      --tw-bg-opacity: 1;
      background-color: rgb(94 234 212 / var(--tw-bg-opacity));
    }

    .bg-gray-700 {
      --tw-bg-opacity: 1;
      background-color: rgb(41 46 57 / var(--tw-bg-opacity));
    }

    .bg-yellow-200 {
      --tw-bg-opacity: 1;
      background-color: rgb(254 240 138 / var(--tw-bg-opacity));
    }

    .bg-yellow-900 {
      --tw-bg-opacity: 1;
      background-color: rgb(113 63 18 / var(--tw-bg-opacity));
    }

    .bg-yellow-300 {
      --tw-bg-opacity: 1;
      background-color: rgb(253 224 71 / var(--tw-bg-opacity));
    }

    .bg-yellow-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(254 252 232 / var(--tw-bg-opacity));
    }

    .bg-transparent {
      background-color: transparent;
    }

    .bg-green-200 {
      --tw-bg-opacity: 1;
      background-color: rgb(187 247 208 / var(--tw-bg-opacity));
    }

    .bg-green-600 {
      --tw-bg-opacity: 1;
      background-color: rgb(22 163 74 / var(--tw-bg-opacity));
    }

    .bg-green-600\/30 {
      background-color: rgb(22 163 74 / 0.3);
    }

    .bg-purple-600 {
      --tw-bg-opacity: 1;
      background-color: rgb(147 51 234 / var(--tw-bg-opacity));
    }

    .bg-purple-900 {
      --tw-bg-opacity: 1;
      background-color: rgb(88 28 135 / var(--tw-bg-opacity));
    }

    .bg-sky-500 {
      --tw-bg-opacity: 1;
      background-color: rgb(14 165 233 / var(--tw-bg-opacity));
    }

    .bg-cyan-500 {
      --tw-bg-opacity: 1;
      background-color: rgb(6 182 212 / var(--tw-bg-opacity));
    }

    .bg-cyan-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(236 254 255 / var(--tw-bg-opacity));
    }

    .bg-sky-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(240 249 255 / var(--tw-bg-opacity));
    }

    .bg-gray-800 {
      --tw-bg-opacity: 1;
      background-color: rgb(28 34 47 / var(--tw-bg-opacity));
    }

    .\!bg-transparent {
      background-color: transparent !important;
    }

    .bg-red-400 {
      --tw-bg-opacity: 1;
      background-color: rgb(248 113 113 / var(--tw-bg-opacity));
    }

    .bg-yellow-400 {
      --tw-bg-opacity: 1;
      background-color: rgb(250 204 21 / var(--tw-bg-opacity));
    }

    .bg-green-500 {
      --tw-bg-opacity: 1;
      background-color: rgb(34 197 94 / var(--tw-bg-opacity));
    }

    .bg-gray-300 {
      --tw-bg-opacity: 1;
      background-color: rgb(218 219 221 / var(--tw-bg-opacity));
    }

    .\!bg-yellow-900 {
      --tw-bg-opacity: 1 !important;
      background-color: rgb(113 63 18 / var(--tw-bg-opacity)) !important;
    }

    .bg-opacity-50 {
      --tw-bg-opacity: 0.5;
    }

    .bg-opacity-75 {
      --tw-bg-opacity: 0.75;
    }

    .bg-opacity-40 {
      --tw-bg-opacity: 0.4;
    }

    .bg-opacity-30 {
      --tw-bg-opacity: 0.3;
    }

    .bg-opacity-80 {
      --tw-bg-opacity: 0.8;
    }

    .bg-opacity-70 {
      --tw-bg-opacity: 0.7;
    }

    .bg-opacity-5 {
      --tw-bg-opacity: 0.05;
    }

    .bg-gradient-to-br {
      background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
    }

    .bg-gradient-to-r {
      background-image: linear-gradient(to right, var(--tw-gradient-stops));
    }

    .bg-gradient-to-b {
      background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
    }

    .from-pink-500 {
      --tw-gradient-from: #ec4899;
      --tw-gradient-to: rgb(236 72 153 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-sky-600 {
      --tw-gradient-from: #0284c7;
      --tw-gradient-to: rgb(2 132 199 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-gray-100 {
      --tw-gradient-from: #F1F1F2;
      --tw-gradient-to: rgb(241 241 242 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-yellow-200 {
      --tw-gradient-from: #fef08a;
      --tw-gradient-to: rgb(254 240 138 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-white {
      --tw-gradient-from: #fff;
      --tw-gradient-to: rgb(255 255 255 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-sky-400 {
      --tw-gradient-from: #38bdf8;
      --tw-gradient-to: rgb(56 189 248 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-primary {
      --tw-gradient-from: #007FEC;
      --tw-gradient-to: rgb(0 127 236 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-pink-400 {
      --tw-gradient-from: #f472b6;
      --tw-gradient-to: rgb(244 114 182 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-yellow-300 {
      --tw-gradient-from: #fde047;
      --tw-gradient-to: rgb(253 224 71 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-sky-50 {
      --tw-gradient-from: #f0f9ff;
      --tw-gradient-to: rgb(240 249 255 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-sky-700 {
      --tw-gradient-from: #0369a1;
      --tw-gradient-to: rgb(3 105 161 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-cyan-400 {
      --tw-gradient-from: #22d3ee;
      --tw-gradient-to: rgb(34 211 238 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .from-gray-800 {
      --tw-gradient-from: #1C222F;
      --tw-gradient-to: rgb(28 34 47 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .to-purple-600 {
      --tw-gradient-to: #9333ea;
    }

    .to-cyan-400 {
      --tw-gradient-to: #22d3ee;
    }

    .to-transparent {
      --tw-gradient-to: transparent;
    }

    .to-yellow-300 {
      --tw-gradient-to: #fde047;
    }

    .to-green-50 {
      --tw-gradient-to: #f0fdf4;
    }

    .to-purple-500 {
      --tw-gradient-to: #a855f7;
    }

    .to-cyan-300 {
      --tw-gradient-to: #67e8f9;
    }

    .to-purple-400 {
      --tw-gradient-to: #c084fc;
    }

    .to-pink-300 {
      --tw-gradient-to: #f9a8d4;
    }

    .to-gray-200 {
      --tw-gradient-to: #E4E5E7;
    }

    .to-cyan-600 {
      --tw-gradient-to: #0891b2;
    }

    .to-sky-300 {
      --tw-gradient-to: #7dd3fc;
    }

    .to-gray-400 {
      --tw-gradient-to: #91949A;
    }

    .fill-current {
      fill: currentColor;
    }

    .fill-gray-800 {
      fill: #1C222F;
    }

    .fill-gray-700 {
      fill: #292E39;
    }

    .fill-gray-400 {
      fill: #91949A;
    }

    .fill-sky-900 {
      fill: #0c4a6e;
    }

    .object-cover {
      -o-object-fit: cover;
      object-fit: cover;
    }

    .object-top {
      -o-object-position: top;
      object-position: top;
    }

    .object-left-top {
      -o-object-position: left top;
      object-position: left top;
    }

    .p-6 {
      padding: 1.5rem;
    }

    .p-1 {
      padding: 0.25rem;
    }

    .p-8 {
      padding: 2rem;
    }

    .p-3 {
      padding: 0.75rem;
    }

    .p-2 {
      padding: 0.5rem;
    }

    .p-4 {
      padding: 1rem;
    }

    .py-12 {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }

    .px-3 {
      padding-left: 0.75rem;
      padding-right: 0.75rem;
    }

    .py-1 {
      padding-top: 0.25rem;
      padding-bottom: 0.25rem;
    }

    .py-16 {
      padding-top: 4rem;
      padding-bottom: 4rem;
    }

    .px-8 {
      padding-left: 2rem;
      padding-right: 2rem;
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    .px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
    }

    .py-3 {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
    }

    .py-2\.5 {
      padding-top: 0.625rem;
      padding-bottom: 0.625rem;
    }

    .py-2 {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }

    .py-20 {
      padding-top: 5rem;
      padding-bottom: 5rem;
    }

    .py-6 {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }

    .py-8 {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }

    .px-2 {
      padding-left: 0.5rem;
      padding-right: 0.5rem;
    }

    .py-40 {
      padding-top: 10rem;
      padding-bottom: 10rem;
    }

    .px-5 {
      padding-left: 1.25rem;
      padding-right: 1.25rem;
    }

    .px-12 {
      padding-left: 3rem;
      padding-right: 3rem;
    }

    .pt-4 {
      padding-top: 1rem;
    }

    .pt-12 {
      padding-top: 3rem;
    }

    .pb-3 {
      padding-bottom: 0.75rem;
    }

    .pr-3 {
      padding-right: 0.75rem;
    }

    .pl-14 {
      padding-left: 3.5rem;
    }

    .pr-4 {
      padding-right: 1rem;
    }

    .pt-6 {
      padding-top: 1.5rem;
    }

    .pt-1 {
      padding-top: 0.25rem;
    }

    .pb-16 {
      padding-bottom: 4rem;
    }

    .pb-8 {
      padding-bottom: 2rem;
    }

    .pt-8 {
      padding-top: 2rem;
    }

    .pt-28 {
      padding-top: 7rem;
    }

    .pt-24 {
      padding-top: 6rem;
    }

    .pb-5 {
      padding-bottom: 1.25rem;
    }

    .pt-32 {
      padding-top: 8rem;
    }

    .pl-3 {
      padding-left: 0.75rem;
    }

    .pl-2 {
      padding-left: 0.5rem;
    }

    .pb-6 {
      padding-bottom: 1.5rem;
    }

    .pt-2 {
      padding-top: 0.5rem;
    }

    .pt-40 {
      padding-top: 10rem;
    }

    .pl-6 {
      padding-left: 1.5rem;
    }

    .pb-20 {
      padding-bottom: 5rem;
    }

    .pl-12 {
      padding-left: 3rem;
    }

    .pb-2 {
      padding-bottom: 0.5rem;
    }

    .pt-16 {
      padding-top: 4rem;
    }

    .pt-7 {
      padding-top: 1.75rem;
    }

    .text-left {
      text-align: left;
    }

    .text-center {
      text-align: center;
    }

    .font-serif {
      font-family: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
    }

    .text-3xl {
      font-size: 1.875rem;
      line-height: 2.25rem;
    }

    .text-2xl {
      font-size: 1.5rem;
      line-height: 2rem;
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem;
    }

    .text-base {
      font-size: 1rem;
      line-height: 1.5rem;
    }

    .text-lg {
      font-size: 1.125rem;
      line-height: 1.75rem;
    }

    .text-4xl {
      font-size: 2.25rem;
      line-height: 2.5rem;
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 1.75rem;
    }

    .text-5xl {
      font-size: 3rem;
      line-height: 1;
    }

    .text-xs {
      font-size: 0.75rem;
      line-height: 1rem;
    }

    .text-8xl {
      font-size: 6rem;
      line-height: 1;
    }

    .font-bold {
      font-weight: 700;
    }

    .font-semibold {
      font-weight: 600;
    }

    .font-medium {
      font-weight: 500;
    }

    .font-light {
      font-weight: 300;
    }

    .uppercase {
      text-transform: uppercase;
    }

    .leading-none {
      line-height: 1;
    }

    .tracking-wide {
      letter-spacing: 0.025em;
    }

    .text-gray-600 {
      --tw-text-opacity: 1;
      color: rgb(94 98 106 / var(--tw-text-opacity));
    }

    .text-gray-800 {
      --tw-text-opacity: 1;
      color: rgb(28 34 47 / var(--tw-text-opacity));
    }

    .text-primary {
      --tw-text-opacity: 1;
      color: rgb(0 127 236 / var(--tw-text-opacity));
    }

    .text-gray-400 {
      --tw-text-opacity: 1;
      color: rgb(145 148 154 / var(--tw-text-opacity));
    }

    .text-gray-500 {
      --tw-text-opacity: 1;
      color: rgb(120 123 130 / var(--tw-text-opacity));
    }

    .text-gray-900 {
      --tw-text-opacity: 1;
      color: rgb(10 16 30 / var(--tw-text-opacity));
    }

    .text-sky-600 {
      --tw-text-opacity: 1;
      color: rgb(2 132 199 / var(--tw-text-opacity));
    }

    .text-purple-500 {
      --tw-text-opacity: 1;
      color: rgb(168 85 247 / var(--tw-text-opacity));
    }

    .text-gray-700 {
      --tw-text-opacity: 1;
      color: rgb(41 46 57 / var(--tw-text-opacity));
    }

    .text-indigo-500 {
      --tw-text-opacity: 1;
      color: rgb(99 102 241 / var(--tw-text-opacity));
    }

    .text-teal-600 {
      --tw-text-opacity: 1;
      color: rgb(13 148 136 / var(--tw-text-opacity));
    }

    .text-indigo-900 {
      --tw-text-opacity: 1;
      color: rgb(49 46 129 / var(--tw-text-opacity));
    }

    .text-indigo-600 {
      --tw-text-opacity: 1;
      color: rgb(79 70 229 / var(--tw-text-opacity));
    }

    .text-white {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .text-purple-600 {
      --tw-text-opacity: 1;
      color: rgb(147 51 234 / var(--tw-text-opacity));
    }

    .text-green-900 {
      --tw-text-opacity: 1;
      color: rgb(20 83 45 / var(--tw-text-opacity));
    }

    .text-cyan-400 {
      --tw-text-opacity: 1;
      color: rgb(34 211 238 / var(--tw-text-opacity));
    }

    .text-cyan-200 {
      --tw-text-opacity: 1;
      color: rgb(165 243 252 / var(--tw-text-opacity));
    }

    .text-gray-300 {
      --tw-text-opacity: 1;
      color: rgb(218 219 221 / var(--tw-text-opacity));
    }

    .text-green-500 {
      --tw-text-opacity: 1;
      color: rgb(34 197 94 / var(--tw-text-opacity));
    }

    .text-gray-100 {
      --tw-text-opacity: 1;
      color: rgb(241 241 242 / var(--tw-text-opacity));
    }

    .text-pink-600 {
      --tw-text-opacity: 1;
      color: rgb(219 39 119 / var(--tw-text-opacity));
    }

    .text-gray-200 {
      --tw-text-opacity: 1;
      color: rgb(228 229 231 / var(--tw-text-opacity));
    }

    .text-cyan-900 {
      --tw-text-opacity: 1;
      color: rgb(22 78 99 / var(--tw-text-opacity));
    }

    .text-teal-800 {
      --tw-text-opacity: 1;
      color: rgb(17 94 89 / var(--tw-text-opacity));
    }

    .text-teal-900 {
      --tw-text-opacity: 1;
      color: rgb(19 78 74 / var(--tw-text-opacity));
    }

    .text-cyan-800 {
      --tw-text-opacity: 1;
      color: rgb(21 94 117 / var(--tw-text-opacity));
    }

    .text-yellow-800 {
      --tw-text-opacity: 1;
      color: rgb(133 77 14 / var(--tw-text-opacity));
    }

    .text-yellow-900 {
      --tw-text-opacity: 1;
      color: rgb(113 63 18 / var(--tw-text-opacity));
    }

    .text-yellow-700 {
      --tw-text-opacity: 1;
      color: rgb(161 98 7 / var(--tw-text-opacity));
    }

    .text-green-600 {
      --tw-text-opacity: 1;
      color: rgb(22 163 74 / var(--tw-text-opacity));
    }

    .text-green-700 {
      --tw-text-opacity: 1;
      color: rgb(21 128 61 / var(--tw-text-opacity));
    }

    .text-green-800 {
      --tw-text-opacity: 1;
      color: rgb(22 101 52 / var(--tw-text-opacity));
    }

    .text-pink-50 {
      --tw-text-opacity: 1;
      color: rgb(253 242 248 / var(--tw-text-opacity));
    }

    .text-sky-800 {
      --tw-text-opacity: 1;
      color: rgb(7 89 133 / var(--tw-text-opacity));
    }

    .text-sky-900 {
      --tw-text-opacity: 1;
      color: rgb(12 74 110 / var(--tw-text-opacity));
    }

    .text-sky-500 {
      --tw-text-opacity: 1;
      color: rgb(14 165 233 / var(--tw-text-opacity));
    }

    .text-cyan-600 {
      --tw-text-opacity: 1;
      color: rgb(8 145 178 / var(--tw-text-opacity));
    }

    .text-cyan-700 {
      --tw-text-opacity: 1;
      color: rgb(14 116 144 / var(--tw-text-opacity));
    }

    .text-cyan-500 {
      --tw-text-opacity: 1;
      color: rgb(6 182 212 / var(--tw-text-opacity));
    }

    .text-red-500 {
      --tw-text-opacity: 1;
      color: rgb(239 68 68 / var(--tw-text-opacity));
    }

    .text-blue-900 {
      --tw-text-opacity: 1;
      color: rgb(0 50 94 / var(--tw-text-opacity));
    }

    .underline {
      -webkit-text-decoration-line: underline;
      text-decoration-line: underline;
    }

    .line-through {
      -webkit-text-decoration-line: line-through;
      text-decoration-line: line-through;
    }

    .placeholder-gray-600::-moz-placeholder {
      --tw-placeholder-opacity: 1;
      color: rgb(94 98 106 / var(--tw-placeholder-opacity));
    }

    .placeholder-gray-600::placeholder {
      --tw-placeholder-opacity: 1;
      color: rgb(94 98 106 / var(--tw-placeholder-opacity));
    }

    .placeholder-gray-500::-moz-placeholder {
      --tw-placeholder-opacity: 1;
      color: rgb(120 123 130 / var(--tw-placeholder-opacity));
    }

    .placeholder-gray-500::placeholder {
      --tw-placeholder-opacity: 1;
      color: rgb(120 123 130 / var(--tw-placeholder-opacity));
    }

    .opacity-75 {
      opacity: 0.75;
    }

    .opacity-0 {
      opacity: 0;
    }

    .opacity-40 {
      opacity: 0.4;
    }

    .shadow-2xl {
      --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
      --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-md {
      --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-lg {
      --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-xl {
      --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-gray-600\/10 {
      --tw-shadow-color: rgb(94 98 106 / 0.1);
      --tw-shadow: var(--tw-shadow-colored);
    }

    .shadow-transparent {
      --tw-shadow-color: transparent;
      --tw-shadow: var(--tw-shadow-colored);
    }

    .outline-none {
      outline: 2px solid transparent;
      outline-offset: 2px;
    }

    .ring-1 {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .ring-gray-200 {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(228 229 231 / var(--tw-ring-opacity));
    }

    .blur {
      --tw-blur: blur(8px);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .blur-\[106px\] {
      --tw-blur: blur(106px);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .brightness-200 {
      --tw-brightness: brightness(2);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .contrast-200 {
      --tw-contrast: contrast(2);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .contrast-0 {
      --tw-contrast: contrast(0);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .grayscale {
      --tw-grayscale: grayscale(100%);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .-hue-rotate-30 {
      --tw-hue-rotate: hue-rotate(-30deg);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .backdrop-blur {
      --tw-backdrop-blur: blur(8px);
      -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
      backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .backdrop-blur-md {
      --tw-backdrop-blur: blur(12px);
      -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
      backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .backdrop-blur-sm {
      --tw-backdrop-blur: blur(4px);
      -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
      backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .backdrop-blur-2xl {
      --tw-backdrop-blur: blur(40px);
      -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
      backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .backdrop-filter {
      -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
      backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .transition {
      transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms;
    }

    .transition-all {
      transition-property: all;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms;
    }

    .duration-500 {
      transition-duration: 500ms;
    }

    .duration-300 {
      transition-duration: 300ms;
    }

    .ease-in-out {
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    .ease-in {
      transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
    }

    body {
      font-family: 'Urbanist', sans-serif;
    }

    .before\:absolute::before {
      content: var(--tw-content);
      position: absolute;
    }

    .before\:inset-0::before {
      content: var(--tw-content);
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
    }

    .before\:-inset-2::before {
      content: var(--tw-content);
      top: -0.5rem;
      right: -0.5rem;
      bottom: -0.5rem;
      left: -0.5rem;
    }

    .before\:-bottom-2::before {
      content: var(--tw-content);
      bottom: -0.5rem;
    }

    .before\:bottom-0::before {
      content: var(--tw-content);
      bottom: 0px;
    }

    .before\:left-0::before {
      content: var(--tw-content);
      left: 0px;
    }

    .before\:right-0::before {
      content: var(--tw-content);
      right: 0px;
    }

    .before\:top-1::before {
      content: var(--tw-content);
      top: 0.25rem;
    }

    .before\:m-auto::before {
      content: var(--tw-content);
      margin: auto;
    }

    .before\:mx-auto::before {
      content: var(--tw-content);
      margin-left: auto;
      margin-right: auto;
    }

    .before\:my-auto::before {
      content: var(--tw-content);
      margin-top: auto;
      margin-bottom: auto;
    }

    .before\:mt-auto::before {
      content: var(--tw-content);
      margin-top: auto;
    }

    .before\:h-0\.5::before {
      content: var(--tw-content);
      height: 0.125rem;
    }

    .before\:h-0::before {
      content: var(--tw-content);
      height: 0px;
    }

    .before\:h-1::before {
      content: var(--tw-content);
      height: 0.25rem;
    }

    .before\:w-full::before {
      content: var(--tw-content);
      width: 100%;
    }

    .before\:origin-left::before {
      content: var(--tw-content);
      transform-origin: left;
    }

    .before\:origin-right::before {
      content: var(--tw-content);
      transform-origin: right;
    }

    .before\:scale-x-0::before {
      content: var(--tw-content);
      --tw-scale-x: 0;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .before\:rounded-full::before {
      content: var(--tw-content);
      border-radius: 9999px;
    }

    .before\:rounded-t-full::before {
      content: var(--tw-content);
      border-top-left-radius: 9999px;
      border-top-right-radius: 9999px;
    }

    .before\:border::before {
      content: var(--tw-content);
      border-width: 1px;
    }

    .before\:border-gray-200::before {
      content: var(--tw-content);
      --tw-border-opacity: 1;
      border-color: rgb(228 229 231 / var(--tw-border-opacity));
    }

    .before\:border-sky-500::before {
      content: var(--tw-content);
      --tw-border-opacity: 1;
      border-color: rgb(14 165 233 / var(--tw-border-opacity));
    }

    .before\:border-gray-100::before {
      content: var(--tw-content);
      --tw-border-opacity: 1;
      border-color: rgb(241 241 242 / var(--tw-border-opacity));
    }

    .before\:bg-sky-100::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(224 242 254 / var(--tw-bg-opacity));
    }

    .before\:bg-indigo-100::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(224 231 255 / var(--tw-bg-opacity));
    }

    .before\:bg-primary::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(0 127 236 / var(--tw-bg-opacity));
    }

    .before\:bg-gray-50::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(249 249 250 / var(--tw-bg-opacity));
    }

    .before\:bg-white::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .before\:bg-cyan-800::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(21 94 117 / var(--tw-bg-opacity));
    }

    .before\:bg-yellow-800::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(133 77 14 / var(--tw-bg-opacity));
    }

    .before\:bg-green-500::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(34 197 94 / var(--tw-bg-opacity));
    }

    .before\:bg-green-800::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(22 101 52 / var(--tw-bg-opacity));
    }

    .before\:bg-sky-400::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(56 189 248 / var(--tw-bg-opacity));
    }

    .before\:bg-sky-50::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(240 249 255 / var(--tw-bg-opacity));
    }

    .before\:bg-gray-200::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(228 229 231 / var(--tw-bg-opacity));
    }

    .before\:bg-gradient-to-b::before {
      content: var(--tw-content);
      background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
    }

    .before\:transition::before {
      content: var(--tw-content);
      transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms;
    }

    .before\:duration-300::before {
      content: var(--tw-content);
      transition-duration: 300ms;
    }

    .invalid\:border-red-400:invalid {
      --tw-border-opacity: 1;
      border-color: rgb(248 113 113 / var(--tw-border-opacity));
    }

    .invalid\:outline-none:invalid {
      outline: 2px solid transparent;
      outline-offset: 2px;
    }

    .invalid\:ring-2:invalid {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .invalid\:ring-red-400:invalid {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(248 113 113 / var(--tw-ring-opacity));
    }

    .focus-within\:text-cyan-400:focus-within {
      --tw-text-opacity: 1;
      color: rgb(34 211 238 / var(--tw-text-opacity));
    }

    .focus-within\:before\:origin-left:focus-within::before {
      content: var(--tw-content);
      transform-origin: left;
    }

    .focus-within\:before\:\!scale-x-100:focus-within::before {
      content: var(--tw-content);
      --tw-scale-x: 1 !important;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important;
    }

    .focus-within\:invalid\:before\:bg-red-400:invalid:focus-within::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(248 113 113 / var(--tw-bg-opacity));
    }

    .hover\:z-10:hover {
      z-index: 10;
    }

    .hover\:z-\[1\]:hover {
      z-index: 1;
    }

    .hover\:border-gray-100:hover {
      --tw-border-opacity: 1;
      border-color: rgb(241 241 242 / var(--tw-border-opacity));
    }

    .hover\:border-transparent:hover {
      border-color: transparent;
    }

    .hover\:border-cyan-400:hover {
      --tw-border-opacity: 1;
      border-color: rgb(34 211 238 / var(--tw-border-opacity));
    }

    .hover\:border-green-400:hover {
      --tw-border-opacity: 1;
      border-color: rgb(74 222 128 / var(--tw-border-opacity));
    }

    .hover\:border-blue-400:hover {
      --tw-border-opacity: 1;
      border-color: rgb(82 168 242 / var(--tw-border-opacity));
    }

    .hover\:bg-primary:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(0 127 236 / var(--tw-bg-opacity));
    }

    .hover\:bg-gray-50:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(249 249 250 / var(--tw-bg-opacity));
    }

    .hover\:bg-teal-100:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(204 251 241 / var(--tw-bg-opacity));
    }

    .hover\:bg-cyan-500:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(6 182 212 / var(--tw-bg-opacity));
    }

    .hover\:bg-gray-800:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(28 34 47 / var(--tw-bg-opacity));
    }

    .hover\:bg-yellow-100:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(254 249 195 / var(--tw-bg-opacity));
    }

    .hover\:bg-gray-100:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(241 241 242 / var(--tw-bg-opacity));
    }

    .hover\:bg-green-700:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(21 128 61 / var(--tw-bg-opacity));
    }

    .hover\:bg-cyan-600:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(8 145 178 / var(--tw-bg-opacity));
    }

    .hover\:bg-sky-600:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(2 132 199 / var(--tw-bg-opacity));
    }

    .hover\:bg-opacity-80:hover {
      --tw-bg-opacity: 0.8;
    }

    .hover\:bg-opacity-10:hover {
      --tw-bg-opacity: 0.1;
    }

    .hover\:to-red-300:hover {
      --tw-gradient-to: #fca5a5;
    }

    .hover\:to-purple-600:hover {
      --tw-gradient-to: #9333ea;
    }

    .hover\:text-white:hover {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .hover\:text-primary:hover {
      --tw-text-opacity: 1;
      color: rgb(0 127 236 / var(--tw-text-opacity));
    }

    .hover\:text-cyan-600:hover {
      --tw-text-opacity: 1;
      color: rgb(8 145 178 / var(--tw-text-opacity));
    }

    .hover\:text-teal-700:hover {
      --tw-text-opacity: 1;
      color: rgb(15 118 110 / var(--tw-text-opacity));
    }

    .hover\:text-yellow-700:hover {
      --tw-text-opacity: 1;
      color: rgb(161 98 7 / var(--tw-text-opacity));
    }

    .hover\:text-sky-700:hover {
      --tw-text-opacity: 1;
      color: rgb(3 105 161 / var(--tw-text-opacity));
    }

    .hover\:text-sky-900:hover {
      --tw-text-opacity: 1;
      color: rgb(12 74 110 / var(--tw-text-opacity));
    }

    .hover\:shadow-2xl:hover {
      --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
      --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .hover\:shadow-lg:hover {
      --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
      --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .hover\:shadow-gray-600\/10:hover {
      --tw-shadow-color: rgb(94 98 106 / 0.1);
      --tw-shadow: var(--tw-shadow-colored);
    }

    .hover\:grayscale-0:hover {
      --tw-grayscale: grayscale(0);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .hover\:before\:scale-105:hover::before {
      content: var(--tw-content);
      --tw-scale-x: 1.05;
      --tw-scale-y: 1.05;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .focus\:border-cyan-300:focus {
      --tw-border-opacity: 1;
      border-color: rgb(103 232 249 / var(--tw-border-opacity));
    }

    .focus\:bg-teal-100:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(204 251 241 / var(--tw-bg-opacity));
    }

    .focus\:bg-teal-300:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(94 234 212 / var(--tw-bg-opacity));
    }

    .focus\:bg-cyan-800:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(21 94 117 / var(--tw-bg-opacity));
    }

    .focus\:bg-yellow-100:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(254 249 195 / var(--tw-bg-opacity));
    }

    .focus\:bg-gray-800:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(28 34 47 / var(--tw-bg-opacity));
    }

    .focus\:bg-yellow-300:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(253 224 71 / var(--tw-bg-opacity));
    }

    .focus\:bg-green-100:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(220 252 231 / var(--tw-bg-opacity));
    }

    .focus\:bg-green-500:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(34 197 94 / var(--tw-bg-opacity));
    }

    .focus\:bg-purple-500:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(168 85 247 / var(--tw-bg-opacity));
    }

    .focus\:bg-sky-100:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(224 242 254 / var(--tw-bg-opacity));
    }

    .focus\:bg-sky-600:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(2 132 199 / var(--tw-bg-opacity));
    }

    .focus\:bg-gray-700:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(41 46 57 / var(--tw-bg-opacity));
    }

    .focus\:bg-blue-50:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(247 251 255 / var(--tw-bg-opacity));
    }

    .focus\:bg-gray-100:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(241 241 242 / var(--tw-bg-opacity));
    }

    .focus\:from-red-400:focus {
      --tw-gradient-from: #f87171;
      --tw-gradient-to: rgb(248 113 113 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .focus\:from-pink-600:focus {
      --tw-gradient-from: #db2777;
      --tw-gradient-to: rgb(219 39 119 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .focus\:from-cyan-400:focus {
      --tw-gradient-from: #22d3ee;
      --tw-gradient-to: rgb(34 211 238 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .focus\:outline-none:focus {
      outline: 2px solid transparent;
      outline-offset: 2px;
    }

    .focus\:ring-2:focus {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .focus\:ring-primary:focus {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(0 127 236 / var(--tw-ring-opacity));
    }

    .focus\:ring-cyan-300:focus {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(103 232 249 / var(--tw-ring-opacity));
    }

    .active\:border-purple-400:active {
      --tw-border-opacity: 1;
      border-color: rgb(192 132 252 / var(--tw-border-opacity));
    }

    .active\:bg-gray-200:active {
      --tw-bg-opacity: 1;
      background-color: rgb(228 229 231 / var(--tw-bg-opacity));
    }

    .active\:bg-teal-200:active {
      --tw-bg-opacity: 1;
      background-color: rgb(153 246 228 / var(--tw-bg-opacity));
    }

    .active\:bg-teal-400:active {
      --tw-bg-opacity: 1;
      background-color: rgb(45 212 191 / var(--tw-bg-opacity));
    }

    .active\:bg-cyan-600:active {
      --tw-bg-opacity: 1;
      background-color: rgb(8 145 178 / var(--tw-bg-opacity));
    }

    .active\:bg-yellow-200:active {
      --tw-bg-opacity: 1;
      background-color: rgb(254 240 138 / var(--tw-bg-opacity));
    }

    .active\:bg-gray-700:active {
      --tw-bg-opacity: 1;
      background-color: rgb(41 46 57 / var(--tw-bg-opacity));
    }

    .active\:bg-yellow-400:active {
      --tw-bg-opacity: 1;
      background-color: rgb(250 204 21 / var(--tw-bg-opacity));
    }

    .active\:bg-green-200:active {
      --tw-bg-opacity: 1;
      background-color: rgb(187 247 208 / var(--tw-bg-opacity));
    }

    .active\:bg-green-800:active {
      --tw-bg-opacity: 1;
      background-color: rgb(22 101 52 / var(--tw-bg-opacity));
    }

    .active\:bg-purple-700:active {
      --tw-bg-opacity: 1;
      background-color: rgb(126 34 206 / var(--tw-bg-opacity));
    }

    .active\:bg-sky-200:active {
      --tw-bg-opacity: 1;
      background-color: rgb(186 230 253 / var(--tw-bg-opacity));
    }

    .active\:bg-cyan-700:active {
      --tw-bg-opacity: 1;
      background-color: rgb(14 116 144 / var(--tw-bg-opacity));
    }

    .active\:bg-gray-50:active {
      --tw-bg-opacity: 1;
      background-color: rgb(249 249 250 / var(--tw-bg-opacity));
    }

    .active\:bg-gray-600:active {
      --tw-bg-opacity: 1;
      background-color: rgb(94 98 106 / var(--tw-bg-opacity));
    }

    .active\:bg-sky-800:active {
      --tw-bg-opacity: 1;
      background-color: rgb(7 89 133 / var(--tw-bg-opacity));
    }

    .active\:bg-blue-100:active {
      --tw-bg-opacity: 1;
      background-color: rgb(206 230 252 / var(--tw-bg-opacity));
    }

    .active\:from-yellow-400:active {
      --tw-gradient-from: #facc15;
      --tw-gradient-to: rgb(250 204 21 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .active\:from-pink-700:active {
      --tw-gradient-from: #be185d;
      --tw-gradient-to: rgb(190 24 93 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .active\:from-sky-300:active {
      --tw-gradient-from: #7dd3fc;
      --tw-gradient-to: rgb(125 211 252 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .active\:duration-75:active {
      transition-duration: 75ms;
    }

    .active\:before\:scale-95:active::before {
      content: var(--tw-content);
      --tw-scale-x: .95;
      --tw-scale-y: .95;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .disabled\:before\:scale-100:disabled::before {
      content: var(--tw-content);
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .disabled\:before\:bg-gray-300:disabled::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(218 219 221 / var(--tw-bg-opacity));
    }

    .group:hover .group-hover\:translate-x-1 {
      --tw-translate-x: 0.25rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:hover .group-hover\:translate-x-0 {
      --tw-translate-x: 0px;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:hover .group-hover\:translate-y-0 {
      --tw-translate-y: 0px;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:hover .group-hover\:scale-105 {
      --tw-scale-x: 1.05;
      --tw-scale-y: 1.05;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:hover .group-hover\:scale-\[1\.4\] {
      --tw-scale-x: 1.4;
      --tw-scale-y: 1.4;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:hover .group-hover\:rounded-xl {
      border-radius: 0.75rem;
    }

    .group:hover .group-hover\:rounded-lg {
      border-radius: 0.5rem;
    }

    .group:hover .group-hover\:bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .group:hover .group-hover\:text-cyan-300 {
      --tw-text-opacity: 1;
      color: rgb(103 232 249 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-sky-300 {
      --tw-text-opacity: 1;
      color: rgb(125 211 252 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-cyan-600 {
      --tw-text-opacity: 1;
      color: rgb(8 145 178 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-gray-700 {
      --tw-text-opacity: 1;
      color: rgb(41 46 57 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-primary {
      --tw-text-opacity: 1;
      color: rgb(0 127 236 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-cyan-700 {
      --tw-text-opacity: 1;
      color: rgb(14 116 144 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-yellow-700 {
      --tw-text-opacity: 1;
      color: rgb(161 98 7 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-green-500 {
      --tw-text-opacity: 1;
      color: rgb(34 197 94 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:text-blue-600 {
      --tw-text-opacity: 1;
      color: rgb(0 127 236 / var(--tw-text-opacity));
    }

    .group:hover .group-hover\:opacity-100 {
      opacity: 1;
    }

    .group:hover .group-hover\:contrast-100 {
      --tw-contrast: contrast(1);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .group:hover .group-hover\:grayscale-0 {
      --tw-grayscale: grayscale(0);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .group:hover .group-hover\:before\:scale-125::before {
      content: var(--tw-content);
      --tw-scale-x: 1.25;
      --tw-scale-y: 1.25;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:hover .group-hover\:before\:scale-x-100::before {
      content: var(--tw-content);
      --tw-scale-x: 1;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:focus .group-focus\:text-yellow-700 {
      --tw-text-opacity: 1;
      color: rgb(161 98 7 / var(--tw-text-opacity));
    }

    .peer:checked~.peer-checked\:visible {
      visibility: visible;
    }

    .peer:checked~.peer-checked\:-left-0 {
      left: -0px;
    }

    .peer:checked~.peer-checked\:left-0 {
      left: 0px;
    }

    .peer:checked~.peer-checked\:z-0 {
      z-index: 0;
    }

    .peer:checked~.peer-checked\:block {
      display: block;
    }

    .peer:checked~.peer-checked\:flex {
      display: flex;
    }

    .peer:checked~.peer-checked\:translate-y-1 {
      --tw-translate-y: 0.25rem;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .peer:checked~.peer-checked\:scale-100 {
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .peer:checked~.peer-checked\:text-primary {
      --tw-text-opacity: 1;
      color: rgb(0 127 236 / var(--tw-text-opacity));
    }

    .peer:checked~.peer-checked\:opacity-75 {
      opacity: 0.75;
    }

    .peer:checked~.peer-checked\:opacity-100 {
      opacity: 1;
    }

    .peer:checked~.peer-checked\:ring-1 {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .peer:checked~.peer-checked\:ring-primary {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(0 127 236 / var(--tw-ring-opacity));
    }

    .dark .dark\:block {
      display: block;
    }

    .dark .dark\:hidden {
      display: none;
    }

    .dark .dark\:divide-gray-800> :not([hidden])~ :not([hidden]) {
      --tw-divide-opacity: 1;
      border-color: rgb(28 34 47 / var(--tw-divide-opacity));
    }

    .dark .dark\:divide-gray-700> :not([hidden])~ :not([hidden]) {
      --tw-divide-opacity: 1;
      border-color: rgb(41 46 57 / var(--tw-divide-opacity));
    }

    .dark .dark\:border {
      border-width: 1px;
    }

    .dark .dark\:border-gray-700 {
      --tw-border-opacity: 1;
      border-color: rgb(41 46 57 / var(--tw-border-opacity));
    }

    .dark .dark\:border-gray-600 {
      --tw-border-opacity: 1;
      border-color: rgb(94 98 106 / var(--tw-border-opacity));
    }

    .dark .dark\:border-gray-800 {
      --tw-border-opacity: 1;
      border-color: rgb(28 34 47 / var(--tw-border-opacity));
    }

    .dark .dark\:bg-gray-800 {
      --tw-bg-opacity: 1;
      background-color: rgb(28 34 47 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-transparent {
      background-color: transparent;
    }

    .dark .dark\:bg-purple-900\/20 {
      background-color: rgb(88 28 135 / 0.2);
    }

    .dark .dark\:bg-indigo-900\/20 {
      background-color: rgb(49 46 129 / 0.2);
    }

    .dark .dark\:bg-teal-900\/20 {
      background-color: rgb(19 78 74 / 0.2);
    }

    .dark .dark\:bg-darker {
      --tw-bg-opacity: 1;
      background-color: rgb(9 14 26 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-green-900\/10 {
      background-color: rgb(20 83 45 / 0.1);
    }

    .dark .dark\:bg-gray-900 {
      --tw-bg-opacity: 1;
      background-color: rgb(10 16 30 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-gray-700 {
      --tw-bg-opacity: 1;
      background-color: rgb(41 46 57 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-gray-300 {
      --tw-bg-opacity: 1;
      background-color: rgb(218 219 221 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-gray-200 {
      --tw-bg-opacity: 1;
      background-color: rgb(228 229 231 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-black {
      --tw-bg-opacity: 1;
      background-color: rgb(0 0 0 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-green-900\/30 {
      background-color: rgb(20 83 45 / 0.3);
    }

    .dark .dark\:bg-sky-400 {
      --tw-bg-opacity: 1;
      background-color: rgb(56 189 248 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-dark {
      --tw-bg-opacity: 1;
      background-color: rgb(10 16 30 / var(--tw-bg-opacity));
    }

    .dark .dark\:bg-gray-900\/70 {
      background-color: rgb(10 16 30 / 0.7);
    }

    .dark .dark\:bg-opacity-80 {
      --tw-bg-opacity: 0.8;
    }

    .dark .dark\:from-gray-800 {
      --tw-gradient-from: #1C222F;
      --tw-gradient-to: rgb(28 34 47 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .dark .dark\:from-gray-900 {
      --tw-gradient-from: #0A101E;
      --tw-gradient-to: rgb(10 16 30 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .dark .dark\:from-blue-700 {
      --tw-gradient-from: #0065BD;
      --tw-gradient-to: rgb(0 101 189 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
    }

    .dark .dark\:to-transparent {
      --tw-gradient-to: transparent;
    }

    .dark .dark\:to-indigo-600 {
      --tw-gradient-to: #4f46e5;
    }

    .dark .dark\:fill-slate-600 {
      fill: #475569;
    }

    .dark .dark\:fill-white {
      fill: #fff;
    }

    .dark .dark\:fill-gray-200 {
      fill: #E4E5E7;
    }

    .dark .dark\:text-white {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-300 {
      --tw-text-opacity: 1;
      color: rgb(218 219 221 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-500 {
      --tw-text-opacity: 1;
      color: rgb(120 123 130 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-200 {
      --tw-text-opacity: 1;
      color: rgb(228 229 231 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-600 {
      --tw-text-opacity: 1;
      color: rgb(94 98 106 / var(--tw-text-opacity));
    }

    .dark .dark\:text-purple-400 {
      --tw-text-opacity: 1;
      color: rgb(192 132 252 / var(--tw-text-opacity));
    }

    .dark .dark\:text-purple-300 {
      --tw-text-opacity: 1;
      color: rgb(216 180 254 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-400 {
      --tw-text-opacity: 1;
      color: rgb(145 148 154 / var(--tw-text-opacity));
    }

    .dark .dark\:text-indigo-400 {
      --tw-text-opacity: 1;
      color: rgb(129 140 248 / var(--tw-text-opacity));
    }

    .dark .dark\:text-indigo-300 {
      --tw-text-opacity: 1;
      color: rgb(165 180 252 / var(--tw-text-opacity));
    }

    .dark .dark\:text-teal-400 {
      --tw-text-opacity: 1;
      color: rgb(45 212 191 / var(--tw-text-opacity));
    }

    .dark .dark\:text-teal-300 {
      --tw-text-opacity: 1;
      color: rgb(94 234 212 / var(--tw-text-opacity));
    }

    .dark .dark\:text-dark {
      --tw-text-opacity: 1;
      color: rgb(10 16 30 / var(--tw-text-opacity));
    }

    .dark .dark\:text-sky-300 {
      --tw-text-opacity: 1;
      color: rgb(125 211 252 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-700 {
      --tw-text-opacity: 1;
      color: rgb(41 46 57 / var(--tw-text-opacity));
    }

    .dark .dark\:text-pink-300 {
      --tw-text-opacity: 1;
      color: rgb(249 168 212 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-800 {
      --tw-text-opacity: 1;
      color: rgb(28 34 47 / var(--tw-text-opacity));
    }

    .dark .dark\:text-teal-500 {
      --tw-text-opacity: 1;
      color: rgb(20 184 166 / var(--tw-text-opacity));
    }

    .dark .dark\:text-teal-100 {
      --tw-text-opacity: 1;
      color: rgb(204 251 241 / var(--tw-text-opacity));
    }

    .dark .dark\:text-cyan-400 {
      --tw-text-opacity: 1;
      color: rgb(34 211 238 / var(--tw-text-opacity));
    }

    .dark .dark\:text-yellow-300 {
      --tw-text-opacity: 1;
      color: rgb(253 224 71 / var(--tw-text-opacity));
    }

    .dark .dark\:text-yellow-50 {
      --tw-text-opacity: 1;
      color: rgb(254 252 232 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-50 {
      --tw-text-opacity: 1;
      color: rgb(249 249 250 / var(--tw-text-opacity));
    }

    .dark .dark\:text-green-400 {
      --tw-text-opacity: 1;
      color: rgb(74 222 128 / var(--tw-text-opacity));
    }

    .dark .dark\:text-green-500 {
      --tw-text-opacity: 1;
      color: rgb(34 197 94 / var(--tw-text-opacity));
    }

    .dark .dark\:text-sky-400 {
      --tw-text-opacity: 1;
      color: rgb(56 189 248 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-900 {
      --tw-text-opacity: 1;
      color: rgb(10 16 30 / var(--tw-text-opacity));
    }

    .dark .dark\:text-gray-100 {
      --tw-text-opacity: 1;
      color: rgb(241 241 242 / var(--tw-text-opacity));
    }

    .dark .dark\:text-primaryLight {
      --tw-text-opacity: 1;
      color: rgb(0 177 253 / var(--tw-text-opacity));
    }

    .dark .dark\:placeholder-white::-moz-placeholder {
      --tw-placeholder-opacity: 1;
      color: rgb(255 255 255 / var(--tw-placeholder-opacity));
    }

    .dark .dark\:placeholder-white::placeholder {
      --tw-placeholder-opacity: 1;
      color: rgb(255 255 255 / var(--tw-placeholder-opacity));
    }

    .dark .dark\:placeholder-gray-300::-moz-placeholder {
      --tw-placeholder-opacity: 1;
      color: rgb(218 219 221 / var(--tw-placeholder-opacity));
    }

    .dark .dark\:placeholder-gray-300::placeholder {
      --tw-placeholder-opacity: 1;
      color: rgb(218 219 221 / var(--tw-placeholder-opacity));
    }

    .dark .dark\:opacity-80 {
      opacity: 0.8;
    }

    .dark .dark\:opacity-20 {
      opacity: 0.2;
    }

    .dark .dark\:shadow-none {
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .dark .dark\:ring-gray-700 {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(41 46 57 / var(--tw-ring-opacity));
    }

    .dark .dark\:brightness-200 {
      --tw-brightness: brightness(2);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .dark .dark\:contrast-50 {
      --tw-contrast: contrast(.5);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .dark .dark\:grayscale {
      --tw-grayscale: grayscale(100%);
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .dark .dark\:before\:border-gray-700::before {
      content: var(--tw-content);
      --tw-border-opacity: 1;
      border-color: rgb(41 46 57 / var(--tw-border-opacity));
    }

    .dark .dark\:before\:border-gray-600::before {
      content: var(--tw-content);
      --tw-border-opacity: 1;
      border-color: rgb(94 98 106 / var(--tw-border-opacity));
    }

    .dark .dark\:before\:bg-gray-800::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(28 34 47 / var(--tw-bg-opacity));
    }

    .dark .dark\:before\:bg-cyan-400::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(34 211 238 / var(--tw-bg-opacity));
    }

    .dark .dark\:before\:bg-sky-800::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(7 89 133 / var(--tw-bg-opacity));
    }

    .dark .dark\:before\:bg-gray-700::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(41 46 57 / var(--tw-bg-opacity));
    }

    .dark .dark\:before\:bg-white::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .dark .dark\:before\:bg-primaryLight::before {
      content: var(--tw-content);
      --tw-bg-opacity: 1;
      background-color: rgb(0 177 253 / var(--tw-bg-opacity));
    }

    .dark .dark\:hover\:border-gray-700:hover {
      --tw-border-opacity: 1;
      border-color: rgb(41 46 57 / var(--tw-border-opacity));
    }

    .dark .dark\:hover\:bg-gray-800:hover {
      --tw-bg-opacity: 1;
      background-color: rgb(28 34 47 / var(--tw-bg-opacity));
    }

    .dark .dark\:hover\:text-red-400:hover {
      --tw-text-opacity: 1;
      color: rgb(248 113 113 / var(--tw-text-opacity));
    }

    .dark .dark\:hover\:text-yellow-300:hover {
      --tw-text-opacity: 1;
      color: rgb(253 224 71 / var(--tw-text-opacity));
    }

    .dark .dark\:hover\:text-sky-400:hover {
      --tw-text-opacity: 1;
      color: rgb(56 189 248 / var(--tw-text-opacity));
    }

    .dark .dark\:hover\:text-gray-300:hover {
      --tw-text-opacity: 1;
      color: rgb(218 219 221 / var(--tw-text-opacity));
    }

    .dark .dark\:focus\:bg-gray-800:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(28 34 47 / var(--tw-bg-opacity));
    }

    .dark .dark\:focus\:bg-yellow-900:focus {
      --tw-bg-opacity: 1;
      background-color: rgb(113 63 18 / var(--tw-bg-opacity));
    }

    .dark .dark\:active\:bg-gray-800:active {
      --tw-bg-opacity: 1;
      background-color: rgb(28 34 47 / var(--tw-bg-opacity));
    }

    .dark .dark\:active\:bg-teal-900:active {
      --tw-bg-opacity: 1;
      background-color: rgb(19 78 74 / var(--tw-bg-opacity));
    }

    .dark .dark\:active\:bg-yellow-800:active {
      --tw-bg-opacity: 1;
      background-color: rgb(133 77 14 / var(--tw-bg-opacity));
    }

    .dark .dark\:active\:bg-gray-700:active {
      --tw-bg-opacity: 1;
      background-color: rgb(41 46 57 / var(--tw-bg-opacity));
    }

    .dark .dark\:active\:bg-green-900:active {
      --tw-bg-opacity: 1;
      background-color: rgb(20 83 45 / var(--tw-bg-opacity));
    }

    .dark .dark\:active\:bg-sky-900:active {
      --tw-bg-opacity: 1;
      background-color: rgb(12 74 110 / var(--tw-bg-opacity));
    }

    .dark .group:hover .dark\:group-hover\:bg-gray-800 {
      --tw-bg-opacity: 1;
      background-color: rgb(28 34 47 / var(--tw-bg-opacity));
    }

    .dark .group:hover .dark\:group-hover\:text-sky-400 {
      --tw-text-opacity: 1;
      color: rgb(56 189 248 / var(--tw-text-opacity));
    }

    .dark .group:hover .dark\:group-hover\:text-gray-50 {
      --tw-text-opacity: 1;
      color: rgb(249 249 250 / var(--tw-text-opacity));
    }

    .dark .group:hover .dark\:group-hover\:text-cyan-400 {
      --tw-text-opacity: 1;
      color: rgb(34 211 238 / var(--tw-text-opacity));
    }

    .dark .group:hover .dark\:group-hover\:text-white {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .dark .group:hover .dark\:group-hover\:text-yellow-300 {
      --tw-text-opacity: 1;
      color: rgb(253 224 71 / var(--tw-text-opacity));
    }

    .dark .group:focus .dark\:group-focus\:text-yellow-100 {
      --tw-text-opacity: 1;
      color: rgb(254 249 195 / var(--tw-text-opacity));
    }

    @media (min-width: 640px) {
      .sm\:static {
        position: static;
      }

      .sm\:sticky {
        position: sticky;
      }

      .sm\:inset-y-0 {
        top: 0px;
        bottom: 0px;
      }

      .sm\:left-\[-2\.70rem\] {
        left: -2.70rem;
      }

      .sm\:col-span-3 {
        grid-column: span 3 / span 3;
      }

      .sm\:-mx-8 {
        margin-left: -2rem;
        margin-right: -2rem;
      }

      .sm\:mx-auto {
        margin-left: auto;
        margin-right: auto;
      }

      .sm\:-mx-10 {
        margin-left: -2.5rem;
        margin-right: -2.5rem;
      }

      .sm\:my-auto {
        margin-top: auto;
        margin-bottom: auto;
      }

      .sm\:mt-0 {
        margin-top: 0px;
      }

      .sm\:mt-auto {
        margin-top: auto;
      }

      .sm\:-mr-6 {
        margin-right: -1.5rem;
      }

      .sm\:-mb-8 {
        margin-bottom: -2rem;
      }

      .sm\:-ml-1 {
        margin-left: -0.25rem;
      }

      .sm\:ml-0 {
        margin-left: 0px;
      }

      .sm\:block {
        display: block;
      }

      .sm\:flex {
        display: flex;
      }

      .sm\:grid {
        display: grid;
      }

      .sm\:hidden {
        display: none;
      }

      .sm\:h-full {
        height: 100%;
      }

      .sm\:h-72 {
        height: 18rem;
      }

      .sm\:w-2\/6 {
        width: 33.333333%;
      }

      .sm\:w-4\/6 {
        width: 66.666667%;
      }

      .sm\:w-max {
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
      }

      .sm\:w-2\/3 {
        width: 66.666667%;
      }

      .sm\:w-7\/12 {
        width: 58.333333%;
      }

      .sm\:w-5\/12 {
        width: 41.666667%;
      }

      .sm\:w-36 {
        width: 9rem;
      }

      .sm\:w-4\/5 {
        width: 80%;
      }

      .sm\:w-full {
        width: 100%;
      }

      .sm\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .sm\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
      }

      .sm\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
      }

      .sm\:flex-row {
        flex-direction: row;
      }

      .sm\:flex-col {
        flex-direction: column;
      }

      .sm\:items-center {
        align-items: center;
      }

      .sm\:justify-center {
        justify-content: center;
      }

      .sm\:gap-8 {
        gap: 2rem;
      }

      .sm\:space-x-6> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(1.5rem * var(--tw-space-x-reverse));
        margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
      }

      .sm\:space-x-0> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(0px * var(--tw-space-x-reverse));
        margin-left: calc(0px * calc(1 - var(--tw-space-x-reverse)));
      }

      .sm\:space-y-6> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
      }

      .sm\:space-x-8> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(2rem * var(--tw-space-x-reverse));
        margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
      }

      .sm\:space-y-0> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse));
      }

      .sm\:p-8 {
        padding: 2rem;
      }

      .sm\:p-2 {
        padding: 0.5rem;
      }

      .sm\:p-12 {
        padding: 3rem;
      }

      .sm\:p-10 {
        padding: 2.5rem;
      }

      .sm\:p-16 {
        padding: 4rem;
      }

      .sm\:py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
      }

      .sm\:px-0 {
        padding-left: 0px;
        padding-right: 0px;
      }

      .sm\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
      }

      .sm\:px-12 {
        padding-left: 3rem;
        padding-right: 3rem;
      }

      .sm\:pl-0 {
        padding-left: 0px;
      }

      .sm\:pb-8 {
        padding-bottom: 2rem;
      }

      .sm\:pb-0 {
        padding-bottom: 0px;
      }

      .sm\:pt-0 {
        padding-top: 0px;
      }

      .sm\:pl-1 {
        padding-left: 0.25rem;
      }

      .sm\:text-left {
        text-align: left;
      }

      .sm\:text-6xl {
        font-size: 3.75rem;
        line-height: 1;
      }

      .sm\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
      }

      .sm\:text-base {
        font-size: 1rem;
        line-height: 1.5rem;
      }

      .sm\:before\:inset-y-0::before {
        content: var(--tw-content);
        top: 0px;
        bottom: 0px;
      }

      .sm\:before\:h-\[85\%\]::before {
        content: var(--tw-content);
        height: 85%;
      }

      .sm\:before\:w-0\.5::before {
        content: var(--tw-content);
        width: 0.125rem;
      }

      .sm\:before\:w-0::before {
        content: var(--tw-content);
        width: 0px;
      }
    }

    @media (min-width: 768px) {
      .md\:absolute {
        position: absolute;
      }

      .md\:relative {
        position: relative;
      }

      .md\:top-0 {
        top: 0px;
      }

      .md\:left-0 {
        left: 0px;
      }

      .md\:-right-32 {
        right: -8rem;
      }

      .md\:col-span-2 {
        grid-column: span 2 / span 2;
      }

      .md\:col-span-6 {
        grid-column: span 6 / span 6;
      }

      .md\:col-span-1 {
        grid-column: span 1 / span 1;
      }

      .md\:col-span-3 {
        grid-column: span 3 / span 3;
      }

      .md\:mx-auto {
        margin-left: auto;
        margin-right: auto;
      }

      .md\:-mx-8 {
        margin-left: -2rem;
        margin-right: -2rem;
      }

      .md\:mx-0 {
        margin-left: 0px;
        margin-right: 0px;
      }

      .md\:mb-0 {
        margin-bottom: 0px;
      }

      .md\:mb-16 {
        margin-bottom: 4rem;
      }

      .md\:-mt-4 {
        margin-top: -1rem;
      }

      .md\:ml-auto {
        margin-left: auto;
      }

      .md\:mb-20 {
        margin-bottom: 5rem;
      }

      .md\:-mr-32 {
        margin-right: -8rem;
      }

      .md\:-mr-24 {
        margin-right: -6rem;
      }

      .md\:mt-0 {
        margin-top: 0px;
      }

      .md\:block {
        display: block;
      }

      .md\:flex {
        display: flex;
      }

      .md\:hidden {
        display: none;
      }

      .md\:h-auto {
        height: auto;
      }

      .md\:h-40 {
        height: 10rem;
      }

      .md\:h-64 {
        height: 16rem;
      }

      .md\:w-8\/12 {
        width: 66.666667%;
      }

      .md\:w-6\/12 {
        width: 50%;
      }

      .md\:w-5\/12 {
        width: 41.666667%;
      }

      .md\:w-7\/12 {
        width: 58.333333%;
      }

      .md\:w-4\/12 {
        width: 33.333333%;
      }

      .md\:w-full {
        width: 100%;
      }

      .md\:w-10\/12 {
        width: 83.333333%;
      }

      .md\:w-9\/12 {
        width: 75%;
      }

      .md\:w-max {
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
      }

      .md\:w-auto {
        width: auto;
      }

      .md\:w-3\/5 {
        width: 60%;
      }

      .md\:w-11\/12 {
        width: 91.666667%;
      }

      .md\:w-3\/4 {
        width: 75%;
      }

      .md\:w-40 {
        width: 10rem;
      }

      .md\:w-48 {
        width: 12rem;
      }

      .md\:w-2\/3 {
        width: 66.666667%;
      }

      .md\:max-w-none {
        max-width: none;
      }

      .md\:columns-2 {
        -moz-columns: 2;
        columns: 2;
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .md\:grid-cols-5 {
        grid-template-columns: repeat(5, minmax(0, 1fr));
      }

      .md\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
      }

      .md\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
      }

      .md\:grid-rows-2 {
        grid-template-rows: repeat(2, minmax(0, 1fr));
      }

      .md\:flex-row {
        flex-direction: row;
      }

      .md\:flex-nowrap {
        flex-wrap: nowrap;
      }

      .md\:items-center {
        align-items: center;
      }

      .md\:justify-start {
        justify-content: flex-start;
      }

      .md\:justify-between {
        justify-content: space-between;
      }

      .md\:gap-6 {
        gap: 1.5rem;
      }

      .md\:gap-0 {
        gap: 0px;
      }

      .md\:gap-12 {
        gap: 3rem;
      }

      .md\:gap-y-4 {
        row-gap: 1rem;
      }

      .md\:gap-y-0 {
        row-gap: 0px;
      }

      .md\:gap-x-4 {
        -moz-column-gap: 1rem;
        column-gap: 1rem;
      }

      .md\:space-y-0> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse));
      }

      .md\:space-y-6> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
      }

      .md\:space-x-6> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(1.5rem * var(--tw-space-x-reverse));
        margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
      }

      .md\:space-x-12> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(3rem * var(--tw-space-x-reverse));
        margin-left: calc(3rem * calc(1 - var(--tw-space-x-reverse)));
      }

      .md\:-space-x-4> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(-1rem * var(--tw-space-x-reverse));
        margin-left: calc(-1rem * calc(1 - var(--tw-space-x-reverse)));
      }

      .md\:divide-x> :not([hidden])~ :not([hidden]) {
        --tw-divide-x-reverse: 0;
        border-right-width: calc(1px * var(--tw-divide-x-reverse));
        border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)));
      }

      .md\:overflow-x-hidden {
        overflow-x: hidden;
      }

      .md\:rounded-r-2xl {
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
      }

      .md\:border-none {
        border-style: none;
      }

      .md\:bg-transparent {
        background-color: transparent;
      }

      .md\:bg-gradient-to-r {
        background-image: linear-gradient(to right, var(--tw-gradient-stops));
      }

      .md\:p-0 {
        padding: 0px;
      }

      .md\:p-2 {
        padding: 0.5rem;
      }

      .md\:p-4 {
        padding: 1rem;
      }

      .md\:p-8 {
        padding: 2rem;
      }

      .md\:px-12 {
        padding-left: 3rem;
        padding-right: 3rem;
      }

      .md\:py-40 {
        padding-top: 10rem;
        padding-bottom: 10rem;
      }

      .md\:py-0 {
        padding-top: 0px;
        padding-bottom: 0px;
      }

      .md\:py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
      }

      .md\:px-0 {
        padding-left: 0px;
        padding-right: 0px;
      }

      .md\:px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
      }

      .md\:px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
      }

      .md\:py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
      }

      .md\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
      }

      .md\:py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem;
      }

      .md\:pl-16 {
        padding-left: 4rem;
      }

      .md\:pt-20 {
        padding-top: 5rem;
      }

      .md\:pb-0 {
        padding-bottom: 0px;
      }

      .md\:pt-40 {
        padding-top: 10rem;
      }

      .md\:pt-56 {
        padding-top: 14rem;
      }

      .md\:pl-12 {
        padding-left: 3rem;
      }

      .md\:text-left {
        text-align: left;
      }

      .md\:text-center {
        text-align: center;
      }

      .md\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
      }

      .md\:text-5xl {
        font-size: 3rem;
        line-height: 1;
      }

      .md\:text-6xl {
        font-size: 3.75rem;
        line-height: 1;
      }

      .md\:text-7xl {
        font-size: 4.5rem;
        line-height: 1;
      }

      .md\:text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem;
      }

      .md\:before\:-bottom-7::before {
        content: var(--tw-content);
        bottom: -1.75rem;
      }

      .peer:checked~.md\:peer-checked\:hidden {
        display: none;
      }
    }

    @media (min-width: 1024px) {
      .lg\:absolute {
        position: absolute;
      }

      .lg\:relative {
        position: relative;
      }

      .lg\:top-0 {
        top: 0px;
      }

      .lg\:-right-32 {
        right: -8rem;
      }

      .lg\:left-0 {
        left: 0px;
      }

      .lg\:col-span-1 {
        grid-column: span 1 / span 1;
      }

      .lg\:col-span-3 {
        grid-column: span 3 / span 3;
      }

      .lg\:col-span-5 {
        grid-column: span 5 / span 5;
      }

      .lg\:col-span-2 {
        grid-column: span 2 / span 2;
      }

      .lg\:m-0 {
        margin: 0px;
      }

      .lg\:mx-auto {
        margin-left: auto;
        margin-right: auto;
      }

      .lg\:-mx-0 {
        margin-left: -0px;
        margin-right: -0px;
      }

      .lg\:mr-auto {
        margin-right: auto;
      }

      .lg\:ml-0 {
        margin-left: 0px;
      }

      .lg\:mt-0 {
        margin-top: 0px;
      }

      .lg\:mt-16 {
        margin-top: 4rem;
      }

      .lg\:-mb-56 {
        margin-bottom: -14rem;
      }

      .lg\:-mr-24 {
        margin-right: -6rem;
      }

      .lg\:mr-0 {
        margin-right: 0px;
      }

      .lg\:-mt-12 {
        margin-top: -3rem;
      }

      .lg\:block {
        display: block;
      }

      .lg\:flex {
        display: flex;
      }

      .lg\:hidden {
        display: none;
      }

      .lg\:h-28 {
        height: 7rem;
      }

      .lg\:h-full {
        height: 100%;
      }

      .lg\:h-auto {
        height: auto;
      }

      .lg\:h-64 {
        height: 16rem;
      }

      .lg\:h-80 {
        height: 20rem;
      }

      .lg\:h-56 {
        height: 14rem;
      }

      .lg\:w-6\/12 {
        width: 50%;
      }

      .lg\:w-3\/4 {
        width: 75%;
      }

      .lg\:w-1\/2 {
        width: 50%;
      }

      .lg\:w-2\/5 {
        width: 40%;
      }

      .lg\:w-3\/5 {
        width: 60%;
      }

      .lg\:w-7\/12 {
        width: 58.333333%;
      }

      .lg\:w-\[25\%\] {
        width: 25%;
      }

      .lg\:w-28 {
        width: 7rem;
      }

      .lg\:w-\[75\%\] {
        width: 75%;
      }

      .lg\:w-8\/12 {
        width: 66.666667%;
      }

      .lg\:w-max {
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
      }

      .lg\:w-auto {
        width: auto;
      }

      .lg\:w-5\/12 {
        width: 41.666667%;
      }

      .lg\:w-10\/12 {
        width: 83.333333%;
      }

      .lg\:w-\[60\%\] {
        width: 60%;
      }

      .lg\:w-11\/12 {
        width: 91.666667%;
      }

      .lg\:w-2\/6 {
        width: 33.333333%;
      }

      .lg\:w-4\/6 {
        width: 66.666667%;
      }

      .lg\:w-24 {
        width: 6rem;
      }

      .lg\:w-16 {
        width: 4rem;
      }

      .lg\:w-12 {
        width: 3rem;
      }

      .lg\:w-\[32\%\] {
        width: 32%;
      }

      .lg\:w-\[36\%\] {
        width: 36%;
      }

      .lg\:w-4\/12 {
        width: 33.333333%;
      }

      .lg\:w-full {
        width: 100%;
      }

      .lg\:w-64 {
        width: 16rem;
      }

      .lg\:w-56 {
        width: 14rem;
      }

      .lg\:w-2\/3 {
        width: 66.666667%;
      }

      .lg\:max-w-max {
        max-width: -webkit-max-content;
        max-width: -moz-max-content;
        max-width: max-content;
      }

      .lg\:max-w-none {
        max-width: none;
      }

      .lg\:translate-y-0 {
        --tw-translate-y: 0px;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      }

      .lg\:translate-x-20 {
        --tw-translate-x: 5rem;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      }

      .lg\:columns-3 {
        -moz-columns: 3;
        columns: 3;
      }

      .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
      }

      .lg\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
      }

      .lg\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .lg\:grid-cols-7 {
        grid-template-columns: repeat(7, minmax(0, 1fr));
      }

      .lg\:flex-row {
        flex-direction: row;
      }

      .lg\:items-center {
        align-items: center;
      }

      .lg\:justify-between {
        justify-content: space-between;
      }

      .lg\:gap-12 {
        gap: 3rem;
      }

      .lg\:gap-16 {
        gap: 4rem;
      }

      .lg\:gap-6 {
        gap: 1.5rem;
      }

      .lg\:gap-0 {
        gap: 0px;
      }

      .lg\:gap-8 {
        gap: 2rem;
      }

      .lg\:gap-2 {
        gap: 0.5rem;
      }

      .lg\:gap-y-0 {
        row-gap: 0px;
      }

      .lg\:gap-x-2 {
        -moz-column-gap: 0.5rem;
        column-gap: 0.5rem;
      }

      .lg\:gap-x-16 {
        -moz-column-gap: 4rem;
        column-gap: 4rem;
      }

      .lg\:space-y-0> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse));
      }

      .lg\:space-x-8> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(2rem * var(--tw-space-x-reverse));
        margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
      }

      .lg\:space-x-6> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(1.5rem * var(--tw-space-x-reverse));
        margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
      }

      .lg\:divide-y-0> :not([hidden])~ :not([hidden]) {
        --tw-divide-y-reverse: 0;
        border-top-width: calc(0px * calc(1 - var(--tw-divide-y-reverse)));
        border-bottom-width: calc(0px * var(--tw-divide-y-reverse));
      }

      .lg\:overflow-hidden {
        overflow: hidden;
      }

      .lg\:border-l {
        border-left-width: 1px;
      }

      .lg\:border-t-0 {
        border-top-width: 0px;
      }

      .lg\:border-transparent {
        border-color: transparent;
      }

      .lg\:bg-gray-50 {
        --tw-bg-opacity: 1;
        background-color: rgb(249 249 250 / var(--tw-bg-opacity));
      }

      .lg\:bg-transparent {
        background-color: transparent;
      }

      .lg\:bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
      }

      .lg\:bg-opacity-0 {
        --tw-bg-opacity: 0;
      }

      .lg\:p-16 {
        padding: 4rem;
      }

      .lg\:p-0 {
        padding: 0px;
      }

      .lg\:p-4 {
        padding: 1rem;
      }

      .lg\:px-20 {
        padding-left: 5rem;
        padding-right: 5rem;
      }

      .lg\:py-2\.5 {
        padding-top: 0.625rem;
        padding-bottom: 0.625rem;
      }

      .lg\:py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }

      .lg\:px-28 {
        padding-left: 7rem;
        padding-right: 7rem;
      }

      .lg\:px-7 {
        padding-left: 1.75rem;
        padding-right: 1.75rem;
      }

      .lg\:py-56 {
        padding-top: 14rem;
        padding-bottom: 14rem;
      }

      .lg\:py-0 {
        padding-top: 0px;
        padding-bottom: 0px;
      }

      .lg\:py-24 {
        padding-top: 6rem;
        padding-bottom: 6rem;
      }

      .lg\:px-10 {
        padding-left: 2.5rem;
        padding-right: 2.5rem;
      }

      .lg\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
      }

      .lg\:px-40 {
        padding-left: 10rem;
        padding-right: 10rem;
      }

      .lg\:px-56 {
        padding-left: 14rem;
        padding-right: 14rem;
      }

      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
      }

      .lg\:pt-0 {
        padding-top: 0px;
      }

      .lg\:pr-4 {
        padding-right: 1rem;
      }

      .lg\:pl-2 {
        padding-left: 0.5rem;
      }

      .lg\:pt-\[4\.8rem\] {
        padding-top: 4.8rem;
      }

      .lg\:pt-32 {
        padding-top: 8rem;
      }

      .lg\:pb-20 {
        padding-bottom: 5rem;
      }

      .lg\:pb-0 {
        padding-bottom: 0px;
      }

      .lg\:pr-6 {
        padding-right: 1.5rem;
      }

      .lg\:pr-3 {
        padding-right: 0.75rem;
      }

      .lg\:pl-20 {
        padding-left: 5rem;
      }

      .lg\:text-left {
        text-align: left;
      }

      .lg\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
      }

      .lg\:text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
      }

      .lg\:leading-tight {
        line-height: 1.25;
      }

      .lg\:text-gray-100 {
        --tw-text-opacity: 1;
        color: rgb(241 241 242 / var(--tw-text-opacity));
      }

      .lg\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
      }

      .lg\:text-purple-600 {
        --tw-text-opacity: 1;
        color: rgb(147 51 234 / var(--tw-text-opacity));
      }

      .lg\:shadow-none {
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .lg\:shadow-transparent {
        --tw-shadow-color: transparent;
        --tw-shadow: var(--tw-shadow-colored);
      }

      .lg\:backdrop-blur-none {
        --tw-backdrop-blur: blur(0);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
      }

      .lg\:first-letter\:top-0::first-letter {
        top: 0px;
      }

      .lg\:hover\:bg-white:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
      }

      .lg\:hover\:shadow-gray-600\/10:hover {
        --tw-shadow-color: rgb(94 98 106 / 0.1);
        --tw-shadow: var(--tw-shadow-colored);
      }

      .lg\:focus\:bg-purple-100:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(243 232 255 / var(--tw-bg-opacity));
      }

      .lg\:active\:bg-purple-200:active {
        --tw-bg-opacity: 1;
        background-color: rgb(233 213 255 / var(--tw-bg-opacity));
      }

      .group:hover .lg\:group-hover\:scale-110 {
        --tw-scale-x: 1.1;
        --tw-scale-y: 1.1;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      }

      .peer:checked~.lg\:peer-checked\:translate-y-0 {
        --tw-translate-y: 0px;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      }

      .dark .dark\:lg\:w-6\/12 {
        width: 50%;
      }

      .dark .dark\:lg\:border-gray-700 {
        --tw-border-opacity: 1;
        border-color: rgb(41 46 57 / var(--tw-border-opacity));
      }

      .dark .dark\:lg\:bg-darker {
        --tw-bg-opacity: 1;
        background-color: rgb(9 14 26 / var(--tw-bg-opacity));
      }

      .dark .dark\:lg\:bg-transparent {
        background-color: transparent;
      }
    }

    @media (min-width: 1280px) {
      .xl\:container {
        width: 100%;
      }

      @media (min-width: 640px) {
        .xl\:container {
          max-width: 640px;
        }
      }

      @media (min-width: 768px) {
        .xl\:container {
          max-width: 768px;
        }
      }

      @media (min-width: 1024px) {
        .xl\:container {
          max-width: 1024px;
        }
      }

      @media (min-width: 1280px) {
        .xl\:container {
          max-width: 1280px;
        }
      }

      @media (min-width: 1536px) {
        .xl\:container {
          max-width: 1536px;
        }
      }

      .xl\:-right-48 {
        right: -12rem;
      }

      .xl\:-mr-0 {
        margin-right: -0px;
      }

      .xl\:w-2\/4 {
        width: 50%;
      }

      .xl\:w-\[20\%\] {
        width: 20%;
      }

      .xl\:w-\[80\%\] {
        width: 80%;
      }

      .xl\:w-6\/12 {
        width: 50%;
      }

      .xl\:w-2\/5 {
        width: 40%;
      }

      .xl\:w-7\/12 {
        width: 58.333333%;
      }

      .xl\:w-10\/12 {
        width: 83.333333%;
      }

      .xl\:w-8\/12 {
        width: 66.666667%;
      }

      .xl\:max-w-5xl {
        max-width: 64rem;
      }

      .xl\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
      }

      .xl\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
      }

      .xl\:px-16 {
        padding-left: 4rem;
        padding-right: 4rem;
      }

      .xl\:py-32 {
        padding-top: 8rem;
        padding-bottom: 8rem;
      }

      .xl\:px-0 {
        padding-left: 0px;
        padding-right: 0px;
      }

      .xl\:px-40 {
        padding-left: 10rem;
        padding-right: 10rem;
      }

      .xl\:px-32 {
        padding-left: 8rem;
        padding-right: 8rem;
      }

      .xl\:text-6xl {
        font-size: 3.75rem;
        line-height: 1;
      }

      .xl\:text-8xl {
        font-size: 6rem;
        line-height: 1;
      }

      .xl\:text-5xl {
        font-size: 3rem;
        line-height: 1;
      }

      .xl\:text-7xl {
        font-size: 4.5rem;
        line-height: 1;
      }
    }

    @media (min-width: 1536px) {
      .\32xl\:container {
        width: 100%;
      }

      @media (min-width: 640px) {
        .\32xl\:container {
          max-width: 640px;
        }
      }

      @media (min-width: 768px) {
        .\32xl\:container {
          max-width: 768px;
        }
      }

      @media (min-width: 1024px) {
        .\32xl\:container {
          max-width: 1024px;
        }
      }

      @media (min-width: 1280px) {
        .\32xl\:container {
          max-width: 1280px;
        }
      }

      @media (min-width: 1536px) {
        .\32xl\:container {
          max-width: 1536px;
        }
      }

      .\32xl\:w-\[15\%\] {
        width: 15%;
      }

      .\32xl\:w-\[85\%\] {
        width: 85%;
      }
    }
  </style>


</head>

<body class="bg-gray-100 dark:bg-gray-900">
  <aside
    class="fixed top-0 z-10 ml-[-100%] flex h-screen w-full flex-col justify-between border-r bg-white px-6 pb-3 transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%] dark:bg-gray-800 dark:border-gray-700">
    <div>
      <div class="-mx-6 px-6 py-4">
        <a href="#" title="home">
          <img src="images/logo.svg" class="w-32" alt="tailus logo" />
        </a>
      </div>

      <div class="mt-8 text-center">
        <img src="images/second_user.webp" alt="" class="m-auto h-10 w-10 rounded-full object-cover lg:h-28 lg:w-28" />
        <h5 class="mt-4 hidden text-xl font-semibold text-gray-600 lg:block dark:text-gray-300">Cynthia J. Watts</h5>
        <span class="hidden text-gray-400 lg:block">Admin</span>
      </div>

      <ul class="mt-8 space-y-2 tracking-wide">
        <li>
          <a href="admin/dashboard" aria-label="dashboard"
            class="relative flex items-center space-x-4 rounded-xl bg-gradient-to-r from-sky-600 to-cyan-400 px-4 py-3 text-white">
            <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
              <path
                d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                class="dark:fill-slate-600 fill-current text-cyan-400"></path>
              <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
              <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                class="fill-current group-hover:text-sky-300"></path>
            </svg>
            <span class="-mr-1 font-medium">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../../admin/artists" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd"
                d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
              <path class="fill-current text-gray-600 group-hover:text-cyan-600 dark:group-hover:text-sky-400"
                d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
            </svg>
            <span class="group-hover:text-gray-700 dark:group-hover:text-gray-50">Artists</span>
          </a>
        </li>
        <li>
          <a href="../../admin/partners" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="fill-current text-gray-600 group-hover:text-cyan-600 dark:group-hover:text-sky-400"
                fill-rule="evenodd"
                d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                clip-rule="evenodd" />
              <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
            </svg>
            <span class="group-hover:text-gray-700 dark:group-hover:text-gray-50">Partners</span>
          </a>
        </li>
        <li>
          <a href="../../admin/projects" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="fill-current text-gray-600 group-hover:text-cyan-600 dark:group-hover:text-cyan-400"
                d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
              <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
            </svg>
            <span class="group-hover:text-gray-700 dark:group-hover:text-gray-50">Projects</span>
          </a>
        </li>
        {{-- <li>
          <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path class="fill-current text-gray-300 group-hover:text-cyan-300"
                d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
              <path class="fill-current text-gray-600 group-hover:text-cyan-600 dark:group-hover:text-sky-400"
                fill-rule="evenodd"
                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                clip-rule="evenodd" />
            </svg>
            <span class="group-hover:text-gray-700 dark:group-hover:text-white"></span>
          </a>
        </li> --}}
      </ul>
    </div>

    <div class="-mx-6 flex items-center justify-between border-t px-6 pt-4 dark:border-gray-700">
      <button class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600 dark:text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
        <span class="group-hover:text-gray-700 dark:group-hover:text-white">Logout</span>
      </button>
    </div>
  </aside>
  <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <div class="sticky top-0 h-16 border-b bg-white dark:bg-gray-800 dark:border-gray-700 lg:py-2.5">
      <div class="flex items-center justify-between space-x-4 px-6 2xl:container">
        <h5 hidden class="text-2xl font-medium text-gray-600 lg:block dark:text-white">Dashboard</h5>
        <button class="-mr-2 h-16 w-12 border-r lg:hidden dark:border-gray-700 dark:text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="my-auto h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <div class="flex space-x-4">
          <!--search bar -->
          <div hidden class="md:block">
            <div class="relative flex items-center text-gray-400 focus-within:text-cyan-400">
              <span class="absolute left-4 flex h-6 items-center border-r border-gray-300 pr-3 dark:border-gray-700">
                <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 fill-current" viewBox="0 0 35.997 36.004">
                  <path id="Icon_awesome-search" data-name="search"
                    d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z">
                  </path>
                </svg>
              </span>
              <input type="search" name="leadingIcon" id="leadingIcon" placeholder="Search here"
                class="outline-none w-full rounded-xl border border-gray-300 py-2.5 pl-14 pr-4 text-sm text-gray-600 transition focus:border-cyan-300 dark:bg-gray-900 dark:border-gray-700" />
            </div>
          </div>
          <!--/search bar -->
          <button aria-label="search"
            class="h-10 w-10 rounded-xl border bg-gray-100 active:bg-gray-200 md:hidden dark:bg-gray-700 dark:border-gray-600 dark:active:bg-gray-800">
            <svg xmlns="http://ww50w3.org/2000/svg" class="mx-auto w-4 fill-current text-gray-600 dark:text-gray-300"
              viewBox="0 0 35.997 36.004">
              <path id="Icon_awesome-search" data-name="search"
                d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z">
              </path>
            </svg>
          </button>

          <button aria-label="notification"
            class="h-10 w-10 rounded-xl border bg-gray-100 active:bg-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:active:bg-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="m-auto h-5 w-5 text-gray-600 dark:text-gray-300"
              viewBox="0 0 20 20" fill="currentColor">
              <path
                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div class="px-6 pt-6 2xl:container">
    @yield('content')
    </div>

  </div>
</body>

</html>


