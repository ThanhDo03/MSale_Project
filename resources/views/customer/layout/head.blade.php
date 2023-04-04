<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" style="border-radius: 100%;" type="image/png" href="{{ asset('image/Favicon/Lorever.png') }}">

    <link rel="stylesheet" href="{{asset('css/style_welcome.css')}}">
    <title>Shoppingg - Fashion </title>
    <link rel="stylesheet" href="{{asset('customer_css/detail_product.css')}}">
    
    <link rel="stylesheet" href="https://kit.fontawesome.com/f52718c374.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f52718c374.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('customer_css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('customer_css/style.css')}}">
    {{-- <script nonce="d4d17f98-81e8-4f74-b70a-34929b581277"> 
    (function(w, d) {
        ! function(f, g, h, i) {
            f[h] = f[h] || {};
            f[h].executed = [];
            f.zaraz = {
                deferred: [],
                listeners: []
            };
            f.zaraz.q = [];
            f.zaraz._f = function(j) {
                return function() {
                    var k = Array.prototype.slice.call(arguments);
                    f.zaraz.q.push({
                        m: j,
                        a: k
                    })
                }
            };
            for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
            f.zaraz.init = () => {
                var m = g.getElementsByTagName(i)[0],
                    n = g.createElement(i),
                    o = g.getElementsByTagName("title")[0];
                o && (f[h].t = g.getElementsByTagName("title")[0].text);
                f[h].x = Math.random();
                f[h].w = f.screen.width;
                f[h].h = f.screen.height;
                f[h].j = f.innerHeight;
                f[h].e = f.innerWidth;
                f[h].l = f.location.href;
                f[h].r = g.referrer;
                f[h].k = f.screen.colorDepth;
                f[h].n = g.characterSet;
                f[h].o = (new Date).getTimezoneOffset();
                if (f.dataLayer)
                    for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                            ...t[1],
                            ...u[1]
                        }))))) zaraz.set(s[0], s[1], {
                        scope: "page"
                    });
                f[h].q = [];
                for (; f.zaraz.q.length;) {
                    const v = f.zaraz.q.shift();
                    f[h].q.push(v)
                }
                n.defer = !0;
                for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith(
                    "_zaraz_"))).forEach((x => {
                    try {
                        f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                    } catch {
                        f[h]["z_" + x.slice(7)] = w.getItem(x)
                    }
                }));
                n.referrerPolicy = "origin";
                n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
                m.parentNode.insertBefore(n, m)
            };
            ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script> --}}
</head>

<body>