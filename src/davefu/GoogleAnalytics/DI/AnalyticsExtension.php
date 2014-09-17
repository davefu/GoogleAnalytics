<?php

namespace davefu\GoogleAnalytics\DI;

use Nette\Config\CompilerExtension;

/**
 * @author David Fiedor <davefu@seznam.cz>
 */
class AnalyticsExtension extends CompilerExtension {
	
	/** @var array */
	public $defaults = array(
		'key' => null
	);
	
	public function loadConfiguration() {
		$builder = $this->getContainerBuilder();
		$config = $this->getConfig($this->defaults);
		
		$builder->addDefinition($this->prefix('googleAnalyticsFactory'))
					->setClass('davefu\GoogleAnalytics\Components\GoogleAnalyticsFactory')
					->setArguments(array($config['key']));
	}
}
