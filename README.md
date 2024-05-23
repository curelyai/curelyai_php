# CurelyAI

CurelyAI is a PHP client library for interacting with the Curely AI API. This package simplifies the process of sending messages to the AI chatbot and receiving responses.

## Usage

To install the CurelyAI package, use Composer:

```sh
composer require curelyai/curelyai

# USAGE
require 'vendor/autoload.php'; #'not needed for php frameworks like laravel'

use CurelyAI\ChatClient;

$chatClient = new ChatClient('your_bot_key');
$response = $chatClient->chat('Hello, how are you?');
echo $response;
