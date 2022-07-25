<x-app-layout>
	@section('meta')
    	<title>About Us - {{ config('app.name', 'Aafeshun') }}</title>
    @endsection

    @section('custom-styles')
    	{{-- This css is here because it only affects this page and it requires an asset --}}
	    <style type="text/css">
			.about-top-bg {
				height: 350px;
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
				background-image: url({{asset('img/about.jpeg')}});
			}
			
			.h-640 {
				height: 640px;
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
				background-image: url({{asset('img/about-bg.jpg')}});
			}
		</style>
	@endsection

	@section('custom-scripts')
		{{-- This js is here because it only affects this page and it will be easier to modify the js within the page --}}
		<script type="text/javascript">
			$("#message").keyup(function(){
				$("#count").text($(this).val().length);
			});

			$("#message").keydown(function(){
				$("#count").text($(this).val().length);
			});

		</script>

		<script>
			// Initialize and add the map
			function initMap() {
				// The location of Business
				const af = { lat: 4.175199547610507, lng: 73.51010075654993 };
				// The map, centered at Business
				const map = new google.maps.Map(document.getElementById("map"), {
					zoom: 19,
					center: af,
					styles: [    
				        {
				            featureType: "poi.business",
				            elementType: "labels",
				            stylers: [{ visibility: "off" }]
				        }
				    ]
				});
				// The marker, positioned at Business
				const marker = new google.maps.Marker({
					position: af,
					map: map,
				});
			}
		</script>
	@endsection

	<div class="flex flex-wrap min-h-screen place-content-start af-text">
		<div class="w-full flex flex-wrap">
			<div class="about-top-bg w-full flex af-bg">
				<div class="mx-auto my-auto text-4xl">
					About Us
				</div>
			</div>
		</div>
		<div class="w-full flex flex-wrap py-20">
			<div class="w-full flex flex-wrap">
				<div class="max-w-4xl w-full text-center mx-auto p-5 text-xl">
					<div class="w-full">
						Aafeshun was found in 2012 by a friend group of architects, who had the idea to renovate the entire construction industry in Maldives. From providing outstanding quality construction equipment, to building amazing buildings, it is out aim to make sure that the new start you get will be as smooth sailing as it can ever be!
					</div>
					<div class="w-full flex flex-wrap py-8">
						<div class="w-1/2 border-r my-auto">
							Over 300 projects done across Maldives
						</div>
						<div class="w-1/2 border-l px-5">
							More than 5000 happy customers
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-full flex flex-wrap af-bg-grey mb-5">
			<div class="max-w-7xl w-full mx-auto py-20">
				<div class="max-w-xl w-full text-xl text-center mx-auto">
					Need help with your online shopping, have a question or need more information? Just drop us a line!
				</div>
				<div class="w-full text-center text-3xl font-extrabold py-10">
					Please call or email
				</div>
				<div class="w-full text-center text-lg">
					Call us: <a href="tel:336699">336699</a>
				</div>
				<div class="w-full text-center text-lg">
					Email: <a href="mailto:info@aafeshun.com">info@aafeshun.com</a>
				</div>
			</div>
		</div>
		<div class="w-full flex flex-wrap af-bg">
			<div class="w-full flex flex-wrap">
				<div class="max-w-7xl w-full mx-auto py-2 flex flex-wrap">
					<div class="lg:w-1/3 w-full bg-gray-900 h-640 rounded">

					</div>
					<div class="lg:w-2/3 w-full flex flex-wrap p-5 place-content-start">
					<div class="w-full font-extrabold text-xl py-2">
						Get in touch
					</div>
					<div class="w-full">
						Please complete the form below and a member of our team will be in contact with you shortly.
					</div>
					<form class="w-full" action="{{route('contact')}}" method="POST">
						<div class="w-full py-2">
							<input type="text" name="name" placeholder="YOUR NAME" required class="w-full border-0 border-b py-3 no-outline">
						</div>
						<div class="w-full py-2">
							<input type="email" name="email" placeholder="YOUR EMAIL" required class="w-full border-0 border-b py-3 no-outline">
						</div>
						<div class="w-full py-2">
							<input type="text" name="subject" placeholder="SUBJECT" required class="w-full border-0 border-b py-3 no-outline">
						</div>
						<div class="w-full py-2">
							<textarea class="af-text-area appearance-none block w-full rounded py-3 mb-3 leading-tight focus:outline-none focus:border-gray-500" rows="8" name="message" maxlength="250" id="message" required placeholder="YOUR MESSAGE"></textarea>
							<p class="af-text text-xs italic w-full"><span id="count">0</span>/250</p>
							<p class="af-text text-xs italic inline">You can also contact us through email at <a href="mailto:info@aafeshun.com">info@aafeshun.com</a></p>
						</div>
						@csrf
						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						<div class="w-full py-2">
							<input type="submit" name="submit" class="w-full py-3 rounded-md border-2 custom-button af-text af-button cursor-pointer g-recaptcha" >
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="w-full flex flex-wrap">
			<div class="max-w-7xl w-full mx-auto py-2 flex flex-wrap py-20">
				<div class="lg:w-2/3 w-full bg-gray-900 h-640 text-center text-white">
					<div id="map" class="w-full h-full"></div>
						<!-- Google maps location api goes here -->
						<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBClnG0pyr1F_vYC4kvbOuHcQul8wecHZY&callback=initMap"></script>
					</div>
					<div class="lg:w-1/3 w-full flex flex-wrap p-5 place-content-start my-auto">
						<div class="w-full font-extrabold text-xl py-2">
							Location
						</div>
					<div class="w-full flex">
						G.Haveeree Manzaru 2F, Majeedhee Magu, K. Male', Maldives
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>