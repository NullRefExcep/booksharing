<?php

return array_merge(require(__DIR__ . '/installed_modules.php'), [
    'core' => ['class' => 'nullref\core\Module'],
    'book' => [
        'class' => 'app\modules\book\Module',
    ],
]);