<?php

/**
 * Viteの開発サーバーまたはビルド済みファイルを自動で読み込む
 */
add_action('wp_enqueue_scripts', function () {
    // 1. 開発サーバー（npm run dev）が起動しているかチェック
    $dev_server_url = 'http://localhost:5173';
    $is_dev = false;

    // ポート 5173 に接続できるか試行
    $connection = @fsockopen('localhost', 5173, $errno, $errstr, 0.05);
    if ($connection) {
        fclose($connection);
        $is_dev = true;
    }

    if ($is_dev) {
        // --- 開発環境（npm run dev） ---
        wp_enqueue_script('vite-client', $dev_server_url . '/@vite/client', [], null, true);
        wp_enqueue_script('theme-main', $dev_server_url . '/src/js/main.js', [], null, true);
        // 開発時はCSSを直接読み込む
        wp_enqueue_style('theme-styles', $dev_server_url . '/src/css/main.css', [], null);
    } else {
        // --- 本番環境（npm run build 後の dist を参照） ---
        $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';

        if (file_exists($manifest_path)) {
            $manifest = json_decode(file_get_contents($manifest_path), true);

            // manifest.json のキー 'src/js/main.js' を探す
            if (isset($manifest['src/js/main.js'])) {
                $entry = $manifest['src/js/main.js'];

                // JSの読み込み
                wp_enqueue_script(
                    'theme-main',
                    get_template_directory_uri() . '/dist/' . $entry['file'],
                    [],
                    null,
                    true
                );

                // CSSの読み込み（ViteがCSSを抽出した場合、ここを通る）
                if (isset($entry['css'])) {
                    foreach ($entry['css'] as $css_file) {
                        wp_enqueue_style(
                            'theme-styles',
                            get_template_directory_uri() . '/dist/' . $css_file,
                            [],
                            null
                        );
                    }
                }
            }
        }
    }
});

/**
 * テーマ内の画像パスを取得するヘルパー関数
 */
function get_theme_image_url($filename) {
    return get_template_directory_uri() . '/images/' . $filename;
}
