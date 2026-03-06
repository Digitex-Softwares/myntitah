<?php
require_once 'config.php';
include 'includes/header.php'; 
?>

<section class="bg-slate-50 py-16 lg:py-24 border-b border-gray-200">
    <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center">
        
        <div class="lg:w-1/2 mb-12 lg:mb-0">
            <h1 class="text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight mb-6">
                Experience better <span class="text-blue-600">HR and payroll</span> with MYTINTAH.
            </h1>
            <p class="text-xl text-slate-600 mb-8 max-w-lg">
                From 1 to 1,000+ employees, we help you automate compliance and empower your people.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="pages/pricing.php" class="bg-blue-600 text-white px-8 py-4 rounded-full font-bold text-center hover:bg-blue-700 transition">Get Pricing</a>
                <a href="tel:8002255237" class="border-2 border-slate-900 text-slate-900 px-8 py-4 rounded-full font-bold text-center hover:bg-slate-900 hover:text-white transition">Talk to Sales</a>
            </div>
        </div>

        <div class="lg:w-1/2 w-full max-w-md bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
            <h3 class="text-2xl font-bold mb-6 text-slate-800 text-center">Find your solution</h3>
            
            <form action="lead/questionnaire.php" method="GET" class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">I am interested in...</label>
                    <select name="interest" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                        <option value="payroll">Payroll Services</option>
                        <option value="hcm">Human Capital Management (HCM)</option>
                        <option value="peo">HR Outsourcing (PEO)</option>
                        <option value="time">Time & Attendance</option>
                        <option value="benefits">Employee Benefits</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">My business size is...</label>
                    <div class="grid grid-cols-1 gap-3">
                        <button type="button" onclick="setSize('1-49')" class="size-btn border p-3 rounded-lg text-left hover:border-blue-500 transition focus:bg-blue-50 focus:border-blue-600">
                            <strong>1-49</strong> Employees
                        </button>
                        <button type="button" onclick="setSize('50-999')" class="size-btn border p-3 rounded-lg text-left hover:border-blue-500 transition focus:bg-blue-50 focus:border-blue-600">
                            <strong>50-999</strong> Employees
                        </button>
                        <button type="button" onclick="setSize('1000+')" class="size-btn border p-3 rounded-lg text-left hover:border-blue-500 transition focus:bg-blue-50 focus:border-blue-600">
                            <strong>1000+</strong> Employees
                        </button>
                    </div>
                    <input type="hidden" name="size" id="selected_size" required>
                </div>

                <button type="submit" class="w-full bg-slate-900 text-white py-4 rounded-lg font-bold hover:opacity-90 transition">
                    Let's Go &rarr;
                </button>
            </form>
            
            <p class="text-center mt-6 text-sm text-slate-500">
                Already a client? <a href="admin/login.php" class="text-blue-600 font-semibold underline">Login here</a>
            </p>
        </div>
    </div>
</section>

<section class="py-12 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <p class="text-4xl font-extrabold text-blue-600">1M+</p>
                <p class="text-slate-500 uppercase tracking-wider text-xs font-bold">Clients Globally</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-blue-600">1 in 6</p>
                <p class="text-slate-500 uppercase tracking-wider text-xs font-bold">Workers Paid</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-blue-600">75+</p>
                <p class="text-slate-500 uppercase tracking-wider text-xs font-bold">Years of Expertise</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-blue-600">24/7</p>
                <p class="text-slate-500 uppercase tracking-wider text-xs font-bold">Compliance Support</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-slate-900 py-20 text-white overflow-hidden">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-10 md:mb-0">
            <h2 class="text-4xl font-bold mb-6">See how MYTINTAH works.</h2>
            <p class="text-slate-400 text-lg mb-8">Take a self-guided product tour and see why businesses trust our intuitive platform to manage their most important asset: their people.</p>
            <a href="pages/demo.php" class="bg-white text-slate-900 px-10 py-4 rounded-full font-bold hover:bg-gray-200 transition">Start the Tour</a>
        </div>
        <div class="md:w-1/2 flex justify-center">
            <div class="w-80 h-60 bg-slate-800 rounded-xl border border-slate-700 shadow-2xl flex items-center justify-center italic text-slate-500">
                [Dashboard Preview Image]
            </div>
        </div>
    </div>
</section>

<script>
function setSize(val) {
    document.getElementById('selected_size').value = val;
    // Visually toggle buttons (simple JS)
    document.querySelectorAll('.size-btn').forEach(btn => btn.classList.remove('bg-blue-50', 'border-blue-600'));
}
</script>

<?php include 'includes/footer.php'; ?>
