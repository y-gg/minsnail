<?PHP
namespace Org\Api;
Vendor("htmlparser.simple_html_dom");
class News{
	private $wy_url = "http://news.163.com/";
	private $fh_url = "http://news.ifeng.com/";
	private $tx_url = "http://news.qq.com/";
	private $bd_url = "http://news.baidu.com/";
	private $curl_obj;
	private $htmlparser;
	function __construct(){
		$this->curl_obj = curl_init();
		curl_setopt($this->curl_obj,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($this->curl_obj,CURLOPT_HEADER,false);
		
		$this->htmlparser = new \simple_html_dom();
		
	}
	public function getWyNews(){
		curl_setopt($this->curl_obj,CURLOPT_URL,$this->wy_url);
		$data = curl_exec($this->curl_obj);
		$this->htmlparser->load($data);
		$news1 = $this->htmlparser->find(".mb20");
		$news2 = $this->htmlparser->find(".mb30");
		return $news1[0].$news2[0].$news2[1].$news2[3];
	}
	public function getFhNews(){
		curl_setopt($this->curl_obj,CURLOPT_URL,$this->fh_url);
		$data = curl_exec($this->curl_obj);
		$this->htmlparser->load($data);
		$news1 = $this->htmlparser->find(".tit");
		$new = "";
		foreach($news1 as $n){
			$new.=$n;
		}
		return $new;
	}
	public function getTxNews(){
		curl_setopt($this->curl_obj,CURLOPT_URL,$this->tx_url);
		$data = curl_exec($this->curl_obj);
		$this->htmlparser->load($data);
		$news = $this->htmlparser->find("#headingNews");
		$new = "";
		foreach($news as $n){
			$new.=$n;
		}
		return $new;
	}
	public function getBdNews(){
		curl_setopt($this->curl_obj,CURLOPT_URL,$this->bd_url);
		$data = curl_exec($this->curl_obj);
		$this->htmlparser->load($data);
		$news = $this->htmlparser->find("#pane-news");
		$new = "";
		foreach($news as $n){
			$new.=$n;
		}
		return $new;
	}
	public function __destruct(){
		curl_close($this->curl_obj);
		$this->htmlparser->clear();
	}
}
?>