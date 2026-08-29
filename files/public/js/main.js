/*
    Harlow — the only JavaScript on the site.

    Everything here is an enhancement: the layout adds a `js` class to the
    document before first paint, and site.css hides [data-reveal] elements
    only inside that class. With JavaScript switched off, or if this file
    fails to load, nothing is ever hidden.
*/
(function () {
    'use strict'

    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches

    // 1. Scroll reveals.
    var reveals = document.querySelectorAll('[data-reveal]')

    if (reveals.length) {
        if (!('IntersectionObserver' in window) || reduced) {
            // No observer support, or the visitor asked for less motion:
            // show everything immediately and observe nothing.
            for (var i = 0; i < reveals.length; i++) {
                reveals[i].classList.add('is-visible')
            }
        } else {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) {
                        return
                    }

                    entry.target.classList.add('is-visible')
                    observer.unobserve(entry.target)
                })
            }, {
                rootMargin: '0px 0px -12% 0px',
                threshold: 0.05,
            })

            reveals.forEach(function (element) {
                // Anything already on screen at load reveals straight away
                // rather than waiting for a scroll that may never come.
                observer.observe(element)
            })
        }
    }

    // 2. The floating bar earns its hairline and its frost only once the
    // page has moved — over the hero it sits on bare paper.
    var bar = document.querySelector('[data-bar]')

    if (bar) {
        var sync = function () {
            bar.classList.toggle('is-stuck', window.scrollY > 24)
        }

        sync()
        window.addEventListener('scroll', sync, { passive: true })
    }
})()
