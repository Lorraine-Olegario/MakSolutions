<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;
    protected static ?string $navigationLabel = 'Notícias';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('sub_title')
                    ->label('Sub-Título')
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('publication_data')
                    ->label('Data de Publicação')
                    ->required()
                    ->displayFormat('d-m-Y')
                    ->format('Y-m-d')
                    ->default(now()),
                Forms\Components\RichEditor::make('description')
                    ->label('Descrição')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('cover_image')
                    ->label('Imagem de Capa')
                    ->directory('news')
                    ->required()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('6:4') // Define a relação de aspecto para cortar a imagem
                    ->imageResizeTargetWidth(1200) // Define a largura alvo para redimensionamento
                    ->imageResizeTargetHeight(800) // Define a altura alvo para redimensionamento
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->title) // Exibe o texto completo em uma dica de ferramenta (tooltip) ao passar o mouse
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('publication_data')
                    ->label('Data de Publicação')
                    ->sortable()
                    ->dateTime('d-m-Y')
                    ->searchable(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
