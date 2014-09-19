<?php

namespace davefu\GoogleAnalytics\Components;

/**
 * @author David Fiedor <davefu@seznam.cz>
 */
interface GoogleAnalyticsFactory {
	/**
	 * @return \davefu\GoogleAnalytics\Components\GoogleAnalytics
	 */
	public function create();
}
