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

        <section id="trip" class="lg:my-14 my-8">
  <style>
  /* Container section */
  .solo-trip-section {
    max-width: 1200px; /* Biar sejajar dengan carousel */
    margin: 0 auto;
    padding: 2rem 1rem;
  }

  /* Grid layout */
  .trip-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start; /* Rata kiri */
    gap: 1.5rem;
  }

  /* Card styling */
  .trip-card {
    width: calc(25% - 1.125rem); /* 4 card per baris */
    height: 380px;
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 0.75rem;
    overflow: hidden;
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    transition: transform 0.2s, box-shadow 0.2s;
  }

  .trip-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
  }

  /* Gambar di atas */
  .trip-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    object-position: center;
  }

  /* Isi card */
  .trip-card .content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1rem;
  }

  /* Tombol */
  .trip-card a {
    display: block;
    text-align: center;
    background-color: #22c55e;
    color: white;
    text-decoration: none;
    padding: 0.5rem 0;
    border-radius: 0.375rem;
    font-weight: 600;
    transition: background-color 0.2s;
  }

  .trip-card a:hover {
    background-color: #16a34a;
  }

  /* Responsive */
  @media (max-width: 1024px) {
    .trip-card {
      width: calc(33.333% - 1rem); /* 3 per baris */
    }
  }

  @media (max-width: 768px) {
    .trip-card {
      width: calc(50% - 0.75rem); /* 2 per baris */
    }
  }

  @media (max-width: 480px) {
    .trip-card {
      width: 100%; /* 1 per baris */
    }
  }
</style>


  <div class="container mx-auto">
    <div class="w-full mb-6 flex items-center justify-between">
      <h2 class="text-lg font-semibold">Solo Trip Plans</h2>
    </div>

    <div class="trip-grid">
      <!-- Card 1 -->
      <div class="trip-card">
        <img src="bromosolo.jpg" alt="Bromo Solo Trip" />
        <div class="content">
          <div>
            <div class="font-bold text-lg mb-1">Bromo Solo Trip</div>
            <div class="rating">⭐ 4.8/5 (1,024)</div>
            <p class="text-sm text-gray-600">Watch Sunrise View Gunung Bromo</p>
            <p class="text-sm text-gray-600">Climb to Kawah Bromo dan Pura Luhur Poten</p>
            <p class="text-sm text-gray-600">1 day 1 night</p>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Bromo%20Solo%20Trip">Book Now</a>
        </div>
      </div>

       <!-- Card 2 -->
      <div class="trip-card">
        <img src="labuansolo.jpg" alt="Labuan Bajo Solo Trip" />
        <div class="content">
          <div>
            <div class="font-bold text-lg mb-1">Labuan Bajo Solo Trip</div>
            <div class="rating">⭐ 4.9/5 (1,176)</div>
            <p class="text-sm text-gray-600">Visit Pink Beach</p>
            <p class="text-sm text-gray-600">Visit Loh Liong (Komodo Island)</p>
            <p class="text-sm text-gray-600">1 day 1 night</p>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Labuan%20Bajo%20Solo%20Trip">Book Now</a>
        </div>
      </div>

       <!-- Card 3 -->
      <div class="trip-card">
        <img src="karimunsolo.jpg" alt="Karimun Jawa Solo Trip" />
        <div class="content">
          <div>
            <div class="font-bold text-lg mb-1">Karimun Jawa Solo</div>
            <div class="rating">⭐ 4.7/5 (895)</div>
            <p class="text-sm text-gray-600">Visit Coral Reef Pulau Menjangan</p>
            <p class="text-sm text-gray-600">Visit Pantai Pancuran</p>
            <p class="text-sm text-gray-600">2 day 1 night</p>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Karimun%20Jawa%20Solo%20Trip">Book Now</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="trip-card">
        <img src="rinjanisolo.jpg" alt="Rinjani Tour Guide" />
        <div class="content">
          <div>
            <div class="font-bold text-lg mb-1">Rinjani Trekking</div>
            <div class="rating">⭐ 4.6/5 (732)</div>
            <p class="text-sm text-gray-600">Trekking to Top of Mount Rinjani</p>
            <p class="text-sm text-gray-600">2 day 1 night</p>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Rinjani%20Tour%20Guide">Book Now</a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="trip-card">
        <img src="lawesolo.jpg" alt="Lawe Waterfall Track" />
        <div class="content">
          <div>
            <div class="font-bold text-lg mb-1">Lawe Waterfall</div>
            <div class="rating">⭐ 4.5/5 (496)</div>
            <p class="text-sm text-gray-600">Trekking to Waterfall Lawe</p>
            <p class="text-sm text-gray-600">1 day</p>
            <p class="text-sm text-gray-600">2 Meals and Snacks</p>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Lawe%20Waterfall%20Track">Book Now</a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="trip-card">
        <img src="rajasolo.jpg" alt="Raja Ampat Solo Trip" />
        <div class="content">
          <div>
            <div class="font-bold text-lg mb-1">Raja Ampat Solo Trip</div>
            <div class="rating">⭐ 4.9/5 (1,102)</div>
            <p class="text-sm text-gray-600">Speedboat</p>
            <p class="text-sm text-gray-600">Snorkeling gear</p>
            <p class="text-sm text-gray-600">Hotel 3 day 2 night</p>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Raja%20Ampat%20Solo%20Trip">Book Now</a>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="trip-card">
        <img src="tumpaksolo.jpg" alt="Tumpak Sewu Waterfall Track" />
        <div class="content">
          <div>
            <div class="font-bold text-lg mb-1">Tumpak Sewu</div>
            <div class="rating">⭐ 4.8/5 (854)</div>
            <p class="text-sm text-gray-600">Trekking to Tumpak Sewu Waterfall</p>
            <p class="text-sm text-gray-600">1 day</p>
            <p class="text-sm text-gray-600">2 Meals and Snacks</p>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Tumpak%20Sewu%20Waterfall%20Track">Book Now</a>
        </div>
      </div>
  </div>
