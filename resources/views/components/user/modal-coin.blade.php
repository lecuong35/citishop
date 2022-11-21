<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto
bg-[rgba(0,0,0,0.3)]"
     id="coinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none mt-[72px]
    mobile:mt-0 mobile:w-full mobile:ml-0">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col
            w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none
            text-current p-[24px] mobile:p-0">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between rounded-t-md
                text-center flex flex-col relative
                mobile:h-[64px] mobile:justify-center mobile:shadow-md">
                <button type="button"
                        class="w-4 h-4 p-1 text-black border-none rounded-none opacity-50
                        focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline
                        absolute top-[20px] left-[20px]"
                        data-bs-dismiss="modal" aria-label="Close">
                    <div class="hidden mobile:block">
                        <i class="fas fa-arrow-left fa-lg" style="opacity: 0.5"></i>
                    </div>
                </button>
                <h5 class="text-xl font-bold leading-normal text-gray-800
                mobile:text-[16px] mobile:leading-[24px]"
                    id="exampleModalLabel">Get more Coins</h5>
                <p class="text-[14px] leading-[22px] text-[#57585a] mobile:hidden">
                    Save more with bigger bundles
                </p>
            </div>
            <p class="text-[22px] leading-[30px] text-[#2c2c2d] font-bold
            mt-[24px] mb-[16px]
            hidden mobile:block text-center">
                Save more with bigger bundles
            </p>
            <div class="modal-body relative p-4 rounded-lg shadow-lg
            border-[#f0f0f1] border-solid border-[1px] mt-[30px]
            mobile:mt-0 mobile:p-0 mobile:rounded-none">
                @for($i = 0; $i < 15; $i++)
                    @include('components.user.coin-sales')
                @endfor
                <p class="text-[12px] leading-[20px] text-[#57585a] text-center">
                    By purchasing any of the above, you accept our
                    <span>
                        <a href="http://localhost:8080" class="text-[#2c2c2d] underline">
                            Terms of Service
                        </a>
                    </span>
                </p>

            </div>
        </div>
    </div>
</div>
