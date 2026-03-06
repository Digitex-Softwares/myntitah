<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Smart HR & Payroll</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
</head>
<body class="bg-white text-slate-900">

<header class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
    <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
        <a href="/" class="text-2xl font-black tracking-tighter text-blue-600">
            MYTINTAH<span class="text-slate-900">.</span>
        </a>

        <div class="hidden lg:flex items-center space-x-8 font-semibold text-slate-600">
            <a href="/solutions" class="hover:text-blue-600">Solutions</a>
            <a href="/pricing" class="hover:text-blue-600">Pricing</a>
            <a href="/demo" class="hover:text-blue-600">Resources</a>
        </div>

        <div class="flex items-center space-x-4">
            <span class="hidden md:block text-sm font-bold text-slate-500">
                Sales: <a href="tel:<?php echo SALES_PHONE; ?>" class="text-slate-900"><?php echo SALES_PHONE; ?></a>
            </span>
            <a href="/admin/login" class="text-sm font-bold text-blue-600 hover:underline">Login</a>
            <a href="/pricing" class="bg-blue-600 text-white px-5 py-2.5 rounded-full font-bold text-sm hover:bg-blue-700 transition">
                Get Pricing
            </a>
        </div>
    </nav>
</header>
