<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'string' => 'El campo :attribute debe ser una cadena de texto.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'min' => [
        'numeric' => 'El campo :attribute debe ser de al menos :min.',
    ],
    'exists' => 'El :attribute seleccionado no es válido.',

    'attributes' => [
        'name' => 'nombre',
        'description' => 'descripción',
        'price' => 'precio',
        'category_id' => 'categoría',
    ],
];