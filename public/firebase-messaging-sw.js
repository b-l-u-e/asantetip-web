importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js');



firebase.initializeApp({
    apiKey: "AIzaSyAKCMoPVXq9r1hsiD2O8Uh9fHzRamxj62A",
    authDomain: "swiftciti-70ca4.firebaseapp.com",
    projectId: "swiftciti-70ca4",
    storageBucket: "swiftciti-70ca4.appspot.com",
    messagingSenderId: "144675613756",
    appId: "1:144675613756:web:d1fce9a37acd2140b2a739",
    measurementId: "G-F99G9R2PP8"
});

const vapidKey = "BBQ8ZsKquAtd2ePsCYUmH216VTwNb4NDxSKnUfpv26X5xu_rZ45-luLNz66ayH8Vrl4tE2EM2gI6N6mJW2Xcg-g";
const messaging = firebase.messaging();
messaging.usePublicVapidKey(vapidKey);


messaging.onBackgroundMessage((payload) => {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: '/firebase-logo.png'
  };

  // self.registration.showNotification(notificationTitle,
  //   notificationOptions);
});

