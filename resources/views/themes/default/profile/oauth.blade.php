@extends('theme::profile.layout')

@section('main')
    <h2 class="h3 mt30 post-title">账号绑定</h2>
    <div class="row mt30 form-group">
            <label class="control-label col-sm-2">已绑定账号</label>
            <div class="col-sm-8">
                <ul class="list-inline">
                    <li class="mb10">
                        <a class="btn btn-success">腾讯 QQ</a><button type="button" class="bind-delete btn btn-link btn-xs" data-type="qq" data-bid="647F35C9D42FA92545610AC5416C8288" data-name="腾讯 QQ" title="解除绑定"><span class="glyphicon glyphicon-minus-sign text-muted"></span></button>
                    </li>
                </ul>
            </div>
    </div>
    <div class="row bind form-group">
        <label class="control-label col-sm-2">未绑定</label>
        <div class="col-sm-10">
            <ul class="list-inline">
                <li class="mb10"><a href="/user/oauth/google" class="btn btn-default">Google</a></li>
                <li class="mb10"><a href="/user/oauth/twitter" class="btn btn-default">Twitter</a></li>
                <li class="mb10"><a href="/user/oauth/douban" class="btn btn-default">豆瓣</a></li>
                <li class="mb10"><a href="/user/oauth/weibo" class="btn btn-default">新浪微博</a></li>
                <li class="mb10"><a href="/user/oauth/weixin" class="btn btn-default">微信</a></li>
                <li class="mb10"><a href="/user/oauth/github" class="btn btn-default">GitHub</a></li>
                <li class="mb10"><a href="/user/oauth/facebook" class="btn btn-default">Facebook</a></li>
            </ul>
        </div>
    </div>
@endsection

@section('script')

@endsection
