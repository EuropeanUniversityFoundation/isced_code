<?php

namespace Drupal\isced_code;

/**
 * Provides list of ISCED codes.
 */
class IscedCodeManager {

  /**
   * An array of key => ISCED code pairs.
   */
  protected $iscedCodes;

  /**
   * Curated list of ISCED codes.
   *
   * @return array
   *   An array of key => ISCED code pairs.
   */
  public static function getList() {
    $isced_codes = [
      // Broad field
      '00 Generic programmes and qualifications' => [
        // Narrow field
        '001 Basic programmes and qualifications' => [
          // Detailed field
          '0011' => '0011 Basic programmes and qualifications',
        ],
        // Narrow field
        '002 Literacy and numeracy' => [
          // Detailed field
          '0021' => '0021 Literacy and numeracy',
        ],
        // Narrow field
        '003 Personal skills and development' => [
          // Detailed field
          '0031' => '0031 Personal skills and development',
        ],
      ],
      // Broad field
      '01 Education' => [
        // Narrow field
        '011 Education' => [
          // Detailed field
          '0111' => '0111 Education science',
          '0112' => '0112 Training for pre-school teachers',
          '0113' => '0113 Teacher training without subject specialisation',
          '0114' => '0114 Teacher training with subject specialisation',
        ],
      ],
      // Broad field
      '02 Arts and humanities' => [
        // Narrow field
        '021 Arts' => [
          // Detailed field
          '0211' => '0211 Audio-visual techniques and media production',
          '0212' => '0212 Fashion, interior and industrial design',
          '0213' => '0213 Fine arts',
          '0214' => '0214 Handicrafts',
          '0215' => '0215 Music and performing arts',
        ],
        // Narrow field
        '022 Humanities (except languages)' => [
          // Detailed field
          '0221' => '0221 Religion and theology',
          '0222' => '0222 History and archaeology',
          '0223' => '0223 Philosophy and ethics',
        ],
        // Narrow field
        '023 Languages' => [
          // Detailed field
          '0231' => '0231 Language acquisition',
          '0232' => '0232 Literature and linguistics',
        ],
      ],
      // Broad field
      '03 Social sciences, journalism and information' => [
        // Narrow field
        '031 Social and behavioural sciences' => [
          // Detailed field
          '0311' => '0311 Economics',
          '0312' => '0312 Political sciences and civics',
          '0313' => '0313 Psychology',
          '0314' => '0314 Sociology and cultural studies',
        ],
        // Narrow field
        '032 Journalism and information' => [
          // Detailed field
          '0321' => '0321 Journalism and reporting',
          '0322' => '0322 Library, information and archival studies',
        ],
      ],
      // Broad field
      '04 Business, administration and law' => [
        // Narrow field
        '041 Business and administration' => [
          // Detailed field
          '0411' => '0411 Accounting and taxation',
          '0412' => '0412 Finance, banking and insurance',
          '0413' => '0413 Management and administration',
          '0414' => '0414 Marketing and advertising',
          '0415' => '0415 Secretarial and office work',
          '0416' => '0416 Wholesale and retail sales',
          '0417' => '0417 Work skills',
        ],
        // Narrow field
        '042 Law' => [
          // Detailed field
          '0421' => '0421 Law',
        ],
      ],
      // Broad field
      '05 Natural Sciences, mathematics and statistics' => [
        // Narrow field
        '051 Biological and related sciences' => [
          // Detailed field
          '0511' => '0511 Biology',
          '0512' => '0512 Biochemistry',
        ],
        // Narrow field
        '052 Environment' => [
          // Detailed field
          '0521' => '0521 Environmental sciences',
          '0522' => '0522 Natural environments and wildlife',
        ],
        // Narrow field
        '053 Physical sciences' => [
          // Detailed field
          '0531' => '0531 Chemistry',
          '0532' => '0532 Earth Sciences',
          '0533' => '0533 Physics',
        ],
        // Narrow field
        '054 Mathematics and statistics' => [
          // Detailed field
          '0541' => '0541 Mathematics',
          '0542' => '0542 Statistics',
        ],
      ],
      // Broad field
      '06 Information and Communication Technologies (ICTs)' => [
        // Narrow field
        '061 Information and Communication Technologies (ICTs)' => [
          // Detailed field
          '0611' => '0611 Computer use',
          '0612' => '0612 Database and network design and administration',
          '0613' => '0613 Software and applications development and analysis',
        ],
      ],
      // Broad field
      '07 Engineering, manufacturing and construction' => [
        // Narrow field
        '071 Engineering and engineering trades' => [
          // Detailed field
          '0711' => '0711 Chemical engineering and processes',
          '0712' => '0712 Environmental protection technology',
          '0713' => '0713 Electricity and energy',
          '0714' => '0714 Electronics and automation',
          '0715' => '0715 Mechanics and metal trades',
          '0716' => '0716 Motor vehicles, ships and aircraft',
        ],
        // Narrow field
        '072 Manufacturing and processing' => [
          // Detailed field
          '0721' => '0721 Food processing',
          '0722' => '0722 Materials (glass, paper, plastic and wood)',
          '0723' => '0723 Textiles (clothes, footwear and leather)',
          '0724' => '0724 Mining and extraction',
        ],
        // Narrow field
        '073 Architecture and construction' => [
          // Detailed field
          '0731' => '0731 Architecture and town planning',
          '0732' => '0732 Building and civil engineering',
        ],
      ],
      // Broad field
      '08 Agriculture, forestry, fisheries and veterinary ' => [
        // Narrow field
        '081 Agriculture' => [
          // Detailed field
          '0811' => '0811 Crop and livestock production',
          '0812' => '0812 Horticulture',
        ],
        // Narrow field
        '082 Forestry' => [
          // Detailed field
          '0821' => '0821 Forestry',
        ],
        // Narrow field
        '083 Fisheries' => [
          // Detailed field
          '0831' => '0831 Fisheries',
        ],
        // Narrow field
        '084 Veterinary' => [
          // Detailed field
          '0841' => '0841 Veterinary',
        ],
      ],
      // Broad field
      '09 Health and welfare' => [
        // Narrow field
        '091 Health' => [
          // Detailed field
          '0911' => '0911 Dental studies',
          '0912' => '0912 Medicine',
          '0913' => '0913 Nursing and midwifery',
          '0914' => '0914 Medical diagnostic and treatment technology',
          '0915' => '0915 Therapy and rehabilitation',
          '0916' => '0916 Pharmacy',
          '0917' => '0917 Traditional and complementary medicine and therapy',
        ],
      ],
      // Broad field
      '10 Services' => [
        // Narrow field
        '101 Personal services' => [
          // Detailed field
          '1011' => '1011 Domestic services',
          '1012' => '1012 Hair and beauty services',
          '1013' => '1013 Hotel, restaurants and catering',
          '1014' => '1014 Sports',
          '1015' => '1015 Travel, tourism and leisure',
        ],
        // Narrow field
        '102 Hygiene and occupational health services' => [
          // Detailed field
          '1021' => '1021 Community sanitation',
          '1022' => '1022 Occupational health and safety',
        ],
        // Narrow field
        '103 Security services' => [
          // Detailed field
          '1031' => '1031 Military and defence',
          '1032' => '1032 Protection of persons and property',
        ],
        // Narrow field
        '104 Transport services' => [
          // Detailed field
          '1041' => '1041 Transport services',
        ],
      ],
    ];

    return $isced_codes;
  }

  /**
   * Get an array of key => ISCED code pairs, as options.
   *
   * @return array
   *   An array of key => ISCED code pairs.
   *
   * @see \Drupal\ewp_core\IscedCodeManager::getList()
   */
  public function getOptions() {
    // Populate the ISCED code list if it is not already populated.
    if (!isset($this->iscedCodes)) {
      $this->iscedCodes = static::getList();
    }

    $options = [];
    foreach ($this->iscedCodes as $broad => $narrow_array) {
      $group = [];
      foreach ($narrow_array as $detailed_array) {
        // Don't print the narrow field at all...
        // $narrow_key = substr($narrow, 0, 3);
        // $group[$narrow_key] = $narrow;
        foreach ($detailed_array as $key => $value) {
          $group[$key] = $value;
        }
      }
      $options[$broad] = $group;
    }

    return $options;
  }

}
