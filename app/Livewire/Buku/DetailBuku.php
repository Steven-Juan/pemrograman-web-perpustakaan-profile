<?php

namespace App\Livewire\Buku;

use App\Models\Buku;
use Livewire\Component;
use Awcodes\Curator\Models\Media;

class DetailBuku extends Component
{
    public $buku;

    public function mount($id)
    {
        $this->buku = Buku::with(['kategori', 'image'])->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.buku.detail-buku', [
            'buku' => $this->buku,
        ]);
    }
}
