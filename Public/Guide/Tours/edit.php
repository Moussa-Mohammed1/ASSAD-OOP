<?php
include "./../../../App/bootstrap.php";
session_start();
$logged = $_SESSION['loggeduser'] ?? null;
if (isset($_SERVER['REQUEST_METHOD'])  && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_visite = $_POST['id_visite'];
    $titre = $_POST['titre'];
    $date = $_POST['datetime'];
    $langue = $_POST['langue'];
    $duree = $_POST['duree'];
    $status = $_POST['status'];
    $capacite_max = $_POST['capacite_max'];
    $prix = $_POST['prix'];
    $update = new VisitesGuidees();
    $update->updateVisite($id_visite, $titre, $date, $langue, $capacite_max, $status, $duree, $prix);
    header('Location: ./tours.php');
    exit();
}
if (isset($_SERVER['REQUEST_METHOD'])  && $_SERVER['REQUEST_METHOD'] == 'GET') {
    $id_visite = $_GET['id'] ?? '';
    if ($id_visite) {
        $v = new VisitesGuidees();
        $visite = $v->getVisiteById($id_visite);
    }
} else {
    header('Location: ./tours.php');
    exit();
}
?>
<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Edit Guided Tour - Virtual Zoo CAN 2025</title>
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
        <div class="flex flex-col w-full max-w-4xl gap-6">
            <div class="flex flex-wrap gap-2 text-sm">
                <a class="text-gray-500 dark:text-[#9db9a6] hover:underline" href="/ASSAD_V2/Public/Guide/dashboard.php">Home</a>
                <span class="text-gray-400 dark:text-[#5e7164]">/</span>
                <a class="text-gray-500 dark:text-[#9db9a6] hover:underline" href="/ASSAD_V2/Public/Guide/Tours/tours.php">My Guided Tours</a>
                <span class="text-gray-400 dark:text-[#5e7164]">/</span>
                <span class="text-gray-900 dark:text-white font-medium">Edit Tour</span>
            </div>
            <div
                class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-2 border-b border-gray-200 dark:border-[#28392e]">
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight text-gray-900 dark:text-white">Edit Guided
                        Tour</h1>
                    <p class="text-gray-500 dark:text-[#9db9a6] text-base max-w-2xl">
                        Modify details for <span class="text-yellow-500  font-semibold">"<?= $visite->titre ?> "</span>.
                    </p>
                </div>
                <div
                    class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary text-sm font-bold shrink-0">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <?= $visite->status ?>
                </div>
            </div>
            <div
                class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-gray-200 dark:border-[#28392e] overflow-hidden">

                <div class="p-6 md:p-8">
                    <form action="" method="POST" class="flex flex-col gap-8">
                        <input type="hidden" name="id_visite" value="<?= $visite->id_visite ?>" />
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-1 md:col-span-2">
                                <label class="block text-sm font-bold text-gray-900 dark:text-gray-100 mb-2">Tour
                                    Title</label>
                                <input name="titre"
                                    class="w-full h-11 px-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-[#6b8273] focus:ring-2 focus:ring-primary focus:border-transparent text-sm font-medium transition-all shadow-sm"
                                    type="text" value="<?= $visite->titre ?>" />
                            </div>

                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-900 dark:text-gray-100 mb-2">Language</label>
                                <div class="relative">
                                    <span
                                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-[#9db9a6]">translate</span>
                                    <select name="langue"
                                        class="w-full h-11 pl-10 pr-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent text-sm appearance-none cursor-pointer">
                                        <option <?= $visite->langue === 'English' ? 'selected' : '' ?>>English</option>
                                        <option <?= $visite->langue === 'French' ? 'selected' : '' ?>>French</option>
                                        <option <?= $visite->langue === 'Portuguese' ? 'selected' : '' ?>>Portuguese</option>
                                        <option <?= $visite->langue === 'Spanish' ? 'selected' : '' ?>>Spanish</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-bold text-gray-900 dark:text-gray-100 mb-2">Status</label>
                                <div class="relative">
                                    <span
                                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 dark:text-[#9db9a6]">info</span>
                                    <select name="status"
                                        class="w-full h-11 pl-10 pr-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent text-sm appearance-none cursor-pointer">
                                        <option value="ONLINE" <?= $visite->status === 'ACTIVE' ? 'selected' : '' ?>>ACTIVE</option>
                                        <option value="OFFLINE" <?= $visite->status === 'OFFLINE' ? 'selected' : '' ?>>OFFLINE</option>
                                        <option value="PENDING" <?= $visite->status === 'PENDING' ? 'selected' : '' ?>>PENDING</option>
                                        <option value="CANCELLED" <?= $visite->status === 'CANCELLED' ? 'selected' : '' ?>>CANCELLED</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-5 rounded-xl bg-gray-50 dark:bg-[#15231b] border border-gray-200 dark:border-[#28392e]">
                            <h3
                                class="text-sm font-bold text-gray-900 dark:text-white mb-4 flex items-center gap-2 uppercase tracking-wide">
                                <span class="material-symbols-outlined text-primary text-lg">calendar_clock</span>
                                Schedule &amp; Logistics
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                                <div>
                                    <label
                                        class="block text-xs font-semibold text-gray-500 dark:text-[#9db9a6] mb-1.5 uppercase">Date</label>
                                    <input name="datetime"
                                        class="w-full h-10 px-3 rounded-lg bg-white dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent text-sm [color-scheme:light] dark:[color-scheme:dark]"
                                        type="datetime-local" value="<?= $visite->dateheure ?>" />
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-semibold text-gray-500 dark:text-[#9db9a6] mb-1.5 uppercase">Duration
                                        (min)</label>
                                    <input name="duree"
                                        class="w-full h-10 px-3 rounded-lg bg-white dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent text-sm"
                                        type="number" value="<?= $visite->duree ?>" />
                                </div>
                                <div>
                                    <label
                                        class="block text-xs font-semibold text-gray-500 dark:text-[#9db9a6] mb-1.5 uppercase">Price
                                        ($)</label>
                                    <div class="relative">
                                        <span
                                            class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 font-medium">$</span>
                                        <input name="prix"
                                            class="w-full h-10 pl-6 pr-3 rounded-lg bg-white dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent text-sm font-semibold"
                                            type="number" value="<?= $visite->prix ?? '0' ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 pt-4 border-t border-gray-200 dark:border-[#28392e]">
                                <div class="flex flex-col sm:flex-row sm:items-end gap-4 justify-between">
                                    <div class="w-full sm:w-1/3">
                                        <label
                                            class="block text-xs font-semibold text-gray-500 dark:text-[#9db9a6] mb-1.5 uppercase">Max
                                            Capacity</label>
                                        <input name="capacite_max"
                                            class="w-full h-10 px-3 rounded-lg bg-white dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent text-sm"
                                            type="number" value="<?= $visite->capacite_max ?>" />
                                    </div>
                                    <div class="flex-1">
                                        <div
                                            class="flex justify-between text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-[#9db9a6] mb-2">
                                            <span>Current Bookings: <?php

                                                                    $r = new Reservation();
                                                                    $total = $r->getAllReservationByvisite($visite->id_visite);
                                                                    echo $total ?>
                                                Visitors</span>
                                        </div>
                                        <div
                                            class="w-full h-2 bg-gray-200 dark:bg-[#111813] rounded-full overflow-hidden">
                                            <div class="h-full bg-primary rounded-full" style="width: <?php
                                                                                                        echo ($total / $visite->capacite_max) * 100;
                                                                                                        ?>%"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="pt-6 border-t border-gray-200 dark:border-[#28392e] flex flex-col-reverse sm:flex-row justify-between items-center gap-4">
                            <a
                                href="/ASSAD_V2/Public/Guide/Tours/tours.php"
                                class="w-full sm:w-auto px-5 h-11 rounded-lg text-red-500 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10 font-bold text-sm transition-colors flex items-center justify-center gap-2 group"
                                type="button">
                                <span
                                    class="material-symbols-outlined group-hover:scale-110 transition-transform">cancel</span>
                                Cancel
                            </a>
                            <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                                <button

                                    class="w-full sm:w-auto px-8 h-11 rounded-lg bg-primary text-[#111813] font-bold text-sm hover:bg-opacity-90 shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2"
                                    type="submit">
                                    <span class="material-symbols-outlined">save</span>
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>