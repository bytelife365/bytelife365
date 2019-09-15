---
title: 首页
---
{% include head.html %}

<div class="container">

    <div class="book">

        <div class="book_detial">
            <div class="book_cover"><img src="{!! $book->image !!}" border="0" width="100" height="120" ></div>
            <div class="book_desc">
                <p class="line">{{$book->name}}</p>
                <p class="line">作者：{{$book->author}}</p>
                <p class="line">分类：{{$book->category}}</p>
                <p class="line">状态：{{$book->status}}</p>
            </div>
        </div>

        <div class="brief">
            <p class="brief-title">小说简介</p>
            <p class="brief-content">
                {{$book->brief}}
            </p>

        </div>


        <div class="book_chapters">
            @foreach($chapters as $chapter)
                <ul>
                    <li title=""{{ $chapter->name }} class="article-info">
                        <a href="{{ $chapter->id }}">{{ $chapter->name }}</a>
                    </li>
                </ul>
            @endforeach
        </div>
</div>

{% include foot.html %}
