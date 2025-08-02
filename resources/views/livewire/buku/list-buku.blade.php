<div>
    <x-app-layout>
        <!--====== Start Bredcumbs section ======-->
        <section class="bredcumbs-area bg-cover" style="background-image: url(assets/images/bredcumb_bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-inner">
                            <div class="title">
                                <h2>Koleksi Buku</h2>
                            </div>
                            <ul class="bredcumbs-link">
                                <li><a href="/">Home</a></li>
                                <li class="active"><a href="#">Koleksi Buku</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Bredcumbs section ======-->
        <!--====== Start Book List section ======-->
        <section class="blog-area-v1 pt-120 pb-80">
            <div class="container">
                <div class="row">
                    @forelse ($bukus as $buku)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post-item mb-40">
                                <div class="post-thumbnail">
                                    @if ($buku->image)
                                        <img class="img-fluid" src="{{ $buku->image->url }}"
                                            alt="{{ $buku->image->alt ?? $buku->judul_buku }}">
                                    @else
                                        <div class="bg-light text-center py-5 text-muted">
                                            <i class="fa fa-book fa-2x"></i><br>Tidak ada gambar
                                        </div>
                                    @endif
                                </div>
                                <div class="post-entry-content">
                                    <div class="entry-content">
                                        <div class="post-tag">
                                            <a href="#">{{ $buku->kategori->nama ?? 'Tanpa Kategori' }}</a>
                                        </div>
                                        <h3><a href="{{ $buku->url }}" wire:navigate> {{ $buku->judul_buku }} </a>
                                        </h3>
                                        <p>{{ Str::limit($buku->deskripsi, 100) }}</p>
                                    </div>
                                    <div class="post-meta">
                                        <ul>
                                            <li><span><i class="fal fa-user"></i> Admin</span></li>
                                            <li><span><i class="fal fa-calendar-alt"></i>
                                                    {{ $buku->created_at->format('d M Y') }}</span></li>
                                            <li><span><a href="{{ $buku->url }}" wire:navigate><i
                                                            class="fal fa-share"></i></a></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-warning text-center">Belum ada buku yang tersedia.</div>
                        </div>
                    @endforelse
                </div>

                @if ($bukus->hasPages())
                    <div class="pt-6 mt-6 text-center border-top">
                        {{ $bukus->links() }}
                    </div>
                @endif
            </div>
        </section><!--====== End Blog section ======-->
    </x-app-layout>
</div>
