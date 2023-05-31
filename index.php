<?php
  $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "notes";

        //Create a new connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        //Die if connection is not established
        if (!$conn) {
          die("Couldn't connect to server: " . mysqli_connect_error());
        }
        // else {
        //   echo "Connecting to server is successful <br>"; // } ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.52.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
      @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
      }
    </style>
    <!-- component -->
    <nav
      class="bg-slate-400 shadow-2xl w-full flex relative justify-between items-center mx-auto px-8 h-20"
    >
      <!-- logo -->
      <div class="inline-flex">
        <a class="_o6689fn" href="/"
          ><div class="hidden md:block">
            <svg
              version="1.0"
              xmlns="http://www.w3.org/2000/svg"
              width="300.000000pt"
              height="118.000000pt"
              viewBox="0 0 300.000000 118.000000"
              preserveAspectRatio="xMidYMid meet"
            >
              <g
                transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)"
                fill="#fff"
                stroke="none"
              >
                <path
                  d="M347 863 c51 -2 135 -2 185 0 51 1 10 3 -92 3 -102 0 -143 -2 -93 -3z"
                />
                <path
                  d="M199 831 c-16 -16 -29 -38 -29 -48 1 -11 6 -6 15 14 7 17 26 38 42
47 15 8 22 15 15 16 -8 0 -27 -13 -43 -29z"
                />
                <path
                  d="M654 847 c16 -11 16 -17 6 -34 -17 -27 -8 -48 29 -68 30 -15 31 -15
31 5 0 37 -49 110 -74 110 -5 0 -2 -6 8 -13z"
                />
                <path
                  d="M162 592 c-1 -128 2 -181 12 -206 15 -36 60 -76 85 -76 9 1 2 7 -16
15 -61 26 -67 49 -74 255 l-5 185 -2 -173z"
                />
                <path
                  d="M599 696 c-19 -33 -42 -80 -52 -102 l-18 -41 -112 1 c-68 1 -113 -3
-114 -9 -2 -6 39 -10 108 -10 106 1 110 0 105 -20 -3 -11 -6 -28 -6 -38 0 -9
-11 -22 -24 -28 -20 -10 -31 -8 -60 10 -32 20 -40 21 -73 10 -21 -6 -44 -13
-51 -15 -7 -2 -10 -9 -7 -14 7 -11 34 -7 71 11 16 8 28 6 54 -10 67 -40 133 3
241 161 57 84 69 108 50 108 -4 0 -24 11 -43 24 l-35 23 -34 -61z m67 -10 c7
-18 -68 -136 -87 -136 -12 0 7 54 36 104 28 47 42 56 51 32z"
                />
                <path
                  d="M943 720 c-46 -28 -66 -72 -60 -134 4 -41 10 -55 41 -83 30 -28 43
-33 84 -33 27 0 57 7 70 16 20 14 23 23 20 67 l-3 52 -44 0 c-27 0 -46 -5 -48
-12 -3 -9 7 -13 31 -13 33 0 36 -2 36 -30 0 -84 -139 -53 -156 34 -15 83 80
158 142 111 25 -19 44 -19 44 0 0 20 -51 45 -92 45 -18 0 -47 -9 -65 -20z"
                />
                <path
                  d="M1747 734 c-4 -4 -7 -29 -7 -56 0 -49 0 -49 -22 -34 -34 24 -66 19
-99 -13 -21 -22 -29 -39 -29 -66 0 -73 88 -121 146 -80 34 23 45 64 42 160 -3
81 -12 108 -31 89z m-29 -120 c44 -30 19 -114 -35 -114 -28 0 -63 33 -63 60 0
23 42 70 62 70 8 0 24 -7 36 -16z"
                />
                <path
                  d="M1844 727 c-2 -7 -3 -67 -2 -132 3 -104 5 -120 20 -123 15 -3 18 9
