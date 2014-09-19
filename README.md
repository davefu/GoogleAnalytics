# davefu\GoogleAnalytics

This is Google Analytics component for [Nette Framework](http://nette.org/).

## Instalation
Add these lines to bootsrap.php:
```php
$configurator = new Nette\Config\Configurator;
$configurator->onCompile[] = function ($configurator, $compiler) {
    $compiler->addExtension('analytics', new \davefu\GoogleAnalytics\DI\AnalyticsExtension());
};
```

To the config.neon add Google Analytics key (if key is not defined, GA script will not be printed):
```
analytics:
	key: "UA-XXXXXXXX-X"
```

## Usage
You have to insert component factory to BasePresenter and use the component in @layout.latte:
```php
use \davefu\GoogleAnalytics\Components\GoogleAnalyticsFactory;

/** @var GoogleAnalyticsFactory */
protected $googleAnalyticsFactory;

public function injectGoogleAnalyticsFactory(GoogleAnalyticsFactory $googleAnalyticsFactory) {
	$this->googleAnalyticsFactory = $googleAnalyticsFactory;
}

public function createComponentAnalytics() {
	return $this->googleAnalyticsFactory->create();
}
```