<div class="p-5">

    <x-table>

        <x-slot name="heading">

            <x-table.heading> Store</x-table.heading>
            <x-table.heading> Product Name</x-table.heading>
            <x-table.heading> Brand</x-table.heading>
            <x-table.heading> Category</x-table.heading>
            <x-table.heading> Quantity</x-table.heading>
            <x-table.heading> Regular Price</x-table.heading>
            <x-table.heading> Sale Price</x-table.heading>

        </x-slot>

        @foreach ($products as $product)
        <x-table.row class="text-center">
            
            <x-table.cell>{{ $product->store_nm }}</x-table.cell>
            <x-table.cell>{{ $product->name }}</x-table.cell>
            <x-table.cell>{{ $product->product_qty }}</x-table.cell>
            <x-table.cell>{{ $product->reg_price }}</x-table.cell>
            <x-table.cell>{{ $product->sale_price }}</x-table.cell>
            <x-table.cell>{{ $product->brand_nm }}</x-table.cell>
            <x-table.cell>{{ $product->category_nm }}</x-table.cell>
            
        </x-table.row>
    @endforeach

    </x-table>

   
    
</div>
