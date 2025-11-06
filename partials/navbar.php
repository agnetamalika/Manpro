<?php
?>
<header>
    <!-- navbar -->
    <div class="border-b">
        <div class="pt-5">
            <div class="container">
                <div class="flex flex-wrap w-full items-center justify-between">
                    <div class="lg:w-1/6 md:w-1/2 w-2/5">
                        <a class="navbar-brand flex items-center gap-2 text-xl font-bold text-gray-800" href="<?php echo $webRoot; ?>index.php">
                            <!-- Map pin icon + site name -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-green-600">
                                <path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z" />
                                <circle cx="12" cy="10" r="2.5" />
                            </svg>
                            <span>TripPlanner</span>
                        </a>
                    </div>
                    <!-- Main navigation -->
                    <div class="lg:w-2/5 hidden lg:block">
                        <nav>
                            <ul class="flex items-center gap-6">
                                <li><a href="<?php echo $webRoot; ?>index.php" class="text-gray-700 hover:text-green-600">Home</a></li>
                                <li class="relative dropdown">
                                    <a class="dropdown-toggle text-gray-700 hover:text-green-600" href="#!" data-bs-toggle="dropdown">Trip Package</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#featured-plans">Featured Plans</a></li>
                                        <li><a class="dropdown-item" href="#popular-group-plans">Popular Group Plans</a></li>
                                    </ul>
                                </li>
                                <li><a href="#testimoni" class="text-gray-700 hover:text-green-600">Testimoni</a></li>
                                <li><a href="https://wa.me/6285328544258" target="_blank" class="text-gray-700 hover:text-green-600">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="lg:w-2/5 hidden lg:block">
                        <form action="#">
                            <div class="relative">
                                <label for="searchProducts" class="invisible hidden">Search</label>
                                <input
                                    class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base"
                                    type="search" placeholder="Search for products" id="searchProducts" />
                                <button class="absolute right-0 top-0 p-3" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                        width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                        <path d="M21 21l-6 -6" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- simplified right controls: only keep mobile menu toggle -->
                    <div class="lg:w-1/5 text-end md:w-1/2 w-3/5">
                        <div class="flex gap-7 items-center justify-end">
                            <div class="lg:hidden leading-none">
                                <!-- Mobile menu button -->
                                <button class="collapsed" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#navbar-default" aria-controls="navbar-default"
                                    aria-label="Toggle navigation">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-menu-2 text-gray-800" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 6l16 0" />
                                        <path d="M4 12l16 0" />
                                        <path d="M4 18l16 0" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Note: cart/offcanvas markup removed or simplified for TripPlanner -->
    </div>
</header>
