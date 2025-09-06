@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-16">
            <div class="glassmorphism px-6 py-3 rounded-full mb-6 inline-flex items-center shadow-md">
                <i class="fas fa-info-circle text-accent-500 mr-2"></i>
                <span class="dark-text">Important information</span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold dark-text mb-6"><span class="accent-gradient-text">{{$page->title}}</span></h1>
            <p class="text-xl light-text mb-10 max-w-3xl">{{$page->meta_desc}}</p>
        </section>

        <!-- Disclaimer Content -->
        <section class="my-16">
            <div class="max-w-4xl mx-auto">
                <div class="glassmorphism p-8 rounded-2xl shadow-md space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold dark-text mb-4 section-title">General Information</h2>
                        <p class="light-text mb-4">{!!$page->page_desc!!}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Last Updated -->
        {{-- <section class="my-16 text-center">
            <div class="glassmorphism p-6 rounded-2xl max-w-md mx-auto shadow-md">
                <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calendar-alt text-accent-600"></i>
                </div>
                <h3 class="font-semibold dark-text mb-2">Last Updated</h3>
                <p class="light-text">December 1, 2023</p>
                <p class="text-sm light-text mt-2">We review and update our disclaimer regularly to ensure accuracy and compliance.</p>
            </div>
        </section> --}}
    </main>
@include('frontend.partials.footer')
