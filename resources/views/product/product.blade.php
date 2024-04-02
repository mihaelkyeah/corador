<div hidden aria-hidden="true" id="hidden-product-id" data-product-id="{{ $product->id }}"></div>
<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h2>{{ $product->brand->name }}</h2>
    <h3>{{ $product->name }}</h3>
</div>
<h5>Post a comment</h5>
<form id="comment-form">
<textarea id="comment-content"></textarea>
<input type="submit" value="Post">
</form>
<h4>Comments</h4>
<div id="comments">
</div>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/product.js') }}"></script>
