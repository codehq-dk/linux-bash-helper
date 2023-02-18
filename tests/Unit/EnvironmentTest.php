<?php

namespace CodeHqDk\LinuxBashHelper\Tests;

use CodeHqDk\LinuxBashHelper\Environment;
use PHPUnit\Framework\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetPhpPath()
    {
        $this->assertIsString(Environment::getPhpPath());
    }
    public function testGetComposerPath()
    {
        $this->assertIsString(Environment::getComposerPath());
    }
    public function testGetGitPath()
    {
        $this->assertIsString(@Environment::getGitPath());
    }
}