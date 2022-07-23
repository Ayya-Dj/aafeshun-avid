<div class="af-cart-bg af-width-cart min-h-screen absolute right-1 top-1 lg:-m-7 md:-m-8 -mx-10 -my-8 opacity-20 z-10" :class="{'open': cart, 'closed': ! cart}">
    <div class="max-w-7xl mx-auto lg:py-10 md:py-6 px-5 py-8 flex flex-wrap af-cart-inner">

        <div class="w-full flex flex-wrap min-h-screen place-content-start">
            <div @click="cart = ! cart" class="top-1 fixed badge badge-error gap-2 mt-10">
                Close
            </div>
            <div class="w-full flex text-2xl mt-10">
                My Cart
            </div>
            <div class="w-full flex flex-wrap af-cart-items-container my-5">
                @foreach( $products as $product )
                	<div class="w-full flex flex-wrap md:h-32 h-20 rounded-lg shadow-lg bg-base-200 mb-2 relative overflow-hidden">
                		<div class="w-1/3 bg-white text-black text-center af-img-fit md:h-32 h-20" style="background-image: url({{asset('img/products/'.$product['img'])}});">
                		</div>
                		<div class="w-2/3 p-5 -mt-3">
                            <div class="w-full truncate">
                                {{$product['name']}}
                            </div>
                			<div class="w-full">
                                Qty: {{$product['qty']}}
                            </div>
                            <div class="w-full">
                                Price: {{$product['price']}}
                            </div>
                		</div>
                        <span class="bg-red-500 af-white rounded-full px-2 right-1 top-1 absolute cursor-pointer">x</span>
                	</div>
                    @php
                    $total+= $product['qty'] * $product['price'];
                    @endphp
                @endforeach
            </div>
            <div class="w-full flex flex-wrap af-cart-items-price text-right">
                <div class="w-full flex">
                    <div class="md:w-9/12 w-1/2">
                        Price
                    </div>
                    <div class="md:w-3/12 w-1/2" id="no_gst">
                        {{$total}}
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="md:w-9/12 w-1/2">
                        GST
                    </div>
                    <div class="md:w-3/12 w-1/2" id="gst">
                        {{round($total*0.06, 2)}}
                    </div>
                </div>
                <div class="w-full flex">
                    <div class="md:w-9/12 w-1/2">
                        Total
                    </div>
                    <div class="md:w-3/12 w-1/2" id="total">
                        {{round($total + ($total*0.06), 2)}}
                    </div>
                </div>
                <div class="w-full flex mt-5">
                    <button class="af-button w-full mx-auto">Check Out</button>
                </div>
            </div>
        </div>

    </div>
</div>