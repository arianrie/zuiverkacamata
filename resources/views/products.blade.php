@extends('layouts.main') @include('partials.header') @section('contents')

</div>

<section
class="shop_section layout_padding"
style="margin-top: -630px; z-index:-1;">
<div class="container" >

   @include('partials.search')
   <div class="row" id="post-data">
     
    
    @include('data-products')


            

        </div>
    </div>

</div>
 <div class="d-flex justify-content-center ajax-load text-center d-none">
    <img src="images/Loading_icon.gif">
 </div>
{{-- <div class="d-flex justify-content-center">
 {{ $products->links() }}
  </div> --}}
</div>
</div>


</section>

@endsection