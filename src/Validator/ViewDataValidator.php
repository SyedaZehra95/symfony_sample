<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;
use App\Dto\RequestDto;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class ViewDataValidator extends ValidationData
{

    /**
     * @param RequestDto $requestdto
     * @param ValidatorInterface $validator
     * @return array
     */
    public function ValidateViewDataDto(RequestDto $requestdto, ValidatorInterface $validator)
    {
        $validationErrors = $validator->validate($requestdto);

        $messages = [];
        foreach ($validationErrors as $violation) {
            $messages[$violation->getPropertyPath()] = $violation->getMessage();
        }

        $viewData = $requestdto->getViewData()->getFieldset();
        var_dump($requestdto->getApiKey());
        var_dump(self::API_KEY);

        if($requestdto->getApiKey() != self::API_KEY)
            $messages['apiKey'] = 'API key is invalid';

        if (isset($this->validations[$requestdto->getCommand()]))
            $validationData = $this->validations[$requestdto->getCommand()];
        else
            return $messages;

        foreach ($viewData as $fieldName => $fieldVal) {

            if ($validationData[$fieldName]['required'] && ($fieldVal == '' || empty($fieldVal))) {
                $messages[$fieldName] = 'This value should not be blank';
                continue;
            }

            if (!empty($fieldVal) && !empty($validationData[$fieldName]['regex'])) {
                if ((!preg_match($validationData[$fieldName]['regex'], $fieldVal))) {
                    $messages[$fieldName] = 'This value is not valid';
                    continue;
                }
            }
        }
        return $messages;

    }
}