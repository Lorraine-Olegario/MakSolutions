<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannersResource\Pages;
use App\Filament\Resources\BannersResource\RelationManagers;
use App\Models\Banners;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannersResource extends Resource
{
    protected static ?string $model = Banners::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->label('Banner Image')
                    ->required()
                    ->image()
                    ->directory('banners')
                    ->columnSpanFull()
                    ->imageCropAspectRatio('3:1')
                    ->imageResizeTargetWidth(1920)
                    ->imageResizeTargetHeight(640)
                ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')
                    ->label('Descrição') // Define um rótulo personalizado se necessário
                    ->sortable() // Opcional, se quiser habilitar a ordenação
                    ->searchable(), // Opcional, se quiser permitir busca nessa coluna
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanners::route('/create'),
            'edit' => Pages\EditBanners::route('/{record}/edit'),
        ];
    }
}
