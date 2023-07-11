<?php

use ItsKiani\Zin\App\providers\AppServiceProvider;

beforeEach(
    closure: function (){
        $this->app = AppServiceProvider::class;
    },
);
