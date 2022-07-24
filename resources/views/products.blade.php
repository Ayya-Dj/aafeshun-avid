<x-app-layout>
	<div class="max-w-7xl mx-auto py-40 flex flex-wrap min-h-screen place-content-start sm:px-20 px-8">
		@for($i=0;$i<10;$i++)
		@foreach($products as $product)
			<div class="lg:w-1/3 sm:w-1/2 w-full my-2 mx-auto">
				<div class="bg-base-100 shadow-xl sm:m-4 overflow-hidden rounded-2xl">
					<figure><img src="{{asset('img/products/'.$product['image'])}}" /></figure>
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
		@endfor
	</div>
</x-app-layout>