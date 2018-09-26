<nav id="menu" class="navbar">
    <div class="navbar-header"><span class="visible-xs visible-sm"> Menu <i
                    class="fa fa-align-justify pull-right flip"></i></span></div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li><a class="home_link" title="Home" href="/">
                    <i class="fa fa-home"></i> </a></li>
            @foreach($categories_all as $category)
                <li class="categories_defu dropdown sub">
                    <a class="dropdown-toggle"
                       href="{{'/category/'.$category->categoryUrl}}">{{$category->categoryTitle}}</a>
                    <span class="submore"></span>
                    @if($category->subCategory->count() != 0)
                    <div class="dropdown-menu" style="display: none;">
                        <ul>
                            @foreach($category->subCategory as $subCategory)
                                <li><a href="{{'/category/'.$subCategory->categoryUrl}}">
                                        {{$subCategory->categoryTitle}}
                                        @if($subCategory->subCategory->count() != 0)
                                            <span class="fa fa-caret-right"></span>
                                        @endif</a>
                                    <span class="submore"></span>
                                    <div class="dropdown-menu" style="display: none;">
                                        <ul>
                                            @foreach($subCategory->subCategory as $subSubCategory)
                                                <li><a href="{{'/category/'.$subSubCategory->categoryUrl}}">
                                                        {{$subSubCategory->categoryTitle}}
                                                        @if($subSubCategory->subCategory->count() != 0)
                                                            <span class="fa fa-caret-right"></span>
                                                        @endif</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</nav>