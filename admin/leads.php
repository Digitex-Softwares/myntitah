<?php
require_once '../config.php';
require_once '../includes/functions.php';
if (!is_admin()) redirect('/admin/login.php');

$leads = $pdo->query("SELECT * FROM leads ORDER BY created_at DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><title>Manage Leads | MYTINTAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 flex">
    <main class="flex-1 p-10">
        <h2 class="text-3xl font-bold mb-8">Lead Management</h2>
        
        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-slate-200">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50">
                    <tr class="text-slate-600 text-sm uppercase">
                        <th class="p-4">Contact</th><th class="p-4">Company</th><th class="p-4">Interest</th><th class="p-4">Size</th><th class="p-4">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <?php foreach($leads as $lead): ?>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4 font-semibold"><?php echo $lead['first_name'] . " " . $lead['last_name']; ?><br><span class="text-xs text-slate-400 font-normal"><?php echo $lead['email']; ?></span></td>
                        <td class="p-4"><?php echo $lead['company_name']; ?></td>
                        <td class="p-4"><span class="bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-xs font-bold uppercase"><?php echo $lead['interest']; ?></span></td>
                        <td class="p-4"><?php echo $lead['employee_count']; ?></td>
                        <td class="p-4 text-slate-500 text-sm"><?php echo date('M d, Y', strtotime($lead['created_at'])); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
