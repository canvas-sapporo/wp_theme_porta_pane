<?php
add_action('wp_enqueue_scripts', function () {

  // Vite dev server
  wp_enqueue_script(
    'vite-client',
    'http://localhost:5173/@vite/client',
    [],
    null,
    true
  );

  // CSSを直接エンキュー（開発環境）
  wp_enqueue_style(
    'vite-main-css',
    'http://localhost:5173/src/css/main.css',
    [],
    null
  );
});

/**
 * テーマ内の画像パスを取得するヘルパー関数
 * 
 * @param string $filename 画像ファイル名（例: 'hero-image.jpg'）
 * @return string 画像のURL
 */
function get_theme_image_url($filename) {
  return get_template_directory_uri() . '/images/' . $filename;
}
