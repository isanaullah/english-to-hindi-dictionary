@include('frontend.partials.header')
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
    <nav class="mb-8">
        <div class="flex items-center space-x-2 text-sm light-text">
            <a href="/" class="hover:text-primary-600 transition-colors duration-200">Home</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="/blog" class="hover:text-primary-600 transition-colors duration-200">Blog</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="dark-text">{{ $article->title }}</span>
        </div>
    </nav>

        <!-- Article Header -->
        <section class="mb-12">
            <div class="max-w-4xl mx-auto">
                <div class="flex items-center mb-6">
                    @if($article->approval === 'Approved')
                        <span class="bg-accent-500 text-white px-3 py-1 rounded-full text-sm font-medium mr-3">Approved</span>
                    @elseif($article->approval === 'Pending')
                        <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-medium mr-3">Pending</span>
                    @endif
                    <span class="bg-primary-100 text-primary-800 px-3 py-1 rounded-full text-sm font-medium">{{ $article->category->title ?? 'Uncategorized' }}</span>
                </div>

                <h1 class="text-4xl md:text-5xl font-bold dark-text mb-6">{{$article->title}}</h1>
                <p class="text-xl light-text mb-8 leading-relaxed">{{$article->meta_desc}}</p>

                <div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-slate-200">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-primary-600 font-bold">{{ strtoupper(substr($instructor->name ?? 'A', 0, 1)) }}</span>
                        </div>
                        <div>
                            <p class="dark-text font-semibold">{{ $instructor->name ?? $setting->site_author }}</p>
                            <p class="light-text text-sm">{{ $article->created_at->format('F d, Y') }}</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2 text-slate-600">
                            <i class="fas fa-eye"></i>
                            <span class="text-sm">{{ $article->views_count ?? 0 }} views</span>
                        </div>
                        <button class="flex items-center space-x-2 text-slate-600 hover:text-primary-600 transition-colors duration-200">
                            <i class="fas fa-share-alt"></i>
                            <span class="text-sm">Share</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Article Content -->
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <div class="glassmorphism p-8 rounded-2xl shadow-md prose prose-lg max-w-none">
                    @php
                        // Split content by paragraphs
                        $description = $article->description;
                        $paragraphs = preg_split('/(<\/p>)/i', $description, -1, PREG_SPLIT_DELIM_CAPTURE);

                        // Count actual paragraphs (pairs of content + closing tag)
                        $totalParagraphs = floor(count($paragraphs) / 2);

                        // Initialize content sections
                        $firstTwoParagraphs = '';
                        $middleContent = '';
                        $beforeLastContent = '';
                        $lastParagraph = '';

                        if ($totalParagraphs >= 5) {
                            // For 5+ paragraphs: first two, middle, before last, last 2
                            $midPoint = floor(($totalParagraphs - 4) / 2) + 2; // Calculate mid excluding first 2 and last 2

                            // First two paragraphs (index 0-3)
                            $firstTwoParagraphs = $paragraphs[0] . ($paragraphs[1] ?? '') .
                                                 $paragraphs[2] . ($paragraphs[3] ?? '');

                            // Middle content (from 3rd to mid point)
                            for ($i = 4; $i < (($midPoint + 1) * 2); $i++) {
                                $middleContent .= $paragraphs[$i];
                            }

                            // Before last content (from after middle to before last 2 paragraphs)
                            for ($i = (($midPoint + 1) * 2); $i < (count($paragraphs) - 4); $i++) {
                                $beforeLastContent .= $paragraphs[$i];
                            }

                            // Last 2 paragraphs
                            $lastParagraph = $paragraphs[count($paragraphs) - 4] . ($paragraphs[count($paragraphs) - 3] ?? '') .
                                            $paragraphs[count($paragraphs) - 2] . ($paragraphs[count($paragraphs) - 1] ?? '');

                        } elseif ($totalParagraphs == 4) {
                            // For 4 paragraphs: first two, last two
                            $firstTwoParagraphs = $paragraphs[0] . ($paragraphs[1] ?? '') .
                                                 $paragraphs[2] . ($paragraphs[3] ?? '');
                            // Last 2 paragraphs (3rd and 4th)
                            $lastParagraph = $paragraphs[4] . ($paragraphs[5] ?? '') .
                                            $paragraphs[6] . ($paragraphs[7] ?? '');

                        } elseif ($totalParagraphs == 3) {
                            // For 3 paragraphs: first two, last
                            $firstTwoParagraphs = $paragraphs[0] . ($paragraphs[1] ?? '') .
                                                 $paragraphs[2] . ($paragraphs[3] ?? '');
                            $lastParagraph = $paragraphs[4] . ($paragraphs[5] ?? '');

                        } elseif ($totalParagraphs == 2) {
                            // For 2 paragraphs: show both as first two
                            $firstTwoParagraphs = $paragraphs[0] . ($paragraphs[1] ?? '') .
                                                 $paragraphs[2] . ($paragraphs[3] ?? '');
                        } else {
                            // Single paragraph or no paragraphs
                            $firstTwoParagraphs = $description;
                        }

                        // Get ads from database
                        $adsAfterFirstParagraph = \App\Models\HomeAd::getActiveAdsByPosition('blog_detail_after_first_paragraph');
                        $adsMiddleContent = \App\Models\HomeAd::getActiveAdsByPosition('blog_detail_middle_content');
                        $adsBeforeLast2Tags = \App\Models\HomeAd::getActiveAdsByPosition('blog_detail_before_last_2_tags');
                    @endphp

                    {{-- First Two Paragraphs --}}
                    {!! $firstTwoParagraphs !!}

                    {{-- Ad After Two Paragraphs --}}
                    @if($adsAfterFirstParagraph->count() > 0)
                        <div class="my-8">
                            @foreach($adsAfterFirstParagraph as $ad)
                            <div class="mb-8">
                                <p class="text-sm text-slate-500 text-center mb-2 font-medium">Advertisement</p>
                                <div class="glassmorphism p-4 rounded-2xl flex items-center justify-center min-h-[120px]">
                                    {!! $ad->ad_code !!}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif

                    {{-- Middle Content --}}
                    @if($middleContent)
                        {!! $middleContent !!}

                        {{-- Ad in Middle of Content --}}
                        @if($adsMiddleContent->count() > 0)
                            <div class="my-8">
                                @foreach($adsMiddleContent as $ad)
                                <div class="mb-8">
                                    <p class="text-sm text-slate-500 text-center mb-2 font-medium">Advertisement</p>
                                    <div class="glassmorphism p-4 rounded-2xl flex items-center justify-center min-h-[120px]">
                                        {!! $ad->ad_code !!}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    @endif

                    {{-- Before Last Content --}}
                    @if($beforeLastContent)
                        {!! $beforeLastContent !!}
                    @endif

                    {{-- Ad Before Last 2 Tags in Description --}}
                    @if($adsBeforeLast2Tags->count() > 0 && $lastParagraph)
                        <div class="my-8">
                            @foreach($adsBeforeLast2Tags as $ad)
                            <div class="mb-8">
                                <p class="text-sm text-slate-500 text-center mb-2 font-medium">Advertisement</p>
                                <div class="glassmorphism p-4 rounded-2xl flex items-center justify-center min-h-[120px]">
                                    {!! $ad->ad_code !!}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif

                    {{-- Last 2 Tags/Paragraphs --}}
                    @if($lastParagraph)
                        {!! $lastParagraph !!}
                    @endif

                    <div class="bg-primary-50 p-6 rounded-lg border border-primary-200 text-center">
                        <h3 class="text-lg font-semibold dark-text mb-3">Ready for More?</h3>
                        <p class="light-text mb-4">Explore our comprehensive Hindi dictionary and interactive learning tools to continue your journey.</p>
                        <a href="/" class="bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 inline-flex items-center">
                            <i class="fas fa-search mr-2"></i>Explore Dictionary
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Author Bio -->
        @php
            $setting = App\Models\WebSetting::first();
        @endphp
        @if($setting->site_author)
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <div class="glassmorphism p-6 rounded-2xl shadow-md">
                    <div class="flex items-start space-x-4">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center">
                            <span class="text-primary-600 font-bold text-xl">{{ strtoupper(substr($setting->site_author ?? 'A', 0, 1)) }}</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold dark-text mb-2">{{ $setting->site_author ?? 'Author' }}</h3>
                            <p class="light-text mb-4">{{ $setting->site_author_desc ?? 'Passionate about sharing knowledge and helping others learn.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <!-- Related Articles -->
        @if($popularposts->count() > 0)
        <section class="mb-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold dark-text text-center mb-10 section-title">Related Articles</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($popularposts->take(2) as $post)
                    <article class="glassmorphism p-6 rounded-2xl shadow-md word-card">
                        <div class="flex items-center mb-4">
                            <span class="bg-primary-100 text-primary-800 px-3 py-1 rounded-full text-sm font-medium">{{ $post->category->title ?? 'Blog' }}</span>
                            <span class="ml-auto light-text text-sm">{{ $post->created_at->format('M d, Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold dark-text mb-3">{{ $post->title }}</h3>
                        <p class="light-text mb-4 text-sm">{{ Str::limit(strip_tags($post->description), 100) }}</p>
                        <a href="{{ route('blogshow', ['slug' => $post->slug]) }}" class="text-primary-600 hover:text-primary-700 transition-colors duration-200 inline-flex items-center">
                            Read More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        <!-- Newsletter Signup -->
        <section class="mb-16">
            <div class="max-w-2xl mx-auto">
                <div class="glassmorphism p-8 rounded-2xl text-center shadow-md">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-envelope text-2xl text-accent-600"></i>
                    </div>
                    <h2 class="text-2xl font-bold dark-text mb-4">Never Miss an Article</h2>
                    <p class="light-text mb-6">Get the latest Hindi learning tips and cultural insights delivered to your inbox weekly.</p>
                    <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                        <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-primary-300">
                        <button class="bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all duration-300 whitespace-nowrap">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Back to Blog -->
        <section class="text-center">
            <a href="/blog" class="bg-slate-100 text-slate-700 px-6 py-3 rounded-lg font-semibold hover:bg-slate-200 transition-all duration-300 shadow-md inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>Back to Blog
            </a>
        </section>
    </main>
@include('frontend.partials.footer')
