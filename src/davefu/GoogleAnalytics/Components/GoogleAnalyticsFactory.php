<?php

namespace davefu\GoogleAnalytics\Components;

use Nette\Object;

/**
 * @author David Fiedor <davefu@seznam.cz>
 */
class GoogleAnalyticsFactory extends Object {
	
	/** @var string */
	protected $googleAnalyticsKey;
	
	function __construct($googleAnalyticsKey = null) {
		$this->googleAnalyticsKey = $googleAnalyticsKey;
	}

	/**
	 * @return \davefu\GoogleAnalytics\Components\GoogleAnalytics
	 */
	public function create() {
		return new GoogleAnalytics($this->googleAnalyticsKey);
	}
}
