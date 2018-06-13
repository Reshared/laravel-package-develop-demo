<?php

namespace Reshared\Hasher;

use Illuminate\Support\ServiceProvider;

class MD5HasherServiceProvider extends ServiceProvider
{
	public function boot()
	{

	}

	public function register()
	{
		$this->app->singleton('md5hash', function() {
			return new MD5Hasher();
		});
	}
}