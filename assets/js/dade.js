document.addEventListener('DOMContentLoaded', () => {
    const revealItems = document.querySelectorAll('.dade-card, .dade-card-login, .dade-card-instructions, .dade-card-upload, .score-card, .error-content');

    revealItems.forEach((item) => item.classList.add('reveal'));

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        revealItems.forEach((item) => observer.observe(item));
    } else {
        revealItems.forEach((item) => item.classList.add('is-visible'));
    }

    document.querySelectorAll('form').forEach((form) => {
        form.addEventListener('submit', (event) => {
            window.setTimeout(() => {
                if (event.defaultPrevented) {
                    return;
                }

                const submitButton = form.querySelector('button[type="submit"], .btn-submit');
                if (submitButton) {
                    submitButton.classList.add('is-loading');
                    submitButton.setAttribute('aria-busy', 'true');
                }
            }, 0);
        });
    });

    document.querySelectorAll('img').forEach((image) => {
        if (!image.hasAttribute('loading')) {
            image.setAttribute('loading', 'lazy');
        }
    });
});
