# ISCED code

Drupal module providing ISCED codes for Fields of Education as select options.

## Installation

Include the repository in your project's `composer.json` file:

    "repositories": [
        ...
        {
            "type": "vcs",
            "url": "https://github.com/EuropeanUniversityFoundation/isced_code"
        }
    ],

Then you can require the package as usual:

    composer require euf/isced_code

Finally, install the module:

    drush en isced_code

## Usage

The **ISCED code** field type becomes available in the Field UI so it can be added to any fieldable entity like any other field type.

The ISCED Broad definition are used as `optgroup` elements in the select form element, while the ISCED Detailed definitions are used as `option` elements - the user can only select the Detailed level.

---

## TODO

Print the ISCED Narrow definitions as disabled options in the list.
