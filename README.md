# SurveyMonkey API v3 for PHP

A simple SurveyMonkey API for version 3.

# Requirements
- PHP 5.5+
- Composer - http://www.getcomposer.org

# Installation
Add the following to your composer.json under require:

    "require": {
        "clearmedia/surveymonkey-api": "dev-master"
    }

# Usage

1) Initiate a client with a long lived token:

    ``$client = new ClearMedia\SurveyMonkey\Client(MY_API_TOKEN);``

2) Make calls:

    ``$client->getSurveys([]);``

3) Check out ``src/Api/*Trait.php`` for exposed methods in the Client class.
