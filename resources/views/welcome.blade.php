<x-guest-layout>
    <div class="grid grid-cols-4 gap-4">
        @foreach($products as $product)
            <div>
                <div>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="rounded-t-lg overflow-hidden">
                </div>
                <div class="bg-slate-50 rounded-b-lg shadow-lg py-4 px-3 mb-4">
                    <h1 class="font-bold text-gray-500 text-xl my-3">{{ $product->name }}</h1>
                    <small class="text-indigo-500 text-lg">$ {{ $product->price }} MMK</small>
                    <p class="text-md text-gray-700 mt-3">{{ Str::limit($product->description, 50) }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mb-12">
        {{ $products->links() }}
    </div>
</x-guest-layout>
