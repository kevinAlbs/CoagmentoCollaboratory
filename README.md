#Coagmento Collaboratory
##Overview
Coagmento Collaboratory is a modularized and public use version of the [Coagmento](http://www.coagmento.org/) tool. This project is still under active development, but fully functioning examples can be found in the <b>demo</b> folder of this repository.
##Directories
<dl>
	<dt>core</dt>
	<dd>Contains the core classes for accessing the different components (user, snippet, query, etc.) and useful wrapper classes (session). Also contains the config.php file</dd>
	<dt>db</dt>
	<dd>Contains files for importing database. The raw schema files are in db/data</dd>
	<dt>demo</dt>
	<dd>Contains runnable examples of how you can implement Coagmento</dd>
	<dt>model</dt>
	<dd>Contains UML diagrams of the database</dd>
	<dt>test</dt>
	<dd>Contains simple tests of each core class</dd>
	<dt>sidebar</dt>
	<dd>Contains the Firefox sidebar plugin</dd>
	<dt>toolbar</dt>
	<dd>Contains the Firefox toolbar</dd>
	<dt>toolbarLogger</dt>
	<dd>Contains API listeners for the toolbar</dd>
	<dt>webservices</dt>
	<dd>Contains the API</dd>
</dl>
<hr/>
##Setup
###Database
The database schema for MySQL can be found in the db/data folder. We have made a simple database import script which you can easily run to create all of the necessary tables. Firstly, edit the core/config.php file to add your database credentials. Then navigate to the db/index.php in your browser. This will show you a list of the tables which you can import, and click "Create Tables" to import them.

Alternatively, you can import this yourself using this command (or similar):
```
cat db/data/*.sql | mysql -u <user> -h <host> -p
```
###Environment
This was developed on Apache 2.2.22 with PHP version 5.4.6. At the moment, it has not been tested with other versions of PHP but should at least work with PHP 5.4 and above.

###Testing
Included in this repo is the <b>test</b> folder containing a number of simple tests using the core classes. If you are setting up your environment, try running these first. If these work, you can see examples of what is possible by navigating to the <b>demo</b> folder.

##Webservices
All webservices will be called using a POST request with the following parameters:
<b>type</b> can take values 'POST', 'GET', 'PUT', 'DELETE'

<b>data</b> is a string of all data relevant for the request. Making this parameter in PHP would easily be done with the [http_build_query](http://www.php.net/manual/en/function.http-build-query.php) function

<b>hashed_data</b> is the same string of data hashed with the user's private API key. The private key should be appended to the data and then hashed using sha1.

These post requests will go to different components based on the path this is sent to. For example, sending a request to do something with an action would go to:

http://<base url>/webservices/index.php/action


We will include helper functions for building a request to send to the webservice.