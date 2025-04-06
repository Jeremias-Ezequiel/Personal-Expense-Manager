<?php

require_once __DIR__ . '/../model/CategoryModel.php';

class CategoryView extends CategoryModel
{

    public function showCategories()
    {
        $data = Parent::getCategories();

        foreach ($data as $element) {

            echo '<option value=' . $element['id'] . '>' . $element['name'] . '</option>';
        }
    }
}
