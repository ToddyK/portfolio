//画面サイズに合わせたheightに書き換える
function heightFit() {
    //対象となる要素を取得
    var target = document.getElementsByClassName("js-view-height");
    //各値を変数に格納
    var viewWidth = window.innerWidth;
    var viewHeight = window.innerHeight;

    //レスポンシブ対応
    if (viewWidth < 560) {
        //配列の要素を一つずつ書き換える
        for (i = 0; i < target.length; i++) {
            target[i].style.height = viewHeight + "px";
        }
    }else{
        //画面幅が560px以上に変更された時、heightをリセット
        for (i = 0; i < target.length; i++) {
            target[i].style.height = "auto";
        }
    }
}

//DOM読み込み後に発火
window.onload = heightFit();

//画面幅が変更された時に発火
window.addEventListener('resize', heightFit);
