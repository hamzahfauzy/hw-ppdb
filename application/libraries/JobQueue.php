<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobQueue
{
    private $CI;
	public function __construct()
	{
		$this->CI = &get_instance();
		$this->CI->load->library('Mailer');
		$this->CI->load->library('Whatsapp');
	}
	
    function set($name, $data)
    {
        return $this->CI->db->insert('queue_jobs',[
            'name' => $name,
            'data' => serialize((array) $data),
        ]);
    }
    
    function run_jobs()
    {
        $jobs = $this->CI->db->where('status','queued')->get('queue_jobs')->result();
        foreach($jobs as $key => $job)
        {
            if($jobs->name == 'after_register')
            {
                $data = unserialize($job->data);
                $this->CI->mailer->send($data['name'],$data['email'],"PPDB Baitun Naim - Pendaftaran Baru",$data['ringkasan'],$data['n']);
				$this->CI->whatsapp->send($data['phone'],'after_register',$data);
				$this->CI->db->where('id',$job->id)->update('queue_jobs',[
				    'status' => 'executed',
				    'run_at' => date('Y-m-d H:i:s')
			    ]);
            }
        }
    }
}