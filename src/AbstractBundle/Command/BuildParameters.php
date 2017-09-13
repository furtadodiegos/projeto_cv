<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 13/09/17
 * Time: 12:53
 */

namespace AbstractBundle\Command;


use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Yaml;

class BuildParameters
{

    /**
     * @var OutputInterface
     */
    private $output;

    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function getQuestions()
    {
        return array(
            'database_host'     => 'Digite o host: ',
            'database_port'     => 'Digite a porta: ',
            'database_name'     => 'Digite o nome do Schema: ',
            'database_user'     => 'Digite o usuário: ',
            'database_password' => 'Digite a senha: ',
        );
    }

    public function generateConfigs(array $configs)
    {
        $configs['file'] = __DIR__.'/../../../app/config/parameters.yml';

        if (!is_file($configs['file'])) {
            throw new \InvalidArgumentException(sprintf('O arquivo "%s" não existe!', $configs['file']));
        }

        $this->output->writeln([
            'Atualizando o arquivo: parameters.yml',
            '0%=',
        ]);

        return $this->processConfigs($configs);
    }

    private function processConfigs(array $configs)
    {
        $filePath = $configs['file'];
        unset($configs['file']);
        $yamlParser = new Parser();

        $existingValues = $yamlParser->parse(file_get_contents($filePath));

        if (!isset($existingValues['parameters'])) {
            throw new \InvalidArgumentException('A chave "parameters" está faltando.');
        }

        $this->output->writeln('20%==');

        $expectedParams = (array) $existingValues['parameters'];
        $actualValues['parameters'] = array_merge($expectedParams, $configs);

        $this->output->writeln('60%======');

        file_put_contents($filePath, "# Esse arquivo foi atualizado por: AppBundle/Command #\n" . Yaml::dump($actualValues, 99));

        return true;
    }
}
