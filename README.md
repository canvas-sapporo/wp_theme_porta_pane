# WordPress テーマ Porta Pane

<img width="1067" height="2033" alt="image" src="https://github.com/user-attachments/assets/abd9f056-db65-4ae3-9a83-1b69ee29e8d1" />

WordPressテーマ「Porta Pane」の開発リポジトリです。Tailwind CSSとViteを使用したモダンな開発環境を構築しています。

## 技術スタック

- **WordPress**: テーマ開発
- **Tailwind CSS**: ユーティリティファーストのCSSフレームワーク
- **Vite**: 高速なビルドツール
- **PostCSS**: CSS変換ツール
- **Autoprefixer**: ベンダープレフィックスの自動追加

## セットアップ

### 必要な環境

- Node.js (v20以上推奨)
- npm または yarn
- WordPress環境（Local by Flywheel、MAMP、XAMPPなど）

### インストール

1. リポジトリをクローンまたはダウンロード
2. テーマディレクトリに移動
3. 依存関係をインストール

```bash
npm install
```

## 開発

### 開発サーバーの起動

開発環境でTailwind CSSのホットリロードを使用する場合：

```bash
npm run dev
```

これにより、Viteの開発サーバーが `http://localhost:5173` で起動します。
`http://porta-pane.local/` にアクセスするとホームページを閲覧できます。

### ファイル構成

```
Porta_Pane/
├── src/
│   ├── css/
│   │   └── main.css          # Tailwind CSSのエントリーポイント
│   └── js/                    # JavaScriptファイル（必要に応じて追加）
├── dist/                      # ビルド成果物（自動生成）
├── functions.php              # WordPressの関数定義
├── header.php                 # ヘッダーテンプレート
├── footer.php                 # フッターテンプレート
├── index.php                  # メインテンプレート
├── style.css                  # WordPressテーマ情報
├── vite.config.js             # Vite設定
├── tailwind.config.js         # Tailwind CSS設定
├── postcss.config.js          # PostCSS設定
└── package.json               # 依存関係とスクリプト
```

## ビルド

本番環境用にビルドする場合：

```bash
npm run build
```

ビルド成果物は `dist/` ディレクトリに出力されます。

## Tailwind CSSの使用

### 基本的な使い方

PHPテンプレートファイル（`.php`）でTailwindのクラスを直接使用できます：

```php
<main class="p-10">
  <h1 class="text-4xl font-bold text-red-500">
    Tailwind + Vite OK!
  </h1>
</main>
```

### カスタマイズ

Tailwind CSSの設定を変更する場合は、`tailwind.config.js` を編集してください。

現在の設定では、以下のファイルがTailwindのスキャン対象になっています：
- `./**/*.php` - すべてのPHPファイル
- `./src/**/*.{js,css}` - srcディレクトリ内のJS/CSSファイル

## 開発時の注意事項

### 開発環境

- `functions.php` では、開発サーバー（`http://localhost:5173`）からCSSを直接読み込んでいます
- Viteの開発サーバーが起動している必要があります
- ブラウザでWordPressサイトを表示する前に、必ず `npm run dev` を実行してください

### 本番環境

本番環境では、ビルドされたCSSファイルを使用するように `functions.php` を修正する必要があります。

## トラブルシューティング

### Tailwind CSSが反映されない場合

1. Viteの開発サーバーが起動しているか確認
   ```bash
   npm run dev
   ```

2. ブラウザの開発者ツールで、CSSファイルが正しく読み込まれているか確認

3. `tailwind.config.js` の `content` 設定で、対象ファイルが正しく指定されているか確認

4. ブラウザのキャッシュをクリア

## ライセンス

ISC

## 作者

Porta Pane
