<!DOCTYPE html>
<html lang="id" class="scroll-smooth" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Rastra Rizqi — Pengembang Backend">
    <title>RASTRA.DEV — Backend Developer</title>

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

<body class="bg-[#0B0F0E] text-white antialiased">
    <div class="scroll-progress" aria-hidden="true"></div>

    <!-- NAVIGASI -->
    <header class="sticky top-0 z-20 border-b border-white/10 bg-[#0B0F0E]">
        <nav class="mx-auto flex max-w-6xl flex-wrap items-center justify-between px-6 py-5">

            <div class="hidden items-center gap-8 text-sm text-gray-400 md:flex">
                <a href="#about" class="hero-link transition hover:text-[#36D399]">Tentang Saya</a>
                <a href="#stack" class="hero-link transition hover:text-[#36D399]">Teknologi</a>
                <a href="#projects" class="hero-link transition hover:text-[#36D399]">Proyek</a>
                <a href="#experience" class="hero-link transition hover:text-[#36D399]">Pengalaman</a>
                <a href="#contact" class="hero-link transition hover:text-[#36D399]">Kontak</a>
            </div>

            <div class="ml-auto flex items-center gap-3">
                <a href="#contact"
                   class="hero-button hidden rounded-lg border border-[#36D399]/50 px-4 py-2 text-sm text-[#36D399] transition hover:bg-[#36D399] hover:text-[#0B0F0E] md:inline-block">
                    Mari Berdiskusi
                </a>
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
                <button
                    id="mobile-menu-toggle"
                    type="button"
                    class="hero-button flex h-10 w-10 items-center justify-center rounded-lg border border-white/15 text-gray-300 hover:border-[#36D399] hover:text-[#36D399] md:hidden"
                    aria-label="Buka menu navigasi"
                    aria-controls="mobile-navigation"
                    aria-expanded="false"
                >
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <div id="mobile-navigation" class="hidden basis-full pt-4 md:hidden">
                <div class="flex flex-col border-t border-white/10 pt-2">
                    <a href="#about" class="rounded-lg px-3 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-[#36D399]">Tentang Saya</a>
                    <a href="#stack" class="rounded-lg px-3 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-[#36D399]">Teknologi</a>
                    <a href="#projects" class="rounded-lg px-3 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-[#36D399]">Proyek</a>
                    <a href="#experience" class="rounded-lg px-3 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-[#36D399]">Pengalaman</a>
                    <a href="#contact" class="rounded-lg px-3 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-[#36D399]">Kontak</a>
                    <div class="mt-2 border-t border-white/10 pt-2">
                        <button
                            type="button"
                            data-theme-toggle
                            class="flex w-full items-center gap-3 rounded-lg px-3 py-3 text-sm text-gray-300 transition hover:bg-white/5 hover:text-[#36D399]"
                            aria-label="Aktifkan mode terang"
                            aria-pressed="false"
                        >
                            <svg data-theme-icon="light" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="4"/>
                                <path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/>
                            </svg>
                            <svg data-theme-icon="dark" class="hidden h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20.9 13A9 9 0 0 1 11 3.1 9 9 0 1 0 20.9 13Z"/>
                            </svg>
                            <span data-theme-label>Gunakan mode terang</span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <!-- PEMBUKA: teks di kiri, foto profil di kanan -->
        <section class="snap-section hero-section relative isolate min-h-[720px] overflow-hidden bg-[#0B0F0E] md:min-h-[780px]">

            <!-- Cahaya hijau lembut di belakang foto profil -->
            <div class="hero-glow pointer-events-none absolute inset-y-0 right-0 hidden w-[65%] bg-[radial-gradient(ellipse_at_65%_55%,rgba(20,100,72,0.30),transparent_65%)] md:block"></div>
            <div class="hero-spotlight"></div>

            <!-- Foto profil desktop dibuat hitam putih agar menyatu dengan latar gelap -->
            <div class="pointer-events-none absolute inset-y-0 right-0 hidden w-[58%] md:block lg:w-[55%]">
                <img
                    src="{{ asset('images/rastra.png') }}"
                    alt="Rastra Rizqi - Pengembang Backend"
                    class="hero-portrait absolute bottom-0 right-0 h-full w-full object-contain object-bottom grayscale"
                >
            </div>

            <div class="relative z-10 mx-auto flex min-h-[720px] max-w-6xl items-center px-6 py-20 md:min-h-[780px] md:py-24">
                <div class="hero-content max-w-[570px]">
                    <h1 class="text-5xl font-bold leading-[1.12] tracking-tight md:text-6xl lg:text-7xl">
                        Rastra Rizqi
                    </h1>

                    <p class="mt-3 text-lg font-medium text-gray-300">Backend Developer</p>

                    <p class="mt-5 max-w-lg text-base leading-8 text-gray-400">
                        Saya memiliki ketertarikan dalam pengembangan aplikasi web,
                        khususnya pada sisi backend. Saya senang mempelajari bagaimana
                        sebuah sistem bekerja, mengelola data, mengintegrasikan API,
                        dan membangun fitur yang dapat memberikan solusi.
                    </p>

                    <div class="mt-8 flex gap-3">
                    <a href="https://www.instagram.com/rastrarizqi/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Instagram"
                       class="hero-button flex h-11 w-11 items-center justify-center rounded-full border border-white/15 text-gray-400 hover:border-[#36D399] hover:text-[#36D399]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <rect x="3" y="3" width="18" height="18" rx="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="0.75" fill="currentColor" stroke="none"/>
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/in/rastra-rizqi/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="LinkedIn"
                       class="hero-button flex h-11 w-11 items-center justify-center rounded-full border border-white/15 text-gray-400 hover:border-[#36D399] hover:text-[#36D399]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M5.2 8.3H2.1V21h3.1V8.3ZM3.65 3A1.8 1.8 0 1 0 3.65 6.6 1.8 1.8 0 0 0 3.65 3ZM21.9 13.72c0-3.82-2.04-5.6-4.77-5.6-2.2 0-3.18 1.21-3.73 2.06V8.3h-3.1V21h3.1v-6.28c0-1.66.31-3.27 2.37-3.27 2.03 0 2.06 1.9 2.06 3.38V21h3.1l-.03-7.28Z"/>
                        </svg>
                    </a>

                    <a href="https://wa.me/6281357906911"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="WhatsApp"
                       class="hero-button flex h-11 w-11 items-center justify-center rounded-full border border-white/15 text-gray-400 hover:border-[#36D399] hover:text-[#36D399]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M20 11.5a8 8 0 0 1-11.8 7L4 20l1.5-4A8 8 0 1 1 20 11.5Z"/>
                            <path d="M8.5 9.2c.2-.4.4-.4.7-.4h.5c.2 0 .4.1.5.4l.6 1.4c.1.2.1.4-.1.6l-.5.6c.6 1 1.4 1.7 2.5 2.2l.6-.6c.2-.2.4-.2.6-.1l1.4.7c.2.1.3.3.2.5l-.2.8c-.1.4-.5.6-.9.6-2.7-.2-5.8-3-6.1-5.7-.1-.4.1-.8.2-1Z"/>
                        </svg>
                    </a>
                </div>

                    <div class="mt-9 flex flex-wrap gap-4">
                        <a href="#projects"
                           class="hero-button rounded-lg bg-[#36D399] px-6 py-3 font-semibold text-[#0B0F0E] transition hover:bg-[#28b982]">
                            Jelajahi Proyek
                        </a>

                        <a href="{{ asset('files/CV_Rastra_Rizqi_Nurdian.pdf') }}"
                           download="cv_Rastra_rizqi.pdf"
                           class="hero-button rounded-lg border border-white/30 px-6 py-3 font-semibold text-white transition hover:border-[#36D399] hover:text-[#36D399]">
                            <span class="inline-flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <path d="M7 10 l5 5 5-5"></path>
                                    <path d="M12 15V3"></path>
                                </svg>
                            Unduh CV
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Foto profil pada perangkat seluler -->
            <div class="relative mx-auto -mt-8 h-[430px] w-full max-w-[520px] overflow-hidden md:hidden">
                <img
                    src="{{ asset('images/rastra.png') }}"
                    alt="Rastra Rizqi - Pengembang Backend"
                    class="hero-portrait h-full w-full object-contain object-bottom grayscale"
                >
            </div>
        </section>

        <!-- TEKNOLOGI -->
        <section id="stack" class="snap-section reveal mx-auto max-w-6xl px-6 py-24">
            <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                <div>
                    <p class="mb-3 text-sm font-semibold tracking-widest text-[#36D399]">02 / TEKNOLOGI</p>
                    <h2 class="text-3xl font-bold md:text-4xl">Teknologi yang saya gunakan.</h2>
                </div>
            </div>

            <ul aria-label="Daftar teknologi" class="reveal-stagger mt-10 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4">
                @foreach (['PHP', 'Laravel', 'MySQL', 'REST API', 'JavaScript', 'Tailwind CSS', 'Git', 'HTML & CSS'] as $index => $tech)
                    <li class="group tech-card flex min-h-28 flex-col justify-between rounded-xl border border-white/10 bg-[#141A18] p-5">
                        <span class="tech-card-index font-mono text-xs text-[#36D399]">{{ sprintf('%02d', $index + 1) }}</span>
                        <span class="text-lg font-semibold text-gray-300 transition-colors group-hover:text-[#36D399]">{{ $tech }}</span>
                    </li>
                @endforeach
            </ul>
        </section>

        <!-- PROYEK -->
        <section id="projects" class="snap-section reveal border-y border-white/10 bg-[#101513]">
            <div class="reveal-stagger mx-auto max-w-6xl px-6 py-24" data-project-carousel>
                <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="mb-3 text-sm font-semibold tracking-[0.22em] text-[#36D399]">03 / PENGALAMAN PROYEK</p>
                        <h2 class="text-3xl font-bold md:text-4xl">Proyek yang saya kembangkan.</h2>
                    </div>
                </div>

                <div class="project-carousel-stage mt-10">
                    <button type="button"
                            class="project-control project-side-control project-side-control-prev grid h-10 w-10 place-items-center rounded-full border border-white/10 bg-[#0B0F0E]/90 text-gray-300 shadow-lg backdrop-blur"
                            data-project-prev
                            aria-label="Lihat proyek sebelumnya"
                            aria-controls="project-track"
                            disabled>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="m15 18-6-6 6-6"/>
                        </svg>
                    </button>

                    <div id="project-track"
                         class="project-track"
                         data-project-track
                         tabindex="0"
                         aria-label="Daftar proyek, geser ke samping untuk melihat proyek lainnya">
                @foreach ([
                    [
                        'name' => 'CitraPay',
                        'subtitle' => 'Sistem Manajemen Keuangan Perumahan',
                        'description' => 'Aplikasi pengelolaan keuangan perumahan berbasis mobile untuk mendigitalisasi pembayaran iuran warga dan transaksi keuangan. Aplikasi ini menyediakan verifikasi pembayaran, pencatatan pemasukan dan pengeluaran, laporan keuangan, serta pemantauan pembayaran warga untuk meningkatkan efisiensi administrasi dan transparansi keuangan.',
                        'technologies' => ['Flutter', 'Laravel', 'REST API', 'MySQL'],
                        'gallery_label' => 'APLIKASI CITRAPAY',
                        'screenshots' => [
                            ['file' => 'foto citrapay 1.png', 'alt' => 'Halaman input pembayaran warga', 'position' => 'left-[5%] top-[10%] rotate-[-8deg]'],
                            ['file' => 'foto citrapay 2.png', 'alt' => 'Halaman login CitraPay', 'position' => 'right-[5%] top-[12%] rotate-[8deg]'],
                            ['file' => 'foto citrapay 3.png', 'alt' => 'Dashboard warga CitraPay', 'position' => 'bottom-[7%] left-[9%] rotate-[-5deg]'],
                            ['file' => 'foto citrapay 4.png', 'alt' => 'Dashboard pengurus CitraPay', 'position' => 'left-1/2 top-1/2 z-20 -translate-x-1/2 -translate-y-1/2 rotate-[2deg]'],
                        ],
                    ],
                    [
                        'name' => 'CitraPay',
                        'subtitle' => 'Sistem Manajemen Keuangan Perumahan',
                        'description' => 'Aplikasi pengelolaan keuangan perumahan berbasis mobile untuk mendigitalisasi pembayaran iuran warga dan transaksi keuangan. Aplikasi ini menyediakan verifikasi pembayaran, pencatatan pemasukan dan pengeluaran, laporan keuangan, serta pemantauan pembayaran warga untuk meningkatkan efisiensi administrasi dan transparansi keuangan.',
                        'technologies' => ['Flutter', 'Laravel', 'REST API', 'MySQL'],
                        'gallery_label' => 'APLIKASI CITRAPAY',
                        'screenshots' => [
                            ['file' => 'foto citrapay 1.png', 'alt' => 'Halaman input pembayaran warga', 'position' => 'left-[5%] top-[10%] rotate-[-8deg]'],
                            ['file' => 'foto citrapay 2.png', 'alt' => 'Halaman login CitraPay', 'position' => 'right-[5%] top-[12%] rotate-[8deg]'],
                            ['file' => 'foto citrapay 3.png', 'alt' => 'Dashboard warga CitraPay', 'position' => 'bottom-[7%] left-[9%] rotate-[-5deg]'],
                            ['file' => 'foto citrapay 4.png', 'alt' => 'Dashboard pengurus CitraPay', 'position' => 'left-1/2 top-1/2 z-20 -translate-x-1/2 -translate-y-1/2 rotate-[2deg]'],
                        ],
                    ],
                    [
                        'name' => 'CitraPay',
                        'subtitle' => 'Sistem Manajemen Keuangan Perumahan',
                        'description' => 'Aplikasi pengelolaan keuangan perumahan berbasis mobile untuk mendigitalisasi pembayaran iuran warga dan transaksi keuangan. Aplikasi ini menyediakan verifikasi pembayaran, pencatatan pemasukan dan pengeluaran, laporan keuangan, serta pemantauan pembayaran warga untuk meningkatkan efisiensi administrasi dan transparansi keuangan.',
                        'technologies' => ['Flutter', 'Laravel', 'REST API', 'MySQL'],
                        'gallery_label' => 'APLIKASI CITRAPAY',
                        'screenshots' => [
                            ['file' => 'foto citrapay 1.png', 'alt' => 'Halaman input pembayaran warga', 'position' => 'left-[5%] top-[10%] rotate-[-8deg]'],
                            ['file' => 'foto citrapay 2.png', 'alt' => 'Halaman login CitraPay', 'position' => 'right-[5%] top-[12%] rotate-[8deg]'],
                            ['file' => 'foto citrapay 3.png', 'alt' => 'Dashboard warga CitraPay', 'position' => 'bottom-[7%] left-[9%] rotate-[-5deg]'],
                            ['file' => 'foto citrapay 4.png', 'alt' => 'Dashboard pengurus CitraPay', 'position' => 'left-1/2 top-1/2 z-20 -translate-x-1/2 -translate-y-1/2 rotate-[2deg]'],
                        ],
                    ],
                ] as $projectIndex => $project)
                <article class="project-slide project-card group relative overflow-hidden rounded-[2rem] border border-white/10 bg-gradient-to-br from-[#18221E] via-[#111715] to-[#0B0F0E] p-5 transition duration-500 hover:border-[#36D399]/40 hover:shadow-[0_24px_80px_rgba(0,0,0,0.35)] md:p-8"
                         data-project-slide
                         role="group"
                         aria-label="Proyek {{ $projectIndex + 1 }} dari 3">
                    <div class="pointer-events-none absolute -right-24 -top-32 h-80 w-80 rounded-full bg-[#36D399]/10 blur-3xl transition duration-700 group-hover:bg-[#36D399]/15"></div>

                    <div class="relative grid items-center gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:gap-12">
                        <div class="py-2 md:py-6">
                            <div class="inline-flex items-center gap-2 rounded-full border border-[#36D399]/20 bg-[#36D399]/[0.08] px-3 py-1.5 font-mono text-[11px] tracking-wider text-[#36D399]">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#36D399]"></span>
                                @if ($projectIndex === 0) PROYEK UNGGULAN @else PROYEK @endif
                                <span class="text-white/35">/ {{ sprintf('%02d', $projectIndex + 1) }}</span>
                            </div>

                            <h3 class="mt-6 text-4xl font-bold tracking-tight md:text-5xl">
                                {{ $project['name'] }}
                            </h3>
                            <p class="mt-2 text-sm font-medium text-gray-300">{{ $project['subtitle'] }}</p>
                            <p class="mt-4 max-w-md leading-7 text-gray-400">
                                {{ $project['description'] }}
                            </p>

                            <div class="mt-8">
                                <p class="mb-3 text-xs font-semibold uppercase tracking-[0.18em] text-gray-500">Dibangun dengan</p>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($project['technologies'] as $technology)
                                        <span class="rounded-full border border-white/10 bg-white/[0.04] px-4 py-2 text-sm text-gray-300 transition hover:border-[#36D399]/40 hover:text-[#36D399]">{{ $technology }}</span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mt-6 flex flex-wrap gap-3">
                                <a href="https://github.com/rastra01/citrapay-backend"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 rounded-lg border border-white/15 px-4 py-2.5 text-sm font-medium text-gray-300 transition hover:border-[#36D399]/50 hover:text-[#36D399]">
                                    Backend Repository
                                </a>
                                <a href="https://github.com/rastra01/citrapay-mobile"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 rounded-lg border border-white/15 px-4 py-2.5 text-sm font-medium text-gray-300 transition hover:border-[#36D399]/50 hover:text-[#36D399]">
                                    Frontend Repository
                                </a>
                            </div>
                        </div>

                        <div class="project-gallery relative isolate min-h-[430px] overflow-hidden rounded-[1.5rem] border border-white/10 bg-[radial-gradient(ellipse_at_50%_45%,rgba(54,211,153,0.15),transparent_58%),linear-gradient(145deg,#17211d,#0b0f0e)] sm:min-h-[500px]">
                            <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(rgba(255,255,255,.28) 1px, transparent 1px); background-size: 22px 22px;"></div>
                            <span class="absolute right-5 top-5 z-30 rounded-full border border-white/10 bg-black/30 px-3 py-1.5 font-mono text-[10px] tracking-widest text-gray-400 backdrop-blur">{{ $project['gallery_label'] }}</span>

                            @foreach ($project['screenshots'] as $screenshot)
                                <figure class="project-screen absolute {{ $screenshot['position'] }} aspect-[9/19] w-[29%] max-w-[145px] overflow-hidden rounded-[1.35rem] border-[5px] border-[#27312d] bg-white shadow-2xl transition-transform duration-500 hover:scale-110">
                                    <img
                                        src="{{ asset('images/' . rawurlencode($screenshot['file'])) }}"
                                        alt="{{ $screenshot['alt'] }}"
                                        class="h-full w-full object-cover"
                                    >
                                </figure>
                            @endforeach
                        </div>
                    </div>

                </article>
                @endforeach
                    </div>

                    <button type="button"
                            class="project-control project-side-control project-side-control-next grid h-10 w-10 place-items-center rounded-full border border-white/10 bg-[#0B0F0E]/90 text-gray-300 shadow-lg backdrop-blur"
                            data-project-next
                            aria-label="Lihat proyek berikutnya"
                            aria-controls="project-track">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="m9 18 6-6-6-6"/>
                        </svg>
                    </button>
                </div>

                <div class="project-carousel-footer mt-6 flex items-center justify-between gap-4">
                    <span class="font-mono text-xs tracking-wider text-gray-400" data-project-count>01 / 03</span>
                    <a href="{{ route('projects.index') }}"
                       class="inline-flex items-center gap-2 rounded-lg bg-[#36D399] px-5 py-3 font-semibold text-[#0B0F0E] transition hover:bg-[#28b982]">
                        Lihat lainnya
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M5 12h14m-6-6 6 6-6 6"/>
                        </svg>
                    </a>
                </div>
                </div>
            </div>
        </section>

        <!-- PENGALAMAN -->
        <section id="experience" class="snap-section reveal mx-auto max-w-6xl px-6 py-24">
            <p class="mb-3 text-sm font-semibold tracking-widest text-[#36D399]">04 / PERJALANAN</p>
            <h2 class="text-3xl font-bold md:text-4xl">Pengalaman & Pendidikan.</h2>
            <div class="mt-10 grid gap-10 md:grid-cols-2 md:gap-16">
                <div class="border-l border-[#36D399]/40 pl-6">
                    <p class="font-mono text-xs text-[#36D399]">PENGALAMAN KERJA</p>
                    <h3 class="mt-3 text-xl font-semibold">Asisten Laboratorium</h3>
                    <p class="mt-2 text-gray-400">Laboratorium Terpadu Informatika, Universitas Islam Indonesia</p>
                    <p class="mt-2 text-sm text-gray-500">2025</p>
                </div>

                <div class="border-l border-[#36D399]/40 pl-6">
                    <p class="font-mono text-xs text-[#36D399]">PENDIDIKAN</p>
                    <h3 class="mt-3 text-xl font-semibold">Universitas Islam Indonesia</h3>
                    <p class="mt-2 text-gray-400">S1 Informatika</p>
                    <p class="mt-2 text-sm text-gray-500">2022 — 2026</p>
                </div>
            </div>
        </section>

        <!-- KONTAK -->
        <section id="contact" class="snap-section reveal border-t border-white/10 bg-[#101513]">
            <div class="reveal-stagger mx-auto max-w-6xl px-6 py-24 text-center">
                <p class="mb-3 text-sm font-semibold tracking-widest text-[#36D399]">05 / HUBUNGI SAYA</p>
                <h2 class="text-4xl font-bold md:text-5xl">Mari membangun sesuatu yang hebat.</h2>
                <p class="mx-auto mt-5 max-w-xl leading-7 text-gray-400">
                    Terbuka untuk kesempatan, kolaborasi, dan diskusi seputar
                    pengembangan web.
                </p>
                <a href="mailto:rastrarizqi01@gmail.com"
                   class="mt-9 inline-block rounded-lg bg-[#36D399] px-7 py-3 font-semibold text-[#0B0F0E] transition hover:bg-[#28b982]">
                    Hubungi Saya
                </a>

            </div>
        </section>
    </main>

    <footer class="snap-section border-t border-white/10 px-6 py-7 text-center text-sm text-gray-500">
        © {{ date('Y') }} RASTRA.DEV. Dibuat dengan Laravel.
    </footer>

</body>
</html>
