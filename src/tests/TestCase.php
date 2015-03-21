<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

	/**
	 * Creates the application.
	 *
	 * @return \Illuminate\Foundation\Application
	 */
	public function createApplication()
	{
		$app = require __DIR__.'/../bootstrap/app.php';

		$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

		return $app;
	}
	
	/**
	 * Default preparation for each test
	 */
	public function setUp()
	{
		parent::setUp();
	
		$this->prepareForTests();
	}
	
	/**
	 * Migrates the database and set the mailer to 'pretend'.
	 * This will cause the tests to run quickly.
	 */
	private function prepareForTests()
	{
		Artisan::call('migrate');
		Artisan::call('db:seed');
		Mail::pretend(true);
	}
	
	public function __call($method, $args)
	{
		if (in_array($method, ['get', 'post', 'put', 'patch', 'delete']))
		{
			return $this->call($method, $args[0]);
		}
	
		throw new BadMethodCallException;
	}

}
