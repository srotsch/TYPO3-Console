<?php
$EM_CONF[$_EXTKEY] = [
  'title' => 'TYPO3 Console',
  'description' => 'A reliable and powerful command line interface for TYPO3 CMS',
  'category' => 'cli',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => '',
  'clearCacheOnLoad' => 0,
  'author' => 'Helmut Hummel',
  'author_email' => 'info@helhum.io',
  'author_company' => 'helhum.io',
  'version' => '5.0.3',
  'constraints' => [
    'depends' => [
      'php' => '7.0.0-7.2.99',
      'typo3' => '8.7.0-9.0.99',
      'extbase' => '8.7.0-9.0.99',
      'extensionmanager' => '8.7.0-9.0.99',
      'fluid' => '8.7.0-9.0.99',
      'install' => '8.7.0-9.0.99',
      'scheduler' => '8.7.0-9.0.99',
      'saltedpasswords' => '8.7.0-9.0.99',
    ],
    'conflicts' => [
        'dbal' => '',
    ],
    'suggests' => [
    ],
  ],
];
