<?php

namespace App\Livewire\Buku;

use App\Models\Buku;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\SchemaOrg\Schema;

class ListBuku extends Component
{
    use WithPagination;

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        seo()
            ->title($title = 'Daftar Buku')
            ->description($description = 'Koleksi buku yang tersedia.')
            ->canonical($url = route('buku'))
            ->addSchema(
                Schema::webPage()
                    ->name($title)
                    ->description($description)
                    ->url($url)
                    ->author(Schema::organization()->name(config('app.name')))
            );

        $bukus = Buku::with(['kategori', 'image'])
            ->latest()
            ->paginate(6);

        return view('livewire.buku.list-buku', compact('bukus'));
    }
}
