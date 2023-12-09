<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tla 新歓サイト</title>
    <!--=============Google Font ===============-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP%7COswald&display=swap" rel="stylesheet">
    <!--==============レイアウトを制御する独自のCSSを読み込み===============-->
    <!--機能編 6-1-4 動きを組み合わせて全画面で見せる-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
    <!--機能編 6-2-1 複数の画像を一覧で見せる-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
    <!-- 人数比、学部比のグラフ作成の外部ライブラリ -->
    <script src="https://unpkg.com/apexcharts/dist/apexcharts.min.js" defer></script>
    <!-- 実際のグラフ -->
    <script src="./js/sex_chart.js" defer></script>
    <script src="./js/faculty_chart.js" defer></script>
    @vite(['resources/css/introduce/reset.css', 'resources/css/introduce/layout.css', 'resources/css/introduce/part.css', 'resources/js/introduce/sex_chart.js', 'resources/js/introduce/faculty_chart.js', 'resources/js/introduce/script.js'])
    <!--自作のCSS-->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/parts.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <style>
        #service .service-img-practice {
            height: 60vh;
            background: url("./img/practice/LINE_ALBUM_230103_12.jpg") no-repeat center;
            background-size: contain;
        }

        #service .service-img-propotion {
            height: 60vh;
            background: url("") no-repeat center;
            background-size: contain;
        }

        #service .service-img-appeal {
            height: 60vh;
            background: url("./img/practice/IMG_1370.JPG") no-repeat center;
            background-size: contain;
        }

        #service .service-img01 {
            height: 60vh;
            background: url("./img/plan/IMG_7238.jpg") no-repeat center;
            background-size: contain;
        }

        #service .service-img03 {
            height: 60vh;
            background: url("./img/plan/IMG_7238.jpg") no-repeat center;
            background-size: contain;
        }

        .service-img02 {
            height: 60vh;
            background: url("./img/summercamp/IMG_4247.jpg") no-repeat center;
            background-size: contain;
            width: 100%;
        }

        .service-img04 {
            height: 60vh;
            background: url("./img/summercamp/IMG_5323.jpg") no-repeat center;
            background-size: contain;
            width: 100%;
        }

        .news-img {
            height: 60vh;
            background: url("../img/summercamp/IMG_5398.jpg") no-repeat center;
            background-size: contain;
        }
    </style>

</head>

