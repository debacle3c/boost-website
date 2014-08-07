<?php

require_once(dirname(__FILE__) . '/../common/code/boost.php');

(new BoostArchive(array(
    'pattern' => '/^[\/]([^\/]+)[\/](.*)$/',
    'archive_subdir' => false, // the result zips don't have the tag subdir
    'zipfile' => true, // stored as a zipfile
    'archive_dir' => RESULTS_DIR,
    'override_extractor' => 'raw' // we always want raw output
)))->display_from_archive(
display_from_archive(
  array(
  //~ array(path-regex,raw|simple|text|cpp|boost_book_html|boost_libs_html,mime-type),
  )
);
