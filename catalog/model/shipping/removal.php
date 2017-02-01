<?php
class ModelShippingremoval extends Model {
	function getQuote($address) {
		$this->load->language('shipping/removal');
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('removal_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
	
		if (!$this->config->get('removal_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();
	
		if ($status) {
			$quote_data = array();
			
      		$quote_data['removal'] = array(
        		'code'         => 'removal.removal',
        		'title'        => $this->language->get('text_description'),
        		'cost'         => $this->config->get('removal_cost'),
        		'tax_class_id' => $this->config->get('removal_tax_class_id'),
				'text'         => $this->currency->format($this->tax->calculate($this->config->get('removal_cost'), $this->config->get('removal_tax_class_id'), $this->config->get('config_tax')))
      		);

      		$method_data = array(
        		'code'       => 'removal',
        		'title'      => $this->language->get('text_title'),
        		'quote'      => $quote_data,
				'sort_order' => $this->config->get('removal_sort_order'),
        		'error'      => false
      		);
		}
	
		return $method_data;
	}
}
?>