<x-app-layout>
	<div class="w-full py-40 flex flex-wrap">
		<div class="w-full flex flex-wrap">
			<div class="owl-carousel owl-theme af-gallery">
				@foreach($products as $product)
			    	<div class="af-gallery-image border py-5" style="background-image: url({{asset('img/products/' . $product['image'])}});">
			    		<h4 class="text-center af-black text-xl">{{$product['name']}}</h4>
			    	</div>
			    @endforeach
			</div>
		</div>
	</div>
		
	<script type="text/javascript">
	    $(document).ready(function() {
	        setTimeout(function() {
	            $('.af-gallery').owlCarousel({
	                loop:true,
	                nav:false,
	                dots:false,
	                autoplay:false,
	                autoWidth:false,
	                responsiveClass:true,
	                responsive:{
	                    0:{
	                        items:1,
	                    },
	                    900:{
	                        items:2,
	                    },
	                    1350:{
	                        items:3,
	                    }
	                }
	            });
	        }, 10);
	    });     
	</script>
</x-app-layout>