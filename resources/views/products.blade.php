<x-app-layout>
	@section('meta')
    	<title>Products - {{ config('app.name', 'Aafeshun') }}</title>
    @endsection

	<div class="max-w-7xl mx-auto py-28 flex flex-wrap min-h-screen place-content-start sm:px-20 px-8">
		<div class="w-full text-4xl text-center mb-5">
			Products
		</div>
		@foreach($products as $product)
			<div class="lg:w-1/3 sm:w-1/2 w-full my-2">
				<div class="bg-base-100 shadow-xl sm:m-4 overflow-hidden rounded-2xl">
					<div class="af-img-fit h-40 bg-white" style="background-image: url({{asset('img/products/'.$product['image'])}});"></div>
					<div class="card-body">
						<h2 class="card-title af-pure-white">{{$product['name']}}</h2>
						<p class="af-white truncate">{{$product['description']}}</p>
						<p class="af-pure-white">Price: MVR {{$product['price']}}</p>
						<div class="card-actions justify-end">
							<button class="btn btn-accent">Add to Cart</button>
						</div>
					</div>
				</div>	
			</div>
		@endforeach
	</div>
</x-app-layout>