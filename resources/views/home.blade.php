@php
    $images = Storage::disk('public')->files('\img\home-banner');
@endphp
<x-app-layout>
    <x-slot name="bannerImage">{{ $images[rand(0,count($images)-1)] }}</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div>
        <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ab modi sunt recusandae quasi eum omnis laudantium delectus placeat quas eos corporis ad commodi consequatur tempore expedita, doloribus cumque odit? Aperiam neque hic laboriosam deleniti dolorem non facere officia ad optio illum sequi, maiores excepturi consequatur. Quia minus unde eligendi.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero impedit dicta consectetur molestiae reiciendis, iusto soluta deleniti facilis dignissimos optio cupiditate quisquam voluptate labore corporis, voluptas quibusdam, et eius eos sunt. Quis atque delectus quo! Aliquam, in, tenetur sequi sapiente delectus officia autem ea praesentium et fuga ut doloremque necessitatibus illum aspernatur nesciunt vel. Veniam quaerat harum inventore ea molestias voluptatem illo possimus vel fuga, modi enim distinctio assumenda molestiae architecto reiciendis, nulla, nisi eos? Eaque repellendus magni delectus magnam consequatur voluptates voluptate nisi aliquid? Voluptates nobis cupiditate aspernatur possimus, architecto rem quo libero quos quae commodi. Consequatur, repellat natus.</p>
    </div>
</x-app-layout>
