<!DOCTYPE html>
<html lang="id" class="scroll-smooth" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Daftar proyek Rastra Rizqi, penjelasan proyek, teknologi, dan tautan repository GitHub.">
    <title>Proyek dan Repository — RASTRA.DEV</title>

    <script>
        if (localStorage.getItem('rastra-portfolio-theme') === 'light') {
            document.documentElement.dataset.theme = 'light';
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-[#0B0F0E] text-white antialiased">
    <header class="sticky top-0 z-20 border-b border-white/10 bg-[#0B0F0E]">
        <nav class="mx-auto flex max-w-6xl justify-end px-6 py-5">
            <div class="flex items-center gap-3">
                <button
                    type="button"
                    data-theme-toggle
                    class="hidden h-10 w-10 items-center justify-center rounded-lg border border-white/15 text-gray-300 transition hover:border-[#36D399] hover:text-[#36D399] md:flex"
                    aria-label="Aktifkan mode terang"
                    aria-pressed="false"
                    title="Aktifkan mode terang"
                >
                    <svg data-theme-icon="light" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="4"/>
                        <path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/>
                    </svg>
                    <svg data-theme-icon="dark" class="hidden h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M20.9 13A9 9 0 0 1 11 3.1 9 9 0 1 0 20.9 13Z"/>
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <main class="mx-auto max-w-6xl px-6 py-16 md:py-24">
        <section class="reveal">
            <p class="mb-3 text-sm font-semibold tracking-[0.22em] text-[#36D399]">KUMPULAN PROYEK</p>
            <h1 class="text-4xl font-bold tracking-tight md:text-6xl">Proyek & Repository</h1>
            <p class="mt-6 max-w-3xl leading-8 text-gray-400">
                Berikut beberapa proyek yang saya kembangkan, teknologi yang digunakan, peran saya, dan tautan ke repository GitHub.
            </p>
        </section>

        <section class="reveal mt-14">
            <p class="font-mono text-xs tracking-[0.18em] text-[#36D399]">01 / WEB DEVELOPMENT</p>
            <h2 class="mt-3 text-3xl font-bold md:text-4xl">Jogja-The-Explorer</h2>
            <p class="mt-3 max-w-2xl text-lg text-gray-300">Website panduan destinasi wisata dan kuliner di Yogyakarta.</p>
            <p class="mt-5 max-w-3xl leading-8 text-gray-400">
                Jogja-The-Explorer adalah website yang membantu wisatawan mencari berbagai destinasi wisata dan tempat kuliner di Yogyakarta. Dalam proyek ini, saya berperan sebagai backend engineer.
            </p>

            <div class="mt-6 flex flex-wrap gap-2">
                @foreach (['HTML', 'CSS', 'PHP', 'MySQL'] as $technology)
                    <span class="rounded-full border border-white/10 bg-white/[0.04] px-4 py-2 text-sm text-gray-300">{{ $technology }}</span>
                @endforeach
            </div>

            <div class="mt-6">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-gray-500">Peran</p>
                <p class="mt-2 text-gray-300">Backend Engineer</p>
            </div>

            <a href="https://github.com/rastra01/Jogja-The-Explorer"
               target="_blank"
               rel="noopener noreferrer"
               class="mt-7 inline-flex items-center gap-2 rounded-lg bg-[#36D399] px-4 py-2.5 font-semibold text-[#0B0F0E] transition hover:bg-[#28b982]">
                Buka repository Jogja-The-Explorer
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path d="M7 17 17 7M8 7h9v9"/>
                </svg>
            </a>
        </section>

        <div class="mt-16 border-t border-white/10 pt-8">
            <a href="{{ route('portfolio') }}#projects" class="inline-flex items-center gap-2 text-sm font-semibold text-[#36D399] transition hover:text-white">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path d="m15 18-6-6 6-6"/>
                </svg>
                Kembali ke portofolio
            </a>
        </div>
    </main>
</body>
</html>
