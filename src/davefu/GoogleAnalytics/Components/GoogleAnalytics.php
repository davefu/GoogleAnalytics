<?php

namespace davefu\GoogleAnalytics\Components;

use Nette\Application\UI\Control;

/**
 * @author David Fiedor <davefu@seznam.cz>
 */
class GoogleAnalytics extends Control {
	
	/** @var string */
	protected $googleAnalyticsKey;
	
	function __construct($googleAnalyticsKey = null) {
		parent::__construct();
		$this->googleAnalyticsKey = $googleAnalyticsKey;
	}

	public function render() {
		$this->template->setFile(__DIR__ . '/GoogleAnalytics.latte');
		$this->template->googleAnalyticsKey = $this->googleAnalyticsKey;
		$this->template->render();
	}
}
