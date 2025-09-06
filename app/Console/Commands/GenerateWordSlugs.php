<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Words;
use Illuminate\Support\Str;

class GenerateWordSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'words:generate-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate slugs for existing words that don\'t have slugs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating slugs for words...');
        
        $wordsWithoutSlugs = Words::whereNull('slug')->orWhere('slug', '')->get();
        
        if ($wordsWithoutSlugs->isEmpty()) {
            $this->info('All words already have slugs!');
            return;
        }
        
        $count = 0;
        foreach ($wordsWithoutSlugs as $word) {
            $word->slug = $this->generateUniqueSlug($word->word);
            $word->save();
            $count++;
            $this->line("Generated slug for: {$word->word} -> {$word->slug}");
        }
        
        $this->info("Successfully generated {$count} slugs!");
    }
    
    /**
     * Generate a unique slug from the word
     */
    protected function generateUniqueSlug($word)
    {
        $slug = Str::slug($word);
        $originalSlug = $slug;
        $counter = 1;

        while (Words::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
