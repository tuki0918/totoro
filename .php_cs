<?php

$header = <<<EOF
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

return Symfony\CS\Config\Config::create()
    ->fixers([
        'function_typehint_space',
        'multiline_array_trailing_comma',
        'unused_use',
        'multiline_array_trailing_comma',
        'concat_with_spaces',
        'ordered_use',
        'short_array_syntax',
        'header_comment',
    ])
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__ . '/src')
    )
;
