<?php
class ControllerManagementError extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('management/error');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('management/error');

		$this->getList();
	}

	public function add() {
		$this->load->language('management/error');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('management/error');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_management_error->addZohoError($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_code'])) {
				$url .= '&filter_code=' . $this->request->get['filter_code'];
			}

			if (isset($this->request->get['filter_reference'])) {
				$url .= '&filter_reference=' . $this->request->get['filter_reference'];
			}

			if (isset($this->request->get['filter_error_message'])) {
				$url .= '&filter_error_message=' . $this->request->get['filter_error_message'];
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('management/error');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('management/error');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_management_error->editZohoError($this->request->get['id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_code'])) {
				$url .= '&filter_code=' . $this->request->get['filter_code'];
			}

			if (isset($this->request->get['filter_reference'])) {
				$url .= '&filter_reference=' . $this->request->get['filter_reference'];
			}

			if (isset($this->request->get['filter_error_message'])) {
				$url .= '&filter_error_message=' . $this->request->get['filter_error_message'];
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_section'])) {
				$url .= '&filter_section=' . $this->request->get['filter_section'];
			}

			if (isset($this->request->get['filter_data_log'])) {
				$url .= '&filter_data_log=' . $this->request->get['filter_data_log'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('management/error');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('management/error');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $id) {
				$this->model_management_error->deleteZohoError($id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_code'])) {
				$url .= '&filter_code=' . $this->request->get['filter_code'];
			}

			if (isset($this->request->get['filter_reference'])) {
				$url .= '&filter_reference=' . $this->request->get['filter_reference'];
			}

			if (isset($this->request->get['filter_error_message'])) {
				$url .= '&filter_error_message=' . $this->request->get['filter_error_message'];
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_section'])) {
				$url .= '&filter_section=' . $this->request->get['filter_section'];
			}

			if (isset($this->request->get['filter_data_log'])) {
				$url .= '&filter_data_log=' . $this->request->get['filter_data_log'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {

		$data['status_list'] = array();

		$data['status_list'][] = array(
			'text'  => $this->language->get('text_open'),
			'value' => 'open'
		);

		$data['status_list'][] = array(
			'text'  => $this->language->get('text_resolved'),
			'value' => 'resolved'
		);

		$data['status_list'][] = array(
			'text'  => $this->language->get('text_for_re_checking'),
			'value' => 'for re-checking'
		);

		if (isset($this->request->get['filter_code'])) {
			$filter_code = $this->request->get['filter_code'];
		} else {
			$filter_code = '';
		}

		if (isset($this->request->get['filter_reference'])) {
			$filter_reference = $this->request->get['filter_reference'];
		} else {
			$filter_reference = '';
		}
	
		if (isset($this->request->get['filter_error_message'])) {
			$filter_error_message = $this->request->get['filter_error_message'];
		} else {
			$filter_error_message = '';
		}

		if (isset($this->request->get['filter_id'])) {
			$filter_id = $this->request->get['filter_id'];
		} else {
			$filter_id = '';
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = $this->request->get['filter_status'];
		} else {
			$filter_status = '';
		}

		if (isset($this->request->get['filter_section'])) {
			$filter_section = $this->request->get['filter_section'];
		} else {
			$filter_section = '';
		}

		if (isset($this->request->get['filter_data_log'])) {
			$filter_data_log = $this->request->get['filter_data_log'];
		} else {
			$filter_data_log = '';
		}

		if (isset($this->request->get['filter_remarks'])) {
			$filter_remarks = $this->request->get['filter_remarks'];
		} else {
			$filter_remarks = '';
		}

		if (isset($this->request->get['filter_data_return'])) {
			$filter_data_return = $this->request->get['filter_data_return'];
		} else {
			$filter_data_return = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'm.name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_id'])) {
			$url .= '&filter_id=' . $this->request->get['filter_id'];
		}

		if (isset($this->request->get['filter_code'])) {
			$url .= '&filter_code=' . $this->request->get['filter_code'];
		}

		if (isset($this->request->get['filter_error_message'])) {
			$url .= '&filter_error_message=' . $this->request->get['filter_error_message'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_reference'])) {
			$url .= '&filter_reference=' . $this->request->get['filter_reference'];
		}

		if (isset($this->request->get['filter_section'])) {
			$url .= '&filter_section=' . $this->request->get['filter_section'];
		}

		if (isset($this->request->get['filter_data_log'])) {
			$url .= '&filter_data_log=' . $this->request->get['filter_data_log'];
		}

		if (isset($this->request->get['filter_remarks'])) {
			$url .= '&filter_remarks=' . $this->request->get['filter_remarks'];
		}

		if (isset($this->request->get['filter_data_return'])) {
			$url .= '&filter_data_return=' . $this->request->get['filter_data_return'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('management/error/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('management/error/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['managements'] = array();

		$filter_data = array(
			'filter_id'       		=> $filter_id,
			'filter_code'       	=> $filter_code,
			'filter_error_message' 	=> $filter_error_message,
			'filter_status'       	=> $filter_status,
			'filter_reference'		=> $filter_reference,
			'filter_section' 		=> $filter_section,
			'filter_data_log'       => $filter_data_log,
			'filter_remarks'       	=> $filter_remarks,
			'filter_data_return' 	=> $filter_data_return,
			'sort'              => $sort,
			'order'             => $order,
			'start'             => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'             => $this->config->get('config_limit_admin')
		);

		$zoho_sync_error = $this->model_management_error->getTotalZohoError($filter_data);

		$results = $this->model_management_error->getZohoErrorData($filter_data);

		foreach ($results as $result) {
			$data['managements'][] = array(
				'id' 			=> $result['id'],
				'error'			=> $result['error_message'],
				'code'			=> $result['code'],
				'reference'		=> $result['reference'],
				'status'		=> $result['status'],
				'section'		=> $result['section'],
				'data_log'		=> $result['data_log'],
				'edit'			=> $this->url->link('management/error/edit', 'user_token=' . $this->session->data['user_token'] . '&id=' . $result['id'] . $url, true)
			);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if (isset($this->request->get['filter_id'])) {
			$url .= '&filter_id=' . $this->request->get['filter_id'];
		}

		if (isset($this->request->get['filter_code'])) {
			$url .= '&filter_code=' . $this->request->get['filter_code'];
		}

		if (isset($this->request->get['filter_error_message'])) {
			$url .= '&filter_error_message=' . $this->request->get['filter_error_message'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_reference'])) {
			$url .= '&filter_reference=' . $this->request->get['filter_reference'];
		}

		if (isset($this->request->get['filter_section'])) {
			$url .= '&filter_section=' . $this->request->get['filter_section'];
		}

		if (isset($this->request->get['filter_data_log'])) {
			$url .= '&filter_data_log=' . $this->request->get['filter_data_log'];
		}

		if (isset($this->request->get['filter_remarks'])) {
			$url .= '&filter_remarks=' . $this->request->get['filter_remarks'];
		}

		if (isset($this->request->get['filter_data_return'])) {
			$url .= '&filter_data_return=' . $this->request->get['filter_data_return'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . '&sort=m.name' . $url, true);
		$data['sort_code'] = $this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . '&sort=m.code' . $url, true);
		$data['sort_date_added'] = $this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . '&sort=m.date_added' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_id'])) {
			$url .= '&filter_id=' . $this->request->get['filter_id'];
		}

		if (isset($this->request->get['filter_code'])) {
			$url .= '&filter_code=' . $this->request->get['filter_code'];
		}

		if (isset($this->request->get['filter_error_message'])) {
			$url .= '&filter_error_message=' . $this->request->get['filter_error_message'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_reference'])) {
			$url .= '&filter_reference=' . $this->request->get['filter_reference'];
		}

		if (isset($this->request->get['filter_section'])) {
			$url .= '&filter_section=' . $this->request->get['filter_section'];
		}

		if (isset($this->request->get['filter_data_log'])) {
			$url .= '&filter_data_log=' . $this->request->get['filter_data_log'];
		}

		if (isset($this->request->get['filter_remarks'])) {
			$url .= '&filter_remarks=' . $this->request->get['filter_remarks'];
		}

		if (isset($this->request->get['filter_error_message'])) {
			$url .= '&filter_data_return=' . $this->request->get['filter_data_return'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $zoho_sync_error;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($zoho_sync_error) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($zoho_sync_error - $this->config->get('config_limit_admin'))) ? $zoho_sync_error : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $zoho_sync_error, ceil($zoho_sync_error / $this->config->get('config_limit_admin')));

		$data['filter_id'] = $filter_id;
		$data['filter_code'] = $filter_code;
		$data['filter_error_message'] = $filter_error_message;
		$data['filter_status'] = $filter_status;
		$data['filter_reference'] = $filter_reference;
		$data['filter_section'] = $filter_section;
		$data['filter_data_log'] = $filter_data_log;
		$data['filter_remarks'] = $filter_remarks;
		$data['filter_data_return'] = $filter_data_return;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('management/error_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['id'])) {
			$data['error_id'] = $this->error['id'];
		} else {
			$data['error_id'] = '';
		}

		if (isset($this->error['code'])) {
			$data['error_code'] = $this->error['error_code'];
		} else {
			$data['error_code'] = '';
		}

		if (isset($this->error['error_message'])) {
			$data['error_message'] = $this->error['error_message'];
		} else {
			$data['error_message'] = '';
		}

		if (isset($this->error['status'])) {
			$data['error_status'] = $this->error['status'];
		} else {
			$data['error_status'] = '';
		}

		if (isset($this->error['reference'])) {
			$data['error_reference'] = $this->error['reference'];
		} else {
			$data['error_reference'] = '';
		}

		if (isset($this->error['section'])) {
			$data['error_section'] = $this->error['section'];
		} else {
			$data['error_section'] = '';
		}

		if (isset($this->error['data_log'])) {
			$data['error_data_log'] = $this->error['data_log'];
		} else {
			$data['error_data_log'] = '';
		}

		if (isset($this->error['remarks'])) {
			$data['error_remarks'] = $this->error['remarks'];
		} else {
			$data['error_remarks'] = '';
		}

		if (isset($this->error['data_return'])) {
			$data['error_data_return'] = $this->error['data_return'];
		} else {
			$data['error_data_return'] = '';
		}

		$url = '';

		if (isset($this->request->get['filter_id'])) {
			$url .= '&filter_id=' . $this->request->get['filter_id'];
		}

		if (isset($this->request->get['filter_code'])) {
			$url .= '&filter_code=' . $this->request->get['filter_code'];
		}

		if (isset($this->request->get['filter_error_message'])) {
			$url .= '&filter_error_message=' . $this->request->get['filter_error_message'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_reference'])) {
			$url .= '&filter_reference=' . $this->request->get['filter_reference'];
		}

		if (isset($this->request->get['filter_section'])) {
			$url .= '&filter_section=' . $this->request->get['filter_section'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_data_log'])) {
			$url .= '&filter_data_log=' . $this->request->get['filter_data_log'];
		}

		if (isset($this->request->get['filter_remarks'])) {
			$url .= '&filter_remarks=' . $this->request->get['filter_remarks'];
		}

		if (isset($this->request->get['filter_data_return'])) {
			$url .= '&filter_data_return=' . $this->request->get['filter_data_return'];
		}
//id,code,error_message,status,reference,section,data_log,remarks,data_return
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['id'])) {
			$data['action'] = $this->url->link('management/error/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('management/error/edit', 'user_token=' . $this->session->data['user_token'] . '&id=' . $this->request->get['id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('management/error', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$management_info = $this->model_management_error->getZohoError($this->request->get['id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$data['store'] = HTTP_CATALOG;

		if (isset($this->request->post['id'])) {
			$data['id'] = $this->request->post['id'];
		} elseif (!empty($management_info)) {
			$data['id'] = $management_info['id'];
		} else {
			$data['id'] = '';
		}

		if (isset($this->request->post['code'])) {
			$data['code'] = $this->request->post['code'];
		} elseif (!empty($management_info)) {
			$data['code'] = $management_info['code'];
		} else {
			$data['code'] = '';
		}

		if (isset($this->request->post['reference'])) {
			$data['reference'] = $this->request->post['reference'];
		} elseif (!empty($management_info)) {
			$data['reference'] = $management_info['reference'];
		} else {
			$data['reference'] = '';
		}

		if (isset($this->request->post['error_message'])) {
			$data['error_message'] = $this->request->post['error_message'];
		} elseif (!empty($management_info)) {
			$data['error_message'] = $management_info['error_message'];
		} else {
			$data['error_message'] = '';
		}

		$data['status_list'] = array();

		$data['status_list'][] = array(
			'text'  => $this->language->get('text_open'),
			'value' => 'open'
		);

		$data['status_list'][] = array(
			'text'  => $this->language->get('text_resolved'),
			'value' => 'resolved'
		);

		$data['status_list'][] = array(
			'text'  => $this->language->get('text_for_re_checking'),
			'value' => 'for re-checking'
		);

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($management_info)) {
			$data['status'] = $management_info['status'];
		} else {
			$data['status'] = '';
		}

		if (isset($this->request->post['section'])) {
			$data['section'] = $this->request->post['section'];
		} elseif (!empty($management_info)) {
			$data['section'] = $management_info['section'];
		} else {
			$data['section'] = '';
		}

		if (isset($this->request->post['data_log'])) {
			$data['data_log'] = $this->request->post['data_log'];
		} elseif (!empty($management_info)) {
			$data['data_log'] = $management_info['data_log'];
		} else {
			$data['data_log'] = '';
		}


		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('management/error_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'management/error')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$management_info = $this->model_management_error->getZohoErrorByCode($this->request->post['code']);

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'management/error')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}