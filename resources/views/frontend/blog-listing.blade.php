@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-16">
            <div class="glassmorphism px-6 py-3 rounded-full mb-6 inline-flex items-center shadow-md">
                <i class="fas fa-blog text-accent-500 mr-2"></i>
                <span class="dark-text">Language learning insights</span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold dark-text mb-6">{{$setting->site_title}} <span class="accent-gradient-text">Blog</span></h1>
            <p class="text-xl light-text mb-10 max-w-3xl">{{$page->meta_desc}}</p>

            <!-- Search Blog -->
            <div class="relative w-full max-w-xl mb-8">
                <div class="flex">
                    <input type="text" placeholder="Search blog posts..." class="w-full px-6 py-4 rounded-l-2xl shadow-md focus:outline-none focus:ring-2 focus:ring-primary-300 transition-all duration-300 border border-r-0 border-slate-200">
                    <button class="bg-primary-500 text-white px-6 py-4 rounded-r-2xl font-semibold hover:bg-primary-600 transition-all duration-300 flex items-center">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Categories Filter -->
        <section class="my-12">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="category-filter active px-6 py-2 glassmorphism rounded-full dark-text font-medium hover:bg-primary-50 transition-all duration-300 shadow-sm">
                    All Posts
                </button>
                @foreach ($categories as $category)
                <button class="category-filter px-6 py-2 glassmorphism rounded-full dark-text font-medium hover:bg-primary-50 transition-all duration-300 shadow-sm">
                    {{$category->title}}
                </button>
                @endforeach
            </div>
        </section>

        <!-- Featured Post -->
        <section class="my-16">
            @if($blogs->isNotEmpty())
                @php $featured = $blogs->first(); @endphp
            <div class="glassmorphism p-8 rounded-2xl shadow-md">
                <div class="flex items-center mb-4">
                    <span class="bg-accent-500 text-white px-3 py-1 rounded-full text-sm font-medium mr-3">Featured</span>
                    <span class="text-primary-600 text-sm"><a href="{{ route('bloglist.category', $featured->category->slug) }}">{{ $featured->category->title }}</span></a>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-3xl font-bold dark-text mb-4"><a href="{{ route('blogshow', ['slug' => $featured->slug]) }}">{{ $featured->title }}</h2></a>
                        <p class="light-text mb-6">{{ Str::limit(strip_tags($featured->description), 100) }}</p>
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center mr-3">
                                <span class="text-primary-600 font-bold text-xs">{{ strtoupper(substr($setting->site_author, 0, 1)) }}</span>
                            </div>
                            <div>
                                <p class="dark-text font-medium">{{$setting->site_author}}</p>
                                <p class="light-text text-sm">{{ $featured->created_at->format('F d, Y') }}</p>
                            </div>
                        </div>
                        <a href="{{ route('blogshow', ['slug' => $featured->slug]) }}" class="bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 shadow-md inline-flex items-center">
                            Read Article <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    <div class="glassmorphism p-6 rounded-xl">
                        <div class="text-center">
                            <span class="hindi-font text-4xl text-primary-600 block mb-4">नमस्ते</span>
                            <p class="dark-text font-medium mb-2">Namaste</p>
                            <p class="light-text text-sm">The most important greeting you'll ever learn</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </section>

        <!-- Blog Posts Grid -->
        <section class="my-16">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold dark-text section-title">Latest Articles</h2>
                <div class="flex items-center space-x-4">
                    <span class="light-text text-sm">Sort by:</span>
                    <select class="px-4 py-2 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300">
                        <option>Latest</option>
                        <option>Most Popular</option>
                        <option>Alphabetical</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                @foreach ($blogs as $bc)
                <article class="glassmorphism p-6 rounded-2xl shadow-md word-card">
                    <div class="flex items-center mb-4">
                        <span class="bg-primary-100 text-primary-800 px-3 py-1 rounded-full text-sm font-medium"><a href="{{ route('bloglist.category', $bc->category->slug) }}">{{$bc->category->title}}</span></a>
                        <span class="ml-auto light-text text-sm">{{ $bc->created_at->format('F d, Y') }}</span>
                    </div>
                    <a href="{{ route('blogshow', ['slug' => $bc->slug]) }}"><h3 class="text-xl font-bold dark-text mb-3">{{$bc->title}}</h3></a>
                    <p class="light-text mb-4 text-sm">{{ Str::limit(strip_tags($bc->description), 100) }}</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-2">
                                <span class="text-primary-600 font-bold text-xs">{{ strtoupper(substr($setting->site_author, 0, 1)) }}</span>
                            </div>
                            <span class="light-text text-sm">{{$setting->site_author}}</span>
                        </div>
                        <a href="{{ route('blogshow', ['slug' => $bc->slug]) }}" class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </section>

        <!-- Pagination -->
        <section class="my-16">
            <div class="flex justify-center items-center space-x-2">
                <button class="px-4 py-2 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 transition-all duration-200">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="px-4 py-2 rounded-lg bg-primary-500 text-white font-medium">1</button>
                <button class="px-4 py-2 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 transition-all duration-200">2</button>
                <button class="px-4 py-2 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 transition-all duration-200">3</button>
                <span class="px-2 text-slate-400">...</span>
                <button class="px-4 py-2 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 transition-all duration-200">10</button>
                <button class="px-4 py-2 rounded-lg border border-slate-200 text-slate-600 hover:bg-slate-50 transition-all duration-200">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <!-- Newsletter Signup -->
        <section class="my-16">
            <div class="glassmorphism p-8 rounded-2xl text-center max-w-2xl mx-auto shadow-md">
                <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-envelope text-2xl text-accent-600"></i>
                </div>
                <h2 class="text-2xl font-bold dark-text mb-4">Stay Updated</h2>
                <p class="light-text mb-6">Get the latest Hindi learning tips and cultural insights delivered to your inbox weekly.</p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300">
                    <button class="bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 whitespace-nowrap">
                        Subscribe
                    </button>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Category filter functionality
            const categoryFilters = document.querySelectorAll('.category-filter');
            categoryFilters.forEach(filter => {
                filter.addEventListener('click', function() {
                    categoryFilters.forEach(f => f.classList.remove('active', 'bg-primary-100', 'text-primary-600'));
                    this.classList.add('active', 'bg-primary-100', 'text-primary-600');
                });
            });
        });
    </script>
@include('frontend.partials.footer')
