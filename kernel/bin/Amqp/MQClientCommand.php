<?php

namespace Amqp;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Command\Command;
use Amqp\Queue\TestQueue;
use Amqp\Queue\Subscribe;

set_time_limit(0);

class MQClientCommand extends Command
{
	/**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
        ->setName('amqp:start:all')
        ->setAliases(array('amqp:start:all'))
        ->setDescription('amqp queue starting all')
        ->setDefinition(array(
            new InputOption(
                'filter', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'A string pattern used to match entities that should be processed.'
            ),
            new InputArgument( //REQUIRED 
                'dest-path', InputArgument::OPTIONAL, 'The path to generate your repository classes.'
            )
        ))
        ->setHelp(<<<EOT

EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	//(new TestQueue())->start();
        (new Subscribe())->start();
    }
}