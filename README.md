# Multi-Bank Interface

This project implements a Multi-Bank Interface in PHP using the Factory Pattern. It provides a single interface to connect to and interact with three different banks: GTBank, Zenith Bank, and Access Bank.

## Requirements

- PHP >= 8.1
- Composer

## Installation

1. Clone the repository to your local machine:

   ```shell
   git clone https://github.com/phonixcode/multibanks.git
   ```

2. Navigate to the project directory:

    ```shell
    cd multibanks
    ```
3. Install dependencies using Composer:

    ```shell
    composer install
    ```

## Usage

To use the Multi-Bank Interface, you can create instances of different banks using the BankFactory and interact with them through a single interface.

```shell
// Example usage:
$bankFactory = BankFactory::createBank('gtbank');
$bankFactory->verifyAccountNumber($payload);
$bankFactory->sendMoney($payload);
```

Replace `'gtbank'` with the desired bank name (`'gtbank'`, `'zenithbank'`, or `'accessbank'`).

## Testing

This project includes PHPUnit tests to ensure the correctness of the implementation. You can run the tests using the following command:

```shell
vendor/bin/phpunit tests
```


## Folder Structure

```shell
project/
│
├── app/
│   ├── BankInterface.php
│   ├── GTBank.php
│   ├── ZenithBank.php
│   ├── AccessBank.php
│   ├── BankFactory.php
│
├── tests/
│   ├── BankTest.php
│
├── examples/
│   ├── bank_interaction.php
│
└── composer.json
```

In this structure:

- `app/`: This directory contains all the source files for this project.

     - `BankInterface.php`: Interface defining the common functionality for interacting with banks.
     - `GTBank.php`, `ZenithBank.php`, `AccessBank.php`: Classes representing different banks, each implementing the BankInterface.
     - `BankFactory.php`: Class responsible for creating instances of different banks using the Factory Pattern.
- `tests/`: This directory contains all the unit tests for this project.

     - `BankTest.php`: PHPUnit test cases for testing the functionality of the banks and the bank factory.
- `examples/`: This directory contains the file `bank_interaction.php`, which demonstrates how to interact with the banks using the BankFactory.
- `composer.json`: The Composer configuration file is for managing dependencies and autoloading.


