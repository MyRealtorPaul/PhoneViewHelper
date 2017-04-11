<?php
namespace TYPO3\CMS\Fluid\ViewHelpers\Link;

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */
/**
 * Phone link view helper.
 * Generates a phone link
 *
 * = Examples
 *
 * <code title="basic phone link">
 * <f:link.phone phone="+49 123 456 7890" />
 * </code>
 * <output>
 * <a href="tel:+49 123 456 7890">+49 123 456 7890</a>
 * </output>
 *
 * <code title="Phone link with custom linktext">
 * <f:link.phone phone="+49 123 456 7890">some custom content</f:link.phone>
 * </code>
 * <output>
 * <a href="tel:+49 123 456 7890">some custom content</a>
 * </output>
 */
class PhoneViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {

   /**
    * @var string
    */
   protected $tagName = 'a';

   /**
    * Arguments initialization
    *
    * @return void
    */
   public function initializeArguments() {
      $this->registerUniversalTagAttributes();
      $this->registerTagAttribute('name', 'string', 'Specifies the name of an anchor');
      $this->registerTagAttribute('rel', 'string', 'Specifies the relationship between the current document and the linked document');
      $this->registerTagAttribute('rev', 'string', 'Specifies the relationship between the linked document and the current document');
      $this->registerTagAttribute('target', 'string', 'Specifies where to open the linked document');
   }

   /**
    * @param string $phone The phone number to be turned into a link.
    * @return string Rendered phone link
    */
   public function render($phone) {
      $linkHref = 'tel:' . $phone;
      $linkText = $phone;

      $tagContent = $this->renderChildren();
      if ($tagContent !== NULL) {
         $linkText = $tagContent;
      }
      $this->tag->setContent($linkText);
      $this->tag->addAttribute('href', $linkHref);
      $this->tag->forceClosingTag(TRUE);
      return $this->tag->render();
   }
}
