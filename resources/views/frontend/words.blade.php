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
        <div class="flex flex-col md:flex-row gap-4 items-center">
            <!-- Search Input -->
            <div class="flex-1 relative">
                <input
                    type="text"
                    id="searchInput"
                    placeholder="Search for words..."
                    class="w-full px-4 py-3 pl-12 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                >
                <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
            </div>

            <!-- Category Filter -->
            <div class="relative">
                <select
                    id="categoryFilter"
                    class="px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white"
                >
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}">{{ $category }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Sort Options -->
            <div class="relative">
                <select
                    id="sortFilter"
                    class="px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white"
                >
                    <option value="alphabetical">A-Z</option>
                    <option value="category">By Category</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="glassmorphism p-6 text-center">
            <div class="text-3xl font-bold gradient-text mb-2" id="totalWords">{{ $count }}</div>
            <div class="text-slate-600">Total Words</div>
        </div>
        <div class="glassmorphism p-6 text-center">
            <div class="text-3xl font-bold accent-gradient-text mb-2">{{ count($categories) }}</div>
            <div class="text-slate-600">Categories</div>
        </div>
        <div class="glassmorphism p-6 text-center">
            <div class="text-3xl font-bold gradient-text mb-2" id="filteredCount">{{ $words->count() }}</div>
            <div class="text-slate-600">Showing</div>
        </div>
    </div>

    <!-- Words Grid -->
    <div id="wordsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($words as $word)
        <div class="word-card glassmorphism p-6 rounded-lg hover:shadow-xl transition-all duration-300"
             data-word="{{ strtolower($word['word']) }}"
             data-category="{{ $word['category'] }}">

            <!-- Category Badge -->
            {{-- <div class="flex justify-between items-start mb-4">
                <span class="category-badge bg-primary-100 text-primary-700 px-3 py-1 rounded-full text-sm font-medium">
                    {{ $word['category'] }}
                </span>
                <button class="text-slate-400 hover:text-primary-500 transition-colors" onclick="speakWord('{{ $word['word'] }}')">
                    <i class="fas fa-volume-up"></i>
                </button>
            </div> --}}

            <!-- English Word -->
            <div class="mb-3">
                <h3 class="text-xl font-bold text-slate-800 mb-1">
                    <a href="{{ route('worddetail', $word['word']) }}" class="hover:underline">
                        {{ $word['word'] }}
                    </a>
                </h3>
                <p class="text-sm text-slate-500">English</p>
            </div>


            <!-- Hindi Translation -->
            <div class="mb-3">
                <h4 class="text-2xl font-bold hindi-font text-primary-600 mb-1">{{ $word['meaning'] }}</h4>
                <p class="text-sm text-slate-500">Hindi</p>
            </div>

            <!-- Transliteration -->
            <div class="mb-4">
                <p class="text-lg font-medium text-accent-600 mb-1">{{ $word['pronunciation'] }}</p>
                <p class="text-sm text-slate-500">Pronunciation</p>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-2">
                <button class="flex-1 bg-primary-500 text-white px-4 py-2 rounded-lg hover:bg-primary-600 transition-colors text-sm font-medium">
                    <i class="fas fa-heart mr-2"></i>Save
                </button>
                <button class="bg-slate-100 text-slate-600 px-4 py-2 rounded-lg hover:bg-slate-200 transition-colors text-sm font-medium">
                    <i class="fas fa-share-alt"></i>
                </button>
            </div>
        </div>
        @endforeach
    </div>

    <!-- No Results Message -->
    <div id="noResults" class="hidden text-center py-12">
        <i class="fas fa-search text-6xl text-slate-300 mb-4"></i>
        <h3 class="text-2xl font-bold text-slate-600 mb-2">No words found</h3>
        <p class="text-slate-500">Try adjusting your search or filter criteria</p>
    </div>

    <!-- Load More Button -->
    <div class="text-center mt-12">
        <button class="bg-primary-500 text-white px-8 py-3 rounded-lg hover:bg-primary-600 transition-all duration-300 shadow-lg hover:shadow-primary-500/30 font-semibold">
            <i class="fas fa-plus mr-2"></i>Load More Words
        </button>
    </div>
</main>

<!-- JavaScript for Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const categoryFilter = document.getElementById('categoryFilter');
    const sortFilter = document.getElementById('sortFilter');
    const wordsContainer = document.getElementById('wordsContainer');
    const noResults = document.getElementById('noResults');
    const filteredCount = document.getElementById('filteredCount');

    let allWords = Array.from(document.querySelectorAll('.word-card'));

    function filterAndSort() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value;
        const sortBy = sortFilter.value;

        // Filter words
        let filteredWords = allWords.filter(card => {
            const wordText = card.dataset.word;
            const category = card.dataset.category;

            const matchesSearch = wordText.includes(searchTerm);
            const matchesCategory = !selectedCategory || category === selectedCategory;

            return matchesSearch && matchesCategory;
        });

        // Sort words
        if (sortBy === 'alphabetical') {
            filteredWords.sort((a, b) => a.dataset.word.localeCompare(b.dataset.word));
        } else if (sortBy === 'category') {
            filteredWords.sort((a, b) => a.dataset.category.localeCompare(b.dataset.category));
        }

        // Hide all cards first
        allWords.forEach(card => card.style.display = 'none');

        // Show filtered cards
        if (filteredWords.length > 0) {
            filteredWords.forEach(card => card.style.display = 'block');
            wordsContainer.style.display = 'grid';
            noResults.classList.add('hidden');
        } else {
            wordsContainer.style.display = 'none';
            noResults.classList.remove('hidden');
        }

        // Update count
        filteredCount.textContent = filteredWords.length;
    }

    // Event listeners
    searchInput.addEventListener('input', filterAndSort);
    categoryFilter.addEventListener('change', filterAndSort);
    sortFilter.addEventListener('change', filterAndSort);

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

    allWords.forEach(card => {
        observer.observe(card);
    });
});
</script>

@include('frontend.partials.footer')
