<section id="menu" class="flex flex-col items-center justify-center px-24 py-12">
  <div class="relative flex items-end justify-center pb-9">
    <div class="text-7xl font-bold text-sub tracking-widest select-none">
      MENU
    </div>
    <h2 class="absolute flex items-center gap-2 text-text">
      <img class="h-9 w-9" src="<?php echo get_theme_image_url('tree-solid-full.svg'); ?>">
      <span class="text-section-title tracking-tighter">
        メニュー
      </span>
    </h2>
  </div>

  <div class="flex flex-row items-center justify-center w-full max-w-[1100px]">
    <button id="menu-prev" class="cursor-pointer transition-opacity duration-300 disabled:opacity-30 disabled:cursor-default">
      <img class="w-20 h-20" src="<?php echo get_theme_image_url('angle-left-solid-full.svg'); ?>">
    </button>

    <div class="overflow-hidden mx-4" style="width: calc((170px * 5) + (36px * 4));">
      <div id="menu-track" class="flex flex-row transition-transform duration-500 ease-in-out gap-9">

        <div class="w-[170px] flex-shrink-0">
          <img src="<?php echo get_theme_image_url('フォカッチャ.webp'); ?>">
          <div class="text-body text-center">フォカッチャ<br/>９９９円</div>
        </div>
        <div class="w-[170px] flex-shrink-0">
          <img src="<?php echo get_theme_image_url('アップルパイ.webp'); ?>">
          <div class="text-body text-center">アップルパイ<br/>９９９円</div>
        </div>
        <div class="w-[170px] flex-shrink-0">
          <img src="<?php echo get_theme_image_url('クリームパン.webp'); ?>">
          <div class="text-body text-center">クリームパン<br/>９９９円</div>
        </div>
        <div class="w-[170px] flex-shrink-0">
          <img src="<?php echo get_theme_image_url('クロワッサン.webp'); ?>">
          <div class="text-body text-center">クロワッサン<br/>９９９円</div>
        </div>
        <div class="w-[170px] flex-shrink-0">
          <img src="<?php echo get_theme_image_url('デニッシュ.webp'); ?>">
          <div class="text-body text-center">デニッシュ<br/>９９９円</div>
        </div>

        <div class="w-[170px] flex-shrink-0">
          <img src="<?php echo get_theme_image_url('コーヒー.webp'); ?>">
          <div class="text-body text-center">コーヒー<br/>９９９円</div>
        </div>
        <div class="w-[170px] flex-shrink-0">
          <img src="<?php echo get_theme_image_url('フランスパン.webp'); ?>">
          <div class="text-body text-center">フランスパン<br/>９９９円</div>
        </div>
        <div class="w-[170px] flex-shrink-0">
          <img src="<?php echo get_theme_image_url('マフィン.webp'); ?>">
          <div class="text-body text-center">マフィン<br/>９９９円</div>
        </div>
        <div class="w-[170px] flex-shrink-0">
          <img src="<?php echo get_theme_image_url('食パン.webp'); ?>">
          <div class="text-body text-center">食パン<br/>９９９円</div>
        </div>

      </div>
    </div>

    <button id="menu-next" class="cursor-pointer transition-opacity duration-300 disabled:opacity-30 disabled:cursor-default">
      <img class="w-20 h-20" src="<?php echo get_theme_image_url('angle-right-solid-full.svg'); ?>">
    </button>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const track = document.getElementById('menu-track');
  const prevBtn = document.getElementById('menu-prev');
  const nextBtn = document.getElementById('menu-next');

  let currentIndex = 0;
  const totalItems = 9;
  const visibleItems = 5;
  const maxIndex = totalItems - visibleItems; // 4回スライド可能

  const itemWidth = 170; // w-[170px]
  const gap = 36;        // gap-9 (2.25rem = 36px)

  function updateCarousel() {
    const offset = currentIndex * (itemWidth + gap);
    track.style.transform = `translateX(-${offset}px)`;

    // ボタンの有効・無効切り替え
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex === maxIndex;
  }

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  });

  nextBtn.addEventListener('click', () => {
    if (currentIndex < maxIndex) {
      currentIndex++;
      updateCarousel();
    }
  });

  // 初期状態の反映
  updateCarousel();
});
</script>
