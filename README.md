# SurveyMonkey API v3 Wrapper for PHP

A simple SurveyMonkey API wrapper for version 3 of their API.

# Requirements
- PHP 5.5+
- Composer - http://www.getcomposer.org

# Installation
Add the following to your composer.json under require:

    "require": {
        "clearmedia/surveymonkey-api": "dev-master"
    },

# Usage

1) Initiate a client with a long lived token:

    ``$client = new Spliced\SurveyMonkey\Client(MY_API_KEY, MY_API_TOKEN);``

2) Make calls:

    ``$client->getSurveys([]);``

Check out ``src/Api/*Trait.php`` for exposed methods in the Client class. There are also some additional usage examples in the incomplete test suite.
