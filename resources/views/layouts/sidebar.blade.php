<aside id="column-left" class="col-sm-3 hidden-xs">

    <!-- Categories Accordion
    ============================================= -->
    <h3 class="subtitle"><span>Categories</span></h3>
    <div class="box-category">
        <ul id="cat_accordion">
            @foreach($categories_all as $category)
                <li><a href="{{'/category/'.$category->categoryUrl}}">
                        {{$category->categoryTitle}}</a>
                    @if($category->subCategory->count() != null)
                        <span class="down"></span>
                    @endif
                    <ul>
                        @foreach($category->subCategory as $subCategory)
                            <li><a href="{{'/category/'.$subCategory->categoryUrl}}">
                                    {{$subCategory->categoryTitle}} </a>
                                @if($subCategory->subCategory->count() != null)
                                    <span class="down"></span>
                                @endif
                                <ul>
                                    @foreach($subCategory->subCategory as $subSubCategory)
                                        <li><a href="{{'/category/'.$subSubCategory->categoryUrl}}">
                                                {{$subSubCategory->categoryTitle}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div><!-- Categories Accordion End-->

    @include('layouts.bestseller')



</aside>
