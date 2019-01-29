# px2-minify-css
CSSファイルを圧縮する Pickles 2 プラグイン。


## 導入手順 - Setup

### 1. インストール

```
$ composer require tomk79/px2-minify-css
```

### 2. config.php に、機能を追加

設定ファイル config.php (通常は `./px-files/config.php`) を編集します。
CSSプロセッサに、`tomk79\pickles2\cssMin\cssMin::minify_css()` を追加します。

```php
<?php
	/* 中略 */

	// processor
	$conf->funcs->processor->css = [
		// Minify CSS
		'tomk79\pickles2\cssMin\cssMin::minify_css()',
	];
```


## ライセンス - License

MIT License


## 更新履歴 - Change log

### tomk79/px2-minify-css v0.1.0 (2019年1月29日)

- 初回リリース


## 作者 - Author

- Tomoya Koyanagi <tomk79@gmail.com>
- website: <https://www.pxt.jp/>
- Twitter: @tomk79 <https://twitter.com/tomk79/>


## 開発者向け情報 - for Developer

### テスト - Test

```
$ php ./vendor/phpunit/phpunit/phpunit
```
