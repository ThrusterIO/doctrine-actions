# Doctrine Actions

[![Latest Version](https://img.shields.io/github/release/ThrusterIO/doctrine-actions.svg?style=flat-square)]
(https://github.com/ThrusterIO/doctrine-actions/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)]
(LICENSE)
[![Build Status](https://img.shields.io/travis/ThrusterIO/doctrine-actions.svg?style=flat-square)]
(https://travis-ci.org/ThrusterIO/doctrine-actions)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/ThrusterIO/doctrine-actions.svg?style=flat-square)]
(https://scrutinizer-ci.com/g/ThrusterIO/doctrine-actions)
[![Quality Score](https://img.shields.io/scrutinizer/g/ThrusterIO/doctrine-actions.svg?style=flat-square)]
(https://scrutinizer-ci.com/g/ThrusterIO/doctrine-actions)
[![Total Downloads](https://img.shields.io/packagist/dt/thruster/doctrine-actions.svg?style=flat-square)]
(https://packagist.org/packages/thruster/doctrine-actions)

[![Email](https://img.shields.io/badge/email-team@thruster.io-blue.svg?style=flat-square)]
(mailto:team@thruster.io)

The Thruster Doctrine Actions.


## Install

Via Composer

``` bash
$ composer require thruster/doctrine-actions
```


## Usage

```php
$doctrineExecutor = new DoctrinePersistActionExecutor($entityManager);
$executor->addExecutor($doctrineExecutor::getSupportedAction(), $doctrineExecutor);


$executor->execute(new DoctrinePersistAction($object));
```


## Testing

``` bash
$ composer test
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## License

Please see [License File](LICENSE) for more information.
