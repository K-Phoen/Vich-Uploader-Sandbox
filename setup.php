<?php

// taken from sonata's sandbox (https://github.com/sonata-project/sandbox/blob/2.3/load_data.php)

$rootDir = __DIR__;

require_once __DIR__ . '/app/bootstrap.php.cache';

use Symfony\Component\Console\Output\OutputInterface;

// reset data
$fs = new \Symfony\Component\Filesystem\Filesystem;
$output = new \Symfony\Component\Console\Output\ConsoleOutput();

// does the parent directory have a parameters.yml file
//if (is_file(__DIR__.'/../parameters.demo.yml')) {
//    $fs->copy(__DIR__.'/../parameters.demo.yml', __DIR__.'/app/config/parameters.yml', true);
//}

if (!is_file(__DIR__.'/app/config/parameters.yml')) {
    $output->writeln('<error>no default apps/config/parameters.yml file</error>');

    exit(1);
}
/**
* @param $commands
* @param \Symfony\Component\Console\Output\ConsoleOutput $output
*
* @return boolean
*/
function execute_commands($commands, $output)
{
    foreach($commands as $command) {
        if (is_array($command)) {
            list($command, $canFail) = $command;
        } else {
            $canFail = false;
        }

        $output->writeln(sprintf('<info>Executing : </info> %s', $command));
        $p = new \Symfony\Component\Process\Process($command);
        $p->setTimeout(null);
        $p->run(function($type, $data) use ($output) {
            $output->write($data, false, OutputInterface::OUTPUT_RAW);
        });

        if (!$p->isSuccessful() && !$canFail) {
            return false;
        }

        $output->writeln("");
    }

    return true;
}

$output->writeln("<info>Resetting demo</info>");

foreach (array('images', 'cars', 'cars/back', 'cars/front') as $dir) {
    $fs->remove(sprintf('%s/web/%s', $rootDir, $dir));
    $fs->mkdir(sprintf('%s/web/%s', $rootDir, $dir));
}

$success = execute_commands(array(
    'rm -rf ./app/cache/*',

    array('./app/console propel:database:drop --force', $canFail = true),
    './app/console propel:database:create',
    './app/console propel:build',
    './app/console propel:sql:insert --force',
), $output);

if (!$success) {
    $output->writeln('<info>An error occurs when running a command!</info>');

    exit(1);
}

$output->writeln('<info>Done!</info>');

exit(0);
