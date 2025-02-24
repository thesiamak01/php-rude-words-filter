# PHP Rude Words Filter

![Banner](https://raw.githubusercontent.com/thesiamak01/php-rude-words-filter/refs/heads/main/cover.png)

A simple PHP function to filter out rude or inappropriate words from a given text. This script provides a way to replace rude words with a specified replacement string (default: `***`).

## Features

- Filters persian rude words from a given text.
- Uses regular expressions to match rude words even with additional characters in between.
- Configurable replacement for rude words (default: `***`).
- Can handle a list of rude words in a separate file.

## Installation

1. Clone the repository or download the files:
    ```bash
    git clone https://github.com/thesiamak01/php-rude-words-filter.git
    ```

2. Include the function file in your project:
    ```php
    include_once 'path/to/filterRudeWords.php';
    ```

3. Create a list of rude words in a PHP array and store them in `rudeWords.php`.

## Usage

1. Include or require the `filterRudeWords.php` in your script.
2. Call the `filterRudeWords` function with the following parameters:
   - `$text`: The input string that may contain rude words.
   - `$rudeWords`: An array of words to filter out.
   - `$replacement`: The string to replace rude words with (optional, default is `***`).

Example:

```php
include_once('filterRudeWords.php');
$rudeWords = include_once('rudeWords.php');

$inputText = "This is a test message with some rude words like XXX and YYY";
$filteredText = filterRudeWords($inputText, $rudeWords, '###');

echo $filteredText;
```

## License
This project is open-source and available under the MIT License.

## Contribution
Feel free to fork the repository and submit pull requests for improvements or bug fixes.