20 97 l3 101 73 -100 c40 -55 80 -100 88 -100 12 0 14 21 12 133 -3 109 -6
132 -18 132 -12 0 -15 -18 -14 -102 0 -57 -1 -103 -2 -103 0 0 -36 47 -78 105
-76 104 -92 118 -102 92z"
                />
                <path
                  d="M295 710 c4 -6 63 -10 145 -10 82 0 141 4 145 10 4 6 -47 10 -145 10
-98 0 -149 -4 -145 -10z"
                />
                <path
                  d="M2367 713 c-4 -3 -7 -19 -7 -35 0 -18 -5 -28 -15 -28 -8 0 -15 -7
-15 -15 0 -8 7 -15 15 -15 12 0 15 -13 15 -55 0 -60 22 -95 59 -95 32 0 34 18
4 32 -25 12 -28 20 -31 66 -3 50 -2 52 22 52 16 0 26 6 26 15 0 9 -9 15 -25
15 -22 0 -25 4 -25 35 0 33 -8 43 -23 28z"
                />
                <path
                  d="M1184 650 c-12 -5 -29 -19 -38 -32 -60 -85 54 -193 137 -128 85 67 2
201 -99 160z m74 -36 c44 -30 19 -114 -35 -114 -28 0 -63 33 -63 60 0 23 42
70 62 70 8 0 24 -7 36 -16z"
                />
                <path
                  d="M1414 650 c-59 -24 -72 -104 -25 -151 74 -73 191 6 151 102 -20 48
-76 69 -126 49z m74 -36 c44 -30 19 -114 -35 -114 -28 0 -63 33 -63 60 0 23
42 70 62 70 8 0 24 -7 36 -16z"
                />
                <path
                  d="M2157 645 c-54 -30 -62 -101 -18 -146 41 -41 91 -40 133 1 27 27 30
36 25 72 -3 22 -14 49 -24 60 -26 26 -81 32 -116 13z m73 -25 c32 -17 43 -48
30 -81 -13 -31 -39 -44 -75 -35 -45 11 -50 90 -8 115 23 13 30 13 53 1z"
                />
                <path
                  d="M2509 631 c-21 -22 -29 -39 -29 -66 0 -72 89 -122 145 -82 24 18 11
41 -15 27 -29 -15 -65 -12 -83 8 -10 10 -17 22 -17 25 0 4 31 7 69 7 39 0 72
4 76 10 9 15 -21 77 -43 89 -36 19 -72 13 -103 -18z m92 -11 c10 -6 19 -17 19
-25 0 -11 -13 -15 -55 -15 -59 0 -68 10 -33 34 26 19 42 20 69 6z"
                />
                <path
                  d="M2723 649 c-48 -25 -28 -83 32 -95 38 -7 60 -27 50 -45 -7 -11 -47
-8 -92 6 -33 11 -30 -23 3 -35 64 -25 124 -2 124 47 0 27 -15 38 -68 53 -32 8
-42 16 -40 28 4 20 45 29 61 13 13 -13 47 -15 47 -2 0 28 -79 49 -117 30z"
                />
                <path
                  d="M290 630 c0 -6 50 -10 130 -10 80 0 130 4 130 10 0 6 -50 10 -130 10
-80 0 -130 -4 -130 -10z"
                />
                <path
                  d="M700 377 c-9 -18 -30 -40 -50 -49 -22 -12 -28 -18 -16 -18 22 0 86
