/* 
 * 	Author:		Connect Group
 * 	Website:	connect-group.com
 * 
 * 	Title:		LRDX
 * 	Build:		2016-05-24 02:11:14
 * 
 */
window.Modernizr = function(a, b, c) {
        function d(a) {
            t.cssText = a
        }

        function e(a, b) {
            return d(w.join(a + ";") + (b || ""))
        }

        function f(a, b) {
            return typeof a === b
        }

        function g(a, b) {
            return !!~("" + a).indexOf(b)
        }

        function h(a, b) {
            for (var d in a) {
                var e = a[d];
                if (!g(e, "-") && t[e] !== c) return "pfx" == b ? e : !0
            }
            return !1
        }

        function i(a, b, d) {
            for (var e in a) {
                var g = b[a[e]];
                if (g !== c) return d === !1 ? a[e] : f(g, "function") ? g.bind(d || b) : g
            }
            return !1
        }

        function j(a, b, c) {
            var d = a.charAt(0).toUpperCase() + a.slice(1),
                e = (a + " " + y.join(d + " ") + d).split(" ");
            return f(b, "string") || f(b, "undefined") ? h(e, b) : (e = (a + " " + z.join(d + " ") + d).split(" "), i(e, b, c))
        }
        var k, l, m, n = "2.8.3",
            o = {},
            p = !0,
            q = b.documentElement,
            r = "modernizr",
            s = b.createElement(r),
            t = s.style,
            u = ":)",
            v = {}.toString,
            w = " -webkit- -moz- -o- -ms- ".split(" "),
            x = "Webkit Moz O ms",
            y = x.split(" "),
            z = x.toLowerCase().split(" "),
            A = {
                svg: "http://www.w3.org/2000/svg"
            },
            B = {},
            C = [],
            D = C.slice,
            E = function(a, c, d, e) {
                var f, g, h, i, j = b.createElement("div"),
                    k = b.body,
                    l = k || b.createElement("body");
                if (parseInt(d, 10))
                    for (; d--;) h = b.createElement("div"), h.id = e ? e[d] : r + (d + 1), j.appendChild(h);
                return f = ["&#173;", '<style id="s', r, '">', a, "</style>"].join(""), j.id = r, (k ? j : l).innerHTML += f, l.appendChild(j), k || (l.style.background = "", l.style.overflow = "hidden", i = q.style.overflow, q.style.overflow = "hidden", q.appendChild(l)), g = c(j, a), k ? j.parentNode.removeChild(j) : (l.parentNode.removeChild(l), q.style.overflow = i), !!g
            },
            F = {}.hasOwnProperty;
        m = f(F, "undefined") || f(F.call, "undefined") ? function(a, b) {
            return b in a && f(a.constructor.prototype[b], "undefined")
        } : function(a, b) {
            return F.call(a, b)
        }, Function.prototype.bind || (Function.prototype.bind = function(a) {
            var b = this;
            if ("function" != typeof b) throw new TypeError;
            var c = D.call(arguments, 1),
                d = function() {
                    if (this instanceof d) {
                        var e = function() {};
                        e.prototype = b.prototype;
                        var f = new e,
                            g = b.apply(f, c.concat(D.call(arguments)));
                        return Object(g) === g ? g : f
                    }
                    return b.apply(a, c.concat(D.call(arguments)))
                };
            return d
        }), B.flexbox = function() {
            return j("flexWrap")
        }, B.flexboxlegacy = function() {
            return j("boxDirection")
        }, B.webgl = function() {
            return !!a.WebGLRenderingContext
        }, B.touch = function() {
            var c;
            return "ontouchstart" in a || a.DocumentTouch && b instanceof DocumentTouch ? c = !0 : E(["@media (", w.join("touch-enabled),("), r, ")", "{#modernizr{top:9px;position:absolute}}"].join(""), function(a) {
                c = 9 === a.offsetTop
            }), c
        }, B.geolocation = function() {
            return "geolocation" in navigator
        }, B.rgba = function() {
            return d("background-color:rgba(150,255,150,.5)"), g(t.backgroundColor, "rgba")
        }, B.hsla = function() {
            return d("background-color:hsla(120,40%,100%,.5)"), g(t.backgroundColor, "rgba") || g(t.backgroundColor, "hsla")
        }, B.multiplebgs = function() {
            return d("background:url(https://),url(https://),red url(https://)"), /(url\s*\(.*?){3}/.test(t.background)
        }, B.backgroundsize = function() {
            return j("backgroundSize")
        }, B.borderimage = function() {
            return j("borderImage")
        }, B.borderradius = function() {
            return j("borderRadius")
        }, B.boxshadow = function() {
            return j("boxShadow")
        }, B.textshadow = function() {
            return "" === b.createElement("div").style.textShadow
        }, B.opacity = function() {
            return e("opacity:.55"), /^0.55$/.test(t.opacity)
        }, B.cssanimations = function() {
            return j("animationName")
        }, B.csscolumns = function() {
            return j("columnCount")
        }, B.cssgradients = function() {
            var a = "background-image:",
                b = "gradient(linear,left top,right bottom,from(#9f9),to(white));",
                c = "linear-gradient(left top,#9f9, white);";
            return d((a + "-webkit- ".split(" ").join(b + a) + w.join(c + a)).slice(0, -a.length)), g(t.backgroundImage, "gradient")
        }, B.cssreflections = function() {
            return j("boxReflect")
        }, B.csstransforms = function() {
            return !!j("transform")
        }, B.csstransforms3d = function() {
            var a = !!j("perspective");
            return a && "webkitPerspective" in q.style && E("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}", function(b, c) {
                a = 9 === b.offsetLeft && 3 === b.offsetHeight
            }), a
        }, B.csstransitions = function() {
            return j("transition")
        }, B.fontface = function() {
            var a;
            return E('@font-face {font-family:"font";src:url("https://")}', function(c, d) {
                var e = b.getElementById("smodernizr"),
                    f = e.sheet || e.styleSheet,
                    g = f ? f.cssRules && f.cssRules[0] ? f.cssRules[0].cssText : f.cssText || "" : "";
                a = /src/i.test(g) && 0 === g.indexOf(d.split(" ")[0])
            }), a
        }, B.generatedcontent = function() {
            var a;
            return E(["#", r, "{font:0/0 a}#", r, ':after{content:"', u, '";visibility:hidden;font:3px/1 a}'].join(""), function(b) {
                a = b.offsetHeight >= 3
            }), a
        }, B.svg = function() {
            return !!b.createElementNS && !!b.createElementNS(A.svg, "svg").createSVGRect
        }, B.inlinesvg = function() {
            var a = b.createElement("div");
            return a.innerHTML = "<svg/>", (a.firstChild && a.firstChild.namespaceURI) == A.svg
        }, B.smil = function() {
            return !!b.createElementNS && /SVGAnimate/.test(v.call(b.createElementNS(A.svg, "animate")))
        }, B.svgclippaths = function() {
            return !!b.createElementNS && /SVGClipPath/.test(v.call(b.createElementNS(A.svg, "clipPath")))
        };
        for (var G in B) m(B, G) && (l = G.toLowerCase(), o[l] = B[G](), C.push((o[l] ? "" : "no-") + l));
        return o.addTest = function(a, b) {
            if ("object" == typeof a)
                for (var d in a) m(a, d) && o.addTest(d, a[d]);
            else {
                if (a = a.toLowerCase(), o[a] !== c) return o;
                b = "function" == typeof b ? b() : b, "undefined" != typeof p && p && (q.className += " " + (b ? "" : "no-") + a), o[a] = b
            }
            return o
        }, d(""), s = k = null, o._version = n, o._prefixes = w, o._domPrefixes = z, o._cssomPrefixes = y, o.testProp = function(a) {
            return h([a])
        }, o.testAllProps = j, o.testStyles = E, q.className = q.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (p ? " js " + C.join(" ") : ""), o
    }(this, this.document), Modernizr.addTest("cssvhunit", function() {
        var a;
        return Modernizr.testStyles("#modernizr { height: 50vh; }", function(b, c) {
            var d = parseInt(window.innerHeight / 2, 10),
                e = parseInt((window.getComputedStyle ? getComputedStyle(b, null) : b.currentStyle).height, 10);
            a = e == d
        }), a
    }), Modernizr.addTest("cssvmaxunit", function() {
        var a;
        return Modernizr.testStyles("#modernizr { width: 50vmax; }", function(b, c) {
            var d = window.innerWidth / 100,
                e = window.innerHeight / 100,
                f = parseInt((window.getComputedStyle ? getComputedStyle(b, null) : b.currentStyle).width, 10);
            a = parseInt(50 * Math.max(d, e), 10) == f
        }), a
    }), Modernizr.addTest("cssvwunit", function() {
        var a;
        return Modernizr.testStyles("#modernizr { width: 50vw; }", function(b, c) {
            var d = parseInt(window.innerWidth / 2, 10),
                e = parseInt((window.getComputedStyle ? getComputedStyle(b, null) : b.currentStyle).width, 10);
            a = e == d
        }), a
    }), Modernizr.addTest("cssvminunit", function() {
        var a;
        return Modernizr.testStyles("#modernizr { width: 50vmin; }", function(b, c) {
            var d = window.innerWidth / 100,
                e = window.innerHeight / 100,
                f = parseInt((window.getComputedStyle ? getComputedStyle(b, null) : b.currentStyle).width, 10);
            a = parseInt(50 * Math.min(d, e), 10) == f
        }), a
    }),
    function(a) {
        for (var b, c, d, e = [{
                name: "svg",
                value: "url(#test)"
            }, {
                name: "inset",
                value: "inset(10px 20px 30px 40px)"
            }, {
                name: "circle",
                value: "circle(60px at center)"
            }, {
                name: "ellipse",
                value: "ellipse(50% 50% at 50% 50%)"
            }, {
                name: "polygon",
                value: "polygon(50% 0%, 0% 100%, 100% 100%)"
            }], f = 0; f < e.length; f++) b = e[f].name, c = e[f].value, a.addTest("cssclippath" + b, function() {
            if ("CSS" in window && "supports" in window.CSS) {
                for (var b = 0; b < a._prefixes.length; b++)
                    if (d = a._prefixes[b] + "clip-path", window.CSS.supports(d, c)) return !0;
                return !1
            }
            return a.testStyles("#modernizr { " + a._prefixes.join("clip-path:" + c + "; ") + " }", function(b, c) {
                var d = getComputedStyle(b),
                    e = d.clipPath;
                if (!e || "none" == e) {
                    e = !1;
                    for (var f = 0; f < a._domPrefixes.length; f++)
                        if (test = a._domPrefixes[f] + "ClipPath", d[test] && "none" !== d[test]) {
                            e = !0;
                            break
                        }
                }
                return a.testProp("clipPath") && e
            })
        })
    }(Modernizr), Modernizr.addTest("object-fit", function() {
        return "objectFit" in document.documentElement.style
    });