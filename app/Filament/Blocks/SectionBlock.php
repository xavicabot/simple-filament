<?php

namespace App\Filament\Blocks;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapBlock;
use FilamentTiptapEditor\TiptapEditor;

class SectionBlock extends TiptapBlock
{
    public string $width = '7xl';

    public bool $slideOver = true;

    public string $preview = 'filament.blocks.previews.section-block';

    public string $rendered = 'filament.blocks.rendered.section-block';

    public function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->label(__('Título'))
                ->required(),
            DateTimePicker::make('visible_at')
                ->label(__('Visible desde'))
                ->required(),
            TiptapEditor::make('content')
                ->label(__('Contenido'))
                ->profile('default')
                ->output(TiptapOutput::Json)
                ->maxContentWidth('full')
                ->required(),

        ];
    }
}
