<?php
class Template
{

	protected $CI;

	// We'll use a constructor, as you can't directly call a function
	// from a property definition.
	public function __construct()
	{
		// Assign the CodeIgniter super-object
		$this->CI = &get_instance();
	}
	public function template_admin($content, $data = null)
	{
		$data['ini_header'] = $this->CI->load->view('admin/layout/header.php', $data, true);
		$data['ini_sidebar'] = $this->CI->load->view('admin/layout/sidebar.php', $data, true);
		$data['ini_konten'] = $this->CI->load->view($content, $data, true);
		$data['ini_footer'] = $this->CI->load->view('admin/layout/footer.php', $data, true);
		$this->CI->load->view('admin/layout/body', $data);
	}

	public function template_packages($content, $data = null)
	{
		$data['ini_header'] = $this->CI->load->view('packages/layout_packages/header.php', $data, true);
		$data['ini_content'] = $this->CI->load->view($content, $data, true);
		$data['ini_footer'] = $this->CI->load->view('packages/layout_packages/footer.php', $data, true);
		$this->CI->load->view('packages/layout_packages/body.php', $data);
	}
}
