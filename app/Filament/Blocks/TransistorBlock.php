<?php

namespace App\Filament\Blocks;

use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\TiptapBlock;

class TransistorBlock extends TiptapBlock
{
    public string $preview = 'filament.blocks.previews.transistor-block';

    public string $rendered = 'filament.blocks.rendered.transistor-block';

    public function getLabel(): string
    {
        return __('Audio de Transistor');
    }

    public function getFormSchema(): array
    {
        return [
            TextInput::make('url')
                ->prefixIcon('heroicon-o-microphone')
                ->url()
                ->label(__('URL de Transistor'))
                ->required(),
        ];
    }
}
