<?php
namespace Megafry\MfTeaser\DataProcessing;

/***
 *
 * This file is part of the "Megafry Teaser-Element" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Eugen Fritz <eugene.fritz@hotmail.com>
 *
 ***/

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

/**
 * Class for data processing for the content element "My new content element"
 */
class MfTeaserProcessor implements DataProcessorInterface
{

   /**
    * Process data for the content element "Megafry Teaser-Element"
    *
    * @param ContentObjectRenderer $cObj The data of the content element or page
    * @param array $contentObjectConfiguration The configuration of Content Object
    * @param array $processorConfiguration The configuration of this processor
    * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
    * @return array the processed data as key/value store
    */
   public function process(
      ContentObjectRenderer $cObj,
      array $contentObjectConfiguration,
      array $processorConfiguration,
      array $processedData
   )
   {
      //$processedData['foo'] = 'This variable will be passed to Fluid';

      return $processedData;
   }
}
