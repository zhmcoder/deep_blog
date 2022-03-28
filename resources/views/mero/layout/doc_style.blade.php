<link rel="stylesheet" href="/vendor/binarytorch/larecipe/assets/css/app.css">


<!-- Dynamic Colors -->
<style>
    :root {
        --primary: #787AF6;
        --secondary: #2b9cf2;
    }

    :not(pre) > code[class*=language-], pre[class*=language-] {
        border-top: 3px solid #787AF6;
    }

    .bg-gradient-primary {
        background: linear-gradient(87deg, #787AF6 0, #2b9cf2 100%) !important;
    }

    [v-cloak] > * {
        display: none;
    }

    [v-cloak]::before {
        content: " ";
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #F2F6FA;
    }
</style>
<!-- CSRF Token -->
<meta name="csrf-token" content="sIEnUuHVLu0oxAXhN184Jj9VMkMPVrZLx2a5mofH">


<style type="text/css">@font-face {
        font-family: NucleoIcons;
        src: url(/fonts/nucleo-icons.eot?c1733565b32b585676302d4233c39da8);
        src: url(/fonts/nucleo-icons.eot?c1733565b32b585676302d4233c39da8) format("embedded-opentype"), url(/fonts/nucleo-icons.woff2?426439788ec5ba772cdf94057f6f4659) format("woff2"), url(/fonts/nucleo-icons.woff?2569aaea6eaaf8cd210db7f2fa016743) format("woff"), url(/fonts/nucleo-icons.ttf?f82ec6ba2dc4181db2af35c499462840) format("truetype"), url(/fonts/nucleo-icons.svg?0b8a30b10cbe7708d5f3a4b007c1d665) format("svg");
        font-weight: 400;
        font-style: normal
    }

    .ni {
        display: inline-block;
        font: normal normal normal 14px/1 NucleoIcons;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .ni-lg {
        font-size: 1.33333333em;
        line-height: .75em;
        vertical-align: -15%
    }

    .ni-2x {
        font-size: 2em
    }

    .ni-3x {
        font-size: 3em
    }

    .ni-4x {
        font-size: 4em
    }

    .ni-5x {
        font-size: 5em
    }

    .ni.circle, .ni.square {
        padding: .33333333em;
        vertical-align: -16%;
        background-color: #eee
    }

    .ni.circle {
        border-radius: 50%
    }

    .ni-ul {
        padding-left: 0;
        margin-left: 2.14285714em;
        list-style-type: none
    }

    .ni-ul > li {
        position: relative
    }

    .ni-ul > li > .ni {
        position: absolute;
        left: -1.57142857em;
        top: .14285714em;
        text-align: center
    }

    .ni-ul > li > .ni.lg {
        top: 0;
        left: -1.35714286em
    }

    .ni-ul > li > .ni.circle, .ni-ul > li > .ni.square {
        top: -.19047619em;
        left: -1.9047619em
    }

    .ni.spin {
        -webkit-animation: nc-spin 2s infinite linear;
        -moz-animation: nc-spin 2s infinite linear;
        animation: nc-spin 2s infinite linear
    }

    @-webkit-keyframes nc-spin {
        0% {
            -webkit-transform: rotate(0deg)
        }
        to {
            -webkit-transform: rotate(1turn)
        }
    }

    @-moz-keyframes nc-spin {
        0% {
            -moz-transform: rotate(0deg)
        }
        to {
            -moz-transform: rotate(1turn)
        }
    }

    @keyframes nc-spin {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        to {
            -webkit-transform: rotate(1turn);
            -moz-transform: rotate(1turn);
            -ms-transform: rotate(1turn);
            -o-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    .ni.rotate-90 {
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .ni.rotate-180 {
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .ni.rotate-270 {
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
        -webkit-transform: rotate(270deg);
        -moz-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        -o-transform: rotate(270deg);
        transform: rotate(270deg)
    }

    .ni.flip-y {
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);
        -webkit-transform: scaleX(-1);
        -moz-transform: scaleX(-1);
        -ms-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        transform: scaleX(-1)
    }

    .ni.flip-x {
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
        -webkit-transform: scaleY(-1);
        -moz-transform: scaleY(-1);
        -ms-transform: scaleY(-1);
        -o-transform: scaleY(-1);
        transform: scaleY(-1)
    }

    .ni-active-40:before {
        content: "\EA02"
    }

    .ni-air-baloon:before {
        content: "\EA03"
    }

    .ni-album-2:before {
        content: "\EA04"
    }

    .ni-align-center:before {
        content: "\EA05"
    }

    .ni-align-left-2:before {
        content: "\EA06"
    }

    .ni-ambulance:before {
        content: "\EA07"
    }

    .ni-app:before {
        content: "\EA08"
    }

    .ni-archive-2:before {
        content: "\EA09"
    }

    .ni-atom:before {
        content: "\EA0A"
    }

    .ni-badge:before {
        content: "\EA0B"
    }

    .ni-bag-17:before {
        content: "\EA0C"
    }

    .ni-basket:before {
        content: "\EA0D"
    }

    .ni-bell-55:before {
        content: "\EA0E"
    }

    .ni-bold-down:before {
        content: "\EA0F"
    }

    .ni-bold-left:before {
        content: "\EA10"
    }

    .ni-bold-right:before {
        content: "\EA11"
    }

    .ni-bold-up:before {
        content: "\EA12"
    }

    .ni-bold:before {
        content: "\EA13"
    }

    .ni-book-bookmark:before {
        content: "\EA14"
    }

    .ni-books:before {
        content: "\EA15"
    }

    .ni-box-2:before {
        content: "\EA16"
    }

    .ni-briefcase-24:before {
        content: "\EA17"
    }

    .ni-building:before {
        content: "\EA18"
    }

    .ni-bulb-61:before {
        content: "\EA19"
    }

    .ni-bullet-list-67:before {
        content: "\EA1A"
    }

    .ni-bus-front-12:before {
        content: "\EA1B"
    }

    .ni-button-pause:before {
        content: "\EA1C"
    }

    .ni-button-play:before {
        content: "\EA1D"
    }

    .ni-button-power:before {
        content: "\EA1E"
    }

    .ni-calendar-grid-58:before {
        content: "\EA1F"
    }

    .ni-camera-compact:before {
        content: "\EA20"
    }

    .ni-caps-small:before {
        content: "\EA21"
    }

    .ni-cart:before {
        content: "\EA22"
    }

    .ni-chart-bar-32:before {
        content: "\EA23"
    }

    .ni-chart-pie-35:before {
        content: "\EA24"
    }

    .ni-chat-round:before {
        content: "\EA25"
    }

    .ni-check-bold:before {
        content: "\EA26"
    }

    .ni-circle-08:before {
        content: "\EA27"
    }

    .ni-cloud-download-95:before {
        content: "\EA28"
    }

    .ni-cloud-upload-96:before {
        content: "\EA29"
    }

    .ni-compass-04:before {
        content: "\EA2A"
    }

    .ni-controller:before {
        content: "\EA2B"
    }

    .ni-credit-card:before {
        content: "\EA2C"
    }

    .ni-curved-next:before {
        content: "\EA2D"
    }

    .ni-delivery-fast:before {
        content: "\EA2E"
    }

    .ni-diamond:before {
        content: "\EA2F"
    }

    .ni-email-83:before {
        content: "\EA30"
    }

    .ni-fat-add:before {
        content: "\EA31"
    }

    .ni-fat-delete:before {
        content: "\EA32"
    }

    .ni-fat-remove:before {
        content: "\EA33"
    }

    .ni-favourite-28:before {
        content: "\EA34"
    }

    .ni-folder-17:before {
        content: "\EA35"
    }

    .ni-glasses-2:before {
        content: "\EA36"
    }

    .ni-hat-3:before {
        content: "\EA37"
    }

    .ni-headphones:before {
        content: "\EA38"
    }

    .ni-html5:before {
        content: "\EA39"
    }

    .ni-istanbul:before {
        content: "\EA3A"
    }

    .ni-key-25:before {
        content: "\EA3B"
    }

    .ni-laptop:before {
        content: "\EA3C"
    }

    .ni-like-2:before {
        content: "\EA3D"
    }

    .ni-lock-circle-open:before {
        content: "\EA3E"
    }

    .ni-map-big:before {
        content: "\EA3F"
    }

    .ni-mobile-button:before {
        content: "\EA40"
    }

    .ni-money-coins:before {
        content: "\EA41"
    }

    .ni-note-03:before {
        content: "\EA42"
    }

    .ni-notification-70:before {
        content: "\EA43"
    }

    .ni-palette:before {
        content: "\EA44"
    }

    .ni-paper-diploma:before {
        content: "\EA45"
    }

    .ni-pin-3:before {
        content: "\EA46"
    }

    .ni-planet:before {
        content: "\EA47"
    }

    .ni-ruler-pencil:before {
        content: "\EA48"
    }

    .ni-satisfied:before {
        content: "\EA49"
    }

    .ni-scissors:before {
        content: "\EA4A"
    }

    .ni-send:before {
        content: "\EA4B"
    }

    .ni-settings-gear-65:before {
        content: "\EA4C"
    }

    .ni-settings:before {
        content: "\EA4D"
    }

    .ni-single-02:before {
        content: "\EA4E"
    }

    .ni-single-copy-04:before {
        content: "\EA4F"
    }

    .ni-sound-wave:before {
        content: "\EA50"
    }

    .ni-spaceship:before {
        content: "\EA51"
    }

    .ni-square-pin:before {
        content: "\EA52"
    }

    .ni-support-16:before {
        content: "\EA53"
    }

    .ni-tablet-button:before {
        content: "\EA54"
    }

    .ni-tag:before {
        content: "\EA55"
    }

    .ni-tie-bow:before {
        content: "\EA56"
    }

    .ni-time-alarm:before {
        content: "\EA57"
    }

    .ni-trophy:before {
        content: "\EA58"
    }

    .ni-tv-2:before {
        content: "\EA59"
    }

    .ni-umbrella-13:before {
        content: "\EA5A"
    }

    .ni-user-run:before {
        content: "\EA5B"
    }

    .ni-vector:before {
        content: "\EA5C"
    }

    .ni-watch-time:before {
        content: "\EA5D"
    }

    .ni-world:before {
        content: "\EA5E"
    }

    .ni-zoom-split-in:before {
        content: "\EA5F"
    }

    .ni-collection:before {
        content: "\EA60"
    }

    .ni-image:before {
        content: "\EA61"
    }

    .ni-shop:before {
        content: "\EA62"
    }

    .ni-ungroup:before {
        content: "\EA63"
    }

    .ni-world-2:before {
        content: "\EA64"
    }

    .ni-ui-04:before {
        content: "\EA65"
    }</style>
<style type="text/css">.medium-zoom-overlay {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 0;
        transition: opacity .3s;
        will-change: opacity
    }

    .medium-zoom--opened .medium-zoom-overlay {
        cursor: pointer;
        cursor: zoom-out;
        opacity: 1
    }

    .medium-zoom-image {
        cursor: pointer;
        cursor: zoom-in;
        transition: transform .3s cubic-bezier(.2, 0, .2, 1)
    }

    .medium-zoom-image--hidden {
        visibility: hidden
    }

    .medium-zoom-image--opened {
        position: relative;
        cursor: pointer;
        cursor: zoom-out;
        will-change: transform
    }</style>
<style type="text/css">.searchbox {
        display: inline-block;
        position: relative;
        width: 200px;
        height: 32px !important;
        white-space: nowrap;
        box-sizing: border-box;
        visibility: visible !important
    }

    .searchbox .algolia-autocomplete {
        display: block;
        width: 100%;
        height: 100%
    }

    .searchbox__wrapper {
        width: 100%;
        height: 100%;
        z-index: 999;
        position: relative
    }

    .searchbox__input {
        display: inline-block;
        box-sizing: border-box;
        transition: box-shadow .4s ease, background .4s ease;
        border: 0;
        border-radius: 16px;
        box-shadow: inset 0 0 0 1px #ccc;
        background: #fff !important;
        padding: 0 26px 0 32px;
        width: 100%;
        height: 100%;
        vertical-align: middle;
        white-space: normal;
        font-size: 12px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    .searchbox__input::-webkit-search-cancel-button, .searchbox__input::-webkit-search-decoration, .searchbox__input::-webkit-search-results-button, .searchbox__input::-webkit-search-results-decoration {
        display: none
    }

    .searchbox__input:hover {
        box-shadow: inset 0 0 0 1px #b3b3b3
    }

    .searchbox__input:active, .searchbox__input:focus {
        outline: 0;
        box-shadow: inset 0 0 0 1px #aaa;
        background: #fff
    }

    .searchbox__input::-webkit-input-placeholder {
        color: #aaa
    }

    .searchbox__input:-ms-input-placeholder, .searchbox__input::-ms-input-placeholder {
        color: #aaa
    }

    .searchbox__input::placeholder {
        color: #aaa
    }

    .searchbox__submit {
        position: absolute;
        top: 0;
        margin: 0;
        border: 0;
        border-radius: 16px 0 0 16px;
        background-color: rgba(69, 142, 225, 0);
        padding: 0;
        width: 32px;
        height: 100%;
        vertical-align: middle;
        text-align: center;
        font-size: inherit;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        right: inherit;
        left: 0
    }

    .searchbox__submit:before {
        display: inline-block;
        margin-right: -4px;
        height: 100%;
        vertical-align: middle;
        content: ""
    }

    .searchbox__submit:active, .searchbox__submit:hover {
        cursor: pointer
    }

    .searchbox__submit:focus {
        outline: 0
    }

    .searchbox__submit svg {
        width: 14px;
        height: 14px;
        vertical-align: middle;
        fill: #6d7e96
    }

    .searchbox__reset {
        display: block;
        position: absolute;
        top: 8px;
        right: 8px;
        margin: 0;
        border: 0;
        background: none;
        cursor: pointer;
        padding: 0;
        font-size: inherit;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        fill: rgba(0, 0, 0, .5)
    }

    .searchbox__reset.hide {
        display: none
    }

    .searchbox__reset:focus {
        outline: 0
    }

    .searchbox__reset svg {
        display: block;
        margin: 4px;
        width: 8px;
        height: 8px
    }

    .searchbox__input:valid ~ .searchbox__reset {
        display: block;
        -webkit-animation-name: sbx-reset-in;
        animation-name: sbx-reset-in;
        -webkit-animation-duration: .15s;
        animation-duration: .15s
    }

    @-webkit-keyframes sbx-reset-in {
        0% {
            -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
            opacity: 0
        }
        to {
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    @keyframes sbx-reset-in {
        0% {
            -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
            opacity: 0
        }
        to {
            -webkit-transform: none;
            transform: none;
            opacity: 1
        }
    }

    .algolia-autocomplete.algolia-autocomplete-right .ds-dropdown-menu {
        right: 0 !important;
        left: inherit !important
    }

    .algolia-autocomplete.algolia-autocomplete-right .ds-dropdown-menu:before {
        right: 48px
    }

    .algolia-autocomplete.algolia-autocomplete-left .ds-dropdown-menu {
        left: 0 !important;
        right: inherit !important
    }

    .algolia-autocomplete.algolia-autocomplete-left .ds-dropdown-menu:before {
        left: 48px
    }

    .algolia-autocomplete .ds-dropdown-menu {
        top: -6px;
        border-radius: 4px;
        margin: 6px 0 0;
        padding: 0;
        text-align: left;
        height: auto;
        position: relative;
        background: transparent;
        border: none;
        z-index: 999;
        max-width: 600px;
        min-width: 500px;
        box-shadow: 0 1px 0 0 rgba(0, 0, 0, .2), 0 2px 3px 0 rgba(0, 0, 0, .1)
    }

    .algolia-autocomplete .ds-dropdown-menu:before {
        display: block;
        position: absolute;
        content: "";
        width: 14px;
        height: 14px;
        background: #fff;
        z-index: 1000;
        top: -7px;
        border-top: 1px solid #d9d9d9;
        border-right: 1px solid #d9d9d9;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        border-radius: 2px
    }

    .algolia-autocomplete .ds-dropdown-menu .ds-suggestions {
        position: relative;
        z-index: 1000;
        margin-top: 8px
    }

    .algolia-autocomplete .ds-dropdown-menu .ds-suggestions a:hover {
        text-decoration: none
    }

    .algolia-autocomplete .ds-dropdown-menu .ds-suggestion {
        cursor: pointer
    }

    .algolia-autocomplete .ds-dropdown-menu .ds-suggestion.ds-cursor .algolia-docsearch-suggestion.suggestion-layout-simple, .algolia-autocomplete .ds-dropdown-menu .ds-suggestion.ds-cursor .algolia-docsearch-suggestion:not(.suggestion-layout-simple) .algolia-docsearch-suggestion--content {
        background-color: rgba(69, 142, 225, .05)
    }

    .algolia-autocomplete .ds-dropdown-menu [class^=ds-dataset-] {
        position: relative;
        border: 1px solid #d9d9d9;
        background: #fff;
        border-radius: 4px;
        overflow: auto;
        padding: 0 8px 8px
    }

    .algolia-autocomplete .ds-dropdown-menu * {
        box-sizing: border-box
    }

    .algolia-autocomplete .algolia-docsearch-suggestion {
        display: block;
        position: relative;
        padding: 0 8px;
        background: #fff;
        color: #02060c;
        overflow: hidden
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--highlight {
        color: #174d8c;
        background: rgba(143, 187, 237, .1);
        padding: .1em .05em
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--category-header .algolia-docsearch-suggestion--category-header-lvl0 .algolia-docsearch-suggestion--highlight, .algolia-autocomplete .algolia-docsearch-suggestion--category-header .algolia-docsearch-suggestion--category-header-lvl1 .algolia-docsearch-suggestion--highlight, .algolia-autocomplete .algolia-docsearch-suggestion--text .algolia-docsearch-suggestion--highlight {
        padding: 0 0 1px;
        background: inherit;
        box-shadow: inset 0 -2px 0 0 rgba(69, 142, 225, .8);
        color: inherit
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--content {
        display: block;
        float: right;
        width: 70%;
        position: relative;
        padding: 5.33333px 0 5.33333px 10.66667px;
        cursor: pointer
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--content:before {
        content: "";
        position: absolute;
        display: block;
        top: 0;
        height: 100%;
        width: 1px;
        background: #ddd;
        left: -1px
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--category-header {
        position: relative;
        border-bottom: 1px solid #ddd;
        display: none;
        margin-top: 8px;
        padding: 4px 0;
        font-size: 1em;
        color: #33363d
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--wrapper {
        width: 100%;
        float: left;
        padding: 8px 0 0
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--subcategory-column {
        float: left;
        width: 30%;
        text-align: right;
        position: relative;
        padding: 5.33333px 10.66667px;
        color: #a4a7ae;
        font-size: .9em;
        word-wrap: break-word
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--subcategory-column:before {
        content: "";
        position: absolute;
        display: block;
        top: 0;
        height: 100%;
        width: 1px;
        background: #ddd;
        right: 0
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--subcategory-inline {
        display: none
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--title {
        margin-bottom: 4px;
        color: #02060c;
        font-size: .9em;
        font-weight: 700
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--text {
        display: block;
        line-height: 1.2em;
        font-size: .85em;
        color: #63676d
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--no-results {
        width: 100%;
        padding: 8px 0;
        text-align: center;
        font-size: 1.2em
    }

    .algolia-autocomplete .algolia-docsearch-suggestion--no-results:before {
        display: none
    }

    .algolia-autocomplete .algolia-docsearch-suggestion code {
        padding: 1px 5px;
        font-size: 90%;
        border: none;
        color: #222;
        background-color: #ebebeb;
        border-radius: 3px;
        font-family: Menlo, Monaco, Consolas, Courier New, monospace
    }

    .algolia-autocomplete .algolia-docsearch-suggestion code .algolia-docsearch-suggestion--highlight {
        background: none
    }

    .algolia-autocomplete .algolia-docsearch-suggestion.algolia-docsearch-suggestion__main .algolia-docsearch-suggestion--category-header, .algolia-autocomplete .algolia-docsearch-suggestion.algolia-docsearch-suggestion__secondary {
        display: block
    }

    @media (min-width: 768px) {
        .algolia-autocomplete .algolia-docsearch-suggestion .algolia-docsearch-suggestion--subcategory-column {
            display: block
        }
    }

    @media (max-width: 768px) {
        .algolia-autocomplete .algolia-docsearch-suggestion .algolia-docsearch-suggestion--subcategory-column {
            display: inline-block;
            width: auto;
            float: left;
            padding: 0;
            color: #02060c;
            font-size: .9em;
            font-weight: 700;
            text-align: left;
            opacity: .5
        }

        .algolia-autocomplete .algolia-docsearch-suggestion .algolia-docsearch-suggestion--subcategory-column:before {
            display: none
        }

        .algolia-autocomplete .algolia-docsearch-suggestion .algolia-docsearch-suggestion--subcategory-column:after {
            content: "|"
        }

        .algolia-autocomplete .algolia-docsearch-suggestion .algolia-docsearch-suggestion--content {
            display: inline-block;
            width: auto;
            text-align: left;
            float: left;
            padding: 0
        }

        .algolia-autocomplete .algolia-docsearch-suggestion .algolia-docsearch-suggestion--content:before {
            display: none
        }
    }

    .algolia-autocomplete .suggestion-layout-simple.algolia-docsearch-suggestion {
        border-bottom: 1px solid #eee;
        padding: 8px;
        margin: 0
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--content {
        width: 100%;
        padding: 0
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--content:before {
        display: none
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--category-header {
        margin: 0;
        padding: 0;
        display: block;
        width: 100%;
        border: none
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--category-header-lvl0, .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--category-header-lvl1 {
        opacity: .6;
        font-size: .85em
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--category-header-lvl1:before {
        background-image: url('data:image/svg+xml;utf8,<svg width="10" height="10" viewBox="0 0 20 38" xmlns="http://www.w3.org/2000/svg"><path d="M1.49 4.31l14 16.126.002-2.624-14 16.074-1.314 1.51 3.017 2.626 1.313-1.508 14-16.075 1.142-1.313-1.14-1.313-14-16.125L3.2.18.18 2.8l1.31 1.51z" fill-rule="evenodd" fill="%231D3657" /></svg>');
        content: "";
        width: 10px;
        height: 10px;
        display: inline-block
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--wrapper {
        width: 100%;
        float: left;
        margin: 0;
        padding: 0
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--duplicate-content, .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--subcategory-inline {
        display: none !important
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--title {
        margin: 0;
        color: #458ee1;
        font-size: .9em;
        font-weight: 400
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--title:before {
        content: "#";
        font-weight: 700;
        color: #458ee1;
        display: inline-block
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--text {
        margin: 4px 0 0;
        display: block;
        line-height: 1.4em;
        padding: 5.33333px 8px;
        background: #f8f8f8;
        font-size: .85em;
        opacity: .8
    }

    .algolia-autocomplete .suggestion-layout-simple .algolia-docsearch-suggestion--text .algolia-docsearch-suggestion--highlight {
        color: #3f4145;
        font-weight: 700;
        box-shadow: none
    }

    .algolia-autocomplete .algolia-docsearch-footer {
        width: 134px;
        height: 20px;
        z-index: 2000;
        margin-top: 10.66667px;
        float: right;
        font-size: 0;
        line-height: 0
    }

    .algolia-autocomplete .algolia-docsearch-footer--logo {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='168' height='24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cpath d='M78.988.938h16.594a2.968 2.968 0 0 1 2.966 2.966V20.5a2.967 2.967 0 0 1-2.966 2.964H78.988a2.967 2.967 0 0 1-2.966-2.964V3.897A2.961 2.961 0 0 1 78.988.938zm41.937 17.866c-4.386.02-4.386-3.54-4.386-4.106l-.007-13.336 2.675-.424v13.254c0 .322 0 2.358 1.718 2.364v2.248zm-10.846-2.18c.821 0 1.43-.047 1.855-.129v-2.719a6.334 6.334 0 0 0-1.574-.199 5.7 5.7 0 0 0-.897.069 2.699 2.699 0 0 0-.814.24c-.24.116-.439.28-.582.491-.15.212-.219.335-.219.656 0 .628.219.991.616 1.23s.938.362 1.615.362zm-.233-9.7c.883 0 1.629.109 2.231.328.602.218 1.088.525 1.444.915.363.396.609.922.76 1.483.157.56.232 1.175.232 1.85v6.874a32.5 32.5 0 0 1-1.868.314c-.834.123-1.772.185-2.813.185-.69 0-1.327-.069-1.895-.198a4.001 4.001 0 0 1-1.471-.636 3.085 3.085 0 0 1-.951-1.134c-.226-.465-.343-1.12-.343-1.803 0-.656.13-1.073.384-1.525a3.24 3.24 0 0 1 1.047-1.106c.445-.287.95-.492 1.532-.615a8.8 8.8 0 0 1 1.82-.185 8.404 8.404 0 0 1 1.972.24v-.438c0-.307-.035-.6-.11-.874a1.88 1.88 0 0 0-.384-.73 1.784 1.784 0 0 0-.724-.493 3.164 3.164 0 0 0-1.143-.205c-.616 0-1.177.075-1.69.164a7.735 7.735 0 0 0-1.26.307l-.321-2.192c.335-.117.834-.233 1.478-.349a10.98 10.98 0 0 1 2.073-.178zm52.842 9.626c.822 0 1.43-.048 1.854-.13V13.7a6.347 6.347 0 0 0-1.574-.199c-.294 0-.595.021-.896.069a2.7 2.7 0 0 0-.814.24 1.46 1.46 0 0 0-.582.491c-.15.212-.218.335-.218.656 0 .628.218.991.615 1.23.404.245.938.362 1.615.362zm-.226-9.694c.883 0 1.629.108 2.231.327.602.219 1.088.526 1.444.915.355.39.609.923.759 1.483a6.8 6.8 0 0 1 .233 1.852v6.873c-.41.088-1.034.19-1.868.314-.834.123-1.772.184-2.813.184-.69 0-1.327-.068-1.895-.198a4.001 4.001 0 0 1-1.471-.635 3.085 3.085 0 0 1-.951-1.134c-.226-.465-.343-1.12-.343-1.804 0-.656.13-1.073.384-1.524.26-.45.608-.82 1.047-1.107.445-.286.95-.491 1.532-.614a8.803 8.803 0 0 1 2.751-.13c.329.034.671.096 1.04.185v-.437a3.3 3.3 0 0 0-.109-.875 1.873 1.873 0 0 0-.384-.731 1.784 1.784 0 0 0-.724-.492 3.165 3.165 0 0 0-1.143-.205c-.616 0-1.177.075-1.69.164a7.75 7.75 0 0 0-1.26.307l-.321-2.193c.335-.116.834-.232 1.478-.348a11.633 11.633 0 0 1 2.073-.177zm-8.034-1.271a1.626 1.626 0 0 1-1.628-1.62c0-.895.725-1.62 1.628-1.62.904 0 1.63.725 1.63 1.62 0 .895-.733 1.62-1.63 1.62zm1.348 13.22h-2.689V7.27l2.69-.423v11.956zm-4.714 0c-4.386.02-4.386-3.54-4.386-4.107l-.008-13.336 2.676-.424v13.254c0 .322 0 2.358 1.718 2.364v2.248zm-8.698-5.903c0-1.156-.253-2.119-.746-2.788-.493-.677-1.183-1.01-2.067-1.01-.882 0-1.574.333-2.065 1.01-.493.676-.733 1.632-.733 2.788 0 1.168.246 1.953.74 2.63.492.683 1.183 1.018 2.066 1.018.882 0 1.574-.342 2.067-1.019.492-.683.738-1.46.738-2.63zm2.737-.007c0 .902-.13 1.584-.397 2.33a5.52 5.52 0 0 1-1.128 1.906 4.986 4.986 0 0 1-1.752 1.223c-.685.286-1.739.45-2.265.45-.528-.006-1.574-.157-2.252-.45a5.096 5.096 0 0 1-1.744-1.223c-.487-.527-.863-1.162-1.137-1.906a6.345 6.345 0 0 1-.41-2.33c0-.902.123-1.77.397-2.508a5.554 5.554 0 0 1 1.15-1.892 5.133 5.133 0 0 1 1.75-1.216c.679-.287 1.425-.423 2.232-.423.808 0 1.553.142 2.237.423a4.88 4.88 0 0 1 1.753 1.216 5.644 5.644 0 0 1 1.135 1.892c.287.738.431 1.606.431 2.508zm-20.138 0c0 1.12.246 2.363.738 2.882.493.52 1.13.78 1.91.78.424 0 .828-.062 1.204-.178.377-.116.677-.253.917-.417V9.33a10.476 10.476 0 0 0-1.766-.226c-.971-.028-1.71.37-2.23 1.004-.513.636-.773 1.75-.773 2.788zm7.438 5.274c0 1.824-.466 3.156-1.404 4.004-.936.846-2.367 1.27-4.296 1.27-.705 0-2.17-.137-3.34-.396l.431-2.118c.98.205 2.272.26 2.95.26 1.074 0 1.84-.219 2.299-.656.459-.437.684-1.086.684-1.948v-.437a8.07 8.07 0 0 1-1.047.397c-.43.13-.93.198-1.492.198-.739 0-1.41-.116-2.018-.349a4.206 4.206 0 0 1-1.567-1.025c-.431-.45-.774-1.017-1.013-1.694-.24-.677-.363-1.885-.363-2.773 0-.834.13-1.88.384-2.577.26-.696.629-1.298 1.129-1.796.493-.498 1.095-.881 1.8-1.162a6.605 6.605 0 0 1 2.428-.457c.87 0 1.67.109 2.45.24.78.129 1.444.265 1.985.415V18.17z' fill='%235468FF'/%3E%3Cpath d='M6.972 6.677v1.627c-.712-.446-1.52-.67-2.425-.67-.585 0-1.045.13-1.38.391a1.24 1.24 0 0 0-.502 1.03c0 .425.164.765.494 1.02.33.256.835.532 1.516.83.447.192.795.356 1.045.495.25.138.537.332.862.582.324.25.563.548.718.894.154.345.23.741.23 1.188 0 .947-.334 1.691-1.004 2.234-.67.542-1.537.814-2.601.814-1.18 0-2.16-.229-2.936-.686v-1.708c.84.628 1.814.942 2.92.942.585 0 1.048-.136 1.388-.407.34-.271.51-.646.51-1.125 0-.287-.1-.55-.302-.79-.203-.24-.42-.42-.655-.542-.234-.123-.585-.29-1.053-.503a61.27 61.27 0 0 1-.582-.271 13.67 13.67 0 0 1-.55-.287 4.275 4.275 0 0 1-.567-.351 6.92 6.92 0 0 1-.455-.4c-.18-.17-.31-.34-.39-.51-.08-.17-.155-.37-.224-.598a2.553 2.553 0 0 1-.104-.742c0-.915.333-1.638.998-2.17.664-.532 1.523-.798 2.576-.798.968 0 1.793.17 2.473.51zm7.468 5.696v-.287c-.022-.607-.187-1.088-.495-1.444-.309-.357-.75-.535-1.324-.535-.532 0-.99.194-1.373.583-.382.388-.622.949-.717 1.683h3.909zm1.005 2.792v1.404c-.596.34-1.383.51-2.362.51-1.255 0-2.255-.377-3-1.132-.744-.755-1.116-1.744-1.116-2.968 0-1.297.34-2.316 1.021-3.055.68-.74 1.548-1.11 2.6-1.11 1.033 0 1.852.323 2.458.966.606.644.91 1.572.91 2.784 0 .33-.033.676-.096 1.038h-5.314c.107.702.405 1.239.894 1.611.49.372 1.106.558 1.85.558.862 0 1.58-.202 2.155-.606zm6.605-1.77h-1.212c-.596 0-1.045.116-1.349.35-.303.234-.454.532-.454.894 0 .372.117.664.35.877.235.213.575.32 1.022.32.51 0 .912-.142 1.204-.424.293-.281.44-.651.44-1.108v-.91zm-4.068-2.554V9.325c.627-.361 1.457-.542 2.489-.542 2.116 0 3.175 1.026 3.175 3.08V17h-1.548v-.957c-.415.68-1.143 1.02-2.186 1.02-.766 0-1.38-.22-1.843-.661-.462-.442-.694-1.003-.694-1.684 0-.776.293-1.38.878-1.81.585-.431 1.404-.647 2.457-.647h1.34V11.8c0-.554-.133-.971-.399-1.253-.266-.282-.707-.423-1.324-.423a4.07 4.07 0 0 0-2.345.718zm9.333-1.93v1.42c.394-1 1.101-1.5 2.123-1.5.148 0 .313.016.494.048v1.531a1.885 1.885 0 0 0-.75-.143c-.542 0-.989.24-1.34.718-.351.479-.527 1.048-.527 1.707V17h-1.563V8.91h1.563zm5.01 4.084c.022.82.272 1.492.75 2.019.479.526 1.15.79 2.01.79.639 0 1.235-.176 1.788-.527v1.404c-.521.319-1.186.479-1.995.479-1.265 0-2.276-.4-3.031-1.197-.755-.798-1.133-1.792-1.133-2.984 0-1.16.38-2.151 1.14-2.975.761-.825 1.79-1.237 3.088-1.237.702 0 1.346.149 1.93.447v1.436a3.242 3.242 0 0 0-1.77-.495c-.84 0-1.513.266-2.019.798-.505.532-.758 1.213-.758 2.042zM40.24 5.72v4.579c.458-1 1.293-1.5 2.505-1.5.787 0 1.42.245 1.899.734.479.49.718 1.17.718 2.042V17h-1.564v-5.106c0-.553-.14-.98-.422-1.284-.282-.303-.652-.455-1.11-.455-.531 0-1.002.202-1.411.606-.41.405-.615 1.022-.615 1.851V17h-1.563V5.72h1.563zm14.966 10.02c.596 0 1.096-.253 1.5-.758.404-.506.606-1.157.606-1.955 0-.915-.202-1.62-.606-2.114-.404-.495-.92-.742-1.548-.742-.553 0-1.05.224-1.491.67-.442.447-.662 1.133-.662 2.058 0 .958.212 1.67.638 2.138.425.469.946.703 1.563.703zM53.004 5.72v4.42c.574-.894 1.388-1.341 2.44-1.341 1.022 0 1.857.383 2.506 1.149.649.766.973 1.781.973 3.047 0 1.138-.309 2.109-.925 2.912-.617.803-1.463 1.205-2.537 1.205-1.075 0-1.894-.447-2.457-1.34V17h-1.58V5.72h1.58zm9.908 11.104l-3.223-7.913h1.739l1.005 2.632 1.26 3.415c.096-.32.48-1.458 1.15-3.415l.909-2.632h1.66l-2.92 7.866c-.777 2.074-1.963 3.11-3.559 3.11a2.92 2.92 0 0 1-.734-.079v-1.34c.17.042.351.064.543.064 1.032 0 1.755-.57 2.17-1.708z' fill='%235D6494'/%3E%3Cpath d='M89.632 5.967v-.772a.978.978 0 0 0-.978-.977h-2.28a.978.978 0 0 0-.978.977v.793c0 .088.082.15.171.13a7.127 7.127 0 0 1 1.984-.28c.65 0 1.295.088 1.917.259.082.02.164-.04.164-.13m-6.248 1.01l-.39-.389a.977.977 0 0 0-1.382 0l-.465.465a.973.973 0 0 0 0 1.38l.383.383c.062.061.15.047.205-.014.226-.307.472-.601.746-.874.281-.28.568-.526.883-.751.068-.042.075-.137.02-.2m4.16 2.453v3.341c0 .096.104.165.192.117l2.97-1.537c.068-.034.089-.117.055-.184a3.695 3.695 0 0 0-3.08-1.866c-.068 0-.136.054-.136.13m0 8.048a4.489 4.489 0 0 1-4.49-4.482 4.488 4.488 0 0 1 4.49-4.482 4.488 4.488 0 0 1 4.489 4.482 4.484 4.484 0 0 1-4.49 4.482m0-10.85a6.363 6.363 0 1 0 0 12.729 6.37 6.37 0 0 0 6.372-6.368 6.358 6.358 0 0 0-6.371-6.36' fill='%23FFF'/%3E%3C/g%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: 100%;
        overflow: hidden;
        text-indent: -9000px;
        padding: 0 !important;
        width: 100%;
        height: 100%;
        display: block
    }

    .documentation > ul:first-of-type {
        position: fixed;
        list-style: inherit;
        left: 30px;
        top: 120px;
        width: 120px;
        z-index: 1;
    }

    .documentation > ul:first-of-type li {
        line-height: 1.0;
        word-break: break-all;
        word-wrap: break-word;
        padding: 0.6rem;
    }

    .documentation > ul:first-of-type ul {
        padding-left:0px;
    }

    .documentation h2 {
        margin-left: 15px;
        margin-top:1rem;
        margin-bottom:1rem;
        font-weight:700;
        font-size: 28px;
    }
    .documentation h2 a:before {
        font-size: 1.3rem !important;
    }

    .documentation > ul li h2 {
        margin-left: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        font-size: 0.875rem;
    }

    .documentation > ul li > ul {
        margin-left: 0px;
    }

    .documentation {
        margin-top: 0px;
        padding-left: 0px;
        margin-bottom: 0px;
        width: 100%;
        z-index: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding-right: 0px;
        padding-left: 0px;
    }

    body {
        background: #f7f7f7;
    }

    .entry-content {
        padding: 30px 30px 25px !important;
    }

    .blog-post-item {
        margin-left: 5%;
    }

    .comments-area {
        margin-left: 5%;
        padding-left: 10px;
        padding-bottom: 10px;
        background: #FFFFFF;
    }

    .site-main .post-navigation {
        margin-left: 5%;
    }

    .site-footer {
        z-index: 1;
        position: relative
    }

    .site {
        z-index: 0;
    }

    .documentation > ul:first-of-type li a {
        font-size: 0.875rem;
        color: #f47e00;
    }

    .documentation > ul:first-of-type li a:hover,
    .documentation > ul:first-of-type li a:focus {
        color: #3f3f3f
    }

</style>