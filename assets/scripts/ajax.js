/*******************************************************************
 *  XmlHttpRequest object                                          *
 *******************************************************************
 *  XMLHttpRequest object in an object oriented way.               *
 *                                                                 *
 *  Copyright 2010 by Axel Dahmen Soft- und Hardware-Engineering   *
 ***************************************************************************************************************
 *                                                                                                             *
 *  Usage:                                                                                                     *
 *                                                                                                             *
 *    * To execute a scripted HTTP request, create an object of the AxelDahmen.XmlHttpRequest class.           *
 *                                                                                                             *
 *    * Optionally add HTTP headers to the request object by adding properties with corresponding name and     *
 *      give them appropriate string values.                                                                   *
 *                                                                                                             *
 *    * To execute a POST or a PUT request, optionally create a PostData object, providing an object to the    *
 *      PostData constructor having property names/values corresponding to the values to be sent to the web    *
 *      server.                                                                                                *
 *      An optional encoding function may be supplied to the constructor to perform your own encoding.         *
 *      The default encoder provides support for "application/x-www-form-urlencode".                           *
 *                                                                                                             *
 *    * Optionally provide callback handlers for any of the available status changes (see below for details).  *
 *      If any of these handler function is set to handle events, an asynchronous request will be initiated.   *
 *      Otherwise, a synchronous request will be executed.                                                     *
 *                                                                                                             *
 *    * Execute the send() method, providing destination URL and one of the AxelDahmen.XmlHttpRequest.type     *
 *      enumeration values (GET, POST, HEAD, OPTIONS, PUT or DELETE).                                          *
 *                                                                                                             *
 *    * If a synchronous request was executed, evaluate the send() method's return value. Otherwise, one of    *
 *      your event handlers will be called as soon as the corresponding event occurs.                          *
 *                                                                                                             *
 *    * Optionally retrieve response headers by calling getResponseHeaders() method.                           *
 *                                                                                                             *
 ***************************************************************************************************************
 *                                                                                                             *
 *  Details:                                                                                                   *
 *                                                                                                             *
 *  The following description skips the namespace prefix "AxelDahmen." for the sake of legibility.             *
 *  However, the samples contain the prefix. So they can easily applied to your own code.                      *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest(postData)                                                                                   *
 *  ------------------------                                                                                   *
 *     postData  : Optional. string                                                                            *
 *     return value : new XmlHttpRequest object.                                                               *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Creates a new XmlHttpRequest object.                                                                    *
 *                                                                                                             *
 *     If postData argument is provided, the postData property will be set to this data. If the postData       *
 *     argument is an anonymous object, it will be used to create a XmlHttpRequest.PostData object using       *
 *     the default encoding.                                                                                   *
 *                                                                                                             *
 *     If the XmlHttpRequest() constructor function is used as a standard function call, i.e. without the      *
 *     new operator, it returns a new XmlHttpRequest object.                                                   *
 *                                                                                                             *
 *     Shortcut functionality:                                                                                 *
 *                                                                                                             *
 *     This function provides a shortcut functionality: If you provide function arguments for one of the       *
 *     two frequently used XmlHttpRequest.get() or XmlHttpRequest.post() functions to the XmlHttpRequest()     *
 *     function, it creates a new XmlHttpRequest object and immediately calls the appropriate function to      *
 *     send a HTTP request to the web server. If no asynchronous callback function is provided with the        *
 *     arguments, the web server's response is returned.                                                       *
 *                                                                                                             *
 *     To use the shortcut functionality call the XmlHttpRequest() function without the "new" operator         *
 *     and provide appropriate function arguments with the call. If one of the provided arguments is a         *
 *     XmlHttpRequest.PostData object or an anonymous object, XmlHttpRequest.post() will be called;            *
 *     otherwise XmlHttpRequest.get() will be called.                                                          *
 *                                                                                                             *
 *     An asynchronous HTTP GET request shortcut call may look like this:                                      *
 *                                                                                                             *
 *     XmlHttpRequest("http://www.contoso.com/sample.cgi",function(){alert(this.getResponse());});             *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.send(url, type, userName, password)                                                         *
 *  --------------------------------------------------                                                         *
 *     url      : string                                                                                       *
 *     type     : XmlHttpRequest.type enumeration                                                              *
 *     userName : Optional. string                                                                             *
 *     password : Optional. string                                                                             *
 *     return value : In case of synchronous request: HTTP response. Otherwise undefined.                      *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     The simplest way to execute a HTTP request is to just create a new XmlHttpRequest and to execute the    *
 *     send() method on it. This executes a synchronous request and returns the result retrieved by the web    *
 *     server.                                                                                                 *
 *                                                                                                             *
 *     To use asynchronous call, define any of the state change event handlers on the XmlHttpRequest object:   *
 *        onOpened    : Fired when the internal XMLHttpRequest object's open() method has been executed.       *
 *        onSent      : Fired when the internal XMLHttpRequest object's send() method has been executed and    *
 *                       headers have been received.                                                           *
 *        onReceiving : Fired when data load is in transer.                                                    *
 *        onComplete  : Fired when data load has finished.                                                     *
 *        onSucceed   : Fired when data load has finished and status code received equals 200 (= success).     *
 *        onFail      : Fired when data load has finished and status code received doesn't equal 200.          *
 *                                                                                                             *
 *      To add HTTP request headers to the call, add string properties on the XmlHttpRequest with their        *
 *      names constituting from the corresponding HTTP request header name. For instance:                      *
 *                                                                                                             *
 *         var xml = new AxelDahmen.XmlHttpRequest();                                                          *
 *         xml["If-Modified-Since"] = new Date(new Date() - 1).toUTCString();                                  *
 *         xml.send("http://www.contoso.com/sample.cgi",AxelDahmen.XmlHttpRequest.type.GET);                   *
 *                                                                                                             *
 *      To access restricted resources, either use the "user:password" format in the URL itself or add         *
 *      authentication information to the send() method call as separate arguments. For instance:              *
 *                                                                                                             *
 *         var xml = new AxelDahmen.XmlHttpRequest();                                                          *
 *         xml.send("http://www.contoso.com/sample.cgi",AxelDahmen.XmlHttpRequest.type.GET                     *
 *                 ,"MyUserName","MyPassword");                                                                *
 *                                                                                                             *
 *      To add POST data to a POST or PUT request, create a PostData object using an object consisting of      *
 *      data/value pairs plus an optional encoder function to encode the data object into a string             *
 *      representation.                                                                                        *
 *                                                                                                             *
 *         Simple Example of adding post data using the default "application/x-www-form-urlencode" encoding:   *
 *                                                                                                             *
 *            var xml = new AxelDahmen.XmlHttpRequest();                                                       *
 *            xml.postData = new AxelDahmen.XmlHttpRequest.PostData({familyName:"Dahmen"                       *
 *                                                                   ,firstName:"Axel"});                      *
 *            xml.send("http://www.contoso.com/sample.cgi",AxelDahmen.XmlHttpRequest.type.POST);               *
 *                                                                                                             *
 *         Another Example of adding post data using a user defined encoding handler:                          *
 *                                                                                                             *
 *            var xml = new AxelDahmen.XmlHttpRequest();                                                       *
 *            var encoding =                                                                                   *
 *                new AxelDahmen.XmlHttpRequest.PostData.Encoding("application/x-www-form-urlencode"           *
 *                                                                ,function(data,postDataObj)                  *
 *                           {                                                                                 *
 *                              var retVal = [];                                                               *
 *                              for (var prop in data)                                                         *
 *                                 if (typeof data[prop] == "string")                                          *
 *                                    retVal.push((encodeURIComponent(prop) + "="                              *
 *                                                 + encodeURIComponent(data[prop])).replace("%20",            *
 *                                                                                           "+"));            *
 *                              return retVal.join("&");                                                       *
 *                           }                                                                                 *
 *                                                               );                                            *
 *            xml.postData = new AxelDahmen.XmlHttpRequest.PostData({familyName:"Dahmen"                       *
 *                                                                  ,firstName:"Axel"}, encoding);             *
 *            xml.send("http://www.contoso.com/sample.cgi",AxelDahmen.XmlHttpRequest.type.POST);               *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.abort()                                                                                     *
 *  ----------------------                                                                                     *
 *     Doesn't take any parameters.                                                                            *
 *     Doesn't return any value.                                                                               *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Aborts the current asynchronous call.                                                                   *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.getResponse()                                                                               *
 *  ----------------------------                                                                               *
 *     Doesn't take any parameters.                                                                            *
 *     return value : If HTTP request was successful, returns either an XML DOM object containing response     *
 *                    if return value is of type "text/xml", response string value if any other response       *
 *                    type was received. Returns null if HTTP request was unsuccessful.                        *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     If HTTP request was successful, returns                                                                 *
 *        - an XML DOM object containing response if return value is of type "text/xml".                       *
 *        - response string value if any other response type was received.                                     *
 *     Returns null if HTTP request was unsuccessful.                                                          *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.getResponseHeaders()                                                                        *
 *  -----------------------------------                                                                        *
 *     Doesn't take any parameters.                                                                            *
 *     return value : Object containing name/value pairs of response headers received.                         *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Parses the HTTP response header string and converts it into an object containing name/value pairs       *
 *     for every HTTP response header that has been received.                                                  *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.getStatus()                                                                                 *
 *  --------------------------                                                                                 *
 *     Doesn't take any parameters.                                                                            *
 *     return value : HTTP status received.                                                                    *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Returns the HTTP status received after HTTP request has been sent.                                      *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.getStatusText()                                                                             *
 *  ------------------------------                                                                             *
 *     Doesn't take any parameters.                                                                            *
 *     return value : HTTP status text received.                                                               *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Returns the HTTP status text received after HTTP request has been sent.                                 *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.get(url, onComplete, userName, password)                                                    *
 *  -------------------------------------------------------                                                    *
 *     url        : string                                                                                     *
 *     onComplete : Optional. Callback function taking no parameters.                                          *
 *     userName   : Optional. string                                                                           *
 *     password   : Optional. string                                                                           *
 *     return value : In case of synchronous request: HTTP response. Otherwise undefined.                      *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Shortcut function for sending a common HTTP GET request.                                                *
 *                                                                                                             *
 *     Calls XmlHttpRequest.send() with type parameter XmlHttpRequest.type.GET. Returns the result of that     *
 *     call if no callback function is provided. If a callback function is provided though, this function      *
 *     returns immediately without return value and the callback function is called as soon as asynchronous    *
 *     request completes.                                                                                      *
 *                                                                                                             *
 *     Two examples, demonstrating the compact notation using this function:                                   *
 *                                                                                                             *
 *          XmlHttpRequest().get( "http://www.contoso.com/sample.cgi"                                          *
 *                                ,function() {alert(this.getResponse());} );                                  *
 *                                                                                                             *
 *     or even:                                                                                                *
 *                                                                                                             *
 *          XmlHttpRequest( "http://www.contoso.com/sample.cgi"                                                *
 *                          ,function() {alert(this.getResponse());} );                                        *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.post(url, onComplete, postData, userName, password)                                         *
 *  ------------------------------------------------------------------                                         *
 *     url        : string                                                                                     *
 *     onComplete : Optional. Callback function taking no parameters.                                          *
 *     postData   : Optional. string                                                                           *
 *     userName   : Optional. string                                                                           *
 *     password   : Optional. string                                                                           *
 *     return value : In case of synchronous request: HTTP response. Otherwise undefined.                      *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Shortcut function for sending a common HTTP POST request.                                               *
 *                                                                                                             *
 *     Calls XmlHttpRequest.send() with type parameter XmlHttpRequest.type.POST. Returns the result of that    *
 *     call if no callback function is provided. If a callback function is provided though, this function      *
 *     returns immediately without return value and the callback function is called as soon as asynchronous    *
 *     request completes.                                                                                      *
 *                                                                                                             *
 *     You can add POST data in three different ways:                                                          *
 *                                                                                                             *
 *       - Provide POST data with XmlHttpRequest() constructor call                                            *
 *       - Assign a PostData object to the XmlHttpRequest.postData member                                      *
 *       - provide POST data as optional parameter to this function call                                       *
 *                                                                                                             *
 *     If POST data is provided either to the XmlHttpRequest constructor or to this function call, it may      *
 *     be an anonymous object or a XmlHttpRequest.PostData object, resp. If it is an anonymous object,         *
 *     a XmlHttpRequest.PostData object will be created automatically and the default encoding                 *
 *     ("application/x-www-form-urlencode") will be applied.                                                   *
 *                                                                                                             *
 *     Sometimes it is more legible to write the postData argument preceeding the completion callback          *
 *     function. Thus, you may optionally provide postData as second argument and the onComplete callback      *
 *     function as third argument to XmlHttpRequest.post(). The type of these two arguments will be            *
 *     recognized and used appropriately.                                                                      *
 *                                                                                                             *
 *     Five examples, demonstrating the compact notation using this function:                                  *
 *                                                                                                             *
 *          XmlHttpRequest().post( "http://www.contoso.com/sample.cgi"                                         *
 *                                 ,function() {alert(this.getResponse());}                                    *
 *                                 ,{familyName:"Dahmen", firstName:"Axel"} );                                 *
 *                                                                                                             *
 *     or:                                                                                                     *
 *                                                                                                             *
 *          var retVal = XmlHttpRequest({familyName:"Dahmen", firstName:"Axel"})                               *
 *                                     .post("http://www.contoso.com/sample.cgi");                             *
 *                                                                                                             *
 *     or even:                                                                                                *
 *                                                                                                             *
 *          XmlHttpRequest( "http://www.contoso.com/sample.cgi"                                                *
 *                          ,function() {alert(this.getResponse());}                                           *
 *                          ,{familyName:"Dahmen", firstName:"Axel"} );                                        *
 *                                                                                                             *
 *     or:                                                                                                     *
 *                                                                                                             *
 *          XmlHttpRequest( "http://www.contoso.com/sample.cgi"                                                *
 *                          ,{familyName:"Dahmen", firstName:"Axel"}                                           *
 *                          ,function() {alert(this.getResponse());} );                                        *
 *                                                                                                             *
 *     or:                                                                                                     *
 *                                                                                                             *
 *          var retVal = XmlHttpRequest( "http://www.contoso.com/sample.cgi"                                   *
 *                                       ,{familyName:"Dahmen", firstName:"Axel"} );                           *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.errorHandler(message)                                                                       *
 *  ------------------------------------                                                                       *
 *     message : string                                                                                        *
 *     Doesn't return any value.                                                                               *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     May be overridden. Default implementation displays alert() box displaying error description.            *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.version                                                                                     *
 *  ----------------------                                                                                     *
 *                                                                                                             *
 *     Version number of this library.                                                                         *
 *                                                                                                             *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.type                                                                                        *
 *  -------------------                                                                                        *
 *                                                                                                             *
 *     Enumeration providing a list of HTTP methods supported by the XmlHttpRequest object.                    *
 *                                                                                                             *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.metaInfo                                                                                    *
 *  -----------------------                                                                                    *
 *                                                                                                             *
 *     This property is not to be used in common scenario. It lists the public interface of the                *
 *     XmlHttpRequest object. For this purpose it provides two arrays: "functionNames" and "propertyNames".    *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.PostData(data, encoder)                                                                     *
 *  --------------------------------------                                                                     *
 *     data    : Object providing property name/value pairs for each value to encode.                          *
 *     encoder : Optional. XmlHttpRequest.PostData.Encoding object                                             *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Creates a new XmlHttpRequest.PostData object.                                                           *
 *                                                                                                             *
 *     Use the optional Encoding object to provide necessary information to encode the data object into        *
 *     content posted to the web server. For an example refer to XmlHttpRequest.send().                        *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.PostData.toString()                                                                         *
 *  ----------------------------------                                                                         *
 *     Doesn't take any parameters.                                                                            *
 *     return value : POST data converted to a string being sent to the web server.                            *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Returns a string containing POST data to be sent to the web server.                                     *
 *                                                                                                             *
 *                                                                                                             *
 *  XmlHttpRequest.PostData.Encoding(encoding, encode)                                                         *
 *  --------------------------------------------------                                                         *
 *     encoding : string                                                                                       *
 *     encode   : function taking one parameter: An object consisting of the data to encode.                   *
 *                                                                                                             *
 *     Description:                                                                                            *
 *                                                                                                             *
 *     Creates a new XmlHttpRequest.PostData.Encoding object.                                                  *
 *                                                                                                             *
 *     If you need to encode POST data in another encoding than "application/x-www-form-urlencode" you         *
 *     can create your own encoding object using this constructor:                                             *
 *                                                                                                             *
 *        Set the "encoding" property to the MIME type string sent to the web server.                          *
 *                                                                                                             *
 *        Set the encode property to a function that takes an arbitrary object as a parameter.                 *
 *        This function is should return a string that is to be transferred to the web server. For instance:   *
 *                                                                                                             *
 *           var e = new Encoding("text/anything", function(pd) {var s; ...; return s.toString()};             *
 *                                                                                                             *
 ***************************************************************************************************************/


