@extends('master')
@section('content')
    <div class="grid grid-cols-12">
        {{-- first panel start --}}
            <div class="col-span-8 mx-7">
                {{-- tab bar start --}}
                    <div class="flex mb-4 border-b sticky top-0 bg-white border-gray-200 dark:border-gray-700 overflow-x-auto no-scrollbar">
                    <ul class="flex flex-nowrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" disabled><i class="fa-solid fa-plus"></i></button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                    </div>
                {{-- tab bar end --}}

                {{-- articles start --}}
                    @for ($i=0;$i<10;$i++)
                    <div class="flex flex-row items-center my-5 bg-white shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            {{-- first row --}}
                            <div class="flex">
                                <div class="flex items-center ">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="{{asset('images/Screenshot (21).png')}}" alt="Lana image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-2">
                                        <p class="text-sm font-normal text-gray-900 truncate dark:text-white">
                                            Lana Byrd . Dec 27,2023
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- second row --}}
                            <h5 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            {{-- third row --}}
                            @php
                                $journal = "Here are the biggest enterprise technology acquisitions of 2021 so far,cquisitions of 2021 so far, cquisitions of 2021 so far, in reverse chronological order. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolore tempora sed asperiores sapiente qui beatae earum neque culpa cumque?";
                                $characterLimit = 250;
                                $truncatedString = Str::limit($journal,$characterLimit,'....');
                            @endphp
                            <p class="mb-3 font-normal text-gray-700 text-justify dark:text-gray-400">{{$truncatedString}}</p>
                            {{-- fourth row --}}
                            <div class="flex justify-between">
                                <div class="">
                                    <span class="border rounded-full text-sm p-1 bg-gray-200">Web Development</span>
                                    <span class="text-sm p-1"> 5 minutes read</span>
                                </div>
                                <div class="">
                                    <i class="fa-regular fa-bookmark mx-2 text-lg"></i>
                                    <i class="fa-solid fa-ellipsis text-lg"></i>
                                </div>
                            </div>
                        </div>
                        <img class="object-cover w-full mr-2 h-96 md:h-auto md:w-48 ms-2" src="{{asset('images/aws_attendance.png')}}" alt="">
                    </div>
                    @endfor

                {{-- articles end --}}
            </div>
        {{-- first panel end --}}

        {{-- second panel start --}}
            <div class="col-span-4 bg-red-200 h-screen">

            </div>

        {{-- second panel end --}}
    </div>
@endsection
