# Booking Schemas

This repository describe the models used in the responses from booking.com internal API

## How to use

You can use this repository with jms-serializer to deserialize the responses from booking.com internal API.

## How to install

```bash
composer require bookingcom/booking-schemas
```

## How to use

```php
<?php

// ...

$requestData = $serializer->deserialize($requestBody, 'Capimichi\BookingSchemas\Model\Booking\Search\Request', 'json');

// ...
```