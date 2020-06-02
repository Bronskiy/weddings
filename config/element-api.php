<?php

use craft\elements\MatrixBlock;
use craft\helpers\UrlHelper;

return [
  'endpoints' => [
    'api/portfolio/<blockId:\d+>.json' => function($blockId) {
      return [
        'elementType' => MatrixBlock::class,
        'criteria' => ['ownerId' => '32', 'fieldId' => '35', 'id' => $blockId],
        'pretty' => true,
        'transformer' => function(MatrixBlock $element){
          $fotografii = [];
          foreach ($element->getFieldValue('fotografii')->all() as $el) {
            $fotografii[] = [
              'images_cropped' => $el->getUrl('image370x275'),
              'images' => $el->getUrl(),
              'images_id' => $el->id,
            ];
          }
          return [
            'photos' => $fotografii,
            //'image' => $element->getFieldValue('izobrazhenie')->one()->getUrl(),
          ];
          /*
          return [
          'image' => $element->getFieldValue('izobrazhenie')->one()->getUrl(),
          'images' => $element->getFieldValue('fotografii')->all(),
        ];
        */
      },
    ];
  },
]
];
