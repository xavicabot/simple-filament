<?php

namespace App\Providers;

use App\Filament\Blocks\PdfBlock;
use App\Filament\Blocks\SectionBlock;
use App\Filament\Blocks\TransistorBlock;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        TiptapEditor::configureUsing(function (TiptapEditor $component) {
            $component
                ->collapseBlocksPanel()
                ->blocks([
                    PdfBlock::class,
                    SectionBlock::class,
                    TransistorBlock::class,
                ]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
