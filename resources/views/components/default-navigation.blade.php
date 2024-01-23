<div x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 100 })"
    :class="{ 'bg-white shadow text-gray-700 fill-black ': scrolled, 'bg-transparent text-white fill-white': !scrolled }"
    class="bg-black fixed inset-x-0 z-30 transition duration-500 font-semibold">
    <nav class="w-full flex items-center justify-between h-20 lg:container px-5 lg:px-10">
        <div class="flex space-x-10">
            {{-- <img src="{{asset('assets/images/Logo.png')}}" alt="" class="h-8"> --}}
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="h-10 w-24"
                :class="{'fill-primary' : scrolled, 'fill-white' : !scrolled}" viewBox="0 0 1430.834481 320.609980"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(-57.165519,356.782244) scale(0.100000,-0.100000)">
                    <path d="M3380 3561 c0 -7 20 -34 45 -60 25 -26 45 -53 45 -60 0 -30 -469 19
                    -578 60 -15 6 -29 9 -32 7 -14 -9 21 -161 50 -219 36 -69 131 -136 250 -174
                    96 -31 100 -46 39 -120 -48 -58 -148 -204 -174 -255 -41 -79 -75 -206 -85
                    -313 -6 -60 -15 -118 -20 -128 -13 -23 -321 -179 -354 -179 -31 0 -33 8 -40
                    145 -5 105 -39 276 -76 386 -70 209 -201 394 -346 489 -107 70 -237 110 -382
                    117 -296 15 -537 -74 -733 -269 -160 -160 -257 -330 -355 -626 -54 -163 -68
                    -254 -60 -392 10 -186 45 -281 182 -487 88 -134 125 -174 110 -120 -14 50 -18
                    316 -7 417 14 128 55 303 88 379 26 59 68 111 90 111 19 0 17 -12 -19 -114
                    -31 -87 -32 -98 -36 -273 -5 -237 8 -306 85 -463 50 -102 66 -125 142 -200 67
                    -66 110 -98 191 -142 57 -31 106 -55 108 -54 2 2 -11 26 -28 52 -44 70 -71
                    165 -77 269 -6 103 10 183 56 280 31 63 104 155 116 143 4 -3 15 -62 26 -130
                    36 -240 66 -344 129 -448 68 -113 185 -227 137 -133 -9 16 -22 63 -31 105 -27
                    132 -18 238 21 238 23 0 174 -85 255 -143 299 -214 565 -591 595 -844 8 -73
                    33 -66 33 9 0 90 72 259 161 379 80 109 219 232 379 337 108 71 171 122 246
                    196 93 93 103 108 137 191 54 132 85 242 103 374 14 104 15 150 4 431 -16 403
                    -5 649 32 686 7 7 58 21 113 29 136 22 145 24 145 34 0 11 -45 26 -104 36 -22
                    4 -68 18 -103 33 -60 24 -64 28 -83 79 -60 161 -117 228 -245 289 -103 49
                    -145 62 -145 45z" />
                    <path d="M12590 3100 c-96 -10 -176 -18 -177 -19 -9 -4 -1 -1427 8 -1508 21
                    -188 80 -319 172 -380 65 -44 104 -54 220 -60 85 -5 107 -2 180 21 91 28 189
                    85 255 149 l42 41 0 -92 0 -92 225 0 225 0 0 290 0 290 29 0 c26 0 29 -4 46
                    -65 22 -82 87 -212 143 -288 24 -31 73 -82 110 -113 124 -102 249 -147 412
                    -147 107 0 162 16 246 73 60 40 154 130 154 147 0 12 -75 207 -87 226 -3 5
                    -15 -1 -27 -12 -33 -31 -107 -61 -152 -61 -83 0 -143 28 -216 101 -54 55 -78
                    90 -129 193 l-62 125 159 253 c87 139 180 287 206 327 26 41 46 76 44 78 -5 6
                    -470 42 -477 37 -3 -2 -79 -131 -168 -287 -118 -207 -169 -287 -190 -300 -16
                    -9 -32 -17 -35 -17 -3 0 -6 250 -6 555 0 305 -3 555 -7 555 -21 1 -401 -32
                    -420 -36 l-23 -4 0 -858 -1 -857 -40 95 c-22 52 -44 99 -48 103 -4 4 -38 -7
                    -76 -25 -40 -18 -91 -34 -121 -36 -46 -4 -56 -1 -77 21 -51 50 -51 49 -55 850
                    l-3 747 -52 -1 c-29 -1 -131 -10 -227 -19z" />
                    <path d="M4264 2973 c3 -60 9 -143 13 -185 l6 -78 236 -2 236 -3 3 -772 2
                    -773 235 0 235 0 0 775 0 775 245 0 c135 0 245 1 245 3 0 1 7 76 15 167 8 91
                    15 173 15 183 0 16 -42 17 -746 17 l-747 0 7 -107z" />
                    <path d="M10035 3016 l-210 -11 -3 -202 -2 -203 -75 0 -75 0 0 -170 0 -170 75
                    0 75 0 0 -349 c0 -393 7 -457 64 -577 18 -39 51 -88 71 -109 103 -103 305
                    -130 481 -64 65 25 185 103 232 152 l34 35 -43 103 c-23 57 -45 108 -49 112
                    -4 4 -37 -7 -75 -25 -40 -18 -91 -34 -121 -36 -48 -4 -56 -2 -82 25 -44 43
                    -51 98 -58 433 l-7 299 124 3 124 3 17 130 c9 72 17 147 17 168 l1 37 -135 0
                    -135 0 -2 212 c-3 181 -5 213 -18 214 -8 0 -109 -4 -225 -10z" />
                    <path d="M8043 2615 c-73 -20 -142 -57 -208 -111 l-56 -45 2 75 c1 42 0 78 -2
                    80 -2 3 -99 -4 -214 -15 -116 -10 -216 -19 -222 -19 -10 0 -13 -149 -13 -710
                    l0 -710 225 0 225 0 0 494 0 494 41 40 c71 72 180 91 247 43 36 -25 68 -96 81
                    -182 6 -37 11 -238 11 -476 l0 -413 230 0 230 0 0 497 0 496 44 42 c73 71 181
                    83 245 30 58 -50 64 -81 72 -405 4 -162 10 -311 14 -330 36 -179 103 -284 211
                    -332 64 -28 189 -42 260 -29 91 17 196 75 280 156 l74 70 -47 110 c-25 61 -48
                    112 -49 114 -2 2 -17 -8 -35 -23 -64 -54 -143 -71 -188 -40 -49 35 -54 67 -61
                    399 -8 336 -18 402 -74 514 -76 150 -190 208 -386 198 -146 -7 -248 -46 -379
                    -142 -59 -43 -65 -46 -74 -29 -5 11 -36 45 -67 76 -47 46 -70 60 -125 77 -80
                    25 -212 27 -292 6z" />
                    <path d="M11016 2615 c-184 -47 -290 -167 -353 -402 -25 -91 -27 -113 -27
                    -313 0 -186 3 -228 22 -313 25 -115 63 -225 97 -283 86 -147 291 -215 506
                    -170 97 21 165 60 242 138 38 38 70 68 71 66 1 -2 12 -19 24 -39 30 -50 105
                    -117 157 -140 23 -10 76 -24 118 -29 120 -17 226 7 355 79 52 28 162 128 162
                    145 0 12 -78 206 -86 215 -3 3 -18 -3 -34 -13 -47 -27 -139 -56 -180 -56 -49
                    0 -74 23 -96 85 -17 45 -19 99 -22 523 l-3 472 -22 0 c-12 1 -112 9 -222 19
                    -110 10 -203 16 -207 14 -5 -2 -8 -26 -8 -54 0 -27 -2 -49 -4 -49 -2 0 -27 15
                    -55 34 -87 59 -153 79 -271 82 -69 2 -125 -2 -164 -11z m395 -385 c20 -11 50
                    -31 68 -45 l31 -27 0 -264 0 -265 -45 -44 c-84 -81 -195 -98 -269 -42 -37 29
                    -76 102 -95 182 -15 61 -16 220 -1 295 12 63 60 168 89 194 52 47 147 54 222
                    16z" />
                    <path d="M5772 2073 c4 -483 6 -555 21 -607 53 -182 126 -267 267 -317 94 -33
                    277 -33 370 -1 61 21 132 58 189 99 l24 18 -6 -74 c-15 -184 -129 -281 -329
                    -281 -72 0 -159 13 -235 36 l-23 6 0 -146 0 -147 37 -15 c126 -53 391 -78 527
                    -50 122 25 199 67 286 155 86 86 126 155 167 286 l28 90 3 738 3 737 -228 -2
                    -228 -3 -3 -503 -2 -502 -41 -29 c-65 -48 -119 -64 -193 -59 -80 5 -111 25
                    -146 94 l-25 49 -3 468 c-2 398 -5 467 -17 467 -20 0 -340 28 -398 35 l-48 6
                    3 -548z" />
                </g>
            </svg>
            <ul class="lg:flex items-center space-x-10  text-sm hidden">
                <li>
                    <a href="{{route('home')}}" class="link-style">Home</a>
                </li>
                <li>
                    <a href="#" class="link-style">Events</a>
                </li>
                {{-- <li>
                    <a href="#" class="link-style flex gap-1">
                        <span>Pages</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                        </svg>
                    </a>
                </li> --}}

                {{-- New Pages --}}
                <div x-data="{
                    dropdownOpen: false
                }" class="relative">

                    <button @click="dropdownOpen=true"
                        class="inline-flex items-center justify-center  space-x-1 h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md disabled:opacity-50 disabled:pointer-events-none">
                        <span class="text-sm">Pages</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                        </svg>
                    </button>
                    <div x-show="dropdownOpen" @click.away="dropdownOpen=false"
                        x-transition:enter="ease-out duration-200" x-transition:enter-start="-translate-y-2"
                        x-transition:enter-end="translate-y-0"
                        class="absolute top-0 z-50 w-32 mt-12 -translate-x-1/2 left-1/2" x-cloak>
                        <div
                            class="p-1 mt-1 text-sm bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                            <a href="#_" @click="menuBarOpen=false"
                                class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>English</span>
                            </a>
                            <a href="#_" @click="menuBarOpen=false"
                                class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                                <span>Swahili</span>
                            </a>

                            <div class="relative w-full group">
                                <div
                                    class="flex cursor-default select-none items-center rounded px-2 hover:bg-neutral-100 py-1.5 outline-none">
                                    <span>More Tools</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-4 h-4 ml-auto">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <div data-submenu
                                    class="absolute top-0 right-0 invisible mr-1 duration-200 ease-out translate-x-full opacity-0 group-hover:mr-0 group-hover:visible group-hover:opacity-100">
                                    <div
                                        class="z-50 min-w-[8rem] overflow-hidden rounded-md border bg-white p-1 shadow-md animate-in slide-in-from-left-1 w-48">
                                        <div @click="contextMenuOpen=false"
                                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            Save Page As...<span
                                                class="ml-auto text-xs tracking-widest text-muted-foreground">⇧⌘S</span>
                                        </div>
                                        <div @click="contextMenuOpen=false"
                                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            Create Shortcut...</div>
                                        <div @click="contextMenuOpen=false"
                                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            Name Window...</div>
                                        <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                                        <div @click="contextMenuOpen=false"
                                            class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                            Developer Tools</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- New Pages Ends --}}
                <li>
                    <a href="#" class="link-style">Sell</a>
                </li>
            </ul>
        </div>
        <div class="hidden lg:flex space-x-3 items-center">

            <div x-data="{
                    dropdownOpen: false
                }" class="relative">

                <button @click="dropdownOpen=true"
                    class="inline-flex items-center justify-center  space-x-1 h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md disabled:opacity-50 disabled:pointer-events-none"><svg
                        class="h-5 w-5" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg"
                        xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                        xmlns:svg="http://www.w3.org/2000/svg" xmlns:ns1="http://sozi.baierouge.fr"
                        xmlns:xlink="http://www.w3.org/1999/xlink" id="svg2" sodipodi:docname="New document 1"
                        inkscape:export-ydpi="89.988571" inkscape:export-filename="/home/eferuzi/Desktop/flag.png"
                        viewBox="0 0 372.05 262.2" inkscape:export-xdpi="89.988571" version="1.1"
                        inkscape:version="0.47pre4 r22446">
                        <sodipodi:namedview id="base" bordercolor="#666666" inkscape:pageshadow="2"
                            inkscape:window-y="25" pagecolor="#ffffff" inkscape:window-height="726"
                            inkscape:window-maximized="1" inkscape:zoom="34.473334" inkscape:window-x="0"
                            showgrid="false" borderopacity="1.0" inkscape:current-layer="layer1" inkscape:cx="41.38897"
                            inkscape:cy="-2.0026921" inkscape:window-width="1280" inkscape:pageopacity="0.0"
                            inkscape:document-units="px" />
                        <g id="layer1" inkscape:label="Layer 1" inkscape:groupmode="layer"
                            transform="translate(0 -790.16)">
                            <path id="path2865" style="fill:#008000" d="m0 1002.1 325.28-211.97h-325.28v211.97z" />
                            <path id="path2867" style="fill:#0000ff" d="m372.05 840.39-325.28 211.97h325.28v-211.97z" />
                            <path id="path3641" sodipodi:nodetypes="ccccc" style="fill:#ffff00"
                                transform="translate(0 790.16)"
                                d="m0 211.05 325.28-211.03 11.02 0.03175-336.3 220.06v-9.06z" />
                            <path id="path3643" sodipodi:nodetypes="cccccc" style="fill:#ffff00"
                                d="m372.05 840.41-325.23 211.96-11.14-0.019 336.4-219.93-0.0252 7.9904h0.00005z" />
                            <path id="path3645" sodipodi:nodetypes="cccccccc"
                                style="stroke:#000000;stroke-width:.99597px;fill:#000000"
                                d="m0.49551 1010.5 0.032186 41.311 34.829 0.092 336.25-219.77-0.0267-41.496-35.114 0.0381-335.97 219.83z" />
                        </g>
                        <metadata>
                            <rdf:RDF>
                                <cc:Work>
                                    <dc:format>image/svg+xml</dc:format>
                                    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                    <cc:license rdf:resource="http://creativecommons.org/licenses/publicdomain/" />
                                    <dc:publisher>
                                        <cc:Agent rdf:about="http://openclipart.org/">
                                            <dc:title>Openclipart</dc:title>
                                        </cc:Agent>
                                    </dc:publisher>
                                    <dc:title>Tanzania Flag</dc:title>
                                    <dc:date>2010-04-26T10:52:53</dc:date>
                                    <dc:description>The national flag of Tanzania</dc:description>
                                    <dc:source>https://openclipart.org/detail/57181/tanzania-flag-by-eferuzi
                                    </dc:source>
                                    <dc:creator>
                                        <cc:Agent>
                                            <dc:title>eferuzi</dc:title>
                                        </cc:Agent>
                                    </dc:creator>
                                    <dc:subject>
                                        <rdf:Bag>
                                            <rdf:li>africa</rdf:li>
                                            <rdf:li>east africa</rdf:li>
                                            <rdf:li>flag</rdf:li>
                                            <rdf:li>tanzania</rdf:li>
                                            <rdf:li>zanzibar</rdf:li>
                                        </rdf:Bag>
                                    </dc:subject>
                                </cc:Work>
                                <cc:License rdf:about="http://creativecommons.org/licenses/publicdomain/">
                                    <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction" />
                                    <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution" />
                                    <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks" />
                                </cc:License>
                            </rdf:RDF>
                        </metadata>
                    </svg>
                    <span class="text-sm">TZS</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                    </svg>
                </button>
                <div x-show="dropdownOpen" @click.away="dropdownOpen=false" x-transition:enter="ease-out duration-200"
                    x-transition:enter-start="-translate-y-2" x-transition:enter-end="translate-y-0"
                    class="absolute top-0 z-50 w-32 mt-12 -translate-x-1/2 left-1/2" x-cloak>
                    <div
                        class="p-1 mt-1 text-sm bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                        <a href="#_" @click="menuBarOpen=false"
                            class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                            <span>English</span>
                        </a>
                        <a href="#_" @click="menuBarOpen=false"
                            class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                            <span>Swahili</span>
                        </a>

                        <div class="relative w-full group">
                            <div
                                class="flex cursor-default select-none items-center rounded px-2 hover:bg-neutral-100 py-1.5 outline-none">
                                <span>More Tools</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 ml-auto">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                            <div data-submenu
                                class="absolute top-0 right-0 invisible mr-1 duration-200 ease-out translate-x-full opacity-0 group-hover:mr-0 group-hover:visible group-hover:opacity-100">
                                <div
                                    class="z-50 min-w-[8rem] overflow-hidden rounded-md border bg-white p-1 shadow-md animate-in slide-in-from-left-1 w-48">
                                    <div @click="contextMenuOpen=false"
                                        class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        Save Page As...<span
                                            class="ml-auto text-xs tracking-widest text-muted-foreground">⇧⌘S</span>
                                    </div>
                                    <div @click="contextMenuOpen=false"
                                        class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        Create Shortcut...</div>
                                    <div @click="contextMenuOpen=false"
                                        class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        Name Window...</div>
                                    <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                                    <div @click="contextMenuOpen=false"
                                        class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        Developer Tools</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="">
                <span>|</span>
            </div>
            <div x-data="{
                dropdownOpen: false
            }" class="relative">

                <button @click="dropdownOpen=true"
                    class="inline-flex items-center justify-center  space-x-1 h-10 px-4 py-2 text-sm font-medium transition-colors rounded-md disabled:opacity-50 disabled:pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                        <path
                            d="M21.41 8.64v-.05a10 10 0 0 0-18.78 0s0 0 0 .05a9.86 9.86 0 0 0 0 6.72v.05a10 10 0 0 0 18.78 0s0 0 0-.05a9.86 9.86 0 0 0 0-6.72ZM4.26 14a7.82 7.82 0 0 1 0-4h1.86a16.73 16.73 0 0 0 0 4Zm.82 2h1.4a12.15 12.15 0 0 0 1 2.57A8 8 0 0 1 5.08 16Zm1.4-8h-1.4a8 8 0 0 1 2.37-2.57A12.15 12.15 0 0 0 6.48 8ZM11 19.7A6.34 6.34 0 0 1 8.57 16H11Zm0-5.7H8.14a14.36 14.36 0 0 1 0-4H11Zm0-6H8.57A6.34 6.34 0 0 1 11 4.3Zm7.92 0h-1.4a12.15 12.15 0 0 0-1-2.57A8 8 0 0 1 18.92 8ZM13 4.3A6.34 6.34 0 0 1 15.43 8H13Zm0 15.4V16h2.43A6.34 6.34 0 0 1 13 19.7Zm2.86-5.7H13v-4h2.86a14.36 14.36 0 0 1 0 4Zm.69 4.57a12.15 12.15 0 0 0 1-2.57h1.4a8 8 0 0 1-2.4 2.57ZM19.74 14h-1.86a16.16 16.16 0 0 0 .12-2a16.28 16.28 0 0 0-.12-2h1.86a7.82 7.82 0 0 1 0 4Z" />
                    </svg>
                    <span class="text-sm">English</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                    </svg>
                </button>
                <div x-show="dropdownOpen" @click.away="dropdownOpen=false" x-transition:enter="ease-out duration-200"
                    x-transition:enter-start="-translate-y-2" x-transition:enter-end="translate-y-0"
                    class="absolute top-0 z-50 w-32 mt-12 -translate-x-1/2 left-1/2" x-cloak>
                    <div
                        class="p-1 mt-1 text-sm bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                        <a href="#_" @click="menuBarOpen=false"
                            class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                            <span>English</span>
                        </a>
                        <a href="#_" @click="menuBarOpen=false"
                            class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                            <span>Swahili</span>
                        </a>

                        <div class="relative w-full group">
                            <div
                                class="flex cursor-default select-none items-center rounded px-2 hover:bg-neutral-100 py-1.5 outline-none">
                                <span>More Tools</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-4 h-4 ml-auto">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                            <div data-submenu
                                class="absolute top-0 right-0 invisible mr-1 duration-200 ease-out translate-x-full opacity-0 group-hover:mr-0 group-hover:visible group-hover:opacity-100">
                                <div
                                    class="z-50 min-w-[8rem] overflow-hidden rounded-md border bg-white p-1 shadow-md animate-in slide-in-from-left-1 w-48">
                                    <div @click="contextMenuOpen=false"
                                        class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        Save Page As...<span
                                            class="ml-auto text-xs tracking-widest text-muted-foreground">⇧⌘S</span>
                                    </div>
                                    <div @click="contextMenuOpen=false"
                                        class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        Create Shortcut...</div>
                                    <div @click="contextMenuOpen=false"
                                        class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        Name Window...</div>
                                    <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                                    <div @click="contextMenuOpen=false"
                                        class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        Developer Tools</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Replica of a flag Ends --}}
            {{-- <div class="flex space-x-1 items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                    <path
                        d="M21.41 8.64v-.05a10 10 0 0 0-18.78 0s0 0 0 .05a9.86 9.86 0 0 0 0 6.72v.05a10 10 0 0 0 18.78 0s0 0 0-.05a9.86 9.86 0 0 0 0-6.72ZM4.26 14a7.82 7.82 0 0 1 0-4h1.86a16.73 16.73 0 0 0 0 4Zm.82 2h1.4a12.15 12.15 0 0 0 1 2.57A8 8 0 0 1 5.08 16Zm1.4-8h-1.4a8 8 0 0 1 2.37-2.57A12.15 12.15 0 0 0 6.48 8ZM11 19.7A6.34 6.34 0 0 1 8.57 16H11Zm0-5.7H8.14a14.36 14.36 0 0 1 0-4H11Zm0-6H8.57A6.34 6.34 0 0 1 11 4.3Zm7.92 0h-1.4a12.15 12.15 0 0 0-1-2.57A8 8 0 0 1 18.92 8ZM13 4.3A6.34 6.34 0 0 1 15.43 8H13Zm0 15.4V16h2.43A6.34 6.34 0 0 1 13 19.7Zm2.86-5.7H13v-4h2.86a14.36 14.36 0 0 1 0 4Zm.69 4.57a12.15 12.15 0 0 0 1-2.57h1.4a8 8 0 0 1-2.4 2.57ZM19.74 14h-1.86a16.16 16.16 0 0 0 .12-2a16.28 16.28 0 0 0-.12-2h1.86a7.82 7.82 0 0 1 0 4Z" />
                </svg>
                <span class="text-sm">English</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                </svg>
            </div> --}}

        </div>

        {{-- Slide Over --}}

        <div x-data="{ 
            slideOverOpen: false 
        }" class="relative z-50 w-auto h-auto sm:hidden">
            <button @click="slideOverOpen=true"
                class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium transition-colors disabled:opacity-50 disabled:pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 14 14">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        d="M13.5 2H.5m13 5H.5m13 5H.5" />
                </svg>
            </button>
            <template x-teleport="body">
                <div x-show="slideOverOpen" @keydown.window.escape="slideOverOpen=false" class="relative z-[99]">
                    <div x-show="slideOverOpen" x-transition.opacity.duration.600ms @click="slideOverOpen = false"
                        class="fixed inset-0 bg-black bg-opacity-10"></div>
                    <div class="fixed inset-0 overflow-hidden">
                        <div class="absolute inset-0 overflow-hidden">
                            <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
                                <div x-show="slideOverOpen" @click.away="slideOverOpen = false"
                                    x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                                    x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                                    class="w-screen max-w-md">
                                    <div
                                        class="flex flex-col h-full py-5 overflow-y-scroll bg-white border-l shadow-lg border-neutral-100/70">
                                        <div class="px-4 sm:px-5">
                                            <div class="flex items-start justify-between pb-1">
                                                {{-- <h2 class="text-base font-semibold leading-6 text-gray-900"
                                                    id="slide-over-title">Slide Over Title</h2> --}}
                                                <div class="flex items-center h-auto ml-3">
                                                    <button @click="slideOverOpen=false"
                                                        class="absolute top-0 right-0 z-30 flex items-center justify-center px-3 py-2 mt-4 mr-5 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                        <span>Close</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative flex-1 px-4 mt-5 sm:px-5">
                                            <div class="absolute inset-0">
                                                {{-- Small screen Nav content --}}
                                                <div class=" overflow-y-auto text-center">
                                                    <div class="text-gray-100 text-xl">
                                                        <div class="p-2.5 flex items-center">
                                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                                class="h-12 w-28 fill-primary"
                                                               
                                                                viewBox="0 0 1430.834481 320.609980"
                                                                preserveAspectRatio="xMidYMid meet">
                                                                <g
                                                                    transform="translate(-57.165519,356.782244) scale(0.100000,-0.100000)">
                                                                    <path d="M3380 3561 c0 -7 20 -34 45 -60 25 -26 45 -53 45 -60 0 -30 -469 19
                                                                -578 60 -15 6 -29 9 -32 7 -14 -9 21 -161 50 -219 36 -69 131 -136 250 -174
                                                                96 -31 100 -46 39 -120 -48 -58 -148 -204 -174 -255 -41 -79 -75 -206 -85
                                                                -313 -6 -60 -15 -118 -20 -128 -13 -23 -321 -179 -354 -179 -31 0 -33 8 -40
                                                                145 -5 105 -39 276 -76 386 -70 209 -201 394 -346 489 -107 70 -237 110 -382
                                                                117 -296 15 -537 -74 -733 -269 -160 -160 -257 -330 -355 -626 -54 -163 -68
                                                                -254 -60 -392 10 -186 45 -281 182 -487 88 -134 125 -174 110 -120 -14 50 -18
                                                                316 -7 417 14 128 55 303 88 379 26 59 68 111 90 111 19 0 17 -12 -19 -114
                                                                -31 -87 -32 -98 -36 -273 -5 -237 8 -306 85 -463 50 -102 66 -125 142 -200 67
                                                                -66 110 -98 191 -142 57 -31 106 -55 108 -54 2 2 -11 26 -28 52 -44 70 -71
                                                                165 -77 269 -6 103 10 183 56 280 31 63 104 155 116 143 4 -3 15 -62 26 -130
                                                                36 -240 66 -344 129 -448 68 -113 185 -227 137 -133 -9 16 -22 63 -31 105 -27
                                                                132 -18 238 21 238 23 0 174 -85 255 -143 299 -214 565 -591 595 -844 8 -73
                                                                33 -66 33 9 0 90 72 259 161 379 80 109 219 232 379 337 108 71 171 122 246
                                                                196 93 93 103 108 137 191 54 132 85 242 103 374 14 104 15 150 4 431 -16 403
                                                                -5 649 32 686 7 7 58 21 113 29 136 22 145 24 145 34 0 11 -45 26 -104 36 -22
                                                                4 -68 18 -103 33 -60 24 -64 28 -83 79 -60 161 -117 228 -245 289 -103 49
                                                                -145 62 -145 45z" />
                                                                    <path d="M12590 3100 c-96 -10 -176 -18 -177 -19 -9 -4 -1 -1427 8 -1508 21
                                                                -188 80 -319 172 -380 65 -44 104 -54 220 -60 85 -5 107 -2 180 21 91 28 189
                                                                85 255 149 l42 41 0 -92 0 -92 225 0 225 0 0 290 0 290 29 0 c26 0 29 -4 46
                                                                -65 22 -82 87 -212 143 -288 24 -31 73 -82 110 -113 124 -102 249 -147 412
                                                                -147 107 0 162 16 246 73 60 40 154 130 154 147 0 12 -75 207 -87 226 -3 5
                                                                -15 -1 -27 -12 -33 -31 -107 -61 -152 -61 -83 0 -143 28 -216 101 -54 55 -78
                                                                90 -129 193 l-62 125 159 253 c87 139 180 287 206 327 26 41 46 76 44 78 -5 6
                                                                -470 42 -477 37 -3 -2 -79 -131 -168 -287 -118 -207 -169 -287 -190 -300 -16
                                                                -9 -32 -17 -35 -17 -3 0 -6 250 -6 555 0 305 -3 555 -7 555 -21 1 -401 -32
                                                                -420 -36 l-23 -4 0 -858 -1 -857 -40 95 c-22 52 -44 99 -48 103 -4 4 -38 -7
                                                                -76 -25 -40 -18 -91 -34 -121 -36 -46 -4 -56 -1 -77 21 -51 50 -51 49 -55 850
                                                                l-3 747 -52 -1 c-29 -1 -131 -10 -227 -19z" />
                                                                    <path d="M4264 2973 c3 -60 9 -143 13 -185 l6 -78 236 -2 236 -3 3 -772 2
                                                                -773 235 0 235 0 0 775 0 775 245 0 c135 0 245 1 245 3 0 1 7 76 15 167 8 91
                                                                15 173 15 183 0 16 -42 17 -746 17 l-747 0 7 -107z" />
                                                                    <path
                                                                        d="M10035 3016 l-210 -11 -3 -202 -2 -203 -75 0 -75 0 0 -170 0 -170 75
                                                                0 75 0 0 -349 c0 -393 7 -457 64 -577 18 -39 51 -88 71 -109 103 -103 305
                                                                -130 481 -64 65 25 185 103 232 152 l34 35 -43 103 c-23 57 -45 108 -49 112
                                                                -4 4 -37 -7 -75 -25 -40 -18 -91 -34 -121 -36 -48 -4 -56 -2 -82 25 -44 43
                                                                -51 98 -58 433 l-7 299 124 3 124 3 17 130 c9 72 17 147 17 168 l1 37 -135 0
                                                                -135 0 -2 212 c-3 181 -5 213 -18 214 -8 0 -109 -4 -225 -10z" />
                                                                    <path d="M8043 2615 c-73 -20 -142 -57 -208 -111 l-56 -45 2 75 c1 42 0 78 -2
                                                                80 -2 3 -99 -4 -214 -15 -116 -10 -216 -19 -222 -19 -10 0 -13 -149 -13 -710
                                                                l0 -710 225 0 225 0 0 494 0 494 41 40 c71 72 180 91 247 43 36 -25 68 -96 81
                                                                -182 6 -37 11 -238 11 -476 l0 -413 230 0 230 0 0 497 0 496 44 42 c73 71 181
                                                                83 245 30 58 -50 64 -81 72 -405 4 -162 10 -311 14 -330 36 -179 103 -284 211
                                                                -332 64 -28 189 -42 260 -29 91 17 196 75 280 156 l74 70 -47 110 c-25 61 -48
                                                                112 -49 114 -2 2 -17 -8 -35 -23 -64 -54 -143 -71 -188 -40 -49 35 -54 67 -61
                                                                399 -8 336 -18 402 -74 514 -76 150 -190 208 -386 198 -146 -7 -248 -46 -379
                                                                -142 -59 -43 -65 -46 -74 -29 -5 11 -36 45 -67 76 -47 46 -70 60 -125 77 -80
                                                                25 -212 27 -292 6z" />
                                                                    <path d="M11016 2615 c-184 -47 -290 -167 -353 -402 -25 -91 -27 -113 -27
                                                                -313 0 -186 3 -228 22 -313 25 -115 63 -225 97 -283 86 -147 291 -215 506
                                                                -170 97 21 165 60 242 138 38 38 70 68 71 66 1 -2 12 -19 24 -39 30 -50 105
                                                                -117 157 -140 23 -10 76 -24 118 -29 120 -17 226 7 355 79 52 28 162 128 162
                                                                145 0 12 -78 206 -86 215 -3 3 -18 -3 -34 -13 -47 -27 -139 -56 -180 -56 -49
                                                                0 -74 23 -96 85 -17 45 -19 99 -22 523 l-3 472 -22 0 c-12 1 -112 9 -222 19
                                                                -110 10 -203 16 -207 14 -5 -2 -8 -26 -8 -54 0 -27 -2 -49 -4 -49 -2 0 -27 15
                                                                -55 34 -87 59 -153 79 -271 82 -69 2 -125 -2 -164 -11z m395 -385 c20 -11 50
                                                                -31 68 -45 l31 -27 0 -264 0 -265 -45 -44 c-84 -81 -195 -98 -269 -42 -37 29
                                                                -76 102 -95 182 -15 61 -16 220 -1 295 12 63 60 168 89 194 52 47 147 54 222
                                                                16z" />
                                                                    <path d="M5772 2073 c4 -483 6 -555 21 -607 53 -182 126 -267 267 -317 94 -33
                                                                277 -33 370 -1 61 21 132 58 189 99 l24 18 -6 -74 c-15 -184 -129 -281 -329
                                                                -281 -72 0 -159 13 -235 36 l-23 6 0 -146 0 -147 37 -15 c126 -53 391 -78 527
                                                                -50 122 25 199 67 286 155 86 86 126 155 167 286 l28 90 3 738 3 737 -228 -2
                                                                -228 -3 -3 -503 -2 -502 -41 -29 c-65 -48 -119 -64 -193 -59 -80 5 -111 25
                                                                -146 94 l-25 49 -3 468 c-2 398 -5 467 -17 467 -20 0 -340 28 -398 35 l-48 6
                                                                3 -548z" />
                                                                </g>
                                                            </svg>
                                                            {{-- <i
                                                                class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                                                            <h1 class="font-bold text-gray-700 text-[15px] ml-3">
                                                                TailwindCSS</h1>
                                                            <i class="bi bi-x cursor-pointer ml-28 lg:hidden"
                                                                onclick="openSidebar()"></i> --}}
                                                        </div>
                                                        <div class="my-2 bg-primary h-[1px]"></div>
                                                    </div>

                                                    <div
                                                        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                                                        <a href="{{route('home')}}"
                                                            class="text-[15px] ml-4 text-gray-700 font-bold">Home</a>
                                                    </div>
                                                    <div
                                                        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                                                        <span
                                                            class="text-[15px] ml-4 text-gray-700 font-bold">Events</span>
                                                    </div>

                                                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                                                        onclick="dropdown()">
                                                        <i class="bi bi-chat-left-text-fill"></i>
                                                        <div class="flex justify-between w-full items-center">
                                                            <span
                                                                class="text-[15px] ml-4 text-gray-700 font-bold">Pages</span>
                                                            <span class="text-sm rotate-180" id="arrow">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-gray-700"
                                                                    viewBox="0 0 24 24">
                                                                    <path 
                                                                        d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-700 font-bold hidden"
                                                        id="submenu">
                                                        <h1
                                                            class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                                                            Option 1
                                                        </h1>
                                                        <h1
                                                            class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                                                            Option 2
                                                        </h1>

                                                    </div>
                                                    <div
                                                        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                                                        <span
                                                            class="text-[15px] ml-4 text-gray-700 font-bold">Sell</span>
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
            </template>
        </div>

        {{-- Slide Over ends --}}
    </nav>
    <script type="text/javascript">
        function dropdown() {
          document.querySelector("#submenu").classList.toggle("hidden");
          document.querySelector("#arrow").classList.toggle("rotate-0");
        }
        dropdown();
  
        function openSidebar() {
          document.querySelector(".sidebar").classList.toggle("hidden");
        }
      </script>
</div>