Copy code

markdown

`# SMS Service Package  A simple PHP package for interacting with the Payamak SMS API to send and manage SMS messages.  ## Table of Contents  - [Installation](#installation) - [Usage](#usage)   - [Sending SMS](#sending-sms)   - [Sending Multiple SMS](#sending-multiple-sms)   - [Getting Delivery Status](#getting-delivery-status)   - [Retrieving Messages](#retrieving-messages)   - [Checking Credit](#checking-credit)   - [Getting Base Price](#getting-base-price)   - [Getting User Numbers](#getting-user-numbers) - [Contributing](#contributing) - [License](#license)  ## Installation  You can install the package via Composer. Run the following command:  ```bash composer require blackm13/melipayamak`

Usage
-----

### Configuration

Before using the package, you need to instantiate the `SmsService` class with your Payamak credentials.

php

Copy code

`use BlackM13\MeliPayamak\SmsService;  $smsService = new SmsService('your_username', 'your_password');`

### Sending SMS

To send an SMS, use the `sendSMS` method.

php

Copy code

`$response = $smsService->sendSMS('09123456789', '1000', 'Your message here');`

### Sending Multiple SMS

To send different messages to multiple recipients, use the `sendMultipleSMS` method.

php

Copy code

`$response = $smsService->sendMultipleSMS(     ['09123456789', '09129876543'],     '1000',     ['Message for first recipient', 'Message for second recipient'] );`

### Getting Delivery Status

To check the delivery status of a sent SMS, use the `getDeliveryStatus` method with the `recID` you received during sending.

php

Copy code

`$response = $smsService->getDeliveryStatus('recID');`

### Retrieving Messages

To get a list of sent or received messages, use the `getMessages` method.

php

Copy code

`$response = $smsService->getMessages(2); // 2 for sent messages`

### Checking Credit

To check your SMS credit, use the `getCredit` method.

php

Copy code

`$response = $smsService->getCredit();`

### Getting Base Price

To retrieve the base price for SMS, use the `getBasePrice` method.

php

Copy code

`$response = $smsService->getBasePrice();`

### Getting User Numbers

To get a list of your dedicated numbers, use the `getUserNumbers` method.

php

Copy code

`$response = $smsService->getUserNumbers();`

Contributing
------------

Contributions are welcome! Please open an issue or submit a pull request.

License
-------

This package is licensed under the MIT License. See the LICENSE file for details.

sql

Copy code

``You can copy this content directly into your `README.md` file. Let me know if you need any more adjustments!``
