<?php
 class Tpl extends Smarty
 {
	//������ͼ�ļ� 
	//���췽��ȥִ�и���Ĺ��췽�� 
	public function __construct()
	{
		parent::__construct();//ִ�и���Ĺ��췽�� 
	   
	    $this->template_dir="./view/";//����smarty��ͼ�����е�ģ���·��
        $this->compile_dir="./view_c/";//����smarty�����ļ���·��

        //$this->cache_dir = "./cache/";//���û����ļ���·�� 

        //����������������
        $this->left_delimiter = "<{"; 
         $this->right_delimiter = "}>"; 	

        //$this->caching = 2; //�������ɸ��ԵĻ�������
        //$this->cache_lifetime = 20; //�����ʱ��[��λ����Ϊ��λ] 
		
		
	}
	 
	 
	 
 }
?>