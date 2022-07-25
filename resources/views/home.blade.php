<x-app-layout>
	@section('meta')
    <title>{{ config('app.name', 'Aafeshun') }}</title>
    @endsection

    @section('custom-styles')
	<style type="text/css">
		{{-- This css is here because it only affects this page and it requires an asset --}}
        .af-partners {
            height: 500px;
            background-position: center;
            background-size: cover !important;
            background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url({{asset('img/partner-banner.jpg')}});
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
    @endsection
    
	<div class="flex flex-wrap min-h-screen place-content-start">
		<div class="hero min-h-screen w-full flex flex-wrap" style="background-image: url(https://placeimg.com/1920/1080/arch);">
			<div class="hero-overlay bg-opacity-60"></div>
				<div class="text-center text-neutral-content" >
					<div class="px-5" >
						<h1 class="mb-5 text-5xl font-bold af-pure-white">Aafeshun</h1>
						<p class="mb-5 af-text">Your number one local construction company, that you can trust will deliver the best products and services!</p>
						<a href="{{route('products')}}">
							<button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
								Check out our Products
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="max-w-7xl w-full flex flex-wrap mx-auto py-20 px-5 af-text">
	        <div class="md:w-1/2 w-full">
	            <div class="w-full text-xl flex uppercase">
	                <div class="w-1/12 bg-white h-px my-auto">
	                    
	                </div>
	                <div class="w-11/12 my-auto px-5 text-lg font-bold tracking-widest">
	                    A New Beginning
	                </div>
	            </div>
	            <div class="w-full text-4xl font-extrabold mt-5">
	                Aafeshun
	            </div>
	        </div>
	        <div class="md:w-1/2 w-full text-xl h-auto my-auto">
	            Aafeshun was found in 2012 by a friend group of architects, who had the idea to renovate the entire construction industry in Maldives. From providing outstanding quality construction equipment, to building amazing buildings, it is out aim to make sure that the new start you get will be as smooth sailing as it can ever be!
	        </div>
	    </div>

	    <div class="w-full bg-gray-900">
		    <div class="max-w-7xl w-full flex flex-wrap mx-auto py-20 af-text">
		        <div class="w-full flex flex-wrap">
		            <div class="lg:w-5/12 w-full bg-gray-500 text-white text-center lg:px-5 px-0 rounded-md" style="height: 664px; background-image: url({{asset('img/services.jpg')}});"></div>
		            <div class="lg:w-7/12 w-full my-auto lg:px-20 md:px-10 px-5 flex flex-wrap pt-10">
		                <div class="w-full text-xl flex uppercase">
		                    <div class="w-1/12 bg-white h-px my-auto">
		                        
		                    </div>
		                    <div class="w-11/12 my-auto px-5 text-lg font-bold tracking-widest">
		                        Our Services
		                    </div>
		                </div>
		                <div class="w-full text-4xl font-extrabold mt-5">
		                    Construction, Carpentry and More
		                </div>
		                <div class="w-full text-xl text-justify mt-5">
		                    Enjoy the best designs and works by the most renowned builders, carpenters and more, with a collective experience hours of more than 200 years.
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="w-full flex bg-gray-900 af-partners">
		    <div class="w-full flex flex-wrap my-auto text-center text-white">
		        <div class="w-full flex ">
		            <div class="w-full text-xl flex uppercase">
		                <div class="w-10 bg-white h-px my-auto ml-auto">
		                    
		                </div>
		                <div class="w-auto my-auto mr-auto px-5 text-lg font-bold tracking-widest">
		                    Our Partners
		                </div>
		            </div>
		        </div>
		        <div class="w-full text-2xl font-extrabold my-5">
		            We have worked with some of the biggest names in Maldives
		        </div>
		        @php
		        $partners = array(
		        	'AmanaTakaful',
		        	'BML',
		        	'Centurion',
		        	'Dhiraagu',
		        	'HDFC',
		        	'MIB',
		        	'MTCC',
		        	'MTDC',
		        	'Ooredoo',
		        	'STO',
		        );
		        @endphp
		        <div class="w-full flex flex-wrap">
					@foreach($partners as $partner)
				    	<div class="af-partner-logo md:w-1/12 sm:w-1/6 w-1/3 mx-auto lg:py-20 md:py-16 py-10" style="background-image: url({{asset('img/partners/' . $partner . '.png')}});">
				    	</div>
				    @endforeach
				</div>
		    </div>
		</div>
	</div>
</x-app-layout>