/*	----------------------------------------------------------
		--	AxelDahmen namespace	--------------------------------
		----------------------------------------------------------
*/

var AxelDahmen;

if (!AxelDahmen) AxelDahmen={};
else if (typeof AxelDahmen!="object") throw new TypeError("AxelDahmen is defined but it is not an object. Can't initialize AxelDahmen.XmlHttpRequest object.");




/*	----------------------------------------------------------
		--	XmlHttpRequest object	--------------------------------
		----------------------------------------------------------
*/

AxelDahmen.XmlHttpRequest = function(postData)
	{///	<summary>Creates a new XmlHttpRequest object.</summary>
	///		<param name="postData">optional: HTTP POST data to be sent to web server. If anonymous object, a PostData object will be created from it.</param>

	var $=AxelDahmen.XmlHttpRequest;		// namespace abbreviation

	var i;
	var me = this;	// to supply request to nested function

	// init HTTP POST data, if present
	if (arguments.length==1 && (postData instanceof $.PostData || postData instanceof Object)) me.postData= postData instanceof $.PostData ? postData : new $.PostData(postData);

	// constructor call?
	if (this instanceof $)
		{// create XMLHttpRequest object
		this._request=null;
		var factories =	[function() {return new XMLHttpRequest();}
										,function() {return new ActiveXObject("Msxml2.XMLHTTP");}
										,function() {return new ActiveXObject("Microsoft.XMLHTTP");}];
		
		for (i=0;i<factories.length;++i)
			try
				{if (!!(this._request=factories[i]())) break;}
			catch (ex)
				{}
		
		if (this._request)
			{// register asynchronous callback function
			this._request.onreadystatechange = function()
				{try
					{switch (me._request.readyState)
						{case 1:
							if (me.onOpened && typeof me.onOpened == "function") me.onOpened();
							break;
						
						case 2:
							if (me.onSent && typeof me.onSent == "function") me.onSent();
							break;
							
						case 3:
							if (me.onReceiving && typeof me.onReceiving == "function") me.onReceiving();
							break;
							
						case 4:
							if (me.onComplete && typeof me.onComplete == "function") me.onComplete();
							
							if (me._request.status >= 200 && me._request.status < 300)
								{if (me.onSucceed && typeof me.onSucceed == "function") me.onSucceed();}
							else if (me.onFail && typeof me.onFail == "function") me.onFail();
							break;}}
				catch (ex)
					{me.errorHandler(ex.message);}}}}

	else	// shortcut function call
		{me=new $();

		for (i=0;i<arguments.length;++i) if (arguments[i] instanceof $.PostData || arguments[i].constructor==Object) return me.post.apply(me,arguments);
		
		return me.get.apply(me,arguments);}}



