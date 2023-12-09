window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true
});


import Echo from "laravel-echo"
window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    // cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    wsHost: window.location.hostname,
    wsPort: 6001,
    disableStats: true,
    forceTLS: false
});


window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    wsHost: window.location.hostname,
    wsPort: 6001,
    // wssPort: 6001,
    forceTLS: false,
    // encrypted: true,
    disableStats: true,
    auth: { headers: { Authorization: 'Bearer sometoken' } },
    authEndpoint: `http://${window.location.hostname}/api/broadcasting/auth`, // OR
  })





import Echo from 'laravel-echo'
window.Pusher = require('pusher-js');

const testToken = '119|OcNOGdKuQD3V42fZlasaWl7LhBcf3TZfEMYYyVNv'
const pusher = new Pusher(process.env.MIX_PUSHER_APP_KEY, {
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    wsHost: process.env.MIX_PUSHER_APP_HOST,
    wssPort: 6001,
    wsPort: 6001,
    enabledTransports: ['ws', 'wss'],
    disableStats: false,
    forceTLS: false,
    userAuthentication: {
        endpoint: "api/broadcasting/auth",
        transport: "ajax",
        // params: {},
        headers: {
            headers: { 
                Authorization: 'Bearer ' + testToken 
            } 
        },
        // customHandler: null,
    },
});

Pusher.logToConsole = true;

pusher.bind('state_change', states => {
    console.log(states)
});

pusher.bind('connected', () => {
    console.log("Connected")
});

pusher.bind('disconnected', () => {
    console.log("Disconnected")
});

pusher.bind('error', event => {
    console.log(event)
});

const channel = pusher.subscribe('balance-updated')
channel.bind('status.changed', ({ data }) => {
    console.log(data)
})