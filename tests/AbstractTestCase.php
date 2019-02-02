<?php

namespace AvtoDev\FirebaseNotificationsChannel\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use AvtoDev\FirebaseNotificationsChannel\LaravelPackageServiceProvider;

abstract class AbstractTestCase extends BaseTestCase
{
    use Traits\CreatesApplicationTrait;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->app->register(LaravelPackageServiceProvider::class);
    }
}
