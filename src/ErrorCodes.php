<?php

namespace CodeHqDk\LinuxBashHelper;

/**
 * Info from https://shapeshed.com/unix-exit-codes/
 */
class ErrorCodes
{
    public const SUCCESS = 0;
    public const CATCHALL_FOR_GENERAL_ERRORS = 1;
    public const MISUSE_OF_SHELL_BUILTINS = 2;
    public const COMMAND_INVOKED_CANNOT_EXECUTE = 126;
    public const COMMAND_NOT_FOUND = 127;
    public const INVALID_ARGUMENT_TO = 128;
    public const SCRIPT_TERMINATED_BY_CONTROL_C = 130;
    public const EXIT_STATUS_OUT_OF_RANGE = 255;

    public const ERROR_MESSAGES =
    [
        self::CATCHALL_FOR_GENERAL_ERRORS => 'CATCHALL_FOR_GENERAL_ERRORS',
        self::MISUSE_OF_SHELL_BUILTINS => 'MISUSE_OF_SHELL_BUILTINS',
        self::COMMAND_INVOKED_CANNOT_EXECUTE => 'COMMAND_INVOKED_CANNOT_EXECUTE',
        self::COMMAND_NOT_FOUND => 'COMMAND_NOT_FOUND',
        self::INVALID_ARGUMENT_TO => 'INVALID_ARGUMENT_TO',
        self::SCRIPT_TERMINATED_BY_CONTROL_C => 'SCRIPT_TERMINATED_BY_CONTROL_C',
        self::EXIT_STATUS_OUT_OF_RANGE => 'EXIT_STATUS_OUT_OF_RANGE'
    ];
}
