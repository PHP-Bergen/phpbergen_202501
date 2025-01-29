<?php

namespace phpbergen\Attributes\Command;

use phpbergen\Attributes\Entities\User;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
  name: 'create:user',
  description: 'Creates a new user.',
  hidden: false,
  aliases: ['add:user']
)]
class CreateUserCommand extends Command
{

    protected function configure(): void
    {
        $this->addArgument(
          'username',
          InputArgument::REQUIRED,
          'The username of the user to create',
        );
        $this->addArgument(
          'email',
          InputArgument::REQUIRED,
          'The email of the user to create',
        );
        $this->addArgument(
          'password',
          InputArgument::REQUIRED,
          'The password of the user to create',
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int {
        $username = $input->getArgument('username');
        $email = $input->getArgument('email');
        $password = $input->getArgument('password');
        $output->writeln("Creating user $username with email $email and password $password");
        $user = new User($username, $email, $password);
        $output->writeln("User created");
        return Command::SUCCESS;
    }

}
