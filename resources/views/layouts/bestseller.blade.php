<!-- Bestsellers
    ============================================= -->
<h3 class="subtitle"><span>Bestsellers</span></h3>
<div class="side-item">
    @foreach($bestseller as $best_seller)
    <div class="product-thumb clearfix">
        <div class="image">
            @foreach($best_seller->images->take(1) as $image)
            <a href="/product/{{$best_seller->id ."-".$best_seller->title}}">
                <img src="{{asset('uploads/products/'.$image->ImagePath)}}"
                     alt="HTC Touch HD" title="HTC Touch HD"
                     class="img-responsive"/>
            </a>
                @endforeach
        </div>
        <div class="caption">
            <h4><a href="/product/{{$best_seller->id ."-".$best_seller->title}}">{{$best_seller->title}}</a></h4>
            @if($best_seller->sale != null)
            <p class="price">
                <span class="price-new">${{$best_seller->price - $best_seller->sale}}</span>
                <span class="price-old">${{$best_seller->price}}</span>
                <span class="saving">-{{$best_seller->discount}}%</span>
            </p>
                @else
                <p class="price"> ${{$best_seller->price}} </p>
            @endif

            <!--<div class="rating">
                <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span
                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                            class="fa fa-star-o fa-stack-2x"></i></span></div>-->
        </div>
    </div>
@endforeach
</div><!-- Bestsellers End-->