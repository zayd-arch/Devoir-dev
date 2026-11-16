<?php

return [
    'confirmed' => 'Le champ :attribute et sa confirmation ne correspondent pas.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'image' => 'Le champ :attribute doit être une image.',
    'max' => [
        'numeric' => 'Le champ :attribute ne doit pas être supérieur à :max.',
        'file' => 'Le fichier :attribute ne doit pas dépasser :max kilo-octets.',
        'string' => 'Le champ :attribute ne doit pas contenir plus de :max caractères.',
        'array' => 'Le champ :attribute ne doit pas contenir plus de :max éléments.',
    ],
    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'Le champ :attribute doit être au moins égal à :min.',
        'file' => 'Le fichier :attribute doit peser au moins :min kilo-octets.',
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
        'array' => 'Le champ :attribute doit contenir au moins :min éléments.',
    ],
    'password' => 'Le mot de passe est incorrect.',
    'required' => 'Le champ :attribute est obligatoire.',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'unique' => 'Cette valeur du champ :attribute est déjà utilisée.',
    'uploaded' => 'Le téléchargement du champ :attribute a échoué.',

    'custom' => [],

    'attributes' => [
        'name' => 'nom',
        'email' => 'adresse e-mail',
        'phone' => 'téléphone',
        'section' => 'section',
        'image' => 'image',
        'password' => 'mot de passe',
        'password_confirmation' => 'confirmation du mot de passe',
    ],
];
