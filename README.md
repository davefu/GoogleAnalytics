# davefu\GoogleAnalytics

This is Google Analytics component for [Nette Framework](http://nette.org/).

## Instalation
Include extension in config.neon and add Google Analytics key (if key is not defined, GA script will not be printed):
```
analytics:
	key: "UA-XXXXXXXX-X"

extensions:
	analytics: davefu\GoogleAnalytics\DI\AnalyticsExtension
```

## Usage
You have to insert component factory to BasePresenter and use the component in @layout.latte:
```php
/** @var \davefu\GoogleAnalytics\Components\GoogleAnalyticsFactory\GoogleAnalyticsFactory @inject */
protected $googleAnalyticsFactory;

public function createComponentAnalytics() {
	return $this->googleAnalyticsFactory->create();
}
```