<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Support\RawJs;

class ProductResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Product Information')
                        ->description('Product Information')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Produk')
                                ->required()
                                ->placeholder('Masukkan nama produk'),
                            TextInput::make('stok')
                                ->required()
                                ->numeric()
                                ->minValue(1)
                                ->maxValue(10000)
                                ->step(1)
                                ->placeholder('Masukkan angka'),
                            TextInput::make('harga')
                                ->required()
                                ->numeric()
                                ->placeholder(placeholder: 'Masukkan harga produk'),
                            Grid::make(1) // Menggunakan satu kolom untuk full width
                                ->schema([
                                    MarkdownEditor::make('deskripsi')
                                        ->toolbarButtons([
                                            'blockquote',
                                            'bold',
                                            'bulletList',
                                            'codeBlock',
                                            'heading',
                                            'italic',
                                            'orderedList',
                                            'redo',
                                            'undo',
                                        ]),
                                ]),
                        ])->columns(2),
                    Section::make("Galeri Produk")
                        ->description("Galeri Produk")
                        ->schema([
                            FileUpload::make('product_image')->multiple()
                                ->image()
                                ->required()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    '1:1',
                                ])
                                ->minFiles(1)
                                ->maxFiles(5)
                                ->directory('product_images'),
                        ]),

                ])->columnSpan([
                    'sm' => 3,
                    'lg' => 2,
                ]),
                Group::make()->schema([
                    Section::make('Visibilitas')->description('Visibilitas Produk')->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'active' => 'Active',
                                'disabled' => 'Disabled',
                            ])
                            ->native(false)
                    ]),
                    Section::make('Tags')->schema([
                        TagsInput::make('tags')
                            ->label('Tags Produk')
                    ]),
                ])->columnSpan([
                    'sm' => 3,
                    'lg' => 1,
                ])
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('stok'),
                Tables\Columns\TextColumn::make('harga'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}