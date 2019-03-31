<?php

namespace App\Dto;

class ViewData {

    private $fieldset = [];

    private $whereFieldset = [];

    private $paging = ['Offset' => 0, 'Limit' => 10];

    /**
     * Get fieldset.
     *
     * @return fieldset.
     */
    public function getFieldset(): array
    {
        return $this->fieldset;
    }

    /**
     * Set fieldset.
     *
     * @param fieldset the value to set.
     */
    public function setFieldset(array $fieldset)
    {
        $this->fieldset = $fieldset;
    }

    /**
     * Get whereFieldset.
     *
     * @return whereFieldset.
     */
    public function getWhereFieldset(): array
    {
        return $this->whereFieldset;
    }

    /**
     * Set whereFieldset.
     *
     * @param whereFieldset the value to set.
     */
    public function setWhereFieldset($whereFieldset)
    {
        $this->whereFieldset = $whereFieldset;
    }

    /**
     * Get paging.
     *
     * @return paging.
     */
    public function getPaging(): array
    {
        return $this->paging;
    }

    /**
     * Set paging.
     *
     * @param paging the value to set.
     */
    public function setPaging($paging)
    {
        $this->paging = $paging;
    }

    public function populateFromArray($data) {

        if(isset($data['fieldSet'])) {
            $this->setFieldset($data['fieldSet']);
        }

        if(isset($data['whereFieldSet'])) {
            $this->setWhereFieldset($data['whereFieldSet']);
        }

        if(isset($data['paging'])) {
            $this->setPaging($data['paging']);
        }
    }
}
