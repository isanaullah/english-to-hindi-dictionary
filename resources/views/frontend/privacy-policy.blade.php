@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-16">
            <div class="glassmorphism px-6 py-3 rounded-full mb-6 inline-flex items-center shadow-md">
                <i class="fas fa-shield-alt text-accent-500 mr-2"></i>
                <span class="dark-text">Your privacy matters to us</span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold dark-text mb-6">Privacy <span class="accent-gradient-text">Policy</span></h1>
            <p class="text-xl light-text mb-10 max-w-3xl">Learn how we collect, use, and protect your personal information when you use HindiLingo.</p>
        </section>

        <!-- Privacy Policy Content -->
        <section class="my-16">
            <div class="max-w-4xl mx-auto">
                <div class="glassmorphism p-8 rounded-2xl shadow-md space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Information We Collect</h2>
                        <p class="light-text mb-4">We collect information you provide directly to us, such as when you create an account, use our services, or contact us for support.</p>
                        
                        <h3 class="text-lg font-semibold dark-text mb-3">Personal Information</h3>
                        <ul class="list-disc list-inside light-text space-y-2 ml-4 mb-4">
                            <li>Name and email address</li>
                            <li>Account preferences and settings</li>
                            <li>Learning progress and statistics</li>
                            <li>Custom word lists and bookmarks</li>
                            <li>Communication history with our support team</li>
                        </ul>

                        <h3 class="text-lg font-semibold dark-text mb-3">Usage Information</h3>
                        <ul class="list-disc list-inside light-text space-y-2 ml-4">
                            <li>Search queries and translation requests</li>
                            <li>Pages visited and features used</li>
                            <li>Time spent on different sections</li>
                            <li>Device and browser information</li>
                            <li>IP address and location data</li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">How We Use Your Information</h2>
                        <p class="light-text mb-4">We use the information we collect to provide, maintain, and improve our services:</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-primary-50 p-4 rounded-lg border border-primary-200">
                                <h3 class="font-semibold dark-text mb-2 flex items-center">
                                    <i class="fas fa-cog text-primary-600 mr-2"></i>Service Provision
                                </h3>
                                <ul class="text-sm light-text space-y-1">
                                    <li>• Process translations and searches</li>
                                    <li>• Maintain user accounts and preferences</li>
                                    <li>• Provide personalized learning experiences</li>
                                </ul>
                            </div>
                            
                            <div class="bg-accent-50 p-4 rounded-lg border border-accent-200">
                                <h3 class="font-semibold dark-text mb-2 flex items-center">
                                    <i class="fas fa-chart-line text-accent-600 mr-2"></i>Improvement
                                </h3>
                                <ul class="text-sm light-text space-y-1">
                                    <li>• Analyze usage patterns</li>
                                    <li>• Develop new features</li>
                                    <li>• Fix bugs and improve performance</li>
                                </ul>
                            </div>
                            
                            <div class="bg-primary-50 p-4 rounded-lg border border-primary-200">
                                <h3 class="font-semibold dark-text mb-2 flex items-center">
                                    <i class="fas fa-envelope text-primary-600 mr-2"></i>Communication
                                </h3>
                                <ul class="text-sm light-text space-y-1">
                                    <li>• Send important service updates</li>
                                    <li>• Respond to support requests</li>
                                    <li>• Share educational content (optional)</li>
                                </ul>
                            </div>
                            
                            <div class="bg-accent-50 p-4 rounded-lg border border-accent-200">
                                <h3 class="font-semibold dark-text mb-2 flex items-center">
                                    <i class="fas fa-shield-alt text-accent-600 mr-2"></i>Security
                                </h3>
                                <ul class="text-sm light-text space-y-1">
                                    <li>• Prevent fraud and abuse</li>
                                    <li>• Protect user accounts</li>
                                    <li>• Ensure service security</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Information Sharing</h2>
                        <p class="light-text mb-4">We do not sell, trade, or otherwise transfer your personal information to third parties except in the following circumstances:</p>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3 mt-1">
                                    <i class="fas fa-tools text-primary-600 text-sm"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold dark-text mb-1">Service Providers</h3>
                                    <p class="light-text text-sm">We may share information with trusted third-party service providers who help us operate our platform, such as cloud hosting, analytics, and customer support tools.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3 mt-1">
                                    <i class="fas fa-balance-scale text-primary-600 text-sm"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold dark-text mb-1">Legal Requirements</h3>
                                    <p class="light-text text-sm">We may disclose information when required by law, court order, or government request, or to protect our rights and safety.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3 mt-1">
                                    <i class="fas fa-handshake text-primary-600 text-sm"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold dark-text mb-1">Business Transfers</h3>
                                    <p class="light-text text-sm">In the event of a merger, acquisition, or sale of assets, user information may be transferred as part of the business transaction.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Data Security</h2>
                        <p class="light-text mb-4">We implement appropriate security measures to protect your personal information:</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="text-center p-4 bg-slate-50 rounded-lg">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-lock text-primary-600"></i>
                                </div>
                                <h3 class="font-semibold dark-text mb-2">Encryption</h3>
                                <p class="text-sm light-text">Data encrypted in transit and at rest</p>
                            </div>
                            
                            <div class="text-center p-4 bg-slate-50 rounded-lg">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-server text-primary-600"></i>
                                </div>
                                <h3 class="font-semibold dark-text mb-2">Secure Servers</h3>
                                <p class="text-sm light-text">Industry-standard server security</p>
                            </div>
                            
                            <div class="text-center p-4 bg-slate-50 rounded-lg">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-user-shield text-primary-600"></i>
                                </div>
                                <h3 class="font-semibold dark-text mb-2">Access Control</h3>
                                <p class="text-sm light-text">Limited employee access to data</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Your Rights and Choices</h2>
                        <p class="light-text mb-4">You have several rights regarding your personal information:</p>
                        
                        <div class="space-y-3">
                            <div class="flex items-center p-3 bg-primary-50 rounded-lg">
                                <i class="fas fa-eye text-primary-600 mr-3"></i>
                                <span class="dark-text font-medium">Access:</span>
                                <span class="light-text ml-2">Request a copy of your personal data</span>
                            </div>
                            
                            <div class="flex items-center p-3 bg-primary-50 rounded-lg">
                                <i class="fas fa-edit text-primary-600 mr-3"></i>
                                <span class="dark-text font-medium">Correction:</span>
                                <span class="light-text ml-2">Update or correct inaccurate information</span>
                            </div>
                            
                            <div class="flex items-center p-3 bg-primary-50 rounded-lg">
                                <i class="fas fa-trash text-primary-600 mr-3"></i>
                                <span class="dark-text font-medium">Deletion:</span>
                                <span class="light-text ml-2">Request deletion of your account and data</span>
                            </div>
                            
                            <div class="flex items-center p-3 bg-primary-50 rounded-lg">
                                <i class="fas fa-download text-primary-600 mr-3"></i>
                                <span class="dark-text font-medium">Portability:</span>
                                <span class="light-text ml-2">Export your data in a portable format</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Cookies and Tracking</h2>
                        <p class="light-text mb-4">We use cookies and similar technologies to enhance your experience:</p>
                        
                        <div class="bg-accent-50 p-4 rounded-lg border-l-4 border-accent-500 mb-4">
                            <h3 class="font-semibold text-accent-800 mb-2">Essential Cookies</h3>
                            <p class="text-accent-700 text-sm">Required for basic functionality, user authentication, and security.</p>
                        </div>
                        
                        <div class="bg-primary-50 p-4 rounded-lg border-l-4 border-primary-500 mb-4">
                            <h3 class="font-semibold text-primary-800 mb-2">Analytics Cookies</h3>
                            <p class="text-primary-700 text-sm">Help us understand how users interact with our service to improve performance.</p>
                        </div>
                        
                        <div class="bg-slate-50 p-4 rounded-lg border-l-4 border-slate-400">
                            <h3 class="font-semibold dark-text mb-2">Preference Cookies</h3>
                            <p class="light-text text-sm">Remember your settings and preferences for a personalized experience.</p>
                        </div>
                    </div>

                    <div class="bg-primary-50 p-6 rounded-lg border border-primary-200">
                        <h3 class="text-lg font-semibold dark-text mb-3">Questions About Privacy?</h3>
                        <p class="light-text mb-4">If you have questions about this privacy policy or how we handle your data, please contact us:</p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/contact-us" class="bg-primary-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 text-center">
                                <i class="fas fa-envelope mr-2"></i>Contact Us
                            </a>
                            <a href="mailto:privacy@hindilingo.com" class="bg-white text-primary-600 px-6 py-2 rounded-lg font-semibold border border-primary-300 hover:bg-primary-50 transition-all duration-300 text-center">
                                <i class="fas fa-shield-alt mr-2"></i>Privacy Team
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Last Updated -->
        <section class="my-16 text-center">
            <div class="glassmorphism p-6 rounded-2xl max-w-md mx-auto shadow-md">
                <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calendar-alt text-accent-600"></i>
                </div>
                <h3 class="font-semibold dark-text mb-2">Last Updated</h3>
                <p class="light-text">December 1, 2023</p>
                <p class="text-sm light-text mt-2">We will notify you of any significant changes to this policy.</p>
            </div>
        </section>
    </main>
@include('frontend.partials.footer')