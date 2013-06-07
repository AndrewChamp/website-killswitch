# Website Killswitch

Turn off a remote website wtih this script that 'calls home'.  Great for those clients on remote servers that are making payments.


## Example Usage:

'killswitch.xml' will reside on your server.  'killswitch.php' resides on the remote server.

----

Update 'killswitch.php' w/ the URL of where your 'killswitch.xml' file will reside
```
private $xml = 'http://domain.com/killswitch.xml';
```

### Add more sites by adding them to your killswitch.xml file
```
<another-site.com>
	<status>false</status>
	<message>Please contact me immediately.</message>
</another-site.com>
```

### Add this at the top of your files
```
$check = new killswitch($_SERVER['HTTP_HOST']);
if($check->info->status == 'false')
	exit($check->info->message);
```