/*	--	Public member functions	--------------------------------
*/

AxelDahmen.XmlHttpRequest.prototype.send = function(url,type,userName,password)
	{///	<summary>Sends a HTTP request to the provided URL.</summary>
	///		<param name="url">URL to send HTTP request to.</param>
	///		<param name="type">HTTP method to use for request. Any value from the XmlHttpRequest.type enumeration.</param>
	///		<param name="userName">optional: User name to authenticate against web server.</param>
	///		<param name="password">optional: Password to authenticate against web server.</param>
	///		<returns>Returned server data, if called synchronously.</returns>

	// Namespace abbreviation
	var $=AxelDahmen.XmlHttpRequest;
	
	// check for valid arguments
	if (!url || !typeof url=="string") throw new TypeError("'url' argument is not of type 'string'.");
	if (!type || !$.type[type]) throw new TypeError("'type' argument is not any of the supported HTTP methods.");

	try
		{this._request.open(type,url,this._isAsync(),userName,password);
		this._addHeaders();

		// if it is a POST or PUT request, add post data; else just send the request.
		if ((type==$.type.POST || type==$.type.PUT)
				&& this.postData && this.postData instanceof $.PostData)
			{this._request.setRequestHeader("Content-Type",this.postData.encoding);
			this._request.send(String(this.postData.data));}
		else this._request.send();

		if (!this._isAsync()) return this.getResponse();}
	catch (ex)
		{this.errorHandler(ex.message);}}



