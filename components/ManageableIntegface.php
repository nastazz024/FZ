<?php

namespace app\components;

interface ManageableIntegface
{
    /**
     * @return array
     */
    public function getSearchFields();

    /**
     * @return array
     */
    public function getShowFields();

    /**
     * @return array
     */
    public function getEditFields();

    /**
     * @return array
     */
    public function hasImageField();


    /**
     * @param array $fieldParams
     * @return array
     */
    public function getSearchListOptions(array $fieldParams);

    /**
     * @return array
     */
    public function getCountOptions();

    /**
     * @param array $fieldParams
     * @param int $id
     * @return array
     */
    public function getCounts(array $fieldParams, $id);

    /**
     * @return array
     */
    public function query(array $filter, $orderBy = '');

}