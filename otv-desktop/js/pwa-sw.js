var appVersion ='v1.00';

// File to Cache
var files = [
'/',
'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css',
'https://images.odishatv.in/assets/js/jquery-3.6.0.min.js'
]

// Install
self.addEventListener('install', event => {
	event.waitUntil(
		caches.open(appVersion)
		.then(cache=> {
			return cache.addAll(files)
			.catch(err=> {
				console.error('Error adding files to cache', err);
			})
		})
		)
	console.info('SW Installed');
	self.skipWaiting();
})

// Activate
self.addEventListener('activate', event=> {
	event.waitUntil(
		caches.keys()
		.then(cacheNames => {
			return Promise.all(
				cacheNames.map(cache => {
					if(cache !== appVersion) {
						console.info('Deleting Old cache', cache)
						return caches.delete(cache);
					}
				})
				)
		})
		)
	return self.clients.claim();
})

// Fetch
self.addEventListener('fetch', event=> {
	console.info('SW fetch', event.request.url);
	event.respondWith(
		caches.match(event.request)
		.then(res => {
			return res || fetch(event.request);
		})
		)
})