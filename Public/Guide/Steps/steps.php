<?php
include './../../../App/bootstrap.php';
session_start();

// 1. Authentication Check
$logged = $_SESSION['loggeduser'] ?? null;
if (!$logged) { header('Location: /ASSAD/auth/login.php'); exit(); }

?>

<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manage Steps - <?= htmlspecialchars($tour['titre']) ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
                    fontFamily: { "display": ["Inter", "sans-serif"] },
                },
            },
        }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-gray-900 dark:text-gray-100 min-h-screen flex flex-col overflow-x-hidden">
    
    <header class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-[#28392e] bg-surface-light dark:bg-[#111813]">
        <div class="px-6 lg:px-10 py-3 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <h1 class="text-gray-900 dark:text-white text-lg font-bold">ASSAD Guide</h1>
            </div>
            <div class="flex items-center gap-4 sm:gap-8">
                <a class="text-gray-600 dark:text-gray-300 hover:text-primary transition-colors" href="/ASSAD/Guide/Tours/tours.php">My Tours</a>
            </div>
        </div>
    </header>

    <main class="flex-grow flex justify-center py-6 sm:py-10 px-4 sm:px-6 md:px-10 lg:px-40">
        <div class="flex flex-col w-full max-w-6xl gap-8">
            
            <div class="flex flex-wrap gap-2 text-sm">
                <a class="text-gray-500 dark:text-[#9db9a6]" href="/ASSAD/Guide/Tours/tours.php">My Tours</a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-900 dark:text-white font-medium">Itinerary Steps</span>
            </div>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-4 border-b border-gray-200 dark:border-[#28392e]">
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight text-gray-900 dark:text-white">Manage Itinerary</h1>
                    <p class="text-gray-500 dark:text-[#9db9a6] text-base max-w-2xl">
                        Managing experience for: <span class="text-primary font-semibold"><?= htmlspecialchars($tour['titre']) ?></span>
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-1 flex flex-col gap-4">
                    <div class="bg-surface-light dark:bg-surface-dark rounded-xl p-6 shadow-sm border border-gray-200 dark:border-[#28392e] sticky top-24">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">add_location_alt</span>
                            Add New Step
                        </h3>
                        
                        <form action="Actions/add_step.php" method="POST" class="flex flex-col gap-5">
                            <input type="hidden" name="visite_id" value="<?= $visite_id ?>">
                            
                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-[#9db9a6]">Step Title</label>
                                <input required name="titre" class="w-full h-11 px-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary text-sm" placeholder="e.g. Watering Hole" type="text" />
                            </div>
                            
                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-[#9db9a6]">Description</label>
                                <textarea required name="description" class="w-full h-32 p-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary text-sm resize-none" placeholder="Describe what visitors will see..."></textarea>
                            </div>
                            
                            <div class="flex flex-col gap-2">
                                <label class="text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-[#9db9a6]">Duration (Minutes)</label>
                                <div class="relative">
                                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">schedule</span>
                                    <input required name="duree" class="w-full h-11 pl-10 pr-4 rounded-lg bg-gray-50 dark:bg-[#1a2920] border-gray-200 dark:border-[#28392e] text-gray-900 dark:text-white focus:ring-2 focus:ring-primary text-sm" placeholder="15" type="number" min="1" />
                                </div>
                            </div>
                            
                            <div class="pt-2">
                                <button type="submit" class="w-full h-12 rounded-xl bg-surface-dark dark:bg-[#28392e] hover:bg-gray-800 text-white text-sm font-bold transition-all shadow-md flex items-center justify-center gap-2 group">
                                    <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">add</span>
                                    Add Step to Itinerary
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-2 flex flex-col gap-4">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Current Sequence</h3>
                        <span class="text-sm text-gray-500 dark:text-[#9db9a6]">Total Duration: <span class="text-gray-900 dark:text-white font-semibold"><?= $totalDuration ?> mins</span></span>
                    </div>

                    <?php if (count($steps) > 0): ?>
                        <?php foreach ($steps as $index => $step): ?>
                        <div class="group bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-[#28392e] rounded-xl p-4 shadow-sm hover:border-primary/50 transition-all flex items-start sm:items-center gap-4 relative">
                            <div class="text-gray-300 dark:text-[#344a3c] p-1 self-start sm:self-auto mt-1 sm:mt-0">
                                <span class="material-symbols-outlined text-2xl">drag_indicator</span>
                            </div>
                            
                            <div class="size-8 rounded-full bg-gray-100 dark:bg-[#111813] border border-gray-200 dark:border-[#28392e] flex items-center justify-center text-sm font-bold text-gray-700 dark:text-primary shrink-0">
                                <?= $index + 1 ?>
                            </div>
                            
                            <div class="flex-grow min-w-0">
                                <div class="flex flex-wrap items-center gap-x-3 gap-y-1 mb-1">
                                    <h4 class="text-base font-bold text-gray-900 dark:text-white truncate"><?= htmlspecialchars($step['titreetape']) ?></h4>
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 border border-blue-100 dark:border-blue-900/30">
                                        <span class="material-symbols-outlined text-[14px] mr-1">schedule</span>
                                        <?= htmlspecialchars($step['duree_minutes']) ?> mins
                                    </span>
                                </div>
                                <p class="text-sm text-gray-500 dark:text-[#9db9a6] line-clamp-1"><?= htmlspecialchars($step['descriptionetape']) ?></p>
                            </div>
                            
                            <div class="flex items-center gap-1 sm:gap-2 ml-auto pl-2 border-l border-gray-100 dark:border-[#28392e]">
                                
                                <form action="Actions/delete_step.php" method="POST" >
                                    <input type="hidden" name="step_id" value="<?= $step['id_etape'] ?>">
                                    <input type="hidden" name="visite_id" value="<?= $visite_id ?>">
                                    <button type="submit" class="p-2 rounded-lg text-gray-400 dark:text-[#5e7164] hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors" title="Remove Step">
                                        <span class="material-symbols-outlined text-xl">delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="border-2 border-dashed border-gray-200 dark:border-[#28392e] rounded-xl p-8 flex flex-col items-center justify-center text-center text-gray-400">
                            <span class="material-symbols-outlined text-3xl mb-2">playlist_add</span>
                            <span class="text-sm font-medium">No steps added yet. Use the form on the left.</span>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </main>
</body>
</html>