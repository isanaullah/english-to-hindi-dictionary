@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-16">
            <div class="glassmorphism px-6 py-3 rounded-full mb-6 inline-flex items-center shadow-md">
                <i class="fas fa-envelope text-accent-500 mr-2"></i>
                <span class="dark-text">We'd love to hear from you</span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold dark-text mb-6">Get In <span class="accent-gradient-text">Touch</span></h1>
            <p class="text-xl light-text mb-10 max-w-3xl">Have questions, suggestions, or feedback? Our team is here to help you with anything related to HindiLingo.</p>
        </section>

        <!-- Contact Form & Info -->
        <section class="my-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="glassmorphism p-8 rounded-2xl shadow-md">
                    <h2 class="text-2xl font-bold dark-text mb-6">Send us a Message</h2>
                    <form class="space-y-6" method="Post" action="{{url('contact')}}">
                            <div>
                                <label class="block text-sm font-medium dark-text mb-2">Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300 transition-all duration-300" placeholder="Your Name">
                            </div>

                        <div>
                            <label class="block text-sm font-medium dark-text mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300 transition-all duration-300" placeholder="your.email@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium dark-text mb-2">Subject</label>
                            <select class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300 transition-all duration-300">
                                <option>General Inquiry</option>
                                <option>Technical Support</option>
                                <option>Feature Request</option>
                                <option>Bug Report</option>
                                <option>Partnership</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium dark-text mb-2">Message</label>
                            <textarea rows="6" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300 transition-all duration-300" placeholder="Tell us how we can help you..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-primary-500 text-white py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 shadow-md flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="glassmorphism p-6 rounded-2xl shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-primary-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold dark-text">Email Us</h3>
                                <p class="light-text">{{$setting->site_email}}</p>
                            </div>
                        </div>
                        <p class="light-text text-sm">We typically respond within 24 hours</p>
                    </div>

                    <div class="glassmorphism p-6 rounded-2xl shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-primary-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold dark-text">Call Us</h3>
                                <p class="light-text">{{$setting->site_phone}}</p>
                            </div>
                        </div>
                        <p class="light-text text-sm">Monday - Friday, 9 AM - 6 PM EST</p>
                    </div>

                    <div class="glassmorphism p-6 rounded-2xl shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-primary-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold dark-text">Visit Us</h3>
                                <p class="light-text">{{$setting->site_address}}</p>
                            </div>
                        </div>
                        <p class="light-text text-sm">By appointment only</p>
                    </div>

                    <div class="glassmorphism p-6 rounded-2xl shadow-md">
                        <h3 class="font-semibold dark-text mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="{{$setting->site_fb}}" class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center hover:bg-primary-200 transition-all duration-200">
                                <i class="fab fa-facebook-f text-primary-600"></i>
                            </a>
                            <a href="{{$setting->site_twitter}}" class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center hover:bg-primary-200 transition-all duration-200">
                                <i class="fab fa-twitter text-primary-600"></i>
                            </a>
                            <a href="{{$setting->site_instagram}}" class="w-10 h-10 rounded-full bg-primary-100 flex items-center justify-center hover:bg-primary-200 transition-all duration-200">
                                <i class="fab fa-instagram text-primary-600"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="my-16">
            <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Frequently Asked Questions</h2>

            <div class="max-w-3xl mx-auto space-y-4">
                @foreach ($faq as $bc)
                <div class="glassmorphism p-6 rounded-2xl shadow-md">
                    <div class="flex justify-between items-center cursor-pointer" onclick="toggleFAQ(this)">
                        <h3 class="font-semibold dark-text">{{$bc->question}}</h3>
                        <i class="fas fa-chevron-down text-primary-600 transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content hidden mt-4 pt-4 border-t border-slate-200">
                        <p class="light-text">{{$bc->answer}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Response Time -->
        <section class="my-16 text-center">
            <div class="glassmorphism p-8 rounded-2xl max-w-2xl mx-auto shadow-md">
                <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-2xl text-accent-600"></i>
                </div>
                <h2 class="text-2xl font-bold dark-text mb-4">Quick Response Guarantee</h2>
                <p class="light-text mb-4">We pride ourselves on quick response times:</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                    <div>
                        <div class="text-2xl font-bold text-primary-600">< 1 hour</div>
                        <div class="text-sm light-text">Technical Issues</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-primary-600">< 24 hours</div>
                        <div class="text-sm light-text">General Inquiries</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-primary-600">< 3 days</div>
                        <div class="text-sm light-text">Feature Requests</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        function toggleFAQ(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('i');

            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }
    </script>
@include('frontend.partials.footer')
