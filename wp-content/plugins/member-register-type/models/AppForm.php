<?php

class AppForm {

    function __construct() {
        
    }

    public static function adoptive_family() {
        return [
            'form_name' => 'form_adoptive_family',
            'submit' => false,
            'fields' => [
                [
                    'type' => 'hidden',
                    'name' => 'user_type',
                    'value' => 'adoptive_family',
                ],
                [
                    'type' => 'text',
                    'label' => 'First Name',
                    'name' => 'first_name',
                ],
                [
                    'type' => 'text',
                    'label' => 'Last Name',
                    'name' => 'last_name',
                ],
                [
                    'type' => 'select',
                    'label' => 'Adoption Agency',
                    'name' => 'agency_id',
                    'options' => Dot::get_user_id_role('adoption_agency'),
                ],
                [
                    'type' => 'radio',
                    'label' => 'Gender',
                    'name' => 'gender',
                    'options' => [
                        'male' => 'Man',
                        'female' => 'Women',
                    ],
                ],
                [
                    'type' => 'radio',
                    'label' => 'Marital Status',
                    'name' => 'marital_status',
                    'options' => [
                        'single' => 'Single',
                        'couple' => 'Couple',
                    ],
                ],
            ]
        ];
    }

    public static function adoption_agency() {
        return [
            'form_name' => 'form_adoption_agency',
            'submit' => false,
            'fields' => [
                [
                    'type' => 'hidden',
                    'name' => 'user_type',
                    'value' => 'adoption_agency',
                ],
                [
                    'type' => 'text',
                    'label' => 'Agency or Attorney Name',
                    'name' => 'agency_attorney_name',
                ],
                [
                    'type' => 'text',
                    'label' => 'Agency Website',
                    'name' => 'agency_website',
                ],
                [
                    'type' => 'text',
                    'label' => 'First Name',
                    'name' => 'first_name',
                ],
                [
                    'type' => 'text',
                    'label' => 'Last Name',
                    'name' => 'last_name',
                ],
                [
                    'type' => 'text',
                    'label' => 'Phone Number',
                    'name' => 'phone',
                ],
                [
                    'type' => 'text',
                    'label' => 'Street Address',
                    'name' => 'street_address',
                ],
                [
                    'type' => 'text',
                    'label' => 'City',
                    'name' => 'city',
                ],
                [
                    'type' => 'text',
                    'label' => 'State',
                    'name' => 'state',
                ],
                [
                    'type' => 'text',
                    'label' => 'Postal / Zip Code',
                    'name' => 'zip',
                ],
            ]
        ];
    }

    public static function birth_mother() {
        return [
            'form_name' => 'form_birth_mother',
            'submit' => false,
            'fields' => [
                [
                    'type' => 'hidden',
                    'name' => 'user_type',
                    'value' => 'birth_mother',
                ],
                [
                    'type' => 'select',
                    'label' => 'Adoption Agency',
                    'name' => 'agency_id',
                    'required' => true,
                    'options' => Dot::get_user_id_role('adoption_agency'),
                ],
                [
                    'type' => 'text',
                    'label' => 'First Name',
                    'name' => 'first_name',
                    'required' => true,
                ],
                [
                    'type' => 'text',
                    'label' => 'Last Name',
                    'name' => 'last_name',
                ],
                [
                    'type' => 'radio',
                    'label' => 'Gender',
                    'name' => 'gender',
                    'required' => true,
                    'options' => [
                        'male' => 'Man',
                        'female' => 'Women',
                    ],
                ],
                [
                    'type' => 'radio',
                    'label' => 'Marital Status',
                    'name' => 'marital_status',
                    'options' => [
                        'single' => 'Single',
                        'couple' => 'Couple',
                    ],
                ],
            ]
        ];
    }

    public static function user_filter() {
        return [
            'form_name' => 'user_filter',
            'submit' => false,
            'fields' => [
                [
                    'type' => 'select',
                    'label' => 'Roles',
                    'name' => 'roles',
                    'options' => Dot::get_roles_select_option(),
                ],
                [
                    'type' => 'select',
                    'label' => 'Membership',
                    'name' => 'membership',
                    'options' => Dot::get_posts_select_option('memberpressproduct'),
                ],
                [
                    'type' => 'select',
                    'label' => 'Adoption Agency',
                    'name' => 'agency_id',
                    'required' => true,
                    'options' => Dot::get_user_id_role('adoption_agency'),
                ],
                [
                    'type' => 'select',
                    'label' => 'Locations',
                    'name' => 'location',
                    'required' => true,
                    'options' => Dot::get_groups_select_option('Location'),
                ],
            ],
        ];
    }

}
