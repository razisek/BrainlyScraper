# BrainlyScrapper #
Scrape brainly.co.id,
Support get Media 😀😀,
Media in key ```attachments```

## Install
```
git clone https://github.com/ajisek/BrainlyScrapper
```
## Sample Code
```php
<?php
header('Content-Type: application/json');
include 'brainly.php';

$query = 'kapan terjadinya bulan puranama?';
$result = Brainly($query);
echo $result;

?>
```
## Output
```json
{
	"data":{
		"questionSearch":{
			"edges":[
				{
					"node":{
						"content":"bulan purnama terjadi setiap kapan?<br />\nkapan terjadi bulan purnama?",
						"attachments":[],
						"answers":{
							"nodes":[
								{
							"content":"Karena satu siklus bulan lamanya 29,5 hari, maka bulan purnama biasanya terjadi di antara hari ke-14 dan 15 dalam kalender lunar.",
							"attachments":[]
						}
					]
						}
					}
				},
				{
					"node":{
						"content":"apakah gerhana bulana selalu terjadi pada waktu bulan purnama?",
						"attachments":[],
						"answers":{
							"nodes":[
								{
								"content":"Jawabannya adalah Iya. <br /><br />",
								"attachments":[]
							},{
								"content":"iya karna gerhana bulan bisa muncul pada waktu bulan purnama.....<br />maaf kalo salah.....;<br />",
								"attachments":[]
							}
						]
						}
					}
				},{
					"node":{
						"content":"pasang Purnama terjadi pada saat bulan purnama dan",
						"attachments":[],
						"answers":{
							"nodes":[
								{
								"content":"pasang Purnama terjadi pada saat bulan purnama dan pasang perbani",
								"attachments":[]
							}
						]
						}
					}
				},{
					"node":{
						"content":"pasang purnama terjadi pada saat bulan purnama dan",
						"attachments":[],
						"answers":{
							"nodes":[
								{
								"content":"pasang purnama terjadi pada saat bulan purnama dan bulan baru karena pada saat itu gaya grafitasi bilan matahari dan bumi kuat",
								"attachments":[]
							},{
								"content":"mungkin saat bulan mati",
								"attachments":[]
							}
						]
						}
					}
				}
			]
		}
	}
}
```
