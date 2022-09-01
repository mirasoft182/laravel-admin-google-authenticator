Laravel-admin google authenticator
======
### install
````
composer require mirasoft182/laravel-admin-google-authenticator
````

### Generate Secret 
google_authenticator_secret=
````
php artisan google:secret
````

### configuration
````
'extensions' => [
	'admin-google-authenticator' => [
		'enable' => true,
		'secret' => env('google_authenticator_secret', ''),
	],
],
````

### publish language
````
php artisan vendor:publish --provider=LaravelAdminGoogleAuthenticator\GoogleAuthenticatorServiceProvider
````
