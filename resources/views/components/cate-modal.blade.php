<div class="modal fade hidden fixed top-0 left-0 w-full h-full
                outline-none overflow-x-hidden overflow-y-auto
                flex justify-start" style="background-color: rgba(0, 0, 0, 0.5)"
     id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog relative max-w-[440px] pointer-events-none
                    my-0 mt-0" style="margin-left: calc(100% - 440px)">
        <div
            class="modal-content border-none shadow-lg relative
                            flex flex-col w-full pointer-events-auto bg-white
                            bg-clip-padding rounded-none outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">All Categories</h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black
                                        border-none rounded-none opacity-50 focus:shadow-none
                                        focus:outline-none focus:opacity-100 hover:text-black
                                        hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <div class="modal__search">
                    <input type="text"
                           placeholder="Search categories"
                           class="mt-1 pl-[30px] h-[44px] w-full
                                           text-[16px] leading-[16px] text-[#57585a]
                                           border-solid border-[1px] border-[#57585a]
                                           outline-none rounded-[6px]
                                           focus:ring-[#cce9e4] focus:ring-4
                                           focus:border-[#008f79]">
                    <i class="fa fa-search opacity-70 absolute top-[34px] left-[20px]"></i>

                </div>
            </div>
            <div class="category__items">
                <a href="https://www.carousell.sg/" class="following flex items-center h-[73px]
                                border-t-[1px] border-solid border-[#f0f1f1]
                                hover:bg-[#f0f1f1]">
                    <img
                        src="https://media.karousell.com/media/photos/country-collections/icons/1/2020/01/22/56-Following-cxxhdpi_1579663947.19.png"
                        alt="following"
                        class="w-[32px] h-[32px] mx-[15px]"

                    >
                    <p>
                        Following
                    </p>
                </a>

                @foreach($showCategories as $ca)
                    <div class="cars items-center justify-between h-[73px]
                                    border-t-[1px] border-solid border-[#f0f1f1]">
                        <div class="grid grid-cols-[367px_73px]">
                            <a href="https://www.carousell.sg/"
                               class="following flex items-center h-[73px] w-[367px] hover:bg-[#f0f0f1]">
                                <img
                                    src="{{$ca}}"
                                    alt="following"
                                    class="w-[32px] h-[32px] mx-[15px]"
                                >
                                <p>
                                    Cars
                                </p>
                            </a>
                            <div class="w-[73px] h-[73px] flex items-center justify-center hover:bg-[#f0f0f1]"
                                 onclick="showItems({{$cateId}})">
                                <i class="fa fa-chevron-down" id="{{$cateId}}chevron"
                                   style="transition: transform .5s ease-in-out"></i>
                            </div>
                        </div>
                    </div>
                    <div class="cars__items pb-[15px]" id="{{$cateId}}" style="display: none">
                        <div href="https://www.carousell.sg/"
                             class="ml-[15px]
                                       py-[8px] pr-[260px] pl-[47px]
                                        w-[400px] hover:bg-[#f0f0f1]">
                            <a href="https://www.carousell.sg/">Used cars</a>
                        </div>
                        <div href="https://www.carousell.sg/"
                             class="ml-[15px]
                                       py-[8px] pr-[260px] pl-[47px]
                                        w-[400px] hover:bg-[#f0f0f1]">
                            <a href="https://www.carousell.sg/">Used cars</a>
                        </div>
                        <div href="https://www.carousell.sg/"
                             class="ml-[15px]
                                       py-[8px] pr-[260px] pl-[47px]
                                        w-[400px] hover:bg-[#f0f0f1]">
                            <a href="https://www.carousell.sg/">Used cars</a>
                        </div>
                        <div href="https://www.carousell.sg/"
                             class="ml-[15px]
                                       py-[8px] pr-[260px] pl-[47px]
                                        w-[400px] hover:bg-[#f0f0f1]">
                            <a href="https://www.carousell.sg/">Used cars</a>
                        </div>
                    </div>
                    @php
                        $cateId++;
                    @endphp
                @endforeach
            </div>

        </div>
    </div>
</div>
