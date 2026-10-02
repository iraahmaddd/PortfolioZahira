import './bootstrap';

function initProjectSlideshows() {
    document.querySelectorAll('[data-slideshow]').forEach((root) => {
        const slides = Array.from(root.querySelectorAll('[data-slide]'));
        if (slides.length === 0) return;

        const isVideo = (el) => el instanceof HTMLVideoElement;

        const dots = Array.from(root.querySelectorAll('[data-dot]'));
        const prevBtn = root.querySelector('[data-prev]');
        const nextBtn = root.querySelector('[data-next]');
        const counter = root.querySelector('[data-counter]');
        let current = 0;

        const render = () => {
            slides.forEach((slide, index) => {
                const active = index === current;
                slide.classList.toggle('opacity-0', !active);
                slide.classList.toggle('pointer-events-none', !active);

                if (!active && isVideo(slide) && !slide.paused) {
                    slide.pause();
                    slide.currentTime = 0;
                }
            });

            dots.forEach((dot, index) => {
                dot.classList.toggle('w-6', index === current);
                dot.classList.toggle('bg-neonBlue', index === current);
                dot.classList.toggle('w-3', index !== current);
                dot.classList.toggle('bg-gray-600', index !== current);
            });

            if (counter) {
                counter.textContent = `${current + 1} / ${slides.length}`;
            }
        };

        const goTo = (index) => {
            current = (index + slides.length) % slides.length;
            render();
        };

        const intervalMs = Number(root.dataset.interval || 0);

        let timer = null;
        let inView = true;

        const stopTimer = () => {
            if (timer) {
                clearInterval(timer);
                timer = null;
            }
        };

        const startTimer = () => {
            if (!intervalMs || timer) return;
            timer = setInterval(() => {
                if (inView && !document.hidden) goTo(current + 1);
            }, intervalMs);
        };

        const restartTimer = () => {
            stopTimer();
            startTimer();
        };

        prevBtn?.addEventListener('click', () => { goTo(current - 1); restartTimer(); });
        nextBtn?.addEventListener('click', () => { goTo(current + 1); restartTimer(); });
        dots.forEach((dot, index) => dot.addEventListener('click', () => { goTo(index); restartTimer(); }));

        slides.forEach((slide) => {
            if (isVideo(slide)) {
                slide.addEventListener('ended', () => goTo(current + 1));
            }
        });

        if ('IntersectionObserver' in window) {
            new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    inView = entry.isIntersecting;

                    if (!inView && isVideo(slides[current]) && !slides[current].paused) {
                        slides[current].pause();
                    }
                });
            }, { threshold: 0.25 }).observe(root);
        }

        render();
        startTimer();
    });
}

initProjectSlideshows();
