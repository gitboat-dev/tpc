<div class="blog_update">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
            <div class="update_blog">
                <label class="d-flex">
                    <i class="fa fa-angle-left"></i>
                    Update
                </label>
            </div>
            <div class="update_sidebar">
                <div class="sidebar-title">
                    <h3 class="fw-600">Latest Columns</h3>
                </div>
                <div class="sidebar-body">
                    @if(isset($blogs) && $blogs)
                        <div class="row m-0">
                            @foreach($blogs as $bs)
                                <figure class="col-md-12 d-flex">
                                    <a href="/blog/{{$bs['article_slug']}}" class="col-xs-5 col-sm-5 col-md-6 col-lg-4 p-0 m-auto" title="{{$bs['article_title']}}">
                                        <div class="img_block w-100p">
                                            <picture>
                                                <source srcset="{{$bs['cover']['url']}}" media="(max-width: 640px)">
                                                <img src="{{$bs['cover']['url']}}" width="900" height="350" class="img-fluid" alt="">
                                            </picture>
                                        </div>
                                    </a>
                                    <figcaption class="col-xs-7 col-sm-7 col-md-6 col-lg-8 m-auto">
                                        <a href="/blog/{{$bs['article_slug']}}" title="{{$bs['article_title']}}">
                                            <h5 class="fw-600">{{$bs['article_title']}}</h5>
                                        </a>
                                        <small class="gray-hl">{{$bs['article_date_start']}}</small>
                                    </figcaption>
                                </figure>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="sidebar-footer">
                    <div class="btn-allcolumns">
                        <a href="/blog/columns&news/columns" title="All News">All Columns</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

