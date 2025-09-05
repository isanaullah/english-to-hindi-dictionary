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
                        <p class="light-text mb-4">{!!$page->page_desc!!}</p>
                    </div>

                    <div class="bg-primary-50 p-6 rounded-lg border border-primary-200">
                        <h3 class="text-lg font-semibold dark-text mb-3">Questions About Privacy?</h3>
                        <p class="light-text mb-4">If you have questions about this privacy policy or how we handle your data, please contact us:</p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/contact-us" class="bg-primary-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 text-center">
                                <i class="fas fa-envelope mr-2"></i>Contact Us
                            </a>
                            <a href="mailto:{{$setting->site_email}}" class="bg-white text-primary-600 px-6 py-2 rounded-lg font-semibold border border-primary-300 hover:bg-primary-50 transition-all duration-300 text-center">
                                <i class="fas fa-shield-alt mr-2"></i>Privacy Team
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <!-- Last Updated -->
        <section class="my-16 text-center">
            <div class="glassmorphism p-6 rounded-2xl max-w-md mx-auto shadow-md">
                <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calendar-alt text-accent-600"></i>
                </div>
                <h3 class="font-semibold dark-text mb-2">Last Updated</h3>
                <p class="light-text">December 1, 2023</p>
                <p class="text-sm light-text mt-2">We will notify you of any significant changes to this policy.</p>
            </div>
        </section> --}}
    </main>
@include('frontend.partials.footer')
