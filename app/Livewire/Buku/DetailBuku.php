<?php

namespace App\Livewire\Buku;

use App\Models\Buku;
use Livewire\Component;
use Spatie\SchemaOrg\Schema;

class DetailBuku extends Component
{
    public $buku;

    /**
     * Mount the component.
     *
     * @param  int  $id
     * @return void
     */
    public function mount($id)
    {
        $this->buku = Buku::with(['kategori', 'image'])->findOrFail($id);
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        seo()
            ->title($this->buku->judul_buku)
            ->description(str($this->buku->deskripsi)->limit(160))
            ->canonical(route('buku.show', $this->buku->id))
            ->addSchema(
                Schema::book()
                    ->name($this->buku->judul_buku)
                    ->description($this->buku->deskripsi)
                    ->image($this->buku->image?->url)
                    ->author($this->buku->penulis)
            );

        if ($this->buku->image) {
            seo()->image($this->buku->image->url);
        }

        return view('livewire.buku.detail-buku');
    }
}
