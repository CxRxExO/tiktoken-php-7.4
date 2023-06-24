# tiktoken-php

![Packagist Version](https://img.shields.io/packagist/v/cxrxexo/tiktoken)
![Build status](https://img.shields.io/github/actions/workflow/status/cxrxexo/tiktoken-php-7.4/ci.yml?branch=master)
![License](https://img.shields.io/github/license/cxrxexo/tiktoken-php-7.4)

This is a port of the [tiktoken-php](https://github.com/yethee/tiktoken-php).

## Installation

```bash
$ composer require cxrxexo/tiktoken
```

## Usage

```php

use CxRxExO\Tiktoken\EncoderProvider;

$provider = new EncoderProvider();

$encoder = $provider->getForModel('gpt-3.5-turbo-0301');
$tokens = $encoder->encode('Hello world!');
print_r($tokens);
// OUT: [9906, 1917, 0]

$encoder = $provider->get('p50k_base');
$tokens = $encoder->encode('Hello world!');
print_r($tokens);
// OUT: [15496, 995, 0]
```

## Limitations

* Encoding for GPT-2 is not supported.
* Special tokens (like `<|endofprompt|>`) are not supported.

## License

[MIT](./LICENSE)
