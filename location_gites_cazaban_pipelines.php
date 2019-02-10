<?php
/**
 * Utilisations de pipelines par Location des gites du domaine Cazaban
 *
 * @plugin     Location des gites du domaine Cazaban
 * @copyright  2019
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Location_gites_cazaban\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function location_gites_cazaban_paiement_location_donnees($flux) {
	if ($flux['args']['montant_paye'] == 0.00) {
			$flux['data']['options']['acompte'] = 30;
	}
	return $flux;
}