AxelDahmen.XmlHttpRequest.prototype.abort = function()
	{///	<summary>Aborts the current HTTP request.</summary>

	this._request.abort();}



AxelDahmen.XmlHttpRequest.prototype.getResponse = function()
	{///	<summary>Gets the HTTP response as XML DOM object or as string, if response is no XML document.</summary>
	///		<returns>HTTP response as XML DOM object if response is XML document. HTTP response as string otherwise.</returns>

	if (this._request.status == 200) return /\bxml$/.test(this._request.getResponseHeader("Content-Type")) ? this._request.responseXML : this._request.responseText;
	else return null;}



AxelDahmen.XmlHttpRequest.prototype.getResponseHeaders = function()
	{///	<summary>Gets the HTTP response's HTTP headers.</summary>
	///		<returns>HTTP response's HTTP headers.</returns>

	var retVal={};
	var heads=this._request.getAllResponseHeaders().replace(/\r/g,"").split("\n");
	
	for (var i=0;i<heads.length;++i) if (heads[i].indexOf(": ")!=-1)
		{var tmp;
		
		tmp=heads[i].split(": ");
		retVal[tmp[0]]=tmp[1];}
	
	return retVal;}



AxelDahmen.XmlHttpRequest.prototype.getStatus = function()
	{///	<summary>Gets the HTTP response's HTTP status code.</summary>
	///		<returns>HTTP response's HTTP status code.</returns>

	return this._request.status;}



