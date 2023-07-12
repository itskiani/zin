<?php

use ItsKiani\Zin\App\providers\AppServiceProvider;

beforeEach(
    closure: function (){
        $this->app = AppServiceProvider::class;
    },
);

it('can return the base path of app', closure: function() {
    $this->assertEquals(__DIR__.'/../', $this->app->base_path());
});