<?php

namespace CodeHqDk\LinuxBashHelper\Tests;

use CodeHqDk\LinuxBashHelper\Bash;
use CodeHqDk\LinuxBashHelper\Environment;
use CodeHqDk\LinuxBashHelper\Exception\LinuxBashHelperException;
use PHPUnit\Framework\TestCase;

class BashTest extends TestCase
{
    public function testRunInvalidCommand()
    {
        $expected_error_message = "Running command 'invalid_c-o_mand 2> /dev/null' failed with result code 127 - 'COMMAND_NOT_FOUND'";

        $this->expectException(LinuxBashHelperException::class);
        $this->expectExceptionMessage($expected_error_message);;
        Bash::runCommand('invalid_c-o_mand' . Environment::SILENCE_BASH_COMMAND_OUTPUT);
    }

    public function testRunSuccessfullCommand()
    {
        $output = Bash::runCommand('uname -r');

        $this->assertIsArray($output);
    }
}