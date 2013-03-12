# Site Killswitch

Turn off a remote website wtih this script that 'calls home'.  Great for those clients on remote servers that are making payments.


## Example Usage:

### Add more sites by adding them to your killswitch.xml file
```
  <another-site.com>
		<status>false</status>
		<message>Please contact me immediately.</message>
	</another-site.com>
```

### Include killswitch.php to any file and add this code.
```
	$check = new killswitch($_SERVER['HTTP_HOST']);
	if($check->info->status == 'false')
		exit($check->info->message);
```
