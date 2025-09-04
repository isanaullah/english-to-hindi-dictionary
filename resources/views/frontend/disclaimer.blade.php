@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-16">
            <div class="glassmorphism px-6 py-3 rounded-full mb-6 inline-flex items-center shadow-md">
                <i class="fas fa-info-circle text-accent-500 mr-2"></i>
                <span class="dark-text">Important information</span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold dark-text mb-6"><span class="accent-gradient-text">Disclaimer</span></h1>
            <p class="text-xl light-text mb-10 max-w-3xl">Please read this disclaimer carefully before using HindiLingo services.</p>
        </section>

        <!-- Disclaimer Content -->
        <section class="my-16">
            <div class="max-w-4xl mx-auto">
                <div class="glassmorphism p-8 rounded-2xl shadow-md space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">General Information</h2>
                        <p class="light-text mb-4">The information provided by HindiLingo ("we," "us," or "our") on our website and mobile applications is for general informational and educational purposes only. All information on the site is provided in good faith, however we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any information on the site.</p>
                        <p class="light-text">Under no circumstance shall we have any liability to you for any loss or damage of any kind incurred as a result of the use of the site or reliance on any information provided on the site. Your use of the site and your reliance on any information on the site is solely at your own risk.</p>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Translation Accuracy</h2>
                        <p class="light-text mb-4">While we strive to provide accurate translations and meanings, language is complex and contextual. The translations provided by HindiLingo should be used as a reference tool and not as a substitute for professional translation services.</p>
                        <div class="bg-accent-50 p-4 rounded-lg border-l-4 border-accent-500">
                            <p class="text-accent-800"><strong>Important:</strong> For critical documents, legal matters, medical information, or professional communications, we strongly recommend consulting with qualified human translators or language experts.</p>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Educational Purpose</h2>
                        <p class="light-text mb-4">HindiLingo is designed as an educational tool to help users learn and understand the Hindi language. Our content is intended for:</p>
                        <ul class="list-disc list-inside light-text space-y-2 ml-4">
                            <li>Language learning and practice</li>
                            <li>Academic research and study</li>
                            <li>Personal enrichment and cultural understanding</li>
                            <li>Casual communication assistance</li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">User-Generated Content</h2>
                        <p class="light-text mb-4">Our platform may include user-generated content, suggestions, and corrections. While we appreciate community contributions, we cannot guarantee the accuracy of user-submitted content. We reserve the right to:</p>
                        <ul class="list-disc list-inside light-text space-y-2 ml-4">
                            <li>Review and moderate user submissions</li>
                            <li>Accept or reject contributions at our discretion</li>
                            <li>Edit or modify submitted content for clarity and accuracy</li>
                            <li>Remove inappropriate or inaccurate content</li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Technical Limitations</h2>
                        <p class="light-text mb-4">Our service relies on digital technology and may experience:</p>
                        <ul class="list-disc list-inside light-text space-y-2 ml-4">
                            <li>Temporary service interruptions</li>
                            <li>Technical errors or bugs</li>
                            <li>Data synchronization delays</li>
                            <li>Device or browser compatibility issues</li>
                        </ul>
                        <p class="light-text mt-4">We strive to maintain high service availability but cannot guarantee uninterrupted access to our services.</p>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Cultural Sensitivity</h2>
                        <p class="light-text mb-4">Language carries cultural context and nuances that may vary across regions, communities, and time periods. We aim to provide culturally appropriate content, but users should be aware that:</p>
                        <ul class="list-disc list-inside light-text space-y-2 ml-4">
                            <li>Regional variations in language usage exist</li>
                            <li>Cultural contexts may affect meaning and appropriateness</li>
                            <li>Historical and contemporary usage may differ</li>
                            <li>Formal and informal registers may vary</li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">External Links</h2>
                        <p class="light-text mb-4">Our service may contain links to external websites or resources. These links are provided for convenience and informational purposes only. We do not endorse, control, or assume responsibility for the content, privacy policies, or practices of any third-party websites or services.</p>
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">Updates and Changes</h2>
                        <p class="light-text mb-4">We reserve the right to update, modify, or discontinue any aspect of our service at any time without prior notice. This includes:</p>
                        <ul class="list-disc list-inside light-text space-y-2 ml-4">
                            <li>Dictionary content and translations</li>
                            <li>Features and functionality</li>
                            <li>User interface and design</li>
                            <li>Terms of service and policies</li>
                        </ul>
                    </div>

                    <div class="bg-primary-50 p-6 rounded-lg border border-primary-200">
                        <h3 class="text-lg font-semibold dark-text mb-3">Contact Us</h3>
                        <p class="light-text mb-4">If you have questions about this disclaimer or need clarification on any aspect of our service, please don't hesitate to contact us:</p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/contact-us" class="bg-primary-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 text-center">
                                <i class="fas fa-envelope mr-2"></i>Contact Support
                            </a>
                            <a href="mailto:legal@hindilingo.com" class="bg-white text-primary-600 px-6 py-2 rounded-lg font-semibold border border-primary-300 hover:bg-primary-50 transition-all duration-300 text-center">
                                <i class="fas fa-gavel mr-2"></i>Legal Inquiries
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
                <p class="text-sm light-text mt-2">We review and update our disclaimer regularly to ensure accuracy and compliance.</p>
            </div>
        </section>
    </main>
@include('frontend.partials.footer')