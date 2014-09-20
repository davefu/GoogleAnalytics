<?php

namespace davefu\GoogleAnalytics\DI;

use Nette\DI\CompilerExtension;

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
		
		$builder->addDefinition($this->prefix('googleAnalytics'))
					->setImplement('davefu\GoogleAnalytics\Components\GoogleAnalyticsFactory')
					->setFactory('davefu\GoogleAnalytics\Components\GoogleAnalytics')
					->setArguments((array($config['key'])));
	}
}
