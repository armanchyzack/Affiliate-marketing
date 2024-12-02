

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="https://www.yourwebsite.com/your-page-url/" />
    <meta name="robots" content="index, follow" />
{{-- open grap --}}
<meta property="og:title" content="Best Laravel Development Services" />
<meta property="og:description" content="{{ $meta->desc }}" />
<meta property="og:image" content="https://www.yourwebsite.com/image.jpg" />
<meta property="og:url" content="https://www.yourwebsite.com/your-page-url/" />
<meta property="og:type" content="{{ env('APP_URL') }}" />
<link rel="alternate" hreflang="en" href="https://www.yourwebsite.com/en/your-page-url/" />
<link rel="alternate" hreflang="fr" href="https://www.yourwebsite.com/fr/your-page-url/" />
{{-- viewport --}}
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="keywords" content="{{ $meta->keyword }}" />
<title>{{ $meta->title }}</title>

    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            svgExt: ".svg",
            source: {
                concatemoji: "https:\/\/themepush.com\/demo-mediumish\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.5",
            },
        };
        /*! This file is auto-generated */
        !(function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: new Date().valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t));
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                var t = new Uint32Array(
                        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                    ),
                    r =
                    (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                        e.fillText(n, 0, 0),
                        new Uint32Array(
                            e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                        ));
                return t.every(function(e, t) {
                    return e === r[t];
                });
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(
                                e,
                                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                            ) ?
                            !1 :
                            !n(
                                e,
                                "\ud83c\uddfa\ud83c\uddf3",
                                "\ud83c\uddfa\u200b\ud83c\uddf3"
                            ) &&
                            !n(
                                e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(
                            e,
                            "\ud83d\udc26\u200d\u2b1b",
                            "\ud83d\udc26\u200b\u2b1b"
                        );
                }
                return !1;
            }

            function f(e, t, n) {
                var r =
                    "undefined" != typeof WorkerGlobalScope &&
                    self instanceof WorkerGlobalScope ?
                    new OffscreenCanvas(300, 150) :
                    i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
                return (
                    e.forEach(function(e) {
                        o[e] = t(a, e, n);
                    }),
                    o
                );
            }

            function t(e) {
                var t = i.createElement("script");
                (t.src = e), (t.defer = !0), i.head.appendChild(t);
            }
            "undefined" != typeof Promise &&
                ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = {
                        everything: !0,
                        everythingExceptFlag: !0
                    }),
                    (e = new Promise(function(e) {
                        i.addEventListener("DOMContentLoaded", e, {
                            once: !0
                        });
                    })),
                    new Promise(function(t) {
                        var n = (function() {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if (
                                    "object" == typeof e &&
                                    "number" == typeof e.timestamp &&
                                    new Date().valueOf() < e.timestamp + 604800 &&
                                    "object" == typeof e.supportTests
                                )
                                    return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if (
                                "undefined" != typeof Worker &&
                                "undefined" != typeof OffscreenCanvas &&
                                "undefined" != typeof URL &&
                                URL.createObjectURL &&
                                "undefined" != typeof Blob
                            )
                                try {
                                    var e =
                                        "postMessage(" +
                                        f.toString() +
                                        "(" + [JSON.stringify(s), u.toString(), p.toString()].join(
                                            ","
                                        ) +
                                        "));",
                                        r = new Blob([e], {
                                            type: "text/javascript"
                                        }),
                                        a = new Worker(URL.createObjectURL(r), {
                                            name: "wpTestEmojiSupports",
                                        });
                                    return void(a.onmessage = function(e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                    .then(function(e) {
                        for (var t in e)
                            (n.supports[t] = e[t]),
                            (n.supports.everything =
                                n.supports.everything && n.supports[t]),
                            "flag" !== t &&
                            (n.supports.everythingExceptFlag =
                                n.supports.everythingExceptFlag && n.supports[t]);
                        (n.supports.everythingExceptFlag =
                            n.supports.everythingExceptFlag && !n.supports.flag),
                        (n.DOMReady = !1),
                        (n.readyCallback = function() {
                            n.DOMReady = !0;
                        });
                    })
                    .then(function() {
                        return e;
                    })
                    .then(function() {
                        var e;
                        n.supports.everything ||
                            (n.readyCallback(),
                                (e = n.source || {}).concatemoji ?
                                t(e.concatemoji) :
                                e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                    }));
        })((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('Front-end/css/style.min.css') }}" type="text/css" media="all" />
    <style id="wp-block-library-theme-inline-css" type="text/css">
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: #ffffffa6;
        }

        .wp-block-audio {
            margin: 0 0 1em;
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: 0.8em 1em;
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: #ffffffa6;
        }

        .wp-block-embed {
            margin: 0 0 1em;
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .blocks-gallery-caption {
            color: #ffffffa6;
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-image figcaption {
            color: #ffffffa6;
        }

        .wp-block-image {
            margin: 0 0 1em;
        }

        .wp-block-pullquote {
            border-bottom: 4px solid;
            border-top: 4px solid;
            color: currentColor;
            margin-bottom: 1.75em;
        }

        .wp-block-pullquote cite,
        .wp-block-pullquote footer,
        .wp-block-pullquote__citation {
            color: currentColor;
            font-size: 0.8125em;
            font-style: normal;
            text-transform: uppercase;
        }

        .wp-block-quote {
            border-left: 0.25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em;
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: 0.8125em;
            font-style: normal;
            position: relative;
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: 0.25em solid;
            padding-left: 0;
            padding-right: 1em;
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0;
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none;
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700;
        }

        .wp-block-search__button {
            border: 1px solid #ccc;
            padding: 0.375em 0.625em;
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em;
        }

        .wp-block-separator.has-css-opacity {
            opacity: 0.4;
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1;
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px;
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px;
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px;
        }

        .wp-block-table {
            margin: 0 0 1em;
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal;
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-table figcaption {
            color: #ffffffa6;
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-video figcaption {
            color: #ffffffa6;
        }

        .wp-block-video {
            margin: 0 0 1em;
        }

        .wp-block-template-part.has-background {
            margin-bottom: 0;
            margin-top: 0;
            padding: 1.25em 2.375em;
        }
    </style>
    <link rel="stylesheet" id="edd-blocks-css" href="{{ asset('Front-end/css/edd-blocks.css') }}" type="text/css" media="all" />
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em;
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('Front-end/css/wp-content-styles.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="bootstrap4-css" href="{{ asset('Front-end/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="font-awesome-6-css" href="{{ asset('Front-end/css/all.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="mediumish-style-css" href="{{ asset('Front-end/css/mediumes-style.css') }}" type="text/css" media="all" />

    <script type="text/javascript" src="{{ asset('Front-end/js/jquery.min.js') }}" id="jquery-core-js"></script>
     <script type="text/javascript" src="{{ asset('Front-end/js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
    {{--" id="wp-polyfill-inert-js"></script>
    <script type="text/javascript" src="{{ asset('Front-end/js/regenerator-runtime.min.js') }}" id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('Front-end/js/wp-polyfill-inert.min.js') }}" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="{{ asset('Front-end/js/hooks.min.js') }}" id="wp-hooks-js"></script>
    <script type="text/javascript" src="{{ asset('Front-end/js/i18n.min.js') }}" id="wp-i18n-js"></script> --}}
    {{-- <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            "text direction\u0004ltr": ["ltr"]
        });
        /* ]]> */
    </script> --}}
    {{-- <link rel="https://api.w.org/" href="{{ asset('Front-end/js/download.json') }}" /> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style type="text/css">
        .salepop {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .salepopname {
            color: #222222;
        }

        .salepopdesc {
            color: #738c98;
        }

        .salepop a,
        .salepop a:visited,
        .salepop a:hover {
            color: rgb(120, 37, 243);
        }

        .salepop a:hover {
            color: rgb(120, 37, 243);
            opacity: 0.85;
        }

        .salepop .timeago {
            color: #b0bcc1;
        }

        .salepop svg.bolt .st0 {
            fill: #ffd83e !important;
        }

        .salepopname,
        .salepopdesc,
        salepop {
            font-size: 12px !important;
        }

        .salepop {
            font-family: ;
            min-width: 300px;
        }

        .salepop .timeago {
            font-size: 11px !important;
        }
    </style>
    <style id="kirki-inline-styles">
        .btn-simple {
            background-color: #1c9963;
            border-color: #1c9963;
        }

        .page-link,
        .article-post a:not(.wp-block-button__link),
        .post .btn.follow,
        .post .post-top-meta .author-description a,
        article.page a:not(.wp-block-button__link),
        .alertbar a {
            color: #26a16e;
        }

        .post .btn.follow,
        .alertbar input[type="submit"] {
            border-color: #26a16e;
        }

        blockquote {
            border-color: #1c9963;
        }

        .current .page-link,
        .entry-content input[type="submit"],
        .alertbar input[type="submit"] {
            background-color: #1c9963;
            border-color: #1c9963;
        }

        p.sharecolour {
            color: #999999;
        }

        .shareitnow ul li a svg,
        .shareitnow a {
            fill: #b3b3b3;
        }

        .shareitnow li a {
            color: #b3b3b3;
            border-color: #d2d2d2;
        }

        #comments a,
        .card-title a:hover {
            color: #1c9963;
        }

        .comment-form input.submit {
            background-color: #1c9963;
            border-color: #1c9963;
        }

        footer.footer a {
            color: #1c9963;
        }

        body {
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
            color: #666666;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        .card-title a,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
            letter-spacing: -0.005em;
            color: #111111;
        }

        h3.carousel-excerpt .title {
            font-size: 1.6em;
            font-weight: 700;
        }

        h3.carousel-excerpt .fontlight {
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 0px;
            line-height: 1.4;
            text-transform: none;
            color: #ffffff;
        }

        .mediumnavigation .navbar-brand {
            font-family: DM Serif Text;
            font-weight: 400;
            letter-spacing: 0em;
        }

        .navbar .nav-link {
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 0.02em;
        }

        .post-style-1 .poststyle1big .card-title {
            font-size: 1.6em;
            line-height: 1.35;
        }

        .post-style-1 .card-title {
            font-size: 1.2em;
        }

        .post-style-2 .card-title {
            font-size: 1.3em;
            line-height: 1.4;
        }

        .post-style-3 .card-title {
            font-size: 1.4em;
            letter-spacing: 0px;
            line-height: 1.27;
            text-transform: none;
        }

        .post-style-4 .card-title {
            font-size: 1.2em;
            letter-spacing: 0px;
            line-height: 1.27;
            text-transform: none;
        }

        .post-style-5 .card-title {
            font-size: 1.15em;
            letter-spacing: 0px;
            line-height: 1.27;
            text-transform: none;
        }

        .post-style-6 .card-title {
            font-size: 1.45em;
            letter-spacing: 0px;
            line-height: 1.27;
            text-transform: none;
        }

        .card-title {
            font-size: 1.3em;
            line-height: 1.4;
        }

        .section-title h2 {
            font-size: 1.4em;
            letter-spacing: 0px;
            line-height: 1.3;
            text-transform: capitalize;
        }

        .mainheading h1.posttitle,
        h1.entry-title {
            font-size: 3.2em;
        }

        .article-post {
            font-family: Merriweather;
            font-size: 1.16em;
            line-height: 1.75;
            color: #222222;
            max-width: 850px;
        }

        #comments .comment-content {
            font-family: Merriweather;
            font-size: 1em;
            line-height: 1.6;
            color: #555;
        }

        body.page .entry-content.page-content {
            font-size: 1.2em;
            line-height: 1.7;
        }

        .footer {
            font-size: 0.85em;
            letter-spacing: 0px;
            line-height: 1.1;
            text-transform: none;
        }

        .mediumnavigation,
        .dropdown-menu,
        .dropdown-item {
            background-color: #fff;
        }

        .mediumnavigation,
        .mediumnavigation a,
        .navbar-light .navbar-nav .nav-link {
            color: #888;
        }

        .navbar-light .navbar-brand {
            color: #111111;
        }

        .navbar-light .navbar-brand:hover {
            color: #111;
        }

        .customarea .btn.follow {
            border-color: #02b875;
            color: #02b875;
        }

        .search-form .search-submit {
            background-color: #1c9963;
        }

        .search-form .search-field {
            border-color: #eeeeee;
        }

        .search-form .search-submit .fa {
            color: #ffffff;
        }

        .search-form .search-field,
        .search-form .search-field::placeholder {
            color: #b2b2b2;
        }

        @media (min-width: 768px) {
            .card-text {
                font-size: 1em;
                letter-spacing: 0px;
                line-height: 1.55;
                text-transform: none;
            }
        }

        @media (max-width: 767px) {
            .navbar-collapse {
                background-color: #fff;
            }
        }

        /* latin-ext */
        @font-face {
            font-family: "DM Serif Text";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCw-xZa_krGokauCeNq1wWyWfG1UVoLILVaqNDD.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "DM Serif Text";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCw-xZa_krGokauCeNq1wWyWfG1X1oLILVaqA.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: "DM Serif Text";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCu-xZa_krGokauCeNq1wWyWfqFW1AKArdqqQ.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "DM Serif Text";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCu-xZa_krGokauCeNq1wWyWfSFW1AKArc.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZDf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZKf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZBf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZAf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZOf-TVrPHp.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-cSZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-eCZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-cyZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-ciZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-fCZKdeX3rg.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: "DM Serif Text";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCw-xZa_krGokauCeNq1wWyWfG1UVoLILVaqNDD.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "DM Serif Text";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCw-xZa_krGokauCeNq1wWyWfG1X1oLILVaqA.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: "DM Serif Text";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCu-xZa_krGokauCeNq1wWyWfqFW1AKArdqqQ.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "DM Serif Text";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCu-xZa_krGokauCeNq1wWyWfSFW1AKArc.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZDf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZKf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZBf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZAf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZOf-TVrPHp.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-cSZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-eCZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-cyZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-ciZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-fCZKdeX3rg.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: "DM Serif Text";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCw-xZa_krGokauCeNq1wWyWfG1UVoLILVaqNDD.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "DM Serif Text";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCw-xZa_krGokauCeNq1wWyWfG1X1oLILVaqA.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: "DM Serif Text";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCu-xZa_krGokauCeNq1wWyWfqFW1AKArdqqQ.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "DM Serif Text";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCu-xZa_krGokauCeNq1wWyWfSFW1AKArc.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZDf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZKf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZBf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZAf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZOf-TVrPHp.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* slider code */
        .number.align-self-start {
    padding-right: 1rem !important;
}
/* slider code end */



        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-cSZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-eCZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-cyZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-ciZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-fCZKdeX3rg.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: "DM Serif Text";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCw-xZa_krGokauCeNq1wWyWfG1UVoLILVaqNDD.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "DM Serif Text";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCw-xZa_krGokauCeNq1wWyWfG1X1oLILVaqA.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: "DM Serif Text";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCu-xZa_krGokauCeNq1wWyWfqFW1AKArdqqQ.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "DM Serif Text";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/dm-serif-text/rnCu-xZa_krGokauCeNq1wWyWfSFW1AKArc.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7lXff4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZDf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZKf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZBf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZAf-TVrPHpBXw.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4m0qyriQwlOrhSvowK_l5-eRZOf-TVrPHp.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR71Wvf4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf1jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf8jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf3jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf2jvrDP3WGO5g.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4l0qyriQwlOrhSvowK_l5-eR7NWPf4jvrDP3WG.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(/home/1007181.cloudwaysapps.com/erfqtvkjxw/public_html/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l521wRZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-cSZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-eCZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-cyZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-ciZKdeX3rsHo.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-440qyriQwlOrhSvowK_l5-fCZKdeX3rg.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52xwNZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZVcf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
                U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZXMf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZV8f8hPvhPUWH.woff) format("woff");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
                U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309,
                U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZVsf8hPvhPUWH.woff) format("woff");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F,
                U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F,
                U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Merriweather";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://themepush.com/demo-mediumish/wp-content/fonts/merriweather/u-4n0qyriQwlOrhSvowK_l52_wFZWMf8hPvhPQ.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC,
                U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
</head>

<body class="home blog wp-embed-responsive edd-js-none">
    <style>
        .edd-js-none .edd-has-js,
        .edd-js .edd-no-js,
        body.edd-js input.edd-no-js {
            display: none;
        }
    </style>


    <style>
        .prevnextlinks {
            display: none;
        }
    </style>

    <header class="navbar-light bg-white fixed-top mediumnavigation">
        <div class="container">
            <!-- Begin Logo -->
            <div class="row justify-content-center align-items-center brandrow">
                <div class="col-lg-4 col-md-4 col-xs-12 hidden-xs-down customarea">
                    <a class="btn follow" href="https://twitter.com/wowthemesnet" target="blank">
                        <i class="fa-brands fa-twitter"></i>
                        Follow</a>

                    <a target="_blank" href="https://www.youtube.com/">
                        <i class="fab fa-youtube social"></i></a>
                    <a target="_blank" href="https://facebook.com/">
                        <i class="fab fa-facebook social"></i></a>
                    <a target="_blank" href="https://instagram.com">
                        <i class="fab fa-instagram social"></i></a>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12 text-center logoarea">
                    <a class="navbar-brand" href="https://themepush.com/demo-mediumish/"><img src="{{ $meta->logo_url }}" alt=""></a>
                </div>

                <div class="col-lg-4 col-md-4 mr-auto col-xs-12 text-right searcharea">
                    <form role="search" method="get" class="search-form"
                        action="https://themepush.com/demo-mediumish/">
                        <input type="hidden" name="post_type" value="post" />
                        <input type="search" class="search-field" placeholder="Search..." value=""
                            name="s" title="Search for:" />
                        <button type="submit" class="search-submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <!-- End Logo -->

            <div class="navarea">
                <nav class="navbar navbar-toggleable-sm">
                    <button class="navbar-toggler collapsed navbar-toggler-right" type="button"
                        data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-close-icon">X</span>
                    </button>
                    <div id="bs4navbar" class="collapse navbar-collapse">
                        <ul id="menu-top-menu" class="navbar-nav col-md-12 justify-content-center">
                            <li id="menu-item-247"
                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-247 nav-item active">
                                <a href="https://themepush.com/demo-mediumish/" class="nav-link active">Home</a>
                            </li>

                            @foreach ($categories as $category)

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $category->title }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($category->subcategory as $sub)
                                    <a class="dropdown-item" href="#">{{ Str::ucfirst($sub->title) }}</a>
                                    @endforeach
                                  </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>






@yield('content')






<div class="container">
    <footer class="footer d-block d-md-flex text-center text-md-left justify-content-between align-items-center">
        <p>&copy; Website Name. All rights reserved.</p>
        <p>Mediumish Theme by WowThemesNet.</p>

        <a href="" class="back-to-top hidden-md-down">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>
</div>
<script type="text/javascript" src="{{ asset('Front-end/js/bootstrap.min.js') }}" id="bootstrap4-js"></script>


</script>
</body>

</html>