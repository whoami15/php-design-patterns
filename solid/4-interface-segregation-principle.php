<?php

// "Clients should not be forced to depend upon interfaces that they do not use."
// Robert C. Martin

/* Bad example */

interface Workable
{
    public function canCode();
    public function code();
    public function test();
}

class ProgrammerBadClass implements Workable
{
    public function canCode()
    {
        return true;
        // The programmer always can code
    }
    public function code()
    {
        return 'coding';
    }
    public function test()
    {
        return 'testing in localhost';
    }
}

class TesterBadClass implements Workable
{
    public function canCode()
    {
        return false;
    }
    public function code()
    {
        throw new Exception('Opps! I can\’t code');
        // Tester does not need this function
    }
    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagementBadClass
{
    public function processCode(Workable $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}

/* Good example */

interface Codeable
{
    public function code();
}
interface Testable
{
    public function test();
}

class Programmer implements Codeable, Testable
{
    public function code()
    {
        return 'coding';
    }
    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements Testable
{
    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Codeable $member)
    {
        // ProjectManager does not need to validate if Codeable can code
        $member->code();
    }
}
