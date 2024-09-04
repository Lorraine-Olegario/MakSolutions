<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;
    protected static ?string $navigationLabel = 'Empresa';
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cnpj')
                    ->label('CNPJ')
                    ->maxLength(18)
                    ->required(),

                Forms\Components\TextInput::make('social_reason')
                    ->label('Razão Social')
                    ->required(),

                Forms\Components\TextInput::make('fantasy_name')
                    ->label('Nome Fantasia')
                    ->required(),

                Forms\Components\TextInput::make('cep')
                    ->label('CEP')
                    ->required(),

                Forms\Components\TextInput::make('street')
                    ->label('Logradouro')
                    ->required(),

                Forms\Components\TextInput::make('number')
                    ->label('Número')
                    ->required(),

                Forms\Components\TextInput::make('complement')
                    ->label('Complemento'),

                Forms\Components\TextInput::make('neighborhood')
                    ->label('Bairro')
                    ->required(),

                Forms\Components\TextInput::make('municipality')
                    ->label('Município')
                    ->required(),

                Forms\Components\Select::make('uf')
                    ->label('UF')
                    ->options([
                        ''  => 'Selecione Estado',
                        'AC' => 'Acre',
                        'AL' => 'Alagoas',
                        'AP' => 'Amapá',
                        'AM' => 'Amazonas',
                        'BA' => 'Bahia',
                        'CE' => 'Ceará',
                        'DF' => 'Distrito Federal',
                        'ES' => 'Espírito Santo',
                        'GO' => 'Goiás',
                        'MA' => 'Maranhão',
                        'MT' => 'Mato Grosso',
                        'MS' => 'Mato Grosso do Sul',
                        'MG' => 'Minas Gerais',
                        'PA' => 'Pará',
                        'PB' => 'Paraíba',
                        'PR' => 'Paraná',
                        'PE' => 'Pernambuco',
                        'PI' => 'Piauí',
                        'RJ' => 'Rio de Janeiro',
                        'RN' => 'Rio Grande do Norte',
                        'RS' => 'Rio Grande do Sul',
                        'RO' => 'Rondônia',
                        'RR' => 'Roraima',
                        'SC' => 'Santa Catarina',
                        'SP' => 'São Paulo',
                        'SE' => 'Sergipe',
                        'TO' => 'Tocantins',
                    ])
                    ->default('buyer')
                    ->required(),

                Forms\Components\TextInput::make('email')
                    ->label('E-mail')
                    ->required()
                    ->email(),

                Forms\Components\TextInput::make('whatsapp_suporte')
                    ->label('Whatsapp Suporte - Sem formatação')
                    ->required(),

                Forms\Components\TextInput::make('whatsapp_comercial')
                    ->label('Whatsapp Comercial - Sem formatação')
                    ->required(),

                Forms\Components\TextInput::make('telephone_1')
                    ->label('Telefone 1')
                    ->required(),

                Forms\Components\TextInput::make('telephone_2')
                    ->label('Telefone 2'),

                Forms\Components\TextInput::make('instagram')
                    ->label('Link Instagram')
                    ->url(),

                Forms\Components\TextInput::make('facebook')
                    ->label('Link Facebook')
                    ->url(),

                Forms\Components\FileUpload::make('logo')
                    ->label('Imagem Logo')
                    ->image() // Define que o arquivo deve ser uma imagem
                    ->required()
                    ->directory('/company/logo') // Define o diretório onde o arquivo será salvo
                    ->maxSize(2048) // Define o tamanho máximo do arquivo em KB
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('social_reason')
                    ->label('Razão Social')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }
}
