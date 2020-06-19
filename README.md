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
```javascript
{
	"data":
	{
		"questionSearch":
		{
			"edges":
			[
			{
				"node":
				{
					"content":"siapa penemu lampu sang penemu bola lampu pijar?",
					"attachments":[],
					"answers":
					{
						"nodes":
						[
						{
							"content":"1.Thomas Alva Edision<br />2.Jeseph Wilson Swan<br />3.Hiram Maxim<br /><br />semoga membantu yha;)",
							"attachments":[]
						}
						]
					}
				}
			},
			{
				"node":
				{
					"content":"siapa penemu lampu sang penemu bola lampu pijar?​",
					"attachments":[],
					"answers":
					{
						"nodes":
						[
						{
							"content":"<p><strong>Jawaban:</strong></p><p>Thomas Alva Edison</p><p></p><p>Joseph Wilson Swan</p><p></p><p>Hiram Maxim</p><p><strong>Penjelasan:</strong></p><p>maaf kalo salah </p>",
							"attachments":[]
						}
						]
					}
				}
			},
			{
				"node":
				{
					"content":"Siapakah Penemu Lampu ?<br />( Thomas Alva Edison adalah Penemu Lampu Pijar )​",
					"attachments":[],
					"answers":
					{
						"nodes":
						[
						{
							"content":"<p>Penemu lampu pertama kali adalah Sir Joseph Wilson Swan</p><p>Sebagian besar dari kita menganggap bahwa penemu lampu pijar adalah Thomas Alfa Edison. Sebenarnya hal itu salah. Ia bukanlah penemu lampu pijar, ia hanya memperbaiki sistem kerja lampu pijar sehingga dapat digunakan lebih lama.</p><p></p>",
							"attachments":[]
						}
						]
					}
				}
			},
			{
				"node":
				{
					"content":"siapa penemu handphone dan penemu lampu",
					"attachments":[],
					"answers":
					{
						"nodes":
						[
						{
							"content":"penemu telepon alexander graham bell, penemu lampu thomas alfa edison",
							"attachments":[]
						},
						{
							"content":"Penemu handphone = Martin Cooper<br />Penemu lampu = Thomas Alva Edison",
							"attachments":[]
						}
						]
					}
				}
			},
			{
				"node":
				{
					"content":"siapa penemu lampu dan penemu sepeda",
					"attachments":[],
					"answers":
					{
						"nodes":
						[
						{
							"content":"Penemu lampu : Thomas Alva Edison<br />Penemu sepeda : <span>Karl Drais (Penemu pertama)<br /><br /><br /></span>",
							"attachments":[]
						},
						{
							"content":"Penemu lampu : Thomas Alva Edison<br />Penemu sepeda : <span>Karl Drais (Penemu pertama)<br /><strong>Semoga Membantu...</strong><br /></span>",
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

