<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Products;
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
use Filament\Forms\Components\TextInput;
use Illuminate\Support\HtmlString;
use Tapp\FilamentValueRangeFilter\Filters\ValueRangeFilter;

class ProductResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationGroup = 'Product Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Product Information')
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
                        ->schema([
                            FileUpload::make('images')->multiple()
                                ->image()
                                ->required()
                                // sub label
                                ->label('Upload gambar')
                                ->placeholder('Upload beberapa gambar')
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    '1:1',
                                ])
                                ->visibility('public')
                                ->disk('public')
                                ->minFiles(1)
                                ->maxFiles(5)
                                ->directory('product_images'),
                        ]),

                ])->columnSpan([
                    'sm' => 3,
                    'lg' => 2,
                ]),
                Group::make()->schema([
                    Section::make('Visibilitas')->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'active' => 'Active',
                                'disabled' => 'Disabled',
                            ])
                            ->required()
                            ->native(false)
                    ]),
                    Section::make('Tags')->schema([
                        TagsInput::make('tags')
                            ->label('')
                    ]),
                    Section::make('Kategori')->schema([
                        Select::make('category_id')
                            ->relationship('category', 'nama')
                            ->label('Pilih Kategori')
                            ->createOptionForm([
                                TextInput::make('nama')
                                    ->required(),
                            ])
                            ->required()
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
                Tables\Columns\ImageColumn::make('images'),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('stok')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->searchable()
                    ->sortable()
                    ->money('IDR', true),
            ])
            ->filters([
                ValueRangeFilter::make('range_harga')
                    ->currency()
                    ->currencyCode('IDR')
                    ->locale('id'),
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
