<div class="field">
    @foreach($news as $data)
    <div class="data_body" id="data_body_0{{$loop->index}}">
        <div class="card_body" id="card_body_0{{$loop->index}}">
            <h3 class="card_title" id="card_title_0{{$loop->index}}">
                <a href="{{$data['url']}}">{{$data['name']}}</a>
            </h3>
            <div class="card_text" id="card_text_0{{$loop->index}}">
                <img src="{{$data['thumbnail']}}" class="news_thumbnail">
            </div>
        </div>
        <div class="favorite" id="favorite_0{{$loop->index}}">♡</div>
        <div class="favorite_after" id="favorite_after_0{{$loop->index}}" style="display:none;">💖</div>
    </div>
    @endforeach
    <div class="fav_data_body" style="display:none;">
        <div class="clone_fav" id="original">
            <div class="fav_card_body">
                <h3 class="fav_card_title">
                    <a href=""></a>
                </h3>
                <div class="fav_card_text">
                    <img src="" class="news_thumbnail">
                </div>
            </div>
            <div class="favorite" style="display:none;">♡</div>
            <div class="favorite_after">💖</div>
        </div>
    </div>
</div>
