<?php 
require_once '../config.php';
include '../includes/header.php'; 

// Grab the intent from the URL (sent via GET from index.php)
$interest = $_GET['interest'] ?? 'payroll';
$size = $_GET['size'] ?? '1-49';

// Define personalized messaging
$labels = [
    'payroll' => 'Simplified Payroll for your team',
    'hcm' => 'Strategic Human Capital Management',
    'peo' => 'Full HR Outsourcing & Compliance',
];
$title = $labels[$interest] ?? 'HR & Payroll Solutions';
?>

<section class="py-16 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto bg-white p-10 rounded-3xl shadow-xl border border-gray-100">
            
            <div class="w-full bg-gray-200 h-1.5 rounded-full mb-8">
                <div class="bg-blue-600 h-1.5 rounded-full" style="width: 66%"></div>
            </div>

            <h1 class="text-3xl font-bold text-slate-900 mb-2"><?php echo $title; ?></h1>
            <p class="text-slate-500 mb-8">Great choice! We've helped thousands of businesses with <strong><?php echo $size; ?></strong> employees thrive. Please tell us a bit about yourself to see pricing.</p>

            <form action="/lead/process.php" method="POST" class="space-y-5">
                <input type="hidden" name="interest" value="<?php echo htmlspecialchars($interest); ?>">
                <input type="hidden" name="size" value="<?php echo htmlspecialchars($size); ?>">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="first_name" placeholder="First Name" required class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
                    <input type="text" name="last_name" placeholder="Last Name" required class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
                </div>

                <input type="email" name="email" placeholder="Work Email Address" required class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
                
                <input type="text" name="company" placeholder="Company Name" required class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">

                <input type="tel" name="phone" placeholder="Phone Number" required class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">

                <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                    Get My Quote &rarr;
                </button>
                
                <p class="text-center text-xs text-slate-400 mt-4">
                    By clicking, you agree to our <a href="#" class="underline">Privacy Policy</a>. We never share your data.
                </p>
            </form>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
