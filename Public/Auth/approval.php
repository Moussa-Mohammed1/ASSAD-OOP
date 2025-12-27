<?php
include './../../App/bootstrap.php';
session_start();
$logged = $_SESSION['loggeduser'];
if (!$logged || $logged->approved == 1) {
    header('Location: ./login.php');
    exit();
}

?>

<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Registration Step 3: Awaiting Approval - Virtual Zoo ASSAD</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="stylesheet" href="/ASSAD/assets/css/styles.css">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e278",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                        "surface-dark": "#1c3024",
                        "border-dark": "#29382f",
                        "text-secondary": "#9eb7a8"
                    },
                    fontFamily: {
                        "display": ["Inter", "Noto Sans", "sans-serif"],
                        "body": ["Inter", "Noto Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display antialiased">
   
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-border-dark bg-background-dark px-6 py-4 lg:px-10">
            <div class="flex items-center gap-4 text-white">
                <div class="size-8 text-primary">
                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                        transform="matrix(-1, 0, 0, 1, 0, 0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>lion</title>
                            <g id="lion">
                                <circle cx="36.5" cy="25.5" r="21.5" style="fill:#e5efef"></circle>
                                <circle cx="13" cy="7" r="2"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </circle>
                                <circle cx="56.044" cy="22.014" r="1.069" style="fill:#4c241d"></circle>
                                <line x1="53" y1="5" x2="56" y2="8"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <line x1="56" y1="5" x2="53" y2="8"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <polygon points="9 17 21 17 21 19 15 28 5 27 3 22 7 20 9 17"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </polygon>
                                <path d="M16,34V55h-.862A2.138,2.138,0,0,0,13,57.138V59h7l2.5-15.5"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <path
                                    d="M40.007,42s0,6,7,8l-3,5h-.862a2.138,2.138,0,0,0-2.138,2.138V59h6l4-10s7-20-7-21"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <path
                                    d="M20,41V55h-.862A2.138,2.138,0,0,0,17,57.138V59h7l2.5-15.5A14.594,14.594,0,0,0,34,45c5.27-.6,11.532-3.578,15-3a7.966,7.966,0,0,0,6.5,7.5l-1,5.5h-.862A2.138,2.138,0,0,0,51.5,57.138V59h6l2-10.5-1-4s8-16-6-17-17-1-17-1"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <path
                                    d="M38,15l1.138.853A10.729,10.729,0,0,0,45.578,18H58a5,5,0,0,1,5,5v1a5,5,0,0,1-5,5h-.283"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <ellipse cx="35.5" cy="12" rx="2.5" ry="3.703"
                                    transform="translate(0.223 24.639) rotate(-38.389)"
                                    style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </ellipse>
                                <circle cx="11.044" cy="20.014" r="1.069" style="fill:#4c241d"></circle>
                                <line x1="49" y1="42" x2="49" y2="38"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <line x1="5" y1="59" x2="35" y2="59"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <line x1="39" y1="59" x2="62" y2="59"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <path
                                    d="M41,26l-6.74-2.384L29.7,16.324a8.578,8.578,0,0,0-8.089-4c-1.563.147-3.444.361-5.613.671-7,1-7,4-7,4h8.5a1.5,1.5,0,0,1,0,3H16v2l-5,5H5l1,3h4L20,41,31,31l8.4-1.778C40,29,41.888,27.331,41,26Z"
                                    style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <polyline points="27 24 27 27 31 31"
                                    style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </polyline>
                                <polyline points="20 25 20 30 25.678 35.838"
                                    style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </polyline>
                            </g>
                        </g>
                    </svg>
                </div>
                <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">
                    Virtual Zoo ASSAD <span class="font-normal text-text-secondary">| CAN 2025</span>
                </h2>
            </div>
            <a href="./../logout.php" class="text-white hover:text-red-500 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                </svg>
            </a>
        </header>

        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 md:px-40 flex flex-1 justify-center py-10">
                <div class="layout-content-container flex flex-col max-w-[640px] flex-1 gap-8">
                    <div class="flex flex-col gap-3">
                        <div class="flex gap-6 justify-between items-end">
                            <p class="text-white text-base font-bold leading-normal">Step 3 of 3: Awaiting Approval</p>
                            <span class="text-primary text-sm font-bold">100%</span>
                        </div>
                        <div class="rounded-full bg-surface-dark h-3 overflow-hidden">
                            <div class="h-full rounded-full bg-primary" style="width: 100%;"></div>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-xl border border-border-dark bg-surface-dark p-6 shadow-xl">
                        <div class="flex flex-col items-center gap-8">
                            <div class="relative w-full aspect-video max-h-[240px] rounded-lg overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-t from-surface-dark/90 to-transparent z-10">
                                </div>
                                <div class="bg-center bg-no-repeat bg-cover w-full h-full transform transition-transform duration-700 group-hover:scale-105"
                                    data-alt="Majestic lion resting in the African savannah at sunset"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA53AdRPtYR4lax8TUAPVoJ-d9d47Rev8L4GTBZFypTL-g_XKQZhGSTZ-ahsk_ZN3cLHl5u7IXJMQmkEpNHjCE3eQH5EeIESaZlRLloZVJ9s89Qh8SXwOolEI5jX4zjJdxlRAbgOJY2EI0g58iOgAIAqhgyly5JJIUjTnIiLDi7ACfyBTicCFDsQ7_QMbf5aT152OVCIjAHI_86MKZgh1IX4mO-A04ZqZcLie8VqUhMO4toYS2dalo9rWpYaen6Skv6l5ZvFIQAAclg");'>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 z-20 flex justify-center translate-y-1/2">
                                    <div
                                        class="flex items-center justify-center size-16 rounded-full bg-primary text-background-dark shadow-lg ring-8 ring-surface-dark">
                                        <span class="material-symbols-outlined"
                                            style="font-size: 32px; font-weight: 700;">hourglass_top</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex max-w-[480px] flex-col items-center gap-4 mt-6 text-center px-4 pb-4">
                                <h1 class="text-white text-2xl font-bold leading-tight tracking-[-0.015em]">Registration
                                    Awaiting Approval</h1>
                                <div class="space-y-5 text-text-secondary text-sm md:text-base leading-relaxed">
                                    <p>
                                        Your registration for the <span class="text-white font-medium">CAN 2025 Virtual
                                            Zoo</span> has been successfully recorded.
                                    </p>
                                    <div
                                        class="bg-background-dark/60 p-5 rounded-lg border border-border-dark/50 flex flex-col gap-3">
                                        <div class="flex items-center justify-center gap-2 text-primary font-bold">
                                            <span class="material-symbols-outlined">admin_panel_settings</span>
                                            <span>Approval Required</span>
                                        </div>
                                        <p class="text-sm">
                                            For security reasons, an administrator must review and approve your account
                                            details before you can access the guided tours and animal exhibits.
                                        </p>
                                    </div>
                                    <p class="text-white font-medium">
                                        You will receive an email notification at your registered address as soon as
                                        your account is approved.
                                    </p>
                                    <p class="text-xs text-text-secondary italic">
                                        You may close this window. No further action is required at this time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="@container">
                        <div
                            class="flex flex-col items-start justify-between gap-4 rounded-lg border border-border-dark bg-background-dark p-5 @[480px]:flex-row @[480px]:items-center">
                            <div class="flex items-start gap-4">
                                <div class="rounded-full bg-surface-dark p-3 text-primary hidden @[480px]:block">
                                    <span class="material-symbols-outlined">support_agent</span>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="text-white text-base font-bold leading-tight">Questions?</p>
                                    <p class="text-text-secondary text-sm font-normal leading-normal">If you haven't
                                        heard from us within 24 hours.</p>
                                </div>
                            </div>
                            <a class="group text-sm font-bold leading-normal tracking-[0.015em] flex items-center gap-2 text-primary hover:text-white transition-colors"
                                href="#">
                                Contact Support
                                <span class="material-symbols-outlined transition-transform group-hover:translate-x-1"
                                    style="font-size: 20px;">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer
            class="flex flex-col gap-6 px-5 py-10 text-center border-t border-border-dark bg-background-dark mt-auto">
            <div class="flex flex-wrap items-center justify-center gap-6 md:gap-12">
                <a class="text-text-secondary hover:text-primary transition-colors text-sm font-normal leading-normal"
                    href="#">Privacy Policy</a>
                <a class="text-text-secondary hover:text-primary transition-colors text-sm font-normal leading-normal"
                    href="#">Terms of Service</a>
                <a class="text-text-secondary hover:text-primary transition-colors text-sm font-normal leading-normal"
                    href="#">CAN 2025 Official Site</a>
            </div>
            <div class="flex flex-wrap justify-center gap-6">
                <a class="text-text-secondary hover:text-primary transition-colors" href="#">
                    <svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                        </path>
                    </svg>
                </a>
                <a class="text-text-secondary hover:text-primary transition-colors" href="#">
                    <svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036c-2.148 0-2.797 1.66-2.797 3.54v1.237h3.236l-1.141 3.667h-2.095v7.98h-5.017z">
                        </path>
                    </svg>
                </a>
                <a class="text-text-secondary hover:text-primary transition-colors" href="#">
                    <svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z">
                        </path>
                    </svg>
                </a>
            </div>
            <p class="text-text-secondary text-sm font-normal leading-normal">© 2025 Virtual Zoo ASSAD. All rights
                reserved.</p>
        </footer>
    </div>

</body>

</html>
<script src="/ASSAD/assets/js/preloader.js" defer></script>