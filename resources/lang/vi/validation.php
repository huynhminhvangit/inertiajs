<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Thuộc tính :attribute phải được chấp nhận.',
    'active_url' => 'Thuộc tính :attribute is not a valid URL.',
    'after' => 'Thuộc tính :attribute must be a date after :date.',
    'after_or_equal' => 'Thuộc tính :attribute must be a date after or equal to :date.',
    'alpha' => 'Thuộc tính :attribute must only contain letters.',
    'alpha_dash' => 'Thuộc tính :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'Thuộc tính :attribute must only contain letters and numbers.',
    'array' => 'Thuộc tính :attribute must be an array.',
    'before' => 'Thuộc tính :attribute must be a date before :date.',
    'before_or_equal' => 'Thuộc tính :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'Thuộc tính :attribute must be between :min and :max.',
        'file' => 'Thuộc tính :attribute must be between :min and :max kilobytes.',
        'string' => 'Thuộc tính :attribute must be between :min and :max characters.',
        'array' => 'Thuộc tính :attribute must have between :min and :max items.',
    ],
    'boolean' => 'Thuộc tính :attribute field must be true or false.',
    'confirmed' => 'Thuộc tính :attribute confirmation does not match.',
    'date' => 'Thuộc tính :attribute is not a valid date.',
    'date_equals' => 'Thuộc tính :attribute must be a date equal to :date.',
    'date_format' => 'Thuộc tính :attribute does not match the format :format.',
    'different' => 'Thuộc tính :attribute and :other must be different.',
    'digits' => 'Thuộc tính :attribute must be :digits digits.',
    'digits_between' => 'Thuộc tính :attribute must be between :min and :max digits.',
    'dimensions' => 'Thuộc tính :attribute has invalid image dimensions.',
    'distinct' => 'Thuộc tính :attribute field has a duplicate value.',
    'email' => 'Thuộc tính :attribute must be a valid email address.',
    'ends_with' => 'Thuộc tính :attribute must end with one of the following: :values.',
    'exists' => 'Thuộc tính selected :attribute is invalid.',
    'file' => 'Thuộc tính :attribute must be a file.',
    'filled' => 'Thuộc tính :attribute field must have a value.',
    'gt' => [
        'numeric' => 'Thuộc tính :attribute must be greater than :value.',
        'file' => 'Thuộc tính :attribute must be greater than :value kilobytes.',
        'string' => 'Thuộc tính :attribute must be greater than :value characters.',
        'array' => 'Thuộc tính :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Thuộc tính :attribute must be greater than or equal :value.',
        'file' => 'Thuộc tính :attribute must be greater than or equal :value kilobytes.',
        'string' => 'Thuộc tính :attribute must be greater than or equal :value characters.',
        'array' => 'Thuộc tính :attribute must have :value items or more.',
    ],
    'image' => 'Thuộc tính :attribute must be an image.',
    'in' => 'Thuộc tính selected :attribute is invalid.',
    'in_array' => 'Thuộc tính :attribute field does not exist in :other.',
    'integer' => 'Thuộc tính :attribute must be an integer.',
    'ip' => 'Thuộc tính :attribute must be a valid IP address.',
    'ipv4' => 'Thuộc tính :attribute must be a valid IPv4 address.',
    'ipv6' => 'Thuộc tính :attribute must be a valid IPv6 address.',
    'json' => 'Thuộc tính :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'Thuộc tính :attribute must be less than :value.',
        'file' => 'Thuộc tính :attribute must be less than :value kilobytes.',
        'string' => 'Thuộc tính :attribute must be less than :value characters.',
        'array' => 'Thuộc tính :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'Thuộc tính :attribute must be less than or equal :value.',
        'file' => 'Thuộc tính :attribute must be less than or equal :value kilobytes.',
        'string' => 'Thuộc tính :attribute must be less than or equal :value characters.',
        'array' => 'Thuộc tính :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Thuộc tính :attribute must not be greater than :max.',
        'file' => 'Thuộc tính :attribute must not be greater than :max kilobytes.',
        'string' => 'Thuộc tính :attribute must not be greater than :max characters.',
        'array' => 'Thuộc tính :attribute must not have more than :max items.',
    ],
    'mimes' => 'Thuộc tính :attribute must be a file of type: :values.',
    'mimetypes' => 'Thuộc tính :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'Thuộc tính :attribute must be at least :min.',
        'file' => 'Thuộc tính :attribute must be at least :min kilobytes.',
        'string' => 'Thuộc tính :attribute must be at least :min characters.',
        'array' => 'Thuộc tính :attribute must have at least :min items.',
    ],
    'multiple_of' => 'Thuộc tính :attribute must be a multiple of :value.',
    'not_in' => 'Thuộc tính selected :attribute is invalid.',
    'not_regex' => 'Thuộc tính :attribute format is invalid.',
    'numeric' => 'Thuộc tính :attribute must be a number.',
    'password' => 'Thuộc tính password is incorrect.',
    'present' => 'Thuộc tính :attribute field must be present.',
    'regex' => 'Thuộc tính :attribute format is invalid.',
    'required' => 'Thuộc tính :attribute field is required.',
    'required_if' => 'Thuộc tính :attribute field is required when :other is :value.',
    'required_unless' => 'Thuộc tính :attribute field is required unless :other is in :values.',
    'required_with' => 'Thuộc tính :attribute field is required when :values is present.',
    'required_with_all' => 'Thuộc tính :attribute field is required when :values are present.',
    'required_without' => 'Thuộc tính :attribute field is required when :values is not present.',
    'required_without_all' => 'Thuộc tính :attribute field is required when none of :values are present.',
    'prohibited' => 'Thuộc tính :attribute field is prohibited.',
    'prohibited_if' => 'Thuộc tính :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'Thuộc tính :attribute field is prohibited unless :other is in :values.',
    'same' => 'Thuộc tính :attribute and :other must match.',
    'size' => [
        'numeric' => 'Thuộc tính :attribute must be :size.',
        'file' => 'Thuộc tính :attribute must be :size kilobytes.',
        'string' => 'Thuộc tính :attribute must be :size characters.',
        'array' => 'Thuộc tính :attribute must contain :size items.',
    ],
    'starts_with' => 'Thuộc tính :attribute must start with one of the following: :values.',
    'string' => 'Thuộc tính :attribute must be a string.',
    'timezone' => 'Thuộc tính :attribute must be a valid zone.',
    'unique' => 'Thuộc tính :attribute has already been taken.',
    'uploaded' => 'Thuộc tính :attribute failed to upload.',
    'url' => 'Thuộc tính :attribute format is invalid.',
    'uuid' => 'Thuộc tính :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
