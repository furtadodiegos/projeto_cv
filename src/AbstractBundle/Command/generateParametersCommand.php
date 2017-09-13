<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 13/09/17
 * Time: 12:53
 */

namespace AbstractBundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;
use AbstractBundle\Command\BuildParameters;

class generateParametersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('app:get-parameters')
            ->setDescription('Atualiza os parametros referentes a conexao com o banco de dados
            no arquivo parameters.yml');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $output->writeln([
            'Bem vindo ao Projeto_CV do Diego Furtado!',
            'Por favor, insira os dados de conexão com o banco de dados para realizar o deploy da aplicacão:',
            '',
        ]);

        $bp = new BuildParameters($output);

        $questions = array();
        $parameters = array();

        foreach ($bp->getQuestions() as $key => $value) {
            $question = new Question($value);
            $param = $helper->ask($input, $output, $question);

            $questions[] = $key.': '.$param;
            $parameters[$key] = $param;
        }

        $output->writeln([
            '===============',
            '',
            '',
            'Parâmetros:',
        ]);

        $output->writeln(array_values($questions));

        $isCorrect = new ConfirmationQuestion('Os parâmetros estão corretos?[y,n]', false);
        $answer = $helper->ask($input, $output, $isCorrect);

        if ($answer) {
            $configs = $bp->generateConfigs($parameters);

            if ($configs) {
                $output->writeln([
                    '100%==========!',
                    'Ohhh yeah! O arquivo parameters.yml foi atualizado com sucesso.',
                ]);
            } else {
                $output->writeln('Ohhh noooooo! Alguma errado não esta certo.');
                return;
            }
        } else {
            $output->writeln('Ação cancelada pelo usuário.');
            return;
        }
    }
}