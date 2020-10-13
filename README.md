# Simpl/Console Template

Template for creating new console projects using `symfony/console`.

## Installation

@todo Need to make this installable with create-project command.

## Basic Usage

### Command Help
```bash
php console help app:hello
```

### Run the hello command.
```bash
php console app:hello
```

### Run the hello command with optional `name` parameter
```bash
php console app:hello --name="Josh"
```

## Adding your own commands.
You can add new commands by adding a class that extends `Symfony\Component\Console\Command\Command` to the `app\Commands` directory.

Once you've added your command, register it in the `console` script.

```php
// ... register commands
$application->add(new Commands\Hello());
```

See `app\Commands\Hello` for an example.

See <https://simpl-php.com/templates/console> for full documentation.

## Testing

```bash
composer test
```

## Coding Standards
This library uses [PHP_CodeSniffer](http://www.squizlabs.com/php-codesniffer) to ensure coding standards are followed.

I have adopted the [PHP FIG PSR-2 Coding Standard](http://www.php-fig.org/psr/psr-2/) EXCEPT for the tabs vs spaces for indentation rule. PSR-2 says 4 spaces. I use tabs. No discussion.

To support indenting with tabs, I've defined a custom PSR-2 ruleset that extends the standard [PSR-2 ruleset used by PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer/blob/master/CodeSniffer/Standards/PSR2/ruleset.xml). You can find this ruleset in the root of this project at PSR2Tabs.xml


### Codesniffer

```bash
composer codensiffer
```

### Codefixer

```bash
composer codefixer
```