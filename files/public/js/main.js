/*
    Onyx — the reveal system and the little interactive touches.

    The layout head adds .js to the html element before first paint, so the
    reveal styles in site.css only ever hide content when this file is able
    to reveal it again. Everything degrades to a fully visible page.

    The page opts into instant navigation, which swaps <main> in place and
    keeps the footer: setUp(root) prepares the content inside a root — once
    for the document, then again for each new <main> on instant:navigated,
    dropping the previous observer first — while the footer clock binds once.
*/
(function () {
    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var observer = null;

    // Scroll reveals — flip .is-visible once, then stop watching. A fresh
    // root gets a fresh observer; the one watching the old <main> is dropped.
    var setUp = function (root) {
        if (observer) {
            observer.disconnect();
            observer = null;
        }

        var targets = root.querySelectorAll('[data-reveal]');
        if (reduced || !('IntersectionObserver' in window)) {
            targets.forEach(function (el) { el.classList.add('is-visible'); });
        } else {
            observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '0px 0px -8% 0px', threshold: 0.1 });
            targets.forEach(function (el) { observer.observe(el); });
        }
    };

    setUp(document);

    document.addEventListener('instant:navigated', function (event) {
        setUp(event.detail.main);
    });

    // The footer clock — the persona's local time, refreshed each minute.
    // The footer persists across page changes, so this binds once.
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
