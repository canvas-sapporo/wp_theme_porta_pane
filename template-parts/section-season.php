<section id="season" class="flex flex-col items-center justify-center px-24 py-12 bg-sub">
  <div class="relative flex items-end justify-center pb-9">
    <div class="text-9xl font-bold opacity-50 text-bg tracking-widest select-none">
      SEASON
    </div>
    <h2 class="absolute flex items-center gap-2 text-text">
      <span class="w-9 h-9">
        <?php
          echo file_get_contents(
            get_template_directory() . '/images/tree-solid-full.svg'
          );
        ?>
      </span>
      <span class="text-section-title tracking-tighter">
        季節限定のパン
      </span>
    </h2>
  </div>
  <div class="flex w-full gap-9">
    <div class="w-1/3">
      <img src="<?php echo get_theme_image_url('【期間限定】アスパラとベーコンのクロックムッシュ.webp'); ?>">
      <div class="text-body text-center mt-4">
        <span class="text-emphasis text-accent">【期間限定】</span><br/>
        アスパラとベーコンのクロックムッシュ<br/>
        ９９９円
      </div>
      <div class="text-small-text mt-4">
        シャキッとした食感のアスパラガスと、旨みのあるベーコンを<br/>
        たっぷり挟んだクロックムッシュ。<br/>
        自家製ホワイトソースとチーズを重ね、外は香ばしく、中はとろ<br/>
        りと焼き上げました。<br/>
        軽食にもランチにもおすすめの、満足感のある一品です。
      </div>
    </div>
    <div class="w-1/3">
      <img src="<?php echo get_theme_image_url('【期間限定】トリュフ香るまいたけとベーコンのフォカッチャ.webp'); ?>">
      <div class="text-body text-center mt-4">
        <span class="text-emphasis text-accent">【期間限定】</span><br/>
        トリュフ香るまいたけとベーコンのフォカッチャ<br/>
        ９９９円
      </div>
      <div class="text-small-text mt-4">
        香り高いトリュフオイルをまとわせたまいたけと、旨みのある<br/>
        ベーコンをのせたフォカッチャ。<br/>
        もっちりとした生地に具材の風味がしみ込み、噛むほどに豊かな<br/>
        香りが広がります。<br/>
        少し特別な気分を楽しめる、食事にもおすすめの一品です。
      </div>
    </div>
    <div class="w-1/3">
      <img src="<?php echo get_theme_image_url('【期間限定】牛肉と北海道産コロッケパン.webp'); ?>">
      <div class="text-body text-center mt-4">
        <span class="text-emphasis text-accent">【期間限定】</span><br/>
        牛肉と北海道産コロッケパン<br/>
        ９９９円
      </div>
      <div class="text-small-text mt-4">
        北海道産じゃがいもを使ったホクホクのコロッケに、旨みのある<br/>
        牛肉を合わせたコロッケパン。<br/>
        サクッと揚げた衣とやさしい甘みのじゃがいも、牛肉のコクがパ<br/>
        ンとよく合います。<br/>
        お腹もしっかり満たしてくれる、食べごたえのある一品です。
      </div>
    </div>
  </div>
</section>
