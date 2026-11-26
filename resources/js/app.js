import './bootstrap';

const supportsCursorTrail = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const heroSection = document.querySelector('.hero-section');
const scrollProgress = document.querySelector('.scroll-progress');
const mobileMenuToggle = document.querySelector('#mobile-menu-toggle');
const mobileNavigation = document.querySelector('#mobile-navigation');
const themeToggleButtons = document.querySelectorAll('[data-theme-toggle]');

const updateThemeControls = () => {
    const currentTheme = document.documentElement.dataset.theme === 'light' ? 'light' : 'dark';
    const targetTheme = currentTheme === 'dark' ? 'light' : 'dark';
    const actionLabel = targetTheme === 'light' ? 'Aktifkan mode terang' : 'Aktifkan mode gelap';

    themeToggleButtons.forEach((button) => {
        button.setAttribute('aria-label', actionLabel);
        button.setAttribute('aria-pressed', String(currentTheme === 'light'));
        button.setAttribute('title', actionLabel);

        button.querySelectorAll('[data-theme-icon]').forEach((icon) => {
            icon.classList.toggle('hidden', icon.getAttribute('data-theme-icon') !== targetTheme);
        });

        const label = button.querySelector('[data-theme-label]');

        if (label) {
            label.textContent = targetTheme === 'light' ? 'Gunakan mode terang' : 'Gunakan mode gelap';
        }
    });
};

themeToggleButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const nextTheme = document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark';

        document.documentElement.dataset.theme = nextTheme;
        localStorage.setItem('rastra-portfolio-theme', nextTheme);
        updateThemeControls();
    });
});

updateThemeControls();

if (!prefersReducedMotion) {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            } else {
                entry.target.classList.remove('is-visible');
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.reveal, .reveal-stagger').forEach((element) => {
        revealObserver.observe(element);
    });
}

const updateScrollProgress = () => {
    if (!scrollProgress) {
        return;
    }

    const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = scrollableHeight > 0 ? (window.scrollY / scrollableHeight) * 100 : 0;

    scrollProgress.style.setProperty('--scroll-progress', `${Math.min(progress, 100)}%`);
};

window.addEventListener('scroll', updateScrollProgress, { passive: true });
updateScrollProgress();

if (mobileMenuToggle && mobileNavigation) {
    const closeMobileNavigation = () => {
        mobileMenuToggle.setAttribute('aria-expanded', 'false');
        mobileMenuToggle.setAttribute('aria-label', 'Buka menu navigasi');
        mobileNavigation.classList.add('hidden');
    };

    mobileMenuToggle.addEventListener('click', () => {
        const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true';

        mobileMenuToggle.setAttribute('aria-expanded', String(!isExpanded));
        mobileMenuToggle.setAttribute('aria-label', isExpanded ? 'Buka menu navigasi' : 'Tutup menu navigasi');
        mobileNavigation.classList.toggle('hidden', isExpanded);
    });

    mobileNavigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMobileNavigation);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMobileNavigation();
            mobileMenuToggle.focus();
        }
    });
}

const projectCarousel = document.querySelector('[data-project-carousel]');

if (projectCarousel) {
    const projectTrack = projectCarousel.querySelector('[data-project-track]');
    const projectSlides = Array.from(projectCarousel.querySelectorAll('[data-project-slide]'));
    const previousProjectButton = projectCarousel.querySelector('[data-project-prev]');
    const nextProjectButton = projectCarousel.querySelector('[data-project-next]');
    const projectCount = projectCarousel.querySelector('[data-project-count]');

    if (projectTrack && projectSlides.length > 0 && previousProjectButton && nextProjectButton && projectCount) {
        const getCurrentIndex = () => {
            const slideWidth = projectTrack.clientWidth;

            if (slideWidth === 0) {
                return 0;
            }

            return Math.min(projectSlides.length - 1, Math.round(projectTrack.scrollLeft / slideWidth));
        };

        const updateProjectControls = () => {
            const currentIndex = getCurrentIndex();

            projectCount.textContent = `${String(currentIndex + 1).padStart(2, '0')} / ${String(projectSlides.length).padStart(2, '0')}`;
            previousProjectButton.disabled = currentIndex === 0;
            nextProjectButton.disabled = currentIndex === projectSlides.length - 1;
        };

        const moveProject = (direction) => {
            const nextIndex = Math.max(0, Math.min(projectSlides.length - 1, getCurrentIndex() + direction));
            const left = projectSlides[nextIndex].offsetLeft - projectSlides[0].offsetLeft;

            projectTrack.scrollTo({
                left,
                behavior: prefersReducedMotion ? 'auto' : 'smooth',
            });
        };

        previousProjectButton.addEventListener('click', () => moveProject(-1));
        nextProjectButton.addEventListener('click', () => moveProject(1));
        projectTrack.addEventListener('scroll', updateProjectControls, { passive: true });
        projectTrack.addEventListener('keydown', (event) => {
            if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
                event.preventDefault();
                moveProject(event.key === 'ArrowRight' ? 1 : -1);
            }
        });
        window.addEventListener('resize', updateProjectControls);

        updateProjectControls();
    }
}

if (supportsCursorTrail && !prefersReducedMotion) {
    let lastTrailTime = 0;

    window.addEventListener('pointermove', (event) => {
        if (event.pointerType !== 'mouse') {
            return;
        }

        if (heroSection) {
            const bounds = heroSection.getBoundingClientRect();
            const x = ((event.clientX - bounds.left) / bounds.width) * 100;
            const y = ((event.clientY - bounds.top) / bounds.height) * 100;

            heroSection.style.setProperty('--spotlight-x', `${x}%`);
            heroSection.style.setProperty('--spotlight-y', `${y}%`);
        }

        const now = performance.now();

        if (now - lastTrailTime < 32) {
            return;
        }

        lastTrailTime = now;

        const trailDot = document.createElement('span');
        trailDot.className = 'cursor-trail-dot';
        trailDot.setAttribute('aria-hidden', 'true');
        trailDot.style.left = `${event.clientX}px`;
        trailDot.style.top = `${event.clientY}px`;
        document.body.appendChild(trailDot);

        trailDot.addEventListener('animationend', () => {
            trailDot.remove();
        }, { once: true });
    });
}
