<?php

namespace CodeHqDk\LinuxBashHelper;

use CodeHqDk\LinuxBashHelper\Exception\LinuxBashHelperException;

class Environment
{
    private const PROFILE_FILE = '.profile';
    private const ZSH_FILE = '.zshrc';
    private const BASHRC_FILE = '.bashrc';
    private const SET_PATH = 'cd ~/;source ' . self::BASHRC_FILE . " " . self::ZSH_FILE . " " . self::PROFILE_FILE;

    public const SILENCE_BASH_COMMAND_OUTPUT = ' 2> /dev/null';
    public const SEND_STANDARD_ERRORS_TO_STANDARD_OUTPUT = ' 2>&1';

    /**
     * @throws LinuxBashHelperException
     */
    public static function getPhpPath(): string
    {
        $command_to_run = self::SET_PATH . self::SILENCE_BASH_COMMAND_OUTPUT . ';which php';
        $output = Bash::runCommand($command_to_run);

        if ($output[0] === null) {
            throw new LinuxBashHelperException('cannot find php');
        }

        return $output[0];
    }

    /**
     * @throws LinuxBashHelperException
     */
    public static function getComposerPath(): string
    {
        $command_to_run = self::SET_PATH . self::SILENCE_BASH_COMMAND_OUTPUT . ';which composer';
        $output = Bash::runCommand($command_to_run);

        if ($output[0] === null) {
            throw new LinuxBashHelperException('cannot find composer');
        }

        return $output[0];
    }

    /**
     * @throws LinuxBashHelperException
     */
    public static function getGitPath(): string
    {
        $command_to_run = self::SET_PATH . self::SILENCE_BASH_COMMAND_OUTPUT . ';which git';
        $output = Bash::runCommand($command_to_run);

        if ($output[0] === null) {
            throw new LinuxBashHelperException('cannot find git');
        }

        return $output[0];
    }
}
