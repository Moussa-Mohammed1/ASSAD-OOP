<?php
include "./../../../App/bootstrap.php";
session_start();
$logged = $_SESSION['loggeduser'] ?? '';
if (isset($_SERVER['REQUEST_METHOD'])  && $_SERVER['REQUEST_METHOD'] == 'GET') {
    $id_vi =  $_GET['id'] ?? '';
    $v = new VisitesGuidees();

    $v->cancelVisite($id_vi);
}
?>

<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>My Guided Tours - Virtual Zoo CAN 2025</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
    <!-- Top Navbar -->
    <header
        class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-[#28392e] bg-surface-light dark:bg-[#111813]">
        <div class="px-6 lg:px-10 py-3 flex items-center justify-between">
            <div class="flex items-center gap-3">
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
                    <h1 class="text-white text-base font-bold leading-tight truncate">ASSAD Guide</h1>
                    <p class="text-[#9db9a6] text-xs font-normal truncate">Virtual Zoo Portal</p>
                </div>
            </div>
            <div class="flex items-center gap-4 sm:gap-8">
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors"
                        href="/ASSAD_V2/Public/Guide/dashboard.php">Dashboard</a>
                    <a class="text-primary text-sm font-medium" href="/ASSAD_V2/Public/Guide/Tours/tours.php">My Tours</a>
                </nav>
                <a href="/ASSAD_V2/Public/Guide/Tours/create.php"
                    class="hidden sm:inline-flex items-center justify-center rounded-lg h-9 px-4 bg-primary text-[#111813] text-sm font-bold">Create
                    Tour</a>
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-transparent hover:border-primary transition-colors cursor-pointer"
                    data-alt="User profile avatar showing a smiling guide in uniform"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCoCV4spzIBmv7a6A9BMjRgr_a0agYRa3LNyDSYHzzGnguO62dec_My0oka-Oxvi_uaolPsu0PM5LiuCTdcutulEdx2zQ49D4wy4z5h0fQ9mhp3Z8iKFoS0m47NIlOsAnEN2C8cDVCtr7YHZcgQcqlAFbBghwbmb5o6ckkCC8blFRwJKx71mavngHe1PiHJ8S3ZKp_dlOEIGgzYWrcUjAjgo9tk0yo2aBJ9z6x1CtkdEUG-yDr_hnHiDheFPxMH4gXm_yyiO8GCR7ZW");'>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="flex-grow flex justify-center py-6 sm:py-10 px-4 sm:px-6 md:px-10 lg:px-40">
        <div class="flex flex-col w-full max-w-6xl gap-6">
            <div class="flex flex-wrap gap-2 text-sm">
                <a class="text-gray-500 dark:text-[#9db9a6] hover:underline"
                    href="/ASSAD_V2/Public/Guide/dashboard.php">dashboard</a>
                <span class="text-gray-400 dark:text-[#5e7164]">/</span>
                <span class="text-gray-900 dark:text-white font-medium">My Guided Tours</span>
            </div>
            <div
                class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-2 border-b border-gray-200 dark:border-[#28392e]">
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight text-gray-900 dark:text-white">My Guided
                        Tours</h1>
                    <p class="text-gray-500 dark:text-[#9db9a6] text-base max-w-2xl">
                        Manage your upcoming safari schedules, track bookings, and update tour details for the CAN 2025
                        visitors.
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <?php
                if (!$logged) {
                    echo '<div class="p-6 bg-yellow-50 dark:bg-[#2f2f2f] rounded">Please <a class="text-primary" href="/ASSAD_V2/Public/Auth/login.php">login</a> to view your tours.</div>';
                } else {
                    $visiteObj = new VisitesGuidees();
                    $tours = $visiteObj->getAllVisitesByGuide($logged->id_user);

                    if (!$tours) {
                        echo '<div class="p-10 text-center bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-[#28392e]">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 dark:bg-gray-800 mb-4">
                                    <span class="material-symbols-outlined text-3xl text-gray-400">tour</span>
                                </div>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-1">No tours found</h3>
                                <p class="text-gray-500 dark:text-[#9db9a6] mb-6">You haven\'t created any guided tours yet.</p>
                                <a href="/ASSAD_V2/Public/Guide/Tours/create.php" class="inline-flex items-center justify-center px-4 py-2 bg-primary text-[#111813] text-sm font-bold rounded-lg hover:bg-opacity-90 transition-all">
                                    Create First Tour
                                </a>
                              </div>';
                    } else {
                        echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">';
                        foreach ($tours as $tour) {
                            $statusColor = '';
                            switch ($tour->status) {
                                case 'CONFIRMED':
                                case 'ONLINE':
                                    $statusColor = 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400';
                                    break;
                                case 'PENDING':
                                    $statusColor = 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400';
                                    break;
                                case 'CANCELLED':
                                case 'OFFLINE':
                                    $statusColor = 'bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400';
                                    break;
                                default:
                                    $statusColor = 'bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-400';
                                    break;
                            }

                            echo '
                            <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-[#28392e] shadow-sm overflow-hidden hover:shadow-md transition-shadow group">
                                <div class="p-5">
                                    <div class="flex justify-between items-start mb-4">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ' . $statusColor . '">
                                            ' . $tour->status . '
                                        </span>
                                        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <a href="edit.php?id=' . $tour->id_visite . '" class="text-gray-400 hover:text-primary transition-colors">
                                                <span class="material-symbols-outlined text-xl">edit</span>
                                            </a>
                                            <a href="?id=' . $tour->id_visite . '" class="text-gray-400 hover:text-red-500 transition-colors" >
                                                <span class="material-symbols-outlined text-xl">cancel</span>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-1">' . $tour->titre . '</h3>
                                    
                                    <div class="flex flex-col gap-2 text-sm text-gray-600 dark:text-[#9db9a6] mb-4">
                                        <div class="flex items-center gap-2">
                                            <span class="material-symbols-outlined text-lg">calendar_today</span>
                                            <span>' . date('M d, Y • H:i', strtotime($tour->dateheure)) . '</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="material-symbols-outlined text-lg">schedule</span>
                                            <span>' . $tour->duree . ' mins</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="material-symbols-outlined text-lg">translate</span>
                                            <span>' . $tour->langue . '</span>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-[#28392e]">
                                        <div class="flex items-center gap-1">
                                            <span class="text-lg font-bold text-primary">$' . number_format($tour->prix, 2) . '</span>
                                            <span class="text-xs text-gray-500">/ person</span>
                                        </div>
                                        <div class="flex items-center gap-1 text-xs text-gray-500 dark:text-[#5e7164]">
                                            <span class="material-symbols-outlined text-sm">group</span>
                                            <span>Max ' . $tour->capacite_max . '</span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>