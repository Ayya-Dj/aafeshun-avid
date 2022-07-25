<x-app-layout>
	@section('meta')
    	<title>Gallery - {{ config('app.name', 'Aafeshun') }}</title>
    @endsection

    @section('custom-scripts')
		{{-- This js is here because it only affects this page and it will be easier to modify the js within the page --}}
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
	@endsection

	<div class="w-full text-4xl text-center mb-5 sm:px-20 px-8 pt-28">
		Products Gallery
	</div>
	<div class="w-full py-10 flex flex-wrap">
		<div class="w-full text-center mb-5 italic">
			Swipe / drag left of right to scroll the images.
		</div>
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

</x-app-layout>