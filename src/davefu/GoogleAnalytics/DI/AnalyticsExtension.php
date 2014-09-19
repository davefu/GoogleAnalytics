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
		
		$factory = $builder->addDefinition($this->prefix('googleAnalyticsFactory'))
					->setImplement('davefu\GoogleAnalytics\Components\GoogleAnalyticsFactory')
					->setArguments(array($config['key']));
		
		$builder->addDefinition($this->prefix('googleAnalytics'))
					->setClass('davefu\GoogleAnalytics\Components\GoogleAnalytics', array($config['key']))
					->setFactory($factory);	
	}
}
