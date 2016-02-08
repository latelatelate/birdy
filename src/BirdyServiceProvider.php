<?php namespace NM\Birdy;

use Illuminate\Support\ServiceProvider;
use \Codebird\Codebird;

class BirdyServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Codebird\Codebird::class, function ($app) {
            \Codebird\Codebird::setConsumerKey(config('birdy.CONSUMER_KEY'), config('birdy.CONSUMER_SECRET'));
            return \Codebird\Codebird::getInstance();
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('birdy.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [\Codebird\Codebird::class];
    }
}