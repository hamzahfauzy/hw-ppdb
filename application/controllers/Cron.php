<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller 
{
	public function __construct()
	{
	    parent::__construct();
		$this->load->library('Mailer');
		$this->load->library('Whatsapp');
	}
	
    function set($name, $data)
    {
        return $this->db->insert('queue_jobs',[
            'name' => $name,
            'data' => serialize((array) $data),
        ]);
    }
    
    function run()
    {
        $jobs = $this->db->where('status','queued')->get('queue_jobs')->result();
        foreach($jobs as $key => $job)
        {
            if($job->name == 'after_register')
            {
                $data = unserialize($job->data);
				$wa = $this->whatsapp->send($data['phone'],'after_register',$data);
				print_r($wa);
				echo "\n";
                $this->mailer->send($data['name'],$data['email'],"PPDB Baitun Naim - Pendaftaran Baru",$data['ringkasan'],$data['n']);
				$this->db->where('id',$job->id)->update('queue_jobs',[
				    'status' => 'executed',
				    'run_at' => date('Y-m-d H:i:s')
			    ]);
            }
        }
        
        echo "\nCron Success at ".date('Y-m-d H:i:s');
    }
}