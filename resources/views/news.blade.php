<div class="field">
    @foreach($news as $data)
        <div class="card_body">
            <h3 class="card_title">
                <a href="{{$data['url']}}">{{$data['name']}}</a>
            </h3>
            <div class="card_text">
                <img src="{{$data['thumbnail']}}" class="news_thumbnail">
            </div>
        </div>
    @endforeach
</div>
