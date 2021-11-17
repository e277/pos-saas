<div class="overflow-auto bg-white">
    {{-- create product form  --}}
    <section class="px-12 py-4">
        <form wire:submit.prevent="storeProduct">
            <x-input.label>
                <x-slot name="label">Store</x-slot>
                <x-input.select wire:model="product.store_id"  :option="$stores" field="name" :error="$errors->first('product.store_id')"/>
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Brand</x-slot>
                <x-input.select wire:model.defer="product.brand_id"  :option="$brands" field="brand_nm" :error="$errors->first('product.brand_id')"/>
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Categories</x-slot>
                <x-input.select wire:model.defer="product.category_id" :option="$categories" field="category_nm" :error="$errors->first('product.category_id')"/>
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Product Name</x-slot>
                <x-input.text wire:model.defer="product.name" placeholder="Enter product name..." :error="$errors->first('product.name')" />
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Weight</x-slot>
                <x-input.text wire:model.defer="product.weight" placeholder="Weight in Kg" type="number" :error="$errors->first('product.weight')" />
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Price</x-slot>
                <x-input.text wire:model.defer="product.price" placeholder="Price..." type="number" :error="$errors->first('product.price')" />
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Sale Price</x-slot>
                <x-input.text wire:model.defer="product.sale_price" placeholder="Sales price..." type="number" :error="$errors->first('product.sale_price')" />
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Stock keeping unit</x-slot>
                <x-input.text wire:model.defer="product.sku" placeholder="SKU..." :error="$errors->first('product.sku')"/>
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Image</x-slot>
                <x-input.text wire:model.defer="product.image_path" placeholder="Image..." type="file" :error="$errors->first('product.image_path')" />
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Quantity</x-slot>
                <x-input.text wire:model.defer="product.qty" placeholder="Quantity..." type="number" :error="$errors->first('product.qty')" />
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Status</x-slot>
                <x-input.select wire:model.defer="product.status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </x-input.select>
            </x-input.label>
            <x-input.label>
                <x-slot name="label">Description</x-slot>
                <x-input.textarea wire:model.defer="product.desc" placeholder="Product description..." :error="$errors->first('product.desc')" />
            </x-input.label>
            <x-input.submit>
               {{ __('Submit') }}
            </x-input.submit>
        </form>
    </section>
</div>
