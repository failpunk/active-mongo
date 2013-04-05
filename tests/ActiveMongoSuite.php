<?php
require "../lib/ActiveMongo.php";
require "Models.php";
require "ReferencesTest.php";
require "ValidatorsTest.php";
require "QueryTest.php";
require "HookTest.php";
require "ArrayTest.php";
require "Bugs.php";
require "CacheTest.php";
require "__SleepTest.php";

define ("DB", "test");

class ActiveMongoSuite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new ActiveMongoSuite('ActiveMongo Tests');
        $suite->addTestSuite('QueryTest');
        $suite->addTestSuite('ReferencesTest');
        $suite->addTestSuite('ValidatorsTest');
        $suite->addTestSuite('BugsTest');
        $suite->addTestSuite('HookTest');
        $suite->addTestSuite('ArrayTest');
        $suite->addTestSuite('SleepTest');
        $suite->addTestSuite('CacheTest');
        return $suite;
    }

}
