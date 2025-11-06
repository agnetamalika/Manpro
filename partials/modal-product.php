<?php
?>
<!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered lg:min-w-[1140px]">
        <div class="modal-content">
            <div class="modal-body p-8">
                <div class="absolute top-0 right-0 p-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-x text-gray-700"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-wrap">
                    <div class="md:w-1/2">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">
                            <div class="zoom" onmousemove="zoom(event)" style="background-image: url(./assets/images/products/product-single-img-1.jpg)">
                                <img src="./assets/images/products/product-single-img-1.jpg" alt="" />
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)" style="background-image: url(./assets/images/products/product-single-img-2.jpg)">
                                    <img src="./assets/images/products/product-single-img-2.jpg" alt="" />
                                </div>
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)" style="background-image: url(./assets/images/products/product-single-img-3.jpg)">
                                    <img src="./assets/images/products/product-single-img-3.jpg" alt="" />
                                </div>
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)" style="background-image: url(./assets/images/products/product-single-img-4.jpg)">
                                    <img src="./assets/images/products/product-single-img-4.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                            <div class="thumbnails flex gap-3" id="productModalThumbnails">
                                <div class="w-1/4">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="./assets/images/products/product-single-img-1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="w-1/4">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="./assets/images/products/product-single-img-2.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="w-1/4">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="./assets/images/products/product-single-img-3.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="w-1/4">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="./assets/images/products/product-single-img-4.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 pr-4 pl-4">
                        <div class="lg:pl-10 mt-6 md:mt-0">
                            <div class="flex flex-col gap-4">
                                <a href="#!" class="block text-green-600">Bakery Biscuits</a>
                                <h1>Napolitanke Ljesnjak</h1>
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <small class="text-yellow-500 inline-flex items-center">
                                            <!-- rating icons -->
                                        </small>
                                        <a href="#" class="text-green-600">(30 reviews)</a>
                                    </div>
                                    <div class="text-md">
                                        <span class="text-gray-900 font-semibold">$18</span>
                                        <span class="line-through text-gray-500">$24</span>

                                        <span><small class="text-red-600">26% Off</small></span>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-6">
                                    <hr />
                                    <div>
                                        <button type="button" class="btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border">
                                            250g
                                        </button>
                                        <button type="button" class="btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border">
                                            500g
                                        </button>
                                        <button type="button" class="btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border">
                                            1kg
                                        </button>
                                    </div>
                                    <div>
                                        <div class="w-1/3 md:w-1/4 lg:w-1/5">
                                            <div class="input-group input-spinner rounded-lg flex justify-between items-center">
                                                <input type="button" value="-" class="button-minus w-8 py-1 border-r cursor-pointer border-gray-300" data-field="quantity" />
                                                <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field w-9 px-2 text-center h-7 border-0 bg-transparent" />
                                                <input type="button" value="+" class="button-plus w-8 py-1 border-l cursor-pointer border-gray-300" data-field="quantity" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap justify-start gap-2 items-center">
                                        <div class="lg:w-1/3 md:w-2/5 w-full grid">
                                            <button type="button" class="btn bg-green-600 text-white border-green-600 justify-center">
                                                Add to cart
                                            </button>
                                        </div>
                                        <div class="md:w-1/3 w-full">
                                            <a href="#" class="mr-1 btn inline-flex items-center gap-x-2 px-0 h-10 w-10 justify-center bg-white text-gray-800 border-gray-300 border">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-exchange" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 10h14l-4 -4"></path>
                                                    <path d="M17 14h-14l4 4"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="btn inline-flex items-center gap-x-2 px-0 h-10 w-10 justify-center bg-white text-gray-800 border-gray-300 border">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                                <div>
                                    <table class="text-left w-full">
                                        <tbody>
                                            <tr>
                                                <td class="px-6 py-3">Product Code:</td>
                                                <td class="px-6 py-3">FBB00255</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3">Availability:</td>
                                                <td class="px-6 py-3">In Stock</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3">Type:</td>
                                                <td class="px-6 py-3">Fruits</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3">Shipping:</td>
                                                <td class="px-6 py-3">
                                                    <small>
                                                        01 day shipping.
                                                        <span class="text-gray-700">( Free pickup today)</span>
                                                    </small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <div class="relative">
                                        <a class="dropdown-toggle btn inline-flex items-center gap-x-2 bg-white text-gray-800 border-gray-300 border" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Share
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">Facebook</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Twitter</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Instagram</a>
                                            </li>
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
</div>
