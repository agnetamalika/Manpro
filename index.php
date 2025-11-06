<?php
// If you serve the site from a subfolder, set $webRoot to that path (without trailing slash), e.g. '/Manpro/src/'
$webRoot = '';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="<?php echo $webRoot; ?>node_modules/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $webRoot; ?>node_modules/swiper/swiper-bundle.min.css" />
    <?php include __DIR__ . '/partials/head.php'; ?>

    <title>TripPlanner</title>
</head>

<body>
    <?php include __DIR__ . '/partials/navbar.php'; ?>
    <main>
        <!-- Hero / Carousel (tiny-slider) -->
        <section class="mt-8">
            <div class="container">
                <div id="hero-tns" class="tiny-slider-carousel">
                    <div class="hero-slide" style="background: url(rajaampat.jpg) no-repeat center/cover; border-radius: .5rem;">
                        <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                            <h1 class="text-white text-3xl lg:text-5xl font-bold leading-tight">Raja Ampat</h1>
                            <p class="text-white mt-3">Explore pristine coral reefs and crystal-clear waters.</p>
                        </div>
                    </div>
                    <div class="hero-slide" style="background: url(labuanbajo.jpg) no-repeat center/cover; border-radius: .5rem;">
                        <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                            <h1 class="text-white text-3xl lg:text-5xl font-bold leading-tight">Labuan Bajo</h1>
                            <p class="text-white mt-3">Gateway to Komodo and stunning island-hopping trips.</p>
                        </div>
                    </div>
                    <div class="hero-slide" style="background: url(curuglawe.png) no-repeat center/cover; border-radius: .5rem;">
                        <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                            <h1 class="text-white text-3xl lg:text-5xl font-bold leading-tight">Air Terjun Lawe</h1>
                            <p class="text-white mt-3">Hidden waterfall adventures and lush jungle trails.</p>
                        </div>
                    </div>
                    <div class="hero-slide" style="background: url(bromo.jpg) no-repeat center/cover; border-radius: .5rem;">
                        <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                            <h1 class="text-white text-3xl lg:text-5xl font-bold leading-tight">Bromo</h1>
                            <p class="text-white mt-3">Sunrise hikes and otherworldly volcanic landscapes.</p>
                        </div>
                    </div>
                    <div class="hero-slide" style="background: url(karimunjawa.jpg) no-repeat center/cover; border-radius: .5rem;">
                        <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                            <h1 class="text-white text-3xl lg:text-5xl font-bold leading-tight">Karimun Jawa</h1>
                            <p class="text-white mt-3">Pristine islands and snorkeling experiences.</p>
                        </div>
                    </div>
                    <div class="hero-slide" style="background: url(tumpaksewu.jpeg) no-repeat center/cover; border-radius: .5rem;">
                        <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                            <h1 class="text-white text-3xl lg:text-5xl font-bold leading-tight">Tumpak Sewu</h1>
                            <p class="text-white mt-3">Dramatic multi-tiered waterfalls and scenic viewpoints.</p>
                        </div>
                    </div>
                    <div class="hero-slide" style="background: url(rinjani.jpg) no-repeat center/cover; border-radius: .5rem;">
                        <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                            <h1 class="text-white text-3xl lg:text-5xl font-bold leading-tight">Rinjani</h1>
                            <p class="text-white mt-3">Mountaineering treks and breathtaking crater views.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- rest of content is included from original index.html via direct copy for now -->
        <?php
        // include the remaining markup from the original index.html body
        // to keep this change minimal we've copied the modified index content into this file
        ?>

        <?php include __DIR__ . '/partials/modal-product.php'; ?>
       <section class="lg:my-14 my-8">
    <div class="container">
        <div class="w-full mb-6 flex items-center justify-between">
                    <h2 class="text-lg">Solo Trip Plans</h2>
                </div>
                    <div class="swiper-container swiper overflow-hidden" id="swiper-solo-plans" data-pagination-type="bullets" data-speed="400"
                        data-pagination="true" data-navigation="true" data-autoplay="true"
                        data-autoplay-delay="3000" data-effect="slide" data-loop="true"
                        style="padding: 1rem 0;">
                        <div class="swiper-wrapper py-6">
                            <!-- slide 1 -->
                            <div class="swiper-slide" style="width: 280px;">
                                <a href="#!" class="block">
                                    <div class="bg-white border rounded-lg overflow-hidden">
                                        <img src="bromosolo.jpg" alt="Bromo Solo Trip" class="w-full h-48 object-cover" />
                                        <div class="p-4">
                                            <div class="font-bold text-lg mb-2">Bromo Solo Trip</div>
                                            <div class="text-sm text-gray-600">
                                                <p>Watch Sunrise View Gunung Bromo</p>
                                                <p>Climb to Kawah Bromo dan Pura Luhur Poten</p>
                                                <p>1 day 1 night</p>
                                            </div>
                                            <div class="mt-4">
                                                <a class="block text-center bg-green-600 text-white text-sm px-4 py-2 rounded hover:bg-green-700" href="https://wa.me/?text=I'm%20interested%20in%20Bromo%20Solo%20Trip">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- slide 2 -->
                            <div class="swiper-slide" style="width: 280px;">
                                <a href="#!" class="block">
                                    <div class="bg-white border rounded-lg overflow-hidden">
                                        <img src="labuansolo.jpg" alt="Labuan Bajo Solo Trip" class="w-full h-48 object-cover" />
                                        <div class="p-4">
                                            <div class="font-bold text-lg mb-2">Labuan Bajo Solo Trip</div>
                                            <div class="text-sm text-gray-600">
                                                <p>Visit Pink Beach</p>
                                                <p>Visit Loh Liong (Komodo Island)</p>
                                                <p>1 day 1 night</p>
                                            </div>
                                            <div class="mt-4">
                                                <a class="block text-center bg-green-600 text-white text-sm px-4 py-2 rounded hover:bg-green-700" href="https://wa.me/?text=I'm%20interested%20in%20Labuan%20Bajo%20Solo%20Trip">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- slide 3 -->
                            <div class="swiper-slide" style="width: 280px;">
                                <a href="#!" class="block">
                                    <div class="bg-white border rounded-lg overflow-hidden">
                                        <img src="karimunsolo.jpg" alt="Karimun Jawa Solo Trip" class="w-full h-48 object-cover" />
                                        <div class="p-4">
                                            <div class="font-bold text-lg mb-2">Karimun Jawa Solo Trip</div>
                                            <div class="text-sm text-gray-600">
                                                <p>Visit Coral Reef Pulau Menjangan</p>
                                                <p>Visit Pantai Pancuran</p>
                                                <p>2 day 1 night</p>
                                            </div>
                                            <div class="mt-4">
                                                <a class="block text-center bg-green-600 text-white text-sm px-4 py-2 rounded hover:bg-green-700" href="https://wa.me/?text=I'm%20interested%20in%20Karimun%20Jawa%20Solo%20Trip">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- slide 4 -->
                            <div class="swiper-slide" style="width: 280px;">
                                <a href="#!" class="block">
                                    <div class="bg-white border rounded-lg overflow-hidden">
                                        <img src="rinjanisolo.jpg" alt="Rinjani Tour Guide" class="w-full h-48 object-cover" />
                                        <div class="p-4">
                                            <div class="font-bold text-lg mb-2">Rinjani Tour Guide</div>
                                            <div class="text-sm text-gray-600">
                                                <p>Track to Top of Mount Rinjani</p>
                                                <p>2 day 1 night</p>
                                            </div>
                                            <div class="mt-4">
                                                <a class="block text-center bg-green-600 text-white text-sm px-4 py-2 rounded hover:bg-green-700" href="https://wa.me/?text=I'm%20interested%20in%20Rinjani%20Tour%20Guide">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- slide 5 -->
                            <div class="swiper-slide" style="width: 280px;">
                                <a href="#!" class="block">
                                    <div class="bg-white border rounded-lg overflow-hidden">
                                        <img src="lawesolo.jpg" alt="Lawe Waterfall Track" class="w-full h-48 object-cover" />
                                        <div class="p-4">
                                            <div class="font-bold text-lg mb-2">Lawe Waterfall Track</div>
                                            <div class="text-sm text-gray-600">
                                                <p>Track to Waterfall Lawe</p>
                                                <p>1 day</p>
                                                <p>2 Meals and Snacks</p>
                                            </div>
                                            <div class="mt-4">
                                                <a class="block text-center bg-green-600 text-white text-sm px-4 py-2 rounded hover:bg-green-700" href="https://wa.me/?text=I'm%20interested%20in%20Lawe%20Waterfall%20Track">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- slide 6 -->
                            <div class="swiper-slide" style="width: 280px;">
                                <a href="#!" class="block">
                                    <div class="bg-white border rounded-lg overflow-hidden">
                                        <img src="rajasolo.jpg" alt="Raja Ampat Solo Trip" class="w-full h-48 object-cover" />
                                        <div class="p-4">
                                            <div class="font-bold text-lg mb-2">Raja Ampat Solo Trip</div>
                                            <div class="text-sm text-gray-600">
                                                <p>Speedboat</p>
                                                <p>Snorkeling gear</p>
                                                <p>Hotel 3 day 2 night</p>
                                            </div>
                                            <div class="mt-4">
                                                <a class="block text-center bg-green-600 text-white text-sm px-4 py-2 rounded hover:bg-green-700" href="https://wa.me/?text=I'm%20interested%20in%20Raja%20Ampat%20Solo%20Trip">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- slide 7 -->
                            <div class="swiper-slide" style="width: 280px;">
                                <a href="#!" class="block">
                                    <div class="bg-white border rounded-lg overflow-hidden">
                                        <img src="tumpaksolo.jpg" alt="Tumpak Sewu Waterfall Track" class="w-full h-48 object-cover" />
                                        <div class="p-4">
                                            <div class="font-bold text-lg mb-2">Tumpak Sewu Waterfall Track</div>
                                            <div class="text-sm text-gray-600">
                                                <p>Track to Waterfall</p>
                                                <p>1 day</p>
                                                <p>2 Meals and Snacks</p>
                                            </div>
                                            <div class="mt-4">
                                                <a class="block text-center bg-green-600 text-white text-sm px-4 py-2 rounded hover:bg-green-700" href="https://wa.me/?text=I'm%20interested%20in%20Tumpak%20Sewu%20Waterfall%20Track">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination mt-4"></div>
                        </div>
                    <!-- Navigation Buttons -->
                    <div class="swiper-button-prev !-left-2"></div>
                    <div class="swiper-button-next !-right-2"></div>
                </div>
            </div>
        </section>

        <!-- Testimonial carousel and other sections remain inlined from the original HTML -->
        <section id="testimoni" class="lg:my-14 my-8">
            <div class="container">
                <div class="w-full mb-6">
                    <h2 class="text-lg">Testimoni</h2>
                </div>

                <div class="swiper-container swiper" id="swiper-testimonials" data-pagination-type="bullets" data-speed="600"
                    data-space-between="20" data-pagination="true" data-navigation="false" data-autoplay="true"
                    data-autoplay-delay="5000" data-effect="slide" data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 2}}'>
                    <div class="swiper-wrapper py-6">
                        <div class="swiper-slide">
                            <div class="p-6 bg-white border rounded-lg shadow-sm">
                                <p class="text-gray-700">"Perjalanan ke Raja Ampat sangat luar biasa. Layanan TripPlanner sangat membantu dan profesional."</p>
                                <div class="mt-4 flex items-center gap-3">
                                    <img src="<?php echo $webRoot; ?>assets/images/avatar/avatar-1.jpg" class="w-12 h-12 rounded-full" alt="" />
                                    <div>
                                        <div class="font-semibold">Ayu Prasetyo</div>
                                        <div class="text-sm text-gray-500">Traveler</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="p-6 bg-white border rounded-lg shadow-sm">
                                <p class="text-gray-700">"Guide-nya ramah dan itinerary pas. Labuan Bajo trip memorable!"</p>
                                <div class="mt-4 flex items-center gap-3">
                                    <img src="<?php echo $webRoot; ?>assets/images/avatar/avatar-2.jpg" class="w-12 h-12 rounded-full" alt="" />
                                    <div>
                                        <div class="font-semibold">Budi Santoso</div>
                                        <div class="text-sm text-gray-500">Backpacker</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="p-6 bg-white border rounded-lg shadow-sm">
                                <p class="text-gray-700">"Pendakian Rinjani tersusun rapi, pengalaman yang tidak terlupakan."</p>
                                <div class="mt-4 flex items-center gap-3">
                                    <img src="<?php echo $webRoot; ?>assets/images/avatar/avatar-3.jpg" class="w-12 h-12 rounded-full" alt="" />
                                    <div>
                                        <div class="font-semibold">Siti Rahma</div>
                                        <div class="text-sm text-gray-500">Hiker</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
        </section>

    </main>
    <?php include __DIR__ . '/partials/footer.php'; ?>
    <?php include __DIR__ . '/partials/scripts.php'; ?>

    <script src="<?php echo $webRoot; ?>assets/js/vendors/countdown.js"></script>

    <script src="<?php echo $webRoot; ?>node_modules/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="<?php echo $webRoot; ?>assets/js/vendors/tns-slider.js"></script>
    <script src="<?php echo $webRoot; ?>assets/js/vendors/zoom.js"></script>
    <!-- tiny-slider CDN fallback -->
    <script src="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.4/dist/min/tiny-slider.js"></script>
    <script src="<?php echo $webRoot; ?>assets/js/vendors/language.js"></script>
    <!-- Swiper JS -->
    <script src="<?php echo $webRoot; ?>node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo $webRoot; ?>assets/js/vendors/swiper.js"></script>
    <script src="<?php echo $webRoot; ?>assets/js/vendors/validation.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    var solo = new Swiper('#swiper-solo-plans', {
        slidesPerView: 3,
        spaceBetween: 24,
        loop: false,
        autoplay: false,
        navigation: {
            nextEl: '#swiper-solo-plans .swiper-button-next',
            prevEl: '#swiper-solo-plans .swiper-button-prev',
        },
        pagination: {
            el: '#swiper-solo-plans .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: { slidesPerView: 1, spaceBetween: 16 },
            640: { slidesPerView: 2, spaceBetween: 20 },
            1024: { slidesPerView: 3, spaceBetween: 24 }
        }
    });
});
</script>

    <script>
        // Initialize tiny-slider for hero carousel (ensure tiny-slider script is loaded)
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof tns !== 'undefined') {
                try {
                    tns({
                        container: '#hero-tns',
                        items: 1,
                        slideBy: 'page',
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        controls: true,
                        nav: true,
                        controlsText: ['◀', '▶'],
                        mouseDrag: true,
                        gutter: 0
                    });
                } catch (e) {
                    console.warn('tiny-slider init failed', e);
                }
            }
        });
    </script>
</body>

</html>
