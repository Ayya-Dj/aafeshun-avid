<x-app-layout>
	<div class="flex flex-wrap min-h-screen place-content-start">
		@foreach($products as $product)
			<div class="card w-96 bg-base-100 shadow-xl">
				<figure><img src="{{asset('img/products/'.$product['img'])}}" /></figure>
				<div class="card-body">
					<h2 class="card-title">Shoes!</h2>
					<p>If a dog chews shoes whose shoes does he choose?</p>
					<div class="card-actions justify-end">
						<button class="btn btn-primary">Buy Now</button>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</x-app-layout>