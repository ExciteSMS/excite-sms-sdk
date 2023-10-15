# ExciteSMS PHP SDK

The ExciteSMS PHP SDK allows you to interact with the ExciteSMS API to send SMS messages. This SDK provides a convenient way to send single contact list SMS campaigns using the ExciteSMS service.

## Installation

You can install the ExciteSMS PHP SDK via Composer. Run the following command in your project directory:

```bash
composer excitesms-php-sdk/excitesms-php-sdk
```

## Usage

To use the ExciteSMS PHP SDK, follow these steps:

1. Import the SDK in your PHP script:

```php
use ExcitesmsPhpSdk\ExcitesmsPhpSdk\ExciteSms;
```

2. Initialize the ExciteSms class with your ExciteSMS API credentials:

```php
$baseUrl = 'https://portal.excitesms.tech';
$apiKey = 'Your-API-Key';
$exciteSms = new ExciteSms($baseUrl, $apiKey);
```

3. Send a single contact list SMS campaign:

```php
$recipient = '6415907d0d37a';
$senderId = 'YourName';
$message = 'This is a test message';

$response = $exciteSms->sendSingleContactListSms($recipient, $senderId, $message);
```

4. Handle the response as needed.

## API Documentation

For more information about the ExciteSMS API and its endpoints, refer to the [ExciteSMS API Documentation](https://app.theneo.io/excitesms/excitesms/api-reference).

## License

This SDK is open-source and available under the [MIT] License. For more details, see the [LICENSE](LICENSE) file.

## Issues

If you encounter any issues with the SDK or would like to report a bug, please create an issue on the [GitHub repository](https://github.com/excite-sms-sdk).

## Contributing

We welcome contributions! If you'd like to contribute to the ExciteSMS PHP SDK, please follow our [contribution guidelines](CONTRIBUTING.md).

## About

This SDK is maintained by Kazashim Kuzasuwat. You can contact us at <kazashim@excitesms.com>.

## Changelog

For a detailed list of changes, see the [CHANGELOG](CHANGELOG.md) file.

## Acknowledgments

We would like to thank the ExciteSMS team for providing an excellent SMS service and allowing us to build this SDK.

---

Happy coding! :rocket:
