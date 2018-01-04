<?php
/**
 * Created Diego Furtado.
 ****************************************************************
 ****************************************************************
 * Esta funcao retorna um array para criacao de um formulario
 * frontEnd.
 *
 * $metadata = Entidade(AppBundle/Entity)
 * $component = ClassMetadata que pega os asserts criados
 * via annotations.
 ****************************************************************
 ****************************************************************
 */

namespace AbstractBundle\Resources\traits;


use Symfony\Component\Validator\Mapping\ClassMetadata;

trait GenerateForm
{

    /**
     * @param array $metadata
     * @param ClassMetadata $component
     * @return array
     */
    public function generateForm(array $metadata, ClassMetadata $component)
    {
        return array_reduce($metadata, function ($merge, $data) use ($component) {

            if (in_array($data['fieldName'], $component->getConstrainedProperties())) {

                return array_merge($merge, [$data['fieldName'] => [
                    'properties' => array_map(function ($value) {return $value->payload;},
                        $component->getPropertyMetadata(
                            $data['fieldName'])[0]->constraints)
                ]]);
            }

            return array_merge($merge, [$data['fieldName'] => []]);
        }, []);

    }
}