/*
    Onyx — the reveal system and the little interactive touches.

    The layout head adds .js to the html element before first paint, so the
    reveal styles in site.css only ever hide content when this file is able
    to reveal it again. Everything degrades to a fully visible page.
*/
(function () {
    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Scroll reveals — flip .is-visible once, then stop watching.
    var targets = document.querySelectorAll('[data-reveal]');
    if (reduced || !('IntersectionObserver' in window)) {
        targets.forEach(function (el) { el.classList.add('is-visible'); });
    } else {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.1 });
        targets.forEach(function (el) { observer.observe(el); });
    }

    // The footer clock — the persona's local time, refreshed each minute.
    var clock = document.querySelector('[data-local-time]');
    if (clock) {
        var tick = function () {
            var now = new Date();
            var h = String(now.getHours()).padStart(2, '0');
            var m = String(now.getMinutes()).padStart(2, '0');
            clock.textContent = h + ':' + m;
        };
        tick();
        setInterval(tick, 60000);
    }
})();
