<section id="hero" class="relative w-full h-screen flex flex-col justify-between bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo get_theme_image_url('hero_00.png'); ?>');">
  <div class="relative z-10 flex-1 flex flex-col justify-between px-24 py-12">

    <div class="w-fit flex flex-col items-center">
      <h1 class="text-white text-6xl font-serif font-bold leading-tight">
        Porta Pane
      </h1>
      <p class="text-white text-xl font-sans tracking-widest text-center w-full">
        ポルタ・パーネ
      </p>
    </div>

    <div class="flex justify-center items-center">
      <p class="text-white text-hero-title text-center drop-shadow-lg">
        日常に、焼きたてのしあわせを。
      </p>
    </div>

    <div class="flex justify-center items-center mb-8 gap-4">
      <img
        src="<?php echo get_theme_image_url('hero_00.png'); ?>"
        alt="Hero image 1"
        class="w-[120px] md:w-[148px] h-[80px] md:h-[108px] object-cover rounded-lg cursor-pointer border-2 border-white/50 hover:border-white transition-all"
        data-hero-index="0"
      >
      <img
        src="<?php echo get_theme_image_url('hero_01.png'); ?>"
        alt="Hero image 2"
        class="w-[120px] md:w-[148px] h-[80px] md:h-[108px] object-cover rounded-lg cursor-pointer border-2 border-white/50 hover:border-white transition-all"
        data-hero-index="1"
      >
      <img
        src="<?php echo get_theme_image_url('hero_02.png'); ?>"
        alt="Hero image 3"
        class="w-[120px] md:w-[148px] h-[80px] md:h-[108px] object-cover rounded-lg cursor-pointer border-2 border-white/50 hover:border-white transition-all"
        data-hero-index="2"
      >
    </div>
  </div>
</section>

<!-- TODO: 画像のレンダリングをもっとリッチにする。フェードやスクロールなど -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const heroImages = [
    '<?php echo get_theme_image_url('hero_00.png'); ?>',
    '<?php echo get_theme_image_url('hero_01.png'); ?>',
    '<?php echo get_theme_image_url('hero_02.png'); ?>'
  ];

  const heroSection = document.querySelector('section[style*="background-image"]');
  const thumbnails = document.querySelectorAll('[data-hero-index]');
  let currentIndex = 0;
  let autoSlideInterval = null;

  // 画像を切り替える関数
  function switchImage(index) {
    currentIndex = index;
    heroSection.style.backgroundImage = `url('${heroImages[index]}')`;

    // アクティブなサムネイルのスタイルを更新
    thumbnails.forEach((thumb, i) => {
      if (i === index) {
        thumb.classList.remove('border-white/50');
        thumb.classList.add('border-white');
      } else {
        thumb.classList.remove('border-white');
        thumb.classList.add('border-white/50');
      }
    });
  }

  // 自動切り替えを開始する関数
  function startAutoSlide() {
    // 既存のインターバルをクリア
    if (autoSlideInterval) {
      clearInterval(autoSlideInterval);
    }

    // 5秒ごとに自動切り替え
    autoSlideInterval = setInterval(function() {
      currentIndex = (currentIndex + 1) % heroImages.length;
      switchImage(currentIndex);
    }, 5000);
  }

  // サムネイルクリック時の処理
  thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', function() {
      switchImage(index);
      // 手動切り替え時は自動切り替えをリセット
      startAutoSlide();
    });
  });

  // 初期状態で最初のサムネイルをアクティブにする
  switchImage(0);

  // 自動切り替えを開始
  startAutoSlide();
});
</script>