</section>

<style>
  /* ===== GROUP TRIP SECTION ===== */
  .group-trip-section {
    width: 100%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding: 2rem 1rem;
    box-sizing: border-box;
  }

  .group-trip-grid {
    display: grid;
    grid-template-columns: 2fr 3fr;
    gap: 1.5rem;
    align-items: stretch;
  }

  /* --- Best Seller Card --- */
  .best-seller-card {
    background: #fff;
    border-radius: 0.75rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  .best-seller-card img {
    width: 100%;
    height: 260px;
    object-fit: cover;
  }

  .best-seller-card .content {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
  }

  .best-seller-card h4 {
    color: #22c55e;
    font-weight: 700;
    font-size: 1rem;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
  }

  .best-seller-card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
  }

  .best-seller-card ul {
    margin: 0 0 1rem 1rem;
    color: #4b5563;
  }

  .best-seller-card ul li {
    list-style: disc;
    margin-bottom: 0.25rem;
  }

  .rating {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    font-weight: 600;
    color: #facc15;
  }

  .rating span {
    color: #374151;
    font-weight: 500;
  }

  .book-btn {
    display: block;
    text-align: center;
    background-color: #22c55e;
    color: white;
    text-decoration: none;
    padding: 0.5rem 0;
    border-radius: 0.375rem;
    font-weight: 600;
    transition: background-color 0.2s;
    margin-top: 1rem;
  }

  .book-btn:hover {
    background-color: #16a34a;
  }

  /* --- Small Cards Grid --- */
  .trip-small-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
  }

  .trip-small-card {
    background: #fff;
    border-radius: 0.75rem;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.2s ease;
  }

  .trip-small-card:hover {
    transform: translateY(-4px);
  }

  .trip-small-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
  }

  .trip-small-card .content {
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
  }

  .trip-small-card h4 {
    font-weight: 700;
    font-size: 1.125rem;
    margin-bottom: 0.5rem;
  }

  .trip-small-card ul {
    margin: 0 0 1rem 1rem;
    color: #4b5563;
  }

  .trip-small-card ul li {
    list-style: disc;
    margin-bottom: 0.25rem;
  }

  @media (max-width: 1024px) {
    .group-trip-grid {
      grid-template-columns: 1fr;
    }
    .trip-small-grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media (max-width: 640px) {
    .trip-small-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="lg:my-14 my-8">
  <div class="container mx-auto px-4">
    <h2 class="text-lg font-semibold mb-6">Group Trip Plans</h2>

  <div class="group-trip-grid">
    <!-- LEFT: Best Seller -->
    <div class="best-seller-card">
      <img src="groupraja.jpg" alt="Raja Ampat Group Trip">
      <div class="content">
        <div>
          <h4>Best Seller</h4>
          <h3>Raja Ampat Group Trip</h3>
          <ul>
            <li>5–15 People</li>
            <li>Island Hopping</li>
            <li>Trekking</li>
            <li>Exploring Wayag’s Lagoon</li>
            <li>Turtle Beaches</li>
            <li>Hotel 6 Days 7 Nights</li>
            <li>Tour Guide</li>
          </ul>
          <div class="rating">⭐ 4.9/5 (1,045 reviews)</div>
        </div>
        <a href="https://wa.me/?text=I'm%20interested%20in%20Raja%20Ampat%20Group%20Trip" class="book-btn">Book Now</a>
      </div>
    </div>

    <!-- RIGHT: 3 smaller cards -->
    <div class="trip-small-grid">
      <div class="trip-small-card">
        <img src="bromogroup.jpg" alt="Bromo Group Trip">
        <div class="content">
          <div>
            <h4>Bromo Group Trip</h4>
            <div class="rating">⭐ 4.8/5 (986 reviews)</div>
            <ul>
              <li>3–8 People per Group</li>
              <li>Bromo Volcano with Sunrise</li>
              <li>Ijen Volcano with Blue Flames</li>
              <li>Visit Tumpak Sewu Waterfall</li>
              <li>3 Days 2 Nights</li>
            </ul>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Bromo%20Group%20Trip" class="book-btn">Book Now</a>
        </div>
      </div>

      <div class="trip-small-card">
        <img src="labuangroup.jpg" alt="Labuan Bajo Group">
        <div class="content">
          <div>
            <h4>Labuan Bajo Group</h4>
            <div class="rating">⭐ 4.9/5 (1,073 reviews)</div>
            <ul>
              <li>5–15 People per Group</li>
              <li>Visit Komodo Island</li>
              <li>Visit Pink Beach</li>
              <li>Swimming & Snorkeling</li>
              <li>Shared Cabin Accommodation</li>
              <li>5 Days 6 Nights</li>
            </ul>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Labuan%20Bajo%20Group" class="book-btn">Book Now</a>
        </div>
      </div>

      <div class="trip-small-card">
        <img src="karimungroup.jpg" alt="Karimun Jawa Trip">
        <div class="content">
          <div>
            <h4>Karimun Jawa Trip</h4>
            <div class="rating">⭐ 4.7/5 (869 reviews)</div>
            <ul>
              <li>7–12 People per Group</li>
              <li>Boat Tours</li>
              <li>Snorkeling</li>
              <li>Shark Diving</li>
              <li>River Rafting / Tubing</li>
              <li>3 Days 2 Nights</li>
            </ul>
          </div>
          <a href="https://wa.me/?text=I'm%20interested%20in%20Karimun%20Jawa%20Trip" class="book-btn">Book Now</a>
        </div>
      </div>
    </div>
  </div>
</section>



        <!-- Testimonial carousel and other sections remain inlined from the original HTML -->
        <section id="testimoni" class="lg:my-14 my-8">
            <div class="container">
                <div class="w-full mb-6">
                    <h2 class="text-lg">Their Sayings</h2>
                </div>

                <div class="swiper-container swiper" id="swiper-testimonials" data-pagination-type="bullets" data-speed="600"
                    data-space-between="20" data-pagination="true" data-navigation="false" data-autoplay="true"
                    data-autoplay-delay="5000" data-effect="slide" data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 2}}'>
                    <div class="swiper-wrapper py-6">
                        <div class="swiper-slide">
                            <div class="p-6 bg-white border rounded-lg shadow-sm">
                                <p class="text-gray-700">"Nyobain paket raja ampat sama beberapa teman. Sangat luar biasa. Layanan TripPlanner benar-benar profesional. Recommended!"</p>
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
                                <p class="text-gray-700">"Guide-nya ramah dan itinerary pas. Labuan Bajo trip veryyyyy memorable!"</p>
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
                                <p class="text-gray-700">"Pendakian Rinjani menjadi pengalaman yang sangat tidak terlupakan bagi saya. Thanks TripPlanner"</p>
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
                        controlsText: ['', ''],
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

