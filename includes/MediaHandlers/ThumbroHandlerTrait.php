<?php
declare( strict_types=1 );

namespace MediaWiki\Extension\Thumbro\MediaHandlers;

trait ThumbroHandlerTrait {
	/**
	 * @inheritDoc
	 */
	protected function getScalerType( $dstPath, $checkDstPath = true ) {
		return 'libvips';
	}

	/**
	 * @inheritDoc
	 */
	public function getThumbType( $ext, $mime, $params = null ) {
		return [ 'webp', 'image/webp' ];
	}
}
