# PhoneViewHelper

2015-1 phone view helper for mobile phone link 
by Gert-jan Dikkescheij, 2015-08-16 16:25:16, old #480, php
Description:
save it with this name : PhoneViewHelper.php
in this directory: typo3/sysext/fluid/Classes/ViewHelpers/Link/
and use: <f:link.phone phone="0049 123 456 7890" />

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
