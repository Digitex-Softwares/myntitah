<?php
require_once '../config.php';
require_once '../includes/functions.php';

if (is_admin()) redirect('/admin/dashboard.php');

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = clean($_POST['email']);
    $password = $_POST['password'];

    // Query to find the admin
    $stmt = $pdo->prepare("SELECT * FROM admins WHERE email = ?");
    $stmt->execute([$email]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['name'];
        redirect('/admin/dashboard.php');
    } else {
        $error = "Invalid credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><title>Admin Login | MYTINTAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-slate-800">Admin Portal</h2>
        <?php if($error): ?>
            <div class="bg-red-100 text-red-600 p-3 rounded-lg mb-4 text-sm"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" class="space-y-4">
            <input type="email" name="email" placeholder="Email" required class="w-full p-3 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500">
            <input type="password" name="password" placeholder="Password" required class="w-full p-3 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="w-full bg-slate-900 text-white py-3 rounded-lg font-bold hover:bg-black transition">Login</button>
        </form>
    </div>
</body>
</html>