AxelDahmen.XmlHttpRequest.prototype.getStatusText = function()
	{///	<summary>Gets the HTTP response's HTTP status text.</summary>
	///		<returns>HTTP response's HTTP status text.</returns>

	return this._request.statusText;}



AxelDahmen.XmlHttpRequest.prototype.errorHandler = function(message)
	{///	<summary>Error function used throughout this library to output errors. May be overridden.</summary>
	///		<param name="message">Error message to be output.</param>

	alert("An error occured during processing of XmlHttpRequest:\n\n"+message);}



/*	--	Public comfort functions	--------------------------------
*/

AxelDahmen.XmlHttpRequest.prototype.get = function(url,onComplete,userName,password)
	{///	<summary>Sends a HTTP GET request to the provided URL.</summary>
	///		<param name="url">URL to send HTTP request to.</param>
	///		<param name="onComplete">optional: Callback function to be called when asynchronous call successfully returns. If not provided, call will be run synchronously.</param>
	///		<param name="userName">optional: User name to authenticate against web server.</param>
	///		<param name="password">optional: Password to authenticate against web server.</param>
	///		<returns>Returned server data, if called synchronously.</returns>

	// register success event handler
	if (onComplete && typeof onComplete=="function") this.onComplete=onComplete;

	// call send method and eventually return result if called synchronous.
	return this.send(url,AxelDahmen.XmlHttpRequest.type.GET,userName,password);}



