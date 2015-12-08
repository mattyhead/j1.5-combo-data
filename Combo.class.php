<?php
/*
Class Combo provides arrays shaped for Joomla1.5 select/options
and lookups for resulting form responses.

 */
class Combo {
    public $prefixes = array(
        '1' => '',
        '2' => 'Mr.',
        '3' => 'Mrs.',
        '4' => 'Ms.',
        '5' => 'Dr.',
    );
    public $suffixes = array(
        '1' => '',
        '2' => 'Jr.',
        '3' => 'Sr.',
        '4' => 'II',
        '5' => 'III',
    );
    public $states = array(
        'AL' => 'Alabama',
        'AK' => 'Alaska',
        'AS' => 'American',
        'AZ' => 'Arizona',
        'AR' => 'Arkansas',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'DC' => 'Dist. of Columbia',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'GU' => 'Guam',
        'HI' => 'Hawaii',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'IA' => 'Iowa',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'ME' => 'Maine',
        'MD' => 'Maryland',
        'MH' => 'Marshall',
        'MA' => 'Massachusetts',
        'MI' => 'Michigan',
        'FM' => 'Micronesia',
        'MN' => 'Minnesota',
        'MS' => 'Mississippi',
        'MO' => 'Missouri',
        'MT' => 'Montana',
        'NE' => 'Nebraska',
        'NV' => 'Nevada',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NY' => 'New York',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'MP' => 'Northern',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PW' => 'Palau',
        'PA' => 'Pennsylvania',
        'PR' => 'Puerto Rico',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'VI' => 'Virgin Islands',
        'WA' => 'Washington',
        'WV' => 'West Virginia',
        'WI' => 'Wisconsin',
        'WY' => 'Wyoming',
    );

    public function setComboData($arr) {
        foreach ($arr as $idx => $value) {
            $return[] = (object) array('idx' => $idx, 'value' => $value);
        }
        return $return;
    }

    public function getPrefix($idx) {
        return $this->prefixes[$idx];
    }

    public function getPrefixes() {

        return $this->setComboData($this->prefixes);
    }

    public function getSuffix($idx) {
        return $this->suffixes[$idx];
    }

    public function getSuffixes() {
        return $this->setComboData($this->suffixes);
    }

    public function getUSState($idx) {
        return $this->states[$idx];
    }

    public function getUSStates() {
        return $this->setComboData($arr);
    }
}