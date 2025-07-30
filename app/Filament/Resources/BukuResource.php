<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Models\Buku;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Data';

    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        return number_format(static::getModel()::count());
    }

    public static function getNavigationLabel(): string
    {
        return 'Buku';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->columns(2)
                    ->schema([
                        Forms\Components\Section::make('Informasi Buku')
                            ->schema([
                                Forms\Components\TextInput::make('judul_buku')
                                    ->label('Judul Buku')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('penulis')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('penerbit')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('tahun_penerbitan')
                                    ->label('Tahun Penerbitan')
                                    ->numeric()
                                    ->required(),

                                Forms\Components\TextInput::make('isbn')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(13),

                                Forms\Components\Textarea::make('deskripsi')
                                    ->rows(3)
                                    ->maxLength(1000),
                            ])
                            ->columnSpan(1),

                        Forms\Components\Section::make('Media & Kategori')
                            ->schema([
                                CuratorPicker::make('cover')
                                    ->label('Cover')
                                    ->required(),

                                Forms\Components\Select::make('kategori_id')
                                    ->label('Kategori')
                                    ->relationship('kategori', 'nama')
                                    ->searchable()
                                    ->required(),
                            ])
                            ->columnSpan(1),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_buku')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('penulis')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('penerbit')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('tahun_penerbitan')
                    ->label('Tahun')
                    ->sortable(),

                Tables\Columns\TextColumn::make('kategori.nama')
                    ->label('Kategori')
                    ->badge()
                    ->sortable(),

                CuratorColumn::make('cover')
                    ->label('Cover')
                    ->circular()
                    ->size(40),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBukus::route('/'),
            'create' => Pages\CreateBuku::route('/create'),
            'edit' => Pages\EditBuku::route('/{record}/edit'),
        ];
    }

    public static function getRelations(): array
    {
        return [];
    }
}