AxelDahmen.XmlHttpRequest.prototype.post = function(url,onComplete,postData,userName,password)
	{///	<summary>Sends a HTTP POST request to the provided URL. (onComplete and postData arguments may be swapped.)</summary>
	///		<param name="url">URL to send HTTP request to.</param>
	///		<param name="onComplete">optional: Callback function to be called when asynchronous call successfully returns. If not provided, call will be run synchronously.</param>
	///		<param name="postData">optional: HTTP POST data to be sent to web server. If anonymous object, a PostData object will be created from it.</param>
	///		<param name="userName">optional: User name to authenticate against web server.</param>
	///		<param name="password">optional: Password to authenticate against web server.</param>
	///		<returns>Returned server data, if called synchronously.</returns>

	var $=AxelDahmen.XmlHttpRequest;	// namespace abbreviation

	// swap onComplete and postData, if applicable
	if (postData && typeof postData=="function" || onComplete && !(typeof onComplete=="function"))
		{var temp=onComplete;
		onComplete=postData;
		postData=temp;}

	// add optional POST data to object
	if (postData) this.postData= postData instanceof $.PostData ? postData : new $.PostData(postData);

	// register success event handler
	if (onComplete && typeof onComplete=="function") this.onComplete=onComplete;

	// call send method and eventually return result if called synchronous.
	return this.send(url,$.type.POST,userName,password);}



