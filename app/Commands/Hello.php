<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Hello extends Command
{
	// the name of the command (the part after "php console")
	protected static $defaultName = 'app:hello';

	protected function configure()
	{
		$this
			->setDescription('The traditional Hello World app.')
			->setHelp('php console app:hello [--name="World"]')
			->addOption('name', null, InputOption::VALUE_REQUIRED, "What's your name?", "World")
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		// ... put here the code to run in your command
		$message = sprintf('Hello, %s!', $input->getOption('name'));

		$output->writeLn($message);

		// this method must return an integer number with the "exit status code"
		// of the command. You can also use these constants to make code more readable

		// return this if there was no problem running the command
		// (it's equivalent to returning int(0))
		return Command::SUCCESS;

		// or return this if some error happened during the execution
		// (it's equivalent to returning int(1))
		// return Command::FAILURE;
	}
}
