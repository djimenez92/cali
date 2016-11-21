
(function() {

// current chat (last created)
var smartsuppChat = parent.smartsupp.chats[smartchatId]; // global chat id
// async workaround
var smartsuppLoadInterval = setInterval(function() {
	if (!window.miwo) return; // wait until libs are loaded async
	clearInterval(smartsuppLoadInterval);
	miwo.ready(function() {
		// add internal google analytics
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		// setup
		miwo.cookie.document = parent.document;
		miwo.baseUrl = smartsuppChat.getOption('baseUrl');
		miwo.staticUrl = smartsuppChat.getOption('staticUrl');

		// dashboard data
		var data = {"package":"free","lang":"es","orientation":"right","hideBanner":true,"hideWidget":false,"hideOfflineBanner":true,"enableRating":true,"requireLogin":false,"hideOfflineChat":false,"muteSounds":true,"isEnabledEvents":false,"banner":{"type":"bubble","options":{}},"translates":{"online":{"title":"Atenci\u00f3n al cliente","infoTitle":"Cropti.com","infoDesc":"\u00bfEn qu\u00e9 podemos ayudarle?"},"offline":{},"widget":{"online":"Estamos conectados","offline":"\u00bfTiene alguna duda?","away":"\u00bfTiene alguna duda?"},"banner":{"arrow":{},"bubble":{"text":"\u00bfEst\u00e1 interesado en optimizar su gesti\u00f3n agraria?"}}},"colors":{"primary":"#89C53B","banner":"#494949","widget":"#89C53B"},"theme":{"name":"flat","options":{"widgetRadius":3}},"api":{"basic":true,"banner":true,"events":false,"groups":false,"theme":true}};
		data.baseLang = 'es';
		data.browserLang = 'es';
		data.avatar = '/chats/42367/avatar-yjhhmckiwo.png';
		data.host = 't1.smartsupp.com';		data.packageName = 'free';
		data.logoUrl = '';
		data.logoSrc = '';
		data.logoSmSrc = '';
		data.smartlook = window.smartlook;

		// create configurator
		var configurator = new Miwo.Configurator();
		configurator.addConfig(App.DefaultConfig.getConfig());
		configurator.addConfig(App.ClientConfig.getConfig(data));
		configurator.addConfig(App.ChatConfig.getConfig(smartsuppChat));

		// create and run app
		configurator.ext(new Chat.ChatExtension());
		var container = configurator.createContainer();
		container.get('miwo.application').run();
	});
}, 50);

// smartlook module start
if(!window.parent.visitortrace && !window.parent.smartlook && window.parent._smartsupp && smartsuppChat.getOption('recordingDisable')!==true && smartsuppChat.getOption('visitortraceDisable')!==true) {
	var _smartlook = window.parent._smartlook || window.parent._visitortrace || {};
			_smartlook.host = 's2.smartlook.com';
	_smartlook.window = window.parent;
	_smartlook.document = window.parent.document;
	if(window.parent._smartsupp.cookieDomain && !_smartlook.cookieDomain){ _smartlook.cookieDomain = window.parent._smartsupp.cookieDomain; }
	if(window.parent._smartsupp.cookiePath && !_smartlook.cookiePath){ _smartlook.cookiePath = window.parent._smartsupp.cookiePath; }

		window.smartlook||(function(d) {var o=smartlook=function(){ o._.push(arguments)},
	s=d.getElementsByTagName('script')[0],c=d.createElement('script');o._=[];c.type='text/javascript';
	c.async=true;c.charset='utf-8';c.src='//rec.smartlook.com/bundle.js?t='+
	new Date().getTime();s.parentNode.insertBefore(c,s);})(window.parent.document);
	window.parent.smartlook = window.smartlook;
	
	smartlook('init', 'acb9b667bf848ed79e45aa4d98b60cfd2032d7f9', _smartlook);
}
// smartlook module end

})();