<body>
    <header id="header">
        <div class="g-nav-openbtn">
            <div class="openbtn-area">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav id="g-nav">
            <div id="g-nav-list">
                <ul id="g-navi" class="nav01c">
                    <li>
                        <a href="#">Top</a>
                    </li>
                    <li>
                        <a href="#service">練習頻度 &#47; 練習場所</a>
                    </li>
                    <li>
                        <a href="#ratio_guide">男女比 &amp; 学部比</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="open-btn"></div>
    </header>
    <div id="search-wrap">
        <div class="close-btn"><span></span><span></span></div>
        <div class="search-area">
            <form role="search" method="get" action="">
                <input type="text" value="" name="" id="search-text" placeholder="search">
                <input type="submit" id="searchsubmit" value="">
            </form>
            <!--/search-area-->
        </div>
        <!--/search-wrap-->
    </div>

    <section id="vidual-area">

        <div id="slider-area" class="bgextend bgRLextendTrigger">
            <div class="bgappearTrigger">
                <div id="slider"></div>
            </div>
            <!--/slider-area-->
        </div>
        <h2>
            <span class="js_typing">Tennis</span>
            <br>
            <span class="js_typing">Lovers</span>
            <br>
            <span class="js_typing">Association</span>
        </h2>
        <dl>
            <dt>Follow Us</dt>
            <dd>
                <ul class="main_sns">
                    <li>
                        <a href="https://instagram.com/keio_tla_2023?igshid=YmMyMTA2M2Y=" class="main_sns_item"
                            target="_blank"><img src="./img/logo/icon-instagram.svg" alt=""></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/keio_tla_2023_" class="main_sns_item" target="_blank"><img
                                src="./img/logo/icon-twitter.svg" alt=""></a>
                    </li>
                    <li>
                        <a href="https://lin.ee/DBmNhSI" class="main_sns_item"><img src="./img/logo/icon-line.svg"
                                alt=""></a>
                    </li>
                </ul>
            </dd>
        </dl>
        <div class="scrolldown1"><span id="news_guide">Scroll</span></div>
        <!--/vidual-area-->
    </section>

    <main id="main-area">
        <section id="service">
            <h2 class="js_typing">慶應公認サークルTLA</h2>
            <div class="service-area">
                <section class="bgextend bgLRextendTrigger">
                    <div class="bgappearTrigger">
                        <header>
                            <h3 class="js_typing">練習頻度 &#47; 練習場所</h3>
                            <h4 class="js_typing">練習頻度</h4>
                            <p>月曜 &#126; 金曜の週５で活動中</p>
                        </header>
                        <h4 class="js_typing">練習場所</h4>
                        <p>練習は多摩川のコート、希望があれば新横浜や大井町でも &#033;</p>
                        <a href="#contact" class="btnlinestretches2">DM</a>
                    </div>
                    <div class="service-img-wrapper bgextend bgLRextendTrigger">
                        <div class="bgappearTrigger">
                            <div class=" service-img-practice"></div>
                        </div>
                    </div>
                    <span id="ratio_guide"></span>
                </section>
                <section class="bgextend bgLRextendTrigger">
                    <div class="bgappearTrigger">
                        <header>
                            <h3 class="js_typing">男女比 &amp; 学部比</h3>
                            <p>現在約140人が在籍中</p>
                        </header>
                        <a href="#contact" class="btnlinestretches2">DM</a>
                    </div>
                    <div class="ratio_chart">
                        <div class="sex_chart"></div>
                        <div class="faculty_chart"></div>
                    </div>
                    <span id="appeal_guide"></span>
                </section>
            </div>
        </section>
        <div class="bgextend bgLRextendTrigger">
            <div class="bgappearTrigger">
                <section id="contact">
                    <div class="contact-detail">
                        <h2>Contact</h2>
                        <p>instagram,twitterのDMにて気軽にお問い合わせください</p>
                    </div>
                    <div class="contact-tel">
                        <ul class="contact_sns">
                            <li>
                                <a href="https://instagram.com/keio_tla_2023?igshid=YmMyMTA2M2Y="
                                    class="main_sns_item" target="_blank"><img src="./img/logo/icon-instagram.svg"
                                        alt=""></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/keio_tla_2023_" class="main_sns_item"
                                    target="_blank"><img src="./img/logo/icon-twitter.svg" alt=""></a>
                            </li>
                            <li>
                                <a href="https://lin.ee/DBmNhSI" class="main_sns_item"><img
                                        src="./img/logo/icon-line.svg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer id="footer">
        <div class="footer-info">
            <p class="footer-logo">TLA</p>
        </div>
        <div class="footer-link">
            <ul>
                <li><a href="#">Top</a></li>
                <li><a href="#service">practice</a></li>
                <li><a href="#ratio_guide">ratio</a></li>
            </ul>
            <small>Copyright &copy; TLA.</small>
        </div>
        <p id="page-top" class="hide-btn"><a href="#"><span></span></a></p>
    </footer>
    <!--/container--></div>
    <!--=============JS ===============-->
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--機能編 6-1-4 動きを組み合わせて全画面で見せる-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
    <!--機能編 6-2-1 複数の画像を一覧で見せる-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    <!--印象編 8-6 アルファベットがランダムに変化して出現-->
    <script src="https://cdn.jsdelivr.net/npm/shuffle-text@0.3.0/build/shuffle-text.min.js"></script>
    <!--自作のJS-->
    <script>
        /*===========================================================*/
        /* 機能編 5-1-1 ドロップダウンメニュー（上）*/
        /*===========================================================*/

        //ドロップダウンの設定を関数でまとめる
        function mediaQueriesWin() {
            var width = $(window).width();
            if (width <= 960) { //横幅が960px以下の場合
                $(".has-child>a").off('click'); //has-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
                $(".has-child>a").on('click', function() { //has-childクラスがついたaタグをクリックしたら
                    var parentElem = $(this).parent(); // aタグから見た親要素の<li>を取得し
                    $(parentElem).toggleClass('active'); //矢印方向を変えるためのクラス名を付与して
                    $(parentElem).children('ul').stop().slideToggle(500); //liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
                    return false; //リンクの無効化
                });
            } else { //横幅が960px以上の場合
                $(".has-child>a").off('click'); //has-childクラスがついたaタグのonイベントをoff(無効)にし
                $(".has-child>a").removeClass('active'); //activeクラスを削除
                $('.has-child').children('ul').css("display", ""); //スライドトグルで動作したdisplayも無効化にする
            }
        }

        /*===========================================================*/
        /* 機能編 5-1-6 スクロール途中から上部固定 */
        /*===========================================================*/

        //スクロール途中からヘッダーを出現させるための設定を関数でまとめる
        function FixedAnime() {
            var elemTop = $('#service').offset().top; //#serviceの位置まできたら
            var scroll = $(window).scrollTop();

            if (scroll <= 0) { //上から20pxスクロールされたら
                $('#header').addClass('DownMove'); //DownMoveというクラス名を除き
            } else if (scroll >= elemTop) {
                $('#header').removeClass('UpMove'); //#headerについているUpMoveというクラス名を除く
                $('#header').addClass('DownMove'); //#headerについているDownMoveというクラス名を付与

            } else {
                if ($('#header').hasClass('DownMove')) { //すでに#headerにDownMoveというクラス名がついていたら
                    $('#header').removeClass('DownMove'); //DownMoveというクラス名を除き
                    $('#header').addClass('UpMove'); //UpnMoveというクラス名を付与
                }
            }
        }

        /*===========================================================*/
        /* 機能編 5-1-11 クリックしたらナビが上から下に出現 */
        /*===========================================================*/

        $(".g-nav-openbtn").click(function() { //ボタンがクリックされたら
            $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し
            $("#g-nav").toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与
        });

        $("#g-nav a").click(function() { //ナビゲーションのリンクがクリックされたら
            $(".g-nav-openbtn").removeClass('active'); //ボタンの activeクラスを除去し
            $("#g-nav").removeClass('panelactive'); //ナビゲーションのpanelactiveクラスも除去
        });

        /*===========================================================*/
        /*機能編 8-1-4 ページの指定の範囲内で出現（右から左）*/
        /*===========================================================*/

        //スクロールした際の動きを関数でまとめる
        function setFadeElement() {
            var windowH = $(window).height(); //ウィンドウの高さを取得
            var scroll = $(window).scrollTop(); //スクロール値を取得

            //出現範囲の指定
            var contentsTop = Math.round($('#contact').offset().top); //要素までの高さ四捨五入した値を取得
            var contentsH = $('#contact').outerHeight(true); //要素の高さを取得

            //2つ目の出現範囲の指定※任意
            var contentsTop2 = Math.round($('#footer').offset().top); //要素までの高さ四捨五入した値を取得
            var contentsH2 = $('#footer').outerHeight(true); //要素の高さを取得

            //出現範囲内に入ったかどうかをチェック
            if (scroll + windowH >= contentsTop && scroll + windowH <= contentsTop + contentsH) {
                $("#page-top").addClass("LeftMove"); //入っていたらLeftMoveをクラス追加
                $("#page-top").removeClass("RightMove"); //RightMoveを削除
                $(".hide-btn").removeClass("hide-btn"); //hide-btnを削除
            } //2つ目の出現範囲に入ったかどうかをチェック※任意
            else if (scroll + windowH >= contentsTop2 && scroll + windowH <= contentsTop2 + contentsH2) {
                $("#page-top").addClass("LeftMove"); //入っていたらLeftMoveをクラス追加
                $("#page-top").removeClass("RightMove"); //RightMoveを削除
            } //それ以外は
            else {
                if (!$(".hide-btn").length) { //サイト表示時にRightMoveクラスを一瞬付与させないためのクラス付け。hide-btnがなければ下記の動作を行う
                    $("#page-top").addClass("RightMove"); //RightMoveをクラス追加
                    $("#page-top").removeClass("LeftMove"); //LeftMoveを削除	
                }
            }
        }

        // #page-topをクリックした際の設定
        $('#page-top').click(function() {
            $('body,html').animate({
                scrollTop: 0 //ページトップまでスクロール
            }, 500); //ページトップスクロールの速さ。数字が大きいほど遅くなる
            return false; //リンク自体の無効化
        });

        /*===========================================================*/
        /*機能編 5-4-1タブメニュー*/
        /*===========================================================*/

        //任意のタブにURLからリンクするための設定
        function GethashID(hashIDName) {
            if (hashIDName) {
                //タブ設定
                $('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
                    var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
                    if (idName ==
                        hashIDName
                    ) { //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
                        var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
                        $('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
                        $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
                        //表示させるエリア設定
                        $(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
                        $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
                    }
                });
            }
        }

        //タブをクリックしたら
        $('.tab a').on('click', function() {
            var idName = $(this).attr('href'); //タブ内のリンク名を取得	
            GethashID(idName); //設定したタブの読み込みと
            return false; //aタグを無効にする
        });


        // 上記の動きをページが読み込まれたらすぐに動かす
        $(window).on('load', function() {
            $('.tab li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
            $('.area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
            var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
            GethashID(hashName); //設定したタブの読み込み
        });

        //タブをクリックしたら
        $('.tab a').on('click', function() {
            var idName = $(this).attr('href'); //タブ内のリンク名を取得	
            GethashID(idName); //設定したタブの読み込みと
            return false; //aタグを無効にする
        });

        /*===========================================================*/
        /* 機能編 6-1-4 動きを組み合わせて全画面で見せる*/
        /*===========================================================*/

        //画像の設定

        var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
        if (windowwidth > 768) {
            var responsiveImage = [ //PC用の画像
                {
                    src: '/img/summercamp/IMG_0500.jpg'
                },
                {
                    src: '/img/summercamp/IMG_0824.jpg'
                },
                {
                    src: '/img/logo/IMG_2305.jpg'
                }
            ];
        } else {
            var responsiveImage = [ //タブレットサイズ（768px）以下用の画像
                {
                    src: '/img/summercamp/IMG_0500.jpg'
                },
                {
                    src: '/img/summercamp/IMG_0824.jpg'
                },
                {
                    src: '/img/logo/IMG_2305.jpg'
                }
            ];
        }

        //Vegas全体の設定

        $('#slider').vegas({
            overlay: false, //画像の上に網線やドットのオーバーレイパターン画像を指定。
            transition: 'fade2', //切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burnburn2、blurblur2、flash、flash2が設定可能。
            transitionDuration: 1500, //切り替わりのアニメーション時間をミリ秒単位で設定
            delay: 2500, //スライド間の遅延をミリ秒単位で。
            animationDuration: 1000, //スライドアニメーション時間をミリ秒単位で設定
            animation: 'random', //スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
            slides: responsiveImage, //画像設定を読む
            timer: false, //プログレスバー非表示
        });

        /*===========================================================*/
        /* 機能編 7-2-2 虫眼鏡マークをクリックすると全画面表示で検索窓が出現 */
        /*===========================================================*/

        //開くボタンを押した時には
        $(".open-btn").click(function() {
            $("#search-wrap").addClass('panelactive'); //#search-wrapへpanelactiveクラスを付与
            $('#search-text').focus(); //テキスト入力のinputにフォーカス
        });

        //閉じるボタンを押した時には
        $(".close-btn").click(function() {
            $("#search-wrap").removeClass('panelactive'); //#search-wrapからpanelactiveクラスを除去
        });

        /*===========================================================*/
        /* 印象編 4 最低限おぼえておきたい動き */
        /*===========================================================*/

        // 動きのきっかけの起点となるアニメーションの名前を定義
        function fadeAnime() {

            // 印象編 4-9、4-10 背景色が伸びて出現（左から・右から）中の要素が出現
            $('.bgappearTrigger').each(function() { //bgappearTriggerというクラス名が
                var elemPos = $(this).offset().top - 50; //要素より、50px上の
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll >= elemPos - windowHeight) {
                    $(this).addClass('bgappear'); // 画面内に入ったらbgappearというクラス名を追記
                } else {
                    $(this).removeClass('bgappear'); // 画面外に出たらbgappearというクラス名を外す
                }
            });
            //印象編 4-9 背景色が伸びて出現（左から）
            $('.bgLRextendTrigger').each(function() { //bgLRextendTriggerというクラス名が
                var elemPos = $(this).offset().top - 50; //要素より、50px上の
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll >= elemPos - windowHeight) {
                    $(this).addClass('bgLRextend'); // 画面内に入ったらbgLRextendというクラス名を追記
                } else {
                    $(this).removeClass('bgLRextend'); // 画面外に出たらbgLRextendというクラス名を外す
                }
            });
            //印象編 4-9 背景色が伸びて出現（右から）
            $('.bgRLextendTrigger').each(function() { //bgRLextendTriggerというクラス名が
                var elemPos = $(this).offset().top - 50; //要素より、50px上の
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll >= elemPos - windowHeight) {
                    $(this).addClass('bgRLextend'); // 画面内に入ったらbgRLextendというクラス名を追記
                } else {
                    $(this).removeClass('bgRLextend'); // 画面外に出たらbgRLextendというクラス名を外す
                }
            });
            //service-areaスタート
            $('.service-area').each(function() { //service-areaというクラス名が
                var elemPos = $(this).offset().top - 50; //要素より、50px上の
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll >= elemPos - windowHeight) {
                    $(this).addClass('startwd'); // 画面内に入ったらstartwdというクラス名を追記
                } else {
                    $(this).removeClass('startwd'); // 画面外に出たらstartwdというクラス名を外す
                }
            });
        }

        /*===========================================================*/
        /*  印象編 8-6 アルファベットがランダムに変化して出現*/
        /*===========================================================*/
        var arr = []
        //初期値の設定
        function TypingInit() {
            $('.js_typing').each(function(i) { //js_typingクラスを全て処理をおこなう
                arr[i] = new ShuffleText(this); //動作させるテキストを配列に格納
            });
        }
        //スクロールした際のアニメーションの設定
        function TypingAnime() {
            $(".js_typing").each(function(i) {
                var elemPos = $(this).offset().top - 50; //要素より、50px上の
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll >= elemPos - windowHeight) {
                    if (!$(this).hasClass("endAnime")) { //endAnimeのクラスがあるかチェック
                        arr[i].start(); //配列で登録テキストのアニメーションをおこなう
                        arr[i].duration = 800; //テキストが最終変化するまでの時間※規定値600
                        $(this).addClass("endAnime"); //１度アニメーションした場合はendAnimeクラスを追加
                    }
                } else {
                    $(this).removeClass("endAnime"); //範囲外にスクロールした場合はendAnimeのクラスを削除
                }
            });
        }

        /*===========================================================*/
        /* 関数をまとめる */
        /*===========================================================*/


        // ページがリサイズされたら動かしたい場合の記述
        $(window).resize(function() {
            mediaQueriesWin(); // 機能編 5-1-1 ドロップダウンメニュー（上）の関数を呼ぶ
        });

        // 画面をスクロールをしたら動かしたい場合の記述
        $(window).scroll(function() {
            FixedAnime(); // 機能編 5-1-6 スクロール途中から上部固定
            setFadeElement(); // 機能編 8-1-4 ページの指定の範囲内で出現（右から左）の関数を呼ぶ
            fadeAnime(); // 印象編 4 最低限おぼえておきたい動きの関数を呼ぶ
            TypingInit(); // 印象編 8-6 アルファベットがランダムに変化して出現 初期設定
            TypingAnime(); // 印象編 8-6 アルファベットがランダムに変化して出現の関数を呼ぶ
        });

        // ページが読み込まれたらすぐに動かしたい場合の記述
        $(window).on('load', function() {

            $("#splash-logo").delay(1200).fadeOut('slow'); //ロゴを1.2秒でフェードアウトする記述

            //=====ここからローディングエリア（splashエリア）を1.5秒でフェードアウトした後に動かしたいJSをまとめる
            $("#splash").delay(1500).fadeOut('slow', function() {
                $('body').addClass('appear'); //フェードアウト後bodyにappearクラス付与 
                mediaQueriesWin(); // 機能編 5-1-1 ドロップダウンメニュー（上）の関数を呼ぶ
                FixedAnime(); // 機能編 5-1-6 スクロール途中から上部固定
                setFadeElement(); // 機能編 8-1-4  ページトップリンク:ページの指定の範囲内で出現（右から左）の関数を呼ぶ

                /*機能編 5-4-1タブメニューの読み込み*/
                var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
                GethashID(hashName); //設定したタブの読み込み   

            });
            //=====ここまでローディングエリア（splashエリア）を1.5秒でフェードアウトした後に動かしたいJSをまとめる

            /*===========================================================*/
            /*機能編 4-2-4背景色が伸びる（左から右） */
            /*===========================================================*/

            //=====ここから背景が伸びた後に動かしたいJSをまとめる
            $('.splashbg').on('animationend', function() {

                /* 印象編 4 最低限おぼえておきたい動きの関数を呼ぶ*/
                fadeAnime();
                // 印象編 8-6 アルファベットがランダムに変化して出現 
                $(".endAnime").removeClass("endAnime");
                TypingInit(); //印象編 8-6 アルファベットがランダムに変化して出現 初期設定
                TypingAnime(); //印象編 8-6 アルファベットがランダムに変化して出現  

            });
            //=====ここまで背景が伸びた後に動かしたいJSをまとめる

        }); // ここまでページが読み込まれたらすぐに動かしたい場合の記述
    </script>
</body>

</html>
