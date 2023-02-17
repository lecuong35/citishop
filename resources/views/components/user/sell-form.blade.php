<div class=" w-[772px] p-[24px]
mobile:w-full mobile:p-0">
<!-- category -->
    <div class="w-full relative">
        <div class="flex items-center justify-between
        px-[16px] py-[4px] rounded-lg h-[48px]
        border-solid border-[#c5c5c6] border-[1px]" id="lapCategory"
        onclick="clickToggleFlexCol('category')">
            <div>
                @if(!empty($post))
                    <p id="cate" class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold">{{$kind['name']}}</p>
                    <p id="cateText" class="text-[14px] leading-[22px] text-[#57585a]">{{$category['name']}}</p>
                    <input type="text" name="category_id" hidden id="category_id" value="<?php echo $post->category->id ?>">
                @else
                    <p id="cate" class="text-[16px] leading-[24px] text-[#2c2c2d] font-bold"></p>
                    <p id="cateText" class="text-[14px] leading-[22px] text-[#57585a]">Loại sản phẩm</p>
                    <input type="text" name="category_id" hidden id="category_id">
                @endif
            </div>
            <div>
                <i class="fa fa-chevron-down"></i>
            </div>
        </div>

        <div class="w-[724px] rounded-lg absolute top-[50px] 
        mobile:w-full mobile:top-0 mobile:h-full mobile:fixed mobile:right-0 
        mobile:bg-white mobile:z-10
        border-[#c5c5c6] border-solid border-[1px]"
        id="category"
        style="display: none">
            <div class="hidden mobile:block fixed top-0 left-0 h-[60px] shadow-lg w-full">
                <div class="absolute top-[20px] left-[10px]">
                    <i class="fa fa-arrow-left fa-xl"  onclick="clickToggleFlexCol('category')"></i>
                </div>
                <p class="text-center mt-[20px]">
                    Loại sản phẩm
                </p>
            </div>
            <div class="bg-white z-[9] mobile:w-full mobile:mt-[64px]">
                <div class="flex flex-col z-[9]
                    h-fit overflow-y-auto
                    mobile:h-full">
                    <div class="w-full mobile:px-[16px]">
                        @foreach($kinds as $key => $ca)
                            <div class="w-full flex items-center justify-between h-[48px] p-[12px] mobile:px-0 mobile:border-[#f0f0f1] border-b-[1px] border-solid border-[#c5c5c6]"
                            id="filter{{$key}}"
                            onclick="chooseKinds('filterBox{{$key}}', '{{$key}}', '{{$kindLength}}')">
                                <div class="flex hover:cursor-pointer">
                                    <img src="{{$data['category'][$key]}}" class="w-[24px] h-[24px] mr-[8px]">
                                    <p class="text-[16px] leading-[24px] text-[#2c2c2d]">
                                        {{$ca['name']}}
                                    </p>
                                </div>
                                <div>
                                    <i class="fa fa-chevron-right" style="color: #c5c5c6"></i>
                                </div>
                            </div>
                            <div id="filterBox{{$key}}" style="display: none"
                            class="mobile:bg-white mobile:h-full
                            mobile:fixed mobile:w-full mobile:top-0 mobile:left-0">
                                <div class="hidden mobile:block fixed top-0 left-0 h-[60px] shadow-lg w-full">
                                    <div class="absolute top-[20px] left-[10px]">
                                        <i class="fa fa-arrow-left fa-xl"  onclick="clickToggleFlexCol('filterBox{{$key}}')"></i>
                                    </div>
                                    <p class="text-center mt-[20px]">
                                        {{$ca['name']}}
                                    </p>
                                </div>
                                <div class="mobile:mt-[64px]">
                                    @foreach($categories[$key] as $category)
                                    <div class=" mobile:flex h-[60px] mobile:border-b-[1px] border-solid border-[#c5c5c6]
                                        xl:relative lg:relative md:relative sm:relative
                                         w-full items-center justify-center" 
                                        onclick="chooseCategory('{{$ca['name']}}', '{{$category['name']}}', '{{$category['id']}}')">
                                            <p class="py-[5px] px-[16px] w-full hover:bg-[#f0f0f1] hover:cursor-pointer">
                                                {{$category['name']}}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
 
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
          
<!-- post title -->
    <div class="py-[24px]">
        <div style="display: none;">
            <p>
                Tiêu đề bài đăng
            </p>
        </div>
        @if(!empty($post))
            <div>
                @include('components.input-text', ['id1' => 'post_title', 'id2' => 'post_title1', 'placeholder' => 'Tiêu đề', 'name'=>'post_title', 
                'value'=>"$post->post_title"])
            </div>
        @else 
            <div>
                @include('components.input-text', ['id1' => 'post_title', 'id2' => 'post_title1', 'placeholder' => 'Tiêu đề', 'name'=>'post_title', 'value'=>''])
            </div>
        @endif
    </div>

<!-- product name -->
    <div class="pb-[16px]">
        <div style="display: none;">
            <p>
                Tên sản phẩm
            </p>
        </div>
        @if(!empty($post))
        <div>
            @include('components.input-text', ['id1' => 'product_name', 'id2' => 'product_name1', 'placeholder' => 'Tên sản phẩm', 'name'=>'product_name', 'value'=>"$post->product_name"])
        </div>
        @else 
        <div>
            @include('components.input-text', ['id1' => 'product_name', 'id2' => 'product_name1', 'placeholder' => 'Tên sản phẩm', 'name'=>'product_name', 'value'=>''])
        </div>
        @endif
    </div>

<!-- product status -->
    <div class="flex flex-col">
        <label for="product_status" class="font-normal text-[16px] leading-[24px]">Trạng thái sản phẩm</label>
        <select name="product_status" id="product_status" class="w-full outline-none border-[1px] border-solid border-[#c5c5c6] rounded-md px-[16px] h-[44px]">
            @if(!empty($post))
                @foreach($productStatus as $status)
                    @if($status['id'] == $post['product_status'])
                        <option selected value="{{$status['id']}}">{{$status['status']}}</option>
                    @else
                        <option value="{{$status['id']}}">{{$status['status']}}</option>
                    @endif
                @endforeach
            @else
                @foreach($productStatus as $status)
                    <option value="{{$status['id']}}">{{$status['status']}}</option>
                @endforeach
            @endif
        </select>
    </div>

{{--price--}}
    <div class="mt-[16px]">
        <p>Giá sản phẩm</p>
        <div class="relative">
            <div class="relative w-full" id="salePrice">
                @if(!empty($post))
                    <input type="text" placeholder="Giá sản phẩm"
                    name="product_price"
                    value="<?php echo $post['product_price'] ?>"
                    class="pl-[40px] w-full h-[48px] outline-none
                    border-solid border-[#c5c5c6] border-[1px] rounded-lg
                    focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79]">
                    <p class="absolute top-[12px] left-[15px]">
                        S$
                    </p>
                @else
                    <input type="text" placeholder="Giá sản phẩm"
                    name="product_price"
                            class="pl-[40px] w-full h-[48px] outline-none
                            border-solid border-[#c5c5c6] border-[1px] rounded-lg
                            focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79]">
                    <p class="absolute top-[12px] left-[15px]">
                        S$
                    </p>
                @endif
            </div>
        </div>
    </div>

{{--description--}}
    <div class="mb-[16px] pt-[16px]">
        <p class="mb-[8px]">
            Mô tả chi tiết
        </p>
        @if(!empty($post))
            <textarea  name="product_description"
                placeholder="Miêu tả sản phẩm một cách kỹ lưỡng và ấn tượng. Khách hàng thường thích sản phẩm có câu chuyện của nó"
                class="w-full outline-none px-[16px] py-[12px] mobile:pb-0
                border-solid border-[#c5c5c6] rounded-lg mobile:rounded-none
                xl:border-[1px] lg:border-[1px] md:border-[1px] sm:border-[1px] mobile:border-b-[1px]
                focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79] mobile:focus:ring-0">
                    {{$post['product_description']}}
            </textarea>
        @else
            <textarea name="product_description"
                placeholder="Miêu tả sản phẩm một cách kỹ lưỡng và ấn tượng. Khách hàng thường thích sản phẩm có câu chuyện của nó"
                class="w-full outline-none px-[16px] py-[12px] mobile:pb-0
                border-solid border-[#c5c5c6] rounded-lg mobile:rounded-none
                xl:border-[1px] lg:border-[1px] md:border-[1px] sm:border-[1px] mobile:border-b-[1px]
                focus:ring-[#cce9e4] focus:ring-4 focus:border-[#008f79] mobile:focus:ring-0"
            ></textarea>
        @endif
    </div>

{{--brand--}} 
    <div class="pb-[16px]">
        <div>
            <p>
                Chọn hãng sản phẩm
            </p>
        </div>
        @if(!empty($post))
            @foreach($kinds as $key => $kindList)
                @if($kindList['id'] == $kind['id'])
                    <select id="brand{{$key}}" class="outline-none border-[1px] border-solid border-[#c5c5c6] rounded-md px-[16px] h-[44px] w-full">
                        @foreach($brands[$key] as $brandList)
                            @if($brandList['id'] == $brand['id'])
                                <option class="px-[16px] py-[12px] w-full
                                border-[#f0f0f1] border-solid border-b-[1px]
                                hover:bg-[rgba(0,143,121,0.2)] hover:cursor-pointer" 
                                selected
                                value="{{$brandList['id']}}">
                                    {{$brandList['name']}}
                                </option>

                            @else
                                <option class="px-[16px] py-[12px] w-full
                                border-[#f0f0f1] border-solid border-b-[1px]
                                hover:bg-[rgba(0,143,121,0.2)] hover:cursor-pointer" value="{{$brandList['id']}}">
                                    {{$brandList['name']}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                @else
                    <select id="brand{{$key}}" style="display: none;" class="w-full outline-none border-[1px] border-solid border-[#c5c5c6] rounded-md px-[16px] h-[44px]">
                        @foreach($brands[$key] as $brandList)
                            <option class="px-[16px] py-[12px] w-full
                            border-[#f0f0f1] border-solid border-b-[1px]
                            hover:bg-[rgba(0,143,121,0.2)] hover:cursor-pointer" value="{{$brandList['id']}}">
                                {{$brandList['name']}}
                            </option>
                        @endforeach
                    </select>
                @endif
            @endforeach
        @else
            @foreach($kinds as $key => $kind)
                <select id="brand{{$key}}" style="display: none;" class="w-full outline-none border-[1px] border-solid border-[#c5c5c6] rounded-md px-[16px] h-[44px]">
                    @foreach($brands[$key] as $brand)
                        <option class="px-[16px] py-[12px] w-full
                    border-[#f0f0f1] border-solid border-b-[1px]
                    hover:bg-[rgba(0,143,121,0.2)] hover:cursor-pointer" value="{{$brand['id']}}">
                            {{$brand['name']}}
                        </option>
                    @endforeach
                </select>
            @endforeach
        @endif
        </div>
    </div>
    <button type="submit" 
    class="px-[16px] py-[8px] bg-[#008f79] text-white rounded-md mobile:w-full mobile:fixed mobile:bottom-0 mobile:right-0">
            Gửi
    </button>

</div>
