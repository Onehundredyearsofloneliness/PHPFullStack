<?php
$upImg = $_FILES["upImg"]; //����ͼ�����顣
//��ȡͼ�����չ��
//�ж�ͼ��Ĵ�С
//�ж��ļ�������
//Ϊ�ļ�������
//�ϴ�ͼƬ  move_uploaded_file();
class Upload{
	public $arr;
	function __construct($arrImg){ 
		$this->arr = $arrImg;
	}
	//�õ���չ��
	function getExtName(){
		//ֱ���õ� �ļ����� $this->arr["name"];  1.jpg     demo.test.jpg
		$extName = end(explode(".",$this->arr["name"]));
		return $extName;
	}
	//���ͼ���С
	function checkSize(){
		if($this->arr["size"]>2000000){
			echo "ͼ��̫���ˣ���������ϴ�";
			exit;
		}
	}
	//���ͼ������  jpg  gif  png 
	function checkType($extName){
		if($extName!="jpg" && $extName!="gif" && $extName!="png"){
			echo "ͼ�����Ͳ���ȷ,��������ϴ�";
			exit;
		}
	}
	//Ϊ�ļ�������:  //   upload/����/�ļ�����
	function getFileName(){
		$filePathOne = "upload/";  //is_dir(); //�жϵ�ǰ·���Ƿ���Ŀ¼��
		//echo is_dir($filePathOne);  ��Ŀ¼ ����true   ����Ŀ¼����false
		if(is_dir($filePathOne)){
		}else{
			mkdir($filePathOne);
		}
		$filePathTwo = $filePathOne.date("Ymd")."/";
			if(is_dir($filePathTwo)){
				}else{
					mkdir($filePathTwo);
				}
			$fileName = $filePathTwo.date("Ymd").rand(1000,9999).".".$this->getExtName();
			return $fileName;
		}
		//�ļ��ϴ������ŷ�
		function main(){  //���е��ļ��ϴ���ص����ݶ����ɵ��÷����ڲ���
			$extN  = $this->getExtName();//�����չ��
			$this->checkSize();  //����ļ���С
			$this->checkType($extN); //����ļ�����;
			$fileName = $this->getFileName();
			move_uploaded_file($this->arr["tmp_name"], $fileName);			
			//·�� --�����뵽���ݿ�.
			return $fileName;
		}
		
}
$up = new Upload($upImg);  //��ͼ������ ���ݵ�����.
$fileName = $up->main();
$userName = $_POST["userName"];
$sql = "insert into users(userName,userImg) values('{$userName}'),'{$fileName}')";







