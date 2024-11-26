<?php

namespace App\Filament\Blocks;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\TiptapBlock;

class PdfBlock extends TiptapBlock
{
    public string $preview = 'filament.blocks.previews.pdf-block';

    public string $rendered = 'filament.blocks.rendered.pdf-block';

    public function getLabel(): string
    {
        return __('Bloque pdf');
    }

    public function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->label(__('Título'))
                ->required(),
            FileUpload::make('file')
                ->label(__('Descargable'))
                ->disk('uploads')
                ->visibility('private')
                ->acceptedFileTypes(['application/pdf'])
                ->required(),
            FileUpload::make('image')
                ->label(__('Imagen'))
                ->disk('uploads')
                ->visibility('private')
                ->image(),
        ];
    }
}
