	if ($this->form_validation->run())
	{

		$this->load->library('upload');

		if (!empty($_FILES['image']['name']))
		{
			$config['upload_path'] = './site_elements/image';
			$config['allowed_types'] = 'png';
			$config['max_size'] = '2000';
			$config['max_width']  = '850';
			$config['min_width']  = '850';
			$config['max_height']  = '660';
			$config['min_height']  = '660';

			$config['encrypt_name']  = TRUE;  
				

			$this->upload->initialize($config);

			if ($this->upload->do_upload('image'))
			{
				$imagedata = $this->upload->data();
				$image_name = $imagedata['file_name'];
			}
			else
			{
				$this->session->set_flashdata('msg','<span class="text-danger">'.$this->upload->display_errors().'</span>');
				redirect('controlpanel/Products/addnew');

			}

		}
	}