62 86 84 0 22 -3 20 -20 -17z"
                />
                <path
                  d="M363 303 c48 -2 125 -2 170 0 45 1 6 3 -88 3 -93 0 -130 -2 -82 -3z"
                />
              </g>
            </svg>
          </div>
          <div class="block md:hidden">
            <svg
              width="30"
              height="32"
              fill="currentcolor"
              style="display: block"
            >
              <path
                d="M29.24 22.68c-.16-.39-.31-.8-.47-1.15l-.74-1.67-.03-.03c-2.2-4.8-4.55-9.68-7.04-14.48l-.1-.2c-.25-.47-.5-.99-.76-1.47-.32-.57-.63-1.18-1.14-1.76a5.3 5.3 0 00-8.2 0c-.47.58-.82 1.19-1.14 1.76-.25.52-.5 1.03-.76 1.5l-.1.2c-2.45 4.8-4.84 9.68-7.04 14.48l-.06.06c-.22.52-.48 1.06-.73 1.64-.16.35-.32.73-.48 1.15a6.8 6.8 0 007.2 9.23 8.38 8.38 0 003.18-1.1c1.3-.73 2.55-1.79 3.95-3.32 1.4 1.53 2.68 2.59 3.95 3.33A8.38 8.38 0 0022.75 32a6.79 6.79 0 006.75-5.83 5.94 5.94 0 00-.26-3.5zm-14.36 1.66c-1.72-2.2-2.84-4.22-3.22-5.95a5.2 5.2 0 01-.1-1.96c.07-.51.26-.96.52-1.34.6-.87 1.65-1.41 2.8-1.41a3.3 3.3 0 012.8 1.4c.26.4.45.84.51 1.35.1.58.06 1.25-.1 1.96-.38 1.7-1.5 3.74-3.21 5.95zm12.74 1.48a4.76 4.76 0 01-2.9 3.75c-.76.32-1.6.41-2.42.32-.8-.1-1.6-.36-2.42-.84a15.64 15.64 0 01-3.63-3.1c2.1-2.6 3.37-4.97 3.85-7.08.23-1 .26-1.9.16-2.73a5.53 5.53 0 00-.86-2.2 5.36 5.36 0 00-4.49-2.28c-1.85 0-3.5.86-4.5 2.27a5.18 5.18 0 00-.85 2.21c-.13.84-.1 1.77.16 2.73.48 2.11 1.78 4.51 3.85 7.1a14.33 14.33 0 01-3.63 3.12c-.83.48-1.62.73-2.42.83a4.76 4.76 0 01-5.32-4.07c-.1-.8-.03-1.6.29-2.5.1-.32.25-.64.41-1.02.22-.52.48-1.06.73-1.6l.04-.07c2.16-4.77 4.52-9.64 6.97-14.41l.1-.2c.25-.48.5-.99.76-1.47.26-.51.54-1 .9-1.4a3.32 3.32 0 015.09 0c.35.4.64.89.9 1.4.25.48.5 1 .76 1.47l.1.2c2.44 4.77 4.8 9.64 7 14.41l.03.03c.26.52.48 1.1.73 1.6.16.39.32.7.42 1.03.19.9.29 1.7.19 2.5z"
              ></path>
            </svg>
          </div>
        </a>
      </div>

      <!-- end logo -->

      <!-- search bar -->
      <div class="hidden sm:block flex-shrink flex-grow-0 justify-start px-2">
        <div class="inline-block">
          <div class="inline-flex items-center max-w-full">
            <button
              class="flex items-center flex-grow-0 flex-shrink pl-2 relative w-60 border rounded-full px-1 py-1"
              type="button"
            >
              <input
                required
                placeholder="Search Notes..."
                class="bg-gray-200 focus:bg-white px-3 block flex-grow flex-shrink overflow-hidden rounded-full"
              />
              <button
                title="Search"
                type="submit"
                class="flex items-center justify-center relative h-8 w-8 rounded-full hover:bg-gray-200 ml-2"
              >
                <svg
                  viewBox="0 0 32 32"
                  xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true"
                  role="presentation"
                  focusable="false"
                  style="
                    display: block;
                    fill: none;
                    height: 12px;
                    width: 12px;
                    stroke: #ffff;
                    stroke-width: 5.33333;
                    overflow: visible;
                  "
                >
                  <g fill="none">
                    <path
                      d="m13 24c6.0751322 0 11-4.9248678 11-11 0-6.07513225-4.9248678-11-11-11-6.07513225 0-11 4.92486775-11 11 0 6.0751322 4.92486775 11 11 11zm8-3 9 9"
                    ></path>
                  </g>
                </svg>
              </button>
            </button>
          </div>
        </div>
      </div>
      <!-- end search bar -->

      <!-- login -->
      <div class="flex-initial">
        <div class="flex justify-end items-center relative">
          <div class="flex mr-4 items-center">
            <!-- <a
              class="inline-block py-2 px-3 hover:bg-gray-200 rounded-full"
              href="#"
            >
              <div
                class="flex items-center relative cursor-pointer whitespace-nowrap"
              >
                Become a host
              </div>
            </a> -->
            <div class="block relative">
              <button
              title="language"
                type="button"
                class="inline-block py-2 px-3 hover:bg-gray-200 rounded-full relative"
              >
                <div class="flex items-center h-5">
                  <div class="_xpkakx">
                    <svg
                      viewBox="0 0 16 16"
                      xmlns="http://www.w3.org/2000/svg"
                      aria-hidden="true"
                      role="presentation"
                      focusable="false"
                      style="
                        display: block;
                        height: 16px;
                        width: 16px;
                        fill: #fff;
                      "
                    >
                      <path
                        d="m8.002.25a7.77 7.77 0 0 1 7.748 7.776 7.75 7.75 0 0 1 -7.521 7.72l-.246.004a7.75 7.75 0 0 1 -7.73-7.513l-.003-.245a7.75 7.75 0 0 1 7.752-7.742zm1.949 8.5h-3.903c.155 2.897 1.176 5.343 1.886 5.493l.068.007c.68-.002 1.72-2.365 1.932-5.23zm4.255 0h-2.752c-.091 1.96-.53 3.783-1.188 5.076a6.257 6.257 0 0 0 3.905-4.829zm-9.661 0h-2.75a6.257 6.257 0 0 0 3.934 5.075c-.615-1.208-1.036-2.875-1.162-4.686l-.022-.39zm1.188-6.576-.115.046a6.257 6.257 0 0 0 -3.823 5.03h2.75c.085-1.83.471-3.54 1.059-4.81zm2.262-.424c-.702.002-1.784 2.512-1.947 5.5h3.904c-.156-2.903-1.178-5.343-1.892-5.494l-.065-.007zm2.28.432.023.05c.643 1.288 1.069 3.084 1.157 5.018h2.748a6.275 6.275 0 0 0 -3.929-5.068z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </button>
            </div>
          </div>

          <div class="block">
            <div class="inline relative">
              <button
                type="button"
                class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg"
              >
                <div class="pl-1">
                  <svg
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                    role="presentation"
                    focusable="false"
                    style="
                      display: block;
                      fill: none;
                      height: 16px;
                      width: 16px;
                      stroke: #fff;
                      stroke-width: 3;
                      overflow: visible;
                    "
                  >
                    <g fill="none" fill-rule="nonzero">
                      <path d="m2 16h28"></path>
                      <path d="m2 24h28"></path>
                      <path d="m2 8h28"></path>
                    </g>
                  </svg>
                </div>

                <div class="block flex-grow-0 flex-shrink-0 h-10 w-12 pl-5">
                  <svg
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                    role="presentation"
                    focusable="false"
                    style="
                      display: block;
                      height: 100%;
                      width: 100%;
                      fill: #fff;
                    "
                  >
                    <path
                      d="m16 .7c-8.437 0-15.3 6.863-15.3 15.3s6.863 15.3 15.3 15.3 15.3-6.863 15.3-15.3-6.863-15.3-15.3-15.3zm0 28c-4.021 0-7.605-1.884-9.933-4.81a12.425 12.425 0 0 1 6.451-4.4 6.507 6.507 0 0 1 -3.018-5.49c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5a6.513 6.513 0 0 1 -3.019 5.491 12.42 12.42 0 0 1 6.452 4.4c-2.328 2.925-5.912 4.809-9.933 4.809z"
                    ></path>
                  </svg>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- end login -->
    </nav>
  </head>
  <body>
    <div class="lg:content-auto justify-content-center py-8 px-8 bg-slate-500">
      <!-- component -->
      <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label
              class="block uppercase tracking-wide text-slate-800 text-xs font-bold mb-2"
              for="grid-password"
            >
              Note Title
            </label>
            <input
              id="title"
              name="title"
              required
              class="shadow-xl appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="nick"
              type="text"
            />
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label
              class="block uppercase tracking-wide text-slate-800 text-gray-700 text-xs font-bold mb-2"
              for="grid-password"
            >
              Note Discription
            </label>
            <div
              class="border bg-gray-200 overflow-hidden rounded-t-lg shadow-xl"
            >
              <script
                src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
                defer
              ></script>
              <style>
                @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

                .active\:bg-gray-50:active {
                  --tw-bg-opacity: 1;
                  background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
                }
              </style>

              <script>
                function app() {
                  return {
                    wysiwyg: null,
                    init: function (el) {
                      // Get el
                      this.wysiwyg = el;
                      // Add CSS
                      this.wysiwyg.contentDocument.querySelector(
                        "head"
                      ).innerHTML += `<style>
            *, ::after, ::before {box-sizing: border-box;}
            :root {tab-size: 4;}
            html {line-height: 1.15;text-size-adjust: 100%;}
            body {margin: 0px; padding: 1rem 0.5rem;}
            body {font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";}
            </style>`;
                      this.wysiwyg.contentDocument.body.innerHTML += `
            <h1>Hello World!</h1>
            <p>Welcome to the pure AlpineJS and Tailwind WYSIWYG.</p>
            `;
                      // Make editable
                      this.wysiwyg.contentDocument.designMode = "on";
                    },
                    format: function (cmd, param) {
                      this.wysiwyg.contentDocument.execCommand(
                        cmd,
                        !1,
                        param || null
                      );
                    },
                  };
                }
              </script>
              <div class="w-full flex border-b text-xl text-gray-600">
                <button
                  class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('bold')"
                >
                  <i class="mdi mdi-format-bold"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('italic')"
                >
                  <i class="mdi mdi-format-italic"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('underline')"
                >
                  <i class="mdi mdi-format-underline"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('formatBlock','P')"
                >
                  <i class="mdi mdi-format-paragraph"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('formatBlock','H1')"
                >
                  <i class="mdi mdi-format-header-1"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('formatBlock','H2')"
                >
                  <i class="mdi mdi-format-header-2"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('formatBlock','H3')"
                >
                  <i class="mdi mdi-format-header-3"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('insertUnorderedList')"
                >
                  <i class="mdi mdi-format-list-bulleted"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('insertOrderedList')"
                >
                  <i class="mdi mdi-format-list-numbered"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('justifyLeft')"
                >
                  <i class="mdi mdi-format-align-left"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('justifyCenter')"
                >
                  <i class="mdi mdi-format-align-center"></i>
                </button>
                <button
                  class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                  @click="format('justifyRight')"
                >
                  <i class="mdi mdi-format-align-right"></i>
                </button>
              </div>
            </div>
            <textarea
              id="desc"
              name="desc"
              required
              class="shadow-xl resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-b-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-teal-600 h-48 resize-none"
              id="message"
            ></textarea>
          </div>
        </div>
        <div class="md:flex md:items-center">
          <div class="md:w-1/3">
            <button
              class="shadow-outline shadow-xl bg-teal-400 hover:bg-teal-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded-full w-60"
              type="submit"
            >
              Add Note
            </button>
          </div>
          <div class="md:w-2/3"></div>
        </div>
      </form>
    </div>
    <!-- component -->

    <div class="h-0.5 w-full bg-teal-400 drop-shadow-2xl"></div>
    <div class="px-6 py-6 bg-rose-700">
      <div class="card w-96 shadow-2xl glass"> 
            <div class="card-body items-center text-center">
            <?php
            $sql = "SELECT * FROM `notes`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
              echo '<h2 class="card-title">'.$row["title"].'</h2>';
              echo '<p class="px-3">'.$row["desc"].'</p>';
            } 
              ?>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
