@extends('app')
@section('content')
<div class="page-Home">
    <div class="page-Home-masthead">
        <div class="VideoPane VideoPane--fadeBottom VideoPane--underSiteNav" media-wide="VideoPane--underSiteNav !VideoPane--disabled" queryselectoralways="0 54" media-original="VideoPane VideoPane--fadeBottom VideoPane--disabled">
            <div class="VideoPane-bg">
                <video class="VideoPane-video" src="{{asset('public/uploads/wow.mp4')}}" data-src="{{asset('public/uploads/wow.mp4')}}" loop="loop" muted="muted" autoplay="autoplay" playsinline="playsinline"></video>
                <div class="VideoPane-overlay"></div>
                <div class="VideoPane-fallback" style="background-image: url('https://bnetcmsus-a.akamaihd.net/cms/template_resource/7ZC4MUXDL5DA1547661778458.jpg');"></div>
            </div>
            <div class="VideoPane-content">
                <div class="gutter-normal gutter-negative hide" media-wide="hide" queryselectoralways="0" media-original="gutter-normal gutter-negative">
                    <div class="Art Art--fadeBottom" style="margin-bottom:-52.5%;" queryselectoralways="3">
                        <div class="Art-size" style="padding-top:90%"></div>
                        <div class="Art-image" style="background-image:url(https://bnetcmsus-a.akamaihd.net/cms/template_resource/J0E1H6UHI8CE1547661778472.jpg);"></div>
                        <div class="Art-overlay"></div>
                    </div>
                </div>
                <div class="" media-wide="!hide" queryselectoralways="0" media-original="hide">
                    <div class="space-huge"></div>
                    <div class="space-large"></div>
                </div>
                <div class="align-left">
                    <div media-small="gutter-vertical" media-large="!gutter-vertical" queryselectoralways="0" media-original="" class="">
                        <div class="" media-wide="!align-center" queryselectoralways="0" media-original="align-center">
                            <div class="font-semp-xxLarge-white text-upper">@if($index1->title != '-'){{ $index1->title }}@endif</div>
                            <div class="contain-masthead contain-left" media-wide="contain-left" queryselectoralways="0" media-original="contain-masthead">
                                <div class="space-rhythm-medium"></div>
                                <div class="font-bliz-light-medium-beige">@if($index1->content != '-'){{ $index1->content }}@endif</div>
                                <div class="space-rhythm-medium"></div>
                                @if($index1->link1 != '-')
                                <a class="Link" href="{{ $index1->link1 }}" data-analytics="homepage-panel" data-analytics-placement="8.0 Announcement Site - Top">
                                    <div class="Link--underline font-bliz-light-medium-beige" data-text="Узнать больше о Battle For Azeroth">{{ $index1->link1name }}</div>
                                </a>
                                @endif
                                <div class="space-rhythm-large"></div>
                                <div class="List List--gutters List--left" media-large="!List--vertical" media-wide="!List--center List--left" queryselectoralways="0" media-original="List List--gutters List--center List--vertical">
                                    @if($index1->link2 != '-')
                                    <a class="Link Link--external Button Button--ghost Panel-button Button--purchase" href="{{ $index1->link2 }}" data-analytics="shop-link" data-analytics-placement="BFA Sales || Home - Top">
                                        <div class="Button-outer">
                                            <div class="Button-inner">
                                                <div class="Button-label" data-text="Купить Battle For Azeroth">{{ $index1->link2name }}</div>
                                            </div>
                                        </div>
                                    </a>
                                    @endif
                                    @if($index1->link3 != '-')
                                    <a class="Link Button Button--ghost Panel-button" href="{{ $index1->link3 }}" data-analytics="homepage-panel" data-analytics-placement="8.0 Announcement Site - Top">
                                        <div class="Button-outer">
                                            <div class="Button-inner">
                                                <div class="Button-label" data-text="Подробности">{{ $index1->link3name }}</div>
                                            </div>
                                        </div>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" media-wide="!hide" queryselectoralways="0" media-original="hide">
                    <div class="space-large"></div>
                </div>
                <div class="space-large space-huge" media-wide="space-huge" queryselectoralways="0" media-original="space-large"></div>
                <div class="List List--gutters">
                    <div class="List-item font-semp-small-white text-upper">Последние новости</div>
                    <div class="List-item fontFamily-blizzard"><a class="Link Link--text" href="/news" data-analytics="action-link" data-analytics-placement="News || Home - View All News">Все новости</a></div>
                </div>
                <div class="gutter-normal gutter-negative">
                    <div class="Grid Grid--gutter Grid--gutters">
                          @foreach ($posts as $post)
                          <div class="ArticleTile" media-small="Grid-full" media-wide="!Grid-full Grid-1of2" media-huge="Grid-1of4">
                              <div class="ArticleTile-content">
                                  <div class="Tile ArticleTile-tile">
                                      <div class="Tile-area">
                                          <div class="Tile-bg" style="background-image:url(&quot;{{ $post->image }}&quot;);"></div>
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
                                              <div class="ArticleTile-subtitle">{{ $post->created_at }}</div>
                                              <div class="ArticleTile-title">{{ $post->title }}</div>
                                          </div>
                                          <div class="ArticleTile-right">
                                              <div class="ArticleTile-commentTotal List-right">
                                                  <a class="Link ArticleTile-comments" href="{{ url('/news/'.$post->id) }}#comments" data-analytics="featured-blog" data-analytics-panel="slot:0 - type:blog - id:22864561 || Рейд «Битва за Дазар’алор» открыт в обычном и героическом режиме">
                                                      <div class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal"><span class="Icon Icon--comment Icon--small CommentTotal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#comment"></use></svg></span>
                                                          <div class="CommentTotal-number">{{ $post->views }}</div>
                                                      </div>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <a class="Link ArticleTile-link" href="{{ url('/news/'.$post->id) }}" data-thumb="{{ $post->image }}" data-analytics="featured-blog" data-analytics-panel="slot:0 - type:blog - id:22864561 || {{ $post->title }}"></a>
                              </div>
                          </div>
                          @endforeach
                    </div>
                </div>
                <div class="space-normal"></div>
            </div>
        </div>
    </div>
    <div class="SortTable SortTable--flex SortTable--ghost" queryselectoralways="46" style="">
        <div class="SortTable-head">
            <div class="SortTable-row">
                <div class="SortTable-col SortTable-label align-center" data-priority="2">
                    <div class="SortTable-labelOuter">
                        <div class="SortTable-labelInner">
                            <div class="SortTable-labelText">Состояние</div>
                        </div>
                    </div>
                </div>
                <div class="SortTable-col SortTable-label align-center" data-priority="5">
                    <div class="SortTable-labelOuter">
                        <div class="SortTable-labelInner">
                            <div class="SortTable-labelText">Название мира</div>
                        </div>
                    </div>
                </div>
                <div class="SortTable-col SortTable-label align-center" data-priority="4">
                    <div class="SortTable-labelOuter">
                        <div class="SortTable-labelInner">
                            <div class="SortTable-labelText">Онлайн</div>
                        </div>
                    </div>
                </div>
                <div class="SortTable-col SortTable-label align-center" data-priority="7">
                    <div class="SortTable-labelOuter">
                        <div class="SortTable-labelInner">
                            <div class="SortTable-labelText">Максимальный онлайн</div>
                        </div>
                    </div>
                </div>
                <div class="SortTable-col SortTable-label align-center" data-priority="6">
                    <div class="SortTable-labelOuter">
                        <div class="SortTable-labelInner">
                            <div class="SortTable-labelText">Персонажей</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="SortTable-body">
            <div class="SortTable-row">
                <div class="SortTable-col SortTable-data text-nowrap align-center" data-value="0"><span class="Icon Icon--{{ $server }} SortTable-status"></span></div>
                <div class="SortTable-col SortTable-data text-nowrap type align-center">{{ $realm->name }}</div>
                <div class="SortTable-col SortTable-data text-nowrap align-center" data-value="3">{{ $online }}</div>
                <div class="SortTable-col SortTable-data text-nowrap align-center">{{ $max }}</div>
                <div class="SortTable-col SortTable-data text-nowrap align-center">{{ $char }}</div>
            </div>
        </div>
    </div>
    <div class="Divider"></div>
    <div class="page-Guide-section position-relative">
        <div class="Panel Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--small Panel--alignCenter bordered Panel--stacked">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index2->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index2->title != '-'){{ $index2->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index2->content != '-'){{ $index2->content }}@endif</div>
                        <div class="Panel-buttons">
                            @if($index3->link1 != '-')
                            <a class="Link Link--external Button Button--ghost Panel-button Button--purchase" href="{{ $index2->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Vulpine Mount">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Приобрести">{{ $index2->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Panel bordered Panel--small Panel--left Panel--alignLeft" media-wide="!hide" queryselectoralways="0 35" media-original="Panel bordered hide Panel--small Panel--left Panel--alignLeft">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index2->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index2->title != '-'){{ $index2->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index2->content != '-'){{ $index2->content }}@endif</div>
                        <div class="Panel-buttons">
                            @if($index3->link1 != '-')
                            <a class="Link Link--external Button Button--ghost Panel-button Button--purchase" href="{{ $index2->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Vulpine Mount">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Приобрести">{{ $index2->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Divider"></div>
    <div class="page-Guide-section position-relative">
        <div class="Panel Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--small Panel--alignCenter bordered Panel--stacked">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index3->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index3->title != '-'){{ $index3->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index3->content != '-'){{ $index3->content }}@endif</div>
                        <div class="Panel-buttons">
                            @if($index3->link1 != '-')
                            <a class="Link Button Button--ghost Panel-button" href="{{ $index3->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Tides of Vengeance Survival Guide Video" queryselectoralways="30">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Смотреть ролик">{{ $index3->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Panel bordered Panel--small Panel--right Panel--alignRight" media-wide="!hide" queryselectoralways="0 35" media-original="Panel bordered hide Panel--small Panel--right Panel--alignRight">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index3->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index3->title != '-'){{ $index3->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index3->content != '-'){{ $index3->content }}@endif</div>
                        <div class="Panel-buttons">
                            @if($index3->link1 != '-')
                            <a class="Link Button Button--ghost Panel-button" href="{{ $index3->link1 }}"  data-analytics="homepage-panel" data-analytics-placement="Tides of Vengeance Survival Guide Video" queryselectoralways="30">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Смотреть ролик">{{ $index3->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Divider"></div>
    <div class="page-Guide-section position-relative">
        <div class="Panel Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--small Panel--alignCenter bordered Panel--stacked">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index4->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index4->title != '-'){{ $index4->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index4->content != '-'){{ $index4->content }}@endif</div>
                        <div class="Panel-buttons">
                            @if($index4->link1 != '-')
                            <a class="Link Link--external Button Button--ghost Panel-button Button--purchase" href="{{ $index4->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Warcraft 3 Reforged">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Оформить предзаказ">{{ $index4->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Panel bordered Panel--normal Panel--left Panel--alignLeft" media-wide="!hide" queryselectoralways="0 35" media-original="Panel bordered hide Panel--normal Panel--left Panel--alignLeft">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index4->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index4->title != '-'){{ $index4->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index4->content != '-'){{ $index4->content }}@endif</div>
                        <div class="Panel-buttons">
                            @if($index4->link1 != '-')
                            <a class="Link Link--external Button Button--ghost Panel-button Button--purchase" href="{{ $index4->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Warcraft 3 Reforged">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Оформить предзаказ">{{ $index4->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Divider"></div>
    <div class="page-Guide-section position-relative">
        <div class="Panel Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--small Panel--alignCenter bordered Panel--stacked">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index5->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index5->title != '-'){{ $index5->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index5->content != '-'){{ $index5->content }}@endif</div>
                        <div class="Panel-buttons">
                            @if($index5->link1 != '-')
                            <a class="Link Button Button--ghost Panel-button" href="{{ $index5->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Terror of Darkshore IGC" queryselectoralways="30">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Смотреть">{{ $index5->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Panel bordered Panel--normal Panel--right Panel--alignRight" media-wide="!hide" queryselectoralways="0 35" media-original="Panel bordered hide Panel--normal Panel--right Panel--alignRight">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index5->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index5->title != '-'){{ $index5->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index5->content != '-'){{ $index5->content }}@endif</div>
                        <div class="Panel-buttons">
                            @if($index5->link1 != '-')
                            <a class="Link Button Button--ghost Panel-button" href="{{ $index5->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Terror of Darkshore IGC" queryselectoralways="30">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Смотреть">{{ $index5->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Divider"></div>
    <div class="page-Guide-section position-relative">
        <div class="Panel Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--small Panel--alignCenter bordered Panel--stacked">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index6->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index6->title != '-'){{ $index6->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index6->content != '-'){{ $index6->content }}@endif</div>
                        <div class="Panel-buttons">
                        @if($index6->link1 != '-')
                            <a class="Link Button Button--ghost Panel-button" href="{{ $index6->link1 }}" data-analytics="homepage-panel" data-analytics-placement="8.0 Website - Media Gallery">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Смотреть все">{{ $index6->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Panel bordered Panel--normal Panel--right Panel--alignRight" media-wide="!hide" queryselectoralways="0 35" media-original="Panel bordered hide Panel--normal Panel--right Panel--alignRight">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index6->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index6->title != '-'){{ $index6->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc">@if($index6->content != '-'){{ $index6->content }}@endif</div>
                        <div class="Panel-buttons">
                        @if($index6->link1 != '-')
                            <a class="Link Button Button--ghost Panel-button" href="{{ $index6->link1 }}" data-analytics="homepage-panel" data-analytics-placement="8.0 Website - Media Gallery">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Смотреть все">{{ $index6->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Divider"></div>
    <div class="page-Guide-section1of2">
        <div class="Grid Separator SyncHeight" media-small="Separator--vertical" media-wide="!Separator--vertical" queryselectoralways="0 48" media-original="Grid Separator SyncHeight">
            <div class="Grid-col Grid-1of2" media-wide="Grid-1of2" queryselectoralways="0" media-original="Grid-col">
                <div class="Panel Panel--link Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--link Panel--small Panel--alignCenter bordered Panel--stacked">
                    <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index7->image }}&quot;);"></div>
                    <div class="Panel-area SyncHeight-item" style="height: 121px;">
                        <div class="Panel-box">
                            <div class="Panel-content">
                                <div class="Panel-subtitle">{{ $index7->content }}</div>
                                <div class="Panel-title">{{ $index7->title }}</div>
                                <div class="Panel-buttons"></div>
                            </div>
                        </div>
                    </div>
                    <a class="Link Panel-link" href="{{ $index7->link1 }}" data-analytics="action-link" data-analytics-placement="Getting Started || Home - New Players"></a>
                </div>
                <div class="Panel Panel--link bordered Panel--tiny Panel--stacked Panel--alignCenter" media-wide="!hide" queryselectoralways="0 35" media-original="Panel Panel--link bordered hide Panel--tiny Panel--stacked Panel--alignCenter">
                    <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index7->image }}&quot;);"></div>
                    <div class="Panel-area SyncHeight-item" style="height: 121px;">
                        <div class="Panel-box">
                            <div class="Panel-content">
                                <div class="Panel-subtitle">{{ $index7->content }}</div>
                                <div class="Panel-title">{{ $index7->title }}</div>
                                <div class="Panel-buttons"></div>
                            </div>
                        </div>
                    </div>
                    <a class="Link Panel-link" href="{{ $index7->link1 }}" data-analytics="action-link" data-analytics-placement="Getting Started || Home - New Players"></a>
                </div>
            </div>
            <div class="Grid-col Grid-1of2" media-wide="Grid-1of2" queryselectoralways="0" media-original="Grid-col">
                <div class="Panel Panel--link Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--link Panel--small Panel--alignCenter bordered Panel--stacked">
                    <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index8->image }}&quot;);"></div>
                    <div class="Panel-area SyncHeight-item" style="height: 121px;">
                        <div class="Panel-box">
                            <div class="Panel-content">
                                <div class="Panel-subtitle">{{ $index8->content }}</div>
                                <div class="Panel-title">{{ $index8->title }}<ins class="text-reset fontFamily-blizzard">?</ins></div>
                                <div class="Panel-buttons"></div>
                            </div>
                        </div>
                    </div>
                    <a class="Link Panel-link" href="{{ $index8->link1 }}" data-analytics="action-link" data-analytics-placement="Welcome Back || Home - Returning Players"></a>
                </div>
                <div class="Panel Panel--link bordered Panel--tiny Panel--stacked Panel--alignCenter" media-wide="!hide" queryselectoralways="0 35" media-original="Panel Panel--link bordered hide Panel--tiny Panel--stacked Panel--alignCenter">
                    <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index8->image }}&quot;);"></div>
                    <div class="Panel-area SyncHeight-item" style="height: 121px;">
                        <div class="Panel-box">
                            <div class="Panel-content">
                                <div class="Panel-subtitle">{{ $index8->content }}</div>
                                <div class="Panel-title">{{ $index8->title }}<ins class="text-reset fontFamily-blizzard">?</ins></div>
                                <div class="Panel-buttons"></div>
                            </div>
                        </div>
                    </div>
                    <a class="Link Panel-link" href="{{ $index8->link1 }}" data-analytics="action-link" data-analytics-placement="Welcome Back || Home - Returning Players"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="Divider"></div>
    <div class="page-Guide-section1of2">
        <div class="Grid Separator SyncHeight" media-small="Separator--vertical" media-wide="!Separator--vertical" queryselectoralways="0 48" media-original="Grid Separator SyncHeight">
            <div class="Grid-col Grid-1of2" media-wide="Grid-1of2" queryselectoralways="0" media-original="Grid-col">
                <div class="Panel Panel--link Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--link Panel--small Panel--alignCenter bordered Panel--stacked">
                    <div class="Panel-bg" style="background-color:;background-image:url(&quot;https:{{ $index9->image }}&quot;);"></div>
                    <div class="Panel-area SyncHeight-item" style="height: 119px;">
                        <div class="Panel-box">
                            <div class="Panel-content">
                                <div class="Panel-subtitle">{{ $index9->content }}</div>
                                <div class="Panel-title">{{ $index9->title }}</div>
                                <div class="Panel-buttons"></div>
                            </div>
                        </div>
                    </div>
                    <a class="Link Panel-link" href="{{ $index9->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Patch Notes Blog"></a>
                </div>
                <div class="Panel Panel--link bordered Panel--tiny Panel--stacked Panel--alignCenter" media-wide="!hide" queryselectoralways="0 35" media-original="Panel Panel--link bordered hide Panel--tiny Panel--stacked Panel--alignCenter">
                    <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index9->image }}&quot;);"></div>
                    <div class="Panel-area SyncHeight-item" style="height: 119px;">
                        <div class="Panel-box">
                            <div class="Panel-content">
                                <div class="Panel-subtitle">{{ $index9->content }}</div>
                                <div class="Panel-title">{{ $index9->title }}</div>
                                <div class="Panel-buttons"></div>
                            </div>
                        </div>
                    </div>
                    <a class="Link Panel-link" href="{{ $index9->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Patch Notes Blog"></a>
                </div>
            </div>
            <div class="Grid-col Grid-1of2" media-wide="Grid-1of2" queryselectoralways="0" media-original="Grid-col">
                <div class="Panel Panel--link Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--link Panel--small Panel--alignCenter bordered Panel--stacked">
                    <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index10->image }}&quot;);"></div>
                    <div class="Panel-area SyncHeight-item" style="height: 119px;">
                        <div class="Panel-box">
                            <div class="Panel-content">
                                <div class="Panel-subtitle">{{ $index10->content }}</div>
                                <div class="Panel-title">{{ $index10->title }}</div>
                                <div class="Panel-buttons"></div>
                            </div>
                        </div>
                    </div>
                    <a class="Link Panel-link" href="{{ $index10->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Hotfixes Blog"></a>
                </div>
                <div class="Panel Panel--link bordered Panel--tiny Panel--stacked Panel--alignCenter" media-wide="!hide" queryselectoralways="0 35" media-original="Panel Panel--link bordered hide Panel--tiny Panel--stacked Panel--alignCenter">
                    <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index10->image }}&quot;);"></div>
                    <div class="Panel-area SyncHeight-item" style="height: 119px;">
                        <div class="Panel-box">
                            <div class="Panel-content">
                                <div class="Panel-subtitle">{{ $index10->content }}</div>
                                <div class="Panel-title">{{ $index10->title }}</div>
                                <div class="Panel-buttons"></div>
                            </div>
                        </div>
                    </div>
                    <a class="Link Panel-link" href="{{ $index10->link1 }}" data-analytics="homepage-panel" data-analytics-placement="Hotfixes Blog"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="Divider"></div>
    <div class="page-Guide-section position-relative">
        <div class="Panel Panel--small Panel--alignCenter bordered Panel--stacked hide" media-wide="hide" queryselectoralways="0 35" media-original="Panel Panel--small Panel--alignCenter bordered Panel--stacked">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index11->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index11->title != '-'){{ $index11->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc"><span>@if($index11->content != '-'){{ $index11->content }}@endif</span></div>
                        <div class="Panel-buttons">
                            @if($index11->link1 != '-')
                            <a class="Link Link--external Button Button--ghost Panel-button Button--purchase" href="{{ $index11->link1 }}" data-analytics="homepage-panel" data-analytics-placement="8.0 Presales - Bottom">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Купить">{{ $index11->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @if($index11->link2 != '-')
                            <a class="Link Button Button--ghost Panel-button" href="{{ $index11->link2 }}" data-analytics="homepage-panel" data-analytics-placement="8.0 Announcement Site - Bottom">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Подробнее">{{ $index11->link2name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Panel bordered Panel--normal Panel--left Panel--alignLeft" media-wide="!hide" queryselectoralways="0 35" media-original="Panel bordered hide Panel--normal Panel--left Panel--alignLeft">
            <div class="Panel-bg" style="background-color:;background-image:url(&quot;{{ $index11->image }}&quot;);"></div>
            <div class="Panel-area SyncHeight-item">
                <div class="Panel-box">
                    <div class="Panel-content">
                        <div class="Panel-title">@if($index11->title != '-'){{ $index11->title }}@endif</div>
                        <div class="Content Content--onDark Panel-desc"><span>@if($index11->content != '-'){{ $index11->content }}@endif</span></div>
                        <div class="Panel-buttons">
                            @if($index11->link1 != '-')
                            <a class="Link Link--external Button Button--ghost Panel-button Button--purchase" href="{{ $index11->link1 }}" data-analytics="homepage-panel" data-analytics-placement="8.0 Presales - Bottom">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Купить">{{ $index11->link1name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @if($index11->link2 != '-')
                             <a class="Link Button Button--ghost Panel-button" href="{{ $index11->link2 }}" data-analytics="homepage-panel" data-analytics-placement="8.0 Announcement Site - Bottom">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Подробнее">{{ $index11->link2name }}</div>
                                    </div>
                                </div>
                            </a>
                            @endif   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection