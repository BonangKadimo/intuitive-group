<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>intuitive E-healthcare</title>
<script src="https://cdn.tailwindcss.com"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Fonts -->
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
</style>

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>
<style>
        table { 
            table-layout:fixed;
            width: 100%;
        }
        th,
        td {
            overflow: hidden; 
            text-overflow: ellipsis; 
            word-wrap: break-word;
            border-collapse: collapse;
            padding: 5px;
            text: black;
        }
 
        tr:nth-child(odd) {
            background-color: #8F9AA5;
        }

        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
</head>
<!-- add nav bar -->
<body>
    <!-- component -->
    <style>
      /* Compiled dark classes from Tailwind */
      .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
        border-color: rgba(55, 65, 81);
      }
      .dark .dark\:bg-gray-50 {
        background-color: rgba(249, 250, 251);
      }
      .dark .dark\:bg-gray-100 {
        background-color: rgba(243, 244, 246);
      }
      .dark .dark\:bg-gray-600 {
        background-color: rgba(75, 85, 99);
      }
      .dark .dark\:bg-gray-700 {
        background-color: rgba(55, 65, 81);
      }
      .dark .dark\:bg-gray-800 {
        background-color: rgba(31, 41, 55);
      }
      .dark .dark\:bg-gray-900 {
        background-color: rgba(17, 24, 39);
      }
      .dark .dark\:bg-red-700 {
        background-color: rgba(185, 28, 28);
      }
      .dark .dark\:bg-green-700 {
        background-color: rgba(4, 120, 87);
      }
      .dark .dark\:hover\:bg-gray-200:hover {
        background-color: rgba(229, 231, 235);
      }
      .dark .dark\:hover\:bg-gray-600:hover {
        background-color: rgba(75, 85, 99);
      }
      .dark .dark\:hover\:bg-gray-700:hover {
        background-color: rgba(55, 65, 81);
      }
      .dark .dark\:hover\:bg-gray-900:hover {
        background-color: rgba(17, 24, 39);
      }
      .dark .dark\:border-gray-100 {
        border-color: rgba(243, 244, 246);
      }
      .dark .dark\:border-gray-400 {
        border-color: rgba(156, 163, 175);
      }
      .dark .dark\:border-gray-500 {
        border-color: rgba(107, 114, 128);
      }
      .dark .dark\:border-gray-600 {
        border-color: rgba(75, 85, 99);
      }
      .dark .dark\:border-gray-700 {
        border-color: rgba(55, 65, 81);
      }
      .dark .dark\:border-gray-900 {
        border-color: rgba(17, 24, 39);
      }
      .dark .dark\:hover\:border-gray-800:hover {
        border-color: rgba(31, 41, 55);
      }
      .dark .dark\:text-white {
        color: rgba(255, 255, 255);
      }
      .dark .dark\:text-gray-50 {
        color: rgba(249, 250, 251);
      }
      .dark .dark\:text-gray-100 {
        color: rgba(243, 244, 246);
      }
      .dark .dark\:text-gray-200 {
        color: rgba(229, 231, 235);
      }
      .dark .dark\:text-gray-400 {
        color: rgba(156, 163, 175);
      }
      .dark .dark\:text-gray-500 {
        color: rgba(107, 114, 128);
      }
      .dark .dark\:text-gray-700 {
        color: rgba(55, 65, 81);
      }
      .dark .dark\:text-gray-800 {
        color: rgba(31, 41, 55);
      }
      .dark .dark\:text-red-100 {
        color: rgba(254, 226, 226);
      }
      .dark .dark\:text-green-100 {
        color: rgba(209, 250, 229);
      }
      .dark .dark\:text-blue-400 {
        color: rgba(96, 165, 250);
      }
      .dark .group:hover .dark\:group-hover\:text-gray-500 {
        color: rgba(107, 114, 128);
      }
      .dark .group:focus .dark\:group-focus\:text-gray-700 {
        color: rgba(55, 65, 81);
      }
      .dark .dark\:hover\:text-gray-100:hover {
        color: rgba(243, 244, 246);
      }
      .dark .dark\:hover\:text-blue-500:hover {
        color: rgba(59, 130, 246);
      }

      /* Custom style */
      .header-right {
          width: calc(100% - 3.5rem);
      }
      .sidebar:hover {
          width: 16rem;
      }
      @media only screen and (min-width: 768px) {
          .header-right {
              width: calc(100% - 16rem);
          }
      }
    </style>
    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black dark:text-white"   style="background-color:#072870">

          <!-- Header -->
          <div class="fixed w-full flex items-center justify-between h-14 text-white z-10" style="background-color: #000435">
            <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 border-none"  >  <!-- user div  --->
              <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
              <span class="hidden md:block">OFFICE ASSISTANT</span>
            </div>
            <div class="flex justify-between items-center h-14  header-right" > <!-- heading/search   div  -->
              <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
                <button class="outline-none focus:outline-none">
                  <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
                <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
              </div>
              <ul class="flex items-center">
                <li>
                  <button
                    aria-hidden="true"
                    @click="toggleTheme"
                    class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none"
                  >
                    <svg
                      x-show="isDark"
                      width="24"
                      height="24"
                      class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke=""
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                      />
                    </svg>
                    <svg
                      x-show="!isDark"
                      width="24"
                      height="24"
                      class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke=""
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                      />
                    </svg>
                  </button>
                </li>
                <li>
                  <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                </li>
                <x-app-layout>
                
                </x-app-layout>
              </ul>
            </div>
          </div>
          <!-- ./Header -->

          <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 h-full text-white transition-all duration-300 border-none z-10 sidebar" style="background-color: #000435"><!- side bar color -->
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
              <ul class="flex flex-col py-4 space-y-1">
                <li class="px-5 hidden md:block">
                  <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                  </div>
                </li>
                <li>
                  <a href="{{route('home.office_assistant')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('home.officerappointment')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Appointment</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('home.officerprescription')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Prescription</span>
                    <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('home.officerpatientinvoice')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Invoice</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('home.officerdoctor')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Doctors</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('home.officerdoctorschedule')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Doctors Schedule</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                    <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">2</span>
                  </a>
                </li>
                <li class="px-5 hidden md:block">
                  <div class="flex flex-row items-center mt-5 h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                  </div>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                  </a>
                </li>
              </ul>
              <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
            </div>
          </div>
          <!-- ./Sidebar -->

          <div class="h-full ml-14 mt-14 mb-10 md:ml-64">



            <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">




            </div>


<div class="py-8 ">  
    <div class="text-center pb-12">
          
        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-white">
           Meet your doctors!
        </h1>
    </div>
    <div class=" bg-white" >
        
                   
    <table>
        <tr>
            <td class="font-bold">Doctor</td>
            <td class="font-bold">Department</td>
            <td class="font-bold">Photo</td>
            <td class="font-bold">Office</td>
        </tr>
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr>  
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr> 
        <tr>
            <td>Doctor 1</td>
            <td>Dentistry</td>
            <td><img src="avatar.jpg" alt="Avatar" class="avatar"></td>
            <td>222</td>
        </tr>       
    </table>
        </div>
    </div>
</div>

          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
      <script>
        const setup = () => {
          const getTheme = () => {
            if (window.localStorage.getItem('dark')) {
              return JSON.parse(window.localStorage.getItem('dark'))
            }
            return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
          }

          const setTheme = (value) => {
            window.localStorage.setItem('dark', value)
          }

          return {
            loading: true,
            isDark: getTheme(),
            toggleTheme() {
              this.isDark = !this.isDark
              setTheme(this.isDark)
            },
          }
        }
      </script>

</body>


<!-- add footer -->
<footer class="p-2 rounded-md shadow md:px-6 md:py-12 " style="background-color: #000435">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="/" target="_blank" class="flex items-center mb-2 sm:mb-0">
            <img src="logo.svg" class="mr-4 " alt=" Logo" style="height: 80px" />

        </a>
        <ul class="flex flex-wrap items-center mb-3 sm:mb-0">
            <li>
                <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-3 dark:text-gray-400">Sign in
Request Status</a>
            </li>
            <li>
                <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-3 dark:text-gray-400">Help</a>
            </li>
            <li>
                <a href="#"
                    class="mr-4 text-sm text-gray-500 hover:underline md:mr-3 dark:text-gray-400">FAQ</a>
            </li>
            <li>
                <a href="#" class="text-sm text-gray-500 hover:underline dark:text-gray-400">Contact Support </a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 sm:my-8" />
   
</footer>

</html>
