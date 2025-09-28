<div>
    <x-app-layout>
        <!-- Breadcrumbs -->
        <section class="bredcumbs-area bg-cover"
            style="background-image: url({{ asset('assets/images/bredcumb_bg.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-inner">
                            <div class="title">
                                <h2>{{ $buku->judul_buku }}</h2>
                            </div>
                            <ul class="bredcumbs-link">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active"><a href="#">Detail Buku</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detail Buku -->
        <section class="blog-details-section pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <!-- Konten utama -->
                    <div class="col-lg-8">
                        <div class="blog-details-wrapper mb-40">
                            <div class="post-entry-content">
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="far fa-user"></i> Admin</span></li>
                                        <li><span><i class="far fa-clock"></i>
                                                {{ $buku->created_at->diffForHumans() }}</span></li>
                                        <li><span><i class="far fa-bookmark"></i>
                                                {{ $buku->kategori->nama ?? 'Tanpa Kategori' }}</span></li>
                                    </ul>
                                </div>

                                @if ($buku->image?->url)
                                    <img src="{{ $buku->image->url }}" alt="{{ $buku->judul_buku }}"
                                        class="img-fluid mb-4" />
                                @endif

                                <h3 class="title">{{ $buku->judul_buku }}</h3>

                                <p class="mb-4">{{ $buku->deskripsi }}</p>

                                <ul class="list-unstyled">
                                    <li><strong>Penulis:</strong> {{ $buku->penulis }}</li>
                                    <li><strong>Penerbit:</strong> {{ $buku->penerbit }}</li>
                                    <li><strong>Tahun Penerbitan:</strong> {{ $buku->tahun_penerbitan }}</li>
                                    <li><strong>ISBN:</strong> {{ $buku->isbn }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar-widget-area">
                            <div class="widget categories-widget mb-40">
                                <h4 class="widget-title">Kategori Buku</h4>
                                <ul class="widget-link">
                                    <li>{{ $buku->kategori->nama ?? 'Tidak dikategorikan' }}</>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget social-widget mb-40">
                                <h4 class="widget-title">Share</h4>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="widget add_widget mb-40">
                                <div class="add_widget_text text-center bg-primary text-white p-4 rounded">
                                    <a href="{{ route('buku') }}" class="main-btn mt-2">Lihat Semua Buku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar -->
                </div>
            </div>
        </section>
    </x-app-layout>
</div>