/*	--	Public static properties	--------------------------------
*/

// Version indicator
AxelDahmen.XmlHttpRequest.version = 1.0;

// Enumerates all HTTP request methods supported.
AxelDahmen.XmlHttpRequest.type = {GET:"GET", POST:"POST", HEAD:"HEAD", OPTIONS:"OPTIONS", PUT:"PUT", DELETE:"DELETE"}

// Developer support: list all possible property function names that can be set with values or corresponding callback functions, resp.
AxelDahmen.XmlHttpRequest.metaInfo =
	{functionNames:	["errorHandler"	/*	called if an error is returned	*/
									,"onOpened", "onSent", "onReceiving", "onComplete", "onSucceed", "onFail"	/*	raised whenever readyState changes	*/
									]
	,propertyNames:	["postData" /* a PostData object, used to provide POST data for POST or PUT request.	*/
									]
	}



/*	--	Private member functions	--------------------------------
*/

AxelDahmen.XmlHttpRequest.prototype._addHeaders = function()
	{///	<summary>Adds the XmlHttpRequest's header properties to the HTTP request.</summary>

	for (var prop in this) if (this[prop] && typeof this[prop]=="string") this._request.setRequestHeader(prop, this[prop]);}



AxelDahmen.XmlHttpRequest.prototype._isAsync = function()
	{///	<summary>Returns true, if the HTTP request will be called asynchronosly, false otherwise.</summary>
	///		<returns>true, if the HTTP request will be called asynchronosly, false otherwise.</returns>

	var funcs=AxelDahmen.XmlHttpRequest.metaInfo.functionNames;
	
	for (var i=0;i<funcs.length;++i)
		{if (funcs[i].slice(0,2)=="on" && this[funcs[i]]) return true;}
	
	return false;}




/*	----------------------------------------------------------
		--	Nested PostData object	------------------------------
		----------------------------------------------------------
*/

AxelDahmen.XmlHttpRequest.PostData = function(data,encoder)
	{///	<summary>Creates a new PostData object.</summary>
	///		<param name="data">Object providing string properties taken as HTTP POST data to be sent. The object's name/value pairs will be sent as corresponding parameter data.</param>
	///		<param name="encoder">optional: Encoder object used to encode the data object appropriately. If not provided, an encoding of "application/x-www-form-urlencode" will be used.</param>
	
	// check for valid arguments
	if (!data || typeof data!="object") throw new TypeError("'data' argument is not a valid data object.");

	if (encoder)
	  {if (!(typeof encoder=="object" && typeof encoder.encoding=="string" && typeof encoder.encode=="function")) throw new TypeError("'encoding' argument is not a valid Encoding object");
		this.encoding=encoder.encoding;
		this.data=encoder.encode(data);}
	else
		{this.encoding="application/x-www-form-urlencode";

		this.data=[];
		for (var prop in data) if (typeof data[prop]=="string") this.data.push((encodeURIComponent(prop)+"="+encodeURIComponent(data[prop])).replace("%20","+"));
		this.data=this.data.join("&");}}



AxelDahmen.XmlHttpRequest.PostData.prototype.toString = function()
	{///	<summary>Returns the encoded HTTP POST data.</summary>
	
	return this.data;}




/*	----------------------------------------------------------
		--	Nested PostData.Encoding object	------------------------------
		----------------------------------------------------------
*/

AxelDahmen.XmlHttpRequest.PostData.Encoding = function(encoding,encoder)
	{///	<summary>Creates a new HTTP POST data Encoding object.</summary>
	///		<param name="encoding">MIME type of POST data.</param>
	///		<param name="encoder">Function object taking one parameter: An object containing data to encode. Return the encoded data as a string.</param>

	this.encoding=encoding;
	this.encode=encoder;}