@include('frontend.partials.header')

<!-- Main Content -->
<main class="container mx-auto px-6 py-8">
    <!-- Page Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-4">
            <i class="fas fa-book mr-3"></i>Dictionary Words
        </h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">
            Explore our comprehensive collection of English to Hindi translations with pronunciations and categories
        </p>
    </div>

    <!-- Search and Filter Section -->
    <div class="glassmorphism p-6 mb-8">
        <form method="GET" action="{{ route('words') }}" id="filterForm">
            <div class="flex flex-col md:flex-row gap-4 items-center">
                <!-- Search Input -->
                <div class="flex-1 relative">
                    <input type="text" name="search" id="searchInput" placeholder="Search for words..."
                        value="{{ request('search') }}"
                        class="w-full px-4 py-3 pl-12 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                </div>


                <!-- Sort Options -->
                <div class="relative">
                    <select name="sort" id="sortFilter"
                        class="px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white"
                        onchange="this.form.submit()">
                        <option value="alphabetical" {{ request('sort') == 'alphabetical' ? 'selected' : '' }}>A-Z
                        </option>
                        @foreach (range('A', 'Z') as $letter)
                            <option value="{{ $letter }}" {{ request('sort') == $letter ? 'selected' : '' }}>
                                {{ $letter }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Filter Button -->
                <button type="submit"
                    class="bg-primary-500 text-white px-6 py-3 rounded-lg hover:bg-primary-600 transition-colors font-medium">
                    <i class="fas fa-filter mr-2"></i>Filter
                </button>
            </div>
        </form>
    </div>

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="glassmorphism p-6 text-center">
            <div class="text-3xl font-bold gradient-text mb-2">{{ $totalCount }}</div>
            <div class="text-slate-600">Total Words</div>
        </div>
        <div class="glassmorphism p-6 text-center">
            <div class="text-3xl font-bold gradient-text mb-2">{{ $words->count() }}</div>
            <div class="text-slate-600">Showing</div>
        </div>
    </div>

    <!-- Words Grid -->
    <div id="wordsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($words as $word)
            <div class="word-card glassmorphism p-6 rounded-lg hover:shadow-xl transition-all duration-300"
                data-word="{{ strtolower($word->word) }}">

                <!-- Audio Button -->
                <div class="flex justify-end items-start mb-4">
                    <button class="text-slate-400 hover:text-primary-500 transition-colors"
                        onclick="speakWord('{{ $word->word }}')">
                        <i class="fas fa-volume-up"></i>
                    </button>
                </div>

                <!-- English Word -->
                <div class="mb-3">
                    <h3 class="text-xl font-bold text-slate-800 mb-1">
                        <p class="text-sm text-slate-500">English</p>
                        <a href="{{ route('worddetail', Str::slug($word->word, '-')) }}" class="hover:underline">
                            {{ $word->word }}
                        </a>
                    </h3>
                </div>

                <!-- Hindi Translation -->
                <div class="mb-3">
                    <p class="text-sm text-slate-500">Hindi</p>
                    <h4 class="text-2xl font-bold hindi-font text-primary-600 mb-1">{{ $word->meaning }}</h4>
                </div>

                <!-- Transliteration -->
                <div class="mb-4">
                    <p class="text-sm text-slate-500">Pronunciation</p>
                    <p class="text-lg font-medium text-accent-600 mb-1">{{ $word->pronunciation }}</p>
                </div>

                <!-- Action Buttons -->
                {{-- <div class="flex gap-2">

                    <button
                        class="bg-slate-100 text-slate-600 px-4 py-2 rounded-lg hover:bg-slate-200 transition-colors text-sm font-medium">
                        <i class="fas fa-share-alt"></i>
                    </button>
                </div> --}}
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <i class="fas fa-search text-6xl text-slate-300 mb-4"></i>
                <h3 class="text-2xl font-bold text-slate-600 mb-2">No words found</h3>
                <p class="text-slate-500">Try adjusting your search or filter criteria</p>
            </div>
        @endforelse
    </div>

    @if ($words->hasPages())
        <div class="mt-12 flex justify-center">
            <div class="glassmorphism p-4 rounded-xl shadow-lg flex space-x-2">

                {{-- Previous Page Link --}}
                @if ($words->onFirstPage())
                    <span class="px-3 py-1 rounded-lg text-gray-400">‹</span>
                @else
                    <a href="{{ $words->previousPageUrl() }}" class="px-3 py-1 rounded-lg hover:bg-primary-100">‹</a>
                @endif

                {{-- Pagination Elements --}}
                @php
                    $start = max($words->currentPage() - 2, 1);
                    $end = min($words->currentPage() + 2, $words->lastPage());
                @endphp

                {{-- Always show first page --}}
                @if ($start > 1)
                    <a href="{{ $words->url(1) }}" class="px-3 py-1 rounded-lg hover:bg-primary-100">1</a>
                    @if ($start > 2)
                        <span class="px-2">…</span>
                    @endif
                @endif

                {{-- Show range around current page --}}
                @for ($i = $start; $i <= $end; $i++)
                    @if ($i == $words->currentPage())
                        <span class="px-3 py-1 rounded-lg bg-primary-500 text-white">{{ $i }}</span>
                    @else
                        <a href="{{ $words->url($i) }}"
                            class="px-3 py-1 rounded-lg hover:bg-primary-100">{{ $i }}</a>
                    @endif
                @endfor

                {{-- Always show last page --}}
                @if ($end < $words->lastPage())
                    @if ($end < $words->lastPage() - 1)
                        <span class="px-2">…</span>
                    @endif
                    <a href="{{ $words->url($words->lastPage()) }}" class="px-3 py-1 rounded-lg hover:bg-primary-100">
                        {{ $words->lastPage() }}
                    </a>
                @endif

                {{-- Next Page Link --}}
                @if ($words->hasMorePages())
                    <a href="{{ $words->nextPageUrl() }}" class="px-3 py-1 rounded-lg hover:bg-primary-100">›</a>
                @else
                    <span class="px-3 py-1 rounded-lg text-gray-400">›</span>
                @endif

            </div>
        </div>
    @endif




</main>

<!-- JavaScript for Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const sortFilter = document.getElementById('sortFilter');
        const filterForm = document.getElementById('filterForm');

        let searchTimeout;

        // Auto-submit form on search input with debounce
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                filterForm.submit();
            }, 500); // Wait 500ms after user stops typing
        });


        sortFilter.addEventListener('change', function() {
            filterForm.submit();
        });

        // Text-to-speech function
        window.speakWord = function(word) {
            if ('speechSynthesis' in window) {
                const utterance = new SpeechSynthesisUtterance(word);
                utterance.lang = 'en-US';
                utterance.rate = 0.8;
                speechSynthesis.speak(utterance);
            }
        };

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(20px)';
                    entry.target.style.transition = 'all 0.6s ease';

                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);

                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const wordCards = document.querySelectorAll('.word-card');
        wordCards.forEach(card => {
            observer.observe(card);
        });
    });
</script>

@include('frontend.partials.footer')
