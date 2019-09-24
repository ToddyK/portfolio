    <?php
        if(!empty($_POST)){
        define('MSG01','入力必須項目です');
        define('MSG02','Emailの形式で入力してください');
        
        $err_msg = array();
        
        if(empty($_POST['name'])){
            $err_msg['name'] = MSG01;
        }
        
        if(empty($_POST['email'])){
            $err_msg['email'] = MSG01;
        }else{
            //emailの正規表現のチェック
            if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])){
                $err_msg['email'] = MSG02;
            }
        }
        
        if(empty($_POST['inquiry'])){
            $err_msg['inquiry'] = MSG01;
        }
        
        if(empty($err_msg)){
            $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
            $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
            $inquiry = htmlspecialchars($_POST['inquiry'], ENT_QUOTES);
            
            $to = "toddy.k00@gmail.com";
            $subject = "ポートフォリオお問い合わせフォームより";
            $message = "お名前 : ".$_POST['name']."\nメールアドレス : ".$_POST['email']."\nお問い合わせ内容 : ".$_POST['inquiry'];
            mb_send_mail("toddy.k00@gmail.com", "ポートフォリオお問い合わせフォームより", $message);
            echo "<div class=\"p-form__overlay js-form__close\"><div class=\"p-form__confirm\"><div class=\"p-form__closebtn\"></div><p>ご意見ありがとうございます。</p><p>メールが送信されました。</p><button class=\"js-form__close\">閉じる</button></div></div>";
        }
    }
   ?>

    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>戸田一寿 ポートフォリオサイト</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <header class="l-header js-view-height">
            <div class="p-header js-view-height">
                <div class="c-drower__overlay"></div>
                <div class="c-drower p-header__drower">
                    <span class="c-drower__line--top"></span>
                    <span class="c-drower__line--middle"></span>
                    <span class="c-drower__line--bottom"></span>
                </div>
                <section class="p-header__body">
                    <h1 class="u-text-stroke">
                        戸田一寿
                    </h1>
                    <span>
                        ポートフォリオサイト
                    </span>
                </section>
                <nav class="c-drower__nav p-header__nav">
                    <ul class="p-header__list">
                        <li class="c-drower__list-item p-header__item"><a href="#portfolio" class="c-drower__link">ポートフォリオ</a></li>
                        <li class="c-drower__list-item p-header__item"><a href="#profile" class="c-drower__link">わたしについて</a></li>
                        <li class="c-drower__list-item p-header__item"><a href="#contact" class="c-drower__link">お問い合わせ</a></li>
                        <li class="c-drower__list-item p-header__item">
                            <a href="">ブログ</a>
                        </li>
                    </ul>
                </nav>
                <a href="#portfolio" class="p-header__arrow u-animation-bounce"></a>
            </div>
        </header>

        <article class="l-portfolio" id="portfolio">
            <section class="p-portfolio">
                <h1 class="u-text-stroke">ポートフォリオ</h1>
                <span>※クリックで詳細を表示します。</span>
                <ul class="p-slider">
                    <li class="p-slider__item js-portfolio-modal">
                        <div class="p-slider__content">
                            <div class="p-slider__ribbon">
                                Design
                            </div>
                            <div class="p-slider__inner--1">
                                <div class="p-slider__body">
                                    <span>制作時間:7h</span>
                                    <h2>LPデザイン</h2>
                                    <p>
                                        barca fiore様の、アロマジェルのランディングページデザイン・ライティングを担当させていただきました。企画段階からお話を重ね、アロマを使ったことがない人にも関心を持ってもらえるような構成になりました。<br>
                                        商品に使われている素材を大きく配置することでフレッシュさを表現し、自律神経のオンオフをコントロールする効果を強調しています。また、レイアウトのつなぎ目に画像を置くことで目線を途切れさせず、ページ離脱を防ぎます。<br>
                                        ライティングでは、現代人が潜在的に抱えている悩みにアプローチし、商品の期待される効果を明快に表現することを心がけました。
                                    </p>
                                    <div class="c-article-tag">
                                        <span class="c-article-tag__lavel">
                                            デザイン
                                        </span>
                                    </div>
                                    <div class="p-slider__modalbtn js-portfolio-modal">
                                        click more info
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-slider__item js-portfolio-modal">
                        <div class="p-slider__content">
                            <div class="p-slider__ribbon">
                                Coding
                            </div>
                            <div class="p-slider__inner--2">
                                <div class="p-slider__body">
                                    <span>制作時間:10h</span>
                                    <h2>サイト模写</h2>
                                    <p>
                                        ドロワー、アコーディオン、レスポンシブでレイアウトが変わるテーブル、グーグルマップの埋め込み、疑似要素を活用したデザインなど、モダンなウェブサイトで頻出のパターンが多かったのでとても勉強になりました。<br>
                                        初めてBEMでコーディングしたのですが、不慣れからクラス名が煩雑になりがちでしたので、クラスや変数名で頻出の英単語を調べてシンプルに書くことを心がけました。
                                    </p>
                                    <div class="c-article-tag">
                                        <span class="c-article-tag__lavel">
                                            コーディング
                                        </span>
                                    </div>
                                    <div class="p-slider__modalbtn js-portfolio-modal">
                                        click more info
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-slider__item js-portfolio-modal">
                        <div class="p-slider__content">
                            <div class="p-slider__ribbon">
                                Coding
                            </div>
                            <div class="p-slider__inner--3">
                                <div class="p-slider__body">
                                    <span>制作時間:16h</span>
                                    <h2>サイト模写</h2>
                                    <p>
                                        旅行系のLPを模写しました。html/cssの基礎を学んだばかりでの挑戦でしたので、marginやposition:absoluteでの力技での実装が多くなってしまいました。リファクタリングしようとコードを読み返したとき、保守性と可読性の大切さを痛感した記憶があります。<br>
                                        特にhoverやjQueryでのクリックイベントの実装に手こずり、DOMという概念をしっかり学ぶことの重要性がわかりました。
                                    </p>
                                    <div class="c-article-tag">
                                        <span class="c-article-tag__lavel">
                                            コーディング
                                        </span>
                                    </div>
                                    <div class="p-slider__modalbtn js-portfolio-modal">
                                        click more info
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-slider__item js-portfolio-modal">
                        <div class="p-slider__content">
                            <div class="p-slider__ribbon">
                                Design+Coding
                            </div>
                            <div class="p-slider__inner--4">
                                <div class="p-slider__body">
                                    <span>制作時間:20h</span>
                                    <h2>自サイト制作</h2>
                                    <p>
                                        プログラミングを独習しながら個人で案件獲得にトライしてみようとポートフォリオサイトを作りました。保守性・可読性を意識しはじめたころで、rscssで設計し制作しました。読み返してみると拙いコードですが、しっかりと設計してからコーディングすることの大切さを学びました。<br>
                                        また、オリジナルデザインにトライしたことでデザインスキルの足りなさに気づくこともできました。この頃からデザインやレイアウトの書籍を買って勉強しはじめ、デザインのみの案件のコンペに参加したりと活動の幅を広げていきました。
                                    </p>
                                    <div class="c-article-tag">
                                        <span class="c-article-tag__lavel">
                                            デザイン
                                        </span>
                                        <span class="c-article-tag__lavel">
                                            コーディング
                                        </span>
                                    </div>
                                    <div class="p-slider__modalbtn js-portfolio-modal">
                                        click more info
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-slider__item js-portfolio-modal">
                        <div class="p-slider__content">
                            <div class="p-slider__ribbon">
                                xxx
                            </div>
                            <div class="p-slider__inner">
                                <div class="p-slider__body">
                                    <span>制作時間:xx</span>
                                    <h2>制作中...</h2>
                                    <p>
                                        制作中...
                                    </p>
                                    <div class="c-article-tag">
                                        <span class="c-article-tag__lavel">
                                            xxx
                                        </span>
                                    </div>
                                    <div class="p-slider__modalbtn js-portfolio-modal">
                                        click more info
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <p class="p-portfolio__slide-nav">scroll more!</p>
            </section>
            
        </article>

        <article class="l-profile" id="profile">
            <div class="p-profile">
                <div class="p-profile__content-wrapper">
                    <section class="p-profile__content--profile">
                        <h2 class="u-text-stroke">
                            プロフィール
                        </h2>
                        <div class="p-profile__body">
                            <span>わたしについて</span>
                            <p>
                                本サイトをご覧いただき、ありがとうございます。
                                埼玉を拠点にコーダー兼ウェブデザイナーとして独習しております、戸田一寿と申します。
                                ものづくりを仕事にしたいとの思いからエンジニアを志し、コーディングとウェブデザインを学んでいます。
                            </p>
                            <p>
                                前職は看護師をしていました。医師をはじめとするスタッフ達の指示・提案を、最高の形で患者様にお届けするということにやりがいを感じていました。そこで培ったコーディネーターとしてのスキルをプログラミングでのディレクションに活かし、ライティングやデザインスキルと合わせてユーザーや市場に価値を提供していきます。
                            </p>
                            <p>
                                また、看護師業務ではコミュニケーションを何よりも大切にしていました。患者様の日々の細かな変化を取り上げるには信頼関係を築くことが重要です。プログラミングの領域でも、チーム開発や顧客とのやりとりの中で相手のニーズをとらえ、あなたに任せてよかったと思って頂けるようなお仕事を行なっていきます。
                            </p>
                            <p>
                                現在のわたしの強みとして、
                            </p>
                            <ul class="p-profile__list">
                                <li class="p-profile__item">
                                    <p>オンラインサービスだけでなく多数の書籍を購入し学習をしています。体系的にまとめられた情報から学ぶことで基礎的な部分を網羅し、現場に出てからの自身への教育コストを低くすることを心がけています。</p>
                                </li>
                                <li class="p-profile__item">
                                    MindBEMding、FLOCSS、rscssなど複数の設計思想に基づいたコーディングを行い、独自の癖を作らないように留意しました。所属する場のルールに合わせたコーディングが可能です。
                                </li>
                                <li class="p-profile__item">
                                    時間＝コストという考え方を大切にしています。組織目線で考えることで、損失を可能な限り少なくする業務を行なっていきます。
                                </li>
                            </ul>
                            <p>
                                年齢は36歳と、未経験で業界で飛び込むには勇気のいる決断でしたが、何が何でもという気持ちで日々を学びに費やしています。本サイトをご覧になり、わたしに興味を持っていただけたら最下部のお問い合わせフォームよりご連絡をいただけますと嬉しく思います。
                            </p>
                        </div>
                    </section>
                    <section class="p-profile__content--skill">
                        <h2 class="u-text-stroke">
                            スキル
                        </h2>
                        <div class="p-profile__body">
                            <span>できること</span>
                            <h3>HTML/CSS</h3>
                            <p>
                                保守性・可読性の高いセマンティックなコーディングを行います。
                            </p>
                            <p>
                                具体的に気をつけていることは、
                            </p>
                            <ul class="p-profile__list">
                                <li class="p-profile__item">
                                    ネストを少なくする。深くなる場合は閉じタグにコメントをつける。
                                </li>
                                <li class="p-profile__item">
                                    &lt;input&gt;のチェックボックスを使ったドロワーや&lt;svg&gt;など、セマンティックなhtml構造から離れてしまう場合は注釈をコメントアウトする。
                                </li>
                                <li class="p-profile__item">
                                    単位・記述を統一する。0.3と.3、margin: 0 0 20px 0とmargin-right: 20px;などを混在させない。複数の数字をまとめる時はcalc()またはsassの演算を使い意図を明確にする。
                                </li>
                                <li class="p-profile__item">
                                    cssのプロパティはアルファベット順に記述する。
                                </li>
                                <li class="p-profile__item">
                                    頻出するカラー、フォントなどはSassで変数化する。その際の命名は明確にする。（ex. $color-white、$font-yuGothic）
                                </li>
                                <li class="p-profile__item">
                                    カスケーディングを考慮し、拡張や修正で破綻しにくい記述を行う。必要以上にコンポーネント化をしない。
                                </li>
                                <li class="p-profile__item">
                                    必要に応じてモバイルファーストでデザイン・コーディングする。スタイルの打ち消しが多くなる記述を避ける。
                                </li>
                            </ul>
                            <p>
                                など、誰が見てもわかりやすくマークアップすることを心がけています。また、W3Cに準拠しSEOに考慮したhtml構造を心がけています。
                            </p>
                            <h3>javascript(jquery)</h3>
                            <p>
                                モダンなサイトデザインで頻出のドロワー、アコーディオン、ハンバーガーメニューなど、スクラッチでコーディングが可能ですので細かなレイアウトの変更にも対応できます。
                            </p>
                            <h3>PHP(wordpress)</h3>
                            <p>
                                既存サイトのWordPress化、データベースと連携したお問い合わせフォーム、ログイン機能、自動メール送信機能を学習しています。
                            </p>
                            <h3>photoshop/illustrator</h3>
                            <p>
                                デザインカンプからの画像の切り出し、ロゴや画像の作成・編集を行います。
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </article>

        <article class="l-contact" id="contact">
            <section class="p-contact">
                <h1 class="u-text-stroke">
                    お問い合わせ
                </h1>
                <form action="index.php#contact" method="post" class="p-form">
                    <div class="p-form__input-wrapper--name">
                        <label>お名前</label>
                        <span><?php if(!empty($err_msg['name'])) echo $err_msg['name']; ?></span>
                        <input type="text" name="name" id="p-form__name" value="<?php if( !empty($_POST['name']) ) echo $_POST['name']; ?>">
                    </div>
                    <div class="p-form__input-wrapper--email">
                        <label>メールアドレス</label>
                        <span><?php if(!empty($err_msg['email'])) echo $err_msg['email']; ?></span>
                        <input type="text" name="email" id="p-form__email" value="<?php if( !empty($_POST['email']) ) echo $_POST['email']; ?>">
                    </div>
                    <div class="p-form__input-wrapper--inquiry">
                        <label>お問い合わせ内容</label>
                        <span><?php if(!empty($err_msg['inquiry'])) echo $err_msg['inquiry']; ?></span>
                        <textarea name="inquiry" id="p-form__inquiry" cols="30" rows="10"><?php if( !empty($_POST['inquiry']) ) echo $_POST['inquiry']; ?></textarea>
                    </div>
                    <input type="submit" value="送信！" class="p-form__submit">
                </form>
            </section>
        </article>

        <footer class="l-footer">
            <div class="p-footer">
                <small class="p-footer__copylight">©︎2019 戸田一寿</small>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="js/window-sizing.js"></script>
        <script src="js/portfolio-modal.js"></script>
        <script src="js/drower.js"></script>
        <script src="js/form.js"></script>
        <script src="js/smooth-scroll.js"></script>
        

    </body>

    </html>
