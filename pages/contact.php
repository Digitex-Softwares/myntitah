<?php include 'includes/header.php'; ?>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6 flex flex-col md:flex-row gap-16">
        <div class="md:w-1/2">
            <h1 class="text-4xl font-black mb-6 leading-tight">Ready to transform your <span class="text-blue-600">Workforce?</span></h1>
            <p class="text-lg text-slate-600 mb-8">Talk to our sales experts to find the right configuration for your business needs and budget.</p>
            
            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <div class="text-blue-600 font-bold">Call:</div>
                    <div class="text-xl font-bold"><?php echo SALES_PHONE; ?></div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="text-blue-600 font-bold">Email:</div>
                    <div class="text-xl font-bold"><?php echo CONTACT_EMAIL; ?></div>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 bg-slate-50 p-8 rounded-2xl border">
            <form action="/lead/process.php" method="POST" class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" name="first_name" placeholder="First Name" required class="p-3 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="text" name="last_name" placeholder="Last Name" required class="p-3 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <input type="email" name="email" placeholder="Work Email" required class="w-full p-3 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500">
                <input type="text" name="company" placeholder="Company Name" required class="w-full p-3 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500">
                
                <select name="size" class="w-full p-3 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Company Size</option>
                    <option value="1-49">1-49 Employees</option>
                    <option value="50-999">50-999 Employees</option>
                    <option value="1000+">1000+ Employees</option>
                </select>

                <textarea name="message" placeholder="How can we help?" rows="4" class="w-full p-3 border rounded-lg outline-none focus:ring-2 focus:ring-blue-500"></textarea>

                <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-lg font-bold hover:bg-blue-700 transition">Submit Request</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
