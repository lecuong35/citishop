<!-- Modal -->
<div class="modal bg-[rgba(0,0,0,0.56)] fixed top-[0px] left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
     id="userStatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none
    pt-[72px] max-w-[720px]">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-[24px] font-bold leading-[32px]
                leading-normal text-[#2c2c2d]" id="exampleModalLabel">Insights</h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative flex">
                <div class="w-[240px] text-center h-[583px]
                border-r-[1px] border-solid border-[#f0f0f1]">
                        <img src="https://mweb-cdn.karousell.com/build/no-profile-stats-boslywhKHf.svg"
                        class="mt-[64px] mb-[20px] mx-auto
                        w-[128px] h-[80px]">
                        <p class=" mx-[16px]
                        text-[14px] leading-[22px] text-[#57585a]">
                            No additional data points available right now. Please check back again later.
                        </p>
                </div>

                <div class="w-[480px] pb-[24px]">
                    <div class="w-full h-[65px] flex justify-center
                    border-b-[1px] border-solid border-[#f0f0f1]">
                        <div onclick="clickReplace('visitId', 'shoutoutId')">
                            @include('components.user.navigate-button', ['content' => 'Visit'])
                        </div>
                        <div onclick="clickReplace('shoutoutId', 'visitId')">
                            @include('components.user.navigate-button', ['content' => 'Shoutout'])
                        </div>
                    </div>

                    <div class=" mx-[44px] pt-[44px]  h-[464px]"
                         id="visitId">
                        <div class="h-[44px] mb-[40px] text-center">
                            <p class="text-[14px] leading-[22px] text-[#57585a]">
                                No. of people who visited your profile
                            </p>
                        </div>
                        <div class="chart w-[394px] h-[272px] pt-[56px]" style="display: block">
                            @include('components.user.chart', ['color' => '#3596ff'])
                        </div>
                        <div class="flex">
                            <div class="w-[12px] h-[12px] bg-[#3596ff]
                            mt-[4px] mr-[8px]"></div>
                            <div>
                                <p class="text-[16px] leading-[24px]">
                                    Visits</p>
                                <p class="text-[14px] leading-[22px] text-[#57585a]">
                                    No. of people who visited your profile
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mx-[44px] pt-[44px]  h-[464px]"
                         id="shoutoutId" style="display: none">

                        <div class="flex items-center justify-center mt-[24px]">
                            <button class="px-[16px] py-[8px] mr-[28px] rounded-full
                            border-solid border-[1px] border-[#f0f0f1]
                            focus:border-[#008f79] focus:bg-[#008f7933 focus:text-[#008f79]"
                            onclick="clickReplace('impression', 'clicks')">
                                Impression
                            </button>

                            <button class="px-[16px] py-[8px] rounded-full
                            border-solid border-[1px] border-[#f0f0f1]
                            focus:border-[#008f79] focus:bg-[#008f7933] focus:text-[#008f79]"
                                    onclick="clickReplace('clicks', 'impression')">
                                Clicks
                            </button>
                        </div>
                        <div class="h-[44px] mb-[40px] text-center pt-[44px]">
                            <p class="text-[14px] leading-[22px] text-[#57585a]" id="impression">
                                No of times we showed your Shoutout to buyers
                            </p>
                            <p class="text-[14px] leading-[22px] text-[#57585a]" style="display: none" id="clicks">
                                No. of times buyers clicked to view your profile or collection, or to follow you
                            </p>
                        </div>
                        <div class="chart2 w-[394px] h-[272px] pt-[56px]" style="display: block">
                            @include('components.user.chart', ['color' => '#3596ff'])
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
