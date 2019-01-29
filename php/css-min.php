<?php
/**
 * css-min.php
 */
namespace tomk79\pickles2\cssMin;

/**
 * css-min.php
 */
class cssMin{

	/**
	 * entry
	 * @param object $px Picklesオブジェクト
	 * @param object $plugin_conf プラグイン設定
	 */
	static public function minify_css($px, $plugin_conf){
		$compressor = new \tubalmartin\CssMin\Minifier;

		$src = $px->bowl()->get_clean( 'main' );
		$src = $compressor->run($src); 
		$px->bowl()->replace( $src, 'main' );

		return true;
	}

}
