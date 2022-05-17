<div class="field">
    @foreach($news as $data)
    <div class="data_body" id="data_body_{{$loop->index}}">
        <div class="card_body" id="card_body_{{$loop->index}}">
            <h3 class="card_title" id="card_title_{{$loop->index}}">
                <a href="{{$data['url']}}">{{$data['name']}}</a>
            </h3>
            <div class="card_text" id="card_text_{{$loop->index}}">
                <img src="{{$data['thumbnail']}}" class="news_thumbnail">
            </div>
        </div>
        <div class="favorite" id="favorite_{{$loop->index}}">♡</div>
        <div class="favorite_after" id="favorite_after_{{$loop->index}}" style="display:none;">💖</div>
    </div>
    @endforeach
</div>
