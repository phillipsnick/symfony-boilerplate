<?php

// Reference https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/master/.php-cs-fixer.dist.php

return new PhpCsFixer\Config()
    ->setRules([
        '@Symfony' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'blank_line_before_statement' => true,
    ])
    ->setFinder(
        new PhpCsFixer\Finder()
             ->in(__DIR__)
             ->exclude('var')
     )
;
