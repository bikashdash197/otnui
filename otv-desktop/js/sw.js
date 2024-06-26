var appVersion ='v1.00';

// File to Cache
var files = [
'/',
'https://fonts.googleapis.com/css2?family=Faustina:wght@400;600&family=Open+Sans&display=swap'
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