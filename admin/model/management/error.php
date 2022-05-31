<?php
//id,code,error_message,status,reference,section,data_log,remarks,data_return
class ModelManagementError extends Model {
	public function addZohoError($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "zoho_sync_error SET code = '" . $this->db->escape($data['code']) . "', reference = '" . $this->db->escape($data['reference']) . "', error_message = '" . $this->db->escape($data['error_message']) . "', data_log = '" . $this->db->escape($data['data_log']) . "', status = '" . $this->db->escape($data['status']) . "', section = '" . $this->db->escape($data['section']) . "'");

		return $this->db->getLastId();
	}

	public function editZohoError($id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "zoho_sync_error SET code = '" . $this->db->escape($data['code']) . "', reference = '" . $this->db->escape($data['reference']) . "', error_message = '" . $this->db->escape($data['error_message']) . "', data_log = '" . $this->db->escape($data['data_log']) . "', status = '" . $this->db->escape($data['status']) . "', section = '" . $this->db->escape($data['section']) . "' WHERE id = '" . (int)$id . "'");
	}

	public function deleteZohoError($id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "zoho_sync_error WHERE id = '" . (int)$id . "'");
	}

	public function getZohoError($id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "zoho_sync_error WHERE id = '" . (int)$id . "'");

		return $query->row;
	}

	public function getZohoErrorByCode($code) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "zoho_sync_error WHERE code = '" . $this->db->escape($code) . "'");

		return $query->row;
	}

	public function getZohoErrorData($data = array()) {
		$implode = array();

		$order_statuses = $this->config->get('config_complete_status');

		foreach ($order_statuses as $order_status_id) {
			$implode[] = "o.order_status_id = '" . (int)$order_status_id . "'";
		}

		$sql = "SELECT *, (SELECT COUNT(*) FROM `" . DB_PREFIX . "order` o WHERE (" . implode(" OR ", $implode) . ") AND o.marketing_id = m.id) AS orders FROM " . DB_PREFIX . "zoho_sync_error m";

		$implode = array();
//id,code,error_message,status,reference,section,data_log,remarks,data_return
		/*
		if (!empty($data['filter_code'])) {
			$implode[] = "m.code = '" . $this->db->escape($data['filter_code']) . "'";
		}

		if (!empty($data['filter_reference'])) {
			$implode[] = "m.reference = '" . $this->db->escape($data['filter_reference']) . "'";
		}
		*/

		if (!empty($data['filter_code'])) {
			$implode[] = "m.code LIKE '" . $this->db->escape($data['filter_code']) . "%'";
		}

		if (!empty($data['filter_reference'])) {
			$implode[] = "m.reference LIKE '" . $this->db->escape($data['filter_reference']) . "%'";
		}
		
		if (!empty($data['filter_status'])) {
			$implode[] = "m.status = '" . $this->db->escape($data['filter_status']) . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sort_data = array(
			'm.code'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY m.code";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalZohoError($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "zoho_sync_error";

		$implode = array();

		if (!empty($data['filter_code'])) {
			$implode[] = "code = '" . $this->db->escape($data['filter_code']) . "'";
		}

		/*if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}*/

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}
}