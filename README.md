# NEST WORK

架空のコワーキングスペースの静的サイトです。
`index.html`をブラウザで開いて確認できます。

## ページ

- `index.html`：トップ
- `facilities.html`：施設・設備
- `plans.html`：料金・プラン
- `access.html`：アクセス・FAQ
- `news.html`：お知らせ一覧
- `news-opening.html`：お知らせ詳細

## 構成

CSSは`css/style.css`に統一し、メディアクエリは末尾にまとめています。
`js/main.js`はメニュー、写真拡大、スライダー、ページトップ、メインビジュアルを制御します。
`js/pricing.js`は料金計算を行います。画像は`images/`に保存しています。

## WordPress移行

トップは`front-page.php`、固定ページは共通の`page.php`と`the_content()`を使用します。
お知らせは標準投稿を使い、一覧は`home.php`、詳細は`single.php`で表示します。
CSSはテーマ直下の`style.css`1ファイルとし、下層専用の`page-*.php`やカスタム投稿タイプは使用しません。
