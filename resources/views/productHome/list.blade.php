<div class="row isotope-grid">

    @foreach ($products as $product)

    <form action="main.js" method="post">
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->
            <div class="block2">
                <div class="block2-pic hov-img0">
                    <img src="{{$product->thumb}}" alt="IMG-PRODUCT">

                    
                    {{-- <input type="button" data-url="{{ route('get-product-id',$product->id) }}"  onclick="quickView()"  id="quickView" value="Quick View" class="btn btn-primary block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" > --}}

                    {{-- <button data-url="{{route('get-product-id',$product->id)}}"  onclick="quickView()"  id="quickView" value="Quick View" data-toggle="wrap-modal1" class="btn btn-primary block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">Quick View</button> --}}
                    {{-- <input type="button"  value="Quick View" class="quickView btn btn-primary block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" > --}}
                    {{-- <a href="{{route('get-product-id',3)}}" onclick="quickView()"  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View 
                    </a> --}}
                    {{-- {{route('get-product-id',$product->id)}} --}}

                    <a href="" id="quickView" data-url="{{route('get-product-id',$product->id)}}"  onclick="quickView({{$product->id}})"  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View 
                    </a>

                    
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="{{route("product-detail",$product->id)}}" id="name" name="name" value="{{$product->name}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            {{$product->name}}
                        </a>

                        <span class="stext-105 cl3">
                            {{number_format($product->price)}}
                        </span>
                    </div>

                    <div class="block2-txt-child2 flex-r p-t-3">
                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <img class="icon-heart1 dis-block trans-04" src="/templates/images/icons/icon-heart-01.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/templates/images/icons/icon-heart-02.png" alt="ICON">
                        </a>
                    </div>
                </div>
            </div>
        </div>
       {{--  <input type="hidden" name="product" value="{{$product}}"> --}}
    </form>
    
    @endforeach
</div>		

{{-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>


<script>
        

        
    
</script>
