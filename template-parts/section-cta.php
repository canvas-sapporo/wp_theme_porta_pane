<section id="cta" class="texture-paper flex flex-col items-center justify-center px-24 py-12 bg-main">
  <div class="relative flex items-end justify-center pb-9 w-full">
    <div class="text-9xl font-bold opacity-50 text-text tracking-widest select-none">
      SNS
    </div>
    <h2 class="absolute flex items-center gap-2 text-bg">
      <span class="w-9 h-9">
        <?php
          echo file_get_contents(
            get_template_directory() . '/images/tree-solid-full.svg'
          );
        ?>
      </span>
      <span class="text-section-title tracking-tighter">
        特別すぎない贅沢
      </span>
    </h2>
  </div>
  <div class="container mx-auto px-4">
    <div class="flex flex-row justify-center gap-6">
      <!-- Google Calendar Button -->
      <a href="#" class="flex flex-row items-center justify-center bg-sub rounded-3xl w-[250px] shrink-0 hover:opacity-90 transition-opacity py-9">
        <img src="<?php echo get_template_directory_uri(); ?>/images/alarm-clock-regular-full.svg" alt="Googleカレンダー" class="w-12 h-12" />
        <div class="text-center">
          <div class="text-cta text-text">Googleカレンダー</div>
          <div class="text-small-text text-text">焼き上がり時間を見る</div>
        </div>
      </a>

      <!-- Instagram Button -->
      <a href="#" class="flex flex-row items-center justify-center bg-sub rounded-3xl w-[250px] shrink-0 hover:opacity-90 transition-opacity py-9">
        <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-brands-solid-full.svg" alt="Instagram" class="w-12 h-12" />
        <div class="text-center">
          <div class="text-cta text-text">Instagram</div>
          <div class="text-small-text text-text">フォローする</div>
        </div>
      </a>
    </div>
  </div>
  <div class="text-center text-small-text text-bg pt-8">
    © Porta Pane All Rights Reserved.
  </div>
</section>
