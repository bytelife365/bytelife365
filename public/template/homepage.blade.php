---
title: 首页
---
{% include head.html %}

<div class="container">
    <div class="ptm-card">
        <div class="card-header">
            <div class="card-content">
                <ul>

    @foreach($books as $book)

                        <li>
                            <div class="pt-cover">
                                <a href="/books/{{$book->id}}" title="{{ $book->name }}"><img src="{!!  $book->image !!}" alt="{{ $book->name }}"></a>
                            </div>
                            <div class="pt-novel">
                                <div class="pt-name"><a href="/books/{{$book->id}}" title="{{ $book->name }}">{{ $book->name }}</a></div>
                                <div class="pt-author"><a href="/books/{{$book->id}}" title="{{ $book->author }}">{{ $book->author }}</a></div>
                                <div class="pt-desc ptm-text-cut">{!! $book->brief !!}</div>
                            </div>
                        </li>
                        <li>
    @endforeach
                </ul>

            </div>
        </div>

</div>

{% include foot.html %}

