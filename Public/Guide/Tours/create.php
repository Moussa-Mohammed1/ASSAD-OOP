<?php
include "./../../../App/bootstrap.php";
session_start();
$logged = $_SESSION['loggeduser'] ?? null;
if (isset($_SERVER['REQUEST_METHOD'])  && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sub'])) {
    $id_guide = $_POST['id_guide'];
    $titre = $_POST['titre'];
    $date = $_POST['datetime'];
    $langue = $_POST['langue'];
    $duree = $_POST['duree'];
    $status = 'ACTIVE';
    $capacite_max = $_POST['capacite_max'];
    $prix = $_POST['prix'];
    $visite = new VisitesGuidees($id_guide, $titre, $date, $langue, $capacite_max, $status, $duree, $prix);
    $new_id = $visite->addVisite();
    header('Location: ./../Steps/steps.php?id=' .  $new_id );
    exit();
}
?>

<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create Guided Tour - Virtual Zoo CAN 2025</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#11d452",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102216",
                        "surface-dark": "#1c2e22",
                        "surface-light": "#ffffff",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
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

<body
    class="bg-background-light dark:bg-background-dark font-display text-gray-900 dark:text-gray-100 min-h-screen flex flex-col overflow-x-hidden">
    <header
        class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-[#28392e] bg-surface-light dark:bg-[#111813]">
        <div class="px-6 lg:px-10 py-3 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div
                    class="bg-center bg-no-repeat bg-cover rounded-full h-10 w-10 shrink-0 shadow-lg shadow-primary/20">
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
                <div class="flex flex-col overflow-hidden">
                    <h1
                        class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] hidden sm:block">
                        ASSAD Guide</h1>
                </div>
            </div>
            <div class="flex items-center gap-4 sm:gap-8">
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors"
                        href="/ASSAD_V2/Public/Guide/dashboard.php">Home</a>
                    <a class="text-primary text-sm font-medium" href="/ASSAD_V2/Public/Guide/Tours/tours.php">My Tours</a>
                </nav>
                <button
                    class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-9 px-4 bg-primary text-[#111813] text-sm font-bold shadow-lg hover:bg-opacity-90 transition-all">
                    <span>Create Tour</span>
                </button>
                <a href="/ASSAD_V2/Public/Auth/logout.php" title="Logout"
                    class="hidden md:inline-flex items-center justify-center size-9 rounded-lg text-gray-600 dark:text-gray-300 hover:text-red-500 transition-colors">
                    <span class="material-symbols-outlined">logout</span>
                </a>
                <a href="#" title="Profile">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-transparent hover:border-primary transition-colors cursor-pointer"
                        data-alt="User profile avatar showing a smiling guide in uniform"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCoCV4spzIBmv7a6A9BMjRgr_a0agYRa3LNyDSYHzzGnguO62dec_My0oka-Oxvi_uaolPsu0PM5LiuCTdcutulEdx2zQ49D4wy4z5h0fQ9mhp3Z8iKFoS0m47NIlOsAnEN2C8cDVCtr7YHZcgQcqlAFbBghwbmb5o6ckkCC8blFRwJKx71mavngHe1PiHJ8S3ZKp_dlOEIGgzYWrcUjAjgo9tk0yo2aBJ9z6x1CtkdEUG-yDr_hnHiDheFPxMH4gXm_yyiO8GCR7ZW");'>
                    </div>
                </a>
            </div>
        </div>
    </header>
    <main class="flex-grow flex justify-center py-6 sm:py-10 px-4 sm:px-6 md:px-10 lg:px-40">
        <div class="flex flex-col w-full max-w-4xl gap-8">
            <div class="flex flex-wrap gap-2 text-sm">
                <a class="text-gray-500 dark:text-[#9db9a6] hover:underline" href="/ASSAD_V2/Public/Guide/dashboard.php">Home</a>
                <span class="text-gray-400 dark:text-[#5e7164]">/</span>
                <a class="text-gray-500 dark:text-[#9db9a6] hover:underline" href="/ASSAD_V2/Public/Guide/Tours/tours.php">My Guided Tours</a>
                <span class="text-gray-400 dark:text-[#5e7164]">/</span>
                <span class="text-gray-900 dark:text-white font-medium">Create Tour</span>
            </div>
            <div class="flex flex-col gap-2 pb-2 border-b border-gray-200 dark:border-[#28392e]">
                <h1 class="text-3xl md:text-4xl font-black tracking-tight text-gray-900 dark:text-white">Create Guided
                    Tour</h1>
                <p class="text-gray-500 dark:text-[#9db9a6] text-base max-w-2xl">
                    Fill in the details below to schedule a new virtual safari. Once created, you'll be able to add
                    interactive stops and animal encounters.
                </p>
            </div>
            <div
                class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-gray-200 dark:border-[#28392e] overflow-hidden">
                <div
                    class="p-6 md:p-8 bg-gray-50/50 dark:bg-[#1a2920]/30 border-b border-gray-200 dark:border-[#28392e] flex items-center gap-3">
                    <div class="size-10 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">edit_document</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Basic Information</h3>
                        <p class="text-sm text-gray-500 dark:text-[#9db9a6]">Step 1 of 2: Tour Details</p>
                    </div>
                </div>
                <form action="" method="POST" class="p-6 md:p-8 space-y-8">
                    <div class="grid grid-cols-1 gap-6">
                        <input type="hidden" name="id_guide" value="<?= $logged->id_user ?>">
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-gray-100 mb-2"
                                for="title">Tour Title</label>
                            <input
                                class="w-full h-12 px-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-[#6b8273] focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow"
                                id="title" name="titre" placeholder="e.g. Lions of the Serengeti: Sunset Prowl"
                                type="text" />
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-gray-100 mb-2"
                                for="description">Description</label>
                            <textarea
                                class="w-full p-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-[#6b8273] focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow resize-none"
                                id="description" name="description"
                                placeholder="Describe the journey, animals to be seen, and unique experiences..."
                                rows="4"></textarea>
                        </div>
                    </div>
                    <div class="border-t border-gray-100 dark:border-[#28392e]"></div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-gray-100 mb-2"
                                for="date">Start Date</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-[#6b8273]">calendar_today</span>
                                <input
                                    class="w-full h-11 pl-10 pr-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent"
                                    id="date" name="datetime" type="datetime-local" />
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-gray-100 mb-2"
                                for="time">Start Time</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-[#6b8273]">schedule</span>
                                <input
                                    class="w-full h-11 pl-10 pr-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent"
                                    id="time" name="time" type="time" />
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-gray-100 mb-2"
                                for="duration">Duration (minutes)</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-[#6b8273]">timelapse</span>
                                <input
                                    class="w-full h-11 pl-10 pr-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-[#6b8273] focus:ring-2 focus:ring-primary focus:border-transparent"
                                    id="duration" name="duree" placeholder="45" type="number" />
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-gray-100 mb-2"
                                for="language">Language</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-[#6b8273]">translate</span>

                                <select
                                    class="w-full h-11 pl-10 pr-10 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent appearance-none"
                                    id="language" name="langue">
                                    <option>English</option>
                                    <option>French</option>
                                    <option>Spanish</option>
                                    <option>Portuguese</option>
                                </select>
                                <span
                                    class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">expand_more</span>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-gray-100 mb-2"
                                for="price">Price ($)</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-[#6b8273]">payments</span>
                                <input
                                    class="w-full h-11 pl-10 pr-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-[#6b8273] focus:ring-2 focus:ring-primary focus:border-transparent"
                                    id="price" name="prix" placeholder="0.00" step="0.01" type="number" />
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-900 dark:text-gray-100 mb-2"
                                for="capacity">Max Capacity</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-[#6b8273]">groups</span>
                                <input
                                    class="w-full h-11 pl-10 pr-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-[#6b8273] focus:ring-2 focus:ring-primary focus:border-transparent"
                                    id="capacity" name="capacite_max" placeholder="e.g. 20" type="number" />
                            </div>
                        </div>
                    </div>
                    <div
                        class="pt-6 mt-6 border-t border-gray-100 dark:border-[#28392e] flex flex-col-reverse md:flex-row md:items-center justify-between gap-4">
                        <p class="text-sm text-gray-500 dark:text-[#9db9a6] italic">
                            <span class="font-bold text-primary">*</span> You can configure tour steps after saving.
                        </p>
                        <div class="flex flex-col md:flex-row gap-4">
                            <a href="/ASSAD_V2/Public/Guide/Tours/tours.php"
                                class="flex items-center justify-center px-6 h-12 rounded-xl border border-gray-300 dark:border-[#28392e] text-gray-700 dark:text-white font-semibold hover:bg-gray-100 dark:hover:bg-[#28392e] transition-colors">
                                Cancel
                            </a>
                            <button
                                class="px-8 h-12 rounded-xl bg-primary text-[#111813] font-bold shadow-lg shadow-primary/20 hover:bg-opacity-90 hover:scale-[1.02] active:scale-[0.98] transition-all flex items-center justify-center gap-2"
                                type="submit"
                                name="sub">
                                <span>Create &amp; Add Steps</span>
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>