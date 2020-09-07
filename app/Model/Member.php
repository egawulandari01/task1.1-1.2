<?php

class Member extends AppModel
{
    var $name = 'member';
    var $validate = [
        'NIK' => [
            'rule' => 'notBlank',
            'message' => 'NIK is required'
            // 'alphaNumeric' => [
            //     'rule' => ['min', 16],
            //     'required' => true,
            //     'message' => 'NIK harus diisi minimal 16 digit'
            // ]
        ],
        'nama' => [
            'rule' => 'notBlank',
            'message' => 'Nama is required'
            // 'alphaNumeric' => [
            //     'rule' => ['minLength', 15],
            //     'required' => true,
            //     'message' => 'Nama harus diisi minimal 15 digit'
            // ]
        ]
    ];
}
