# SMS Service Package

A simple PHP package for interacting with the Payamak SMS API to send and manage SMS messages effortlessly.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
  - [Sending SMS](#sending-sms)
  - [Sending Multiple SMS](#sending-multiple-sms)
  - [Getting Delivery Status](#getting-delivery-status)
  - [Retrieving Messages](#retrieving-messages)
  - [Checking Credit](#checking-credit)
  - [Getting Base Price](#getting-base-price)
  - [Getting User Numbers](#getting-user-numbers)
- [Contributing](#contributing)
- [License](#license)

## Installation

Install the package via Composer:

```bash
composer require black-m13/meli-payamak
```

### Register Service Provider (Laravel 10+)

The service provider is automatically registered via Laravel's package discovery. However, if needed, manually add it in `config/app.php`:

```php
'providers' => [
    BlackM13\MeliPayamak\SmsServiceProvider::class,
],
```

### Alias the Facade

Add the alias in `config/app.php` to use `SmsService` statically:

```php
'aliases' => [
    'SmsService' => BlackM13\MeliPayamak\Facades\SmsService::class,
],
```

## Usage

### Sending SMS

Send an SMS using the `sendSMS` method:

```php
use SmsService;

$response = SmsService::sendSMS('09123456789', '1000', 'Your message here');
```

### Sending Multiple SMS

To send different messages to multiple recipients, use `sendMultipleSMS`:

```php
$response = SmsService::sendMultipleSMS(
    ['09123456789', '09129876543'],
    '1000',
    ['Message for first recipient', 'Message for second recipient']
);
```

### Getting Delivery Status

Check the delivery status of a sent SMS using `getDeliveryStatus` with the `recID` received during sending:

```php
$response = SmsService::getDeliveryStatus('recID');
```

### Retrieving Messages

Get a list of sent or received messages using `getMessages`. Use `2` for sent messages:

```php
$response = SmsService::getMessages(2);
```

### Checking Credit

Retrieve your SMS credit balance with `getCredit`:

```php
$response = SmsService::getCredit();
```

### Getting Base Price

Retrieve the base price for sending SMS using `getBasePrice`:

```php
$response = SmsService::getBasePrice();
```

### Getting User Numbers

Get a list of your dedicated numbers using `getUserNumbers`:

```php
$response = SmsService::getUserNumbers();
```

## Contributing

Contributions are welcome! If you encounter issues or have suggestions, feel free to open an issue or submit a pull request.

## License

This package is licensed under the MIT License. See the `LICENSE` file for details.
