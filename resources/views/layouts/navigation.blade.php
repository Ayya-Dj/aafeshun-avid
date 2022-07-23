<nav x-data="{ open: false, cart: false }" class="af-text fixed top-1 right-1 lg:m-5 md:m-6 mx-8 my-6 w-screen">
    <div @click="open = ! open" class="af-nav-button cursor-pointer z-40 absolute left-1 ml-16 flex md:hidden" :class="{'open': open, 'closed': ! open}">
        <div class="af-nav-burger"></div>
    </div>
    <div @click="cart = ! cart" class="af-cart-button cursor-pointer z-20 absolute right-1" :class="{'open': cart, 'closed': ! cart}">
        <div class="my-3 indicator"><span class="indicator-item indicator-top badge badge-accent" id="cart-item-count">5</span><x-cart-icon :height=2 :width=2></x-cart-icon></div>
    </div>
    <div class="cursor-pointer z-40 fixed right-1 bottom-1 md:inline hidden">
        <div class="af-nav-social-media my-10"><x-sm-twitter-ol :height=2 :width=2></x-sm-twitter-ol></div>
        <div class="af-nav-social-media my-10"><x-sm-facebook-ol :height=2 :width=2></x-sm-facebook-ol></div>
        <div class="af-nav-social-media my-10"><x-sm-instagram-ol :height=2 :width=2></x-sm-instagram-ol></div>
    </div>

    <!-- Main navigation -->
    <div class="af-big-nav-bg w-screen left-1 top-1 mx-16 absolute md:inline hidden">
        <div class="w-full flex flex-wrap">
            <x-logo class="flex"></x-logo>
            <x-nav-link>Home</x-nav-link>
            <x-nav-link>Products</x-nav-link>
            <x-nav-link>Gallery</x-nav-link>
            <x-nav-link>About Us</x-nav-link>
        </div>
    </div>

    <!-- Smol nav for smol screens -->
    <div class="af-nav-bg w-screen min-h-screen absolute right-1 top-1 lg:-m-7 md:-m-8 -mx-10 -my-8 opacity-20 z-30" :class="{'open': open, 'closed': ! open}">
        <div class="max-w-7xl mx-auto lg:py-10 md:py-6 px-10 py-8 flex flex-wrap af-nav-inner">
            <div class="w-full flex flex-wrap md:hidden">
                <div class="w-full flex items-center">
                    Nav
                </div>
                <div>
                    Links
                </div>
            </div>

        </div>
    </div>

    <!-- Shopping cart, rather than make a whole new page, being able to check cart from anywhere should be more preferable -->
    <div class="af-cart-bg w-screen min-h-screen absolute right-1 top-1 lg:-m-7 md:-m-8 -mx-10 -my-8 opacity-20 z-10" :class="{'open': cart, 'closed': ! cart}">
        <div class="max-w-7xl mx-auto lg:py-10 md:py-6 px-10 py-8 flex flex-wrap af-cart-inner">

            <!-- Big cart -->
            <div class="w-full md:flex flex-wrap hidden">
                <div class="mx-auto flex items-center">
                    Shopping Cart
                </div>
                <div class="w-full">
                    Big
                </div>
            </div>

            <!-- Smol cart -->
            <div class="w-full flex flex-wrap md:hidden">
                <div class="w-full flex items-center">
                    Shopping Cart
                </div>
                <div>
                    Smol Items
                </div>
                <div @click="cart = ! cart" class="bottom-1 absolute mb-5">
                    Close Cart
                </div>
            </div>

        </div>
    </div>
</nav>