@extends('app')
@section('content')
<div class="Pane Pane--full Pane--dirtDark" queryselectoralways="34">
    <div class="Pane-bg">
        <div class="Pane-overlay"></div>
    </div>
    <div class="Pane-content">
        <div class="Pane Pane--underSiteNav Pane--cropMax Pane--transparent" data-url="/news/{{ $firstNews->id}}" queryselectoralways="34">
            <div class="Pane-bg" style="background-image:url(&quot;//bnetcmsus-a.akamaihd.net/cms/template_resource/ri/RI8Q9HOWY4U01465961118458.jpg&quot;);">
                <div class="Pane-overlay"></div>
            </div>
            <div class="Pane-content">
                <div class="space-medium"></div>
                <div class="Grid SyncHeight gutter-small gutter-all gutter-negative" media-medium="!SyncHeight--disabled" queryselectoralways="0 48" media-original="Grid SyncHeight SyncHeight--disabled gutter-small gutter-all gutter-negative">
                    <div class="ArticleTile ArticleTile--gutter Grid-full Grid-2of3" media-large="Grid-1of2" media-wide="!Grid-1of2 Grid-2of3" queryselectoralways="0" media-original="ArticleTile ArticleTile--gutter Grid-full">
                        <div class="ArticleTile-content">
                            <div class="Tile ArticleTile-tile">
                                <div class="Tile-area">
                                    <div class="Tile-bg" style="background-image:url(&quot;{{ $firstNews->image}}&quot;);"></div>
                                    <div class="Tile-content"></div>
                                </div>
                            </div>
                            <div class="ArticleTile-fade"></div>
                            <div class="ArticleTile-play">
                                <div class="ArticleTile-playArrow"></div>
                            </div>
                            <div class="ArticleTile-bottom">
                                <div class="ArticleTile-bottomInner">
                                    <div class="ArticleTile-left">
                                        <div class="ArticleTile-subtitle">{!! str_limit($firstNews->content, 210) !!}</div>
                                        <div class="ArticleTile-title">{{ $firstNews->title}}</div>
                                    </div>
                                    <div class="ArticleTile-right">
                                        <div class="ArticleTile-commentTotal List-right">
                                            <a class="Link ArticleTile-comments" href="/news/{{ $firstNews->id}}" data-analytics="panel-news" data-analytics-panel="slot:0 - type:blog - id:22869443 || Обычный и героический режим открыты">
                                                <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal"><span class="Icon Icon--comment Icon--small CommentTotal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#comment"></use></svg></span>
                                                    <div class="CommentTotal-number">{{ $firstNews->views}}</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="Link ArticleTile-link" href="/news/{{ $firstNews->id}}" data-thumb="{{ $firstNews->image}}" data-analytics="panel-news" data-analytics-panel="slot:0 - type:blog - id:22869443 || Обычный и героический режим открыты"></a>
                        </div>
                    </div>
                    <div class="ArticleTile ArticleTile--gutter Grid-full Grid-1of3" media-small="Grid-full" media-medium="Grid-1of2" media-large="" media-wide="!Grid-1of2 Grid-1of3" queryselectoralways="0" media-original="ArticleTile ArticleTile--gutter">
                        <div class="ArticleTile-content">
                            <div class="Tile ArticleTile-tile">
                                <div class="Tile-area">
                                    <div class="Tile-bg" style="background-image:url(&quot;{{ $nextNews->image}}&quot;);"></div>
                                    <div class="Tile-content"></div>
                                </div>
                            </div>
                            <div class="ArticleTile-fade"></div>
                            <div class="ArticleTile-play">
                                <div class="ArticleTile-playArrow"></div>
                            </div>
                            <div class="ArticleTile-bottom">
                                <div class="ArticleTile-bottomInner">
                                    <div class="ArticleTile-left">
                                        <div class="ArticleTile-subtitle">{!! str_limit($nextNews->content, 210) !!}</div>
                                        <div class="ArticleTile-title">{{ $nextNews->title}}</div>
                                    </div>
                                    <div class="ArticleTile-right">
                                        <div class="ArticleTile-commentTotal List-right">
                                            <a class="Link ArticleTile-comments" href="news/{{ $nextNews->id }}" data-analytics="panel-news" data-analytics-panel="slot:1 - type:blog - id:22869444 || 2-й сезон начался">
                                                <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal"><span class="Icon Icon--comment Icon--small CommentTotal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#comment"></use></svg></span>
                                                    <div class="CommentTotal-number">{{ $nextNews->views}}</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="Link ArticleTile-link" href="/news/{{ $nextNews->id }}" data-thumb="{{ $nextNews->image }}" data-analytics="panel-news" data-analytics-panel="slot:1 - type:blog - id:22869444 || 2-й сезон начался"></a>
                        </div>
                    </div>
                    <div class="ArticleTile ArticleTile--gutter Grid-full Grid-1of3" media-small="Grid-full" media-medium="" media-wide="!Grid-1of2 Grid-1of3" queryselectoralways="0" media-original="ArticleTile ArticleTile--gutter">
                        <div class="ArticleTile-content">
                            <div class="Tile ArticleTile-tile">
                                <div class="Tile-area">
                                    <div class="Tile-bg" style="background-image:url(&quot;{{ $lastNews->image }}&quot;);"></div>
                                    <div class="Tile-content"></div>
                                </div>
                            </div>
                            <div class="ArticleTile-fade"></div>
                            <div class="ArticleTile-play">
                                <div class="ArticleTile-playArrow"></div>
                            </div>
                            <div class="ArticleTile-bottom">
                                <div class="ArticleTile-bottomInner">
                                    <div class="ArticleTile-left">
                                        <div class="ArticleTile-subtitle">{!! str_limit($lastNews->content, 150) !!}</div>
                                        <div class="ArticleTile-title">{{ $lastNews->title }}</div>
                                    </div>
                                    <div class="ArticleTile-right">
                                        <div class="ArticleTile-commentTotal List-right">
                                            <a class="Link ArticleTile-comments" href="news/{{ $lastNews->id }}" data-analytics="panel-news" data-analytics-panel="slot:2 - type:blog - id:22872201 || Руководство по выживанию, часть 2">
                                                <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal"><span class="Icon Icon--comment Icon--small CommentTotal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#comment"></use></svg></span>
                                                    <div class="CommentTotal-number">{{ $lastNews->views }}</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="Link ArticleTile-link" href="/news/{{ $lastNews->id }}" data-thumb="{{ $lastNews->image }}" data-analytics="panel-news" data-analytics-panel="slot:2 - type:blog - id:22872201 || Руководство по выживанию, часть 2"></a>
                        </div>
                    </div>
                    <div class="Grid-full" media-wide="!hide" queryselectoralways="0" media-original="Grid-full hide"></div>
                </div>
                <div class="space-normal"></div>
                <div class="space-medium"></div>
                <div class="Pane Pane--transparent" queryselectoralways="34">
                    <div class="Pane-bg">
                        <div class="Pane-overlay"></div>
                    </div>
                    <div class="Pane-content">
                        <div class="gutter-normal gutter-negative">
                            <div class="Paginator" data-url="/ru-ru/news.frag" data-page="1" data-total="19" queryselectoralways="33">
                                <div class="Paginator-pages">
                                    <div class="Paginator-page" data-page="1">
                                        <div class="List List--vertical List--separatorAll List--full">
                                            @foreach ($posts as $post)
                                            <div class="List-item">
                                                <div class="NewsBlog">
                                                    <div class="NewsBlog-content">
                                                        <div class="Grid Grid--gutter">
                                                            <div class="Grid-col Grid-1of4 Grid-1of5" media-large="!hide Grid-1of4" media-wide="Grid-1of5" queryselectoralways="0" media-original="Grid-col hide">
                                                                <a class="Link" href="{{ url('/news/'.$post->id) }}">
                                                                    <div class="Tile Tile--border NewsBlog-tile">
                                                                        <div class="Tile-area">
                                                                            <div class="Tile-bg" style="background-image:url(&quot;{{ $post->image }}&quot;);"></div>
                                                                            <div class="Tile-content"></div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="Grid-full gutter-small Grid-3of4 Grid-4of5" media-large="Grid-3of4" media-wide="Grid-4of5" queryselectoralways="0" media-original="Grid-full gutter-small">
                                                                <div class="contain-large contain-left gutter-normal" media-large="gutter-normal" queryselectoralways="0" media-original="contain-large contain-left">
                                                                    <div class="NewsBlog-title">{{ $post->title }}</div>
                                                                    <p class="NewsBlog-desc color-beige-medium font-size-xSmall">{!! str_limit($post->content, 210) !!}</p>
                                                                </div>
                                                                <div media-large="gutter-normal" queryselectoralways="0" media-original="" class="gutter-normal">
                                                                    <div class="Pair">
                                                                        <div class="Pair-left">
                                                                            <div class="List NewsBlog-details">
                                                                                <div class="List-item NewsBlog-comments">
                                                                                    <a class="Link" href="{{ url('/news/'.$post->id) }}#comments">
                                                                                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--beigeDark CommentTotal--transition"><span class="Icon Icon--comment Icon--small CommentTotal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#comment"></use></svg></span>
                                                                                            <div class="CommentTotal-number">{{ $post->views }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="List-item NewsBlog-published">
                                                                                    <div class="gutter-normal color-beige-dark font-size-xxSmall">{{ $post->created_at }}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="Link NewsBlog-link" href="{{ url('/news/'.$post->id) }}"></a>
                                                </div>
                                            </div>
                                             @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="Paginator-nav gutter-normal gutter-all align-center">
                                      {{ $posts->links() }}
                                      
                                </div>
                            </div>
                            <div class="space-large"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection