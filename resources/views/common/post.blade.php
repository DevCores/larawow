@extends('app')
@section('content')
<div class="Pane Pane--underSiteNav Pane--fadeBottom bordered" data-url="{{ $post->image }}" queryselectoralways="34">
    <div class="Pane-bg" style="background-color:#000000;background-image:url(&quot;{{ $post->image }}&quot;);">
        <div class="Pane-overlay"></div>
    </div>
    <div class="Pane-content">
        <div class="space-huge"></div>
        <div class="" media-large="!space-large" queryselectoralways="0" media-original="space-large"></div>
        <div media-medium="space-medium" media-large="!space-medium space-huge" queryselectoralways="0" media-original="" class="space-huge"></div>
        <div media-wide="space-huge" queryselectoralways="0" media-original="" class="space-huge"></div>
        <div media-wide="space-huge" queryselectoralways="0" media-original="" class="space-huge"></div>
        <div media-huge="space-huge" queryselectoralways="0" media-original="" class="space-huge"></div>
        <div media-huge="space-huge" queryselectoralways="0" media-original="" class="space-huge"></div>
        <div class="contain-max">
            <div class="font-title-large-onDark">{{ $post->title }}</div>
            <div class="space-small"></div>
            <div class="List">
                <div class="font-bliz-light-small-beige List-item gutter-tiny" media-medium="List-item gutter-tiny" queryselectoralways="0" media-original="font-bliz-light-small-beige">
                    <div class="Content"><a href="/news">Вернуться к новостям</a>, {{ $post->created_at }}</div>
                </div>
                <div class="List-item gutter-tiny">
                    <a class="Link" href="#comments">
                        <div class="CommentTotal CommentTotal--horizontal CommentTotal--transition"><span class="Icon Icon--comment Icon--small CommentTotal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#comment"></use></svg></span>
                            <div class="CommentTotal-number">{{ $post->views }}</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="space-medium space-large" media-large="space-large" queryselectoralways="0" media-original="space-medium"></div>
        </div>
    </div>
</div>
<div class="Pane Pane--dirtDark" queryselectoralways="34">
    <div class="Pane-bg">
        <div class="Pane-overlay"></div>
    </div>
    <div class="Pane-content">
        <div class="space-medium space-large" media-large="space-large" queryselectoralways="0" media-original="space-medium"></div>
        <div class="contain-wide">
            <div class="SocialButtons font-none" queryselectoralways="45">
                <div class="SocialButtons-button"><a class="SocialButtons-link SocialButtons-link--facebook font-size-xSmall" href="https://www.facebook.com/sharer/sharer.php?u=https://freewow.org/news/{{ $post->id }}" data-popup-height="450" data-popup-width="550" data-analytics="sns-share" data-analytics-placement="News - facebook"><span class="Icon Icon--social-facebook SocialButtons-icon SocialButtons-icon--facebook"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#social-facebook"></use></svg></span>Поделиться</a></div>
                <div class="SocialButtons-button"><a class="SocialButtons-link SocialButtons-link--twitter font-size-xSmall" href="https://twitter.com/intent/tweet?text={{ $post->title }};url=https://freewow.org/news/{{ $post->id }};hashtags=FreeWoW" data-popup-height="450" data-popup-width="550" data-analytics="sns-share" data-analytics-placement="News - twitter"><span class="Icon Icon--social-twitter SocialButtons-icon SocialButtons-icon--twitter"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#social-twitter"></use></svg></span>Твитнуть</a></div>
                <div class="SocialButtons-button"><a class="SocialButtons-link SocialButtons-link--vkontakte font-size-xSmall" href="http://vkontakte.ru/share.php?url=https://freewow.org/news/{{ $post->id }}" data-popup-height="280" data-popup-width="550" data-analytics="sns-share" data-analytics-placement="News - vkontakte"><span class="Icon Icon--social-vkontakte SocialButtons-icon SocialButtons-icon--vkontakte"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"><use xlink:href="/static/components/Icon/Icon.svg#social-vkontakte"></use></svg></span>Поделиться</a></div>
            </div>
            <div id="blog">
                <div class="Blog" queryselectoralways="5">
                    <article class="detail">
                        {!! $post->content !!}
                    </article>
                </div>
            </div>
            <div class="space-medium"></div>
            <div class="space-medium"></div>
            <div class="space-normal"></div>
            <contain-wide>
                <div class="Comments">
                    <div id="comments" class="bnet-comments " data-xstoken="247b9f79-5b0f-4fac-a416-fcab134b6446">
                        <script type="text/javascript">
                            //<![CDATA[
                            var Msg = Msg || {};
                            Msg.cms = Msg.cms || {};
                            Msg.cms.throttleError = "Вы должны подождать некоторое время, прежде чем вы сможете опубликовать новое сообщение.";
                            //]]>
                        </script>

                        <h2 class="subheader-2">Комментарии</h2>

                        <a href="javascript:;" class="comments-pull-link" id="comments-pull" onclick="Comments.loadBase();" style="display: none">
                            <span class="pull-single" style="display: none">Новые комментарии: <span>{0}</span>. <strong>Обновить?</strong></span>
                            <span class="pull-multiple" style="display: none">Новые комментарии: <span>{0}</span>. <strong>Обновить?</strong></span>
                        </a>

                        <div class="comments-form-wrapper">
                            <div class="comments-error-gate">
                                <p>Персонажей не найдено.</p>

                            </div>
                        </div>
                    </div>
                    <div class="comments-loading"></div>
                </div>
            </contain-wide>
        </div>
        <div class="space-normal"></div>
        <div class="space-normal"></div>
    </div>
</div>
@endsection
