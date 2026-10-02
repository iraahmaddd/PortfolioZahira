<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nur Zahira | Portfolio</title>
    <link rel="icon" href="data:,">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-darkBg text-gray-200 font-sans antialiased selection:bg-accentBlue selection:text-white">

    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50 bg-darkBg/80 backdrop-blur-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold tracking-wider text-white">
                IRA@HMAD<span class="text-neonBlue">.DEV</span>
            </a>
            <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-300">
                <a href="#about" class="hover:text-neonBlue transition">{{ __('site.nav.about') }}</a>
                <a href="#skills" class="hover:text-neonBlue transition">{{ __('site.nav.skills') }}</a>
                <a href="#projects" class="hover:text-neonBlue transition">{{ __('site.nav.projects') }}</a>
                <a href="#experience" class="hover:text-neonBlue transition">{{ __('site.nav.experience') }}</a>
                <a href="#certifications" class="hover:text-neonBlue transition">{{ __('site.nav.certifications') }}</a>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center rounded-full border border-gray-700 bg-navyDark text-xs font-semibold overflow-hidden">
                    <a href="{{ route('lang.switch', 'en') }}"
                       class="px-3 py-1.5 transition {{ app()->getLocale() === 'en' ? 'bg-accentBlue text-white' : 'text-gray-400 hover:text-neonBlue' }}"
                       aria-label="Switch to English">EN</a>
                    <span class="text-gray-600">|</span>
                    <a href="{{ route('lang.switch', 'ms') }}"
                       class="px-3 py-1.5 transition {{ app()->getLocale() === 'ms' ? 'bg-accentBlue text-white' : 'text-gray-400 hover:text-neonBlue' }}"
                       aria-label="Tukar ke Bahasa Melayu">MY</a>
                </div>
                <a href="#contact" class="px-5 py-2 rounded-full bg-accentBlue text-white text-sm font-semibold hover:bg-blue-600 transition shadow-lg shadow-blue-500/30">
                    {{ __('site.nav.contact') }}
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="min-h-screen flex items-center justify-center pt-24 pb-12 px-6 relative overflow-hidden">
        <!-- Glow Effects -->
        <div class="absolute top-1/4 left-10 w-72 h-72 bg-accentBlue/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-neonBlue/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-6xl mx-auto z-10 grid md:grid-cols-2 items-center gap-12">
            <div class="text-center md:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-navyDark border border-blue-500/30 text-neonBlue text-xs font-semibold mb-6">
                    <span class="w-2 h-2 rounded-full bg-neonBlue animate-pulse"></span>
                    MBOT Qualified Technician (QT25055035)
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight leading-tight mb-4">
                    {{ __('site.hero.greeting') }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-neonBlue to-blue-500">Nur Zahira</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-400 mb-8 max-w-2xl mx-auto md:mx-0">
                    {{ __('site.hero.subtitle') }}
                </p>
                <div class="flex flex-wrap justify-center md:justify-start gap-4">
                    <a href="#projects" class="px-7 py-3 rounded-lg bg-accentBlue text-white font-medium hover:bg-blue-700 transition shadow-lg shadow-blue-500/20">
                        {{ __('site.hero.cta_projects') }}
                    </a>
                    <a href="mailto:iraahmaddd@gmail.com" class="px-7 py-3 rounded-lg bg-cardBg text-gray-300 font-medium border border-gray-700 hover:border-neonBlue hover:text-white transition">
                        {{ __('site.hero.cta_email') }}
                    </a>
                </div>
            </div>

            <!-- FOTO PROFIL -->
            <div class="flex justify-center md:justify-end">
                <div>
                    @if(file_exists(public_path('images/profile.jpg')))
                        <img src="{{ asset('images/profile.jpg') }}" alt="{{ __('site.hero.greeting') }} Nur Zahira"
                             class="w-52 sm:w-64 lg:w-80 h-auto object-contain drop-shadow-[0_25px_45px_rgba(37,99,235,0.35)]">
                    @else
                        <div class="w-52 h-52 sm:w-64 sm:h-64 rounded-2xl border-2 border-dashed border-gray-600 bg-cardBg flex flex-col items-center justify-center text-center px-6">
                            <i class="fa-solid fa-camera text-3xl text-neonBlue mb-3"></i>
                            <p class="text-xs text-gray-400 leading-relaxed">Letak gambar anda:<br><code class="text-neonBlue">public/images/profile.jpg</code></p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 bg-navyDark/50 border-t border-b border-gray-800/80 px-6">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-white mb-4">{{ __('site.about.title') }}</h2>
                <div class="w-16 h-1 bg-accentBlue mb-6 rounded-full"></div>
                <p class="text-gray-300 leading-relaxed mb-4">
                    {{ __('site.about.p1a') }}<strong class="text-white">CGPA 3.77</strong>{{ __('site.about.p1b') }}
                </p>
                <p class="text-gray-300 leading-relaxed">
                    {{ __('site.about.p2a') }}<em class="text-white">{{ __('site.about.intern') }}</em>{{ __('site.about.p2b') }}
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="p-6 bg-cardBg rounded-xl border border-gray-800">
                    <h3 class="text-3xl font-bold text-neonBlue mb-1">3.77</h3>
                    <p class="text-sm text-gray-400">{{ __('site.about.stat_cgpa') }}</p>
                </div>
                <div class="p-6 bg-cardBg rounded-xl border border-gray-800">
                    <h3 class="text-3xl font-bold text-neonBlue mb-1">5+</h3>
                    <p class="text-sm text-gray-400">{{ __('site.about.stat_projects') }}</p>
                </div>
                <div class="p-6 bg-cardBg rounded-xl border border-gray-800">
                    <h3 class="text-3xl font-bold text-neonBlue mb-1">MBOT</h3>
                    <p class="text-sm text-gray-400">{{ __('site.about.stat_mbot') }}</p>
                </div>
                <div class="p-6 bg-cardBg rounded-xl border border-gray-800">
                    <h3 class="text-3xl font-bold text-neonBlue mb-1">Puchong / Bestari Jaya</h3>
                    <p class="text-sm text-gray-400">{{ __('site.about.stat_location') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills" class="py-20 px-6 max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-white mb-2">{{ __('site.skills.title') }}</h2>
            <div class="w-16 h-1 bg-accentBlue mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <!-- Languages -->
            <div class="p-6 bg-cardBg rounded-xl border border-gray-800 hover:border-accentBlue/50 transition">
                <div class="text-neonBlue text-2xl mb-4"><i class="fa-solid me-2 fa-code"></i> {{ __('site.skills.languages') }}</div>
                <ul class="space-y-2 text-gray-300 text-sm">
                    <li>• PHP</li>
                    <li>• HTML5 & CSS3</li>
                    <li>• Java</li>
                    <li>• JavaScript</li>
                </ul>
            </div>
            <!-- Frameworks -->
            <div class="p-6 bg-cardBg rounded-xl border border-gray-800 hover:border-accentBlue/50 transition">
                <div class="text-neonBlue text-2xl mb-4"><i class="fa-solid me-2 fa-layer-group"></i> {{ __('site.skills.frameworks') }}</div>
                <ul class="space-y-2 text-gray-300 text-sm">
                    <li>• Laravel</li>
                    <li>• Tailwind CSS</li>
                    <li>• Bootstrap</li>
                </ul>
            </div>
            <!-- Database -->
            <div class="p-6 bg-cardBg rounded-xl border border-gray-800 hover:border-accentBlue/50 transition">
                <div class="text-neonBlue text-2xl mb-4"><i class="fa-solid me-2 fa-database"></i> {{ __('site.skills.database') }}</div>
                <ul class="space-y-2 text-gray-300 text-sm">
                    <li>• MySQL</li>
                    <li>• phpMyAdmin</li>
                </ul>
            </div>
            <!-- Tools -->
            <div class="p-6 bg-cardBg rounded-xl border border-gray-800 hover:border-accentBlue/50 transition">
                <div class="text-neonBlue text-2xl mb-4"><i class="fa-solid me-2 fa-wrench"></i> {{ __('site.skills.tools') }}</div>
                <ul class="space-y-2 text-gray-300 text-sm">
                    <li>• VS Code / Sublime / Antigravity</li>
                    <li>• Figma / Canva</li>
                    <li>• Draw.io / Miro</li>
                    <li>• WordPress</li>
                    <li>• Git / Git Hub / Git Lab / Git Fork </li>


                </ul>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="py-20 bg-navyDark/30 border-t border-gray-800/60 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-2">{{ __('site.projects.title') }}</h2>
                <div class="w-16 h-1 bg-accentBlue mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Project 1 -->
                <div class="bg-cardBg rounded-xl overflow-hidden border border-gray-800 hover:border-neonBlue/40 transition group">
                    <x-project-youtube id="t6JcIveVhyk" alt="MyPusara demo video" />
                    <div class="p-8">
                        <div class="text-xs text-neonBlue font-semibold uppercase tracking-wider mb-2">Web Application</div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-neonBlue transition">MyPusara</h3>
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                            {{ __('site.projects.mypusara_desc') }}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">Laravel</span>
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">Tailwind CSS</span>
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">MySQL</span>
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">JavaScript</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-cardBg rounded-xl overflow-hidden border border-gray-800 hover:border-neonBlue/40 transition group">
                    <x-project-videos :videos="$projectVideos['espbt'] ?? []" />
                    <div class="p-8">
                        <div class="text-xs text-neonBlue font-semibold uppercase tracking-wider mb-2">Management System</div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-neonBlue transition">e-SPBT KVKS</h3>
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                            {{ __('site.projects.espbt_desc') }}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">Laravel</span>
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">PHP</span>
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">MySQL</span>
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">PDF Generator</span>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="bg-cardBg rounded-xl overflow-hidden border border-gray-800 hover:border-neonBlue/40 transition group">
                    <x-project-videos :videos="$projectVideos['na'] ?? []" />
                    <div class="p-8">
                        <div class="text-xs text-neonBlue font-semibold uppercase tracking-wider mb-2">Booking Website</div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-neonBlue transition">N.A Photography</h3>
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                            {{ __('site.projects.na_desc') }}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">Laravel</span>
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">PHP</span>
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">MySQL</span>
                            <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">Tailwind CSS</span>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="md:col-span-2 bg-cardBg rounded-xl overflow-hidden border border-gray-800 hover:border-neonBlue/40 transition group">
                    <div class="md:flex">
                        <a href="https://sites.google.com/view/iraahmadportfolio/home" target="_blank" rel="noopener noreferrer"
                           class="block relative aspect-video md:aspect-auto md:w-96 shrink-0 overflow-hidden bg-navyDark border-b md:border-b-0 md:border-e border-gray-800"
                           aria-label="{{ __('site.projects.view_site') }}">
                            @if(file_exists(public_path('images/portfolioGS.png')))
                                <img src="{{ asset('images/portfolioGS.png') }}" alt="Personal Portfolio Website - Google Sites"
                                     loading="lazy"
                                     class="absolute inset-0 h-full w-full object-contain p-4">
                            @else
                                <span class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
                                    <i class="fa-solid fa-image text-3xl text-neonBlue mb-3"></i>
                                    <code class="text-xs text-neonBlue">public/images/portfolioGS.png</code>
                                </span>
                            @endif
                        </a>
                        <div class="p-8 flex-1">
                            <div class="text-xs text-neonBlue font-semibold uppercase tracking-wider mb-2">Google Sites • 2025</div>
                            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-neonBlue transition">Personal Portfolio Website</h3>
                            <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                                {{ __('site.projects.portfolio_gs_desc') }}
                            </p>
                            <div class="flex flex-wrap items-center gap-2 mb-6">
                                <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">Google Sites</span>
                                <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">Responsive Design</span>
                                <span class="px-3 py-1 bg-navyDark text-xs text-gray-300 rounded border border-gray-700">Web Design</span>
                            </div>
                            <a href="https://sites.google.com/view/iraahmadportfolio/home" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-2 px-5 py-2 rounded-lg bg-accentBlue text-white text-sm font-semibold hover:bg-blue-600 transition shadow-lg shadow-blue-500/20">
                                {{ __('site.projects.view_site') }}
                                <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE SECTION -->
    <section id="experience" class="py-20 px-6 max-w-4xl mx-auto">
        <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-2">{{ __('site.experience.title') }}</h2>
            <div class="w-16 h-1 bg-accentBlue mx-auto rounded-full"></div>
        </div>

        <div class="space-y-8 border-l-2 border-accentBlue/30 pl-6 ml-4">
            <!-- Exp 1 -->
            <div class="relative">
                <span class="absolute -left-[31px] top-1.5 w-4 h-4 rounded-full bg-accentBlue border-4 border-darkBg"></span>
                <span class="text-xs text-neonBlue font-semibold">{{ __('site.experience.exp1_date') }}</span>
                <h3 class="text-xl font-bold text-white">{{ __('site.about.intern') }}</h3>
                <h4 class="text-sm text-gray-400 mb-3">Rosetech Sdn. Bhd., Puchong Selangor</h4>
                <ul class="text-gray-300 text-sm space-y-1 list-disc list-inside">
                    <li>{{ __('site.experience.exp1_li1') }}</li>
                    <li>{{ __('site.experience.exp1_li2') }}</li>
                    <li>{{ __('site.experience.exp1_li3') }}</li>
                </ul>
            </div>

            <!-- Exp 2 -->
            <div class="relative">
                <span class="absolute -left-[31px] top-1.5 w-4 h-4 rounded-full bg-gray-600 border-4 border-darkBg"></span>
                <h3 class="text-xl font-bold text-white">Photography Assistant</h3>
                <h4 class="text-sm text-gray-400 mb-3">Studio Logistics & Inventory</h4>
                <p class="text-gray-300 text-sm">
                    {{ __('site.experience.exp2_desc') }}
                </p>
            </div>
        </div>
    </section>

    <!-- CERTIFICATIONS -->
    <section id="certifications" class="py-20 bg-navyDark/40 px-6 border-t border-gray-800">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-2">{{ __('site.certifications.title') }}</h2>
                <div class="w-16 h-1 bg-accentBlue mx-auto rounded-full"></div>
            </div>

            <div class="mb-12">
                <x-certificate-slideshow :files="$certificates ?? []" />
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                  <div class="p-4 bg-cardBg rounded-lg border border-gray-800 flex items-center gap-4">
                    <i class="fa-solid fa-certificate text-2xl text-neonBlue"></i>
                    <div>
                        <h4 class="text-white font-semibold text-sm">INTERNATIONAL INNOVATION & EXHIBITION FAIR</h4>
                        <p class="text-xs text-gray-400">KOLEJ MARA KULIM 7- 9 APRIL (2026)</p>
                    </div>
</div>
                <div class="p-4 bg-cardBg rounded-lg border border-gray-800 flex items-center gap-4">
                    <i class="fa-solid fa-certificate text-2xl text-neonBlue"></i>
                    <div>
                        <h4 class="text-white font-semibold text-sm">MBOT Qualified Technician</h4>
                        <p class="text-xs text-gray-400">ID: QT25055035-MBOT (2025)</p>
                    </div>
                </div>
                <div class="p-4 bg-cardBg rounded-lg border border-gray-800 flex items-center gap-4">
                    <i class="fa-solid fa-brain text-2xl text-neonBlue"></i>
                    <div>
                        <h4 class="text-white font-semibold text-sm">Google Gemini AI Certification</h4>
                        <p class="text-xs text-gray-400">MDEC & Google Education Malaysia (2025)</p>
                    </div>
                </div>
                <div class="p-4 bg-cardBg rounded-lg border border-gray-800 flex items-center gap-4">
                    <i class="fa-solid fa-server text-2xl text-neonBlue"></i>
                    <div>
                        <h4 class="text-white font-semibold text-sm">Server Hardware & Software Installation</h4>
                        <p class="text-xs text-gray-400">ILP Selandar (2025)</p>
                    </div>
                </div>
                <div class="p-4 bg-cardBg rounded-lg border border-gray-800 flex items-center gap-4">
                    <i class="fa-solid fa-database text-2xl text-neonBlue"></i>
                    <div>
                        <h4 class="text-white font-semibold text-sm">MySQL Beyond Basic Workshop</h4>
                        <p class="text-xs text-gray-400">Nfinity Synergy Solutions (2024)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT & FOOTER -->
    <footer id="contact" class="py-12 bg-darkBg border-t border-gray-800 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-white mb-4">{{ __('site.footer.title') }}</h2>
            <p class="text-gray-400 text-sm mb-6">{{ __('site.footer.text') }}</p>
            <div class="flex justify-center gap-6 mb-8 text-gray-400">
                <a href="mailto:iraahmaddd@gmail.com" class="hover:text-neonBlue text-xl"><i class="fa-solid fa-envelope"></i></a>
                <a href="{{ $githubUrl }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="hover:text-neonBlue text-xl"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/ira-ahmad/" class="hover:text-neonBlue text-xl"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <p class="text-xs text-gray-600">&copy; {{ date('Y') }} Nur Zahira. {{ __('site.footer.rights') }}</p>
        </div>
    </footer>

</body>
</html>