<?php


/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Alexander Bigga <alexander.bigga@slub-dresden.de>, SLUB Dresden
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Check if the given event is already in the past
 *
 * = Examples =
 *
 * <code event="{event}">
 * <f:if condition="<se:if.isPastEvent event='{event}' />">
 * </code>
 * <output>
 * 1
 * </output>
 *
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @api
 */

class Tx_SlubEvents_ViewHelpers_Condition_IsPastEventViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

    /**
     * Render the supplied DateTime object as a formatted date.
     *
     * @param Tx_SlubEvents_Domain_Model_Event $event
     * @return boolean
     * @author Alexander Bigga <alexander.bigga@slub-dresden.de>
     * @api
     */
    public function render($event) {

        $isPast = FALSE;

        // deadline reached...
        if (is_object($event->getSubEndDateTime())) {

            if ($event->getEndDateTime()->getTimestamp() < time()) {

                $isPast = TRUE;

            }

        }

        return $isPast;

    }
}
?>
