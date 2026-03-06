<footer class="bg-slate-50 pt-16 pb-8 border-t border-gray-200">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 mb-12">
            <div>
                <h4 class="font-bold mb-4">Solutions</h4>
                <ul class="space-y-2 text-slate-500 text-sm">
                    <li><a href="#" class="hover:text-blue-600">Payroll</a></li>
                    <li><a href="#" class="hover:text-blue-600">HR Outsourcing</a></li>
                    <li><a href="#" class="hover:text-blue-600">Time Tracking</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Company</h4>
                <ul class="space-y-2 text-slate-500 text-sm">
                    <li><a href="#" class="hover:text-blue-600">About Us</a></li>
                    <li><a href="#" class="hover:text-blue-600">Careers</a></li>
                    <li><a href="#" class="hover:text-blue-600">Trust Center</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Support</h4>
                <ul class="space-y-2 text-slate-500 text-sm">
                    <li><a href="/admin/login" class="hover:text-blue-600">Client Login</a></li>
                    <li><a href="#" class="hover:text-blue-600">Help Center</a></li>
                    <li><a href="/contact" class="hover:text-blue-600">Contact Sales</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Newsletter</h4>
                <p class="text-sm text-slate-500 mb-4">Get HR insights delivered to your inbox.</p>
                <form class="flex">
                    <input type="email" placeholder="Email" class="w-full p-2 border border-gray-300 rounded-l-md outline-none">
                    <button class="bg-slate-900 text-white px-4 rounded-r-md">Go</button>
                </form>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center text-xs text-slate-400">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Legal</a>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo SITE_URL; ?>/assets/js/app.js"></script>
</body>
</html>
