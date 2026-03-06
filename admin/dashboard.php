<?php
require_once '../config.php';
require_once '../includes/functions.php';
if (!is_admin()) redirect('/admin/login.php');

// Fetch simple stats
$total_leads = $pdo->query("SELECT COUNT(*) FROM leads")->fetchColumn();
$recent_leads = $pdo->query("SELECT * FROM leads ORDER BY created_at DESC LIMIT 5")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><title>Dashboard | MYTINTAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 flex">
    <aside class="w-64 bg-slate-900 h-screen text-white p-6 sticky top-0">
        <h1 class="text-xl font-black mb-10 tracking-tighter">MYTINTAH ADMIN</h1>
        <nav class="space-y-4">
            <a href="/admin/dashboard.php" class="block font-bold text-blue-400">Dashboard</a>
            <a href="/admin/leads.php" class="block hover:text-blue-400">Manage Leads</a>
            <a href="/admin/logout.php" class="block text-slate-400 pt-10 text-sm italic">Logout</a>
        </nav>
    </aside>

    <main class="flex-1 p-10">
        <header class="flex justify-between items-center mb-10">
            <h2 class="text-3xl font-bold">Overview</h2>
            <div class="bg-blue-600 text-white px-4 py-2 rounded-lg font-bold">Total Leads: <?php echo $total_leads; ?></div>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                <h3 class="font-bold mb-4">Recent Submissions</h3>
                <table class="w-full text-left text-sm">
                    <thead><tr class="text-slate-400 border-b"><th class="pb-2">Company</th><th class="pb-2">Status</th></tr></thead>
                    <tbody>
                        <?php foreach($recent_leads as $lead): ?>
                        <tr class="border-b"><td class="py-3"><?php echo $lead['company_name']; ?></td><td><span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">New</span></td></tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 flex items-center justify-center text-slate-400 italic">
                Analytics Graph Coming Soon
            </div>
        </div>
    </main>
</body>
</html>
