<div class="modal fade hidden fixed top-0 left-0 w-full h-full
                    outline-none overflow-x-hidden overflow-y-auto
                    flex justify-start "
                       style="background-color: rgba(0, 0, 0, 0.5)"
                       id="example1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                      <div class="modal-dialog relative max-w-[440px] pointer-events-none
                        my-0 mt-0" style="margin-left: calc(100% - 440px)">
                          <div
                              class="modal-content border-none shadow-lg relative
                            flex flex-col w-full pointer-events-auto bg-white
                            bg-clip-padding rounded-none outline-none text-current">
                              <div
                                  class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                  <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel1">Các loại sản phẩm</h5>
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
                                  @foreach($kindOfAll as $key => $ki)
                                      <div class="cars items-center justify-between h-[73px]
                                        border-t-[1px] border-solid border-[#f0f1f1]">
                                          <form action="http://127.0.0.1:8000/home/{{$ki['id']}}" method="get">
                                                <div class="grid grid-cols-[367px_73px]">
                                                    <button type="submit" class="following flex items-center h-[73px] w-[367px] hover:bg-[#f0f0f1]">
                                                        <img
                                                            src="{{$logo}}"
                                                            class="w-[32px] h-[32px] mx-[15px]"
                                                        >
                                                        <p>
                                                            {{$ki['name']}}
                                                        </p>
                                                    </button>
                                                    <div class="w-[73px] h-[73px] flex items-center justify-center hover:bg-[#f0f0f1]"
                                                        onclick="showItemNav('{{$ki['id']}}')">
                                                        <i class="fa fa-chevron-down" id="{{$cateId}}chevron1"
                                                            style="transition: transform .5s ease-in-out"></i>
                                                    </div>
                                                </div>
                                          </form>
                                      </div>
                                      <div class="cars__items pb-[15px]" id="{{$ki['id']}}chev" style="display: none">
                                          @foreach($cate[$key] as $ca2)
                                          <form action="http://127.0.0.1:8000/home/{{$ki['id']}}/{{$ca2['id']}}" method="get"
                                                class="ml-[15px]
                                                    py-[8px] 
                                                    w-[400px] hover:bg-[#f0f0f1]">
                                                    <button type="submit" class="w-full flex items-center justify-start pl-[10px]">
                                                        {{$ca2['name']}}
                                                    </button>
                                            </form>
                                          @endforeach
                                      </div>
                                  @endforeach
                              </div>

                          </div>
                      </div>
                  </div>