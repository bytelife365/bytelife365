---
title: 首页
---
{% include head.html %}

<div class="container">
    <div class="chapter-content">
        <div class="title">{{$chapter->name}}</div>
        <div class="next">
            @if(!empty($pre))
            <a href="/books/{{$book->id}}/{{$pre->id}}">上一章</a>
            @endif
            <a href="/books/{{$book->id}}">目录</a>
            @if(!empty($next))
            <a href="/books/{{$book->id}}/{{$next->id}}">下一章</a>
            @endif
        </div>
        <p>
            {!! $content !!}
        </p>
        <div class="next">
            @if(!empty($pre))
                <a href="/books/{{$book->id}}/{{$pre->id}}">上一章</a>
            @endif
            <a href="/books/{{$book->id}}">目录</a>
            @if(!empty($next))
                <a href="/books/{{$book->id}}/{{$next->id}}">下一章</a>
            @endif
        </div>
    </div>
</div>

{% include foot.html %}

