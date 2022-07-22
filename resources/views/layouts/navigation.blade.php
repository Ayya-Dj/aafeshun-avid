<nav x-data="{ open: false }" class="af-text fixed top-1 right-1 lg:m-5 md:m-6 mx-8 my-6 w-screen">
    <div @click="open = ! open" class="af-nav-button cursor-pointer z-10 absolute right-1" :class="{'open': open, 'closed': ! open}">
        <div class="af-nav-burger"></div>
    </div>
    <div class="cursor-pointer z-10 fixed right-1 bottom-1 md:inline hidden">
        <div class="af-nav-social-media my-10"><x-sm-twitter-ol :height=2 :width=2></x-sm-twitter-ol></div>
        <div class="af-nav-social-media my-10"><x-sm-facebook-ol :height=2 :width=2></x-sm-facebook-ol></div>
        <div class="af-nav-social-media my-10"><x-sm-instagram-ol :height=2 :width=2></x-sm-instagram-ol></div>
    </div>
    <div class="af-nav-bg w-screen min-h-screen absolute right-1 top-1 lg:-m-7 md:-m-8 -mx-10 -my-8 opacity-20" :class="{'open': open, 'closed': ! open}">
        <div class="max-w-7xl mx-auto lg:py-10 md:py-6 px-10 py-8 flex flex-wrap af-nav-inner">

            <!-- Big nav -->
            <div class="w-full md:flex flex-wrap hidden">
                <div class="mx-auto flex items-center">
                    <img src="{{asset('img/logo/logo.png')}}" class="w-auto md:h-20 h-12">
                    <img src="{{asset('img/logo/text-white.png')}}" class="w-auto md:h-10 h-8 mx-5">
                </div>
                <div class="w-full">
                    Big menu
                </div>
            </div>

            <!-- Smol nav for smol screens uwu -->
            <div class="w-full flex flex-wrap md:hidden">
                <div class="w-full flex items-center">
                    <img src="{{asset('img/logo/logo.png')}}" class="w-auto md:h-20 h-12">
                    <img src="{{asset('img/logo/text-white.png')}}" class="w-auto md:h-10 h-8 mx-5">
                </div>
                <div>
                    Smol menu
                </div>
            </div>

        </div>
    </div>
</nav>