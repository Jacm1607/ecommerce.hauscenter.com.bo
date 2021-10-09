<div wire:init="loadPosts">
    @if (count($products))
        <div class="glider-contain">
            <ul class="glider-{{ $category->id }}">
                @foreach ($products as $product)
                    <li class="{{ $loop->last ? '' : 'sm:mr-4' }}">
                        <div
                            class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
                            <div class="overflow-x-hidden rounded-2xl relative">
                                <img class="h-40 rounded-2xl w-full object-cover"
                                    src="https://pixahive.com/wp-content/uploads/2020/10/Gym-shoes-153180-pixahive.jpg">
                                <p
                                    class="absolute right-2 top-2 bg-red-500 text-xs text-white font-semibold rounded-full p-1 group">
                                    -20 %
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 group-hover:opacity-50 opacity-70" fill="none"
                                            viewBox="0 0 24 24" stroke="black">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg> --}}
                                </p>
                            </div>
                            <div class="mt-4 pl-2 mb-2 flex justify-between ">
                                <div>
                                    <p class="text-xs font-semibold text-gray-900 mb-2 leading-4">
                                        {{ Str::limit($product->name, 25, '...') }}</p>
                                    <p class="text-sm font-bold text-cyan-800 mt-0">Bs.
                                        {{ number_format((float) $product->price, 2, '.', '') }}</p>
                                </div>
                                <div class="flex flex-col-reverse mb-1 mr-4 group cursor-pointer opacity-20">
                                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_pr1edcoq.json"
                                        background="transparent" speed="1" style="width: 50px; height: 50px;" loop
                                        autoplay></lottie-player>

                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <style>
                .glider-prev {
                    margin-left: 10px;
                    padding: 6px;
                    border-radius: 8px;
                    background-color: white;
                }

                .glider-next {
                    margin-right: 10px;
                    padding: 6px;
                    border-radius: 8px;
                    background-color: white;
                }

            </style>
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
        </div>
    @else
        <style>
            .loader {
                border-top-color: #3498db;
                -webkit-animation: spinner 1.5s linear infinite;
                animation: spinner 1.5s linear infinite;
            }

            @-webkit-keyframes spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                }
            }

            @keyframes spinner {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

        </style>
        <div class="mb-4 h-48 flex flex-col justify-center items-center">
            <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-16 w-16"></div>
            Cargando...
        </div>
    @endif
</div>
