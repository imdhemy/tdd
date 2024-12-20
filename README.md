# Test-Driven Development

## Pre-requisites

- PHP 8.3 or higher
- Composer

## Setup

Clone this repository and navigate to the project directory. Then install the dependencies.

```bash
git clone https://github.com/imdhemy/tdd.git
```

```
cd tdd
```

```
composer install
```

## Example

Suppose we have a report like this:

| Instrument | Shares | Price | Total |
|------------|--------|-------|-------|
| IBM        | 1000   | 25    | 25000 |
| GE         | 400    | 100   | 40000 |
|            |        | Total | 42500 |

To make a multi-currency report, we need to add currencies:

| Instrument | Shares | Price   | Total     |
|------------|--------|---------|-----------|
| IBM        | 1000   | 25 USD  | 25000 USD |
| GE         | 400    | 100 EUR | 40000 EUR |
|            |        | Total   | 42500 USD |

We also need to add a currency conversion table:

| From | To  | Rate |
|------|-----|------|
| USD  | EUR | 0.5  |

For instance:

```
5$ + 10€ = 10$

-->
= 5$ + 0.5 * 10€ 
= 5$ + 5$ = $10 
