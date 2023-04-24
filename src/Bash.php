<?php

namespace CodeHqDk\LinuxBashHelper;

use CodeHqDk\LinuxBashHelper\Exception\LinuxBashHelperException;

class Bash
{
    /**
     * @throws LinuxBashHelperException
     */
    public static function runCommand(string $command_to_run, bool $debug = false): array
    {
        if ($debug === true) {
            $success = exec($command_to_run . Environment::SEND_STANDARD_ERRORS_TO_STANDARD_OUTPUT, $output, $result_code);
            var_dump($command_to_run);
            var_dump($success);
            var_dump($output);
            var_dump($result_code);
            die('');
        }

        $success = exec($command_to_run, $output, $result_code);

        if ($result_code !== ErrorCodes::SUCCESS) {
            $error_message = ErrorCodes::ERROR_MESSAGES[$result_code] ?? 'Unknown error';
            throw new LinuxBashHelperException("Running command '{$command_to_run}' failed with result code {$result_code} - '{$error_message}'");
        }

        if ($success === false) {
            throw new LinuxBashHelperException('Running command ' . $command_to_run . ' failed - unknown reason');
        }

        return $output;
    }
}
