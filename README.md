# meli-payamak

A simple PHP package for interacting with the Payamak SMS API to send and manage SMS messages.

## Table of Contents

- [Installation](#installation)
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

You can install the package via Composer. Run the following command:

```bash
composer require black-m13/melipayamak

Usage
Configuration

Before using the package, you need to instantiate the SmsService class with your Payamak credentials.

php
use BlackM13\MeliPayamak\SmsService;
$smsService = new SmsService('your_username', 'your_password');

Sending SMS

To send an SMS, use the sendSMS method.

php
$response = $smsService->sendSMS('09123456789', '1000', 'Your message here');
Sending Multiple SMS

To send different messages to multiple recipients, use the sendMultipleSMS method.

php
$response = $smsService->sendMultipleSMS(
    ['09123456789', '09129876543'],
    '1000',
    ['Message for first recipient', 'Message for second recipient']
);

Getting Delivery Status

To check the delivery status of a sent SMS, use the getDeliveryStatus method with the recID you received during sending.

php
$response = $smsService->getDeliveryStatus('recID');
Retrieving Messages

To get a list of sent or received messages, use the getMessages method.

php
$response = $smsService->getMessages(2); // 2 for sent messages

Checking Credit

To check your SMS credit, use the getCredit method.

php
$response = $smsService->getCredit();

Getting Base Price

To retrieve the base price for SMS, use the getBasePrice method.

php
$response = $smsService->getBasePrice();

Getting User Numbers

To get a list of your dedicated numbers, use the getUserNumbers method.

php
$response = $smsService->getUserNumbers();

Contributing

Contributions are welcome! Please open an issue or submit a pull request.
License

This package is licensed under the MIT License. See the LICENSE file for details.

markdown


### Notes:
- Replace placeholders like `your_username`, `your_password`, and any other sample data with actual examples.
- Make sure the links to LICENSE or other files are accurate based on your project's structure.

You said:

