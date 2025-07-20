<footer class="footer-area-v1 footer-area-v2">
    <div class="footer-widget-area pt-80 pb-35">
        <div class="container">
            <div class="footer-top pb-80">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="footer_logo">
                            <img src="{{ asset('assets/images/logo_1.png') }}" class="img-fluid" alt="Logo">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="social-box">
                            <ul class="social-link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widget pt-75">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget categories-widget mb-40">
                            <h4 class="widget-title">Services</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="widget-link">
                                        <li><a href="#">Product Strategy</a></li>
                                        <li><a href="#">Product Engineering</a></li>
                                        <li><a href="#">Architecture</a></li>
                                        <li><a href="#">UX / UI Design</a></li>
                                        <li><a href="#">App Development</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="widget-link">
                                        <li><a href="#">Video Editing</a></li>
                                        <li><a href="#">Software Development</a></li>
                                        <li><a href="#">Game Design</a></li>
                                        <li><a href="#">Business Planning</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget contact-widget mb-40">
                            <h4 class="widget-title">Contact</h4>
                            <div class="contact-info">
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                                <p><a href="tel:+8789676534567">+8789 676 534 56 7</a></p>
                                <p>12/A, CDA Epic Hub, US</p>
                                <p><a href="https://example.com">example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="widget recent-post-widget mb-40">
                            <h4 class="widget-title">News Feeds</h4>
                            <div class="blog-post-item">
                                <div class="post-thumbnail">
                                    <img src="{{ asset('assets/images/blog/feed_1.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="post-entry-content">
                                    <div class="entry-content">
                                        <h3><a href="#">Voice and Data Systems are crucial to the success or failure.</a></h3>
                                    </div>
                                    <div class="post-meta">
                                        <ul>
                                            <li><span><i class="fal fa-user"></i> By <a href="#">Admin</a></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-post-item">
                                <div class="post-thumbnail">
                                    <img src="{{ asset('assets/images/blog/feed_2.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="post-entry-content">
                                    <div class="entry-content">
                                        <h3><a href="#">Many companies provide laptops, cell phones, and Internet</a></h3>
                                    </div>
                                    <div class="post-meta">
                                        <ul>
                                            <li><span><i class="fal fa-user"></i> By <a href="#">Admin</a></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-link">
                        <ul>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
