<?php
/**
* 	�����˺���Ϣ
*/
include_once '../../includes/common.php';

class WxPayConfig
{

	//=======��������Ϣ���á�=====================================
	//
	/**
	 * TODO: �޸���������Ϊ���Լ�������̻���Ϣ
	 * ΢�Ź��ں���Ϣ����
	 * 
	 * APPID����֧����APPID���������ã������ʼ��пɲ鿴��
	 * 
	 * MCHID���̻��ţ��������ã������ʼ��пɲ鿴��
	 * 
	 * KEY���̻�֧����Կ���ο������ʼ����ã��������ã���¼�̻�ƽ̨�������ã�
	 * ���õ�ַ��https://pay.weixin.qq.com/index.php/account/api_cert
	 * 
	 * APPSECRET�������ʺ�secert����JSAPI֧����ʱ����Ҫ���ã� ��¼����ƽ̨�����뿪�������Ŀ����ã���
	 * ��ȡ��ַ��https://mp.weixin.qq.com/advanced/advanced?action=dev&t=advanced/dev&token=2005451881&lang=zh_CN
	 * @var string
	 */
	
	// �����̨�����޷���Ч����ҵ�ע��ȡ����������ע�ͼ���
	 const APPID = wxccc6f5aaff9c09bc;
	 const MCHID = '1292374101';
	 const KEY = 'SFT34235hjg3jkhGuyrwe78y28guy4g2';
	 const APPSECRET = '433571cdc416b77a93dc20e92c0371b6';
    
          //const APPID = WX_API_APPID;
          //const WX_API_MCHID = WX_API_MCHID;
	  //const KEY = WX_API_KEY;
          //const APPSECRET = WX_API_APPSECRET;

	//=======��֤��·�����á�=====================================
	/**
	 * TODO�������̻�֤��·��
	 * ֤��·��,ע��Ӧ����д����·�������˿��������ʱ��Ҫ���ɵ�¼�̻�ƽ̨���أ�
	 * API֤�����ص�ַ��https://pay.weixin.qq.com/index.php/account/api_cert������֮ǰ��Ҫ��װ�̻�����֤�飩
	 * @var path
	 */
	const SSLCERT_PATH = '/home/cert/apiclient_cert.pem';
	const SSLKEY_PATH = '/home/cert/apiclient_key.pem';
	
	//=======��curl�������á�===================================
	/**
	 * TODO���������ô��������ֻ����Ҫ�����ʱ������ã�����Ҫ����������Ϊ0.0.0.0��0
	 * ������ͨ��curlʹ��HTTP POST�������˴����޸Ĵ����������
	 * Ĭ��CURL_PROXY_HOST=0.0.0.0��CURL_PROXY_PORT=0����ʱ����������������Ҫ�����ã�
	 * @var unknown_type
	 */
	const CURL_PROXY_HOST = "0.0.0.0";//"10.152.18.220";
	const CURL_PROXY_PORT = 0;//8080;
	
	//=======���ϱ���Ϣ���á�===================================
	/**
	 * TODO���ӿڵ����ϱ��ȼ���Ĭ�Ͻ������ϱ���ע�⣺�ϱ���ʱ��Ϊ��1s�����ϱ����۳ɰܡ������׳��쳣����
	 * ����Ӱ��ӿڵ������̣��������ϱ�֮�󣬷���΢�ż��������õ���������������
	 * ���������ϱ���
	 * �ϱ��ȼ���0.�ر��ϱ�; 1.����������ϱ�; 2.ȫ���ϱ�
	 * @var int
	 */
	const REPORT_LEVENL = 1;
}