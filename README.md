# PhoneViewHelper

2015-1 phone view helper for mobile phone link 
by Gert-jan Dikkescheij, 2015-08-16 16:25:16, old #480, php
Description:
save it with this name : PhoneViewHelper.php
in this directory: typo3/sysext/fluid/Classes/ViewHelpers/Link/
and use: <f:link.phone phone="0049 123 456 7890" />

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
